<!--
検索ワードを受け取る。
データベースに接続
検索ワードでLIKE検索（タイトル、本文）

５件表示（タイトル、本文100文字）
選択した質問のquestion_IDをquestion_readingに送りページ遷移

ページング

-->
<?php
    require('require/session.php');
    $key = htmlspecialchars($_POST["key"]);
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("SELECT * FROM question WHERE title LIKE '%$key%' OR question LIKE '%$key%' ORDER BY id DESC LIMIT 10");
    $flag = $stmt->execute();
    $view="<br>";
    if($flag==false){
        $view = "SQLエラー";
    }else{
        while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
          //質問リスト　questionテーブルのidを渡す。
            $view .= '<a href="question_reading.php?question_id='.$result['id'].'&id='.$id.'"method="get" action="question_reading.php">'.$result['title'].'</a><br>'.mb_substr($result['question'],0,100,'UTF-8').'<br><hr>';
        }
    }
?>
<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">検索結果</label>
    <br>
    <?=$view?>
</div>
<form class="form-inline button_position" method="post" action="">
    <input type="button" class="form-control btn-primary width100" value="前へ">
    <input type="button" class="form-control btn-primary width100 margin_left50" value="次へ">
    <input type="hidden" name="post_flg" value="1">
</form>
<?php require('require/footer.php'); ?>