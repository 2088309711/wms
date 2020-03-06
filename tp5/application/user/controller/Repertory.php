<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:53
 */

namespace app\user\controller;


use app\user\model\Check;
use app\user\model\Exchange;
use app\user\model\ExchangeData;
use app\user\model\Product;
use app\user\model\TakeCheck;
use app\user\model\TakeCheckData;
use app\user\model\Warehouse;
use app\user\model\WarehouseData;
use think\Controller;

class Repertory extends Filter
{
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 库存调拨
     * @return mixed
     */
    public function inventoryAllocation()
    {

        $data = input();

        if (request()->isPost()) {


            switch ($data['step']) {

                case 1:
                    $data['user'] = $this->getUserName();
                    $w = new Exchange($data);
                    if ($w->allowField(true)->save()) {
                        $this->redirect('/inventory_allocation/2/' . $data['code']);
                    } else {
                        $this->error('操作失败');
                    }
                    break;

                case 2:

                    $userName = $this->getUserName();
                    $exchange = Exchange::get(['user' => $userName, 'code' => $data['code']]);

                    $data['product'] = json_decode($data['product']);

                    $list = [];
                    foreach ($data['product'] as $i) {

                        $temp = [
                            'product' => $i->value,
                            'code' => $data['code'],
                            'user' => $userName,
                        ];

                        if (ExchangeData::get($temp) == null) {
                            $temp['warehouse'] = $exchange->warehouse_from;
                            $list[] = $temp;
                        }
                    }

                    if (count($list) == 0) {
                        $this->redirect('/inventory_allocation/3/' . $data['code']);
                    }

                    $w = new ExchangeData();

                    if ($w->saveAll($list) != null) {
                        $this->redirect('/inventory_allocation/3/' . $data['code']);
                    } else {
                        $this->error('操作失败');
                    }

                    break;

            }

        } else {

            switch ($data['step']) {
                case 1:

                    $warehouse = Warehouse::all(['user' => $this->getUserName()]);

                    return $this->fetch('inventory_allocation_1', ['warehouse' => $warehouse]);
                    break;

                case 2:


                    $exchange = Exchange::get(['code' => $data['code'], 'user' => $this->getUserName()]);


                    $wd = WarehouseData::all(['warehouse' => $exchange->warehouse_from, 'user' => $this->getUserName()]);


                    $pids = [];
                    foreach ($wd as $i) {
                        $pids[] = $i->product_id;
                    }


                    $str = '[';
                    if (count($pids) > 0) {
                        $p = Product::all($pids);
                        foreach ($p as $i) {
                            $str .= '{"value": "' . $i->id . '", "title": "' . $i->name . '"},';
                        }
                    }
                    $str .= ']';


                    $this->assign('product', $str);

                    return $this->fetch('inventory_allocation_2', ['code' => $data['code']]);
                    break;

                case 3:


                    if (request()->isAjax()) {


                        $employee = ExchangeData::all(['code' => $data['code']]);


                        foreach ($employee as $i) {
                            $i->product = $i->product2->name;
//                            $i->inprice = $i->product2->inprice;
                        }

                        $result = [
                            "code" => 0,
                            "msg" => "",
                            "count" => ExchangeData::where('code', $data['code'])->count(),
                            "data" => $employee
                        ];

                        return $result;

                    } else {

                        return $this->fetch('inventory_allocation_3', ['code' => $data['code']]);

                    }


                    break;


                case 'ajax'://单元行编辑


                    $ed = new ExchangeData;

                    if ($ed->save([$data['field'] => $data['value']], ['id' => $data['id']])) {
                        $this->success('修改成功');
                    } else {
                        $this->error('修改失败');
                    }


            }


        }
    }

    public function inventoryAllocationDetails()
    {
        if (request()->isAjax()) {


            $employee = Exchange::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Exchange::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }

    public function inventoryDetails()
    {
        if (request()->isAjax()) {


            $employee = Check::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Check::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }

    public function inventoryQuery()
    {
        return $this->fetch();
    }


    /**
     * 库存盘点
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function inventoryVerification()
    {

        $data = input();

        if (request()->isPost()) {


            $w = new TakeCheck();
            $w->date = $data['date'];
            $w->employee = $data['employee'];
            $w->warehouse = $data['warehouse'];
            $w->code = $data['code'];
            $w->remark = $data['remark'];
            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/inventory_verification/2/' . $data['code']);
            } else {
                $this->error('操作失败');
            }


        } else {

            switch ($data['step']) {
                case 1:
                    return $this->fetch('inventory_verification_1');
                    break;


                case 2:


                    if (request()->isAjax()) {


                        //  ['code' => $data['code']]


                        $employee = TakeCheckData::all();


                        $result = [
                            "code" => 0,
                            "msg" => "",
                            "count" => TakeCheckData::count(),
                            "data" => $employee
                        ];

                        return $result;

                    } else {

                        return $this->fetch('inventory_verification_2', ['code' => $data['code']]);

                    }


                    break;


                case 'ajax'://单元行编辑


                    $ed = new TakeCheckData;

                    if ($ed->save([$data['field'] => $data['value']], ['id' => $data['id']])) {
                        $this->success('修改成功');
                    } else {
                        $this->error('修改失败');
                    }


            }


        }
    }


}