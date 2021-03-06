<?php
    require('require/session.php');
    $question_id = $_POST["question_id"];
    $view_flag = $_POST["view_flag"];
    $title = htmlspecialchars($_POST["title"]);
    $question = htmlspecialchars($_POST["question"]);
    $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("UPDATE question SET title=?, question=?, view_flag=? WHERE id=?");
    $stmt->bindParam(1,$title, PDO::PARAM_STR);
    $stmt->bindParam(2,$question, PDO::PARAM_STR);
    $stmt->bindParam(3,$view_flag, PDO::PARAM_INT);
    $stmt->bindParam(4,$question_id, PDO::PARAM_INT);
    $status = $stmt->execute();   //sql実行
    if($status==false){
        echo "SQLエラー";
    }else{
        header("Location: index.php");
        exit;
    }
?>