<?php
  include_once "base.php";


$myself=$_POST['myself'];
$id=$_POST['id'];

//$sql="update user set name='$name',addr='$addr',tel='$tel',birthday='$birthday',email='$email' where id='".$_SESSION['id']."'";
$sql="update introduction set myself='$myself',id='$id' where id='$id' ";

$pdo->exec($sql);
echo "<a href='introduction.php'>編輯完成，回自傳管理後台</a>";
//header("location:member_center.php");

?>