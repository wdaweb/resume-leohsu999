<?php

session_start();
if(!empty($_SESSION['login'])){
  header("location:member_center.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>個人線上履歷作品集管理系統</title>
  <!-- <link rel="stylesheet" href="style.css2"> -->
  <style>

*{
  box-sizing:border-box;
  margin:0;
  padding:0;
  font-family:"Microsoft JhengHei",Arial, Helvetica, sans-serif;
  list-style-type:none;
}
.wrapper,.member{
  margin:30px  auto 0 auto;
  border:1px solid #999;
  padding:20px;
  box-shadow:2px 2px 5px #ccc;
}
.wrapper{
  width:350px;
}
.member{
  width:850px;
}
.wrapper td{
  padding:5px 3px;
}
.wrapper input[type='text'],
.wrapper input[type='password']{
  padding:2px 2px;
  font-size:16px;
  width:100%;
}
.wrapper input[type='submit'],
.wrapper input[type='reset']{
  padding:5px 10px;
  margin:0 5px;
  font-size:16px;
}
h1{
  text-align: center;
  margin:150px auto 0 auto;
  text-shadow: 2px 2px 5px #999;
}
.ct{
  text-align: center;
}
.reg{
  font-size:12px;
  text-decoration: none;
}

.member .wellcome{
  /* your css here */
  
}
.member .private{
  /* your css here */

}
  </style>
</head>
<body>
  <?php

if(!empty($_GET['s'])){
  echo "註冊成功，請輸入帳密以登入";
}

if(!empty($_GET['err'])){
  echo "<h2>帳號或密碼錯誤</h2>";
}


?>
  <h1>個人線上履歷作品集管理系統</h1>
<form action="login_api.php" method="post"> 
<table class="wrapper">
  <tr>
    <td>帳號：</td>
    <td><input type="text" name="acc" id="acc"></td>
  </tr>
  <tr>
    <td>密碼：</td>
    <td><input type="password" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
        <input type="submit" value="登入">
        <input type="reset" value="重置">
    </td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
      <!-- <a href="reg.php" class="reg">註冊會員</a>  -->
    </td>
  </tr>
</table>
</form>   
</body>
</html>
