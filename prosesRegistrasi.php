<?php
    include("config.php");
    session_start();
    if(isset($_POST['registrasi-button'])){
        if($_POST['r_password'] == $_POST['r_confirmPassword']){
            $_SESSION["nama_depan"] = $_POST['r_nama_depan'];
            $_SESSION["nama_tengah"] = $_POST['r_nama_tengah'];
            $_SESSION["nama_belakang"] = $_POST['r_nama_belakang'];
            $_SESSION["tempat_lahir"] = $_POST['tempat_lahir'];
            $_SESSION["tanggal_lahir"] = $_POST['tgl_lahir'];
            $_SESSION["nomor_nik"] = $_POST['nik'];
            $_SESSION["warga_negara"] = $_POST['warga_negara'];
            $_SESSION["email"] = $_POST['email'];
            $_SESSION["nomor_hp"] = $_POST['nomorHP'];
            $_SESSION["alamat"] = $_POST['alamat'];
            $_SESSION["kode_pos"] = $_POST['kodepos'];
            $_SESSION["usernameRegis"] = $_POST['r_username'];
            $_SESSION["passwordRegis"] = $_POST['r_password'];
            
            $namaFile = $_FILES['fotoProfil']['name'];
            $tmp_name = $_FILES['fotoProfil']['tmp_name'];
            $dirUpload = "photos/";
            $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
            $_SESSION["foto"] = $namaFile;
            // setelah regis, diarahkan ke halaman welcome untuk lakukan login
            // header("Location: index.php");

            $str_query = "insert into user values(
                '".$_SESSION["nomor_nik"]."',
                '".$_SESSION["nama_depan"]."',
                '".$_SESSION["nama_tengah"]."',
                '".$_SESSION["nama_belakang"]."',
                '".$_SESSION["tempat_lahir"]."',
                '".$_SESSION["tanggal_lahir"]."',
                '".$_SESSION["warga_negara"]."',
                '".$_SESSION["email"]."',
                '".$_SESSION["nomor_hp"]."',
                '".$_SESSION["alamat"]."',
                '".$_SESSION["kode_pos"]."',
                '".$_SESSION["foto"]."',
                '".$_SESSION["usernameRegis"]."',
                '".$_SESSION["passwordRegis"]."')";
        
            $query = mysqli_query($connection, $str_query);
        
            if($query){
                header("location:index.php");
            }else{
                echo "Proses Gagal".mysqli_error($connection);
            }

        }else{
            echo "Ada kesalahan dalam proses input password anda";
        }
    }
?>