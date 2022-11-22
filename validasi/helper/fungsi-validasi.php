<?php 

require_once 'fungsi-pesan-error.php';

function validasi(array $listinput){
    // variabel berisi inputan form 
    $request = $_REQUEST;
    
    // memanggil semua variable error
    $errors = [];
    
    // mengakses variabel $ListPesanError
    global $listPesanError;

    // perulangan untuk array terluar (berisi nama input)
    foreach ($listinput as $input => $listrules){
        echo "Periksa Input <strong>{$input}</strong><br>";

        // Menggunakan foreach untuk memanggil semua fungsii yang bernama 'lolos'
        foreach($listrules as $rules){
            $namaFungsi = 'lolos'.ucfirst($rules);
            // validasi sesuai input formnya
            $lolos = $namaFungsi($request[$input]);
            // Buatkan Bool (lolos atau tidal lolos)

            // Jika tidak lolos maka munculkan pesan error
            if(!$lolos){
                if(!is_array($errors[$input])){
                    $errors += [$input => []];
                }
                array_push($errors[$input], $listPesanError[$rules]($input));
            }
            echo "<br>";
        }
        echo "<br>";
    } 
    return $errors;
}

function lolosRequired($nilai){
    return(bool)$nilai;
}

// Fungsi Validasi Email
function lolosEmail($nilai){
    return filter_var($nilai, FILTER_VALIDATE_EMAIL);
}

// Fungsi Lolos Username Menggunakan Regex
function lolosUsername($nilai){
    preg_match("/^[a-zA-Z0-9_]+/", $nilai, $output);
    if(count($output)){
        return $output[0] === $nilai;
    }
    return false;
}


// Fungsi Lolos usia ( harus menggunakan numeric )
function lolosNumeric($nilai){
    return is_numeric($nilai);
}


?>