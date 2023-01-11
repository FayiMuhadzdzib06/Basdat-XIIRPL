<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h1>cart</h1>
    <h3>Keranjang Anda Terisi : </h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </thead>
    <?php 
        include '../koneksi.php';
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
        foreach ($data as $buku) {
            echo "<tbody>";
            echo "<td>" . $buku['id_buku'] . "</td>";
            echo "<td>" . $buku['id_katalog'] . "</td>";
            echo "<td>" . $buku['judul_buku'] . "</td>";
            echo "<td>" . $buku['pengarang'] . "</td>";
            echo "<td>" . $buku['thn_terbit'] . "</td>";
            echo "<td>" . $buku['penerbit'] . "</td>";
        }
    ?>
    </table>
</body>
</html>