<!--
    index.phpからID受け取る
    submitされたら、question_confirm.phpにデータ送りページ遷移
-->
<?php
    $id;
    if(isset($_GET)){
        $id = htmlspecialchars($_GET["id"]);
    }
    if(isset($_POST)){
        $id = htmlspecialchars($_POST["id"]);
        $title = htmlspecialchars($_POST["title"]);
        $question = htmlspecialchars($_POST["question"]);
    }
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問する</label>
    <form class="form-inline" method="post" action="question_confirm.php">
        <textarea placeholder="タイトル" name="title"><?=$title?></textarea>
        <textarea id="text_q" name="question" placeholder="質問"><?=$question?></textarea>
        <input type="submit" class="form-control btn-primary btn_posi" value="確認">
        <input type="hidden" name="id" value="<?=$id?>">
    </form>
</div>
<?php require('require/footer.php'); ?>