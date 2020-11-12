<?php
include("./dbconn_my.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>비밀번호 확인</title>
    <style media="screen">
      @import url(inyrobar.css);
      @import url(background.css);
      /* .container{
        position: relative;
        width:100%;
      } */
      .checkpwd{
        align-items: center;
        text-align: left;
        width: 33%;
      }
    </style>
    <header>
      <h1 onclick="location.href='Main.html'">INYRO</h1>
      <nav>
        <span onclick="location.href='yunjin2.html'">로그인</span>
        <span onclick="location.href='yunjin5.html'">회원가입</span>
        <span onclick="location.href='my_profile.php'">프로필</span>
      </nav>
    </header>
  </head>
  <body>
    <div class="container" align="center">
      <div class="checkpwd">
      <form action="./my_checkpassword2_check.php" method="post">
        <br><br><br><br>
        <h2 style="margin-top:20px; margin-bottom:20px">비밀번호 확인</h2>
        <!-- <label for="usrname">Username</label>
        <input type="text" id="usrname" name="usrname" required> -->
        <label for="psw"><b> Password</b></label>
        <input type="password" id="psw" name="mb_password" style="width:500px; height:35px; margin-bottom:15px;">
        <div class="btpwd" align="center">
            <input class="mybt" type="submit" value="확인" style="width:100px; height:35px;" onclick="location.href='my_checkpassword2_check.php'">
        </div>
      </form>
      </div>
    </div>
    <?php
    $mb_id = $_SESSION['ss_mb_id'];

    $sql = " SELECT * FROM member WHERE mb_id = TRIM('$mb_id') ";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);

    mysqli_close($conn); // 데이터베이스 접속 종료
    ?>

  </body>
</html>
