<!DOCTYPE html>
<html lang ="ja">
    
    <head>
        <mate charset ="UTF-8"></mate>
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
        $stmt = $pdo->query("select*from 4each_keijiban");
        
        ?>
        
        <header>
       <img src="4eachblog_logo.jpg">
        <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
        </ul>
        </header>
        
        <main>
        <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
            <div class="a1">
        <h2>入力フォーム</h2>
           <form method="post" action="insert.php">
            <div class="b1">
                <p>ハンドルネーム</p>
                <input type="text" name="handlename">
            </div>
            <div class="b2">
                <p>タイトル</p>
                <input type="text" name="title">
            </div>
            <div class="b3">
                <p>コメント</p>
                <textarea name="comments"rows=10 cols=50>
                </textarea>
            </div>
            <input type="submit" class="button1" value="投稿する">
            </form>
            </div>
            <br>
            
            
           <?php
                
            while($row = $stmt->fetch()){
            echo "<div class='a2'>";
            echo "<h3>".$row['title']."</h3>";
                echo "<div class='c1'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
            echo "</div>";
            }
                
            ?>
                
            
            </div>
            
        <div class="right">
        <h4>人気の記事</h4>
        <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタTop5</li>
            <li>HTMLの基礎</li>
        </ul>
        <h4>オススメリンク</h4>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
        </ul>
        <h4>カテゴリ</h4>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
        </div>
    </main>
    
    <footer>
    copyright internous | 4each blog is the one which provides A to Z about programming
    </footer>
    </body>
</html>