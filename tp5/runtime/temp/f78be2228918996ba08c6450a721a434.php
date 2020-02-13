<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\php-workspace\MyCms/tp5/application/admin\view\plug_in\index.html";i:1577257406;s:59:"D:\php-workspace\MyCms\tp5\application\admin\view\base.html";i:1577428634;s:66:"D:\php-workspace\MyCms\tp5\application\admin\view\nav_plug_in.html";i:1577281773;}*/ ?>
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
            left: 140px;
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
            <div class="layui-logo" style="width:140px; color: #fff; font-weight: bold;">柠吉CMS</div>
        </a>
        <div id="nav-switch">
            <i class="layui-icon layui-icon-shrink-right"></i>
        </div>


        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="/index.php/menu">
                <i class="layui-icon layui-icon-app"></i> 功能</a></li>
            <li class="layui-nav-item"><a href="/index.php/system">
                <i class="layui-icon layui-icon-console"></i> 系统</a></li>
            <li class="layui-nav-item"><a href="/index.php/info">
                <i class="layui-icon layui-icon-form"></i> 信息</a></li>
            <li class="layui-nav-item"><a href="/index.php/class">
                <i class="layui-icon layui-icon-tabs"></i> 栏目</a></li>
            <li class="layui-nav-item"><a href="/index.php/template">
                <i class="layui-icon layui-icon-template"></i> 模板</a></li>
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
    <a href="javascript:;"> 广告系统 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_advertising_type"> 管理广告分类 </a></dd>
        <dd><a href="/index.php/manage_advertising"> 管理广告 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 投票系统 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/add_voting"> 增加投票 </a></dd>
        <dd><a href="/index.php/manage_voting"> 管理投票 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 友情链接管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_link_type"> 管理友情链接分类 </a></dd>
        <dd><a href="/index.php/manage_link"> 管理友情链接 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 留言板管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_message_type"> 管理留言分类 </a></dd>
        <dd><a href="/index.php/manage_message"> 管理留言 </a></dd>
        <dd><a href="/index.php/bulk_delete_message"> 批量删除留言 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 信息反馈管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_feedback_type"> 管理反馈分类 </a></dd>
        <dd><a href="/index.php/manage_feedback_field"> 管理反馈字段 </a></dd>
        <dd><a href="/index.php/manage_info_feedback"> 管理信息反馈 </a></dd>


    </dl>
</li>


<li class="layui-nav-item"><a href="/index.php/manage_anti_collection_rand_char"> 管理防采集随机字符 </a></li>


            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body" style="bottom:0;">plug</div>


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