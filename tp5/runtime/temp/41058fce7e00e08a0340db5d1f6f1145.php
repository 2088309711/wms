<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"D:\php-workspace\wms/tp5/application/admin\view\storeroom\news.html";i:1577255203;s:57:"D:\php-workspace\wms\tp5\application\admin\view\base.html";i:1581607954;s:61:"D:\php-workspace\wms\tp5\application\admin\view\nav_info.html";i:1581607049;}*/ ?>
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


    <div class="layui-fluid">

        <div class="layui-row" style="margin-top: 15px;">

            <strong style="margin-top: 10px; float: left;">位置：<a href="/index.php/list_news">管理信息</a></strong>

            <div style="float: right">


                <form class="layui-form">

                    <div class="layui-form-item" style="margin-bottom: 10px;">

                        <div class="layui-inline" style="margin: 0;">

                            <div class="layui-input-inline">

                                <!--栏目数据来自缓存-->

                                <select name="city" lay-verify="required" class="">
                                    <option value=""></option>
                                    <option value="0">北京</option>
                                    <option value="1">上海</option>
                                    <option value="2">广州</option>
                                    <option value="3">深圳</option>
                                    <option value="4">杭州</option>
                                </select>

                            </div>

                            <div class="layui-input-inline" style="width: auto; margin-right: 0;">
                                <button type="submit" class="layui-btn layui-btn-normal">增加信息</button>
                                <a href="#" class="layui-btn layui-btn-primary">刷新首页</a>
                                <a href="#" class="layui-btn layui-btn-primary">刷新所有信息JS</a>
                            </div>
                        </div>


                    </div>


                </form>


            </div>

        </div>


        <div class="layui-row" style="margin-bottom: 5px;">

            <div class="layui-clear" style="padding: 10px 10px 0 10px; border: 1px solid #e2e2e2;background: #F0F0F0;">


                <form class="layui-form">

                    <div class="layui-form-item" style="margin-bottom: 0;">


                        <div class="layui-inline" style="margin: 0;">
                            <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">

                                <select name="city" lay-verify="required" class="">
                                    <option value="0">不限属性</option>
                                    <option value="1">置顶</option>
                                    <option value="2">推荐</option>
                                    <option value="3">头条</option>
                                    <option value="7">投稿</option>
                                    <option value="5">签发</option>
                                    <option value="8">我的信息</option>
                                </select>


                            </div>

                            <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                <select name="city" lay-verify="required" class="">
                                    <option value="0">不限推荐</option>
                                    <option value="-1">所有推荐</option>
                                </select>
                            </div>

                            <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                <select name="city" lay-verify="required" class="">
                                    <option value="0">不限头条</option>
                                    <option value="-1">所有头条</option>
                                </select>
                            </div>

                            <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                <select name="city" lay-verify="required" class="">
                                    <option value="0">不限字段</option>
                                    <option value="1">标题</option>
                                    <option value="2">发布者</option>
                                    <option value="3">ID</option>
                                    <option value="4">关键字</option>
                                </select>
                            </div>


                            <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                <select name="city" lay-verify="required" class="">
                                    <option value="1">按信息ID</option>
                                    <option value="2">按发布时间</option>
                                    <option value="3">按点击率</option>
                                    <option value="4">按下载数</option>
                                    <option value="5">按评论数</option>
                                </select>
                            </div>


                            <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                <select name="city" lay-verify="required" class="">
                                    <option value="0">降序排序</option>
                                    <option value="1">升序排序</option>
                                </select>
                            </div>

                            <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                <select name="city" lay-verify="required" class="">
                                    <option value="1">全部时间</option>
                                    <option value="86400">1 天</option>
                                    <option value="172800">2 天</option>
                                    <option value="604800">一周</option>
                                    <option value="2592000">1 个月</option>
                                    <option value="7948800">3 个月</option>
                                    <option value="15897600">6 个月</option>
                                    <option value="31536000">1 年</option>
                                </select>
                            </div>

                            <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                <select name="city" lay-verify="required" class="">
                                    <option value="0">所有栏目</option>
                                </select>
                            </div>


                            <div class="layui-input-inline" style="width: 200px; margin-bottom: 10px;">
                                <input type="text" name="" placeholder="关键词" class="layui-input">
                            </div>

                            <div class="layui-input-inline" style="width: auto; margin: 0 0 10px 0;">

                                <button type="submit" class="layui-btn layui-btn-normal">搜索</button>

                            </div>


                        </div>


                    </div>


                </form>


            </div>
        </div>


        <div class="layui-tab layui-tab-brief" style="margin: 0 0 5px;" lay-filter="docDemoTabBrief">
            <ul class="layui-tab-title">
                <li class="layui-this">已发布(23)</li>
                <li>待审核(0)</li>
            </ul>


            <div class="layui-tab-content" style="padding: 10px 0;">


                <div class="layui-row">


                    <div style="float: left;">


                        <form class="layui-form">


                            <select name="city" lay-verify="required">
                                <option value=""></option>
                                <option value="0">北京</option>
                                <option value="1">上海</option>
                                <option value="2">广州</option>
                                <option value="3">深圳</option>
                                <option value="4">杭州</option>
                            </select>


                        </form>


                    </div>


                    <div style="float: right;">


                        <div class="layui-btn-group">
                            <a href="#" class="layui-btn">我的信息</a>
                            <a href="#" class="layui-btn">签发信息</a>
                            <a href="#" class="layui-btn">投稿信息</a>
                            <a href="#" class="layui-btn">查询重复标题A</a>
                            <a href="#" class="layui-btn">查询重复标题B</a>
                            <a href="#" class="layui-btn">更新数据</a>
                            <a href="#" class="layui-btn">预览首页</a>
                        </div>


                    </div>


                </div>


                <div class="layui-tab-item layui-show">
                    <table id="table1" lay-filter="test"></table>


                    <div class="layui-row" style="margin-bottom: 5px;">

                        <div class="layui-clear"
                             style="padding: 10px 10px 0 10px; border: 1px solid #e2e2e2;background: #F0F0F0;">


                            <form class="layui-form">

                                <div class="layui-form-item" style="margin-bottom: 0;">


                                    <div class="layui-inline" style="margin: 0;">
                                        <div class="layui-input-inline" style="width: auto; margin-bottom: 10px;">

                                            <div class="layui-btn-group demoTable">
                                                <button class="layui-btn" data-type="getCheckData">删除</button>
                                                <button class="layui-btn" data-type="getCheckLength">取消审核</button>
                                                <button class="layui-btn" data-type="isAll">刷新</button>
                                                <button class="layui-btn" data-type="isAll">推送</button>
                                                <button class="layui-btn" data-type="getCheckLength">修改时间</button>
                                                <button class="layui-btn" data-type="isAll">推送至专题</button>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="layui-inline" style="margin: 0;">


                                        <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                            <select name="city" lay-verify="required" class="">
                                                <option value=""></option>
                                                <option value="0">北京</option>
                                                <option value="1">上海</option>
                                                <option value="2">广州</option>
                                                <option value="3">深圳</option>
                                                <option value="4">杭州</option>
                                            </select>
                                        </div>

                                        <div class="layui-input-inline" style="width: auto; margin-bottom: 10px;">
                                            <button class="layui-btn" data-type="getCheckData">推荐</button>
                                        </div>

                                    </div>


                                    <div class="layui-inline" style="margin: 0;">

                                        <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                            <select name="city" lay-verify="required" class="">
                                                <option value=""></option>
                                                <option value="0">北京</option>
                                                <option value="1">上海</option>
                                                <option value="2">广州</option>
                                                <option value="3">深圳</option>
                                                <option value="4">杭州</option>
                                            </select>
                                        </div>


                                        <div class="layui-input-inline" style="width: auto; margin-bottom: 10px;">
                                            <button class="layui-btn" data-type="getCheckData">头条</button>
                                        </div>

                                    </div>


                                    <div class="layui-inline" style="margin: 0;">

                                        <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                            <select name="city" lay-verify="required" class="">
                                                <option value=""></option>
                                                <option value="0">北京</option>
                                                <option value="1">上海</option>
                                                <option value="2">广州</option>
                                                <option value="3">深圳</option>
                                                <option value="4">杭州</option>
                                            </select>
                                        </div>
                                        <div class="layui-input-inline" style="width: auto; margin-bottom: 10px;">
                                            <button class="layui-btn" data-type="getCheckData">置顶</button>
                                        </div>

                                    </div>


                                    <div class="layui-inline" style="margin: 0;">

                                        <div class="layui-input-inline" style="width: 100px; margin-bottom: 10px;">
                                            <select name="city" lay-verify="required" class="">
                                                <option value=""></option>
                                                <option value="0">北京</option>
                                                <option value="1">上海</option>
                                                <option value="2">广州</option>
                                                <option value="3">深圳</option>
                                                <option value="4">杭州</option>
                                            </select>
                                        </div>


                                        <div class="layui-input-inline" style="width: auto; margin: 0 0 10px 0;">
                                            <div class="layui-btn-group demoTable">
                                                <button class="layui-btn" data-type="getCheckData">移动</button>
                                                <button class="layui-btn" data-type="getCheckLength">复制</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="layui-tab-item">
                    <table id="table2" lay-filter="test"></table>
                </div>


                <blockquote class="layui-elem-quote" style="margin: 10px 0 0 0;">
                    备注：多选框蓝色为未审核信息；发布者红色为会员投稿；信息ID粗体为未生成，点击ID可刷新页面。
                </blockquote>

            </div>
        </div>

    </div>

    <script type="text/html" id="barDemo">
        <a class="layui-btn layui-btn-primary layui-btn-xs" lay-event="detail">查看</a>
        <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
    </script>

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
    layui.use(['table'], function () {
        var table = layui.table;


        //监听表格复选框选择
        table.on('checkbox(test)', function (obj) {
            console.log(obj)
        });

        //第一个实例
        table.render({
            elem: '#table1'
            , height: 400
            , url: '/index.php/list_news_get_data' //数据接口
            , page: true //开启分页
            , cols: [[ //表头
                {type: 'checkbox'},
                {field: 'id', title: 'ID', width: 80, sort: true}
                , {field: 'title', title: '标题', sort: true}
                , {field: 'username', title: '发布者', width: 100, sort: true}
                , {field: 'newstime', title: '发布时间', width: 180, sort: true}
                , {field: 'onclick', title: '点击', width: 80, sort: true}
                , {field: 'plnum', title: '评论', width: 80, sort: true}
                , {fixed: 'right', width: 180, align: 'center', toolbar: '#barDemo'}
            ]]
        });


        //监听工具条
        table.on('tool(test)', function (obj) { //注：tool 是工具条事件名，test 是 table 原始容器的属性 lay-filter="对应的值"
            var data = obj.data; //获得当前行数据
            var layEvent = obj.event; //获得 lay-event 对应的值（也可以是表头的 event 参数对应的值）
            var tr = obj.tr; //获得当前行 tr 的 DOM 对象（如果有的话）

            if (layEvent === 'detail') { //查看
                //do somehing
            } else if (layEvent === 'del') { //删除
                layer.confirm('真的删除行么', function (index) {
                    obj.del(); //删除对应行（tr）的DOM结构，并更新缓存
                    layer.close(index);
                    //向服务端发送删除指令
                });
            } else if (layEvent === 'edit') { //编辑
                //do something

                //同步更新缓存对应的值
                obj.update({
                    username: '123'
                    , title: 'xxx'
                });
            } else if (layEvent === 'LAYTABLE_TIPS') {
                layer.alert('Hi，头部工具栏扩展的右侧图标。');
            }
        });


        var $ = layui.$, active = {
            getCheckData: function () { //获取选中数据
                var checkStatus = table.checkStatus('table1')
                    , data = checkStatus.data;
                layer.alert(JSON.stringify(data));
            }
            , getCheckLength: function () { //获取选中数目
                var checkStatus = table.checkStatus('table1')
                    , data = checkStatus.data;
                layer.msg('选中了：' + data.length + ' 个');
            }
            , isAll: function () { //验证是否全选
                var checkStatus = table.checkStatus('table1');
                layer.msg(checkStatus.isAll ? '全选' : '未全选')
            }
        };

        $('.demoTable .layui-btn').on('click', function () {
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });

    });
</script>

</body>
</html>