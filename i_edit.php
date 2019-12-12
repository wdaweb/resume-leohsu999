<?php
  include_once "base.php";
  echo $id=$_POST['id'];
  echo $acc=$_POST['acc'];
  echo $pw=$_POST['pw'];
  echo $name=$_POST['name'];
  echo $email=$_POST['email'];
  echo $motto=$_POST['motto'];

//$sql="update user set name='$name',addr='$addr',tel='$tel',birthday='$birthday',email='$email' where id='".$_SESSION['id']."'";
$sql="update information set acc='$acc',pw='$pw',name='$name',email='$email',motto='$motto',id='$id' where id='$id'";
$pdo->exec($sql);

echo "<a href='member_center.php'>編輯完成，回履歷後台管理系統</a>";
//header("location:member_center.php");

?>