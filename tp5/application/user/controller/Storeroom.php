<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/5 0005
 * Time: 21:58
 */

namespace app\user\controller;


use app\user\model\Enewsclass;
use app\user\model\Enewstable;
use app\user\model\Inout;
use app\user\model\InoutData;
use app\user\model\TableWarehouse;
use app\user\model\TbInout;
use app\user\model\TbProduct;
use app\user\model\TestExchange;
use app\user\model\TestInout;
use app\user\model\TestReceipt;
use think\Cache;
use think\Controller;
use think\Db;

class Storeroom extends Filter
{

    public function index()
    {
        return $this->fetch();
    }

    public function inStorage()
    {

        $data = input();

        if (request()->isPost()) {


            switch ($data['step']) {

                case 1:


                    $data['user'] = $this->getUserName();


                    $w = new Inout($data);
                    if ($w->allowField(true)->save()) {
                        $this->redirect('/in_storage/2/' . $data['code']);
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
                            'product_id' => $i->value,
                            'code' => $data['code'],
                            'user' => $userName,
                        ];
                    }


                    $w = new InoutData();

                    if ($w->saveAll($list) != null) {
                        $this->redirect('/in_storage/3/' . $data['code']);
                    } else {
                        $this->error('操作失败');
                    }


                    break;


            }


        } else {

            switch ($data['step']) {
                case 1:
                    return $this->fetch('in_storage_1');
                    break;

                case 2:
                    return $this->fetch('in_storage_2', ['code' => $data['code']]);
                    break;

                case 3:


                    if (request()->isAjax()) {


                        $employee = InoutData::all(['code' => $data['code']]);


                        $result = [
                            "code" => 0,
                            "msg" => "",
                            "count" => InoutData::where('code', $data['code'])->count(),
                            "data" => $employee
                        ];

                        return $result;

                    } else {

                        return $this->fetch('in_storage_3', ['code' => $data['code']]);

                    }


                    break;


                case 'ajax'://单元行编辑


                    $ed = new InoutData;

                    if ($ed->save([$data['field'] => $data['value']], ['id' => $data['id']])) {
                        $this->success('修改成功');
                    } else {
                        $this->error('修改失败');
                    }


            }


        }
    }


    public function outStorage()
    {
        $data = input();

        if (request()->isPost()) {


            switch ($data['step']) {

                case 1:


                    $data['user'] = $this->getUserName();


                    $w = new Inout($data);
                    if ($w->allowField(true)->save()) {
                        $this->redirect('/out_storage/2/' . $data['code']);
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
                            'product_id' => $i->value,
                            'code' => $data['code'],
                            'user' => $userName,
                        ];
                    }


                    $w = new InoutData();

                    if ($w->saveAll($list) != null) {
                        $this->redirect('/out_storage/3/' . $data['code']);
                    } else {
                        $this->error('操作失败');
                    }


                    break;


            }


        } else {

            switch ($data['step']) {
                case 1:
                    return $this->fetch('out_storage_1');
                    break;

                case 2:
                    return $this->fetch('out_storage_2', ['code' => $data['code']]);
                    break;

                case 3:


                    if (request()->isAjax()) {


                        $employee = InoutData::all(['code' => $data['code']]);


                        $result = [
                            "code" => 0,
                            "msg" => "",
                            "count" => InoutData::where('code', $data['code'])->count(),
                            "data" => $employee
                        ];

                        return $result;

                    } else {

                        return $this->fetch('out_storage_3', ['code' => $data['code']]);

                    }


                    break;


                case 'ajax'://单元行编辑


                    $ed = new InoutData;

                    if ($ed->save([$data['field'] => $data['value']], ['id' => $data['id']])) {
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


            $tt = InoutData::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => InoutData::count(),
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


            $tt = Inout::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Inout::count(),
                "data" => $tt
            ];

            return $result;

        } else {

            return $this->fetch();

        }


    }


}