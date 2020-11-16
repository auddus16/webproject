<!DOCTYPE html>
<?php
include("./dbconn_my.php");
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <title>개인정보수정</title>
  <?php include("headbar.php") ?>
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
          <form action="./my_modify_update.php"name="memInfor" method="post">
              <div class="formInfor">
                <br><br><br><br>
                <h2 style="margin-top:20px; margin-bottom:20px">개인정보</h2>
                <label for="id" style="margin-bottom:20px;"><b> 아이디</b></label><br>
                <input type="text"  name="mb_id" value="<?php echo $mb['mb_id'] ?>" style="width:500px; height:35px; margin-bottom:15px;"><br>

                <label for="name"><b> 이름</b></label><br>
                <input type="text" name="mb_name" value="<?php echo $mb['mb_name'] ?>" style="width:500px; height:35px; margin-bottom:15px;"><br>

                <label for="email"><b> 이메일</b></label><br>
                <input type="text" name="mb_email" value="<?php echo $mb['mb_email'] ?>" style="width:500px; height:35px; margin-bottom:15px;"><br>

                <label for="studentNum"><b> 학번</b></label><br>
                <input type="text" name="mb_studentnum" value="<?php echo $mb['mb_studentnum'] ?>" style="width:500px; height:35px; margin-bottom:15px;"><br>

                <label for="major"><i class="fa fa-institution"></i><b>학과</b></label>
                <select class="" name="mb_major_id" style="width:500px; height:35px; margin-bottom:15px;">
                  <option value=100 <?php echo ($mb['mb_major_id'] == "100") ? "selected" : "";?> >컴퓨터과학과</option>
                  <option value=101 <?php echo ($mb['mb_major_id'] == "101") ? "selected" : "";?>>전기공학과</option>
                  <option value=102 <?php echo ($mb['mb_major_id'] == "102") ? "selected" : "";?>>게임학과</option>
                  <option value=103 <?php echo ($mb['mb_major_id'] == "103") ? "selected" : "";?>>휴먼지능공학과</option>
                </select><br>
                <label><input type="radio" name="mb_graduated" value= 1 <?php echo ($mb['mb_graduated'] == "1") ? "checked" : "";?> >재학생</label>
                <label><input type="radio" name="mb_graduated" value= 2 <?php echo ($mb['mb_graduated'] == "2") ? "checked" : "";?> >졸업생</label><br>

                  <!-- <label for="checkcode"><b> 확인코드</b></label><br>
                  <input type="text" id="checkcode" name="checkcode" value="CS0020"style="width:500px; height:35px; margin-bottom:15px;" disabled><br> -->
                  <div class="btInfor"align="center">
                <input class="mybt" type="submit" name="modify" value="수정 완료" onclick="location.href='my_profile.php'" style="width:100px; height:30px; margin-right:10px">
                </div>
              </div>
          </form>
        </div>
  </body>
</html>
