<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Metode POST</title>
</head>
<body>
    <h1>Menggunakan Metode POST</h1>
    <form method="POST">
        <!-- Passing data di dalam body request tanpa menampilkan secara url -->
        <div>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Masukkan Email">
        </div>
        <div>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Masukkan Password">
        </div>
        <div>
            <button>Login</button>
        </div>
        <?php 
            $email = @$_POST['email'];
            $password = @$_POST['password'];

            echo "Email : {$email} <br>";
            echo "Password : {$password} <br>";
        ?>
    </form>
</body>
</html>