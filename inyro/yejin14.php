<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<style>
@import url(background.css);
</style>

  </head>
  <body align="center">
    <h2>자유 게시판</h2>
    <button class="yjbtn" style="width:100px; height:30px; position:absolute;top:90px; left:360px;" onclick="location.href='pyj_post.php'">작성하기</button>
    <iframe style="position:absolute;top:120px; left:350px;" src="yejinframe1.php" width=50% height=400px frameborder="0"></iframe>


    <form action="./pyj_search_result.php" method="POST" style="position:absolute;top:90px; left:650px; ">
      <select name="select" style="height:30px;">
        <option value="1" selected>제목</option>
        <option value="2">작성자</option>
      </select>
      <input type="search" placeholder="입력하세요." name="input" style="height:30px;">
      <input class="mybt" style="width:100px; height:30px; margin-right:10px;" type="submit"onclick="parent.pyj_search_result.php" value="검색하기">
    </form>'
  </body>


</html>
