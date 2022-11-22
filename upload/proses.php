<?php 
    $files = $_FILES;
    $folder_upload = "./assets/uploads";

    // periksa apakah folder sudah ada
    if(!is_dir($folder_upload)){
        // jika tidak ada maka folder harus dibuat terlebih dahulu
        mkdir($folder_upload, 0777, $rekursif = true);
    }

    // simpan masing masing file ke dalam variabel
    // simpan file ke dalam array dan ubah menjadi objek
    $fileFoto = (object) @$_FILES['foto'];

    // mulai upload file
    $uploadFotoSukses = move_uploaded_file(
        $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
    );

    
    // echo "<pre>";
    // print_r($files);
    // echo "</pre>";
?>