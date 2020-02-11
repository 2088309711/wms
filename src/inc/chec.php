<?php
include(__DIR__ . "/func.php");

if (!isset($_SESSION['username'])) {
    show_msg('您无权访问', 'index.php');
}
if ($_SERVER['HTTP_REFERER'] == "") {
    show_msg('本系统不允许从地址栏访问', 'close');
}
