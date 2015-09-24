<!--
question_IDを受け取る
データベース接続
question_IDをキーに検索
表示
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
        <label class="margin_top20">質問履歴閲覧</label>
        <br>PHPのechoスペース
    </div>
        <a href=""><input type="button" class="form-control btn-primary width100 button_position" value="戻る"></a>
        <a href="update.html"><input type="button" class="form-control btn-primary width100 button_position float_left" value="修正"></a>
    <?php require('require/footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
