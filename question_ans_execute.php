<!--
idを受け取る
POSTでansを受け取る。
DB起動
DBに格納。
question_reading.phpにquestion_idを渡し同じquestionを表示。
-->
<?php
    $ans = htmlspecialchars($_POST["ans"]);
    $id = $_POST["id"];
    $user_id = $_POST["user_id"];
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    //どうやって指定のquestionに回答カラムを追加し、ansを格納するのか？
    $stmt = $pdo->prepare("INSERT INTO question(id,ans,user_id)VALUES(:id,:ans:user_id)");
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':ans', $ans);
    $stmt->bindValue(':user_id', $user_id);
    $status = $stmt->execute();   //sql実行
    if($status==false){
        echo "SQLエラー";
    }else{
        header("Location: index.php?id=$user_id");
    }
?>