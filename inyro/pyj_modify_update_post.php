<?php
include("./dbconn_pyj.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.


// $mysql_host="172.30.1.6";
// $mysql_user="auddus16";
// $mysql_password="1234";
// $mysql_db="inyroweb";
//
// $conn=mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
//
// if(!$conn){
//   die("연결실패".mysqli_connect_error());
// }

// $mode = $_POST['mode'];
$mb_id=$_SESSION['ss_mb_id'];
// $title = "글 작성하기";

// $mb_id = trim($_POST['mb_id']);
$post_title2 = trim($_POST['post_title']);
$post_category_id		= trim($_POST['post_category_id']);
$post_datatime				= date('Y-m-d H:i:s', time());
$post_text2				= trim($_POST['post_text']);
$post_file	= trim($_POST['post_file']);
$post_image	= trim($_POST['post_image']);
$post_comment_count		= trim($_POST['post_comment_count']);
$post_hit		= trim($_POST['post_hit']);
$post_like				= trim($_POST['post_like']);
$post_modify_datetime	= date('Y-m-d H:i:s', time());
$post_delete_datetime	= date('Y-m-d H:i:s', time());
$post_del				= trim($_POST['post_del']);
$post_ip				= trim($_POST['post_ip']);
echo "<script>alert('$post_title2')</script>";
echo "<script>alert('$post_category_id')</script>";
echo "<script>alert('$post_datatime')</script>";
echo "<script>alert('$post_text2')</script>";
echo "<script>alert('$post_file')</script>";
echo "<script>alert('$post_image')</script>";
echo "<script>alert('$post_comment_count')</script>";
echo "<script>alert('$post_hit')</script>";
echo "<script>alert('$post_like')</script>";
echo "<script>alert('$post_delete_datetime')</script>";
echo "<script>alert('$post_del')</script>";
echo "<script>alert('$post_ip')</script>";


if (!$mb_id) {
	echo "<script>alert('아이디가 넘어오지 않았습니다.');</script>";
	echo "<script>location.replace('./yejin12.php');</script>";
	exit;
}

if (!$post_title2) {
	echo "<script>alert('글 제목이 없습니다.');</script>";
	echo "<script>location.replace('./yejin12.php');</script>";
	exit;
}

if (!$post_text2) {
	echo "<script>alert('글 내용이 없습니다.');</script>";
	echo "<script>location.replace('./yejin12.php');</script>";
	exit;
}


// $sql = " INSERT INTO member
// 			SET mb_id = '$mb_id',
// 					mb_password = '$mb_password',
// 					mb_name = '$mb_name',
// 					mb_email = '$mb_email',
// 					mb_studentnum = '$mb_studentnum',
// 					mb_major_id = '100',
// 					mb_graduated = '$mb_graduated',
// 					mb_code = 'code',
// 					mb_mail_certify_code = 'code'
//
// 					 -- mb_ip = '$mb_ip',
// 					 -- mb_language = '$mb_language',
// 					 -- mb_datetime = '$mb_datetime' ";
// echo $mb_name;

$sql = "UPDATE post SET
post_title = '$post_title2',
post_category_id		= '$post_category_id',
post_datatime				= '$post_datatime',
post_text				= '$post_text2',
post_file	= '$post_file',
post_image	= '$post_image',
post_comment_count		= '$post_comment_count',
post_hit		= '$post_hit',
post_like				= '$post_like',
post_modify_datetime	= '$post_modify_datetime',
post_delete_datetime	= '$post_delete_datetime',
post_del				= '$post_del',
post_ip				= '$post_ip'
WHERE mb_id='$mb_id'";

$result = mysqli_query($conn, $sql);

if($result == false){echo mysqli_connect_error($conn);}
echo "해당 글이 수정되었습니다.";

echo "<script>alert('$post_title2')</script>";
echo "<script>alert('$post_category_id')</script>";
echo "<script>alert('$post_datatime')</script>";
echo "<script>alert('$post_text2')</script>";
echo "<script>alert('$post_file')</script>";
echo "<script>alert('$post_image')</script>";
echo "<script>alert('$post_comment_count')</script>";
echo "<script>alert('$post_hit')</script>";
echo "<script>alert('$post_like')</script>";
echo "<script>alert('$post_delete_datetime')</script>";
echo "<script>alert('$post_del')</script>";
echo "<script>alert('$post_ip')</script>";
mysqli_close($conn); // 데이터베이스 접속 종료
?>