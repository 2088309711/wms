<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\php-workspace\wms/tp5/application/user\view\other\manage_picture_info_type.html";i:1577283741;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1581760047;s:61:"D:\php-workspace\wms\tp5\application\user\view\nav_other.html";i:1581743400;}*/ ?>
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
        <a href="/user" title="系统主页">
            <div class="layui-logo" style="color: #fff; font-weight: bold;">柠吉仓库管理系统</div>
        </a>
        <div id="nav-switch">
            <i class="layui-icon layui-icon-shrink-right"></i>
        </div>


        <ul class="layui-nav layui-layout-left" style="left:260px;">
            <li class="layui-nav-item"><a href="/menu">
                <i class="layui-icon layui-icon-app"></i> 功能</a></li>
            <li class="layui-nav-item"><a href="/system">
                <i class="layui-icon layui-icon-console"></i> 系统</a></li>
            <li class="layui-nav-item"><a href="/Storeroom">
                <i class="layui-icon layui-icon-form"></i> 仓库</a></li>
            <li class="layui-nav-item"><a href="/quality">
                <i class="layui-icon layui-icon-tabs"></i> 货品</a></li>
            <li class="layui-nav-item"><a href="/repertory">
                <i class="layui-icon layui-icon-template"></i> 库存</a></li>
            <li class="layui-nav-item"><a href="/basics">
                <i class="layui-icon layui-icon-user"></i> 基础</a></li>
            <li class="layui-nav-item"><a href="/plug_in">
                <i class="layui-icon layui-icon-component"></i> 插件</a></li>
            <li class="layui-nav-item"><a href="/shopping_mall">
                <i class="layui-icon layui-icon-cart"></i> 商城</a></li>
            <li class="layui-nav-item"><a href="/other">
                <i class="layui-icon layui-icon-util"></i> 其他</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-username"></i>
                    <?php echo \think\Session::get('user_name'); ?>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="/update_password">修改密码</a></dd>
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
        <dd><a href="/source_manage_info"> 管理信息来源 </a></dd>
        <dd><a href="/manage_author"> 管理作者 </a></dd>
        <dd><a href="/manage_content_keywords"> 管理内容关键字 </a></dd>
        <dd><a href="/manage_filter_char"> 管理过滤字符 </a></dd>

    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 下载模型相关 </a>
    <dl class="layui-nav-child">
        <dd><a href="/manage_addres_prefixe"> 管理地址前缀 </a></dd>
        <dd><a href="/delete_download_record"> 删除下载记录 </a></dd>
        <dd><a href="/manage_error_reporting"> 管理错误报告 </a></dd>
        <dd><a href="/batch_replace_addres_permission"> 批量替换地址权限 </a></dd>
        <dd><a href="/player_manage"> 播放器管理 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 在线支付 </a>
    <dl class="layui-nav-child">
        <dd><a href="/payment_param_config"> 支付参数配置 </a></dd>
        <dd><a href="/manage_payment_interface"> 管理支付接口 </a></dd>
        <dd><a href="/manage_payment_record"> 管理支付记录 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 图片信息管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/manage_picture_info_type"> 管理图片信息分类 </a></dd>
        <dd><a href="/manage_picture_info"> 管理图片信息 </a></dd>


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
            <span>操作用户：<?php echo \think\Session::get('user_name'); ?></span> |
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