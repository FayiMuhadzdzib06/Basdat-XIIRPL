<?php 

    // statis adalah mempertahankan nilai aslinya
    function test(){
        static $angka = 0; // mendefinisikan variabel
        // variabel lokal jika sudah melewati scopenya akan kembali ke nilai awal
        // static mempertahankan nilainya di luar scope
        echo "A : {$angka} <br>";
        $angka++; // menambahkan fungsi increment
    }
    test();
    test();
    test();

?>