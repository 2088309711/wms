<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\php-workspace\wms/tp5/application/user\view\quality\add_quality.html";i:1582615589;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1582601906;s:63:"D:\php-workspace\wms\tp5\application\user\view\nav_Quality.html";i:1582205240;}*/ ?>
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
                <li class="layui-nav-item"><a href="/add_quality">添加货品</a></li>
<li class="layui-nav-item"><a href="/quality_management">货品管理</a></li>
<li class="layui-nav-item"><a href="/sort_management">类别管理</a></li>
<li class="layui-nav-item"><a href="/unit_management">计量单位管理</a></li>


            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        


<div class="layui-fluid">

    <div class="layui-card" style="margin: 15px 0;">
        <div class="layui-card-header">添加货品</div>
        <div class="layui-card-body">


            <form class="layui-form" method="post">

                <input type="hidden" id="typeId" name="type">

                <div class="layui-form-item">


                    <div class="layui-inline">
                        <label class="layui-form-label">货品类别</label>
                        <div class="layui-input-inline">
                            <input id="type" type="text" readonly class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">货品名称</label>
                        <div class="layui-input-inline">
                            <input type="text" name="name" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">货品编码</label>
                        <div class="layui-input-inline">
                            <input type="text" name="encode" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">规格型号</label>
                        <div class="layui-input-inline">
                            <input type="text" name="size" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">库存上限</label>
                        <div class="layui-input-inline">
                            <input type="text" name="upperlimit" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">库存下限</label>
                        <div class="layui-input-inline">
                            <input type="text" name="lowerlimit" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">入库参考价</label>
                        <div class="layui-input-inline">
                            <input type="text" name="inprice" placeholder="这里是参考价格" autocomplete="off" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-inline">
                        <label class="layui-form-label">出库参考价</label>
                        <div class="layui-input-inline">
                            <input type="text" name="outprice" placeholder="这里是参考价格" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">计量单位</label>
                        <div class="layui-input-inline">

                            <select name="unit" lay-verify="required">
                                <option value="">未设置</option>

                                <?php if(is_array($measureunit) || $measureunit instanceof \think\Collection || $measureunit instanceof \think\Paginator): $i = 0; $__LIST__ = $measureunit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>


                            </select>


                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">货品条码</label>
                        <div class="layui-input-inline">
                            <input type="text" name="barcode" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                    <div class="layui-inline">
                        <label class="layui-form-label">货品图片</label>
                        <div class="layui-input-inline">
                            <input type="text" name="tupian" autocomplete="off" class="layui-input">
                        </div>
                    </div>


                </div>


                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">货品简介</label>
                    <div class="layui-input-block">
                        <textarea name="abstract" placeholder="请输入内容" class="layui-textarea"></textarea>
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
                        <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
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


<div id="test1" class="demo-tree demo-tree-box"></div>

<script>

    var navTop = 4, navLeft = 1;
    //Demo
    layui.use(['form', 'layer', 'tree'], function () {
        var form = layui.form, $ = layui.jquery, layer = layui.layer, tree = layui.tree,


            genId = function () {
                return Date.now() + Math.random().toString().substr(2, 13)
            },


            onRender = function () {


                $.get('/sort_management', function (data) {
                    //开启节点操作图标
                    tree.render({
                        elem: '#test1'
                        , data: data
                        , edit: ['add', 'update', 'del'] //操作节点的图标
                        , click: function (obj) {


                            if (obj.data.id != 'root') {
                                $('#type').val(obj.data.title);
                                $('#typeId').val(obj.data.id);
                                layer.close(layer.index);
                            }


                        }, text: {
                            defaultNodeName: '请命名新类别' //节点默认名称
                            , none: '没有任何类别' //数据为空时的提示文本
                        }


                        , operate: function (obj) {
                            var type = obj.type; //得到操作类型：add、edit、del
                            var data = obj.data; //得到当前节点的数据
                            var elem = obj.elem; //得到当前节点元素


                            //Ajax 操作
                            var id = data.id; //得到节点索引
                            if (type === 'add') { //增加节点


                                var newId = genId()


                                $.post("/add_type", {
                                    name: "请命名新类别",
                                    parentNode: obj.data.id,
                                    node: newId
                                }, function (data) {
                                    if (data.code == 0) {
                                        layer.msg(data.msg);
                                        onRender();
                                    }
                                })


                                //返回 key 值
                                return newId;
                            } else if (type === 'update') { //修改节点

                                $.get('/update_type/' + obj.data.id + '/' + elem.find('.layui-tree-txt').html(), function (data) {
                                    if (data.code == 0) {
                                        layer.msg(data.msg);
                                        onRender();
                                    }
                                })


                            } else if (type === 'del') { //删除节点
                                $.get('/del_type/' + obj.data.id, function (data) {
                                    if (data.code == 0) {
                                        layer.msg(data.msg);
                                        onRender();
                                    }
                                })

                            }
                        }

                    })

                })


            };

        onRender()

        //监听提交
        form.on('submit(formDemo)', function (data) {
            // layer.msg(JSON.stringify(data.field));
            // return false;
        });

        $('#type').click(function () {

            layer.open({
                type: 1,
                title: '选择类别',
                area: ['500px', '400px'],
                maxmin: true,
                content: $('#test1') //这里content是一个普通的String
            })

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