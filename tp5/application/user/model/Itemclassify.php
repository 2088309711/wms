<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/19 0019
 * Time: 21:49
 */

namespace app\user\model;


use think\Model;
use traits\model\SoftDelete;

class Itemclassify extends Model
{
    use SoftDelete;
    protected $deleteTime = 'delete_time';
}