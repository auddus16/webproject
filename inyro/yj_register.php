<!DOCTYPE html>
<?php
include("./dbconn_yj.php");

$mode = "insert";
$title = "회원가입";
$modify_mb_info = '';

?>
<html>
  <head>
<meta charset="utf-8">
<title>회원가입</title>
<style>
  @import url(inyrobar.css);
  @import url(background.css);

  #item{
    align-items: center;
    width: 33%;
    text-align: left;
  }
</style>
<header>
  <h1 onclick="location.href='Main.html'">INYRO</h1>
  <nav>
    <span onclick="location.href='yj_login.php'">로그인</span>
    <span onclick="location.href='yj_register.php'">회원가입</span>
    <span onclick="location.href='my_profile.php'">프로필</span>
  </nav>
</header>
  </head>
  <body>
    <br><br><br>
    <form action="./yj_register_update.php" onsubmit="return fregisterform_submit(this);" method="post">
      <input type="hidden" name="mode" value="<?php echo $mode ?>">

<div class="container" align='center'>
  <div id="item">
    <h2 style="margin-top:40px; margin-bottom:20px">회원가입</h2>
    <label for="id"><b>아이디</b></label>
    <br>
    <input type="text" placeholder="아이디" name="mb_id" style="width:500px; height:35px; margin-bottom:15px;" value="<?php echo $mb['mb_id'] ?>" >
    <br>

    <label for="pw"><b>비밀번호</b></label>
    <br>
    <input type="password" placeholder="비밀번호" name="mb_password" style="width:500px; height:35px; margin-bottom:15px;" value="<?php echo $mb['mb_password'] ?>" >
    <br>

    <label for="pwcheck"><b>비밀번호 확인</b></label>
    <br>
    <input type="password" placeholder="비밀번호 확인" name="mb_password_re" style="width:500px; height:35px; margin-bottom:15px;" value="<?php echo $mb['mb_password_re'] ?>" >

    <!-- <button type="submit" style="width:100px; height:30px; margin-bottom:10px;">확인하기</button>
    <span>일치합니다.</span>
    <br> -->

    <label for="uname"><b>이름</b></label>
    <br>
    <input type="text" placeholder="이름" name="mb_name" style="width:500px; height:35px; margin-bottom:15px;" value="<?php echo $mb['mb_name'] ?>" >
    <br>

    <label for="email"><b>이메일주소</b></label>
    <br>
    <input type="text" placeholder="이메일주소" name="mb_email" style="width:500px; height:35px; margin-bottom:15px;" value="<?php echo $mb['mb_email'] ?>" >
    <br>

    <label for="schoolnum"><b>학번</b></label>
    <br>
    <input type="text" placeholder="학번" name="mb_studentnum" style="width:500px; height:35px; margin-bottom:15px;" value="<?php echo $mb['mb_studentnum'] ?>" >
    <br>

    <label for="major"><i class="fa fa-institution"></i><b>학과</b></label>
    <select class="" name="mb_major_id" style="width:500px; height:35px; margin-bottom:15px;">
      <option value=100 <?php echo ($mb['mb_major_id'] == "컴퓨터과학") ? "selected" : "";?> >컴퓨터과학과</option>
      <option value=101 <?php echo ($mb['mb_major_id'] == "전기공학과") ? "selected" : "";?>>전기공학과</option>
      <option value=102 <?php echo ($mb['mb_major_id'] == "게임학과") ? "selected" : "";?>>게임학과</option>
      <option value=103 <?php echo ($mb['mb_major_id'] == "휴먼지능공학과") ? "selected" : "";?>>휴먼지능공학과</option>
    </select><br>

    <!-- // <label for="check1"style="width:500px; height:35px; margin-bottom:15px;"><i class="fa fa-institution"></i> <b>재학생</b></label>
    // <input type="radio" name="mb_graduated" id="check1" value="1"><br>
    // <label for="check1"style="width:500px; height:35px; margin-bottom:15px;"><i class="fa fa-institution"></i> <b>졸업생</b></label>
    // <input type="radio" name="mb_graduated" id="check2" value="2"><br> -->
    <label><input type="radio" name="mb_graduated" value= 1 <?php echo ($mb['mb_graduated'] == "재학생") ? "checked" : "";?> >재학생</label>
		<label><input type="radio" name="mb_graduated" value= 2 <?php echo ($mb['mb_graduated'] == "졸업생") ? "checked" : "";?> >졸업생</label>

    <!-- <label for="code"></label>
    <br>
    <input type="text" placeholder="코드를 입력하세요" name="mb_code" style="width:500px; height:35px; margin-bottom:15px;" required>
    <br><br> -->
  </div>


  <button type="submit" style="width:110px; height:30px; margin-bottom:10px;" onclick="location.href='yj_login.php'">회원가입 완료</button>

  </body>
</html>
