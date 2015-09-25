<?php
    $id = htmlspecialchars($_POST["id"]);
    $pass = htmlspecialchars($_POST["pass"]);
    $mail = htmlspecialchars($_POST["mail"]);
    //var_dump($_POST);
    $pdo = new PDO('mysql:dbname=bs-c_db;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("INSERT INTO user_data(id,mail,pass)VALUES(:id,:mail,:pass)");
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':mail', $mail);
    $stmt->bindValue(':pass', $pass);
    $status = $stmt->execute();   //sql実行
    if($status==false){
        echo "SQLエラー";
    }else{
        header("Location: index.php?id=$id");
    }
?>