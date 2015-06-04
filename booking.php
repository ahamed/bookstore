<?php
$addr = $_GET["adr"];
if(!isset($_COOKIE['uncstores'])){
  header("Location:login_up.php?addr=".urlencode($addr));
}else{
    header("Location:".$addr);
}

