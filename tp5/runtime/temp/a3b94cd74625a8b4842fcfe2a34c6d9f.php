<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"D:\php-workspace\wms/tp5/application/admin\view\other\index.html";i:1577257418;s:57:"D:\php-workspace\wms\tp5\application\admin\view\base.html";i:1581683629;s:62:"D:\php-workspace\wms\tp5\application\admin\view\nav_other.html";i:1577283319;}*/ ?>
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
            <li class="layui-nav-item"><a href="/index.php/basics">
                <i class="layui-icon layui-icon-user"></i> 基础</a></li>
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
    <a href="javascript:;"> 新闻模型相关 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/source_manage_info"> 管理信息来源 </a></dd>
        <dd><a href="/index.php/manage_author"> 管理作者 </a></dd>
        <dd><a href="/index.php/manage_content_keywords"> 管理内容关键字 </a></dd>
        <dd><a href="/index.php/manage_filter_char"> 管理过滤字符 </a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 下载模型相关 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_addres_prefixe"> 管理地址前缀 </a></dd>
        <dd><a href="/index.php/delete_download_record"> 删除下载记录 </a></dd>
        <dd><a href="/index.php/manage_error_reporting"> 管理错误报告 </a></dd>
        <dd><a href="/index.php/batch_replace_addres_permission"> 批量替换地址权限 </a></dd>
        <dd><a href="/index.php/player_manage"> 播放器管理 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 在线支付 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/payment_param_config"> 支付参数配置 </a></dd>
        <dd><a href="/index.php/manage_payment_interface"> 管理支付接口 </a></dd>
        <dd><a href="/index.php/manage_payment_record"> 管理支付记录 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 图片信息管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_picture_info_type"> 管理图片信息分类 </a></dd>
        <dd><a href="/index.php/manage_picture_info"> 管理图片信息 </a></dd>


    </dl>
</li>


            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        
<div id="main-content" class="layui-body" style="bottom:0;">other</div>

    </div>


    <div id="bottom-copyright" class="layui-footer">
        <div style="float: left;">© 8kqq.com - 柠吉仓库管理系统</div>
        <div style="float: right;">
            <span>2020-2-14 10:36:39</span> |
            <span>操作用户：admin</span> |
            <span>版本：v1.0(20200214)</span>
        </div>
    </div>


</div>

<script src="/statics/layui/layui.js"></script>
<script>
    $ = null;

    function fold_nav(operation) {
        // alert(operation)
        var icon = $('#nav-switch').children('i'), nav = $('#main-nav'),
            content = $('#main-content'), bottomCopyright = $('#bottom-copyright');
        switch (operation) {
            case 'open':
                nav.data('switch', 1);
                content.animate({'left': 200});
                bottomCopyright.animate({'left': 200});
                nav.animate({'left': 0, opacity: 1});
                icon.removeClass('layui-icon-spread-left').addClass('layui-icon-shrink-right');
                break;
            case 'close':
                nav.data('switch', 0);
                content.animate({'left': 0});
                bottomCopyright.animate({'left': 0});
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