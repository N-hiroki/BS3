<!--
    ログインしてたら新規登録できなくする？
    submitされたら、データをregister_confirm.phpに渡しページ遷移
    修正時データ受け取る
-->
<?php
    $id;
    $mail;
    $pass1;
    $pass2;
    if(isset($_GET)){
        $id = htmlspecialchars($_GET["id"]);
        $mail = htmlspecialchars($_GET["mail"]);
        $pass1 = htmlspecialchars($_GET["pass1"]);
        $pass2 = htmlspecialchars($_GET["pass2"]);
        if($pass1 != $pass2){
            echo "確認用のパスワードと一致しません。<br>パスワードを正しく入力してください。";
        }
    }else{
        $id="";
        $mail="";
    }
?>
<?php require('require/header.php'); ?>
    <div class="margin_left50">
        <label class="margin_top20">新規登録</label>
        <form method="post" action="register_confirm.php">
            <label class="width100">ID</label>
            <input type="text" name="id" class="form-control" placeholder="ID" value="<?=$id?>">
            <br>
            <label class="width100">Pass</label>
            <input type="password"  name="pass1" class="form-control" placeholder="Pass">
            <br>
            <label class="width100">確認用Pass</label>
            <input type="password" name="pass2" class="form-control" placeholder="Pass">
            <br>
            <label class="width100">Mail</label>
            <input type="email" name="mail" class="form-control" placeholder="Mail" value="<?=$mail?>">
            <input type="submit" class="form-control btn-primary btn_posi" value="確認">
        </form>
    </div>
<?php require('require/footer.php'); ?>