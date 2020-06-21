<?php
  $conn = mysqli_connect(
    'localhost',
    'root',
    '123456',
    'yjb');
    mysqli_set_charset($conn,"utf-8");
    $sql = "SELECT * FROM 1Floor";
    $result = mysqli_query ($conn,$sql);
    $list = '';

?>
<!DOCTYPE html>
<html>
  <head>
      <title>1층 목록</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style.css">
    <script>
      function removeItem(){
        document.getElementById("list").removeChild(this);
        saveList();
      }
      function loadList(){
        document.getElementById("list").innerHTML=localStorage.storedList;
        for(var i = 0; i < list.children.length;i++)}
        list.children[i].onclick=removeItem;
      }
    </script>
  </head>
  <body>
    <h1>1층 목록</h1>
    <form method = "post" action = "delete1data.php">
    <div class = "addButton">
      <input type = "button" value = "Add Item" onclick = "location.href='addList1.php'" />
      <input type="text" name = item value="삭제할 품목 이름"/>
      <input type = "submit" value = "Delete Item"/>
      <input type = "button" value = "돌아가기" onclick = "location.href='index.html'" />
    </div>
    </form>
      <div class = "list">   이름         유통기한</div>
      <?php
      while($row = mysqli_fetch_array($result)){
          echo "&nbsp;&nbsp;&nbsp;&nbsp;".$row[name]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[year].".".$row[month].".".$row[date]."<br/>";
      }
      ?>
  </body>
</html>
