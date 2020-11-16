<?php
include("./dbconn_my.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>비밀번호 확인</title>
    <?php include("headbar.php") ?>
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
            <input class="mybt" type="submit" value="확인" style="width:100px; height:35px;">
        </div>
      </form>
      </div>
    </div>
  </body>
</html>
