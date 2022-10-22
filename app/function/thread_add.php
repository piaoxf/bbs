<?php
$error = array();
if(isset($_POST["threadButton"])) {
  //スレッド名入力チェック
  if(empty($_POST["title"])) {
    $error["title"] = "タイトルを入力してください"; 
  } else {
    $escape["title"] = htmlspecialchars($_POST["title"], ENT_QUOTES, "UTF-8");
  }

  if(empty($_POST["username"])) {
    $error["username"] = "名前を入力してください";
  } else {
    $escape["username"] = htmlspecialchars($_POST["username"], ENT_QUOTES, "UTF-8");
  }

  if(empty($_POST["body"])) {
    $error["body"] = "コメントを入力してください";
  } else {
    $escape["body"] = htmlspecialchars($_POST["body"], ENT_QUOTES, "UTF-8");
  }

  if(empty($error)) {
    $post_date = date("Y-m-d H:i:j");

    //タイトルを追加
    $sql = "INSERT INTO thread (`title`) VALUES (:title);";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":title", $escape["title"], PDO::PARAM_STR);
    $stmt->execute();

    //コメントを追加
    $sql = "INSERT INTO comment (`username`, `body`, `post_date`, `thread_id`) VALUES (:username, :body, :post_date, (SELECT id FROM thread WHERE title = :title))";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":username", $escape["username"], PDO::PARAM_STR);
    $stmt->bindParam(":body", $escape["body"], PDO::PARAM_STR);
    $stmt->bindParam(":post_date", $post_date, PDO::PARAM_STR);
    $stmt->bindParam(":title",$escape["title"], PDO::PARAM_STR);
    // $stmt->bindParam(":title",$_POST["title"], PDO::PARAM_STR);
    $stmt->execute();
  }
  //hpへ遷移する
  header("Location: http://localhost:8083/2chan-bbs");
}
