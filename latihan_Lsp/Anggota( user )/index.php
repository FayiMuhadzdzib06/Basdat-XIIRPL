    <!-- Cek halaman apakah sudah login atau belum -->
    <?php 
        session_start();
        if($_SESSION['status']!='login'){
            header("location:login-user.php?pesan=belum_login");
        }
        ?>
    <!-- end -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #e8e8e8;
        }
        a{
            text-decoration: none;
        }
        .container {
            width: 100%;
            height: 649px;
            display: grid;
            grid-template-areas: 'nav'
                                    'main';
            grid-template-rows: 80px auto;
            position: fixed;
        }
        nav {
            grid-area: 'nav';
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px  rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 99;
        }
        nav .logo {
            width: 55px;
            height: 55px;
            border-radius: 50px;
            border: 2px solid #e8e8e8;
            background-color: #1da88a;
            box-shadow: inset 2px 2px 5px #000000a8,
            inset -2px -2px 5px #ffffffa8,
            2px 2px 5px #000000a8,
            -4px -4px 3px #ffffffa8;
            margin-left: 50px;
        }
        nav .logo i {
            color: #fff;
            font-size: 23px;
            line-height: 51px;
            padding-left: 15px;
            text-shadow: 2px 2px 5px #000000a8,
            -2px -2px 5px #ffffffa8;
        }
        .menu {
            margin-right: 70px;
        }
        nav .userLogo, .userLogoClose {
            font-size: 20px;
            cursor: pointer;
        }
        .profil {
            width: 300px;
            height: 400px;
            position: absolute;
            background-color: #e8e8e8;
            box-shadow: -2px 2px 5px rgba(0, 0, 0, .3);
            right: -310px;
            top: 90px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: .5s;
            border-radius: 10px;
            z-index: 1000;
        }
        .profil .logoProfil {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            box-shadow: 2px 2px 5px #000000a8,
            -4px -4px 8px #ffffff;
            margin: 20px 0 15px 0;
        }
        .profil .logoProfil i {
            width: calc(100% - 25px);
            height: calc(100% - 25px);
            display: grid;
            place-items: center;
            border-radius: 50%;
            box-shadow: inset 2px 2px 5px #000000a8,
            inset -4px -4px 8px #ffffff;
            font-size: 30px;
        }
        .profil h4 {
            font-size: 20px;
        }
        .profil h4 p {
            font-size: 13px;
            color: rgba(0, 0, 0, .5);
            padding: 5px 0;
        }
        .profil hr {
            width: calc(300px - 50px);
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, .2);
            margin: 10px 0;
        }
        .profil .up {
            width: calc(100% - 50px);
            height: 50px;
            border-radius: 2px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            font-weight: 550;
            transition: .2s;
        }
        .profil .up:hover {
            box-shadow: inset 2px 2px 5px #000000a8,
            inset -4px -4px 8px #ffffff;
        }

        /* main */
        .container main {
            grid-area: 'main';
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            overflow-y: scroll;
        }
        main h1 {
            padding: 30px 0;
            color: rgba(0, 0, 0, .8);
            /* text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff; */
            font-size: 2.3em;
        }
        main h2 {
            padding: 10px 0 30px 0;
            color: rgba(0, 0, 0, .8);
            /* text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff; */
            font-size: 2em;
        }
        main table{
            width: calc(100% - 80px);
            text-align: center;
            border-radius: 10px;
            padding-bottom: 10px;
            box-shadow: inset 5px 5px 8px #bebebe,
            inset -5px -5px 8px #ffffff;
            margin-bottom: 20px;
            background-color: #eee;
        }
        main table thead {
            height: 60px;
            border-radius: 10px 10px 0 0;
            background-color: #e0e5ec;
            border-radius: 10px 10px 0 0;
            box-shadow: inset 5px 5px 8px #bebebe,
            inset -5px 0 8px #ffffff;
        }
        main table thead th {
            border-bottom: 2px solid rgba(0, 0, 0, 0.2);
        }
        main table thead th:nth-child(1){
            border-radius: 10px 0 0 0;
        }
        main table thead th:nth-child(6){
            border-radius: 0 10px 0 0;
        }
        main table tbody {
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <i class="fa fa-book" aria-hidden="true"></i>
            </div>
            <div class="menu">
                <i class="fa fa-bars userLogo"></i>
                <i class="fa fa-close userLogoClose" style="display: none;"></i>
            </div>
        </nav>
        <div class="profil">
            <div class="logoProfil">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <h4 style="text-align: center;">
                <?php
                    include '../koneksi.php';
                    $email = $_SESSION['email'];
                    $anggota = mysqli_query($koneksi, "Select * from anggota where email='$email'");
                    foreach ($anggota as $nama) {
                        echo $nama['nama'];
                        ?>
                        <p><?php echo $nama['email']; ?></p>
                        <hr>
                        <?php
                    }
                ?>
            </h4>
            <a href='Update-Profile/update-anggota.php?id_anggota=<?php echo $nama['id_anggota']; ?>' class="up"> Customize</a>
            <a href='pesan.php' class="up"> Pesanan Anda</a>
            <hr>
            <a href="../logout.php" class="up">
                <i class="fa fa-sign-out" aria-hidden="true" style="padding-right: 5px;"></i>
                Logout
            </a>
        </div>
        <main>
            <h1>Selamat datang di Toko Bukon</h1>
            <h2>Data Buku</h2>
            <table cellspacing="0">
                <thead>
                    <th>ID Buku</th>
                    <th>Katalog</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </thead>
                <!-- Menampilkan database Table -->
                <?php
                include '../koneksi.php';
                $buku = mysqli_query($koneksi, "Select * from buku");
                foreach ($buku as $row) {
                    echo "<tbody>";
                    echo "<td>" . $row['id_buku'] . "</td>";
                    echo "<td>" . $row['id_katalog'] . "</td>";
                    echo "<td>" . $row['judul_buku'] . "</td>";
                    echo "<td>" . $row['pengarang'] . "</td>";
                    echo "<td>" . $row['thn_terbit'] . "</td>";
                    echo "<td>" . $row['penerbit'] . "</td>";
                    echo "<td>" . "Rp. " . number_format($row['harga']) . " ,-" . "</td>";
                    ?>
                    <td>
                        <a href="keranjang.php?id_buku=<?php echo $row['id_buku']?> & action=add">pesan</a>
                    </td>
                <?php
                    echo "</tbody>";
                }
                ?>
            </table>
            <h3 style="padding: 10px 0 30px 0;"> Total Semua Harga Buku :
                <?php 
                    $db = mysqli_query($koneksi, "SELECT * FROM buku;");
                    while($r = mysqli_fetch_array($db)){
                        $harga[] = $r['harga'];
                    }
                    $totalHarga = array_sum($harga);
                    echo "Rp. " . number_format($totalHarga) . " ,-";
                    
                ?>
            </h3>
        </main>
    </div>

    <script>

        const burgerBtn = document.querySelector('.userLogo');
        const burgerBtnClose = document.querySelector('.userLogoClose');
        const p = document.querySelector('.profil');
        burgerBtn.onclick = () => {
            p.style.right = '20px';
            burgerBtn.style.display = 'none';
            burgerBtnClose.style.display = 'block';
        }
        burgerBtnClose.onclick = () => {
            p.style.right = '-310px';
            burgerBtn.style.display = 'block';
            burgerBtnClose.style.display = 'none';
        }

    </script>

</body>
</html>