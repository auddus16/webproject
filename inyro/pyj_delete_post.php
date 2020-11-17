<?php
include("./dbconn_pyj.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.
$mb_id=$_SESSION['ss_mb_id'];
$index=$_GET['index'];

$sql = " SELECT * from post where post_title='$index' AND mb_id='$mb_id'"; // 입력한 비밀번호를 MySQL password() 함수를 이용해 암호화해서 가져옴
$result = mysqli_query($conn, $sql);
$mb=mysqli_fetch_assoc($result);


if ($mb_id==$mb['mb_id']) { // 존재하는 아이디인지, 입력한 패스워드가 회원 테이블에 저장된 패스워드와 동일한지 체크
  $sql="DELETE from post where post_title='$index' AND mb_id='$mb_id'";
  $result = mysqli_query($conn, $sql);
	echo "<script>alert('삭제하였습니다.')</script>";
	// echo "<script>location.replace('./yejin12.php');</script>";
	// exit;
}
else{
  echo "<script>alert('삭제권한이 없습니다.'); history.back(); </script>";
}

$sql = "UPDATE post SET
post_delete_datetime	= current_timestamp()
WHERE mb_id='$mb_id'";

$result = mysqli_query($conn, $sql);
if($result == false){echo mysqli_connect_error($conn);}

?>
