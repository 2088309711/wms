<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/5 0005
 * Time: 21:58
 */

namespace app\admin\controller;


use app\admin\model\Enewsclass;
use app\admin\model\Enewstable;
use think\Cache;
use think\Controller;
use think\Db;

class Storeroom extends Controller
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
        return $this->fetch();
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