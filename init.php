<?php

$host = "localhost";
$user = "root";
$pass = "lumas";

$db = "boibitan";

$connection = mysql_connect($host,$user,$pass);

if(!$connection){
    echo "Connection failed!!";
}

$select_db = mysql_select_db($db);

if(!$select_db){
    echo "Database not found!";

}

