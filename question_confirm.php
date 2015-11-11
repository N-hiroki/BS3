<!--質問が長文だとGETで渡せない（question.php　修正）-->
<?php
    require('require/session.php');
    $title = htmlspecialchars($_POST["title"]);
    $question = htmlspecialchars($_POST["question"]);
    $view = '<div class="question" style="background-color:#FFF;">'.$title.'<br>'.$question.'</div>';
?>
<?php require('require/header.php'); ?>
<div class="margin_left50" style="margin-bottom:30px;">
    <label class="margin_top20">質問確認</label>
    <br>
    <?=nl2br($view)?>
</div>
<!--修正用form-->
<form id="confirm_btn1" method="GET" action="question.php">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="title" value="<?=$title?>">
    <input type="hidden" name="question" value="<?=$question?>">
    <input type="submit" class="form-control btn-primary width100 float_left" value="修正">
</form>
<!--投稿用form-->
<form id="confirm_btn2" method="post" action="question_execute.php">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="title" value="<?=$title?>">
    <input type="hidden" name="question" value="<?=$question?>">
    <input type="submit" class="form-control btn-primary width100" value="投稿">
</form>
<?php require('require/footer.php'); ?>