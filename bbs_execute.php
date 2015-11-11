<?php
    require('require/session.php');
    $title = htmlspecialchars($_POST["title"]);
    $date = $date = date("Y-m-d H:i:s");
    try{
        $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
        $stmt = $pdo->query('SET NAMES utf8');
        $stmt = $pdo->query('SET NAMES utf8');
        $stmt = $pdo->prepare("
            INSERT INTO bbs (bbs_id,bbs_title,date,user)
            VALUES (null, :title, :date,:id)"
        );
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':date', $date, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        header('Location: index.php');
        exit();
    }catch(PDOException $e){
        die('エラー:'.$e->getMessage());
    }
?>