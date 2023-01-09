<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
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
            width: calc(100% - 400px);
            height: 500px;
            margin: 50px auto 0;
            border-radius: 10px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        .container .logo {
            font-size: 4em;
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
        }
        .container h1 {
            font-size: 5em;
            color: rgba(0, 0, 0, .8);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
            padding: 5px 0 5px 0;
        }
        .container h2 {
            font-size: 2.7em;
            color: rgba(0, 0, 0, .5);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
        }
        .container h4 {
            font-size: 1.3em;
            color: rgba(0, 0, 0, .5);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
            padding: 5px 0 10px 0;
        }
        .container ul {
            width: 100%;
            height: 200px;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .container ul li {
            width: 270px;
            height: 70px;
            border-radius: 170px;
            background: linear-gradient(145deg, #f0f0f0, #cacaca);
            box-shadow:  5px 5px 8px #bebebe,
            -5px -5px 8px #ffffff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3em;
            font-weight: bold;
            color: rgba(0, 0, 0, .5);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
            
        }
        .container ul li i {
            font-size: 1.5em;
            padding-right: 10px;
        }
        .container ul li:hover {
            box-shadow: inset 5px 5px 8px #bebebe,
            inset -5px -5px 8px #ffffff;
            text-shadow: none;
        }
        a{
            text-decoration: none;
        }
        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <i class="fa fa-cubes logo" aria-hidden="true"></i>
        <h1>Toko Bukon</h1>
        <h2>Selamat Datang</h2>
        <h4>Pilih akun untuk masuk</h4>
        <ul>
            <a href="Admin/akses-admin/login-admin.php">
                <li>
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p>Admin</p>
                </li>
            </a>
            <a href="Anggota( user )/login-user.php">
                <li>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p>User</p>
                </li>
            </a>
        </ul>
    </div>
</body>
</html>