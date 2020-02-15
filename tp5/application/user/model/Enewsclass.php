<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/26 0026
 * Time: 15:37
 */

namespace app\user\model;

use think\Model;
use traits\model\SoftDelete;

class Enewsclass extends Model
{


    use SoftDelete;
    protected $deleteTime = 'delete_time';

    protected $pk = 'classid';

    public function add($data)
    {

        $this->phone = $data['phone'];
        $this->num = $data['num'];
        $time = time();
        $this->s_date = $time;
        $this->e_date = $time + (60 * 60 * 24 * 365);//增加一年
        return !!$this->save();

    }


    public function _update($data)
    {
        return !!$this->save(['num' => $data['num'],], ['id' => $data['id']]);
    }


}