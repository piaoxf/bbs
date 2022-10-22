<?php 
  require("../database/connect.php");  //DBと接続] 
  include("../function/thread_add.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- cssを読み込む -->
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- ブラウザに表示 -->
  <title>新規スレッド作成</title>
</head>

<body>
  <!-- headerを読み込む -->
  <?php include("../parts/header.php");?>

 <!-- validationを読み込む -->
  <?php include("../parts/validation.php"); ?>
 
 <!-- threadを読み込む -->
 <!-- <?php include("./app/parts/thread.php"); ?> -->

 <!-- <?php include("./app/parts/newThread.php"); ?> -->

 <div style="padding-left: 36px; colorpx; color:blue;">
  <h2 style="margin-top: 20px; margin-bottom: 0;">  新規スレッドを立ち上げ</h2>
 </div>

<form class="formWrapper" method="POST">
  <div>
    <label>スレッド名</label>
    <input type="text" name="title">
    <label></label>
    <input type="text" name="username">
  </div>
  <div>
    <textarea class="commentTextarea" name="body"></textarea>
  </div>
  <input type="submit" value="立ち上げ" name="threadButton">
</form>

  <!-- 名前、日時、コメントをデータベースから取得 -->
 
</body>

<header href="index.php">
</html>