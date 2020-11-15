<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inyro</title>
    <style media="screen">
      @import url(menubar.css);
      /* @import url(inyrobar.css);
      @import url(background.css); */
    </style>
    <script src="menubar.js"></script>
    <?php
    session_start(); include("headbar.php") ?>
  </head>
  <body>
    <br><br><br>
    <nav style="position:fixed;">
      <div class="topnav">
        <a class="tablinks" onclick="openCity(event, 'introduction'); location.href='#introduction';">Introduction</a>
        <a class="tablinks" onclick="openCity(event, 'introduction'); location.href='#activity';">Activity</a>
        <a class="tablinks" onclick="openCity(event, 'introduction'); location.href='#about';">About</a>
        <a class="tablinks" onclick="openCity(event, 'introduction'); location.href='#executive';">Executive</a>
        <a class="tablinks" onclick="openCity(event, 'introduction'); location.href='yejin12.php';">Post</a>
      </div>
    </nav>
      <br><br><br>
      <section align="center" style="margin-bottom:100px">
          <img src="main1_1.png" width="1300" height="700">
      </section>

		<section id="introduction" class="section1" align="center">
		  <iframe id="main1" src="main1.html" width="1400" height="800" frameborder="0"></iframe>
		</section>

		<section id="activity" class="section2">
			<div align="center">
					<iframe id="main2" src="main2.html" width="1400" height="910" frameborder="0"></iframe>
          <!-- <input type="button" id="more" style="font-size:15px;" value="더보기" onclick="location.href='gallery.html'"> -->
			</div>
		</section>
		<section id="about" class="section3" style="margin-bottom:100px">
			<div align="center">
					<iframe id="main3" src="main3.php" width="1400" height="700" frameborder="0"></iframe>
			</div>
		</section>
		<section id="executive" class="section4" style="margin-bottom:50px">
			<div align="center">
					<iframe id="main4" src="main4.html" width="1400" height="800" frameborder="0"></iframe>
			</div>
		</section>
    <footer id="infor">
      <hr color="skyBlue" size="2">
      <div style="margin:10px;">
        <p style="margin:0;">주소: 상명대학교 서울캠퍼스 (03016) 서울시 종로구 홍지문 2길 10 상명대학교 문화예술관 U311호</p>
        <p style="margin:0;">홈페이지 문의: auddus16@naver.com</p>
        <p style="margin:0;"><b>개발자: 김윤진 박예진 황명연</b></p>
        <p align="center">Copyright © 2020. 상금나한테조. All rights reserved</p>
      </div>
    </footer>
  </body>
</html>
