<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<style>
  @import url(inyrobar.css);
  @import url(menubarpost.css);
  @import url(background.css);
</style>
<script src="menubarpost.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
  document.getElementById("mybutton").click();
});
</script>
  </head>
  <body>
<header>
  <h1 onclick="location.href='Main.html'">INYRO</h1>
  <nav>
    <span onclick="location.href='yunjin2.html'">로그인</span>
    <span onclick="location.href='yunjin5.html'">회원가입</span>
    <span onclick="location.href='myongyeon7.html'">프로필</span>
  </nav>
</header>
<br> <br> <br> <br>
<!-- Tab links -->
<div class="tab">
  <button id="mybutton" class="tablinks" onclick="openCity(event, 'introduction'); A();" style="text-align:center; font-weight:bold; font-size:20px;">자유</button>
  <button class="tablinks" onclick="openCity(event, 'introduction'); B();" style="text-align:center; font-weight:bold; font-size:20px;">과제</button>
  <button class="tablinks" onclick="openCity(event, 'introduction'); C();" style="text-align:center; font-weight:bold; font-size:20px;">Q&A</button>
  <button class="tablinks" onclick="openCity(event, 'introduction'); D();" style="text-align:center; font-weight:bold; font-size:20px;">갤러리</button>
</div>

<!-- Tab content -->
  <div id="introduction" class="tabcontent">
    <iframe id="frame" src="yejin14.html" width=100% height=100% frameborder="0"></iframe>
    <script>
      function A() {
        document.getElementById("frame").src = "yejin14.php";
      }
      function B() {

        document.getElementById("frame").src = "yejin15.php";
      }
      function C() {

        document.getElementById("frame").src = "yejin16.php";
      }
      function D() {

        document.getElementById("frame").src = "yejin17.php";
      }

    </script>

  </div>

  </body>
</html>
