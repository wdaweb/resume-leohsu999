<?php
include_once "base.php";
$rows=all("job");  //取出全部的資料
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
<h1>求職條件刪除管理頁面</h1>
 <table>
    <tr>
        <td>編號</td>
        <td>職位名稱</td>
        <td>條件說明</td>
        <td>刪除列表</td>
    </tr>
<?php
foreach($rows as $user){
?>    
    <tr>
        <td><?=$user['id'];?></td>
        <td><?=$user['j1'];?></td>
        <td><?=$user['c1'];?></td>
        <td><a href="del_job.php?id=<?=$user['id'];?>">刪除</a></td>
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