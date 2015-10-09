<?php
    require('require/session.php');
    $num = 5;  //表示件数
    $count = 0;     //ページ数
    $i = 0;     //回転数カウント用変数
    $page_num = "";
    $view = "";
    $view = array();
    $pdo = new PDO('mysql:dbname=bs;host=localhost', 'root', '');
    $stmt = $pdo->query('SET NAMES utf8');
    $stmt = $pdo->prepare("SELECT * FROM question WHERE user_id='$id' ORDER BY date DESC");
    $flag = $stmt->execute();
    if($flag==false){
        $view = "SQLエラー";
    }else{
        while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
            if($i == 0){
                $view[$count] = "";
            }
            $view[$count] .= '<div class="list"><a href="question_history.php?question_id='.$result['id'].'"method="get" action="question_history.php">'.$result['title'].'date:'.$result['date'].'</a><br>'.mb_substr($result['question'],0,100,'UTF-8').'</div><br>';
            $i++;   //件数チェック
            if($i >= $num){  //表示件数以上になったら 入れ終わって端数があるか？
                $count++;   //ページ数
                $i = 0;
            }
        }
        if($i > 0 && $i < 5){
            $count++;
        }
        $page = 0;  //ページ指定、基本は０ページ目を指す
        //GETでページ数が指定されていた場合
        if(isset($_GET['page']) && is_numeric($_GET['page'])){  //GET['page']で送られてきているか、数字かチェック
            $page = intval($_GET['page']) - 1;  //整数で返す     0からなので-1してる
            //$pageの値はOK
            if(!isset($view[$page])){
                $page = 0;
            }
        }
        $view_num = $view[$page];
        for($i=1; $i <= $count; $i++){
            $page_num .=  '<a href="history_list.php?page='.$i.'">'.$i.'</a>';
        }
    }
?>

<?php require('require/header.php'); ?>
<div class="margin_left50">
    <label class="margin_top20">質問履歴リスト</label>
    <br>
    <?=$view_num?>
</div>
    <div class ='page_num'>
    <?=$page_num?>
</div>
<?php require('require/footer.php'); ?>
