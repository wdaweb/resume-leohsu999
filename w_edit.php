<?php
 include_once "base.php";

 echo $id=$_POST['id'];
 echo $class=$_POST['class'];
 echo $work1=$_POST['work1'];
 echo $link1=$_POST['link1'];

// echo $id=$_POST['id'];

//$sql="update user set name='$name',addr='$addr',tel='$tel',birthday='$birthday',email='$email' where id='".$_SESSION['id']."'";
$sql="update work set class='$class',work1='$work1',link1='$link1' where id='$id'";
// echo $sql;
$r =$pdo->exec($sql);
// print_r($r);
echo "<a href='member_center.php'>編輯完成，回履歷後台管理系統</a>";
// header("location:member_center.php");

?>