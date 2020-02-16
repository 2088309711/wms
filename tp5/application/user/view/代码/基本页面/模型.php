<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/15 0015
 * Time: 16:50
 */

/*
 * 新增
 */
$user = new User;
$user->name = 'thinkphp';
$user->email = 'thinkphp@qq.com';
$user->save();