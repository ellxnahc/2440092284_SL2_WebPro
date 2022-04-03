<?php
    session_start();
    include("config.php");

    $str_query = "select*from user where nik = '".$_SESSION['nik_user']."'";
    $query = mysqli_query($connection, $str_query);
    $loginUser = mysqli_fetch_array($query);

    if(isset($_POST['change'])){
        $namaFile = $_FILES['fotoProfil']['name'];
        $tmp_name = $_FILES['fotoProfil']['tmp_name'];
        $dirUpload = "photos/";
        $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);

        $str_query = "update user set namaFileFoto='".$namaFile."' where nik = '".$_SESSION['nik_user']."'";

        $query = mysqli_query($connection, $str_query);
            
            if($query){
                header("location:editpic.php");
            }else{
                echo "Proses Gagal".mysqli_error($connection);
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Profil</title>
</head>
<body>
    <div style="background-color: rgb(166, 165, 218); height: 10vw;">
        <img src="./photos/<?= $loginUser['namaFileFoto']?>" alt="no img" width="100" height="100">
        <br>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="File" name="fotoProfil" id="" required accept="image/png, image/jpeg">
            <a href="./editProfile.php" class="kembali-button">Kembali</a>
            <button name="change" class="registrasi-button">Ubah</button>
        </form>
    </div>
</body>
</html>