<?php
    $id ="";
    $mail = "";
    $pass1 = "";
    $pass2 = "";
    $NGpass = "<br>";
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    if(isset($_GET["mail"])){
        $mail = $_GET["mail"];
    }
    if(isset($_GET["pass1"])){
        $pass1 = $_GET["pass1"];
    }
    if(isset($_GET["pass2"])){
        $pass2 = $_GET["pass2"];
    }
    if(isset($_GET["pass1"]) && isset($_GET["pass2"]) && $pass1 != $pass2){
        $NGpass .= '<span style="color:red;">確認用のパスワードと一致しません。<br>パスワードを正しく入力してください。</span><br>';
    }
?>
<?php require('require/header.php'); ?>
    <div class="margin_left50">
        <label class="margin_top20">新規登録</label>
        <form method="post"  class="question" action="register_confirm.php">
            <label class="width100">ID</label>
            <input type="text" name="id" class="form-control" placeholder="ID" value="<?=$id?>">
            <?=$NGpass?>
            <label class="width100">Pass</label>
            <input type="password" name="pass1" class="form-control" placeholder="Pass">
            <br>
            <label class="width100">確認用Pass</label>
            <input type="password" name="pass2" class="form-control" placeholder="Pass">
            <br>
            <label class="width100">Mail</label>
            <input type="email" name="mail" class="form-control" placeholder="Mail" value="<?=$mail?>">
            <input type="submit" class="form-control btn-primary btn_posi" value="確認">
        </form>
    </div>
<?php require('require/footer2.php'); ?>