<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
        <form action="prosesRegistrasi.php" method="post" enctype="multipart/form-data">
            <table class="regis-table">
                <caption class="table-caption">Register</caption>
                <tr class="row-1">
                    <td>Nama Depan</td>
                    <td><input type="text" name="r_nama_depan" id="" required pattern="[A-Za-z]{1,}"></td>
    
                    <td>Nama Tengah</td>
                    <td><input type="text" name="r_nama_tengah" id="" required pattern="[A-Za-z]{1,}"></td>

                    <td>Nama Belakang</td>
                    <td><input type="text" name="r_nama_belakang" id="" required pattern="[A-Za-z]{1,}"></td>
                </tr>
                <tr class="row-2">
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" id="" required></td>
                    
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="DD/MM/YYYY" required></td>

                    <td>NIK</td>
                    <td><input type="number" name="nik" id="" required pattern=".{16}"></td>
                </tr>
                <tr class="row-3">
                    <td>Warga Negara</td>
                    <td><input type="text" name="warga_negara" id="" required pattern="[A-Za-z]{1,}"></td>
                    
                    <td>Email</td>
                    <td><input type="email" name="email" id="" required></td>

                    <td>No HP</td>
                    <td><input type="number" name="nomorHP" id="" required pattern=".{10,15}"></td>
                </tr>
                <tr class="row-4">
                    <td>Alamat</td>
                    <td><textarea name="alamat" id="alamat" cols="20" rows="4" required max="20"></textarea></td>
                    
                    <td>Kode Pos</td>
                    <td><input type="number" name="kodepos" id="" required></td>

                    <td>Foto Profil</td>
                    <td>
                        <input type="File" name="fotoProfil" id="" required accept="image/png, image/jpeg">
                        <!-- accept -> supaya user hanya bisa memasukan file dengan format png / jpeg -->
                    </td>
                </tr>
                <tr class="row-5">
                    <td>Username</td>
                    <td><input type="text" name="r_username" id="" required pattern="[A-Za-z0-9]+"></td>
                    
                    <td>Password 1</td>
                    <td><input type="password" name="r_password" id="" required pattern=".{8,}" title="Eight or more characters"></td>

                    <td>Password 2</td>
                    <td><input type="password" name="r_confirmPassword" id="" required pattern=".{8,}" title="Eight or more characters"></td>
                </tr>
    
                <tr class="row-6">
                    <td colspan="5" class="kembali-row">
                        <a href="./index.php" class="kembali-button">Kembali</a>
                    </td>
                    <td>
                        <button name="registrasi-button" class="registrasi-button">Register</button>
                    </td>
                </tr>
            </table>            
        </form>

        <!-- <script>
            $("#tgl_lahir").datepicker({
                dateFormat: "dd/mm/yyyy"
            }); 
        </script> -->
</body>
</html>