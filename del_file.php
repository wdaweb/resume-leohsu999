<style>
.box{
  width:300px;
  height:120px;
  border:1px solid #ccc;
  box-shadow:0 0 5px #ccc;
  margin:20px auto;
  text-align:center;

}
a{
  text-decoration:none;
  display:inline-block;
  padding:5px 15px;
  margin:15px 5px 0 5px;
  border:1px solid #aaa;
  border-radius:12px;
  box-shadow:0 0 5px #ccc;
}
.meg{
  padding:20px 0;
  text-align:center;
}
</style>
<?php

include_once "base.php";
$id=$_GET['id'];

if(!empty($_GET['do'])){
    if($_GET['do']=="true"){
        $sql="select * from files where id='$id'";
        $origin=$pdo->query($sql)->fetch();
        $origin_file=$origin['path'];
        unlink($origin_file);
    
        $sql="delete from files where id='$id'";
        $pdo->exec($sql);
        header("location:manage.php");
    }else{

       header("location:manage.php");
    }
}
?>
<div class="box">
<div class="meg">你是否確認刪除檔案?</div>

<a href="?do=true&id=<?=$id;?>">確認刪除</a>
<a href="?do=false&id=<?=$id;?>">取消</a>
</div>