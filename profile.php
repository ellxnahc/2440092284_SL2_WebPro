<?php session_start(); include("config.php");
    $str_query = "select*from user where nik = '".$_SESSION['nik_user']."'";
    $query = mysqli_query($connection, $str_query);
    $loginUser = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>
<body>
    <div class="session-container">
        <div class="header">
            <div class="title-header">Aplikasi Pengelolaan Keuangan</div>
            <div class="link-container">
                <div class="home-link">
                    <a href="./home.php" class="link">Home</a>
                    
                    <a href="./profile.php" class="link"><u>Profile</u></a>

                    <a href="./logout.php" class="link">Logout</a>
                    
                    
                </div>
            </div>
        </div>
        <div class="content-container">
            <div class="profile-title">Profil Pribadi</div>
            
            <div class="content-box">
                <div class="column1">
                    <div class="row1">Nama Depan</div>
                    <div class="row1">Tempat Lahir</div>
                    <div class="row1">Warga Negara</div>
                    <div class="row1">Alamat</div>
                </div>
                <div class="column1">
                    <div class="row1"><b><?php echo $loginUser['namaDepan']?></b></div>
                    <div class="row1"><b><?php echo $loginUser['tempatLahir']?></b></div>
                    <div class="row1"><b><?php echo $loginUser['wargaNegara']?></b></div>
                    <div class="row1"><b><?php echo $loginUser['alamat']?></b></div>
                </div>


                <div class="column1">
                    <div class="row1">Nama Tengah</div>
                    <div class="row1">Tanggal Lahir</div>
                    <div class="row1">Email</div>
                    <div class="row1">Kode Pos</div>
                </div>
                <div class="column1">
                    <div class="row1"><b><?php echo $loginUser['namaTengah']?></b></div>
                    <div class="row1"><b><?php echo $loginUser['tanggalLahir']?></b></div>
                    <div class="row1"><b><?php echo $loginUser['email']?></b></div>
                    <div class="row1"><b><?php echo $loginUser['kodepos']?></b></div>
                </div>


                <div class="column1">
                    <div class="row1">Nama Belakang</div>
                    <div class="row1">NIK</div>
                    <div class="row1">No HP</div>
                    <div class="row1">Foto Profil</div>
                </div>
                <div class="column1">
                    <div class="row1"><b><?php echo $loginUser['namaBelakang']?></b></div>
                    <div class="row1"><b><?php echo $loginUser['nik']?></b></div>
                    <div class="row1"><b><?php echo $loginUser['noHP']?></b></div>
                    <div class="row1"><img src="./photos/<?= $loginUser['namaFileFoto']?>" alt="no img" width="100" height="100"></div>
                </div>
            </div>
            <a href="./editProfile.php" class="editButton" style="
            border: 1.5px solid black;
            border-radius: 3px; 
            padding-left: 20px;
            padding-right: 20px;
            margin-left: 10px;
            margin-right: 30px;
            background-color: rgb(218, 191, 243); ">Edit Profil</a>
        </div>
        
    </div>
</body>
</html>