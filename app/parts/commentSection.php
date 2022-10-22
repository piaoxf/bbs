<?php
  include("./app/function/comment_get.php");
?>

<section>
        <?php foreach($comment_array as $comment):?>
        <?php if($thread["id"] == $comment["thread_id"]) : ?>
        <article>
          <div class="wrapper">
            <div class="nameArea">
              <span>名前：</span>
              <p class="username"><?= $comment["username"]; ?></p>
              <time>：<?= $comment["post_date"]; ?></time>
            </div>
            <P class="comment"><?= $comment["body"]; ?></P>
            <div hidden><?= $comment["thread_id"]; ?></div>
          </div>
        </article>
        <?php endif;?>
        <?php endforeach ?>
</section>