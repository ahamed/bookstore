<?php

$uname = $_GET['uname'];
$address = $_GET['adr'];
$userId = $_GET['uid'];
$cookiename = "uncstores";
setcookie($cookiename, $uname , time()+300500,'/');
setcookie("userID",$userId, time()+40000,'/');

//echo $_COOKIE['uncstores'];

header("Location:".$address);



?>
