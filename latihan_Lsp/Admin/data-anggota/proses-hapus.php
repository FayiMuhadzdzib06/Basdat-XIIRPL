<?php 
    include '../../koneksi.php';

    // menangkap data id yang dikirim dari url
    $id_anggota = $_GET['id_anggota'];

    // menghapus data dari table buku
    $notif = mysqli_query($koneksi, "delete from anggota where id_anggota='$id_anggota'");

    if($notif){
        ?>
        <script>
            alert('Data Berhasil DiHapus!!');
            window.location = "../index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Data Gagal DiHapus!!');
            window.location = "../index.php";
        </script>
        <?php
    }

?>