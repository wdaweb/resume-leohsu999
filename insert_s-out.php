<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=cv";
$pdo=new PDO($dsn,'root',"");
session_start();
$sql=$pdo->prepare('insert into skill values(null,?)');
if ($sql->execute([$_REQUEST['s1']])) {
	echo '新增成功。';
	header("location:insert_s.php");
} else {
	echo '新增失敗。';
}
header("location:insert_s.php");
?>
