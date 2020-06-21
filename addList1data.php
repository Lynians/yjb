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
      <title>1층 목록 추가</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>1층 물품 추가</h1>
    <div class = "list"></div>
    <form method = "post" action = "addList1.php">
      <?php
      $query = "insert into 1Floor values('".$_POST["name"]."','".$_POST["year"]."','".$_POST["month"]."','".$_POST["date"]."')";
      $result = mysqli_query($conn,$query);
      if($result) echo "Input Success<br>";
      else echo "<hr>";
      ?>
      <input type = submit value = "돌아가기">
    </form>
  </body>
</html>
