<?php
include("./dbconn_my.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.

// $mode = $_POST['mode'];
$mb_id = $_SESSION['ss_mb_id'];
// $title = "회원가입";

$mb_new_id = trim($_POST['mb_id']);
$mb_new_name				= trim($_POST['mb_name']); // 이름
$mb_new_email				= trim($_POST['mb_email']); // 이메일
$mb_new_studentnum	= trim($_POST['mb_studentnum']);
$mb_new_major_id		= ($_POST['mb_major_id']);
$mb_new_graduated		= ($_POST['mb_graduated']);

echo "<script>alert('$mb_new_id,$mb_new_name,$mb_new_email,$mb_new_studentnum');</script>";
echo "<script>alert('$mb_id');</script>";
if (!$mb_new_id) {
	echo "<script>alert('아이디가 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('./my_modify.php');</script>";
	exit;
}


if (!$mb_new_name) {
	echo "<script>alert('이름이 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('./my_modify.php');</script>";
	exit;
}

if (!$mb_new_email) {
	echo "<script>alert('이메일이 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('./my_modify.php');</script>";
	exit;
}
//
// $sql = " SELECT * FROM member WHERE mb_id = '$mb_new_id' "; // 회원가입을 시도하는 아이디가 사용중인 아이디인지 체크
// $result = mysqli_query($conn, $sql);
//
// if (mysqli_num_rows($result) > 0) { // 만약 사용중인 아이디라면 알림창을 띄우고 회원가입 페이지로 이동
// 	echo "<script>alert('이미 사용중인 회원아이디 입니다.');</script>";
// 	echo "<script>location.replace('./my_modify.php');</script>";
// 	exit;
// }

echo $mb_new_name;

// $sql="UPDATE `member` SET `mb_studentnum` = '201811008', `mb_name` = '황명연', `mb_id` = 'auddus16', `mb_major_id` = '101', `mb_email` = 'auddus16@naver.com'
// WHERE `member`.`mb_no` = 13";
$sql = "UPDATE member SET
mb_studentnum='$mb_new_studentnum',
mb_name='$mb_new_name',
mb_id='$mb_new_id',
mb_major_id= 101,
mb_graduated= 2,
mb_modify_datetime =current_timestamp(),
mb_email='$mb_new_email'
WHERE mb_id='$mb_id' ";

$result = mysqli_query($conn, $sql);

if($result == false){echo mysqli_connect_error($conn);}
echo "회원정보가 수정되었습니다.";
echo"<script>location.replace('./my_profile.php');</script>";


mysqli_close($conn); // 데이터베이스 접속 종료
?>
