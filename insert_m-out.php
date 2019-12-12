<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=cv";
$pdo=new PDO($dsn,'root',"");
session_start();
$sql=$pdo->prepare('insert into media values(null, ?, ?, ?)');
if ($sql->execute([$_REQUEST['exposure'],$_REQUEST['m1'],$_REQUEST['link1']])) {
	echo '新增成功。';
} else {
	echo '新增失敗。';
}
header("location:insert_m.php");
?>
