<!--
    question_ID受け取る
    データベース接続
    question_IDをキーに検索
    表示
    回答がsubmitしたら、question_ans_execute.phpにデータを送りページ遷移

    view_flagチェック
-->
<?php
    $pdo = new PDO('mysql:dbname=bs-c_db;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $id = htmlspecialchars($_GET["id"]);
    $stmt = $pdo->prepare("SELECT * FROM question WHERE id = $id");
    $flag = $stmt->execute();
    $view="";
    $ans="";
    if($flag==false){
        $view = "SQLエラー（view）";
        $ans = "SQLエラー（ans）";
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $view .= '<br>ユーザー:'.$result['user_id'].'<br>作成日:'.$result['date'].'<br><hr>'.$result['title'].'<br><hr>'.$result['question'].'<br><hr>';
        $ans .= $result['ans_user_id'].'<hr><br>'.$result['ans'];
    }
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問閲覧</label>
    <br>
    <?=$view?>
    <br>
    <?=$ans?>
</div>
<form class="form-inline " method="post" action="question_ans_execute.php">
    <textarea placeholder="回答を入力してください。" id="text_q" name="ans" class="margin_left50"></textarea>
    <input type="submit" class="form-control btn-primary btn_posi margin_left50" width="100px" value="回答">
    <input type="hidden" name="id" value="<?=$id?>">
</form>
<?php require('require/footer.php'); ?>