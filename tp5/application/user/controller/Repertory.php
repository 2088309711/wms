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

                    $w = new Exchange();
                    $w->date = $data['date'];
                    $w->employee = $data['employee'];
                    $w->warehouse_from = $data['warehouse_from'];
                    $w->warehouse_to = $data['warehouse_to'];
                    $w->code = $data['code'];
                    $w->remark = $data['remark'];
                    $w->user = $this->getUserName();
                    if ($w->save()) {
                        $this->redirect('/inventory_allocation/2/' . $data['code']);
                    } else {
                        $this->error('操作失败');
                    }
                    break;


                case 2:


                    $data['product'] = json_decode($data['product']);

                    $userName = $this->getUserName();
                    $list = [];
                    foreach ($data['product'] as $i) {
                        $list[] = [
                            'product' => $i->value,
                            'code' => $data['code'],
                            'user' => $userName,
                        ];
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
                    return $this->fetch('inventory_allocation_1');
                    break;

                case 2:
                    return $this->fetch('inventory_allocation_2', ['code' => $data['code']]);
                    break;

                case 3:


                    if (request()->isAjax()) {


                        $employee = ExchangeData::all(['code' => $data['code']]);


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

    public function inventoryVerification()
    {
        return $this->fetch();
    }


}