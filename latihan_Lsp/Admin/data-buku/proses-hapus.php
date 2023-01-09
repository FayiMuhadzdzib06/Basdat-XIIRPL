<?php 
    include '../../koneksi.php';

    // menangkap data id yang dikirim dari url
    $id_buku = $_GET['id_buku'];

    // menghapus data dari table buku
    $notif = mysqli_query($koneksi, "delete from buku where id_buku='$id_buku'");

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