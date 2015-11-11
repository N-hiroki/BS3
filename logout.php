<?php
    session_start();
    $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
    $_SESSION["id"] = NULL;
    session_write_close();
    header("Location: top.php");
    exit;
?>