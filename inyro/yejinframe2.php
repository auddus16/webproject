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
    <table>
      <thead>
        <tr><th>아이디</th><th>제목</th><th>작성시간</th></tr>
      </thead>
      <tbody>
        <?php
            include("./dbconn_pyj.php");
            $jb_sql = "SELECT * FROM post where post_category_id=2";
            $jb_result = mysqli_query( $conn, $jb_sql );
            while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
              echo '<tr><td>'. $jb_row[ 'mb_id' ] . '</td><td>' . $jb_row[ 'post_title' ] . '</td><td>' . $jb_row[ 'post_datetime' ] . '</td></tr>';
            }
          ?>
      </tbody>
    </table>
  </body>
</html>
