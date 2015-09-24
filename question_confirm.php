<!--
question.phpからデータを受け取る。
データ表示する。
ページ遷移のさいデータ渡す。
修正ー＞puestion.php
投稿ー＞question_execute
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
        <label class="margin_top20">質問確認</label>
        <br>PHPのechoスペース
    </div>
    <form class="form-inline button_position" method="post" action="">
            <input type="button" class="form-control btn-primary width100" value="修正">
            <input type="button" class="form-control btn-primary width100 margin_left50" value="投稿">
            <input type="hidden" name="post_flg" value="1">
    </form>
    <?php require('require/footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
