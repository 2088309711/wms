<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/12 0012
 * Time: 0:45
 */


function msec_time()
{
    list($msec, $sec) = explode(' ', microtime());
    $msectime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
    return $msectime;
}


function conn1()
{
    $conn = mysql_pconnect("localhost", "root", "123456") or die("数据库服务器连接错误" . mysql_error());
//    mysql_select_db("wms", $conn) or die("数据库访问错误" . mysql_error());
//    mysql_query("set character set utf-8");
//    mysql_query("set names utf-8");
}


function conn2(){
    $link = new mysqli("localhost", "root", "123456");
}



function conn3(){

    $dbh = new PDO('mysql:host=localhost;dbname=wms',"root", "123456", array(
        PDO::ATTR_PERSISTENT => true
    ));

    $dbh = null;
}






$t1 = msec_time();

conn1();

$t2 = msec_time();
echo '<br>耗时：' . ($t2 - $t1);