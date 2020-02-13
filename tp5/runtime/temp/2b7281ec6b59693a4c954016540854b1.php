<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"D:\php-workspace\wms/tp5/application/admin\view\info\index.html";i:1577255120;s:57:"D:\php-workspace\wms\tp5\application\admin\view\base.html";i:1581606940;s:61:"D:\php-workspace\wms\tp5\application\admin\view\nav_info.html";i:1581607049;}*/ ?>
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
            <li class="layui-nav-item"><a href="/index.php/info">
                <i class="layui-icon layui-icon-form"></i> 仓库</a></li>
            <li class="layui-nav-item"><a href="/index.php/class">
                <i class="layui-icon layui-icon-tabs"></i> 货品</a></li>
            <li class="layui-nav-item"><a href="/index.php/template">
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
                <li class="layui-nav-item"><a href="/index.php/list_news">入库</a></li>
<li class="layui-nav-item"><a href="/index.php/info">出库</a></li>
<li class="layui-nav-item"><a href="/index.php/info">出入库明细</a></li>
<li class="layui-nav-item"><a href="/index.php/info">出入库查询</a></li>
            </ul>
        </div>
    </div>

    
<div id="main-content" class="layui-body" style="bottom:0;">


    <div class="layui-row layui-col-space10" style="padding: 10px;">


        <div class="layui-col-md6">
            <div id="test1" style="border: 1px solid #e6e6e6; padding: 10px 10px 15px; overflow: auto;"></div>
        </div>
        <div class="layui-col-md6">
            <div style="border: 1px solid #e6e6e6; padding: 10px;">请选择栏目节点</div>
        </div>
    </div>

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

<script>
    layui.use('tree', function () {
        var tree = layui.tree, layer = layui.layer;
        //渲染
        var inst1 = tree.render({
            elem: '#test1'  //绑定元素
            , data: [{
                title: '江西' //一级菜单
                , children: [{
                    title: '南昌' //二级菜单
                    , children: [{
                        title: '高新区' //三级菜单

                    }]
                }]
            }, {
                title: '陕西' //一级菜单
                , children: [{
                    title: '西安' //二级菜单
                }]
            }]
            , click: function (obj) {
                layer.msg(JSON.stringify(obj.data)); //得到当前点击的节点数据
                // layer.msg(JSON.stringify(obj.state)); //得到当前节点的展开状态：open、close、normal
                // layer.msg(JSON.stringify(obj.elem)); //得到当前节点元素
                // layer.msg(JSON.stringify(obj.data.children)); //当前节点下是否有子节点
            }
        });
    });
</script>


</body>
</html>