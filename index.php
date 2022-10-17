<?php

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
        <article>
          <div class="wrapper">
            <div class="nameArea">
              <span>名前：</span>
              <p class="username">eric</p>
              <time>：2022/10/18 6:16</time>
            </div>
            <P class="comment">手書きコメントです</P>
          </div>
        </article>
      </section>
    </div>
  </div>

  <!-- 名前、日時、コメントをデータベースから取得 -->
  
  
</body>
</html>