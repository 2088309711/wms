<?php //����MySql����
	$con = mysql_connect("localhost","root","hust") or die("�������ӵ�Mysql Server");
	mysql_select_db("db_wms", $con) or die("���ݿ�ѡ��ʧ��");
	mysql_query("set names gb2312 ");
?>