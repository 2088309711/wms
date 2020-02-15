<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/15 0015
 * Time: 18:42
 */


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
