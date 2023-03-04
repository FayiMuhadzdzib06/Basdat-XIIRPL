<?php 
    include '../../koneksi.php';

    $id = $_POST['id'];
    // $akhir = isset($id['id']) ? $id['id'] :'';
    $status = $_POST['status'];

    $input = mysqli_query($koneksi, "update orders set status='$status' where id='$id'");

    if($input){
        ?>
        <script>
            alert('Status Berhasil Di Ubah!!');
            window.location = "../pesan.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Status Gagal Di Ubah!!');
            window.location = "../pesan.php";
        </script>
        <?php
    }
?>