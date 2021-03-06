<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\php-workspace\wms/tp5/application/user\view\plug_in\index.html";i:1577257406;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1581760047;s:63:"D:\php-workspace\wms\tp5\application\user\view\nav_plug_in.html";i:1581743400;}*/ ?>
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
    <a href="javascript:;"> 广告系统 </a>
    <dl class="layui-nav-child">
        <dd><a href="/manage_advertising_type"> 管理广告分类 </a></dd>
        <dd><a href="/manage_advertising"> 管理广告 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 投票系统 </a>
    <dl class="layui-nav-child">
        <dd><a href="/add_voting"> 增加投票 </a></dd>
        <dd><a href="/manage_voting"> 管理投票 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 友情链接管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/manage_link_type"> 管理友情链接分类 </a></dd>
        <dd><a href="/manage_link"> 管理友情链接 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 留言板管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/manage_message_type"> 管理留言分类 </a></dd>
        <dd><a href="/manage_message"> 管理留言 </a></dd>
        <dd><a href="/bulk_delete_message"> 批量删除留言 </a></dd>


    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 信息反馈管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/manage_feedback_type"> 管理反馈分类 </a></dd>
        <dd><a href="/manage_feedback_field"> 管理反馈字段 </a></dd>
        <dd><a href="/manage_info_feedback"> 管理信息反馈 </a></dd>


    </dl>
</li>


<li class="layui-nav-item"><a href="/manage_anti_collection_rand_char"> 管理防采集随机字符 </a></li>


            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        
<div id="main-content" class="layui-body" style="bottom:0;">plug</div>

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