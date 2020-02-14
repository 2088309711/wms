<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\php-workspace\wms/tp5/application/admin\view\quality\sort_management.html";i:1581655986;s:57:"D:\php-workspace\wms\tp5\application\admin\view\base.html";i:1581683629;s:64:"D:\php-workspace\wms\tp5\application\admin\view\nav_Quality.html";i:1581653189;}*/ ?>
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
                <li class="layui-nav-item"><a href="/index.php/sort_management">分类管理</a></li>
<li class="layui-nav-item"><a href="/index.php/information_management">信息管理</a></li>
<li class="layui-nav-item"><a href="/index.php/add_quality">添加货品</a></li>
<li class="layui-nav-item"><a href="/index.php/unit_management">计量单位管理</a></li>







            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        


<div class="layui-fluid">

    <div class="layui-card" style="margin: 15px 0;">
        <div class="layui-card-header">货品分类管理</div>
        <div class="layui-card-body">

            <div id="test9" class="demo-tree demo-tree-box"></div>

        </div>
    </div>
</div>



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

<script>


    //Demo
    layui.use(['tree', 'util'], function () {
        var tree = layui.tree, layer = layui.layer, util = layui.util

        var data1 = [{
            title: '江西'
            , id: 1
            , children: [{
                title: '南昌'
                , id: 1000
                , children: [{
                    title: '青山湖区'
                    , id: 10001
                }, {
                    title: '高新区'
                    , id: 10002
                }]
            }, {
                title: '九江'
                , id: 1001
            }, {
                title: '赣州'
                , id: 1002
            }]
        }, {
            title: '广西'
            , id: 2
            , children: [{
                title: '南宁'
                , id: 2000
            }, {
                title: '桂林'
                , id: 2001
            }]
        }, {
            title: '陕西'
            , id: 3
            , children: [{
                title: '西安'
                , id: 3000
            }, {
                title: '延安'
                , id: 3001
            }]
        }];


        //开启节点操作图标
        tree.render({
            elem: '#test9'
            , data: data1
            , edit: ['add', 'update', 'del'] //操作节点的图标
            , click: function (obj) {
                layer.msg(JSON.stringify(obj.data));
            }


            , operate: function (obj) {
                var type = obj.type; //得到操作类型：add、edit、del
                var data = obj.data; //得到当前节点的数据
                var elem = obj.elem; //得到当前节点元素


                //Ajax 操作
                var id = data.id; //得到节点索引
                if (type === 'add') { //增加节点

                    //返回 key 值
                    return 123;
                } else if (type === 'update') { //修改节点

                    console.log(elem.find('.layui-tree-txt').html()); //得到修改后的内容
                } else if (type === 'del') { //删除节点


                }
            }


        });
    });

</script>

</body>
</html>