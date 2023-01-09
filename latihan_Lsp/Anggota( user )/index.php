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
        .container {
            width: 100%;
            height: 649px;
            /* border: 1px solid black; */
            display: grid;
            grid-template-areas: 'aside main right';
            grid-template-columns: 100px 1fr 270px;
        }
        aside {
            grid-area: 'aside';
            display: flex;
            align-items: center;
            flex-direction: column;
            background-color: #f3f3f3;
            box-shadow: inset 2px 2px 20px  rgba(0, 0, 0, 0.2),
            inset -2px -2px 20px #ffffffa8,
            2px 2px 5px  rgba(0, 0, 0, 0.2);
            border-radius: 0 50px 0 0;
        }
        aside .logo {
            width: 70px;
            height: 70px;
            border-radius: 50px;
            border: 2px solid #e8e8e8;
            background-color: #1da88a;
            box-shadow: inset 2px 2px 5px #000000a8,
            inset -2px -2px 5px #ffffffa8,
            2px 2px 5px #000000a8,
            -4px -4px 3px #ffffffa8;
            margin-top: 20px;
        }
        aside .logo i {
            color: #fff;
            font-size: 32px;
            line-height: 65px;
            padding-left: 15px;
            text-shadow: 2px 2px 5px #000000a8,
            -2px -2px 5px #ffffffa8;
        }
        aside .keluar {
            width: calc(100% - 45px);
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            border-radius: 10px;
            cursor: pointer;
            transition: .3s;
        }
        aside .keluar:hover{
            background-color: #f3f3f3;
            box-shadow: inset 5px 5px 8px #bebebe,
            inset -5px -5px 8px #ffffff;
        }
        aside .keluar:hover a i {
            color: #1da88a;
        }
        aside .keluar a i {
            font-size: 25px;
            padding-left: 5px;
            color: rgba(0, 0, 0, .8);
        }
        /* main */
        .container main {
            grid-area: 'main';
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        main h1 {
            padding: 30px 0;
            color: rgba(0, 0, 0, .8);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
            font-size: 2.3em;
        }
        main h2 {
            padding: 10px 0 30px 0;
            color: rgba(0, 0, 0, .8);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
            font-size: 2em;
        }
        /* right */
        .container .right {
            width: 100%;
            height: 100%;
            grid-area: 'right';
            display: flex;
            align-items: center;
            background-color: #f3f3f3;
            flex-direction: column;
            box-shadow:  inset -2px -2px 20px  rgba(0, 0, 0, 0.2),
            -2px 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 50px 0 0 0;
        }
        .right .logoUser {
            font-size: 5em;
            padding: 20px 0;
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
        }
        .right h4 {
            font-size: 1.1em;
            color: rgba(0, 0, 0, .8);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <aside>
            <div class="logo">
                <i class="fa fa-cubes" aria-hidden="true"></i>
            </div>
            <div class="keluar">
                <a href="../logout.php">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
            </div>
        </aside>
        <main>
            <h1>Selamat datang di Toko Bukon</h1>
            <h2>Data Buku</h2>
            <table cellspacing="0">
                <tr class="header">
                    <th>ID Buku</th>
                    <th>Katalog</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
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
                <?php
                    echo "</tr>";
                }
                ?>
            </table>
        </main>
        <div class="right">
            <i class="fa fa-user logoUser" aria-hidden="true"></i>
            <h4>
                Welcome, 
                <?php
                    include '../koneksi.php';
                    $email = $_SESSION['email'];
                    $anggota = mysqli_query($koneksi, "Select * from anggota where email= '$email'");
                    foreach ($anggota as $nama) {
                        echo $nama['nama'];
                    }
                ?>
                !
            </h4>
        </div>
    </div>

</body>
</html>