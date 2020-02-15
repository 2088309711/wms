<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 14:04
 */

namespace app\user\controller;


use think\Controller;

class Other extends Filter
{

    public function index()
    {
        return $this->fetch();
    }

    public function sourceManageInfo()
    {
        return $this->fetch();
    }

    public function manageAuthor()
    {
        return $this->fetch();
    }

    public function manageContentKeywords()
    {
        return $this->fetch();
    }

    public function manageFilterChar()
    {
        return $this->fetch();
    }

    public function manageAddresPrefixe()
    {
        return $this->fetch();
    }

    public function deleteDownloadRecord()
    {
        return $this->fetch();
    }

    public function manageErrorReporting()
    {
        return $this->fetch();
    }

    public function batchReplaceAddresPermission()
    {
        return $this->fetch();
    }

    public function playerManage()
    {
        return $this->fetch();
    }

    public function paymentParamConfig()
    {
        return $this->fetch();
    }

    public function managePaymentInterface()
    {
        return $this->fetch();
    }

    public function managePaymentRecord()
    {
        return $this->fetch();
    }

    public function managePictureInfoType()
    {
        return $this->fetch();
    }

    public function managePictureInfo()
    {
        return $this->fetch();
    }


}