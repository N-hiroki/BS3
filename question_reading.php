<!--回答したら同じページに-->
<?php
    require('require/session.php');
    $view="";   //    question用変数
    $ans="";    //    回答用変数
    $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
//    question table用
    $stmt = $pdo->query('SET NAMES utf8');
//    ans table用
    $stmt_ans = $pdo->query('SET NAMES utf8');
//    question id 取得
    $question_id = htmlspecialchars($_GET["question_id"]);
//    質問検索
    $stmt = $pdo->prepare("SELECT * FROM question WHERE id = $question_id");
//    回答検索
    $stmt_ans = $pdo->prepare("SELECT * FROM ans WHERE id = $question_id");
    $flag = $stmt->execute();
    $flag_ans = $stmt_ans->execute();
    if($flag==false){
//        エラーチェック
        $view = "SQLエラー（view）";
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $view .= '<div class="question_disp" style="background-color:#FFF;margin-bottom:10px;"><span style="border-bottom: 1px solid blue;">'.$result['user_id'].' /'.$result['date'].'<br></span>'.$result['title'].'<br>'.$result['question'].'</div>';
    }
    if($flag_ans==false){
//        エラーチェック
        $ans = "SQLエラー（ans）";
    }else{
        while($result_ans = $stmt_ans->fetch(PDO::FETCH_ASSOC)){
            $ans .= '<div class="list" style="margin-bottom:10px;"><span style="border-bottom: 1px solid #aaa;">'.$result_ans['ans_user'].' /'.$result_ans['date'].'</span><br>'.$result_ans['ans'].'</div>';
        }
    }
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問閲覧</label>
    <br>
    <?=nl2br($view)?>
    <?=nl2br($ans)?>
</div>
<form method="post" action="question_ans_execute.php">
    <textarea placeholder="回答を入力してください。" id="text_q" name="ans" class="margin_left50"></textarea>
    <input type="submit" class="form-control btn-primary btn_posi margin_left50" width="100px" value="回答">
    <input type="hidden" name="question_id" value="<?=$question_id?>">
</form>
<?php require('require/footer.php'); ?>