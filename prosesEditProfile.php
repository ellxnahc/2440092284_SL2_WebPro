<?php
    include("config.php");

    if(isset($_POST['edit'])){
        if($_POST['r_password'] == $_POST['r_confirmPassword']){

            $str_query = "update user set namaDepan='".$_POST['r_nama_depan']."', 
            namaTengah='".$_POST['r_nama_tengah']."', 
            namaBelakang='".$_POST['r_nama_belakang']."',
            tempatLahir = '".$_POST['tempat_lahir']."',
            tanggalLahir='".$_POST['tgl_lahir']."', 
            wargaNegara='".$_POST['warga_negara']."', 
            email='".$_POST['email']."',
            noHP = '".$_POST['nomorHP']."',
            alamat='".$_POST['alamat']."', 
            kodepos='".$_POST['kodepos']."',
            username = '".$_POST['r_username']."',
            password = '".$_POST['r_password']."'
            where nik = '".$_POST['nik']."'";

            $query = mysqli_query($connection, $str_query);
            
            if($query){
                header("location:profile.php");
            }else{
                echo "Proses Gagal".mysqli_error($connection);
            }
        }
    }

?>