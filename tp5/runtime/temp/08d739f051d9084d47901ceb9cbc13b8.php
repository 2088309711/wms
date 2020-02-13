<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\php-workspace\MyCms/tp5/application/admin\view\user_manage\manage_user_group.html";i:1577281038;s:59:"D:\php-workspace\MyCms\tp5\application\admin\view\base.html";i:1577260328;s:70:"D:\php-workspace\MyCms\tp5\application\admin\view\nav_user_manage.html";i:1577280120;}*/ ?>
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
        <div class="layui-logo" style="width:140px;">柠吉CMS</div>
        <div id="nav-switch">
            <i class="layui-icon layui-icon-shrink-right"></i>
        </div>


        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="/index.php/system">
                <i class="layui-icon layui-icon-engine"></i> 系统</a></li>
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
                <i class="layui-icon layui-icon-app"></i> 其他</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <i class="layui-icon layui-icon-username"></i>
                    贤心
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
        </ul>
    </div>

    <div id="main-nav" data-switch="1" class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item">
    <a href="javascript:;"> 用户管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/update_user_data"> 修改个人资料 </a></dd>
        <dd><a href="/index.php/manage_user_group"> 管理用户组 </a></dd>
        <dd><a href="/index.php/manage_department"> 管理部门 </a></dd>
        <dd><a href="/index.php/manage_user"> 管理用户 </a></dd>
        <dd><a href="/index.php/manage_log_in"> 管理登陆日志 </a></dd>
        <dd><a href="/index.php/manage_operation_log"> 管理操作日志 </a></dd>
        <dd><a href="/index.php/manage_admin_style"> 管理后台风格 </a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 会员管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_member"> 管理会员 </a></dd>
        <dd><a href="/index.php/manage_member_details"> 管理会员(详细) </a></dd>
        <dd><a href="/index.php/bulk_clear_member"> 批量清理会员 </a></dd>
        <dd><a href="/index.php/member_group"> 会员组 </a></dd>
        <dd><a href="/index.php/member_internal_group"> 会员内部组 </a></dd>
        <dd><a href="/index.php/member_visit_group"> 会员访问组 </a></dd>
        <dd><a href="/index.php/member_manage_group"> 会员管理组 </a></dd>
        <dd><a href="/index.php/manage_member_field"> 管理会员字段 </a></dd>
        <dd><a href="/index.php/manage_member_form"> 管理会员表单 </a></dd>
    </dl>
</li>


<li class="layui-nav-item">
    <a href="javascript:;"> 会员空间管理 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_space_template"> 管理空间模板 </a></dd>
        <dd><a href="/index.php/manage_space_message"> 管理空间留言 </a></dd>
        <dd><a href="/index.php/manage_space_feedback"> 管理空间反馈 </a></dd>


    </dl>
</li>


<li class="layui-nav-item"><a href="/index.php/manage_external_login_interface"> 管理外部登录接口 </a></li>


<li class="layui-nav-item">
    <a href="javascript:;"> 其他功能 </a>
    <dl class="layui-nav-child">
        <dd><a href="/index.php/manage_recharge_type"> 管理充值类型 </a></dd>
        <dd><a href="/index.php/manage_card"> 管理点卡 </a></dd>
        <dd><a href="/index.php/bulk_free_point"> 批量赠送点数 </a></dd>
        <dd><a href="/index.php/bulk_send_mail"> 批量发送邮件 </a></dd>
        <dd><a href="/index.php/bulk_send_sms"> 批量发送短消息 </a></dd>
        <dd><a href="/index.php/bulk_delete_sms"> 批量删除短消息 </a></dd>

    </dl>
</li>




            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body" style="bottom:0;">user_man</div>


</div>

<script src="/statics/layui/layui.js"></script>
<script>
    layui.use(['element', 'jquery'], function () {
        var element = layui.element;
        var $ = layui.jquery;
        $(function () {
            $('#nav-switch').click(function () {
                var icon = $(this).children('i'), nav = $('#main-nav'), content = $('#main-content');
                if (nav.data('switch') == 1) {
                    nav.data('switch', 0);
                    content.animate({'left': 0});
                    nav.animate({'left': -200, opacity: 0});
                    icon.removeClass('layui-icon-shrink-right').addClass('layui-icon-spread-left');
                } else {
                    nav.data('switch', 1);
                    content.animate({'left': 200});
                    nav.animate({'left': 0, opacity: 1});
                    icon.removeClass('layui-icon-spread-left').addClass('layui-icon-shrink-right');
                }
            });
        })
    });
</script>

</body>
</html>