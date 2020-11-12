<!DOCTYPE html>
<?php
include "./dbconn_yj.php";
if($_POST["mb_id"] == "" || $_POST["mb_email"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back();</script>';
	}else{
    $mb_id = trim($_POST['mb_id']);
    $mb_email = trim($_POST['mb_email']);

    $_SESSION['ss_mb_id_check'] = $mb_id;


    $sql = "SELECT * FROM member where mb_id = '$mb_id' AND mb_email = '$mb_email' ";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);
    mysqli_close($conn);


    if($mb["mb_id"] == $mb_id){
    	// echo "<script>alert('".$mb['mb_name']."님의 ID는 ".$mb['mb_id']."입니다.'); </script>";
      echo "<script>location.replace('./yj_pwupdate.html');</script>";

    }else{
    echo "<script>alert('없는 계정입니다.'); history.back();</script>";
    }

}
?>
