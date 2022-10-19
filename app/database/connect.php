<?php

$user = "root";
$pass = "bbs";
    
//DBと接続
try {
  $pdo = new PDO('mysql:host=localhost;dbname=bbs', $user, $pass);
  // echo "DBと接続に完了しました。";
} catch(PDOException $e) {
  echo $e->getMessage();

}