<?php 
    // Cek button, sudah dipencet atau belum
    if($_POST['submit'] == 'submit'){
        $nama = $_POST['nama'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    // validasi data kosong
    if(empty($_POST['nama']) || empty($_POST['no_telp']) || empty($_POST['alamat']) || empty($_POST['email'])){
        echo "<script>
        alert('Data masih kurang, Silahkan Isi semua data!!!'); 
        document.location = 'tambah.php';
        </script>";
    }else {
        include '../koneksi.php';
    }

    // Fungsi input ke tablenya 
    $input = "insert into anggota values ('', '$nama', '$no_telp', '$alamat', '$email', '$password')";
    $query_input = mysqli_query($koneksi, $input);
    
    if($query_input){
        echo "<script>
        alert('Data berhasil ditambahkan !!'); 
        document.location = '../show.php';
        </script>";
    }else{
        echo "<script>
        alert('Data Gagal ditambahkan !!!'); 
        document.location = 'tambah.php';
        </script>";
    }
?>