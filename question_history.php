<!--
question_IDを受け取る
データベース接続
question_IDをキーに検索
表示
-->
<?php
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
//    question table用
    $stmt = $pdo->query('SET NAMES utf8');
//    ans table用
    $stmt_ans = $pdo->query('SET NAMES utf8');
//    question id 取得
    $id = htmlspecialchars($_GET["id"]);
//    質問検索
    $stmt = $pdo->prepare("SELECT * FROM question WHERE user_id='$id'");
    $flag = $stmt->execute();
    $view="";
    if($flag==false){
//        エラーチェック
        $view = "SQLエラー（view）";
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $view .= '<br>ユーザー:'.$result['user_id'].'<br>作成日:'.$result['date'].'<br><hr>'.$result['title'].'<br><hr>'.$result['question'].'<br><hr>';
        $user_id = $result['user_id'];
        $question_id = $result['id'];
    }
//    回答検索
    $stmt_ans = $pdo->prepare("SELECT * FROM ans WHERE user_id='$question_id'");
    $flag_ans = $stmt_ans->execute();
    $ans="";
    if($flag_ans==false){
//        エラーチェック
        $ans = "SQLエラー（ans）";
    }else{
        $result_ans = $stmt_ans->fetch(PDO::FETCH_ASSOC);
        $ans .= '回答ユーザー:'.$result_ans['ans_user'].'<hr><br>'.$result['ans'];
    }
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問履歴閲覧</label>
    <br>
    <?=$view?>
    <br>
    <?=$ans?>
</div>
<a href="history_list.php?id=$user_id"><input type="button" class="form-control btn-primary width100 button_position" value="戻る"></a>
<a href="update.php?id=$id"><input type="button" class="form-control btn-primary width100 button_position float_left" value="修正"></a>
<?php require('require/footer.php'); ?>