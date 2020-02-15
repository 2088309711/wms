<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/5 0005
 * Time: 21:58
 */

namespace app\user\controller;


use app\admin\model\Enewsclass;
use app\admin\model\Enewstable;
use app\admin\model\TableWarehouse;
use app\admin\model\TbInout;
use app\admin\model\TbProduct;
use app\admin\model\TestExchange;
use app\admin\model\TestInout;
use app\admin\model\TestReceipt;
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
        return $this->fetch();
    }


    public function outStorage()
    {
        return $this->fetch();
    }

    public function storageRecord()
    {


        if (request()->isAjax()) {


            $tt = TestInout::all();


            foreach ($tt as $item => $value) {


                $tp = TbProduct::get(['encode' => $value->item]);

                $tt[$item]->name = $tp->name;
                $tt[$item]->size = $tp->size;
                $tt[$item]->unit = $tp->unit;


                if ($value->type != 'none') {
                    $ti = TbInout::get($value->type);
                    $tt[$item]->type = $ti->name;


                    $tr = TestReceipt::get($value->receipt);
                    $tw = TableWarehouse::get($tr->warehouse);


                } else {
                    $tt[$item]->type = '仓库调拨';


                    $te = TestExchange::get($value->receipt);
                    $tw = TableWarehouse::get($te->warehouse);

                }
                $tt[$item]->warehouse = $tw->name;
            }

            $result = [
                "code" => 0,
                "msg" => "",
                "count" => TestInout::count(),
                "data" => $tt
            ];

            return $result;

        } else {

            return $this->fetch();

        }


    }

    public function storageQuery()
    {


        return $this->fetch();


    }


    public function getData()
    {

//        取得数据表
        $table = Enewstable::all();

        $info = Db::name('ecms_' . $table[0]['tbname'])->order('id desc')->limit(0, 30)->select();


        foreach ($info as $key => $item) {
            $info[$key]['newstime'] = time_to_str($item['newstime']);
        }


        $result = [
            "code" => 0,
            "msg" => "",
            "count" => Db::name('ecms_' . $table[0]['tbname'])->count(),
            "data" => $info
        ];

        return $result;

    }

}