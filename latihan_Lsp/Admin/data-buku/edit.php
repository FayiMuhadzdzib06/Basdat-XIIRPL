<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #e8e8e8;
        }
        a {
            text-decoration: none;
        }
        .container {
            width: calc(100% - 300px);
            height: auto;
            padding: 20px 0;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container .logo {
            font-size: 3em;
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
        }
        .container h1 {
            font-size: 2em;
            color: rgba(0, 0, 0, .8);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
            padding: 10px 0 0 0;
        }
        .container h3 {
            color: rgba(0, 0, 0, .8);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
        }
        .container form {
            width: calc(100% - 400px);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .lapis-input {
            width: calc(100% - 50px);
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            position: relative;
        }
        .lapis-input input {
            outline: none;
            border: none;
            width: 300px;
            height: 60px;
            padding: 0 45px 0 55px;
            border-radius: 50px;
            background: #e8e8e8;
            box-shadow: inset 3px 3px 8px #bebebe,
            inset -3px -3px 8px #ffffff;
            font-size: 15px;
        }
        .lapis-input input[type='date']{
            font-size: 14px;
            color: rgba(0, 0, 0, .6);
        }
        /* buat ilangin logo bawaan input type date nya */
        ::-webkit-calendar-picker-indicator {
            width: 300px;
            height: 100%;
            position: absolute;
            margin: auto;
            border: 1px solid black;
            opacity: 0;
        }
        .lapis-input label {
            position: absolute;
            left: 180px;
        }
        .lapis-input label i {
            font-size: 17px;
            color: rgba(0, 0, 0, .8);
        }
        .btn {
            width: 300px;
            height: 50px;
            border-radius: 50px;
            background-color: #1da88a;
            border: none;
            font-size: 17px;
            color: #e8e8e8;
            margin-top: 20px;
            box-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
            cursor: pointer;
            transition: .5s;
        }
        p{
            font-size: 15px;
            color: rgba(0, 0, 0, .8);
            padding-top: 10px;
            font-weight: 600;
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
        }
        p a {
            color: rgba(0, 0, 0, .5);
        }
    </style>
</head>

<body>
    <div class="container">
        <i class="fa fa-address-book logo"></i>
        <form action="proses-edit.php" method="post">
            <h1>Edit Data Buku</h1>
            <?php 
                include '../../koneksi.php';
                $id_buku = $_GET['id_buku'];
                $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
                // Data yang sudah di cocokan dengan id_buku, di duar menggunakan fetch array sehingga bisa di taro satu satu di formny
                while($duar = mysqli_fetch_array($data)){

            ?>
            <input type="hidden" name="id_buku" id="id_buku" value="<?php echo $duar['id_buku'] ?>">
            <div class="lapis-input">
                <input type="number" name="katalog" placeholder="Masukkan ID Katalog" value="<?php echo $duar['id_katalog'] ?>">
            </div>
            <div class="lapis-input">
                <input type="text" name="judul" placeholder="Masukkan Judul Buku" value="<?php echo $duar['judul_buku'] ?>">
            </div>
            <div class="lapis-input">
                <input type="text" name="pengarang" placeholder="Masukkan Nama Pengarang" value="<?php echo $duar['pengarang'] ?>">
            </div>
            <div class="lapis-input terbit">
                <input type="date" name="thn_terbit" placeholder="Masukkan Tahun Terbit" value="<?php echo $duar['thn_terbit'] ?>">
            </div>
            <div class="lapis-input">
                <input type="text" name="penerbit" placeholder="Masukkan Nama Penerbit" value="<?php echo $duar['penerbit'] ?>">
            </div>
            <button type="submit" class="btn" name="submit">Submit</button>
        </form>
        <?php 
                }
        ?>
    </div>
</body>

</html>