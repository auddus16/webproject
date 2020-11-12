<?php
include("./dbconn_yj.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.

$title = "새로운 비밀번호 설정하기";

$mb_id = $_SESSION['ss_mb_id_check'];

// $mb_id = trim($_POST['mb_id']);
$mb_password			= trim($_POST['mb_password']); // 첫번째 입력 패스워드
$mb_password_re		= trim($_POST['mb_password_re']); // 두번째 입력 패스워드

// echo "<script>alert('$mb_id');</script>";
// echo "<script>alert('$mb_password');</script>";

if ($mb_password != $mb_password_re) {
	echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
	echo "<script>location.replace('./yj_pwupdate.html');</script>";
	exit;
}


$sql = " SELECT PASSWORD('$mb_password') AS mb_password "; // 입력한 비밀번호를 MySQL password() 함수를 이용해 암호화해서 가져옴
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$mb_password = $row['mb_password'];



$sql = "UPDATE member SET mb_password = '$mb_password' WHERE mb_id = '$mb_id' ";

$result = mysqli_query($conn, $sql);

if($result == false){
	echo mysqli_connect_error($conn);
}

echo "<script>alert('비밀번호가 재설정되었습니다.');</script>";
echo "<script>location.replace('./yj_login.php');</script>";


mysqli_close($conn); // 데이터베이스 접속 종료
?>
