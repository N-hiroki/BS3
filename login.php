<!--
top.phpからIDとPassを受け取る。
データベースを接続
IDとPassが一致するものをselectする。
selectしたものが１件か調べる。

trueならログイン完了しindex.phpにページ遷移（ID渡す）

falseならエラー出力
-->
<?php
    session_start();
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $id = htmlspecialchars($_POST["id"]);
    $pass = htmlspecialchars($_POST["pass"]);
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("SELECT * FROM user WHERE id='$id' AND pass='$pass'");
    $flag = $stmt->execute();
    if($flag==false){
        header("Location: top.php");
        exit;
    }else{
        //セッションにユーザidを保存
        $_SESSION["id"] = $id;
        header("Location: index.php");
        exit;
    }
?>