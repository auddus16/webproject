
<?php
include("./dbconn.php");

$mode = "modify";
$title = "회원가입";
$modify_mb_info = '';

$sql="INSERT INTO major VALUES(103, '휴먼지능공학과')";
$result=mysqli_query($conn, $sql);

?>
