<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/16 0016
 * Time: 20:51
 */

namespace app\user\view\代码\套装\数据列表;


class List_
{


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


}