<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/16 0016
 * Time: 20:50
 */

namespace app\user\view\代码\套装\添加数据;


class Add
{


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


}