<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/24 0024
 * Time: 11:12
 */

namespace app\user\controller;


use app\user\model\Enewsuser;
use app\user\model\User;
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


//            验证数据
            $validate = new Validate([
                '__token__' => 'require|token',
                'user_name' => 'require|alphaDash',
                'password' => 'require|alphaDash',
            ], [
                '__token__.require' => '令牌不存在',
                '__token__.token' => '令牌无效',
                'user_name.require' => '用户名不能为空',
                'user_name.alphaDash' => '用户名只能是字母和数字，下划线_及破折号-',
                'password.require' => '密码不能为空',
                'password.alphaDash' => '密码只能是字母和数字，下划线_及破折号-',
            ]);

            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }

            //查询数据
            $user = User::get(['user_name' => $data['user_name']]);

            if ($user != null) {//用户存在

                //验证密码是否正确
                if (self::encryption($data['password']) == $user->password) {//密码正确
                    Session::set('user_name', $data['user_name']);
                    $this->success('登录成功', '/user');
                } else {//密码错误
                    $this->error('密码错误');
                }

            } else {//无用户
                $this->error('用户不存在');
            }

        } else {
            return $this->fetch();
        }

    }


    public function register()
    {


        $data = input();


//        验证数据
        $validate = new Validate([
            '__token__' => 'require|token',
            'user_name' => 'require|alphaDash',
            'password' => 'require|alphaDash',
            'ck_password' => 'require|confirm:password',
            'agreement' => 'require|accepted',

        ], [
            '__token__.require' => '令牌不存在',
            '__token__.token' => '令牌无效',
            'username.require' => '用户名不能为空',
            'username.alphaDash' => '用户名只能是字母和数字，下划线_及破折号-',
            'password.require' => '密码不能为空',
            'password.alphaDash' => '密码只能是字母和数字，下划线_及破折号-',
            'ck_password.require' => '确认密码不能为空',
            'ck_password.confirm' => '两次输入的密码不一致',
            'agreement.require' => '请同意用户协议',
            'agreement.accepted' => '请同意用户协议',
        ]);

        if (!$validate->check($data)) {
            $this->error($validate->getError());
        }


        //检查用户名是否被注册
        $user = User::get(['user_name' => $data['user_name']]);
        if ($user != null) {
            $this->error('用户名已被注册');
        }


        //添加到数据库
        $user = new User();
        $user->user_name = $data['user_name'];
        $user->password = self::encryption($data['password']);
        if ($user->save()) {
            $this->success('注册成功');
        } else {
            $this->error('注册失败，请重试');
        }

    }


    private function encryption($password)
    {
        return sha1(crypt(md5($password), 'nj'));
    }


}