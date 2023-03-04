<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Status Pesanan</title>
</head>

<body>
    <form action="proses_update_status.php" method="post">
        <h1>Update Status Pengiriman</h1>
        <?php
        include '../../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from orders where id='$id' ");
        // Data yang sudah di cocokan dengan id_buku, di meledak menggunakan fetch array sehingga bisa di taro satu satu di formny
        while ($meledak = mysqli_fetch_array($data)) {
        ?>
            <div class="lapis-input">
                <input type="text" name="id" value="<?php echo $meledak['id'] ?>">
            </div>
            <div class="lapis-input">
                <input type="number" name="status" value="<?php echo $meledak['status'] ?>">
            </div>
        <button type="submit" class="btn" name="submit">Submit</button>
    </form>
<?php
        }
?>
</body>

</html>