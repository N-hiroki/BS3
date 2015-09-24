<!--
PHP
IDを受け取る。
IDをheaderにecho

検索ワードをlist.phpに渡す

データベースに接続
新規質問を５件select
表示し、questionのIDを持たせquestion_reading.phpに遷移


ページ遷移する時ID渡す
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
    
    <div class="container row margin_left50">
        <form class="form-inline" method="post" action="">
            <input type="button" class="form-control btn-primary width100" value="質問する">
            <input type="button" class="form-control btn-primary width100" value="質問履歴">
            <input type="text" class="form-control width400" placeholder="検索">
            <input type="submit" value="検索" class="btn btn-primary">
            <input type="hidden" name="post_flg" value="1">
        </form>
        <label class="margin_top20">新規質問</label>
    </div>
    <div class="margin_left50">
         PHPのechoスペース
    </div>
    
    <?php require('require/footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
