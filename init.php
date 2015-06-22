<?php

$host = "localhost";
$user = "root";
$pass = "lumas";


//$db = "boibitan";

$connection = mysql_connect($host,$user,$pass);


if(!$connection){
    echo "Connection failed!!";
}
//$create_db ="create database NOT EXIST boibitan";
//if(mysql_query($create_db,$connection)){
  //  echo "Database created successfully";
//}else{
  //  echo "Unable to create the database!";
//}

$db = "boibitan";

$select_db = mysql_select_db($db);

if(!$select_db){
    echo "Creating Database....";
    $create_db ="create database ".$db;
    mysql_query($create_db,$connection);
    mysql_select_db("$db");
}else{
    echo "Database found, Name of the database is :".$db;
}

$create_table_books = "create table if not exists books(fid varchar(40),";
$create_table_books.="book_name varchar(100),";
$create_table_books.="writer_name varchar(100),";
$create_table_books.="edition varchar(20),";
$create_table_books.="price int,new_old varchar(10),";
$create_table_books.="image varchar(199),";
$create_table_books.="primary key(fid))";
if(mysql_query($create_table_books,$connection)){
    echo "Table created.";
}

$create_table_department = "create table if not exists department (fid varchar(40),";
$create_table_department .= "dept varchar(100),year varchar(20),";
$create_table_department .= "semester varchar(30),";
$create_table_department .= "primary key(fid))";
if(mysql_query($create_table_department,$connection)){
    echo "Table created department";
}else{
    echo "<br>table not created department".mysql_error();
}