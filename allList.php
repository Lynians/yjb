<?php
  $conn = mysqli_connect(
    'localhost',
    'root',
    '123456',
    'yjb');
    mysqli_set_charset($conn,"utf-8");
    $sql = "SELECT * FROM 2Floor";
    $result = mysqli_query ($conn,$sql);
    $list = '';
    $sql2 = "SELECT * FROM 1Floor";
    $result2 = mysqli_query ($conn,$sql2);
    $list2 = '';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>전체 목록</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>전체 목록</h1>
    <div class = "addButton">
      <input type = "button" value = "돌아가기" onclick = "location.href='index.html'" />
    </div>
      <div class = "list">   이름         유통기한</div>
      <div> <2층 목록> </div>
      <?php
      while($row = mysqli_fetch_array($result)){
          echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row[name]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[year].".".$row[month].".".$row[date]."<br/>";
      }
      ?>
      <div> <1층 목록> </div>
      <?php
      while($row2 = mysqli_fetch_array($result2)){
          echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row2[name]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row2[year].".".$row2[month].".".$row2[date]."<br/>";
      }
      ?>
  </body>
</html>
