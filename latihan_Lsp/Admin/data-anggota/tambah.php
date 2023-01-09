<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
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
        .lapis-input label {
            position: absolute;
            left: 180px;
        }
        .lapis-input label i {
            font-size: 17px;
            color: rgba(0, 0, 0, .8);
        }
        form .lapis-input:nth-child(3) label i {
            font-size: 19px;
            color: rgba(0, 0, 0, .8);
            padding-top: 7px;
        }
        form .lapis-input:nth-child(4) label {
            left: 185px;
        }
        form .lapis-input:nth-child(4) label i {
            font-size: 19px;
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
        <i class="fa fa-user logo"></i>
        <form action="proses-tambah.php" method="post">
            <h1>Tambah Data Anggota</h1>
            <div class="lapis-input">
                <label for="user"><i class="fa fa-user-o" aria-hidden="true"></i></label>
                <input type="text" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="lapis-input">
                <label for="user"><i class="fa fa-phone" aria-hidden="true"></i></label>
                <input type="number" name="no_telp" placeholder="Masukkan No Telepon" required>
            </div>
            <div class="lapis-input">
                <label for="user"><i class="fa fa-map-marker" aria-hidden="true"></i></label>
                <input type="text" name="alamat" placeholder="Masukkan Nama Alamat" required>
            </div>
            <div class="lapis-input">
                <label for="user"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                <input type="text" name="email" placeholder="Masukkan Email" required>
            </div>
            <div class="lapis-input">
                <label for="user"><i class="fa fa-key" aria-hidden="true"></i></label>
                <input type="password" name="password" placeholder="Masukkan Password" required>
            </div>
            <button type="submit" class="btn" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>