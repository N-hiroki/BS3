<!--
idを受け取る
POSTでansを受け取る。
DB起動
DBに格納。
question_reading.phpにquestion_idを渡し同じquestionを表示。
-->
<?php
    require('require/session.php');
    $ans = htmlspecialchars($_POST["ans"]);
    $question_id = $_POST["question_id"];
    $date = date("Y-m-d H:i:s");
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("INSERT INTO ans(id,ans,ans_user,date)VALUES(:question_id,:ans,:id,:date)");
    $stmt->bindValue(':question_id', $question_id);
    $stmt->bindValue(':ans', $ans);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':date', $date);
    $status = $stmt->execute();   //sql実行
    if($status==false){
        echo "SQLエラー";
    }else{
        header("Location: index.php");
        exit;
    }
?>