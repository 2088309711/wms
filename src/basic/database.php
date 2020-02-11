<?php //建立MySql连接
$con = mysql_pconnect("localhost", "root", "123456") or die("不能连接到Mysql Server");
mysql_select_db("wms", $con) or die("数据库选择失败");
mysql_query("set names utf-8 ");
?>