<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <!-- <?php if(!isset($_SESSION["ss_mb_id"])){?>
      <script type="text/javascript">
  document.getElementById("test").innerHTML = "로그아웃";
</script>
<?php } ?> -->
    <header>
      <h1 onclick="location.href='Main.php'">INYRO</h1>
      <?php if(isset($_SESSION["ss_mb_id"])){?>
        <nav>
          <span class="login" onclick="location.href='yj_logout.php'">로그아웃</span>
          <!-- <span onclick="location.href='yj_register.php'">회원가입</span> -->
          <span onclick="location.href='my_profile.php'">프로필</span>
        </nav>
      <?php }
   else{?>
    <nav>
      <span class="login" onclick="location.href='yj_login.php'">로그인</span>
      <span onclick="location.href='yj_register.php'">회원가입</span>
      <!-- <span onclick="location.href='my_profile.php'">프로필</span> -->
    </nav>
  <?php } ?>
    </header>
  </head>
  <body>

  </body>
</html>
