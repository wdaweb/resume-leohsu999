<?php
include_once "base.php";
$rows=all("skill");  //取出全部的資料
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
<h1>個人專業證照清單新增管理頁面</h1>
<table>
    <tr>
        <td>編號</td>
        <td>軟體技術1</td>

    </tr>
    <?php
foreach($rows as $user){
?>    
    <tr>
        <td><?=$user['id'];?></td>
        <td><?=$user['s1'];?></td>
    </tr>
  
<?php

}
?>
</table>   
</body>

</html>
<input type="button" value="回到管理後台" onclick="location.href='member_center.php'">
<input type="button" value="回到前台" onclick="location.href='index.php'">
<p>資料新增：</p>
<form action="insert_s-out.php" method="post">

軟體技術<input type="text" name="s1">

<input type="submit" value="確定新增">
</form>

