<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:54
 */

namespace app\user\controller;

use app\user\model\Categories;
use app\user\model\Company;
use app\user\model\Depart;
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
        if (request()->isAjax()) {


            $employee = Company::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Company::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }


    public function addCompany()
    {
        if (request()->isPost()) {

            $data = input();


            $w = new Company;
            $w->name = $data['name'];
            $w->type = $data['type'];
            $w->contacts = $data['contacts'];
            $w->phone = $data['phone'];
            $w->fax = $data['fax'];
            $w->email = $data['email'];


            $w->bank = $data['bank'];
            $w->bankaccount = $data['bankaccount'];
            $w->tariff = $data['tariff'];
            $w->area = $data['area'];
            $w->province = $data['province'];
            $w->city = $data['city'];
            $w->address = $data['address'];
            $w->zipcode = $data['zipcode'];
            $w->remark = $data['remark'];


            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/exchange_unit_management');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }

    }


    public function sectorManagement()
    {
        if (request()->isAjax()) {


            $employee = Depart::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Depart::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }


    public function addDepart()
    {

        if (request()->isPost()) {

            $data = input();


            $w = new Depart;
            $w->name = $data['name'];
            $w->major = $data['major'];
            $w->phone = $data['phone'];


            $w->remark = $data['remark'];


            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/sector_management');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }


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
        if (request()->isAjax()) {


            $employee = Categories::all();


            $result = [
                "code" => 0,
                "msg" => "",
                "count" => Categories::count(),
                "data" => $employee
            ];

            return $result;

        } else {

            return $this->fetch();

        }
    }


    public function addCategories()
    {

        if (request()->isPost()) {

            $data = input();


            $w = new Categories;
            $w->name = $data['name'];
            $w->type = $data['type'];
            $w->cost = $data['cost'];

            $w->user = $this->getUserName();
            if ($w->save()) {
                $this->redirect('/come_enter_lib_set');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }


    }


}