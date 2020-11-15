<?php
include("./dbconn_yj.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.

$mb_id				= trim($_GET['mb_id']); // 회원 아이디
$mb_md5				= trim($_GET['mb_md5']); // 인증메일에서 넘어온 인증번호
$mb_mail_certify_datetime	= date('Y-m-d H:i:s'); // 인증일

$sql = " SELECT mb_id, mb_mail_certify_code FROM member WHERE mb_id = '$mb_id' ";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

if (!$mb['mb_id']) {
	echo "<script>alert('존재하는 회원이 아닙니다.');</script>";
	echo "<script>location.replace('./yj_login.php');</script>";
	exit;
}

$sql = " UPDATE member SET mb_mail_certify_code = '' WHERE mb_id = '$mb_id' "; // 인증 링크는 한번만 처리가 되게 한다.
$result = mysqli_query($conn, $sql);

if ($mb_md5)
{
    if ($mb_md5 == $mb['mb_mail_certify_code'])
    {
		$sql = " UPDATE member set mb_mail_certify_datetime = '$mb_mail_certify_datetime' WHERE mb_id = '$mb_id' ";
		$result = mysqli_query($conn, $sql);
		echo "<script>alert('메일인증 처리를 완료 하였습니다.\\n\\비밀번호 재설정이 가능합니다.');</script>";
    echo "<script>location.replace('./yj_pwupdate.php');</script>";
    }
    else
    {
		echo "<script>alert('메일인증 요청 정보가 올바르지 않습니다.');</script>";
    // echo "<script>alert('".$mb_md5."'); history.back();</script>";
    // echo "<script>alert('".$mb['mb_mail_certify_code']."'); history.back();</script>";
    }
}

mysqli_close($conn); // 데이터베이스 접속 종료
echo "<script>location.replace('./yj_findpw.php');</script>";
exit;
?>
