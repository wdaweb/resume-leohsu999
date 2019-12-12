<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=cv";
$pdo=new PDO($dsn,'root',"");
session_start();
$sql=$pdo->prepare('insert into job values(null, ?, ?)');
if ($sql->execute([$_REQUEST['j1'],$_REQUEST['c1']])) {
	echo '新增成功。';
} else {
	echo '新增失敗。';
}
header("location:insert_j.php");
?>