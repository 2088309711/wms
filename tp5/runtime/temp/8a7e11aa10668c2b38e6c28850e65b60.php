<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\php-workspace\wms/tp5/application/user\view\storeroom\in_storage_2.html";i:1582518111;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1581872702;s:65:"D:\php-workspace\wms\tp5\application\user\view\nav_storeroom.html";i:1582515119;}*/ ?>
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
                <li class="layui-nav-item"><a href="/in_storage/1">入库</a></li>
<li class="layui-nav-item"><a href="/out_storage">出库</a></li>
<li class="layui-nav-item"><a href="/storage_record">出入库明细</a></li>
<li class="layui-nav-item"><a href="/storage_query">出入库查询</a></li>
            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        


<div class="layui-fluid">

    <div class="layui-card" style="margin: 15px 0;">
        <div class="layui-card-header">货品入库 - 选择货品</div>
        <div class="layui-card-body">


            <div id="test4" class="demo-transfer"></div>


            <form class="layui-form" method="post">

                <?php echo token(); ?>

                <input type="hidden" name="code" value="<?php echo $code; ?>">
                <input type="hidden" id="product" name="product" value="">

                <button class="layui-btn" style="margin-top: 10px;" lay-submit lay-filter="formDemo">下一步</button>


            </form>

        </div>
    </div>
</div>



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

<script>


    //Demo
    layui.use(['transfer', 'layer', 'util'], function () {
        var $ = layui.$
            , transfer = layui.transfer
            , layer = layui.layer
            , form = layui.form
            , util = layui.util;


        //监听提交
        form.on('submit(formDemo)', function () {
            $('#product').val(JSON.stringify(transfer.getData('demo1')));
        });


        var data1 = [
            {"value": "1", "title": "李白"}
            , {"value": "2", "title": "杜甫"}
            , {"value": "3", "title": "苏轼"}
            , {"value": "4", "title": "李清照"}
            , {"value": "5", "title": "鲁迅"}
            , {"value": "6", "title": "巴金"}
            , {"value": "7", "title": "冰心"}
            , {"value": "8", "title": "矛盾"}
            , {"value": "9", "title": "贤心"}
        ]


        transfer.render({
            elem: '#test4'
            , data: data1
            , title: ['所有记录的货品', '入库的货品']
            , showSearch: true
            , width: 400 //定义宽度
            , height: 500 //定义高度
            , id: 'demo1' //定义索引
        })


    });

</script>

</body>
</html>