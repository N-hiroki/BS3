<!--
question_IDを受け取る
データベース接続
question_IDをキーに検索
表示
-->
<?php
    require('require/session.php');
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
//    question table用
    $stmt = $pdo->query('SET NAMES utf8');
//    ans table用
    $stmt_ans = $pdo->query('SET NAMES utf8');
//    question id 取得
    $question_id = htmlspecialchars($_GET["question_id"]);
//    質問検索
    $stmt = $pdo->prepare("SELECT * FROM question WHERE id='$question_id'");
    $flag = $stmt->execute();
    $view="";
    if($flag==false){
//        エラーチェック
        $view = "SQLエラー（view）";
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $view .= 'user:'.$result['user_id'].' date:'.$result['date'].'<br><hr>title:'.$result['title'].'<br>text:'.$result['question'].'<br><hr>';
    }
//    回答検索
    $stmt_ans = $pdo->prepare("SELECT * FROM ans WHERE id='$question_id'");
    $flag_ans = $stmt_ans->execute();
    $ans="";
    if($flag_ans==false){
//        エラーチェック
        $ans = "SQLエラー（ans）";
    }else{
        while($result_ans = $stmt_ans->fetch(PDO::FETCH_ASSOC)){
            $ans .= 'anser:'.$result_ans['ans_user'].' date:'.$result_ans['date'].'<br>'.$result_ans['ans'];
        }
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
<a href="update.php?id=<?=$id?>&question_id=<?=$question_id?>"><input type="button" class="form-control btn-primary width100 button_position float_left" value="修正"></a>
<?php require('require/footer.php'); ?>