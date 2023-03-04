<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
</head>

<body>
    <!-- Fungsi mengolah item -->
    <?php
    session_start();
    require '../koneksi.php';
    require 'item.php';
    if (isset($_GET['id_buku']) && !isset($_POST['update'])) {
        $sql = "Select * from buku where id_buku=" . $_GET['id_buku'];
        $result = mysqli_query($koneksi, $sql);
        $duar = mysqli_fetch_object($result);

        // mencocokan dengan item
        $item = new Item();

        // class(properties) = databases
        $item->id_buku = $duar->id_buku;
        $item->judul_buku = $duar->judul_buku;
        $item->harga = $duar->harga;
        $item->qty = $duar->qty;
        $item->qty = 1;

        // periksa produk dalam keranjang
        $index = -1;
        // unserialize =  mengubah yg tadinya string bisa di ubah jadi array 
        $keranjang = unserialize(serialize($_SESSION['keranjang']));
        // countable solved
        if(is_countable($keranjang) && count($keranjang) > 0)
        for ($barang = 0; $barang < count($keranjang); $barang++)
            if ($keranjang[$barang]->id_buku == $_GET['id_buku']) {
                $index = $barang;
                break;
            }
        if ($index == -1)
            $_SESSION['keranjang'][] = $item;
        // Session 'keranjang' set $ keranjang sebagai variabel dari $_session
        else {
            if (($keranjang[$index]->qty < $iteminstock))
                $keranjang[$index]->$qty++;
            $_SESSION['keranjang'] = $keranjang;
        }
    }

    // fungsi hapus produk dalam keranjang
    if (isset($_GET['index']) && !isset($_POST['update'])) {
        $keranjang = unserialize(serialize($_SESSION['keranjang']));

        unset($keranjang[$_GET['index']]);
        $keranjang = array_values($keranjang);
        $_SESSION['keranjang'] = $keranjang;
    }

    // fungsi perbaruhi jumlah dalam keranjang
    if (isset($_POST['update'])) {
        $array_qty = $_POST['qty'];
        $keranjang = unserialize(serialize($_SESSION['keranjang']));
        for ($barang = 0; $barang < count($keranjang); $barang++) {
            $keranjang[$barang]->qty = $array_qty[$barang];
        }
        $_SESSION['keranjang'] = $keranjang;
    }
    ?>
    <h2>Item kamu dalam keranjang : </h2>
    <form method="post">
        <table border="1">
            <tr>
                <th>Aksi</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <!-- untuk menampilkan data yang sudah diolah -->
            <?php
            $keranjang = unserialize(serialize($_SESSION['keranjang']));
            $total = 0;
            $index = 0;
            for ($barang = 0; $barang < count($keranjang); $barang++) {
                $total += $keranjang[$barang]->harga * $keranjang[$barang]->qty;
            ?>
                <tr>
                    <td>
                        <a href="keranjang.php?index=<?php echo $index; ?>" onclick="return confirm('Yakin Mau di hapus??');">Hapus</a>
                    </td>
                    <td>
                        <?php echo $keranjang[$barang]->id_buku; ?>
                    </td>
                    <td>
                        <?php echo $keranjang[$barang]->judul_buku; ?>
                    </td>
                    <td>
                        <?php echo $keranjang[$barang]->harga; ?>
                    </td>
                    <td>
                        <input type="number" name="qty[]" min="1" value="<?php echo $keranjang[$barang]->qty; ?>">
                    </td>
                    <td>
                        <?php echo $keranjang[$barang]->harga * $keranjang[$barang]->qty; ?>
                    </td>
                </tr>
            <?php
                $index++;
            }
            ?>

            <tr>
                <td colspan="5" style="text-align: center; font-weight: bold;">
                    Hasil
                    <input type="image" id="saveimg" src="save.png" style="width: 30px" name="update" alt="Save Button">
                    <input type="hidden" name="update">
                </td>
                <td>Rp. <?php echo $total; ?></td>
            </tr>
        </table>
    </form>
    <br>
    <a href="index.php">Lanjut Belanja</a>
    <a href="checkout.php">Checkout</a>
    <?php 
        if(isset($_GET['id_buku']) || isset($_GET['index'])){
            header('Location: keranjang.php');
        }
    ?>
</body>

</html>