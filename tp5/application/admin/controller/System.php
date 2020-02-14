<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:47
 */

namespace app\admin\controller;


use think\Controller;

class System extends Controller
{


    public function index()
    {
        return $this->fetch();
    }


    /**
     * 系统参数设置
     */
    public function operationalUserManagement()
    {
        return $this->fetch();
    }

    public function updatePassword()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function dataBackup()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function reductionOfData()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function operatingLog()
    {
        return $this->fetch();
    }


}