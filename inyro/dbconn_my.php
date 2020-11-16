<?php
$mysql_host="192.168.35.123";
$mysql_user="auddus16";
$mysql_password="1234";
$mysql_db="inyroweb";

$conn=mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn){
  die("연결실패".mysqli_connect_error());
}
session_start();

 ?>
