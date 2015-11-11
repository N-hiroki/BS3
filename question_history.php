<?php
    require('require/session.php');
    $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
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
        $view .= '<div class="question" style="background-color:#FFF;margin-bottom:10px;">'.$result['user_id'].' /'.$result['date'].'<br>'.$result['title'].'<br>'.$result['question'].'</div>';
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
            $ans .= '<div class="list" style="margin-top:10px;">'.$result_ans['ans_user'].' /'.$result_ans['date'].'<br>'.$result_ans['ans'].'</div>';
        }
    }
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問履歴閲覧</label>
    <?=nl2br($view)?>
    <?=nl2br($ans)?>
</div>
<div class="margin_top20">
    <a href="history_list.php"><input type="button" class="form-control btn-primary width100 button_position float_left" value="戻る"></a>
    <a href="update.php?question_id=<?=$question_id?>"><input type="button" class="form-control btn-primary width100 button_position float_left margin_left50" value="修正"></a>
</div>
<?php require('require/footer.php'); ?>