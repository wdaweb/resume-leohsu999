<?php
  include_once "base.php";

if(empty($_SESSION['login'])){
  header("location:login.php");
  exit();
}

  include_once "base.php";
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>會員中心</title>
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
<main>
    <section class="info">
      <div class="bio">
        <img src="./img/profile.jpg" alt="avatar" class="avatar">
        <h1>自傳後台管理系統</h1>
        <h2></h2>

      </div>
      <div class="download">
      <a href="index2.php" class="content4">自傳前台</a><br><br>
      <a href="member_center.php" class="content4">履歷後台管理系統</a><br><br>
        <a href="index.php" class="content4">履歷前台</a><br><br>
        <a href="manage.php" class="content4">作品集檔案上傳平台</a><br><br>

        <!-- <input type="button" value="回前台" onclick="self.location.href='index.php'"/> -->
      </div>
    </section>
 
    <?php
        foreach ($pdo->query('select * from introduction' ) as $row) {
        }
      ?>

      <form action="in_edit.php" method="post">
   
      <table>
    
        <tr>
        <td>自傳</td>
        <td><textarea name="myself" cols="80" rows="50" ><?=$row['myself'];?></textarea>
          
        </tr>
      

        <tr>
          <td colspan="2">
            <input type="hidden" name="id" value="<?=$row['id'];?>">
            <input type="submit" value="編輯">
          </td>
        </tr>
      </table>
    </form>

    </body>

</html>
        
  </main>


