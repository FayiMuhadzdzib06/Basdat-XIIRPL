<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
</head>

<body>
    <h1>Status Pemesanan Anda</h1>
    <h3>Silahkan hubungi admin untuk status pemesanan</h3>
    <table border="1">
        <tr>
            <th>Resi</th>
            <th>Barang</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        include '../koneksi.php';
        $pesan = mysqli_query($koneksi, 'SELECT * FROM orders');
        foreach ($pesan as $row) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td>
                    <?php
                        $status = $row['status'];
                        if ($status == 0) {
                            echo "Paket Diproses";
                        } elseif ($status == 1) {
                            echo "Paket Terkirirm";
                        } elseif ($status == 2) {
                            echo "Paket Reject ";
                        } else {
                            echo "Paket Adios ";
                        }
                    ?>
                </td>

                <td>
                    <a href="cetak_struk.php?id=<?php echo $row['id'];?>">Cetak Struk</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="index.php">balik yu</a>
</body>

</html>