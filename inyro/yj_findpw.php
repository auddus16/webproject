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
  <form method="post" action="yj_findpw_php.php">
  <div id="item">
    <h2 style="margin-top:40px; margin-bottom:20px">비밀번호 찾기</h2>
    <label for="mb_id"><b>아이디</b></label>
    <br>
    <input type="text" placeholder="아이디" name="mb_id" style="width:500px; height:35px; margin-bottom:15px;">
    <br>

    <label for="mb_email"><b>이메일주소</b></label>
    <br>
    <input type="text" placeholder="이메일주소" name="mb_email" style="width:500px; height:35px; margin-bottom:15px;">

    </div>
    <button type="submit" name="findpw" style="width:100px; height:30px; margin-bottom:10px;">확인</button>

  </form>

  </div>
</div>

    <!-- <button type="submit" style="width:100px; height:30px; margin-bottom:10px;" onclick="location.href='yunjin2.html'">로그인하기</button> -->

  </body>
</html>
