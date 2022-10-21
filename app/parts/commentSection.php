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