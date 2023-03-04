<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pemesanan</title>
</head>
<body>
    <h1>List Pemesanan</h1>
    <h3>Klik valid untuk menyelesaikan pemesanan</h3>
    <h3>Klik not valid untuk membatalkan pemesanan</h3>
    <table border="1">
        <tr>
            <th>Resi</th>
            <th>Barang</th>
            <th>Status</th>
            <th>Username</th>
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
                <td><?php echo $row['username']; ?></td>
                <td><a href="status/update_status.php?id=<?php echo $row['id']; ?>">Proses Pesanan</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>