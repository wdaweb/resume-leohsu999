<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=profile";
$pdo=new PDO($dsn,'root',"");
session_start();
$sql=$pdo->prepare('insert into work values(null,?, ?, ?, ?, ?)');
if ($sql->execute([$_REQUEST['class'],$_REQUEST['work1'], $_REQUEST['link1'],$_REQUEST['work2'],$_REQUEST['link2']])) {
	echo '新增成功。';
	header("location:insert_w.php");
} else {
	echo '新增失敗。';
}

?>
