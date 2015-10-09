<?php
    session_start();
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $id = htmlspecialchars($_POST["id"]);
    $pass = htmlspecialchars($_POST["pass"]);
    if($id == "" || $pass == ""){
        session_write_close();
        header("Location: top.php");
        exit;
    }
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("SELECT * FROM user WHERE id = '$id' AND pass = '$pass'");
    $flag = $stmt->execute();
    if($flag==false){
        session_write_close();
        header("Location: top.php");
        exit;
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result['id'] == ""){
            session_write_close();
            header("Location: top.php");
            exit;
        }
        //セッションにユーザidを保存
        $_SESSION["id"] = $id;
        header("Location: index.php");
        exit;
    }
?>