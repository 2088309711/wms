<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/17 0017
 * Time: 4:03
 */

namespace app\user\model;


use think\Model;

class Product extends Model
{
    public function measureunit()
    {
        return $this->hasOne('Measureunit', 'id', 'unit')->field('name');
    }


    public function itemclassify()
    {
        return $this->hasOne('Itemclassify', 'node', 'type')->field('name');
    }


}