<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:54
 */

namespace app\admin\controller;

use think\Controller;

class Basics extends Controller
{

    public function index()
    {
        return $this->fetch();
    }

    public function exchangeUnitManagement()
    {
        return $this->fetch();
    }

    public function sectorSetup()
    {
        return $this->fetch();
    }

    public function staffManagement()
    {
        return $this->fetch();
    }

    public function warehouse()
    {
        return $this->fetch();
    }

    public function comeEnterLibSet()
    {
        return $this->fetch();
    }


}