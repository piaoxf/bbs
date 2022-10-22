<?php
    $error_message = array();
    
    //送信ボタンが押されているとき、ユーザー名とコメント内容を送信
    if(isset($_POST["submitButton"])){

      //バリデーションチェック
      //usernameが空の場合、
      if(empty($_POST["username"])) {
        $error_message["username"]= "ユーザー名を入力してください";
      } else {
        $escape["username"] = htmlspecialchars($_POST["username"], ENT_QUOTES,"UTF-8");
      }
      //コメントが空の場合、
      if(empty($_POST["body"])) {
        $error_message["body"]= "コメントを入力してください";
      } else {
        $escape["body"] = htmlspecialchars($_POST["body"], ENT_QUOTES, "UTF-8");
      }

      if(empty($error_message)) {
        $post_date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO `comment` (`username`, `body`, `post_date`, `thread_id`) VALUES (:username, :body, :post_date, :thread_id);";
        $stmt = $pdo->prepare($sql);
   
        //値をセット
        $stmt->bindParam(":username",$escape["username"], PDO::PARAM_STR);
        $stmt->bindParam(":body", $escape["body"], PDO::PARAM_STR);
        $stmt->bindParam(":post_date", $post_date, PDO::PARAM_STR);
        $stmt->bindParam(":thread_id",$_POST["threadId"],PDO::PARAM_STR);
   
        $stmt->execute();
       }
      }