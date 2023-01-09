<!DOCTYPE html>
<html>

<head>
    <title>Menghitung Jumlah Data Pada Table - www.malasngoding.com</title>
</head>
    <style>
        body {
            font-family: 'Roboto';
        }

        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>

<body>
    <h2>Menghitung Jumlah Data Pada Table</h2>

    <?php
    // https://www.malasngoding.com
    // menghubungkan dengan koneksi database
    include 'koneksi.php';

    // mengambil data barang
    $data_barang = mysqli_query($koneksi, "SELECT * FROM barang");

    // menghitung data barang
    $jumlah_barang = mysqli_num_rows($data_barang);
    ?>

    <p>Jumlah data barang : <b><?php echo $jumlah_barang; ?></b></p>

    <table border="1">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $barang = mysqli_query($koneksi, "SELECT * FROM barang");
            while ($b = mysqli_fetch_array($barang)) {
            ?>
                <tr>
                    <td><?php echo $b['kode']; ?></td>
                    <td><?php echo $b['nama_barang']; ?></td>
                    <td><?php echo $b['jumlah']; ?></td>
                    <td><?php echo "Rp. " . number_format($b['harga']) . " ,-"; ?></td>
                    <td>
                        <?php 
                            $ttl_jumlah = $b['jumlah'];
                            $ttl_harga = $b['harga'];
                            $totalAll = $ttl_jumlah * $ttl_harga;
                            echo "Rp. " . number_format($totalAll) . " ,-";
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>