<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<style>
@import url(background.css);
</style>

  </head>
  <body align="center">
<h2>글 작성하기</h2><br>
<form align='middle' method="post" enctype="multipart/form-data">
  <pre>
      <input rows="70" type="text" placeholder="제목을 입력하세요." style="width:500px; height:35px; margin-bottom:15px;" required>
      <select style="position:absolute; top:170px; left:411px; width:175px; height:30px; " name="option">
        <option text-align:center; value="1" selected>자유</option>
        <option text-align:center; value="2">과제</option>
        <option text-align:center; value="3">QNA</option>
        <option text-align:center; value="4">갤러리</option>
      </select>

      <input  class="yjbt" style="position:absolute; top:172px; left:600px;   border:1px solid black;" type="file" name="FileName">
      <textarea  cols="75" rows="15" placeholder="내용을 입력하세요."></textarea> <br>
      <button class="yjbtn" onclick="parent.location.href='yejin12.html'" style="width:100px; height:30px; margin-right:10px">등록하기</button>
  </pre>
  </body>
</html>
