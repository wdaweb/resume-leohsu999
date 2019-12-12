<?php
include_once "base.php";
$rows=all("exp");  //取出全部的資料
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
<h1>個人職場經歷新增管理頁面</h1>
<table>
    <tr>
        <td>編號經歷</td>
        <td>職場經歷</td>
        <td>工作經歷</td>

    </tr>
    <?php
foreach($rows as $user){
?>    
    <tr>
        <td><?=$user['id'];?></td>
        <td><?=$user['class'];?></td>
        <td><?=$user['c1'];?></td>
    </tr>
  
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
<form action="insert_e-out.php" method="post">
職場經歷<input type="text" name="class">
工作經歷1<input type="text" name="c1">
<input type="submit" value="確定新增">

</form>

