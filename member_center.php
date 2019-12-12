<?php
  include_once "base.php";

if(empty($_SESSION['login'])){
  header("location:index.php");
  exit();
}
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
        <h1>履歷後台管理系統</h1>
        <h2></h2>

      </div>
      <div class="download">
        <a href="index.php" class="content4">履歷前台</a><br><br>
        <a href="manage.php" class="content4">作品集檔案上傳平台</a><br><br>
        <a href="introduction.php" class="content4">自傳管理後台</a>
        <!-- <input type="button" value="回前台" onclick="self.location.href='index.php'"/> -->
      </div>

    </section>

      <!-- <a href="logout.php">登出</a>

    <div class="private">


  


        // $sql="select * from user where id='".$_SESSION['id']."'";
        //echo $sql;
        // $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        //print_r($user);

      
      <form action="edit_user.php" method="post">
      <table>
        <tr>
          <td>id</td>
          <td><?=$user['id'];?></td>
        </tr>
        <tr>
          <td>acc</td>
          <td><?=$user['acc'];?></td>
        </tr>
        <tr>
          <td>pw</td>
          <td><?=$user['pw'];?></td>
        </tr>
        <tr>
          <td>姓名</td>
          <td><input type="text" name="name" id="name" value="<?=$user['name'];?>"></td>
        </tr>
        <tr>
          <td>英文姓名</td>
          <td><input type="text" name="ename" id="ename" value="<?=$user['ename'];?>"></td>
        </tr>
        <tr>
          <td>技能</td>
          <td><input type="text" name="skills" id="skills" value="<?=$user['skills'];?>"></td>
        </tr>
        <tr>
          <td>執照</td>
          <td><input type="text" name="license" id="license" value="<?=$user['license'];?>"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="hidden" name="id" value="<?=$user['id'];?>">
            <input type="submit" value="編輯">
          </td>
        </tr>
      </table>
    </form>
    </div>
    <a href="login.php">回首頁</a>
  </div> -->
  <section class="content">
      <section class="about">
        <h1>個人資料維護</h1>
        <a href="logout.php">登出會員後台</a>
      <br><br>
      <?php
      $sql="select * from information where 1";
      //echo $sql;
      $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
      //print_r($user);

      ?>

      <form action="i_edit.php" method="post">
   
      <table>
    
        <tr>
        <td>acc</td>
          <td><input type="text" name="acc" id="acc" value="<?=$user['acc'];?>"></td>
        </tr>
        <tr>
        <td>pw</td>
          <td><input type="text" name="pw" id="pw" value="<?=$user['pw'];?>"></td>
        </tr>  
        <tr>
        <td>姓名</td>
          <td><input type="text" name="name" id="name" value="<?=$user['name'];?>"></td>
        </tr>
        <tr>
          <td>電子郵件</td>
          <td><input type="text" name="email" id="email" value="<?=$user['email'];?>"></td>
        </tr>
        <tr>
          <td>座右銘</td>
          <td><textarea name="motto"  rows="7" ><?=$user['motto'];?></textarea>
        </tr>

        <tr>
          <td colspan="2">
            <input type="hidden" name="id" value="<?=$user['id'];?>">
            <input type="submit" value="編輯">
          </td>
        </tr>
      </table>
    </form>  <hr>
    <section class="content1">
      <section class="about">
        <h1>專業證照維護</h1>
        <input type="button" value="新增資料" onclick="location.href='insert_l.php'">
        <input type="button" value="挑選刪除資料" onclick="location.href='del_license.php'">
     <br><br>
    <br>
        <?php
        foreach ($pdo->query('select * from license' ) as $row) {


      ?>
      <form action="l_edit.php" method="post">
      <table>
      

      <tr>
          <td>專業執照</td>
          <td><input type="text" name="l1" id="l1" value="<?=$row['l1'];?>"></td>
        </tr>

       

          <td colspan="2">
			<input type="hidden" name="id" value="<?=$row['id'];?>">
	
            <input type="submit" value="編輯">
          </td>
        </tr>
      </table>
    </form>
<?php
  }
