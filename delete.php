<?php
    //データ受け取り
    $bbs_id = intval($_POST['bbs_id']);
    $comment_id = intval($_POST['comment_id']);
    $pass = htmlspecialchars($_POST['pass']);
    //チェック
    if($comment_id == '' || $pass == ''){
        header("Location: bbs.php?bbs_id=$bbs_id");
        exit();
    }
    try{
        $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
        $stmt = $pdo->query('SET NAMES utf8');
        $stmt = $pdo->prepare("DELETE FROM comment WHERE comment_id=:comment_id AND pass=:pass");
        //パラメータの割り当て
        $stmt->bindParam(':comment_id', $comment_id, PDO::PARAM_INT);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        //実行
        $stmt->execute();
    }catch(PDOException $e){
        echo "エラー:".$e->getMessage();
    }
    header("Location: bbs.php?bbs_id=$bbs_id");
    exit();
?>