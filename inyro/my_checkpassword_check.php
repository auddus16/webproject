<?php
include("./dbconn_my.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.

$mb_id = $_SESSION['ss_mb_id'];
$pwd = trim($_POST['mb_password']);

// echo "<script>alert('$pwd');</script>";

$sql = " SELECT * FROM member WHERE mb_id = '$mb_id' "; // 회원 테이블에서 해당 아이디가 존재하는지 체크
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

$sql = " SELECT PASSWORD('$pwd') AS mb_password "; // 입력한 비밀번호를 MySQL password() 함수를 이용해 암호화해서 가져옴
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$password = $row['mb_password'];

// echo "<script>alert('$password');</script>";

// if(isset($_SESSION['ss_mb_id'])) { // 세션이 있다면 로그인 확인 페이지로 이동
// 	echo "<script>alert('session확인');</script>";
// }

if (!($password === $mb['mb_password'])) { // 존재하는 아이디인지, 입력한 패스워드가 회원 테이블에 저장된 패스워드와 동일한지 체크
	echo "<script>alert('비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.');</script>";
	echo "<script>location.replace('./my_checkpassword.php');</script>";
	exit;
}
else{
  echo"<script>location.replace('./my_modify.php');</script>";
}


?>
