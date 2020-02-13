<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/26 0026
 * Time: 15:07
 */

namespace app\red_pack\validate;


use think\Validate;

class RedPack extends Validate
{

    protected $rule = [
        'id' => 'require|number',
        'phone' => 'require|length:11|number',
        'num' => 'require|number',
    ];


    protected $message = [
        'phone.require' => '手机号必填',
        'phone.length' => '请输入11位手机号',
        'phone.number' => '请正确输入手机号',
        'id.require' => '编号必填',
        'id.number' => '请正确输入编号',
    ];

    protected $scene = [
        'ck_id' => ['id'],
        'ck_phone' => ['phone'],
        'update' => ['id', 'num'],
    ];


}