<?php
 include_once "base.php";

echo $id=$_POST['id'];
echo $class=$_POST['class'];
echo $c1=$_POST['c1'];

// echo $id=$_POST['id'];

//$sql="update user set name='$name',addr='$addr',tel='$tel',birthday='$birthday',email='$email' where id='".$_SESSION['id']."'";
$sql="update exp set class='$class',c1='$c1' where id='$id'";
// echo $sql;
$r =$pdo->exec($sql);
// print_r($r);
echo "<a href='member_center.php'>編輯完成，回履歷後台管理系統</a>";
// header("location:member_center.php");

?>