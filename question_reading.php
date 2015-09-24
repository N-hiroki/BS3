<!--
    question_ID受け取る
    データベース接続
    question_IDをキーに検索
    表示
    回答がsubmitしたら、question_ans_execute.phpにデータを送りページ遷移

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
        <label class="margin_top20">質問閲覧</label>
        <br>PHPのechoスペース
    </div>
        <form class="form-inline " method="post" action="">
            <textarea placeholder="回答を入力してください。" id="text_q" class="margin_left50"></textarea>
            <input type="submit" class="form-control btn-primary btn_posi margin_left50" width="100px" value="回答">
            <input type="hidden" name="post_flg" value="1">
        </form>
        
    <?php require('require/footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
