<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\php-workspace\wms/tp5/application/user\view\repertory\inventory_allocation_1.html";i:1583139306;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1582601906;s:65:"D:\php-workspace\wms\tp5\application\user\view\nav_Repertory.html";i:1582470523;}*/ ?>
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
                <li class="layui-nav-item"><a href="/inventory_allocation/1">库存调拨</a></li>
<li class="layui-nav-item"><a href="/inventory_verification/1">库存盘点</a></li>
<li class="layui-nav-item"><a href="/inventory_allocation_details">库存调拨记录</a></li>
<li class="layui-nav-item"><a href="/inventory_details">库存盘点记录</a></li>
<li class="layui-nav-item"><a href="/inventory_query">库存查询</a></li>








            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        


<div class="layui-fluid">

    <div class="layui-card" style="margin: 15px 0;">
        <div class="layui-card-header">库存调拨</div>
        <div class="layui-card-body">

            <form class="layui-form" method="post">

                <?php echo token(); ?>
                <div class="layui-form-item">

                    <div class="layui-inline">
                        <label class="layui-form-label">单据编号</label>
                        <div class="layui-input-inline">
                            <input type="text" name="code" autocomplete="off" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-inline">
                        <label class="layui-form-label">录单日期</label>
                        <div class="layui-input-inline">
                            <input type="text" name="date" class="layui-input" autocomplete="off" id="test1">
                        </div>
                    </div>

                    <div class="layui-inline">
                        <label class="layui-form-label">业务员</label>
                        <div class="layui-input-inline">
                            <input type="text" name="employee" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">出货仓库</label>
                        <div class="layui-input-inline">


                            <select id="warehouse_from" name="warehouse_from" lay-filter="warehouse_from"
                                    lay-verify="required">
                                <option value=""></option>
                                <?php if(is_array($warehouse) || $warehouse instanceof \think\Collection || $warehouse instanceof \think\Paginator): $i = 0; $__LIST__ = $warehouse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>


                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">存货仓库</label>
                        <div class="layui-input-inline">


                            <select id="warehouse_to" name="warehouse_to" lay-filter="warehouse_to"
                                    lay-verify="required">
                                <option value=""></option>
                                <?php if(is_array($warehouse) || $warehouse instanceof \think\Collection || $warehouse instanceof \think\Paginator): $i = 0; $__LIST__ = $warehouse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>


                        </div>
                    </div>


                </div>


                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">备注</label>
                    <div class="layui-input-block">
                        <textarea name="remark" placeholder="请输入内容" class="layui-textarea"></textarea>
                    </div>
                </div>


                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="formDemo">下一步</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>

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

    var navTop = 3, navLeft = 1;
    //Demo
    layui.use(['laydate', 'jquery', 'form', 'table'], function () {
        var form = layui.form,
            table = layui.table,
            laydate = layui.laydate,
            $ = layui.jquery;


        //laydate = layui.laydate
        laydate.render({
            elem: '#test1'
        });


        form.on('select(warehouse_from)', function (data) {
            onRender('warehouse_to', data.value);
        });

        form.on('select(warehouse_to)', function (data) {
            onRender('warehouse_from', data.value);
        });


        function onRender(id, value) {
            $('#' + id).children().each(function () {
                if ($(this).val() == value) {
                    $(this).prop("disabled", true).prop("selected", false)
                } else {
                    $(this).prop("disabled", false)
                }
            });
            form.render('select');
        }


        //监听提交
        form.on('submit(formDemo)', function (data) {
            // layer.msg(JSON.stringify(data.field));
            // return false;
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