<?php 
    // Sambungkan ke fpdf library
    require '../library/fpdf.php';
    include '../koneksi.php';

    // instansiasi objek dan memberikan pengaturan halaman PDF
    $pdf = new FPDF('p', 'mm', 'A4');
    $pdf -> AddPage();

    // Buat judulnya di sini 
    $pdf -> SetFont('Times', 'B', 13);
    $pdf -> Cell(200, 10, 'DATA ANGGOTA', 0, 0, 'C');
    
    // Buat Pengaturan tabel HEAD
    $pdf -> Cell(10, 15, '', 0, 1);
    $pdf -> SetFont('Times', 'B', 9);
    $pdf -> Cell(10, 7, 'NO', 1, 0, 'C');
    $pdf -> Cell(30, 7, 'RESI', 1, 0, 'C');
    $pdf -> Cell(50, 7, 'BARANG', 1, 0, 'C');
    $pdf -> Cell(45, 7, 'STATUS', 1, 0, 'C');
    
    // Buat Pengaturan tabel ISI
    $pdf -> Cell(10, 7, '', 0, 1);
    $pdf -> SetFont('Times', '', 10);
    $no = 1;
    $id = $_GET['id'];
    $data  = mysqli_query($koneksi, "Select * from orders where id='$id'");
    while($duar = mysqli_fetch_array($data)){
        $pdf -> Cell(10, 7, $no++, 1, 0, 'C');
        $pdf -> Cell(30, 7, $duar['id'], 1, 0, 'C');
        $pdf -> Cell(50, 7, $duar['nama'], 1, 0, 'C');
        $pdf -> Cell(45, 7, $duar['status'], 1, 1, 'C');
        
    }

    $pdf -> Output();



?>