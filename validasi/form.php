<?php 
    $time = (object) @$_GET['time'];
    $errors = (object) @$_GET['errors'];
?>

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
            <input type="text" value="<?php echo @$time->nama?>" name="nama"><br>
            <?php 
                if(@$errors->nama):?>
                <div style="color: red;"><?php echo $errors->nama[0] ?></div>
                <?php
                endif;
            ?>
            <br>
        </div>
        <div style="margin: top 10px;">
            <label>Email( Harus Input @ )</label><br>
            <input type="text" value="<?php echo @$time->email?>" name="email"><br>
            <?php 
                if(@$errors->email):?>
                <div style="color: red;"><?php echo $errors->email[0] ?></div>
                <?php
                endif;
            ?>
            <br>
        </div>
        <div style="margin: top 10px;">
            <label>Username( Tidak Boleh Regex )</label><br>
            <input type="text" value="<?php echo @$time->username?>" name="username"><br>
            <?php 
                if(@$errors->username):?>
                <div style="color: red;"><?php echo $errors->username[0] ?></div>
                <?php
                endif;
            ?>
            <br>
        </div>
        <div style="margin: top 10px;">
            <label>Usia( Harus Angka )</label><br>
            <input type="text" value="<?php echo @$time->usia?>" name="usia"><br>
            <?php 
                if(@$errors->usia):?>
                <div style="color: red;"><?php echo $errors->usia[0] ?></div>
                <?php
                endif;
            ?>
            <br>
        </div>
        <div style="margin: top 10px;">
        <button>Submit</button>
        </div>
    </form>
</body>
</html>