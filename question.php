<?php
    require('require/session.php');
    $title = "";
    $question = "";
    if(isset($_GET["title"])){
        $title = htmlspecialchars($_GET["title"]);
    }
    if(isset($_GET["question"])){
        $question = htmlspecialchars($_GET["question"]);
    }
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問する</label>
    <form method="post" action="question_confirm.php">
        <textarea placeholder="タイトル" name="title" class="question height30"><?=$title?></textarea>
        <textarea id="text_q" name="question" placeholder="質問"><?=$question?></textarea>
        <input type="submit" class="form-control btn-primary btn_posi" value="確認">
    </form>
</div>
<?php require('require/footer.php'); ?>