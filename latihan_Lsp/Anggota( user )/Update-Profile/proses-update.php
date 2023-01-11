<?php 
    include '../../koneksi.php';

    $id_anggota = $_POST['id'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $input = mysqli_query($koneksi, "UPDATE anggota SET nama='$nama', no_telp='$no_telp', alamat='$alamat' WHERE id_anggota='$id_anggota'");

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