<?php
//コメントdataをDBから取得
    $comment_array = array();
    $sql = "SELECT * FROM comment";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $comment_array = $stmt;
    // var_dump($comment_array);
    