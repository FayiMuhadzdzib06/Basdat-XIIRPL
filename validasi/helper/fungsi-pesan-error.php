<?php 

    $listPesanError = [
        'required' => function($field){
            return "Field ($field) harus di isi";
            // pesan error jika tidak di isi
        },
        'email' => function($field){
            return "Field ($field) harus berupa emali yang valid";
            // pesan error jika isinya belum ada @
        },
        'username' => function($field){
            return "Field ($field) harus hanya boleh angka, huruf & underscore";
            // pesan error jika isinya regex
        },
        'numeric' => function($field){
            return "Field ($field) harus berupa angka";
            // pesan error jika isinya bukan angka
        }
    ]

?>