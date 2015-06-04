<?php
$addr = $_GET['addr'];

setcookie("uncstores",'',time()-6000,'/');

header("Location:".$addr);

exit();