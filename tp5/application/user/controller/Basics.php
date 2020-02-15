<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:54
 */

namespace app\user\controller;

use app\user\model\Employee;
use app\user\model\Warehouse;
use think\Controller;

class Basics extends Filter
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
        if (request()->isAjax()) {


            $employee = Employee::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Employee::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }


    public function addStaff()
    {

        if (request()->isPost()) {

            $data = input();


            $w = new Employee;
            $w->name = $data['name'];
            $w->sex = $data['sex'];
            $w->phone = $data['phone'];
            $w->address = $data['address'];
            $w->post = $data['post'];
            $w->depart = $data['depart'];
            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/staff_management');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }


    }


    /**
     * 管理仓库
     * @return array|mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function warehouse()
    {


        if (request()->isAjax()) {


            $tw = Warehouse::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Warehouse::count(),
                "data" => $tw
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }

    /**
     * 添加仓库
     * @return mixed
     */
    public function addWarehouse()
    {

        if (request()->isPost()) {

            $data = input();


            $w = new Warehouse;
            $w->name = $data['name'];
            $w->principal = $data['principal'];
            $w->phone = $data['phone'];
            $w->address = $data['address'];
            $w->remark = $data['remark'];
            $w->phone_principal = $data['phone_principal'];
            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/warehouse');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }

    }


    public function comeEnterLibSet()
    {
        return $this->fetch();
    }


}