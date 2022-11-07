<?php

//cara membuat function tidak memakai class
function ngoding()
{
}

// function bisa di kategorikan menggunakan public, protected, private
class vscode
{
    public function coding_php()
    {
    }
}

//mencoba buat fungsi sapa teman
function sapa_teman()
{
    echo "<h1>Hai gais<h1>";
    echo "<h3>Ketemu lagi bersama guweh<h3>";
}
//mengcoba membuat fungsi yang ada paramater
function temen($temen_guweh, $umur)
{
    echo "<h2>Heyyy disini guweh sama {$temen_guweh}<h2>";
    echo "<h2>umur die segini {$umur}<h2>";
}
//cara panggil fungsi 
//tuliskan nama fungsinya bersama()
sapa_teman();

// jika fungsi menggunakan parameter, harus di tulis saat pemanggilannya
temen("rizki", 20);

//mengcoba mengbuwat funksi menkgunaqan percabankan
function kasir($nama, $jumlah)
{
    echo "<h3>Hai {$nama}, Terima kasih telah berkunjung!! <h3>";
    echo "<h3>Dan jangan lupa kembali lagi!! <h3>";

    //membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
    if ($jumlah > 10) {
        echo "<h3>Gokill, kamu dapet mobil karna telah berkunjung sebanyak {$jumlah} kali <h3>";
    }
}
//panggil fungsinya dan isi parameternya
kasir("Akbar", 9);
