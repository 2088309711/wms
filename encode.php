<?php

/**
 * 文件编码转换
 */

define('THIS_FILE', __FILE__); // 此文件路径，请勿修改，将跳过此文件
define('THIS_PATH', dirname(THIS_FILE)); // 当前路径，可修改
define('Cover', true); // 是否直接覆盖本文件（改为 true 不加单引号，危险），建议写入其他地址（相对于当前路径）
define('DS', DIRECTORY_SEPARATOR); // Linux改为'/'，Windows为'\\'
define('ICONV', 'UTF-8'); // 最终转换编码格式

function eachFile($path, $files = [])
{
    if (Cover !== true && $path == THIS_PATH . DS . Cover) {
        return $files;
    }
    if (preg_match("/[\x7f-\xff]/", $path)) {
        $path = iconv('UTF-8', 'GBK', $path);
    }
    if (is_file($path)) {
        $files[] = $path;
        return $files;
    }
    $list = scandir($path);
    foreach ($list as $k => $v) {
        if ($v !== '.' && $v !== '..') {
            $p = $path . DS . $v;
            // 路径转码GBK
            if (preg_match("/[\x7f-\xff]/", $p)) {
                $p = iconv('UTF-8', 'GBK', $p);
            }
            if (is_dir($p)) {
                $files = eachFile($p, $files);
            } else {
                $files[] = $p;
            }
        }
    }
    return $files;
}

$files = eachFile(THIS_PATH);
foreach ($files as $k => $v) {
    $ext = pathinfo($v, PATHINFO_EXTENSION);
    if (in_array($ext, ['txt', 'php', 'css', 'js', 'htm', 'html'])) {
        if ($v == THIS_FILE) continue;
        // 获取内容并转码
        $contents_before = file_get_contents($v);
        $oldIconv = mb_detect_encoding($contents_before, ['ASCII', 'GB2312', 'GBK', 'UTF-8', 'BIG5']);
        $contents_after = iconv($oldIconv, ICONV, $contents_before);
        if (Cover !== true) {
            // 判断新文件夹是否存在
            $newPath = str_replace(THIS_PATH, THIS_PATH . DS . Cover, $v);
            if (!file_exists(dirname($newPath))) {
                mkdir(dirname($newPath), 0755, true);
            }
            // 覆盖写入文件（不存在自动创建）
            file_put_contents($newPath, $contents_after);
        } else {
            file_put_contents($v, $contents_after);
        }
        // 输出
        echo "{$v} 已转换<hr>";
    } else {
        $newPath = str_replace(THIS_PATH, THIS_PATH . DS . Cover, $v);
        if (Cover !== true && !file_exists($newPath)) {
            if (!file_exists(dirname($newPath))) {
                mkdir(dirname($newPath), 0755, true);
            }
            copy($v, $newPath);
            echo "{$v} 复制文件到新路径 {$newPath}<hr>";
        }
    }
}
