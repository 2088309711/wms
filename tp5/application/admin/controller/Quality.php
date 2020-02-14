<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:52
 */

namespace app\admin\controller;


use think\Controller;

class Quality extends Controller
{

    public function index()
    {
        return $this->fetch();
    }

    public function sortManagement()
    {
        return $this->fetch();
    }

    public function informationManagement()
    {
        return $this->fetch();
    }


    public function addQuality()
    {
        return $this->fetch();
    }

    public function unitManagement()
    {
        return $this->fetch();
    }


}