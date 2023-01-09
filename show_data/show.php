<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <h1>Menampilkan Data Anggota</h1>
    <table border="1">
        <tr>
            <th>ID_Anggota</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
            <!-- Menampilkan database Table -->
            <?php 
                include 'koneksi.php';
                $anggota = mysqli_query($koneksi, "Select * from anggota");
                foreach($anggota as $row){
                    echo "<tr>";
                    echo "<td>". $id = $row['id_anggota'] ."</td>";
                    echo "<td>". $nama = $row['nama'] ."</td>";
                    echo "<td>". $noTelp = $row['no_telp'] ."</td>";
                    echo "<td>". $alamat = $row['alamat'] ."</td>";
                    echo "<td>". $email = $row['email'] ."</td>";
                    echo "</tr>";
                }
            ?>
    </table>
    <h1>Menampilkan Data Buku</h1>
    <table border="1">
        <tr>
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </tr>
            <!-- Menampilkan database Table -->
            <?php 
                $buku = mysqli_query($koneksi, "Select * from buku");
                foreach($buku as $row){
                    echo "<tr>";
                    echo "<td>". $id_buku = $row['id_buku'] ."</td>";
                    echo "<td>". $katalog = $row['id_katalog'] ."</td>";
                    echo "<td>". $judul = $row['judul_buku'] ."</td>";
                    echo "<td>". $pengarang = $row['pengarang'] ."</td>";
                    echo "<td>". $thn_terbit = $row['thn_terbit'] ."</td>";
                    echo "<td>". $penerbit = $row['penerbit'] ."</td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>