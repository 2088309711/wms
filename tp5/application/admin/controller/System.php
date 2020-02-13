<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/12/25 0025
 * Time: 13:47
 */

namespace app\admin\controller;


use think\Controller;

class System extends Controller
{


    public function index()
    {
        return $this->fetch();
    }


    /**
     * 系统参数设置
     */
    public function systemParamSet()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function pseudoStaticParamSet()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function dynamicPageCacheSet()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function diggTopSet()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function extendedVariables()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function securityParamConfig()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function websiteFirewall()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function dataUpdateCenter()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function updateInfoPageAddress()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function updateDynamicPageCache()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function dataCollation()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function remotePublish()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function newDataTable()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function managementDataSheet()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function manageRefreshTasks()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function manageScheduledTasks()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function addWorkflow()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function manageWorkflow()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function managementOptimizationPlan()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function manageSiteVisitors()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function managementMenu()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function backupData()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function restoreData()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function manageBackupDirectories()
    {
        return $this->fetch();
    }


    /**
     *
     */
    public function executeSqlStatement()
    {
        return $this->fetch();
    }


}