<!--
    question_ID受け取る
    データベース接続
    表示
    submitされたら、update_confirm.phpにデータ送りページ遷移
    
    
-->
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Business Skill</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php require('require/header.php'); ?>
    <div class="margin_left50">
        <label class="margin_top20">質問する</label>
        <form class="form-inline" method="post" action="">
            <textarea placeholder="タイトル"></textarea>
            <textarea id="text_q" placeholder="質問"></textarea>
            <input type="submit" class="form-control btn-primary btn_posi" value="確認">
            <input type="hidden" name="post_flg" value="1">
        </form>
    </div>
    <?php require('require/footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
