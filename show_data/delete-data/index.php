<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Buku</title>
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

        h1 {
            text-align: center;
            padding: 20px 0;
        }

        table {
            width: 1150px;
            margin: 0 auto 20px;
            background-color: rgba(255, 255, 255, .02);
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

        table tr td:nth-child(7) {
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
        /* form */
        .add {
            width: 40px;
            height: 40px;
            background-color: #fff;
            font-size: 2em;
            position: fixed;
            right: 20px;
            bottom: 20px;
            color: black;
            display: grid;
            place-items: center;
            cursor: pointer;
            border-radius: 5px;
        }
        .lapis {
            width: 100%;
            height: 649px;
            position: fixed;
            top: 0;
            background-color: rgba(0, 0, 0, .6);
            display: none;
        }
        form {
            width: calc(100% - 900px);
            height: 550px;
            background-color: #fff;
            border-radius: 5px;
            margin: 50px auto 0;
            position: relative;
        }
        form .header {
            width: 100%;
            height: 80px;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        form .header h1 {
            font-size: 22px;
            padding-left: 20px;
        }
        form .header .close {
            padding-right: 20px;
            cursor: pointer;
            font-weight: bold;
        }
        form input, button {
            color: black;
        }
        form .form-input {
            width: 100%;
            height: 50px;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-input input {
            width: 80%;
            height: 80%;
            outline: none;
            padding: 20px 0;
            font-size: 15px;
            border: none;
            border-bottom: 1px solid black;
        }
        .form-input input:focus,
        .form-input input:hover{
            border-bottom: 2px solid black;
        }
        button {
            width: 100px;
            height: 30px;
            margin-top: 10px;
            background-color: black;
            border-radius: 30px;
            color: white;
            border: none;
            box-shadow: 0 10px 10px rgba(0, 0, 0, .4),
            2px 2px 5px inset rgba(255, 255, 255, .4);
            transition: .5s;
            cursor: pointer;
        }
        button:hover {
            transform: translateY(-10px);
            box-shadow: 0 40px 10px rgba(0, 0, 0, .4),
            2px 2px 5px inset rgba(255, 255, 255, .4);
        }
        .submit {
            margin-left: 45px;
        }
        .reset {
            float: right;
            margin-right: 45px;
        }
    </style>
</head>

<body>
    <h1>Menampilkan Data Buku</h1>
    <table cellspacing="0">
        <tr class="header">
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>
        <!-- Menampilkan database Table -->
        <?php
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "Select * from buku");
        foreach ($buku as $row) {
            echo "<tr>";
            echo "<td>" . $id_buku = $row['id_buku'] . "</td>";
            echo "<td>" . $katalog = $row['id_katalog'] . "</td>";
            echo "<td>" . $judul = $row['judul_buku'] . "</td>";
            echo "<td>" . $pengarang = $row['pengarang'] . "</td>";
            echo "<td>" . $thn_terbit = $row['thn_terbit'] . "</td>";
            echo "<td>" . $penerbit = $row['penerbit'] . "</td>";
        ?>
            <td>
                <a href="proses.php?id_buku=<?php echo $row['id_buku']; ?>" class="hapus" onclick="return confirm('Yakin Mau di hapus Deck??')"> Hapus</a>
                <a href='ubah.php' class="ubah"> ubah</a>
            </td>
        <?php
            echo "</tr>";
        }
        ?>
    </table>
    <div id="add" class="add">+</div>
    <div id="lps" class="lapis">
        <form action="proses.php" method="post">
            <div class="header">
                <h1>Tambah Data Buku</h1>
                <div id="cls" class="close">X</div>
            </div>
            <div class="form-input">
                <input type="number" name="katalog" placeholder="Masukkan ID Katalog">
            </div>
            <div class="form-input">
                <input type="text" name="judul" placeholder="Masukkan Judul Buku">
            </div>
            <div class="form-input">
                <input type="text" name="pengarang" placeholder="Masukkan Nama Pengarang">
            </div>
            <div class="form-input terbit">
                <input type="date" name="thn_terbit" placeholder="Masukkan Tahun Terbit">
            </div>
            <div class="form-input">
                <input type="text" name="penerbit" placeholder="Masukkan Nama Penerbit">
            </div>
            <br>
            <button type="submit" class="submit" name="submit">Submit</button>
            <button type="reset" class="reset">Reset</button>
        </form>
    </div>

    <script>
        var buka = document.getElementById('add');
        var tutup = document.getElementById('cls');
        var lapis = document.getElementById('lps');

        tutup.onclick = function(){
            lapis.style.display = 'none';
        }
        buka.onclick = function(){
            lapis.style.display = 'block';
        }
    </script>
</body>

</html>