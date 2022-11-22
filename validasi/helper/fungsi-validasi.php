<?php 

function validasi(array $listinput){
    // variabel berisi inputan form 
    $request = $_REQUEST;

    // perulangan untuk array terluar (berisi nama input)
    foreach ($listinput as $input => $listrules){
        echo "Periksa Input <strong>{$input}</strong><br>";

         //perulangan untuk sub array ( berisi nama rules)
        foreach ($listrules as $rules){
            echo "Rules <strong>{$rules}</strong><br>";
            // pemeriksaan tiap rules
            if($rules === 'required'){
                $lolos = lolosRequired($request[$input]);
                // penerapan nilai bool true : false 
                echo $lolos ? "Lolos" : "Tidak Lolos";
            }elseif($rules === 'email'){
                $lolos = lolosEmail($request['input']);
                echo $lolos ? "Lolos" : "Tidak Lolos";
            }elseif($rules === 'username'){
                $lolos = lolosUsername($request[$input]);
                echo $lolos ? "Lolos" : "Tidak Lolos";
            }elseif($rules === 'numeric'){
                $lolos = lolosNumeric($request[$input]);
                echo $lolos ? "Lolos" : "Tidak Lolos";
            }
            echo "<br>";
        }
        echo "<br>";
    } 
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