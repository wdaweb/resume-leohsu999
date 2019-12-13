<?php
/**
 * 1.建立資料庫及資料表來儲存檔案資訊
 * 2.建立上傳表單頁面
 * 3.取得檔案資訊並寫入資料表
 * 4.製作檔案管理功能頁面
 */
$dsn="mysql:host=localhost;charset=utf8;dbname=cv";
$pdo=new PDO($dsn,"root","");
if(!empty($_FILES) && $_FILES['file']['error']==0){
   
    $type=$_FILES['file']['type'];
    $filename=$_FILES['file']['name'];
    $path="./upload/";
    
    move_uploaded_file($_FILES['file']['tmp_name'] , $path . $filename);
    $sql="insert into files (`name`,`type`,`path`) values('$filename','$type','" . $path . $filename . "')";
    $result=$pdo->exec($sql);
    if($result==1){
        echo "上傳成功";
    }else{
        echo "DB有誤";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>作品集檔案上傳管理</title>
    <link rel="stylesheet" href="style.css">
    <style>
    a{
        display: inline-block;
        border: 1px solid #ccc;
        padding: 5px 15px;
        border-radius: 20px;
        box-shadow: 1px 1px 3px #ccc;
    }
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
<h1 class="header">作品集檔案上傳管理</h1>
<!----建立上傳檔案表單及相關的檔案資訊存入資料表機制----->
<form action="manage.php" method="post" enctype="multipart/form-data">
  檔案：<input type="file" name="file" ><br>
  <input type="submit" value="上傳">
</form>

<!----透過資料表來顯示檔案的資訊，並可對檔案執行更新或刪除的工作----->

<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>type</td>
        <td>path</td>
        <td>create time</td>
        <td>操作</td>
        <td>備註</td>
    </tr>

    <?php
        $sql="select * from files";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $file) {  
    ?>
    <tr>
        <td><?=$file['id'];?></td>
        <td><?=$file['name'];?></td>
        <td><?=$file['type'];?></td>
        <td><?=$file['path'];?></td>
        <td><?=$file['create_time'];?></td>
       
        <td>
            <a href="edit_file.php?id=<?=$file['id'];?>">更新檔案</a>
            <a href="del_file.php?id=<?=$file['id'];?>">刪除檔案</a>
        
        </td>
        <td><?=$file['note'];?></td>
    </tr>
   
    <?php
     }
    ?>

</table>
<br>
<input type ="button" onclick="history.back()" value="回上一頁"></input>

</body>
</html>