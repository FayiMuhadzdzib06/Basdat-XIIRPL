<?php 

    // variabel lokal hanya bisa di akses dari scope dimana dia di definisikan 
    $nama = ' Selalu Minta Timestamp ';
    function halodunia(){
        $nama = "Pak Saiful";

        echo $nama;
    }
    halodunia(); // objek
    echo $nama;

?>