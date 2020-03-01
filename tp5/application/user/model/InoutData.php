<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/24 0024
 * Time: 11:24
 */

namespace app\user\model;


use think\Model;

class InoutData extends Model
{
    public function product()
    {
        return $this->hasOne('Product', 'id', 'product_id');
    }


    public function warehouseData()
    {
        return $this->hasOne('WarehouseData', 'product_id', 'product_id');
    }

    public function warehouse2()
    {
        return $this->hasOne('Warehouse', 'id', 'warehouse');
    }

}