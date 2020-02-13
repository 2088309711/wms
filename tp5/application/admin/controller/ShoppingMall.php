<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 14:03
 */

namespace app\admin\controller;


use think\Controller;

class ShoppingMall extends Controller
{

    public function index()
    {
        return $this->fetch();
    }


    public function allOrder()
    {
        return $this->fetch();
    }


    public function undeliveredOrder()
    {
        return $this->fetch();
    }


    public function orderInStock()
    {
        return $this->fetch();
    }


    public function orderShipped()
    {
        return $this->fetch();
    }


    public function returnOrder()
    {
        return $this->fetch();
    }


    public function discountCode()
    {
        return $this->fetch();
    }

    public function managePaymentMethod()
    {
        return $this->fetch();
    }

    public function manageDeliveryMethod()
    {
        return $this->fetch();
    }

    public function mallParamSet()
    {
        return $this->fetch();
    }

}