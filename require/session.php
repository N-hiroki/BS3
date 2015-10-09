<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header("Location: logout.php");
        exit;
    }
    $id = $_SESSION["id"];
?>