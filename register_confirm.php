<?php
    $id = htmlspecialchars($_POST["id"]);
    $pass1 = htmlspecialchars($_POST["pass1"]);
    $pass2 = htmlspecialchars($_POST["pass2"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $view = 'ID:'.$id.'<br>Mail:'.$mail;
    if($pass1 != $pass2){
        header("Location: register.php?id=$id&pass1=$pass1&pass2=$pass2&mail=$mail");
        exit;
    }
?>
<?php require('require/header.php'); ?>
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
    <input type="submit" class="form-control btn-primary" width=100px value="修正">
</form>

<form class="form-inline button_position" method="post" action="register_execute.php">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="mail" value="<?=$mail?>">
    <input type="hidden" name="pass" value="<?=$pass1?>">
    <input type="submit" class="form-control btn-primary" id="a"value="登録">
</form>
<?php require('require/footer2.php'); ?>