<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet"type="text/css"href="style.css">
    </head>

    <body>
    
    <?php  
        
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson06;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");
        
    ?>
        
        <header>
        <h1><img src="4eachblog_logo.jpg"></h1>
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
            
            <div class="box">
                <div class="left">
                    <div class="box1">
                        <h1>プログラミングに役立つ掲示板</h1>
                            <form method="post" action="insert.php">
                                <h2>入力フォーム</h2>
                                <div>
                                    <label>ハンドルネーム</label>
                                    <br>
                                    <input type="text" class="text" size="35" name="handlename">
                                </div>
                            
                                <div>
                                    <label>タイトル</label>
                                    <br>
                                    <input type="text" class="text" size="35" name="title">
                                
                                </div>
                                
                                <div>
                                    <label>コメント</label> 
                                    <br>
                                    <textarea cols="50" rows="7" name="comments"></textarea>
                                </div>
                                
                                <div>
                                    <input type="submit" class="submit" value="投稿する">
                                </div>
                            </form>
                        
                        
                            <?php
                        
                            echo "<div class='kiji'>";
                            echo "<h3>タイトル</h3>";
                            echo "<div class='contents'>";
                            echo"記事の中身。<br>記事の中身。<br>記事の中身。<br>";
                            echo "<div class='handlename'>posted by 通りすがり</div>";
                            echo "</div>";
                            echo "</div>";
                        
                            ?>
                        
                            <?php
                        
                             while($row=$stmt->fetch()){
                                echo "<div class='kiji'>";
                                echo "<h3>".$row ['title']."</h3>";
                                echo "<div class='contents'>";
                                echo $row['comments'];
                                echo "<div class='handlename'>posted by".$row ['handlename']."</div>";
                                echo "</div>";
                                echo "</div>";
                                }
                                ?>
                                
                           
                                
                        
<!--                        <p>🕖2017年1月15日</p>-->
<!--                        <div class="abc">-->
<!--                            <div><img src="jQuery_image1.jpg"></div>-->
<!--                            <div><img src="jQuery_image2.jpg"></div>-->
<!--                            <div><img src="jQuery_image3.jpg"></div>-->
<!--                            <div><img src="jQuery_image4.jpg"></div>-->
<!--                            <div><img src="jQuery_image5.jpg"></div>-->
<!--                        </div>-->
<!--                        <img src="bookstore.jpg">-->
<!--                        <p>4eachはインターノウスが提供するオンラインでプログラミングが勉強できるイーラーニングシステムです。</p>-->
<!--                        <p>記事中身</p>-->
                    </div>
                    <div class="box2">
<!--
                        <div class="box_pic2">
                            <img src="pic1.jpg">
                            <p>ドメイン取得方法</p>
                        </div>
                        <div class="box_pic2">
                            <img src="pic2.jpg">
                            <p>快適な職場環境</p>
                        </div>
                        <div class="box_pic2">
                            <img src="pic3.jpg">
                            <p>Linuxの基礎</p>
                        </div>
                        <div class="box_pic2">
                            <img src="pic4.jpg">
                            <p>マーケティング入門</p>
                        </div><br>
                        <div class="box_pic2">
                            <img src="pic5.jpg">
                            <p>アクティブラーニング</p>
                        </div>
                        <div class="box_pic2">
                            <img src="pic6.jpg">
                            <p>CSSの効率的な勉強方法</p>
                        </div>
                        <div class="box_pic2">
                            <img src="pic7.jpg">
                            <p>リーダブルコードとは</p>
                        </div>
                        <div class="box_pic2">
                            <img src="pic8.jpg">
                            <p>HTML5の可能性</p>
                        </div>
-->
                    </div>
                </div>
                <div class="right">
                    <div class="title">人気の記事</div>
                        <ul>
                            <li>PHP オススメ本</li>
                            <li>PHP MyAdminの使い方</li>
                            <li>今人気のエディタ Top5</li>
                            <li>HTMLの基礎</li>
                        </ul>
                    <div class="title">オススメリンク</div>
                        <ul>
                            <li>インターノウス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>
                            <li>Brecketsのダウンロード</li>
                        </ul>
                    <div class="title">カテゴリ</div>
                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                        </ul>
                </div>
            </div>
        
            
        </main>
        
        <footer>
        copyright ©︎ internous | 4each blog is the one which provides A to Z about programming.
        </footer>
    
    </body>
    
    
    
</html>