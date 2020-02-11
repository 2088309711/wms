
<?php
	//session_start();
	//include "../inc/chec.php";
	include "../conn/conn.php";
	$mysqlstr = "mysql -uroot -phust db_wms<sql/".$_POST[r_name];
	//echo $mysqlstr;
	exec($mysqlstr);
	echo "<script>alert('恢复成功');location='../desk.php'</script>";
?>
