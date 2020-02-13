<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\php-workspace\hz.njzh/tp5/application/red_pack\view\index\show.html";i:1575018151;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>数据明细</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/statics/css/pintuer.css">
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/pintuer.js"></script>

    <style>
        table th, table td {
            text-align: center !important;
        }
    </style>

</head>

<body>

<div class="layout">

    <h1 class="text-center bg-sub text-white padding-small">
        数据明细
    </h1>

    <div class="padding">




        <div class="panel">
            <div class="panel-head">
                <strong>总览</strong>
            </div>
            <table class="table">

                <tr>
                    <th>编号</th>
                    <th>金额</th>
                    <th>开始日期</th>
                    <th>结束日期</th>
                </tr>

                <?php if(is_array($rpl) || $rpl instanceof \think\Collection || $rpl instanceof \think\Paginator): $i = 0; $__LIST__ = $rpl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $vo['Id']; ?></td>
                    <td><?php echo $vo['num']; ?></td>
                    <td><a href="update/<?php echo $vo['Id']; ?>"><?php echo $vo['s_date']; ?></a></td>
                    <td><a href="delete/<?php echo $vo['Id']; ?>"><?php echo $vo['e_date']; ?></a></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </table>
            <div class="panel-foot">
                总金额：<?php echo $all_num1; ?>
            </div>
        </div>


        <a href="/index.php/query"
           class="button button-big margin-top button-block bg-sub text-center">返 回</a>

        <div class="panel margin-top">
            <div class="panel-head">
                <strong>每日明细</strong>
            </div>
            <table class="table table-condensed">

                <tr>

                    <th>序号</th>
                    <th>日期</th>
                    <th>金额</th>

                </tr>

                <?php if(is_array($arp) || $arp instanceof \think\Collection || $arp instanceof \think\Paginator): $i = 0; $__LIST__ = $arp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr class="<?php echo !empty($vo['is_today'])?'bg-sub':''; ?>">
                    <td><?php echo $vo['id']; ?></td>
                    <td><?php echo $vo['date']; ?><?php echo !empty($vo['is_today'])?'（今日）':''; ?></td>
                    <td><?php echo $vo['num']; ?></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </table>

        </div>

        <a href="/index.php/query"
           class="button button-big button-block bg-sub margin-top text-center">返 回</a>

    </div>

</div>
</body>
</html>
