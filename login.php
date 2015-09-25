<!--
top.phpからIDとPassを受け取る。
データベースを接続
IDとPassが一致するものをselectする。
selectしたものが１件か調べる。

trueならログイン完了しindex.phpにページ遷移（ID渡す）

falseならエラー出力
-->
<?php
    $id = htmlspecialchars($_POST["id"]);
    $pass = htmlspecialchars($_POST["pass"]);

?>