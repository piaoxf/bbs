<?php
//現在の位置を取得
$position = 0;

if(isset($_POST["submitButton"])) {
  $position = $_POST["position"];
}
?>
<form class="formWrapper" method="POST" name="formData1">
        <div>
          <input type="submit" value="書き込み" name="submitButton" onClick="return check();">
          <label>名前：</label>
          <input type="text" name="username">
        </div>
        <div>
          <textarea class="commentTextarea" name="body"></textarea>
          <input type="hidden" name="threadId" value="<?php echo $thread["id"]; ?>">
        </div>
        <!-- 位置取得用 -->
        <input type="hidden" name="position" value="0">
</form>

<!-- jQueryを使用 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
//現在の位置に止まる昨日
  $(document).ready(() => {
    $("input[type=submit]").click(() => {
        //現在のスクロール位置を取得
        let position = $(window).scrollTop();
        $("input:hidden[name=position]").val(position);
    })
    //submitボタンの位置に止まる
    $(window).scrollTop(<?php echo $position?>);
  })
</script>