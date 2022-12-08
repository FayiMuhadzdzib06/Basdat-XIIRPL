<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Menambahkan Data</h1>
    <form action="proses.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <br>
        <label>No Telepon</label>
        <input type="number" name="no_telp">
        <br>
        <label>Alamat</label>
        <input type="text" name="alamat">
        <br>
        <label>Email</label>
        <input type="text" name="email">
        <br>
        <button type="submit" name="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>