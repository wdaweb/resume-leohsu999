<?php
include_once "base.php";
$rows=all("media");  //取出全部的資料
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
    <style>
  table{
    border-collapse:collapse;
    border-spacing:0;
  }
  td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
  }
  </style>
</head>
<body>
<h1>個人媒體宣傳新增管理頁面</h1>
<table>
    <tr>
        <td>編號</td>
        <td>媒體類型</td>
        <td>作品</td>
        <td>連結</td>
    </tr>
    <?php
foreach($rows as $user){
?>    
    <tr>
        <td><?=$user['id'];?></td>
        <td><?=$user['exposure'];?></td>
        <td><?=$user['m1'];?></td>
        <td><?=$user['link1'];?></td>

<?php

}
?>
</table>   
</body>

</html>
<br><br>
<input type="button" value="回到管理後台" onclick="location.href='member_center.php'">
<input type="button" value="回到前台" onclick="location.href='index.php'">
<p>資料新增：</p>
<form action="insert_m-out.php" method="post">
媒體類型<input type="text" name="exposure">
媒體宣傳<input type="text" name="m1">
連結<input type="text" name="link1">
<input type="submit" value="確定新增">

</form>

