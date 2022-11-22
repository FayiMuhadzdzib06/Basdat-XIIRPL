<?php 

require 'helper/fungsi-validasi.php';

// tambahkan rules masing masing jenis formnya

$rules = [
    'nama' => ['required'],
    'email' => ['required', 'email'],
    'username' => ['required', 'username'],
    'usia' => ['required', 'numeric']
];

$errors = validasi($rules);
// echo "<pre>";
// print_r($errors);
// echo "</pre>";

// Disini kita bisa melakukan proses yang harus di lakukan
// jika tidak terjadi error validasi apapun

if(count($errors) > 0){
    $time = $_REQUEST;
    $queryString = http_build_query([
        'errors' => $errors,
        'time' => $time
    ]);

    header("location: form.php?{$queryString}");
    die();
}
?>