<?php 
    include '../koneksi.php';
    
    // menangkap data yang ada di form
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    // menginput database
    $input = mysqli_query($koneksi, "insert into anggota values('', '$nama', '$no_telp', '$alamat', '$email', '')");

    if($input){
        ?>
        <script>
            alert('Data Berhasil di tambahkan!!');
            window.location = "../show.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Data Gagal di tambahkan!!');
            window.location = "tambah.php";
        </script>
        <?php
    }

?>