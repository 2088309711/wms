<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"D:\php-workspace\hz.njzh\tp5\thinkphp\tpl\dispatch_jump.tpl";i:1574827323;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>跳转提示</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/statics/css/pintuer.css">
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/pintuer.js"></script>
</head>

<body>

<div class="layout">

    <h1 class="text-center bg-sub text-white padding-small">
        跳转提示
    </h1>

    <div class="padding">

        <div class="padding-large-top">
            <?php switch ($code) {case 1:?>
            <h1 class="text-center">:)</h1>
            <h3 class="text-sub text-center"><?php echo(strip_tags($msg));?></h3>
            <?php break;case 0:?>
            <h1 class="text-center">:(</h1>
            <h3 class="text-dot text-center"><?php echo(strip_tags($msg));?></h3>
            <?php break;} ?>
        </div>
        <p class="text-center">
            页面自动 <a id="href" class="text-dot" href="<?php echo($url);?>">跳转</a> 等待时间： <b
                    id="wait"><?php echo($wait);?></b>
        </p>

    </div>


</div>


<script type="text/javascript">
    (function () {
        var wait = document.getElementById('wait'),
            href = document.getElementById('href').href;
        var interval = setInterval(function () {
            var time = --wait.innerHTML;
            if (time <= 0) {
                location.href = href;
                clearInterval(interval);
            }
            ;
        }, 1000);
    })();
</script>


</body>
</html>