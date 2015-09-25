<!--
PHP
loginしたらIDを受け取る。
IDをheaderにecho

検索ワードをlist.phpに渡す

データベースに接続
新規質問を５件select
表示し、questionのIDを持たせquestion_reading.phpに遷移


ページ遷移する時ID渡す
-->
<?php
    $id = htmlspecialchars($_GET["id"]);

?>
<?php require('require/header.php'); ?>
<div class="container row margin_left50">
    <form class="form-inline" method="post" action="list.php">
        <a href="question.php?id=$id" method="get" action="question.php" class="btn btn-primary">質問する！！</a>
        <a href="history_list.php?id=$id" method="get" action="history_list.php" class="btn btn-primary">質問履歴</a>
        <input type="text" name="key" class="form-control width400" placeholder="検索">
        <input type="submit" value="検索" class="btn btn-primary">
    </form>
    <label class="margin_top20">新規質問</label>
</div>
<div class="margin_left50">
    PHPのechoスペース
</div>
<?php require('require/footer.php'); ?>