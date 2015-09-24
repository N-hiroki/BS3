<!--
login.phpにIDとpassを渡す
-->
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Business Skill</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style_top.css" rel="stylesheet">
    </head>
    <body>
    <div id="header" class="container">
        <form class="form-inline" method="post" action="">
            <input type="text" class="form-control top30" placeholder="ID">
            <input type="password" class="form-control top30" placeholder="PASS">
            <input type="submit" value="ログイン" class="btn btn-primary top30">
            <input type="hidden" name="post_flg" value="1">
            <a href="" class="top30">新規登録</a>
        </form>
    </div>
    
    <div class="container row">
        <h1><img src="img/rogo.png" alt="Business_Skill"></h1>
        <img src="img/good.jpg" alt="仕事がうまくいっているイメージ" class="title">
        <img src="img/title1.png" alt="about" class="title">
        
        <section class="group">
            <img src="img/message4.jpg" alt="仕事がわからないイメージ" class="image float_left">
            <img src="img/about1.png" class="comment">
        </section>
        
        <section class="group">
            <img src="img/message2.jpg" alt="悩む・考えすぎるイメージ" class="image float_light">
            <img src="img/about2.png" class="comment">
        </section>
        
        <section class="group">
            <img src="img/message1.jpg" alt="大勢のビジネスマンのイメージ" class="image float_left">
            <img src="img/about3.png" class="comment">
        </section>
        
        <section class="group">
            <img src="img/message3.jpg" alt="悩みや問題解決のイメージ" class="image float_light">
            <img src="img/about4.png" class="comment">
        </section>
        
        <img src="img/message5.png" alt="質問する内容は仕事に関することなら何でもOK" width="900px">
        <img src="img/image.png" alt="BusinessSkillの動き" width="900px">
        <img src="img/title2.png" alt="mission" class="title">
        <img src="img/mission1.png" alt="生産性の向上" width="900px;">
        <img src="img/mission2.png" alt="人財不足の解消" width="900px;">
        <img src="img/contribution_to_society.png" alt="社会貢献" width="900px">
    </div>
    
    <div id="footer" class="container">
        <ul>
            <li><a>利用規約</a></li>
            <li><a>プライバシーポリシー</a></li>
            <li><a>お問い合わせ</a></li>
        </ul>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
