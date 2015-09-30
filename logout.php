<?php
    //セッション開始
    session_start();
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $status = "";
    $_SESSION["id"] = NULL;
     session_write_close();
    header("Location: top.php");
?>