<?php
  include_once "base.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>個人介紹</title>
  <link rel="stylesheet" href="style3.css">
  <style>
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
<?php
    $all=$pdo->query('select * from license')->fetchAll(PDO::FETCH_ASSOC);
        foreach ($all as $row) {
            echo "<ul>";
      ?>
        <div class="block">  
        <ul class="listSkill">
            
        <?php
           foreach($row as $k=> $r){
     ?>
  
     <?php 
        if(!empty($r)){
            if($k!="id")
            echo "<li>$r</li>";
        }
    ?>
  
 <?php
}
 ?>
</ul>
        </div>
<?php
    }

?>
