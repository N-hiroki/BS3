<?php
    $user_id = $_POST["id"];
    $title = $_POST["title"];
    $question = $_POST["question"];
    $date = date("Y-m-d H:i:s");
    
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("INSERT INTO question(id,title,question,date,user_id)VALUES(null,:title,:question,:date,:user_id)");
    $stmt->bindValue(':title', $title);
    $stmt->bindValue(':question', $question);
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':user_id', $user_id);
    $status = $stmt->execute();   //sql実行
    if($status==false){
        echo "SQLエラー";
    }else{
        header("Location: index.php?id=$user_id");
    }



?>