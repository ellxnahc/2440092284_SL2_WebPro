<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="session-container">
        <div class="header">
            <div class="title-header">Aplikasi Pengelolaan Keuangan</div>
            <div class="link-container">
                <div class="home-link">
                    <a href="./home.php" class="link"><u>Home</u></a>
                    
                    <a href="./profile.php" class="link">Profile</a>
                    
                    <a href="./logout.php" class="link">Logout</a>
                    
                </div>
            </div>
        </div>
        <div class="content-container">
            <p>Halo
                <b><?Php session_start(); include("config.php");
                    echo $_SESSION['fullname_user'];
                ?></b>, Selamat datang di Aplikasi Pengelolaan Keuangan</p>
        </div>
        
    </div>
</body>
</html>