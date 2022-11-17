<?php 
    // global
    require 'global.php';

    // statis
    function statis(){
        static $var = " saya adalah siswa XII RPL";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = " desain";
    function lokal(){
        $skil = " saya bisa coding dan";
        echo $skil;
    }
    lokal();
    echo $skil;

?>