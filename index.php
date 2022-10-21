<?php 
  require("./app/database/connect.php");  //DBと接続] 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- cssを読み込む -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- ブラウザに表示 -->
  <title>掲示板BBS</title>
</head>

<body>
  <!-- headerを読み込む -->
  <?php include("./app/parts/header.php");?>

 <!-- validationを読み込む -->
  <?php include("./app/parts/validation.php"); ?>
 
 <!-- threadを読み込む -->
 <?php include("./app/parts/thread.php"); ?>

  <!-- 名前、日時、コメントをデータベースから取得 -->
  
</body>

<header href="index.php">
</html>