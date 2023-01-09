<?php 
    include '../../koneksi.php';

    $id_buku = $_POST['id_buku'];
    $katalog = $_POST['katalog'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $thn_terbit = $_POST['thn_terbit'];
    $penerbit = $_POST['penerbit'];

    $input = mysqli_query($koneksi, "UPDATE buku SET id_katalog='$katalog', judul_buku='$judul', pengarang='$pengarang', thn_terbit='$thn_terbit', penerbit='$penerbit' WHERE id_buku='$id_buku'");

    if($input){
        ?>
        <script>
            alert('Data Berhasil Di Ubah!!');
            window.location = "../index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Data Gagal Di Ubah!!');
            window.location = "../index.php";
        </script>
        <?php
    }
?>