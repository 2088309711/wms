<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/5 0005
 * Time: 21:58
 */

namespace app\user\controller;


use app\user\model\Categories;
use app\user\model\Company;
use app\user\model\Inout;
use app\user\model\InoutData;
use app\user\model\Product;
use app\user\model\Warehouse;
use app\user\model\WarehouseData;


class Storeroom extends Filter
{

    public function index()
    {
        return $this->fetch();
    }


    /**
     * 仓库货品变更
     * @param $warehouseId 仓库ID
     * @param $productId 货品ID
     * @param $addNum 数量（仅新增）
     * @param $diff 差值（更新）
     * @param bool $add 变更模式，默认添加，false = 减少
     * @throws \think\exception\DbException
     */
    public function warehousing($warehouseId, $productId, $addNum, $diff, $add = true)
    {
        $userName = $this->getUserName();
        //查询货品是否已经登记
        $wd = WarehouseData::get(['product_id' => $productId, 'warehouse' => $warehouseId, 'user' => $userName]);
        if ($wd == null) {
            //新增
            $wd = new WarehouseData([
                'product_id' => $productId,
                'num' => $addNum,
                'warehouse' => $warehouseId,
                'user' => $userName,
            ]);
            if (!$wd->save()) {//新增失败，回滚任务
                $this->error('操作失败');
            }
        } else {
            //更新
            if ($add) {
                $wd->num += $diff;
            } else {
                $wd->num -= $diff;
            }
            if (!$wd->save()) {//更新失败，回滚任务
                $this->error('操作失败');
            }
        }
    }

