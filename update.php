<!--
    question_ID受け取る
    データベース接続
    表示
    submitされたら、update_confirm.phpにデータ送りページ遷移
    
    
-->
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">修正する</label>
    <form class="form-inline" method="post" action="">
        <textarea placeholder="タイトル"></textarea>
        <textarea id="text_q" placeholder="質問"></textarea>
        <input type="submit" class="form-control btn-primary btn_posi" value="確認">
        <input type="hidden" name="post_flg" value="1">
    </form>
</div>
<?php require('require/footer.php'); ?>