<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(205, 241, 255);
        }

        p {
            font-size: 2em;
            text-align: center;
            font-weight: bold;
            padding-top: 50px;
            color: #564a5f;
            transform: skewY(-4deg);
            text-shadow: 8px 8px #bfbaff,
                16px 16px #ffdef7;
            transition: .5s;
        }

        p:hover {
            transform: skewY(0);
        }

        .kotak {
            width: calc(100% - 100px);
            height: 50px;
            display: flex;
            align-items: center;
            margin: 130px auto 0;
            justify-content: space-around;
        }

        li {
            list-style: none;
            width: 200px;
            height: 100%;
            border: 1px solid #564a5f;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            font-weight: bold;
            transition: .5s;
        }

        li::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 50px;
            transform: translate(10px, 10px);
            border-radius: 20px;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            background-color: #bfbaff;
            z-index: -1;
            transition: .5s;
        }

        li:hover::after {
            transform: translate(0);
            background-color: #564a5f;
        }

        li:hover {
            color: #fff;
            border: 1px solid #bfbaff;
        }

        div {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            position: absolute;
            margin-top: 200px;
            margin-left: 280px;
            transition: .5s;
            opacity: 0;
            color: black;
        }

        li:hover div {
            margin-top: 0;
            opacity: 1;
            display: block;
        }
    </style>
</head>

<body>

    <?php
        // function kalimat 
        function kalimat($nama, $jumlah, $angka)
        {
            echo "<p> 1. saat aku menggunakan $nama </p>";
            echo "<p> 2. aku gunakan $jumlah satu lembar! </p>";
            echo "<p> 3. $jumlah harganya $angka </p>";
        }
        kalimat('tisu', 'satu lembar', 2000);
    ?>
    <!-- count -->
    <ul class="kotak">
        <li>
            <?php
                $kalimat1 = ['saat', 'aku', 'menggunakan', 'tisu'];
                echo " Count kalimat ke-1 ";
            ?>
            <div>
                <?php
                    echo count($kalimat1);
                ?>
            </div>
        </li>
        <li>
            <?php
                $kalimat2 = ['aku', 'gunakan', 'satu', 'lembar', 'satu', 'lembar'];
                echo " Count kalimat ke-2 ";
            ?>
            <div>
                <?php
                    echo count($kalimat2);
                ?>
            </div>
        </li>
        <li>
            <?php
                $kalimat3 = ['satu', 'lembar', 'harganya', 2000];
                echo " Count kalimat ke-3 ";
            ?>
            <div>
                <?php
                    echo count($kalimat3);
                ?>
            </div>
        </li>
    </ul>
</body>

</html>