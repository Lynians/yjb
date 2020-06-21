<!DOCTYPE html>
<html>
  <head>
      <title>2층 목록 추가</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>2층 물품 추가</h1>
    <form method = "post" action = "addList2data.php">
    <div class = "addButton">
      <input type = "submit" value = "Add Item">
      <input type = "button" value = "돌아가기" onclick = "location.href='2Floor.php'" />
    </div>
    <div class = "list"></div>
    <div class = "addButton">이름</div>
    <input type="text" name = name value="추가할 품목 이름"/>
    <div class = "addButton">유통기한</div>
    <select name = "year">
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
      <option value="2023">2023</option>
    </select>
    년
    <select name = "month">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
    월
    <select name = "date">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
    일
  </form>
  </body>
</html>
