 <!-- スレッドのタイトルを表示   -->
 <?php
    include("./app/function/comment_add.php");
    include("./app/function/comment_get.php");
?>
 
 <div class="threadWrapper">
    <div class="childWrapper">
      <div class="threadTitle">
        <span>[タイトル]</span> 
        <h1>掲示板BBS</h1>
      </div>
      <?php include("commentSection.php"); ?>
      <?php include("commentForm.php"); ?>
      <!-- main.jsを読み込む -->
      <!-- <script src="main.js"></script> -->
    </div>
</div>