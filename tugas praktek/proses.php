<?php 
    $files = $_FILES;
    $folder_upload = "./assets/uploads";
    
    if(!is_dir($folder_upload)){
        mkdir($folder_upload, 0777, $rekursif = true);
    }
    
    $fileFoto = (object) @$_FILES['foto'];

    $uploadFotoSukses = move_uploaded_file(
        $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
    );
    
    // deklarasiin
    $nama = @$_POST['nama'];
    $jurusan = @$_POST['jurusan'];
    $namaAyah = @$_POST['namaAyah'];
    $namaIbu = @$_POST['namaIbu'];
    $alamat = @$_POST['alamat'];
    
    // outputnya
    if($uploadFotoSukses){
        $link = "{$folder_upload}/{$fileFoto->name}";
        echo "Foto : <a href='{$link}'>{$fileFoto->name}</a>";
        echo "<br>";
    }

    echo "{$nama} - {$jurusan}<br>";
    echo "Nama Ayah : {$namaAyah}<br>";
    echo "Nama Ibu : {$namaIbu}<br>";
    echo "Alamat : {$alamat}<br>";

?>