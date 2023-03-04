<?php 
    session_start();
    require '../koneksi.php';
    require 'item.php';

    // Simpan Pesanan Baru kedalam table
    $simpan = 'insert into orders (nama, date_create, status, username) values ("New Order", "'.date('y-m-d').'", 0, "acc 2")';

    // Konekkin
    mysqli_query($koneksi, $simpan);

    // orders id (fungsinnya utk membuat masing masing id)
    $id_orders = mysqli_insert_id($koneksi);

    // set keranjang sebagai array, serialize mengubah string menjadi array
    $keranjang = unserialize(serialize($_SESSION['keranjang']));

    for($barang  = 0; $barang < count($keranjang); $barang++){
        $detail = 'insert into orders_detail (id_product, id_order, price, qty) values ('.$keranjang[$barang]->id_buku.', '.$id_orders.', '.$keranjang[$barang]->harga.', '.$keranjang[$barang]->qty.')';
        
        mysqli_query($koneksi, $detail);
    }

    // Menghapus semua produk yang ada dikeranjang setelah di checkout
    unset($_SESSION['keranjang'])
?>

<!-- Arahkan untuk keindex lagi -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <p>Thanks for buying products, Click <a href="index.php">here</a> to continue purchasing products</p>
</body>
</html>