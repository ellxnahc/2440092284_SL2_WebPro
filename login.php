<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="login-session">
        
        <form action="prosesLogin.php" method="post">
            <span class="s">Login</span>
            <div class="login-session-container">
                <div class="login-session-row">
                    <div class="uname">Username</div>
                    <div><input type="text" name="l_username" id=""></div>
                </div>
                <div class="login-session-row">
                    <div class="pass">Password</div>
                    <div><input type="password" name="l_password" id=""></div>
                </div>
                <div class="login-session-row">
                    <button name="login-button" class="login-button2">Login</button>
                    <a href="./index.php" class="kembali-button2">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>