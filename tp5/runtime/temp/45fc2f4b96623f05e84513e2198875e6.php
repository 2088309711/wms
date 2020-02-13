<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\php-workspace\hz.njzh/tp5/application/red_pack\view\index\login.html";i:1575012272;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>口令验证</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/statics/css/pintuer.css">
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/pintuer.js"></script>
</head>

<body>

<div class="layout">

    <h1 class="text-center bg-sub text-white padding-small">
        口令验证
    </h1>

    <div class="padding">

        <form method="post" action="/index.php/login">

            <div class="form-group">
                <div class="label">
                    <label for="password">
                        请输入口令</label>
                </div>
                <div class="field">
                    <input id="password" name="password" type="password" data-validate="required:必填,number:请正确输入口令"
                           class="input input-big"
                           placeholder="请输入口令"/>
                </div>
            </div>

            <div class="button-group border-blue button-group-big">
                <a href="/index.php/query" class="button">
                    返回
                </a>
                <button type="reset" class="button">
                    清空
                </button>
                <button type="submit" class="button active">
                    进入
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
