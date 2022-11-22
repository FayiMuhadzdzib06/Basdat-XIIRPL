<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>
</head>
<body>
    <form action="proses.php">
        <div>
            <label>Nama( Harus Input nama )</label><br>
            <input type="text" name="nama">
        </div>
        <div style="margin: top 10px;">
            <label>Email( Harus Input @ )</label><br>
            <input type="text" name="email">
        </div>
        <div style="margin: top 10px;">
            <label>Username( Tidak Boleh Regex )</label><br>
            <input type="text" name="username">
        </div>
        <div style="margin: top 10px;">
            <label>Usia( Harus Angka )</label><br>
            <input type="text" name="usia">
        </div><br>
        <div style="margin: top 10px;">
        <button>Submit</button>
        </div>
    </form>
</body>
</html>