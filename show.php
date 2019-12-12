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
  <link rel="stylesheet" href="style2.css">
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
 <!-- <h1>作品集<h1><center> -->

 
 <?php
        foreach ($pdo->query('select * from files' ) as $row) {

      ?>

      <table>
      <?php
      if($row['type']=="image/jpeg"){
      ?>
          <h3><?=explode(".",$row ['name'])[0];?></h3>
          <tr>
            <td><img src="<?=$row['path'];?>" alt=""></td>
          </tr>
          <hr>
          <?php

      }else{
        ?>
           <h3><?=explode(".",$row ['name'])[0];?></h3>
          <tr>
            <td><video controls src="<?=$row['path']?>"></video></td>
          </tr>
          <hr>
      <?php
        }
      }
      ?>
      </table>
      <div class="buttons">
<br><br>
<a class="btn fill" href="index.php" target="_blank">回首頁</a>
   
   </div>