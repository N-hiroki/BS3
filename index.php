<?php
    require('require/session.php');
    $view = '<br>';
    $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("SELECT * FROM question WHERE view_flag=0 ORDER BY date DESC LIMIT 5");//新規質問５件取得
    $flag = $stmt->execute();
    if($flag==false){
        $view = "SQLエラー";
    }else{
        while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        //新規質問
        $view .= '<a href="question_reading.php?        question_id='.$result['id'].'"method="get"action="question_reading.php">'.$result['title'].$result['date'].'</a><br>';
        }
    }
?>
<?php require('require/header.php'); ?>
<div class="container row margin_left50">
    <form class="form-inline" method="get" action="list.php">
        <a href="question.php" class="btn btn-primary">質問する！！</a>
        <a href="history_list.php" class="btn btn-primary">質問履歴</a>
        <input type="text" name="key" class="form-control width400 margin_top10" placeholder="検索">
        <input type="submit" value="検索" class="btn btn-primary margin_top10">
    </form>
    <label class="margin_top20">新規質問</label>
    <?=$view?>
</div>
<div class="container row margin_left50">
    <label class="margin_top20">掲示板</label>
    <form action="bbs_execute.php" method="post">
        <input type="text" name="title" class="form-control width40_ float_left" placeholder="掲示板名">
        <input type="submit" value="作成" class="btn btn-primary margin_left20">
    </form>
    <?PHP
        $bbs_view = "";
        $num = 10;  //１ページに表示するtitle数
        //ページ数が指定されているとき
        $page = 0;
        try{
            $pdo = new PDO('mysql:dbname=bs-c_db;host=mysql513.db.sakura.ne.jp', 'bs-c', 'njqwmjk5vm');
            $stmt = $pdo->query('SET NAMES utf8');
            $bbs_stmt = $pdo->prepare("SELECT * FROM bbs ORDER BY date DESC LIMIT :page, :num");
            $page *= $num;
            $bbs_stmt->bindParam(':page',$page,PDO::PARAM_INT);
            $bbs_stmt->bindParam(':num',$num,PDO::PARAM_INT);
            $bbs_flag = $bbs_stmt->execute();
            if($bbs_flag == false){
                $bbs_stmt = "SQLエラー";
            }else{
                while( $bbs_result = $bbs_stmt->fetch(PDO::FETCH_ASSOC)){
            //新規質問
                $bbs_view .= '<a href="bbs.php?        bbs_id='.$bbs_result['bbs_id'].'"method="get"action="bbs.php">'.$bbs_result['bbs_title'].'/作成者:'.$bbs_result['user'].'</a><br>';
                }
            }
        }catch(PDOException $e){
            echo "エラー:".$e->getMessage();
        }
?>
    <label class="margin_top20">掲示板リスト</label><br>
    <?=$bbs_view?>
</div>
<?php require('require/footer.php'); ?>