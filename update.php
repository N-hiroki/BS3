<!--
    question_ID受け取る
    データベース接続
    表示
    submitされたら、update_confirm.phpにデータ送りページ遷移
-->
<?php
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $id = htmlspecialchars($_GET["id"]);
    $question_id = htmlspecialchars($_GET["question_id"]);
    $stmt = $pdo->prepare("SELECT * FROM question WHERE id = $question_id");
    $flag = $stmt->execute();
    if($flag==false){
//        エラーチェック
        $view = "SQLエラー（view）";
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $title = $result['title'];
        $question = $result['question'];
        $user_id = $result['user_id'];
    }
    
?>

<?php require('require/header.php'); ?>
<div class="margin_left50">
    <?=$view?>
    <label class="margin_top20">修正する</label>
    <form class="form-inline" method="post" action="update_execute.php">
        <textarea placeholder="タイトル" name="title"><?=$title?></textarea>
        <textarea id="text_q" placeholder="質問" name="question"><?=$question?></textarea>
        <input type="submit" class="form-control btn-primary btn_posi" value="修正">
        <input type="hidden" name="id" value="$id">
        <input type="hidden" name="question_id" value="$question_id">
    </form>
</div>
<?php require('require/footer.php'); ?>