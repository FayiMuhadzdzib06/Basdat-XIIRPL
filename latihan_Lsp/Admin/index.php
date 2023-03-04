<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #fff;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: rgb(34, 34, 34);
        }

        a {
            text-decoration: none;
        }

        [wel] {
            text-align: center;
            font-size: 2.2em;
            padding: 90px 0 0 0;
        }

        h1 {
            text-align: center;
            padding: 70px 0 30px 0;
        }

        nav {
            width: 100%;
            height: 50px;
            background-color: rgba(255, 255, 255, .02);
            border-bottom: 2px solid rgba(255, 255, 255, .5);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;
            padding: 10px;
            backdrop-filter: blur(20px);
            z-index: 999;
        }

        table {
            width: 1150px;
            margin: 0 auto 20px;
            background-color: rgba(255, 255, 255, .02);
            position: relative;
        }

        table .header {
            height: 50px;
            border: none;
            text-align: center;
            background-color: rgba(0, 0, 0, .4);
        }

        table tr {
            height: 50px;
            margin-top: 10px;
        }

        table td {
            transition: .2s;
            text-align: center;
            color: rgba(255, 255, 255, .5);
            padding: 5px 0;
        }

        table tr:hover td {
            color: #fff;
        }

        table .hapus {
            padding: 10px;
            border-radius: 2px;
            border: 1px solid red;
            color: red;
            transition: .5s;
        }

        table tr:hover .hapus {
            background-color: red;
            color: #fff;
            border: none;
        }

        table .hapus:hover {
            opacity: .7;
        }

        table tr td:nth-child(7),
        [ang] tr td:nth-child(6) {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        table .ubah {
            padding: 10px;
            border-radius: 2px;
            border: 1px solid green;
            color: green;
            transition: .5s;
        }

        table tr:hover .ubah {
            background-color: green;
            color: #fff;
            border: none;
        }

        table .ubah:hover {
            opacity: .7;
        }

        table {
            position: relative;
        }

        /* form */
        .add {
            width: 40px;
            height: 40px;
            background-color: #fff;
            font-size: 2em;
            position: absolute;
            right: 50px;
            margin-top: 5px;
            color: black;
            display: grid;
            place-items: center;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- Cek halaman apakah sudah login atau belum -->
    <?php
    session_start();
    if ($_SESSION['status'] != 'login') {
        header("location:akses-admin/login-admin.php?pesan=belum_login");
    }
    ?>
    <!-- end -->
    <nav>
        <h3> <?php echo $_SESSION['admin']; ?></h3>
        <a href="../logout.php">Logout</a>
    </nav>
    <h1 wel>Selamat Datang Admin <?php echo $_SESSION['admin']; ?> </h1>
    <a href="sandbox.php">sandbox</a>
    <br>
    <a href="pesan.php">paket</a>
    <h1>Data Buku</h1>
    <?php
    include '../koneksi.php';
    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    $jumlah_buku = mysqli_num_rows($buku);
    ?>
    <h3>Total Buku Tersedia : <?php echo $jumlah_buku; ?> </h3>
    <a href="cetak_buku.php">Cetak</a>
    <table cellspacing="0">
        <!-- tambah data -->
        <a href="data-buku/tambah.php">
            <div class="add">+</div>
        </a>
        <tr class="header">
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>Aksi</th>
        </tr>
        <!-- Menampilkan database Table -->
        <?php
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "Select * from buku");
        foreach ($buku as $row) {
            echo "<tr>";
            echo "<td>" . $row['id_buku'] . "</td>";
            echo "<td>" . $row['id_katalog'] . "</td>";
            echo "<td>" . $row['judul_buku'] . "</td>";
            echo "<td>" . $row['pengarang'] . "</td>";
            echo "<td>" . $row['thn_terbit'] . "</td>";
            echo "<td>" . $row['penerbit'] . "</td>";
            echo "<td>" . "Rp. " . number_format($row['harga']) . " ,-" . "</td>";
            echo "<td>" . $row['qty'] . "</td>";
        ?>
            <td>
                <a href="data-buku/proses-hapus.php?id_buku=<?php echo $row['id_buku']; ?>" class="hapus" onclick="return confirm('Yakin Mau di hapus Deck??')"> Hapus</a>
                <a href='data-buku/edit.php?id_buku=<?php echo $row['id_buku']; ?>' class="ubah"> Ubah</a>
            </td>
            <?php
            echo "</tr>";
        }
        ?>
    </table>
    <h3 style="padding: 10px 0 30px 0;"> Total Semua Harga Buku :
        <?php
        $db = mysqli_query($koneksi, "SELECT * FROM buku;");
        while ($r = mysqli_fetch_array($db)) {
            $harga[] = $r['harga'];
        }
        $totalHarga = array_sum($harga);
        echo "Rp. " . number_format($totalHarga) . " ,-";
        
        ?>
    </h3>
    
    <!-- data anggota -->
    <h1>Data Anggota</h1>
    <?php
    include '../koneksi.php';
    $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
    $jumlah_anggota = mysqli_num_rows($anggota);
    ?>
    <h3>Total Anggota : <?php echo $jumlah_anggota; ?> </h3>
    <a href="cetak_anggota.php">Cetak</a>
    <table ang cellspacing="0">
        <!-- tambah data -->
        <a href="data-anggota/tambah.php">
            <div class="add">+</div>
        </a>
        <tr class="header">
            <th>ID_Anggota</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <!-- Menampilkan database Table -->
        <?php
        include '../koneksi.php';
        $anggota = mysqli_query($koneksi, "Select * from anggota");
        foreach ($anggota as $row) {
            echo "<tr>";
            echo "<td>" . $row['id_anggota'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['no_telp'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
        ?>
            <td>
                <a href="data-anggota/proses-hapus.php?id_anggota=<?php echo $row['id_anggota']; ?>" class="hapus" onclick="return confirm('Yakin Mau di hapus Deck??')"> Hapus</a>
                <a href='data-anggota/edit.php?id_anggota=<?php echo $row['id_anggota']; ?>' class="ubah"> Ubah</a>
            </td>
        <?php
            echo "</tr>";
        }
        ?>
    </table>


</body>

</html>