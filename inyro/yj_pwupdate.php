<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<title>비밀번호 찾기</title>
<style>
  #item{
    align-items: center;
    width: 33%;
    text-align: left;
  }
</style>
<?php include("headbar.php") ?>

  </head>
  <body>
    <br><br><br>

<div class="container" align='center'>
  <form method="post" action="yj_pwupdate_php.php">

    <div id="item">
    <h2 style="margin-top:40px; margin-bottom:20px">새로운 비밀번호 설정하기</h2>

    <label for="newpw"><b>새로운 비밀번호</b></label>
    <input type="password" placeholder="새로운 비밀번호" name="mb_password" style="width:500px; height:35px; margin-bottom:15px;">
    <br>

    <label for="newpwcheck"><b>비밀번호 확인</b></label>
    <br>
    <input type="password" placeholder="비밀번호 확인" name="mb_password_re" style="width:500px; height:35px; margin-bottom:15px;" >

    <!-- <button type="submit" style="width:100px; height:30px; margin-bottom:10px;">확인하기</button>
    <span>일치합니다.</span>
    <br><br> -->

  </div>
  <button type="submit" style="width:100px; height:30px; margin-bottom:10px;" onclick="location.href='yj_login.php'">확인</button>
  </form>
  </div>

  </body>
</html>
