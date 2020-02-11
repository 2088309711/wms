<?php
include("conn/conn.php");
include("inc/func.php");
$username = trim($_POST['username']);
$userpwd = md5(trim($_POST['userpwd']));
//$yz=$_POST[yz];
//$num=$_POST[num];

class chkinput
{
    var $name;
    var $pwd;

    function chkinput($x, $y)
    {
        $this->name = $x;
        $this->pwd = $y;
    }

    function checkinput()
    {
        include("conn/conn.php");
        $sql = mysql_query("select * from tb_admin where name='" . $this->name . "'", $conn);
        $info = mysql_fetch_array($sql);
        if ($info == false) {
            show_msg('不存在此用户！');
            exit;
        } else {
            if ($info[state] == 0) {
                show_msg('该用户已经被冻结！');
                exit;
            }

            if ($info[pwd] == $this->pwd) {
                session_start();
                $_SESSION[username] = $info[name];
                //session_register("producelist");
                // $producelist="";
                // session_register("quatity");
                // $quatity="";
                w_log($_POST[action], $_SESSION[username]);
                header("location: main.php");
                exit;
            } else {
                show_msg('密码输入错误！');
                exit;
            }

        }
    }
}

$obj = new chkinput($username, $userpwd);
$obj->checkinput();
?>