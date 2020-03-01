<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/24 0024
 * Time: 11:24
 */

namespace app\user\model;


use think\Model;

class Inout extends Model
{
    public function warehouse2()
    {
        return $this->hasOne('Warehouse', 'id', 'warehouse');
    }

    public function categories()
    {
        return $this->hasOne('Categories', 'id', 'type');
    }

    public function company()
    {
        return $this->hasOne('Company', 'id', 'supplier');
    }

}