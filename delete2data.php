<?php
  $conn = mysqli_connect(
    'localhost',
    'root',
    '123456',
    'yjb');
    mysqli_set_charset($conn,"utf-8");
?>
<!DOCTYPE html>
<html>
  <head>
      <title>2층 물품 삭제</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>2층 물품 삭제</h1>
    <div class = "list"></div>
    <form method = "post" action = "2Floor.php">
      <?php
      $item = $_POST['item'];
      $query = "DELETE FROM 2Floor WHERE name = '$item'";
      $result = mysqli_query($conn,$query);
      if($result) echo "성공적으로 삭제하였습니다.<br>";
      else echo "<hr>";
      ?>
      <input type = submit value = "돌아가기">
    </form>
  </body>
</html>