?>
   
    <hr>
    <section class="content1">
      <section class="about">
        <h1>軟體技術維護</h1>
        <input type="button" value="新增資料" onclick="location.href='insert_s.php'">
        <input type="button" value="挑選刪除資料" onclick="location.href='del_skill.php'">
     <br><br>
    <br>
        <?php
        foreach ($pdo->query('select * from skill' ) as $row) {


      ?>
      <form action="s_edit.php" method="post">
      <table>
      

      <tr>
          <td>軟體技術1</td>
          <td><input type="text" name="s1" id="s1" value="<?=$row['s1'];?>"></td>
        </tr>

      

          <td colspan="2">
			<input type="hidden" name="id" value="<?=$row['id'];?>">
            <input type="submit" value="編輯">
          </td>
        </tr>
      </table>
    </form>
<?php
  }
?>
    <hr>

<section class="content4">
  <section class="about">  
    <h1>職場經歷維護</h1>
    <input type="button" value="新增資料" onclick="location.href='insert_e.php'">
    <input type="button" value="挑選刪除資料" onclick="location.href='del_exp.php'">
     <br><br>
    <?php
    foreach ($pdo->query('select * from exp' ) as $row) {


  ?>
  <form action="e_edit.php" method="post">
  <table>
  <tr>
      <td>工作經歷</td>
      <td><input type="text" name="class" id="class" value="<?=$row['class'];?>"></td>
    </tr>
    <tr>
      <td>職務</td>
      <td><input type="text" name="c1" id="c1" value="<?=$row['c1'];?>"></td>
    </tr>
    
      <td colspan="2">
  <input type="hidden" name="id" value="<?=$row['id'];?>">
        <input type="submit" value="編輯">
      </td>
    </tr>
  </table>
</form>
<?php
}
?>


    <hr>

    <section class="content1">
      <section class="about">  
        <h1>媒體宣傳維護</h1>
        <input type="button" value="新增資料" onclick="location.href='insert_m.php'">
    <input type="button" value="挑選刪除資料" onclick="location.href='del_media.php'">
    <br><br>
    <?php
        foreach ($pdo->query('select * from media ' ) as $row) {
        
?>
    
      <form action="m_edit.php" method="post">
      <table>
      
      
      <tr>
          <td>媒體類型</td>
          <td><input type="text" name="exposure" id="exposure" value="<?=$row['exposure'];?>"></td>
        </tr>

        <tr>
          <td>媒體</td>
          <td><input type="text" name="m1" id="m1" value="<?=$row['m1'];?>"></td>
        </tr>
        <tr>
          <td>媒體連結</td>
          <td><input type="text" name="link1" id="link1" value="<?=$row['link1'];?>"></td>
          </tr>
		  <input type="hidden" name="id"  value="<?=$row['id'];?>">
          <td colspan="2">
            <input type="submit" value="編輯">
          </td>
        </tr>
      </table>
  </form>


	<?php
} 
?>

   <hr>
    <h1>求職條件維護</h1>

    <input type="button" value="新增資料" onclick="location.href='insert_j.php'">
    <input type="button" value="挑選刪除資料" onclick="location.href='del_job.php'">
    <br><br>
    <?php
        foreach ($pdo->query('select * from job' ) as $row) {
?>
     
      <form action="j_edit.php" method="post">
      <table>
      
      
      <tr>
          <td>職位名稱</td>
          <td><input type="text" name="j1" id="j1" value="<?=$row['j1'];?>"></td>
        </tr>
        <tr>
          <td>條件說明</td>
          <td><input type="text" name="c1" id="c1" value="<?=$row['c1'];?>"></td>
        </tr>
        
		  <input type="hidden" name="id"  value="<?=$row['id'];?>">
          <td colspan="2">
            <input type="submit" value="編輯">
          </td>
        </tr>
      </table>
  </form>
  <hr>

	<?php
}
?>
</body>

</html>
        
  </main>
</body>
</html>

    
    