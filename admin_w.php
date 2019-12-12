<?php
include_once "base.php";
$rows=all("work");  //取出全部的資料
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員列表</title>
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
<h1>個人作品刪除管理頁面</h1>
 <table>
    <tr>
        <td>作品類型</td>
        <td>作品1</td>
        <td>連結1</td>
        <td>作品2</td>
        <td>連結2</td>
        <td>刪除列表</td>
    </tr>
<?php
foreach($rows as $user){
?>    
    <tr>
        <td><?=$user['class'];?></td>
        <td><?=$user['work1'];?></td>
        <td><?=$user['link1'];?></td>
        <td><?=$user['work2'];?></td>
        <td><?=$user['link2'];?></td>
        <td><a href="del_work.php?id=<?=$user['id'];?>">刪除</a></td>
    </tr>
<?php
}
?>
</table>   
</body>
<br><br>
<input type="button" value="回到管理後台" onclick="location.href='member_center.php'">
<input type="button" value="回到前台" onclick="location.href='index.php'">
</html> 