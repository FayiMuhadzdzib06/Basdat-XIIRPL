<?php 
    include '../../koneksi.php';

    $katalog = $_POST['katalog'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $thn_terbit = $_POST['thn_terbit'];
    $penerbit = $_POST['penerbit'];

    $input = mysqli_query($koneksi, "insert into buku values('', '$katalog', '$judul', '$pengarang', '$thn_terbit', '$penerbit')");

    if($input){
        ?>
        <script>
            alert('Data Berhasil Ditambahkan!!');
            window.location = "../index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Data Gagal Ditambahkan!!');
            window.location = "../index.php";
        </script>
        <?php
    }
?>