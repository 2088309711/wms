<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\php-workspace\wms/tp5/application/user\view\storeroom\storage_record.html";i:1583055663;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1582601906;s:65:"D:\php-workspace\wms\tp5\application\user\view\nav_storeroom.html";i:1583058228;}*/ ?>
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
                <li class="layui-nav-item"><a href="/in_out_storage/1/1">入库</a></li>
<li class="layui-nav-item"><a href="/in_out_storage/2/1">出库</a></li>
<li class="layui-nav-item"><a href="/storage_record">出入库货品查询</a></li>
<li class="layui-nav-item"><a href="/storage_query">出入库单据查询</a></li>
            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        


<div class="layui-fluid">

    <div class="layui-card" style="margin: 15px 0;">
        <div class="layui-card-header">出入库查询 - 货品</div>
        <div class="layui-card-body">
            <fieldset class="layui-elem-field">
                <legend>条件查询</legend>
                <div class="layui-field-box">

                    <form class="layui-form" action="">
                        <div class="layui-form-item">

                            <div class="layui-inline">

                                <div class="layui-input-inline">
                                    <input type="text" name="price_min" placeholder="单据ID" autocomplete="off"
                                           class="layui-input">
                                </div>
                                <div class="layui-input-inline">
                                    <input type="text" name="price_min" placeholder="货品ID" autocomplete="off"
                                           class="layui-input">
                                </div>


                                <div class="layui-input-inline">


                                    <select name="city" lay-verify="required">
                                        <option value="">出入库类型</option>
                                        <option value="0">北京</option>
                                        <option value="1">上海</option>
                                        <option value="2">广州</option>
                                        <option value="3">深圳</option>
                                        <option value="4">杭州</option>
                                    </select>


                                </div>
                                <div class="layui-input-inline" style="width: 64px;">
                                    <button class="layui-btn" lay-submit lay-filter="formDemo">查询</button>
                                </div>

                            </div>


                        </div>

                    </form>

                </div>
            </fieldset>


            <table class="layui-table" lay-data="{ url:'#', page: true, limit: 6, limits:[6]}">
                <thead>
                <tr>
                    <th lay-data="{field:'id',align:'center'}" rowspan="2">记录编号</th>
                    <th lay-data="{align:'center'}" colspan="5">货品信息</th>
                    <th lay-data="{align:'center'}" colspan="3">出入库信息</th>
                    <th lay-data="{align:'center'}" colspan="2">所属单据信息</th>
                </tr>
                <tr>
                    <th lay-data="{field:'product_id',align:'center'}">货品ID</th>
                    <th lay-data="{field:'name',align:'center'}">名称</th>
                    <th lay-data="{field:'model2',align:'center'}">型号</th>
                    <th lay-data="{field:'size',align:'center'}">规格</th>
                    <th lay-data="{field:'unit',align:'center'}">单位</th>
                    <th lay-data="{field:'num',align:'center'}">数量</th>
                    <th lay-data="{field:'price',align:'center'}">价格</th>
                    <th lay-data="{field:'type_big',align:'center'}">类型</th>
                    <th lay-data="{field:'code',align:'center'}">单据编码</th>
                    <th lay-data="{field:'warehouse',align:'center'}">仓库</th>
                </tr>
                </thead>
            </table>


        </div>
    </div>
</div>


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

    var navTop = 2, navLeft = 3;
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