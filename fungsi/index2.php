<?php
//Function itu ada 2 , ada yang mengembalikan nilai dan ada yang tidak 
// Array yang berisi 3 nilai
$a = ['merah', 'kuning', 'hijau', 'hijau'];

//fungsi dari is_null itu mengembalikan nilai bernilai true or false
$fungsi_is_null = is_null($a);

//fungsi dari is_array itu mengembalikan apakah array atau tidak
$fungsi_is_array = is_array($a);

//fungsi dari count
$panjang = count($a);

//fungsi mengenkripsi karakter MD5 
$enkripsi = md5('Sebenernya aku benci sama kamu');

//fungsi var_dump untuk menampilkan hasil dari function return
var_dump($fungsi_is_null);
echo "<br>";
var_dump($fungsi_is_array);
echo "<br>";
var_dump($panjang);
echo "<br>";
var_dump($enkripsi);
