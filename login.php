<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
        <header>
            <a href="register.php"><img src="bloglogo.png"></a>
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        
        <main>
        <form action="mypage.php" method="post">
            <div class="form_contents">
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