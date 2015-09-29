<?php
    $id = $_POST["id"];
    $title = htmlspecialchars($_POST["title"]);
    $question = htmlspecialchars($_POST["question"]);
    $user_id = $_POST["user_id"];
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("UPDATE question SET title=?, question=? WHERE id=?");
    $stmt_update->bindParam(1,$title, PDO::PARAM_STR);
    $stmt_update->bindParam(2,$question, PDO::PARAM_STR);
    $stmt_update->bindParam(3,$id, PDO::PARAM_INT);
    $status = $stmt_update->execute();   //sql実行
    if($status==false){
        echo "SQLエラー";
    }else{
        header("Location: index.php?id=$user_id");
    }
?>