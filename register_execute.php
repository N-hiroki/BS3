<?php
    session_start();
    $id = $_POST["id"];
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("INSERT INTO user(id,mail,pass)VALUES(:id,:mail,:pass)");
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':mail', $mail);
    $stmt->bindValue(':pass', $pass);
    $status = $stmt->execute();   //sql実行
    if($status==false){
    }else{
        $_SESSION["id"] = $id;
        header("Location: index.php");
        exit;
    }
?>
<?php require('require/header.php'); ?>
<img src="img/message4.jpg" width=300px height=200px>
<p>そのIDは登録済みです。<br>おそれいりますが、他のIDで登録しなおしてください。</p>
<a href='register.php' style="margin-left:200px;font-size:20px;">戻る</a>