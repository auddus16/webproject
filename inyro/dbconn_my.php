<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="1234";
$mysql_db="inyro";

$conn=mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn){
  die("연결실패".mysqli_connect_error());
}
// $sql="INSERT INTO major VALUES(100, '컴과')";
// $result=mysqli_query($conn, $sql);

$sql="INSERT INTO VALUES(1, '201811008', '황명연', 'auddus', 'auddus', 100, 0, 'mbcode',
 ,'mailcode', , )";
$result=mysqli_query($conn, $sql);
if($result == false){echo mysqli_connect_error($conn);}
echo "삽입되었습니다.";

 ?>
