<?php
$mysql_host="172.16.24.191";
$mysql_user="auddus16";
$mysql_password="1234";
$mysql_db="inyroweb";

$conn=mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn){
  die("연결실패".mysqli_connect_error());
}
 ?>
