<?php 
    session_start();
    include '../../koneksi.php';

    // menangkap data yang dikirim dari login
    $username = $_POST['admin'];
    $password = $_POST['pass'];

    // Menyeleksi data dan dicocokan pada table admin xampp
    $data = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");

    // menghitung jumlah data yang ditemukan 
    $cek_data = mysqli_num_rows($data);

    if($cek_data > 0){
        $_SESSION['admin']=$username;
        $_SESSION['status']='login';
        header("location:../index.php");
    }else{
        header("location:../index.php?pesan=gagal");
    }
?>