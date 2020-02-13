<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/24 0024
 * Time: 11:12
 */

namespace app\admin\controller;


use app\admin\model\Enewsuser;
use think\Controller;
use think\Db;
use think\Session;
use think\Validate;

class Login extends Controller
{


    public function index()
    {

        if (request()->isPost()) {


            $data = input();
            $data['password'] = '957cf0376175033f6928b9e9de1915d9';

//            验证数据
            $validate = new Validate([
                '__token__' => 'require|token',
                'username' => 'require|alphaDash',
                'password' => 'require|alphaDash',
            ], [
                '__token__.require' => '令牌不存在',
                '__token__.token' => '令牌无效',
                'username.require' => '用户名不能为空',
                'username.alphaDash' => '用户名只能是字母和数字，下划线_及破折号-',
                'password.require' => '密码不能为空',
                'password.alphaDash' => '密码只能是字母和数字，下划线_及破折号-',
            ]);

            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }

            //查询数据
            $user = Enewsuser::get([
                'username' => $data['username'],
                'password' => $data['password'],
            ]);

            if ($user != null) {//登录成功
                Session::set('username', $data['username']);
                Session::set('password', $data['password']);
                $this->success('登录成功');
            } else {//登录失败
                $this->error('用户名或密码错误');
            }

        } else {
            return $this->fetch();
        }

    }


}