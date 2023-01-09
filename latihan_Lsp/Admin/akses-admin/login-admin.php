<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
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
            margin: 50px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container .logo {
            font-size: 5em;
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
        }
        .container h1 {
            font-size: 3em;
            color: rgba(0, 0, 0, .8);
            text-shadow: 4px 4px 8px #aaaaaa,
            -4px -4px 8px #ffffff;
            padding: 0 0 0 0;
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
        <i class="fa fa-user-circle logo" aria-hidden="true"></i>
        <h1>Login</h1>
        <h3>Admin Access</h3>
        <form action="proses-admin.php" method="post">
            <div class="lapis-input">
                <label for="user"><i class="fa fa-user-o" aria-hidden="true"></i></label>
                <input type="text" name="admin" id="admin" placeholder="Masukkan Username" required>
            </div>
            <div class="lapis-input">
                <label for="pass"><i class="fa fa-key" aria-hidden="true"></i></label>
                <input type="password" name="pass" id="pass" placeholder="Masukkan Passsword" required >
            </div>
            <button class="btn" type="submit">Login</button>
            <p>Back to <a href="../../index.php">Home</a></p>
        </form>
    </div> 
</body>
</html>
