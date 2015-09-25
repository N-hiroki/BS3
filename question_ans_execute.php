<!--
idを受け取る
POSTでansを受け取る。
DB起動
DBに格納。
question_reading.phpにquestion_idを渡し同じquestionを表示。
-->



<?php
    $ans = htmlspecialchars($_POST["ans"]);
    $id = htmlspecialchars($_POST["id"]);
    $pdo = new PDO('mysql:dbname=bs-c_db;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    //どうやって指定のquestionに回答カラムを追加し、ansを格納するのか？
    $stmt = $pdo->prepare("INSERT INTO question()VALUES()");
?>