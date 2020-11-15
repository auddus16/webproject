<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<style media="screen">
  table{
    border-collapse:collapse;
  }
  td,th{
    text-align:center;
    padding:10px;
    height:20px;
    width:200px;
  }
  thead{
    background:darkgray;
  }
  td{
    border-bottom:1px solid gray
  }
</style>
  </head>
  <body>
    <h4>검색 결과입니다.</h4>
    <table>
      <thead>
        <tr><th>아이디</th><th>제목</th><th>작성시간</th></tr>
      </thead>
      <tbody>

  <?php
            include("./dbconn_pyj.php");

                $variable=trim($_POST['select']);
                $input=trim($_POST['input']);
                // $md_new_id=trim($_POST['input']);


                if($variable=="1"){
                    $sql = "SELECT * FROM post where post_title = '$input' ";

                }else{
                  $sql = "SELECT * FROM post where mb_id = '$input' ";
                }
                $result = mysqli_query($conn, $sql);
                //
                // echo $mb['post_title'];
                  while( $mb_row = mysqli_fetch_array( $result ) ) {
                    echo '<tr><td>'. $mb_row[ 'mb_id' ] . '</td><td>' . $mb_row[ 'post_title' ] . '</td><td>' . $mb_row[ 'post_datetime' ] . '</td></tr>';
                  }
                  // echo "<script>location.replace('./pyj_search_result.php');</script>";

?>

</tbody>
</table>
</body>
</html>
