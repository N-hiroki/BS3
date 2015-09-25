<!--
ユーザーIDを受け取る
データベース接続
ユーザーIDをキーに検索
５件表示（タイトル、本文100文字）
選択した質問のquestion_IDをquestion_history.phpに私ページ遷移
ページング
-->
<?php
    $user_id = htmlspecialchars($_GET["id"]);
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問履歴リスト</label>
    <br>PHPのechoスペース
</div>
<form class="form-inline button_position" method="post" action="">
    <input type="button" class="form-control btn-primary width100" value="前へ">
    <input type="button" class="form-control btn-primary width100 margin_left50" value="次へ">
    <input type="hidden" name="post_flg" value="1">
</form>
<?php require('require/footer.php'); ?>
