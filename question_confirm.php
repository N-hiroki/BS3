<!--
question.phpからデータを受け取る。
データ表示する。
ページ遷移のさいデータ渡す。
修正ー＞puestion.php
投稿ー＞question_execute
-->
<?php
    $id = $_POST["id"];
    $title = htmlspecialchars($_POST["title"]);
    $question = htmlspecialchars($_POST["question"]);
    $view = $title.'<br><hr>'.$question.'<br><hr>';
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問確認</label>
    <br>
    <?=$view?>
</div>
<!--修正用form-->
<form class="form-inline button_position" method="GET" action="question.php">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="title" value="<?=$title?>">
    <input type="hidden" name="question" value="<?=$question?>">
    <input type="submit" class="form-control btn-primary width100" value="修正">
</form>
<!--投稿用form-->
<form class="form-inline button_position" method="post" action="question_execute.php">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="title" value="<?=$title?>">
    <input type="hidden" name="question" value="<?=$question?>">
    <input type="submit" class="form-control btn-primary width100 margin_left50" value="投稿">
</form>
<?php require('require/footer.php'); ?>