<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\php-workspace\wms/tp5/application/user\view\basics\exchange_unit_management.html";i:1582618398;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1582601906;s:62:"D:\php-workspace\wms\tp5\application\user\view\nav_basics.html";i:1581870660;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>柠吉仓库管理系统</title>
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


        <ul id="nav-top" class="layui-nav layui-layout-left" style="left:260px;">
            <li class="layui-nav-item"><a href="/menu">
                <i class="layui-icon layui-icon-app"></i> 功能</a></li>

            <li class="layui-nav-item"><a href="/Storeroom">
                <i class="layui-icon layui-icon-form"></i> 仓库</a></li>

            <li class="layui-nav-item"><a href="/repertory">
                <i class="layui-icon layui-icon-template"></i> 库存</a></li>

            <li class="layui-nav-item"><a href="/quality">
                <i class="layui-icon layui-icon-tabs"></i> 货品</a></li>

            <li class="layui-nav-item"><a href="/basics">
                <i class="layui-icon layui-icon-user"></i> 基础</a></li>


            <li class="layui-nav-item"><a href="/system">
                <i class="layui-icon layui-icon-console"></i> 系统</a></li>


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
            <ul id="nav-left" class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item"><a href="/exchange_unit_management">往来单位管理</a></li>
<li class="layui-nav-item"><a href="/sector_management">部门管理</a></li>
<li class="layui-nav-item"><a href="/staff_management">员工管理</a></li>
<li class="layui-nav-item"><a href="/warehouse">仓库管理</a></li>
<li class="layui-nav-item"><a href="/come_enter_lib_set">出入库类别设置</a></li>





            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        


<div class="layui-fluid">

    <div class="layui-card" style="margin: 15px 0;">
        <div class="layui-card-header">来往单位管理</div>
        <div class="layui-card-body">


            <table class="layui-table" lay-data="{ toolbar: '#toolbarDemo', url:'#', page: true, limit: 6, limits:[6]}">
                <thead>
                <tr>
                    <th lay-data="{field:'id',align:'center'}">编号</th>
                    <th lay-data="{field:'name',align:'center'}">单位名称</th>
                    <th lay-data="{field:'type',align:'center'}">类型</th>
                    <th lay-data="{field:'contacts',align:'center'}">联系人</th>
                    <th lay-data="{field:'phone',align:'center'}">电话</th>
                    <th lay-data="{field:'area',align:'center'}">地区</th>
                    <th lay-data="{field:'province',align:'center'}">省份</th>
                    <th lay-data="{fixed: 'right', width: 160, align: 'center', toolbar: '#barDemo'}">操作</th>
                </tr>
                </thead>
            </table>

        </div>
    </div>
</div>


<script type="text/html" id="toolbarDemo">
    <div class="layui-btn-container">
        <a href="/add_company" class="layui-btn layui-btn-sm">添加来往单位</a>

    </div>
</script>


<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">按钮1</a>
    <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="edit">按钮2</a>
</script>



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

    var navTop = 5, navLeft = 1;
    //Demo
    layui.use(['form', 'table'], function () {
        var form = layui.form, table = layui.table;

        //监听提交
        form.on('submit(formDemo)', function (data) {
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });

</script>

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


            // 选中菜单
            try {
                $("#nav-top").children("li.layui-nav-item").eq(navTop - 1).addClass('layui-this');
            } catch (e) {
            }

            try {
                $("#nav-left").children("li.layui-nav-item").eq(navLeft - 1).addClass('layui-this');
            } catch (e) {
            }


            // 收缩/展开菜单
            $('#nav-switch').click(function () {
                $('#main-nav').data('switch') == 1 ? fold_nav('close') : fold_nav('open');
            });


            try {
                execute_event();
            } catch (e) {
            }


        })
    });
</script>




</body>
</html>