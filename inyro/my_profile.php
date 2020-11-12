<!DOCTYPE html>
<?php
include("./dbconn_my.php");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <title>개인정보</title>
  <style media="screen">
    @import url(inyrobar.css);
    @import url(background.css);
    /* .container{
      position: relative;
      width:100%;
    } */
    .formInfor{
      align-items: center;
      text-align: left;
      width: 33%;
    }
  </style>
  <header>
    <h1 onclick="location.href='Main.html'">INYRO</h1>
    <nav>
      <span onclick="location.href='yj_login.php'">로그인</span>
      <span onclick="location.href='yj_register.php'">회원가입</span>
      <span onclick="location.href='myongyeon7.html'">프로필</span>
    </nav>
  </header>
  </head>
  <body>
    <?php
    $mb_id = $_SESSION['ss_mb_id'];

    $sql = " SELECT * FROM member WHERE mb_id = TRIM('$mb_id') ";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);

    mysqli_close($conn); // 데이터베이스 접속 종료
    ?>
        <div class="container" align="center">
          <form action="./my_profile_update.php"name="memInfor" method="post">
              <div class="formInfor">
                <br><br><br><br>
                <h2 style="margin-top:20px; margin-bottom:20px">개인정보</h2>
                <label for="id" style="margin-bottom:20px;"><b> 아이디</b></label><br>
                <input type="text"  name="mb_id" value="<?php echo $mb['mb_id'] ?>" style="width:500px; height:35px; margin-bottom:15px;" disabled><br>

                <label for="name"><b> 이름</b></label><br>
                <input type="text" name="mb_name" value="<?php echo $mb['mb_name'] ?>" style="width:500px; height:35px; margin-bottom:15px;" disabled><br>

                <label for="email"><b> 이메일</b></label><br>
                <input type="text" name="mb_email" value="<?php echo $mb['mb_email'] ?>" style="width:500px; height:35px; margin-bottom:15px;" disabled><br>

                <label for="studentNum"><b> 학번</b></label><br>
                <input type="text" name="mb_studentnum" value="<?php echo $mb['mb_studentnum'] ?>" style="width:500px; height:35px; margin-bottom:15px;" disabled><br>

                <label for="major"><b> 학과</b></label><br>
                <input type="text" name="mb_major" value="<?php echo $mb['mb_major'] ?>"style="width:500px; height:35px; margin-bottom:15px;" disabled><br>

                  <label for="check1"><b> 재학생</b></label>
                  <input type="radio" name="check1" id="check1" value="1" disabled>
                  <label for="check2"><b> 졸업생</label>
                  <input type="radio" name="check1" id="check2" value="2" style="margin-bottom:15px;"checked><br>

                  <!-- <label for="checkcode"><b> 확인코드</b></label><br>
                  <input type="text" id="checkcode" name="checkcode" value="CS0020"style="width:500px; height:35px; margin-bottom:15px;" disabled><br> -->
                  <div class="btInfor"align="center">
                  <input class="mybt" type="button" name="modify" value="수정" onclick="location.href='my_checkpassword.php'" style="width:100px; height:30px; margin-right:10px">
                  <input class="mybt" type="button" name="withdraw" value="탈퇴" onclick="location.href='my_checkpassword2.php'" style="width:100px; height:30px; margin-left:10px">
                </div>
              </div>
          </form>
        </div>
  </body>
</html>
