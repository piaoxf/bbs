<?php
//コメントdataをDBから取得
    $thread_array = array();
    $sql = "SELECT * FROM thread";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $thread_array = $stmt;
    // var_dump($comment_array);

    //db接続を切る
    // $pdo = null;
    // $stmt = null;