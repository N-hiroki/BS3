<!--
    question_ID受け取る
    データベース接続
    question_IDをキーに検索
    表示
    回答がsubmitしたら、question_ans_execute.phpにデータを送りページ遷移

    view_flagチェック
    
    ansはansテーブルから。
-->
<?php
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
//    question table用
    $stmt = $pdo->query('SET NAMES utf8');
//    ans table用
    $stmt_ans = $pdo->query('SET NAMES utf8');
//    question id 取得
    $question_id = htmlspecialchars($_GET["question_id"]);
//    user_id取得
    $id = htmlspecialchars($_GET["id"]);
//    質問検索
    $stmt = $pdo->prepare("SELECT * FROM question WHERE id = $question_id");
//    回答検索
    $stmt_ans = $pdo->prepare("SELECT * FROM ans WHERE id = $question_id");

    $flag = $stmt->execute();
    $flag_ans = $stmt_ans->execute();
    
//    question用変数
    $view="";
//    回答用変数
    $ans="";

    if($flag==false){
//        エラーチェック
        $view = "SQLエラー（view）";
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $view .= '<br>ユーザー:'.$result['user_id'].'<br>作成日:'.$result['date'].'<hr>title:'.$result['title'].'<hr>text:'.$result['question'].'<br><hr>';
    }

    if($flag_ans==false){
//        エラーチェック
        $ans = "SQLエラー（ans）";
    }else{
        $result_ans = $stmt_ans->fetch(PDO::FETCH_ASSOC);
        $ans .= '回答ユーザー'.$result_ans['ans_user'].'<hr><br>'.$result['ans'];
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
    <input type="hidden" name="id" value="<?=$user_id?>">
</form>
<?php require('require/footer.php'); ?>