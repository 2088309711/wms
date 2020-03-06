<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件





function halt_clean($var)
{
    halt(json_decode(json_encode($var)));
}

/**
 * 时间戳转日期 Y-m-d
 * @param $time
 * @return false|string
 */
function time_to_str($time, $long = true)
{
    return date($long ? "Y-m-d H:i:s" : "Y-m-d", $time);
}


/**
 * 保留两位小数（不四舍五入）
 * @param $value
 */
function intval2($value)
{
    return intval($value * 100) / 100;
}


/**
 * 调试（控制台输出）
 * @param $data
 * @param bool $stop
 */
function debug($data, $stop = true)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
    if ($stop) die;
}
