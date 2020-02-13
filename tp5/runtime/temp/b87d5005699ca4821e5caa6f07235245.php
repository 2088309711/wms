<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\php-workspace\hz.njzh/tp5/application/red_pack\view\index\update.html";i:1575011948;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>更新数据</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/statics/css/pintuer.css">
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/pintuer.js"></script>
</head>

<body>

<div class="layout">

    <h1 class="text-center bg-sub text-white padding-small">
        更新数据
    </h1>

    <div class="padding">

        <form method="post" action="/index.php/update">

            <input type="hidden" name="id" value="<?php echo $rp['Id']; ?>">

            <div class="form-group">
                <div class="label">
                    <label for="phone">
                        手机号</label>
                </div>
                <div class="field">
                    <input id="phone" name="phone" type="tel" data-validate="required:必填,mobile:请正确输入手机号"
                           class="input input-big" value="<?php echo $rp['phone']; ?>" readonly
                           placeholder="手机号"/>
                </div>
            </div>


            <div class="form-group">
                <div class="label">
                    <label for="num">
                        金额</label>
                </div>
                <div class="field">
                    <input id="num" name="num" type="number" data-validate="required:必填,number:请正确输入金额"
                           class="input input-big" value="<?php echo $rp['num']; ?>"
                           placeholder="金额"/>
                </div>
            </div>

            <div class="button-group border-blue button-group-big">
                <a href="/index.php/query" class="button">
                    返回
                </a>
                <button type="reset" class="button">
                    重置
                </button>
                <button type="submit" class="button active">
                    更新
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
