<?php 
    // Sambungkan ke fpdf library
    require '../library/fpdf.php';
    include '../koneksi.php';

    // instansiasi objek dan memberikan pengaturan halaman PDF
    $pdf = new FPDF('p', 'mm', 'A4');
    $pdf -> AddPage();

    // Buat judulnya di sini 
    $pdf -> SetFont('Times', 'B', 13);
    $pdf -> Cell(200, 10, 'DATA BUKU', 0, 0, 'C');
    
    // Buat Pengaturan tabel HEAD
    $pdf -> Cell(10, 15, '', 0, 1);
    $pdf -> SetFont('Times', 'B', 9);
    $pdf -> Cell(10, 7, 'NO', 1, 0, 'C');
    $pdf -> Cell(50, 7, 'JUDUL', 1, 0, 'C');
    $pdf -> Cell(75, 7, 'PENGARANG', 1, 0, 'C');
    $pdf -> Cell(55, 7, 'TAHUN TERBIT', 1, 0, 'C');
    
    // Buat Pengaturan tabel ISI
    $pdf -> Cell(10, 7, '', 0, 1);
    $pdf -> SetFont('Times', '', 10);
    $no = 1;
    $data  = mysqli_query($koneksi, "Select * from buku");
    while($duar = mysqli_fetch_array($data)){
        $pdf -> Cell(10, 7, $no++, 1, 0, 'C');
        $pdf -> Cell(50, 7, $duar['judul_buku'], 1, 0, 'C');
        $pdf -> Cell(75, 7, $duar['pengarang'], 1, 0, 'C');
        $pdf -> Cell(55, 7, $duar['thn_terbit'], 1, 1, 'C');
        
    }

    $pdf -> Output();



?>