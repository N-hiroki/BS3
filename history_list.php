<!--
ユーザーIDを受け取る
データベース接続
ユーザーIDをキーに検索
５件表示（タイトル、本文100文字）
選択した質問のquestion_IDをquestion_history.phpに私ページ遷移
ページング
-->
<?php
    $id = htmlspecialchars($_GET["id"]);
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("SELECT * FROM question WHERE user_id=$id ORDER BY date DESC LIMIT 5");
    $stmt = $pdo->prepare("SELECT * FROM question WHERE user_id=qwe ORDER BY date DESC LIMIT 5");
    $flag = $stmt->execute();
    if($flag==false){
        $view = "SQLエラー";
    }else{
        $view .= '<br>';
        while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        //新規質問
        $view .= '<a href="question_history.php?        id='.$result['id'].'&id='.$id.'"method="get"action="question_history.php">'.$result['title'].$result['date'].'</a><br>';
        }
    }
?>

<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問履歴リスト</label>
    <br>
    <?=$view?>
</div>
<form class="form-inline button_position" method="post" action="">
    <input type="button" class="form-control btn-primary width100" value="前へ">
    <input type="button" class="form-control btn-primary width100 margin_left50" value="次へ">
    <input type="hidden" name="post_flg" value="1">
</form>
<?php require('require/footer.php'); ?>
