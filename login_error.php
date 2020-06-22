<?php
mb_internal_encoding("utf8");
session_start();
//ログイン時にアクセスした場合は、マイページにリダイレクトできるようにしましょう。
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login_error.css">
    </head>
   
<!-- ログイン時に入力欄にメールアドレスとパスワードが表示されるようコードを記述しましょう。）-->
    
    <body>
        <header>
            <img src="bloglogo.png">
        </header>
        
        <main>
        <form action="mypage.php" method="post">
            <div class="form_contents">
                <div class="message">メールアドレスまたはパスワードが間違っています。</div>
            <div class="mail">
                <label>メールアドレス</label><br>
                <input type="text" class="formbox" size="40" value="<?php if (!empty($_SESSION["mail"])){echo htmlspecialchars($_SESSION["mail"], ENT_QUOTES);}?>" name="mail">
                </div>
                
                <br>
                
                <div class="password">
                <label>パスワード</label><br>
                    <input type="password" class="formbox" size="40" value="<?php if (!empty($_SESSION["password"])){echo htmlspecialchars($_SESSION["password"], ENT_QUOTES);}?>" name="password">
                </div>
                
                <div class="loginbutton">
                <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
        </main>
        
        <footer>
            ©2020 satoakane All rights reserved
        </footer>
        
    </body>
    
</html>
