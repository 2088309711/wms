<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:52
 */

namespace app\user\controller;


use app\user\model\Measureunit;
use app\user\model\Product;
use think\Controller;

class Quality extends Filter
{

    public function index()
    {
        return $this->fetch();
    }

    public function sortManagement()
    {
        return $this->fetch();
    }

    public function qualityManagement()
    {
        if (request()->isAjax()) {


            $employee = Product::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Product::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }


    public function addQuality()
    {
        if (request()->isPost()) {

            $data = input();


            $w = new Product;
            $w->name = $data['name'];


            $w->type = $data['type'];
            $w->encode = $data['encode'];
            $w->barcode = $data['barcode'];
            $w->size = $data['size'];
            $w->unit = $data['unit'];
            $w->upperlimit = $data['upperlimit'];
            $w->lowerlimit = $data['lowerlimit'];
            $w->inprice = $data['inprice'];
            $w->outprice = $data['outprice'];
            $w->tupian = $data['tupian'];
            $w->abstract = $data['abstract'];
            $w->remark = $data['remark'];


            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/quality_management');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }

    }

    public function unitManagement()
    {
        if (request()->isAjax()) {


            $employee = Measureunit::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Measureunit::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }


    public function addMeasureunit()
    {

        if (request()->isPost()) {

            $data = input();

            $w = new Measureunit;
            $w->name = $data['name'];
            $w->remark = $data['remark'];

            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/unit_management');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }


    }


}