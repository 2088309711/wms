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


            $type = ['经销商', '供应商'];
            foreach ($employee as $i) {
                $i['type'] = $type[$i['type']];
            }


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

            $data['user'] = $this->getUserName();

            $w = new Company($data);
            if ($w->allowField(true)->save()) {
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

            $sex = ['男', '女'];
            foreach ($employee as $i) {
                $i['sex'] = $sex[$i['sex']];
                $i['depart'] = $i->depart_->name;
            }

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


            $data['user'] = $this->getUserName();
            $w = new Employee($data);
            if ($w->allowField(true)->save()) {
                $this->redirect('/staff_management');
            } else {
                $this->error('添加失败');
            }

        } else {


            $d = Depart::all(['user' => $this->getUserName()]);

            $this->assign('depart', $d);

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


            $cost = ['不参与', '参与'];
            $type = ['出库', '入库'];
            foreach ($employee as $i) {
                $i['cost'] = $cost[$i['cost']];
                $i['type'] = $type[$i['type']];
            }


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

            $data['cost'] = input('?cost') ? 1 : 0;

            $data['user'] = $this->getUserName();
            $w = new Categories($data);
            if ($w->allowField(true)->save()) {
                $this->redirect('/come_enter_lib_set');
            } else {
                $this->error('添加失败');
            }

        } else {

            return $this->fetch();
        }


    }


}