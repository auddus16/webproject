<?php
include("./dbconn_yj.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.

$mode = $_POST['mode'];

$title = "회원가입";

$mb_id = trim($_POST['mb_id']);
$mb_password			= trim($_POST['mb_password']); // 첫번째 입력 패스워드
$mb_password_re		= trim($_POST['mb_password_re']); // 두번째 입력 패스워드
$mb_name				= trim($_POST['mb_name']); // 이름
$mb_email				= trim($_POST['mb_email']); // 이메일
$mb_studentnum	= trim($_POST['mb_studentnum']);
$mb_major_id		= ($_POST['mb_major_id']);
$mb_graduated		= ($_POST['mb_graduated']);
$mb_code				= trim($_POST['mb_code']);
$mb_mail_certify_code	= trim($_POST['mb_mail_certify_code']);


if (!$mb_id) {
	echo "<script>alert('아이디가 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('./yj_register.php');</script>";
	exit;
}

if (!$mb_password) {
	echo "<script>alert('비밀번호가 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('./yj_register.php');</script>";
	exit;
}

if ($mb_password != $mb_password_re) {
	echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
	echo "<script>location.replace('./yj_register.php');</script>";
	exit;
}

if (!$mb_name) {
	echo "<script>alert('이름이 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('./yj_register.php');</script>";
	exit;
}

if (!$mb_email) {
	echo "<script>alert('이메일이 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('./yj_register.php');</script>";
	exit;
}

if ($mb_graduated == 0){
	echo "<script>alert('재학 여부를 선택하지 않았습니다.');</script>";
	echo "<script>location.replace('./yj_register.php');</script>";
	exit;

}

$sql = " SELECT PASSWORD('$mb_password') AS mb_password "; // 입력한 비밀번호를 MySQL password() 함수를 이용해 암호화해서 가져옴
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$mb_password = $row['mb_password'];

$sql = " SELECT * FROM member WHERE mb_id = '$mb_id' "; // 회원가입을 시도하는 아이디가 사용중인 아이디인지 체크
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { // 만약 사용중인 아이디라면 알림창을 띄우고 회원가입 페이지로 이동
	echo "<script>alert('이미 사용중인 회원아이디 입니다.');</script>";
	echo "<script>location.replace('./yj_register.php');</script>";
	exit;
}


$sql = "INSERT INTO member VALUES ('NULL', '$mb_studentnum', '$mb_name' , '$mb_id', '$mb_password', '$mb_major_id', '$mb_graduated', 'code', current_timestamp(), 'code', current_timestamp(), current_timestamp(), '$mb_email')";

$result = mysqli_query($conn, $sql);

if($result == false){
	echo mysqli_connect_error($conn);
}

echo "<script>alert('회원가입이 완료되었습니다.');</script>";
echo "<script>location.replace('./yj_login.php');</script>";


mysqli_close($conn); // 데이터베이스 접속 종료
?>
