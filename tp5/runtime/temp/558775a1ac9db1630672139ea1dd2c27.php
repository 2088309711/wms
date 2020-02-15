<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\php-workspace\wms/tp5/application/user\view\login\index.html";i:1581757426;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户登录</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--<link rel="stylesheet" href="/statics/pintuer/css/pintuer.css">-->
    <link rel="stylesheet" href="/statics/layui/css/layui.css">
</head>
<body class="layui-bg-gray">


<div class="layui-container">

    <div class="layui-card" style="margin: 15px 0;">


        <div class="layui-card-body">


            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <ul class="layui-tab-title">
                    <li class="layui-this">登录</li>
                    <li>注册</li>

                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">


                        <form class="layui-form layui-form-pane" style="width: 300px;" method="post"><?php echo token(); ?>


                            <div class="layui-form-item">
                                <label class="layui-form-label">用户名</label>
                                <div class="layui-input-block">
                                    <input type="text" name="user_name" required lay-verify="required"
                                           placeholder="请输入用户名"
                                           class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">密码</label>
                                <div class="layui-input-block">
                                    <input type="password" name="password" required lay-verify="required"
                                           placeholder="请输入密码"
                                           class="layui-input">
                                </div>

                            </div>


                            <div class="layui-form-item">


                                <div class="layui-input-block" style="margin-left: 0;">
                                    <button class="layui-btn layui-btn-fluid layui-btn-normal" lay-submit
                                            lay-filter="formDemo">
                                        立即登录
                                    </button>
                                </div>

                            </div>


                            <div>
                                <strong style="color: #01AAED;">
                                    <i class="layui-icon layui-icon-auz"></i> 令牌已上线
                                </strong>
                                | <a style="color: #666;" href="">忘记密码？</a>
                            </div>

                        </form>


                    </div>
                    <div class="layui-tab-item">

                        <form action="/reg" class="layui-form layui-form-pane" style="width: 300px;" method="post">
                            <?php echo token(); ?>


                            <div class="layui-form-item">
                                <label class="layui-form-label">用户名</label>
                                <div class="layui-input-block">
                                    <input type="text" name="user_name" required lay-verify="required"
                                           placeholder="请输入用户名"
                                           class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">密码</label>
                                <div class="layui-input-block">
                                    <input type="password" name="password" required lay-verify="required"
                                           placeholder="请输入密码"
                                           class="layui-input">
                                </div>

                            </div>


                            <div class="layui-form-item">
                                <label class="layui-form-label">确认密码</label>
                                <div class="layui-input-block">
                                    <input type="password" name="ck_password" required lay-verify="required"
                                           placeholder="请再次输入密码"
                                           class="layui-input">
                                </div>

                            </div>


                            <div style="margin-bottom: 15px;">
                                <input type="checkbox" name="agreement" value="1" lay-skin="primary">同意协议
                            </div>


                            <div class="layui-form-item">

                                <div class="layui-input-block" style="margin-left: 0;">
                                    <button class="layui-btn layui-btn-fluid layui-btn-normal" lay-submit
                                            lay-filter="formDemo">
                                        立即注册
                                    </button>
                                </div>

                            </div>


                        </form>


                    </div>

                </div>
            </div>


        </div>
    </div>

</div>


<script src="/statics/layui/layui.js"></script>

<script>
    //Demo
    layui.use(['element', 'form'], function () {
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function (data) {
            layer.msg(JSON.stringify(data.field));
            // return false;
        });
    });
</script>

</body>
</html>