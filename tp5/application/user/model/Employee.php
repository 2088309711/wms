<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/15 0015
 * Time: 20:43
 */

namespace app\user\model;


use think\Model;

class Employee extends Model
{
    public function depart_()
    {
        return $this->hasOne('Depart', 'id', 'depart')->field('name');
    }
}