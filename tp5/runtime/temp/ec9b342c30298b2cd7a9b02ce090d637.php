<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\php-workspace\wms/tp5/application/user\view\storeroom\in_storage.html";i:1581612671;s:56:"D:\php-workspace\wms\tp5\application\user\view\base.html";i:1581872702;s:65:"D:\php-workspace\wms\tp5\application\user\view\nav_storeroom.html";i:1581743400;}*/ ?>
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
                <li class="layui-nav-item"><a href="/in_storage">入库</a></li>
<li class="layui-nav-item"><a href="/out_storage">出库</a></li>
<li class="layui-nav-item"><a href="/storage_record">出入库明细</a></li>
<li class="layui-nav-item"><a href="/storage_query">出入库查询</a></li>
            </ul>
        </div>
    </div>

    <div id="main-content" class="layui-body layui-bg-gray">
        


<div class="layui-fluid">

    <div class="layui-card" style="margin: 15px 0;">
        <div class="layui-card-header">货品入库</div>
        <div class="layui-card-body">
            <fieldset class="layui-elem-field">
                <legend>单据信息</legend>
                <div class="layui-field-box">


                    <form class="layui-form" action="">


                        <div class="layui-form-item">


                            <div class="layui-inline">
                                <label class="layui-form-label">单据编号</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>


                            <div class="layui-inline">
                                <label class="layui-form-label">录单日期</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>


                            <div class="layui-inline">
                                <label class="layui-form-label">业务员</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>


                        </div>


                        <div class="layui-form-item">


                            <div class="layui-inline">
                                <label class="layui-form-label">供应商</label>
                                <div class="layui-input-inline">


                                    <select name="city" lay-verify="required">
                                        <option value=""></option>
                                        <option value="0">北京</option>
                                        <option value="1">上海</option>
                                        <option value="2">广州</option>
                                        <option value="3">深圳</option>
                                        <option value="4">杭州</option>
                                    </select>


                                </div>
                            </div>


                            <div class="layui-inline">
                                <label class="layui-form-label">存货仓库</label>
                                <div class="layui-input-inline">
                                    <select name="city" lay-verify="required">
                                        <option value=""></option>
                                        <option value="0">北京</option>
                                        <option value="1">上海</option>
                                        <option value="2">广州</option>
                                        <option value="3">深圳</option>
                                        <option value="4">杭州</option>
                                    </select>
                                </div>
                            </div>


                            <div class="layui-inline">
                                <label class="layui-form-label">入库类型</label>
                                <div class="layui-input-inline">
                                    <select name="city" lay-verify="required">
                                        <option value=""></option>
                                        <option value="0">北京</option>
                                        <option value="1">上海</option>
                                        <option value="2">广州</option>
                                        <option value="3">深圳</option>
                                        <option value="4">杭州</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                    </form>


                </div>
            </fieldset>


            <fieldset class="layui-elem-field">
                <legend>货品列表</legend>
                <div class="layui-field-box">


                    <table class="layui-table">
                        <colgroup>
                            <col width="150">
                            <col width="200">
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>名称</th>
                            <th>规格型号</th>
                            <th>单位</th>
                            <th>数量</th>
                            <th>单价</th>
                            <th>小计</th>
                            <th>删除</th>
                            <th>修改</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>贤心</td>
                            <td>2016-11-29</td>
                            <td>人生就像是一场修行</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>


                </div>
            </fieldset>


            <fieldset class="layui-elem-field">
                <legend>添加货品</legend>
                <div class="layui-field-box">

                    <form class="layui-form" action="">
                        <div class="layui-form-item">


                            <div class="layui-inline">
                                <label class="layui-form-label">编号</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>


                            <div class="layui-inline">
                                <label class="layui-form-label">名称</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-inline">
                                <label class="layui-form-label">规格</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>


                        </div>


                        <div class="layui-form-item">


                            <div class="layui-inline">
                                <label class="layui-form-label">单位</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>


                            <div class="layui-inline">
                                <label class="layui-form-label">数量</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>

                            <div class="layui-inline">
                                <label class="layui-form-label">单价</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="" autocomplete="off" class="layui-input">
                                </div>
                            </div>


                        </div>


                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button type="button" class="layui-btn">添加</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>


                    </form>

                </div>
            </fieldset>


            <fieldset class="layui-elem-field">
                <legend>其他</legend>
                <div class="layui-field-box">
                    <form class="layui-form" action="">


                        <div class="layui-form-item layui-form-text">
                            <label class="layui-form-label">备注</label>
                            <div class="layui-input-block">
                                <textarea name="desc" placeholder="请输入内容" class="layui-textarea"></textarea>
                            </div>
                        </div>


                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                            </div>
                        </div>


                    </form>
                </div>
            </fieldset>

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
    layui.use('form', function () {
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function (data) {
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });

</script>

</body>
</html>