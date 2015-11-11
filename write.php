<?php
    $bbs_id = $_POST['bbs_id'];
    $id = $_POST['id'];
    $body = $_POST['body'];
    $pass = $_POST['pass'];
    $img = $_POST['img'];
    $color = $_POST['color'];
    $date = date("Y-m-d H:i:s");
    if($id == '' || $body == ''){
        header("Location: bbs.php?bbs_id=$bbs_id");
        exit();
    }
    if(!preg_match("/^[0-9]{4}$/", $pass)){
        header("Location: bbs.php?bbs_id=$bbs_id");
        exit();
    }
    try{
        $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
        $stmt = $pdo->query('SET NAMES utf8');
        $stmt = $pdo->prepare("
            INSERT INTO comment (bbs_id,comment_id,id,body,img,pass,date,color)
            VALUES (:bbs_id,null, :id, :body, :img, :pass, :date, :color)"
        );
        $stmt->bindParam(':bbs_id', $bbs_id, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->bindParam(':body', $body, PDO::PARAM_STR);
        $stmt->bindParam(':img', $img, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->bindParam(':date', $date, PDO::PARAM_STR);
        $stmt->bindParam(':color', $color, PDO::PARAM_STR);
        $stmt->execute();
        header("Location: bbs.php?bbs_id=$bbs_id");
        exit();
    }catch(PDOException $e){
        die('エラー:'.$e->getMessage());
    }
?>