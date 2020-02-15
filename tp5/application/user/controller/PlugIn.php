<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 14:00
 */

namespace app\user\controller;


use think\Controller;

class PlugIn extends Filter
{


    public function index()
    {
        return $this->fetch();
    }


    public function manageAdvertisingType()
    {
        return $this->fetch();
    }

    public function manageAdvertising()
    {
        return $this->fetch();
    }

    public function addVoting()
    {
        return $this->fetch();
    }

    public function manageVoting()
    {
        return $this->fetch();
    }

    public function manageLinkType()
    {
        return $this->fetch();
    }

    public function manageLink()
    {
        return $this->fetch();
    }

    public function manageMessageType()
    {
        return $this->fetch();
    }

    public function manageMessage()
    {
        return $this->fetch();
    }

    public function bulkDeleteMessage()
    {
        return $this->fetch();
    }

    public function manageFeedbackType()
    {
        return $this->fetch();
    }

    public function manageFeedbackField()
    {
        return $this->fetch();
    }

    public function manageInfoFeedback()
    {
        return $this->fetch();
    }

    public function manageAntiCollectionRandChar()
    {
        return $this->fetch();
    }

}