<?php
    session_start(); 
    include("config.php");
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
    <title>Edit Profil</title>
</head>
<body>
        <form action="prosesEditProfile.php" method="post" enctype="multipart/form-data">
            <table class="content-container">
                <caption class="profile-title" style="background-color: rgb(247, 247, 204); font-size: x-large;">Edit Profil</caption>
                <tr class="row-1">
                    <td>Nama Depan</td>
                    <td><input type="text" name="r_nama_depan" id="" required pattern="[A-Za-z]{1,}" value="<?php echo $loginUser['namaDepan']; ?>"></td>
    
                    <td>Nama Tengah</td>
                    <td><input type="text" name="r_nama_tengah" id="" required pattern="[A-Za-z]{1,}" value="<?php echo $loginUser['namaTengah']; ?>"></td>

                    <td>Nama Belakang</td>
                    <td><input type="text" name="r_nama_belakang" id="" required pattern="[A-Za-z]{1,}" value="<?php echo $loginUser['namaBelakang']; ?>"></td>
                </tr>
                <tr class="row-2">
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" id="" required value="<?php echo $loginUser['tempatLahir']; ?>"></td>
                    
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="DD/MM/YYYY" required value="<?php echo $loginUser['tanggalLahir']; ?>"></td>

                    <td>NIK</td>
                    <td><input type="number" name="nik" id="" required pattern=".{16}" value="<?php echo $loginUser['nik']; ?>" readonly style="color: gray;"></td>
                </tr>
                <tr class="row-3">
                    <td>Warga Negara</td>
                    <td><input type="text" name="warga_negara" id="" required pattern="[A-Za-z]{1,}" value="<?php echo $loginUser['wargaNegara']; ?>"></td>
                    
                    <td>Email</td>
                    <td><input type="email" name="email" id="" required value="<?php echo $loginUser['email']; ?>"></td>

                    <td>No HP</td>
                    <td><input type="number" name="nomorHP" id="" required pattern=".{10,15}" value="<?php echo $loginUser['noHP']; ?>"></td>
                </tr>
                <tr class="row-4">
                    <td>Alamat</td>
                    <td><textarea name="alamat" id="alamat" cols="20" rows="4" required max="20" value="<?php echo $loginUser['alamat']; ?>"></textarea></td>
                    
                    <td>Kode Pos</td>
                    <td><input type="number" name="kodepos" id="" required value="<?php echo $loginUser['kodepos']; ?>"></td>

                    <td>Foto Profil</td>
                    <td>
                        <img src="./photos/<?= $loginUser['namaFileFoto']?>" alt="no img" width="100" height="100">
                        <br>
                        <a href="./editpic.php" style="border: 1.5px solid black;
                        border-radius: 3px; 
                        font-size:smaller; 
                        background-color:#C7C6C1;
                        padding: 3px; ">Ubah Foto</a>
                    </td>
                </tr>
                <tr class="row-5">
                    <td>Username</td>
                    <td><input type="text" name="r_username" id="" required pattern="[A-Za-z0-9]+" value="<?php echo $loginUser['username']; ?>"></td>
                    
                    <td>Password 1</td>
                    <td><input type="password" name="r_password" id="" required pattern=".{8,}" title="Eight or more characters"></td>

                    <td>Password 2</td>
                    <td><input type="password" name="r_confirmPassword" id="" required pattern=".{8,}" title="Eight or more characters"></td>
                </tr>
    
                <tr class="row-6">
                    <td colspan="5" class="kembali-row">
                        <a href="./home.php" class="kembali-button">Kembali</a>
                    </td>
                    <td>
                        <button name="edit" class="registrasi-button">Edit</button>
                    </td>
                </tr>
            </table>            
        </form>

</body>
</html>