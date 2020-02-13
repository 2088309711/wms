<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\php-workspace\wms/tp5/application/admin\view\system\index.html";i:1577255094;s:57:"D:\php-workspace\wms\tp5\application\admin\view\base.html";i:1581609965;s:63:"D:\php-workspace\wms\tp5\application\admin\view\nav_system.html";i:1577263659;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>柠吉CMS</title>
    <link rel="stylesheet" href="/statics/layui/css/layui.css">
    <style>
        #nav-switch {
            width: 45px;
            height: 45px;
            position: absolute;
            top: 0;
            left: 200px;
            padding: 15px 0 0 15px;
        }

        #nav-switch i {
            font-size: 30px;
            color: #bdbec0;
        }
    </style>

    

</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <a href="/index.php/admin" title="后台主页">
            <div class="layui-logo" style="color: #fff; font-weight: bold;">柠吉仓库管理系统</div>
        </a>
        <div id="nav-switch">
            <i class="layui-icon layui-icon-shrink-right"></i>
        </div>


        <ul class="layui-nav layui-layout-left" style="left:260px;">
            <li class="layui-nav-item"><a href="/index.php/menu">
                <i class="layui-icon layui-icon-app"></i> 功能</a></li>
            <li class="layui-nav-item"><a href="/index.php/system">
                <i class="layui-icon layui-icon-console"></i> 系统</a></li>
            <li class="layui-nav-item"><a href="/index.php/Storeroom">
                <i class="layui-icon layui-icon-form"></i> 仓库</a></li>
            <li class="layui-nav-item"><a href="/index.php/quality">
                <i class="layui-icon layui-icon-tabs"></i> 货品</a></li>
            <li class="layui-nav-item"><a href="/index.php/repertory">
                <i class="layui-icon layui-icon-template"></i> 库存</a></li>
            <li class="layui-nav-item"><a href="/index.php/user_manage">
                <i class="layui-icon layui-icon-user"></i> 用户</a></li>
            <li class="layui-nav-item"><a href="/index.php/plug_in">
                <i class="layui-icon layui-icon-component"></i> 插件</a></li>
            <li class="layui-nav-item"><a href="/index.php/shopping_mall">
                <i class="layui-icon layui-icon-cart"></i> 商城</a></li>
            <li class="layui-nav-item"><a href="/index.php/other">
                <i class="layui-icon layui-icon-util"></i> 其他</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-username"></i>
                    用户名
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="/index.php/update_user_data">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
        </ul>
    </div>

    <div id="main-nav" data-switch="1" class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item">
    <a class="" href="javascript:;">系统设置</a>
    <dl class="layui-nav-child">

        <dd><a href="/index.php/system_param_set">系统参数设置</a></dd>
        <dd><a href="/index.php/pseudo_static_param_set">伪静态参数设置</a></dd>
        <dd><a href="/index.php/dynamic_page_cache_set">动态页缓存设置</a></dd>
        <dd><a href="/index.php/digg_top_set">DIGG顶设置</a></dd>
        <dd><a href="/index.php/extended_variables">扩展变量</a></dd>
        <dd><a href="/index.php/security_param_config">安全参数配置</a></dd>
        <dd><a href="/index.php/website_firewall">网站防火墙</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">数据更新</a>
    <dl class="layui-nav-child">


        <dd><a href="/index.php/data_update_center">数据更新中心</a></dd>
        <dd><a href="/index.php/update_info_page_address">更新信息页地址</a></dd>
        <dd><a href="/index.php/update_dynamic_page_cache">更新动态页缓存</a></dd>
        <dd><a href="/index.php/data_collation">数据整理</a></dd>
        <dd><a href="/index.php/remote_publish">远程发布</a>
        </dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">数据表与系统模型</a>
    <dl class="layui-nav-child">

        <dd><a href="/index.php/new_data_table">新建数据表</a></dd>
        <dd><a href="/index.php/management_data_sheet">管理数据表</a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">计划任务</a>
    <dl class="layui-nav-child">


        <dd><a href="/index.php/manage_refresh_tasks">管理刷新任务</a></dd>


        <dd><a href="/index.php/manage_scheduled_tasks">管理计划任务</a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">工作流</a>
    <dl class="layui-nav-child">

        <dd><a href="/index.php/add_workflow">增加工作流</a></dd>
        <dd><a href="/index.php/manage_workflow">管理工作流</a></dd>


    </dl>
</li>


<li class="layui-nav-item"><a href="/index.php/management_optimization_plan">管理优化方案</a></li>


<li class="layui-nav-item"><a href="/index.php/manage_site_visitors">管理网站访问端</a></li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">扩展菜单</a>
    <dl class="layui-nav-child">

        <dd><a href="/index.php/management_menu">管理菜单</a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a class="" href="javascript:;">备份与恢复数据</a>
    <dl class="layui-nav-child">


        <dd><a href="/index.php/backup_data">备份数据</a></dd>
        <dd><a href="/index.php/restore_data">恢复数据</a></dd>
        <dd><a href="/index.php/manage_backup_directories">管理备份目录</a></dd>


        <dd><a href="/index.php/execute_sql_statement">执行SQL语句</a></dd>


    </dl>
</li>


            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray" style="bottom:0;">
        
<div id="main-content" class="layui-body" style="bottom:0;">system</div>

    </div>

</div>

<script src="/statics/layui/layui.js"></script>
<script>
    $ = null;

    function fold_nav(operation) {
        // alert(operation)
        var icon = $('#nav-switch').children('i'), nav = $('#main-nav'), content = $('#main-content');
        switch (operation) {
            case 'open':
                nav.data('switch', 1);
                content.animate({'left': 200});
                nav.animate({'left': 0, opacity: 1});
                icon.removeClass('layui-icon-spread-left').addClass('layui-icon-shrink-right');
                break;
            case 'close':
                nav.data('switch', 0);
                content.animate({'left': 0});
                nav.animate({'left': -200, opacity: 0});
                icon.removeClass('layui-icon-shrink-right').addClass('layui-icon-spread-left');
                break;
        }
    }


    layui.use(['element', 'jquery'], function () {
        var element = layui.element;
        $ = layui.jquery;
        $(function () {
            $('#nav-switch').click(function () {
                $('#main-nav').data('switch') == 1 ? fold_nav('close') : fold_nav('open');
            });
            execute_event();
        })
    });
</script>

</body>
</html>