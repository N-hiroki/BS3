<!--
    データを受け取る
    データ表示
    passが一致しなければregister.phpに戻る。
    登録ならregister_execute.phpにデータ渡してページ遷移
    修正ならregister.phpにデータ渡してページ遷移
-->


<?php
    $id = $_POST["id"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $mail = $_POST["mail"];
    $view = 'ID:'.$id.'<br>Mail:'.$mail;
    //var_dump($_POST);
    if($pass1 != $pass2){
        header("Location: register.php?id=$id&pass1=$pass1&pass2=$pass2&mail=$mail");
    }

?>
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
    <div id="header" class="container">
        <h1 id="logo" class="margin_left50">Business Skill</h1>
    </div>
    <div class="margin_left50">
        <label class="margin_top20">内容確認</label>
        <br>
        <?=$view?>
    </div>
    <form class="form-inline button_position" method="get" action="register.php">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="mail" value="<?=$mail?>">
            <input type="hidden" name="pass1" value="<?=$pass1?>">
            <input type="hidden" name="pass2" value="<?=$pass2?>">
            <input type="submit" class="form-control btn-primary width100 float_left" value="修正">
    </form>
    <form class="form-inline button_position" method="post" action="register_execute.php">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="mail" value="<?=$mail?>">
            <input type="hidden" name="pass" value="<?=$pass1?>">
            <input type="submit" class="form-control btn-primary width100 margin_left50" value="登録">
    </form>
    <?php require('require/footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
