<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:53
 */

namespace app\user\controller;


use think\Controller;

class Repertory extends Filter
{
    public function index()
    {
        return $this->fetch();
    }

    public function inventoryAllocation()
    {
        return $this->fetch();
    }

    public function inventoryAllocationDetails()
    {
        return $this->fetch();
    }

    public function inventoryDetails()
    {
        return $this->fetch();
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