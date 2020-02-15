<?php

namespace app\user\controller;

use think\Controller;
use think\Request;

class Index extends Filter
{
    public function index()
    {
        return $this->fetch();
    }


    public function menu()
    {
        return $this->fetch();
    }


    public function nav()
    {
        return $this->fetch();
    }


    public function download()
    {
        return $this->fetch();
    }


    /**
     * 下载上号器
     */
    public function downloadLoader()
    {
        $path = 'statics/download/njshq.exe';
        $file = fopen($path, "r");
        header("Content-Type: application/octet-stream");
        header("Accept-Ranges: bytes");
        header("Accept-Length: " . filesize($path));
        header("Content-Disposition: attachment; filename=柠吉租号登号器.exe");
        echo fread($file, filesize($path));
        fclose($file);
    }


    /**
     * 上号器帮助
     * @return mixed
     */
    public function loaderHelp()
    {
        return $this->fetch();
    }

    /**
     * 视频播放器
     * @return mixed
     */
    public function videoPlay()
    {

        $data = input();

        if (!Request::instance()->has('id', 'param')) {
            $this->error('参数错误');
        }

        switch ($data['id']) {
            case '1':
                $videoInfo = [
                    'title' => '请打开声音观看',
                    'images' => '1.jpg',
                    'video' => '1.mp4',
                ];
                break;

            case '2':
                $videoInfo = [
                    'title' => '登号器使用方法-柠吉租号',
                    'images' => '2.jpg',
                    'video' => '2.mp4',
                ];
                break;
            default:
                $this->error('无效参数');
                break;
        }

        $this->assign('videoInfo', $videoInfo);

        return $this->fetch();
    }

}