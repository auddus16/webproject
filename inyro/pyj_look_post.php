<?php
// 1. 공통 인클루드 파일
include ("./dbconn_pyj.php");

// 2. 글 데이터 불러오기

$index=$_GET['index'];
$sql = "SELECT * FROM post where post_title = trim('$index')";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <br/>
    <table style="width:630px;height:50px;border:5px #CCCCCC solid;">
        <tr>
            <td align="center" valign="middle" style="font-zise:15px;font-weight:bold;">글보기</td>
        </tr>
    </table>
    <br/>
    <table cellspacing="1" style="width:630px;height:80px;border:0px;background-color:#999999;">
        <tr>
            <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">글제목</td>
            <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?php echo $post['post_title'];?></td>
        </tr>
        <tr>
            <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">작성자</td>
            <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?php echo $post['mb_id'];?></td>
        </tr>
        <tr>
            <td align="center" valign="middle" style="width:200px;background-color:#CCCCCC;">작성일</td>
            <td align="left" valign="middle" style="width:800px;background-color:#FFFFFF;padding:5px;"><?php echo $post['post_datetime'];?></td>
        </tr>
    </table>
    <br>
    <div >
      <?php echo $post['post_text'];?>
    </div>
  </body>
</html>
