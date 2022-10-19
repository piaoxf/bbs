<?php
    require("./app/database/connect.php");  //DBと接続
    
    //送信ボタンが押されているとき、ユーザー名とコメント内容を送信
    if(isset($_POST["submitButton"])){

      $post_date = date("Y-m-d H:i:s");

     $sql = "INSERT INTO `comment` (`username`, `body`, `post_date`) VALUES (:username, :body, :post_date);";
     $stmt = $pdo->prepare($sql);

     //値をセット
     $stmt->bindParam(":username", $_POST["username"], PDO::PARAM_STR);
     $stmt->bindParam(":body", $_POST["body"], PDO::PARAM_STR);
     $stmt->bindParam(":post_date", $post_date, PDO::PARAM_STR);

     $stmt->execute();
    }
    
    //コメントdataをDBから取得
    $comment_array = array();
    $sql = "SELECT * FROM comment";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $comment_array = $stmt;
    // var_dump($comment_array);
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
  <header>
    <!-- タイトルを表示 -->
    <h1 class="title">掲示板ＢＢＳ</h1>
    <hr>
  </header>

  <!-- スレッドのタイトルを表示   -->
  <div class="threadWrapper">
    <div class="childWrapper">
      <div class="threadTitle">
        <span>[タイトル]</span> 
        <h1>掲示板BBS</h1>
      </div>
      <section>
        <?php foreach($comment_array as $comment):?>
        <article>
          <div class="wrapper">
            <div class="nameArea">
              <span>名前：</span>
              <p class="username"><?= $comment["username"]; ?></p>
              <time>：<?= $comment["post_date"]; ?></time>
            </div>
            <P class="comment"><?= $comment["body"]; ?></P>
          </div>
        </article>
        <?php endforeach ?>
      </section>
      <form class="formWrapper" method="POST">
        <div>
          <input type="submit" value="書き込み" name="submitButton">
          <label>名前：</label>
          <input type="text" name="username">
        </div>
        <div>
          <textarea class="commentTextarea" name="body"></textarea>
        </div>
      </form>
    </div>
  </div>

  <!-- 名前、日時、コメントをデータベースから取得 -->
  
</body>
</html>