    /**
     * 出入库合并
     */
    public function inOutStorage()
    {
        $data = input();
        $type_big = $data['func'];
        $userName = $this->getUserName();
        $inHtml = 'in_storage_';
        $outHtml = 'out_storage_';

        $autoHtml = $type_big == 1 ? $inHtml : $outHtml;
        $autoHtmlStep = ($type_big == 1 ? $inHtml : $outHtml) . $data['step'];


        $inOutStorageUrl = '/in_out_storage/' . $type_big . '/';

        if (request()->isPost()) {


            switch ($data['step']) {

                case 1:

                    //查询单号是否存在
                    if (Inout::get(['code' => $data['code'], 'user' => $userName, 'type_big' => $type_big]) != null) {
                        $this->error('单号已经存在');
                    }

                    $data['type_big'] = $type_big;
                    $data['user'] = $userName;
                    $w = new Inout($data);
                    if ($w->allowField(true)->save()) {
                        $this->redirect($inOutStorageUrl . '2/' . $data['code']);
                    } else {
                        $this->error('操作失败');
                    }


                    break;


                case 2:


                    $data['product'] = json_decode($data['product']);


                    $inout = Inout::get(['user' => $userName, 'code' => $data['code'], 'type_big' => $type_big]);


                    $list = [];
                    foreach ($data['product'] as $i) {
                        //过滤已存在的数据

                        $temp = [
                            'product_id' => $i->value,
                            'code' => $data['code'],
                            'type_big' => $type_big,
                            'user' => $userName,
                        ];

                        if (InoutData::get($temp) == null) {
                            $temp['warehouse'] = $inout->warehouse;
                            $list[] = $temp;
                        }

                    }

                    if (count($list) == 0) {
                        $this->redirect($inOutStorageUrl . '3/' . $data['code']);
                    }

                    $w = new InoutData();

                    if ($w->saveAll($list) != null) {
                        $this->redirect($inOutStorageUrl . '3/' . $data['code']);
                    } else {
                        $this->error('操作失败');
                    }
                    break;
            }
        } else {

            switch ($data['step']) {
                case 1:

                    $this->assign('company', Company::all(['user' => $userName, 'type' => ($type_big == 1 ? 1 : 0)]));
                    $this->assign('warehouse', Warehouse::all(['user' => $userName]));
                    $this->assign('categories', Categories::all(['user' => $userName, 'type' => ($type_big == 1 ? 0 : 1)]));

                    return $this->fetch($autoHtmlStep);

                    break;

                case 2:


                    $where = ['user' => $userName];
                    if ($type_big == 2) {
                        //获取仓库
                        $i = Inout::get(['user' => $userName, 'type_big' => $type_big, 'code' => $data['code']]);
                        //获取该仓库存放的货品
                        $wd = WarehouseData::all(['warehouse' => $i->warehouse, 'user' => $userName]);

                        //获取仓库资料
                        $war = Warehouse::get(['id' => $i->warehouse, 'user' => $userName]);

                        $this->assign('warname', $war->name);
                        //取出多个货品的ID

                        $pids = [];
                        foreach ($wd as $i) {
                            $pids[] = $i->product_id;
                        }

                        $where = $pids;

                    }

                    $p = Product::all($where);

                    $str = '[';
                    foreach ($p as $i) {
                        $str .= '{"value": "' . $i->id . '", "title": "' . $i->name . '"},';
                    }
                    $str .= ']';

                    $this->assign('product', $str);

                    return $this->fetch($autoHtmlStep, ['code' => $data['code']]);

                    break;

                case 3:

                    if (request()->isAjax()) {

                        $employee = InoutData::all(['code' => $data['code'], 'type_big' => $type_big, 'user' => $userName]);


                        foreach ($employee as $i) {
                            $i->product_name = $i->product->name;
                            $i->inprice = $i->product->inprice;
                        }


                        $result = [
                            "code" => 0,
                            "msg" => "",
                            "count" => InoutData::where('code', $data['code'])->count(),
                            "data" => $employee
                        ];


                        return $result;

                    } else {
                        return $this->fetch($autoHtmlStep);
                    }


                    break;


                case 'ajax'://单元行编辑


                    //如果是更新数量，取得上次的数量
                    $num = 0;
                    $diff = 0;
                    if ($data['field'] == 'num') {
                        $id = InoutData::get($data['id']);
                        if ($id->num != null) {
                            $num = $id->num;
                        }

                        //计算数量差值
                        $diff = $data['value'] - $num;
                    }


                    //修改入库明细
                    $ed = new InoutData;
                    $r1 = $ed->save([$data['field'] => $data['value']], ['id' => $data['id']]);


                    //如果是入库数量，同步到仓库存储
                    if ($data['field'] == 'num') {
                        $id = InoutData::get($data['id']);
                        $inout = Inout::get(['code' => $id->code, 'type_big' => $type_big, 'user' => $userName]);
//                        $wd = WarehouseData::get(['product_id' => $id->product_id, 'warehouse' => $inout->warehouse, 'user' => $userName]);


                        if ($type_big == 1) {
                            $this->warehousing($inout->warehouse, $id->product_id, $data['value'], $diff);
                        } else {
                            $this->warehousing($inout->warehouse, $id->product_id, $data['value'], $diff, false);
                        }


//                        if ($wd == null && $type_big == 1) {//该仓库没有该货品记录
//                            //新增
//                            $wd = new WarehouseData([
//                                'product_id' => $id->product_id,
//                                'num' => $data['value'],
//                                'warehouse' => $inout->warehouse,
//                                'user' => $userName,
//                            ]);
//                            if (!$wd->save()) {//新增失败，回滚任务
//                                $this->error('操作失败');
//                            }
//                        } else {
//                            //更新
//
//                            if ($type_big == 1) {
//                                $wd->num += $diff;
//                            } else {
//                                $wd->num -= $diff;
//                            }
//                            if (!$wd->save()) {//更新失败，回滚任务
//                                $this->error('操作失败');
//                            }
//
//
//                        }
                    }

                    if ($r1) {
                        $this->success('修改成功');
                    } else {
                        $this->error('修改失败');
                    }

            }
        }
    }


    public function storageRecord()
    {


        if (request()->isAjax()) {


            $tt = InoutData::all(['user' => $this->getUserName()]);


            foreach ($tt as $i) {
                $i->name = $i->product->name;
                $i->model2 = $i->product->model2;
                $i->size = $i->product->size;
                $i->warehouse = $i->warehouse2->name;
                $i->unit = $i->product->measureunit->name;
                $i->type_big = $i->type_big == 1 ? '入库' : '出库';
            }


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => InoutData::where('user', $this->getUserName())->count(),
                "data" => $tt
            ];

            return $result;

        } else {

            return $this->fetch();

        }


    }

    public function storageQuery()
    {


        if (request()->isAjax()) {

            $tt = Inout::all(['user' => $this->getUserName()]);


            foreach ($tt as $i) {
                $i->supplier = $i->company->name;
                $i->warehouse = $i->warehouse2->name;
                $i->type = $i->categories->name;
                $i->type_big = $i->type_big == 1 ? '入库' : '出库';
            }

            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Inout::where('user', $this->getUserName())->count(),
                "data" => $tt
            ];

            return $result;

        } else {

            return $this->fetch();

        }


    }


}