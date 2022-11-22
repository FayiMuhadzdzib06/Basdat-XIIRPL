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
echo "<pre>";
print_r($errors);
echo "</pre>";

?>