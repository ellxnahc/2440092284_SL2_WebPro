<?php
    include("config.php");
    session_start();
    if(isset($_POST['login-button'])){
        //cek usernameinput apakah sama dengan username yang ada di database
        $str_query = "select*from user where username='".$_POST['l_username']."' AND password = '".$_POST['l_password']."'";
        $query = mysqli_query($connection, $str_query);
        $loginUser = mysqli_fetch_array($query);
        //echo $row['namaDepan'];
        if($loginUser){
            $_SESSION['fullname_user'] = $loginUser['namaDepan']." ".$loginUser['namaTengah']." ".$loginUser['namaBelakang'];
            // echo "Login Berhasil";
            $_SESSION["nik_user"] = $loginUser['nik'];
            //echo $_SESSION["nik_user"]." ".$_SESSION['fullname_user'];
            header("Location: home.php");
        }else{
            echo "Username / Password Salah";
        }        

    }
?>
