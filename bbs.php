<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header("Location: logout.php");
        exit;
    }
    $id = $_SESSION["id"];
    $num = 5;  //１ページに表示するコメント数
    $img = "";
    if(isset($_GET["bbs_id"])){
        $bbs_id = htmlspecialchars($_GET["bbs_id"]);
    }
    //ページ数が指定されているとき
    $page = 0;
    if(isset($_GET['img'])){
        $img = $_GET['img'];
    }
    if(isset($_GET['page']) && $_GET['page'] > 0){
        $page = intval($_GET['page']) - 1;
    }
    try{
        $pdo = new PDO('mysql:dbname=an;host=localhost', 'root', '');
        $stmt = $pdo->query('SET NAMES utf8');
        $stmt = $pdo->prepare("SELECT * FROM comment WHERE bbs_id = :bbs_id ORDER BY date DESC LIMIT :page, :num");
        $stmt_title = $pdo->prepare("SELECT * FROM bbs WHERE bbs_id = :bbs_id");
        $stmt_title->bindParam(':bbs_id',$bbs_id,PDO::PARAM_INT);
        $stmt_title->execute();
        $row_title = $stmt_title->fetch();
        $bbs_title = '<h1 class="margin_left50">'.$row_title["bbs_title"].'掲示板</h1>';
        $page *= $num;
        $stmt->bindParam(':bbs_id',$bbs_id,PDO::PARAM_INT);
        $stmt->bindParam(':page',$page,PDO::PARAM_INT);
        $stmt->bindParam(':num',$num,PDO::PARAM_INT);
        $stmt->execute();
    }catch(PDOException $e){
        echo "エラー:".$e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Business Skill</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body onKeyDown="ConamiCommand(event.keyCode)">
    <div id="header" class="container">
        <h1 id="logo" class="margin_left50">Business Skill</h1>
        <h1>/BBS</h1>
        <p id="id">ID:<?=$id?></p>
    </div>
    <?=$bbs_title?>
    <!--        アップロード-->
    <div class="margin_left50">
        <form action="write.php" method="post">
            <p>名前:<input type="text" name="id" class="width40_ form-control" value="<?=$id?>"></p>
            <textarea name="body" placeholder="テキストを入力してください"></textarea>
            <input type="submit" value="書き込む" class="btn btn-primary margin_left20">
            <input type="hidden" name="color" value="#FFFFFF">
            <input type="hidden" name="pass" value="1111">
            <input type="hidden" name="img" value="<?=$img?>">
            <input type="hidden" id="bbs_id" name="bbs_id" value="<?=$bbs_id?>">
        </form>
    </div>
    <?php
        while($row = $stmt->fetch()):
    ?>
    <div class="margin_left50" style="width:90%;background-color:#FFF; border-top: 1px solid #EEE; margin-top:5px;">
        <?php echo $row['id']?>
        <?php echo $row['date']?>
        <br>
        <?php echo '<div style="overflow:auto; border-top: 1px solid #EEE; width:auto; min-height:60px;">'.nl2br($row['body'], false).'</div>'; ?>
    </div>
        <?php endwhile; //ページ数表示?>
        <div class="margin_left50">
            <?php
                try{
                    $stmt = $pdo->prepare("SELECT COUNT(*) FROM comment WHERE bbs_id = :bbs_id");
                    $stmt->bindParam(':bbs_id',$bbs_id,PDO::PARAM_INT);
                    $stmt->execute();
                }catch(PDOException $e){
                    echo "エラー:".$e->getMessage();
                }
                //コメントの件数を取得
                $comments = $stmt->fetchColumn();
                //ページ数を計算
                $max_page = ceil($comments / $num);
                echo '<p>';
                for($i = 1;$i <= $max_page; $i++){
                    echo '<a href="bbs.php?page='.$i.'&bbs_id='.$bbs_id.'" class="margin_left20">'.$i.'</a>&nbsp;';
                }
                echo '</p>';
            ?>
        </div>
        <div id="footer" class="container">
            <a href="logout.php" class="float_light bottom20 margin_left20 border">ログアウト</a>
            <a href="index.php" class="float_light bottom20 border">メイン</a>
            <ul>
                <li><a>利用規約</a></li>
                <li class="min_posi_bottom20"><a>プライバシーポリシー</a></li>
                <li class="bottom20"><a>お問い合わせ</a></li>
            </ul>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/command_check.js"></script>
    </body>
</html>