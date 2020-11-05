<?php
include("./dbconn_yj.php");

$mb_id = $_SESSION['ss_mb_id'];

$sql = " SELECT * FROM member WHERE mb_id = TRIM('$mb_id') ";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

mysqli_close($conn); // 데이터베이스 접속 종료
?>
