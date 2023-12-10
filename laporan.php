<?php
//menyertakan file fpdf, file fpdf.php di dalam folder FPDF yang diekstrak
include "fpdf.php";

//membuat objek baru bernama pdf dari class FPDF
//dan melakukan setting kertas l : landscape, A5 : ukuran kertas
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// menyetel font yang digunakan, font yang digunakan adalah arial, bold dengan ukuran 16
$pdf->SetFont('Arial','B',16);
// judul
$pdf->Cell(190,7,'PT. ANAK JAYA BAPAK SEJAHTERA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PEGAWAI',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'ID',1,0,'C');
$pdf->Cell(45,6,'NAMA PEGAWAI',1,0,'C');
$pdf->Cell(35,6,'JENIS KELAMIN',1,0,'C');
$pdf->Cell(35,6,'NO. TELP',1,0,'C');
$pdf->Cell(45,6,'ALAMAT',1,1,'C');
 
$pdf->SetFont('Arial','',10);
 
//koneksi ke database
$mysqli = new mysqli("localhost","root","","mynotescode");
$no = 1;
$tampil = mysqli_query($mysqli, "select * from pegawai");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(25,6,$hasil['nis'],1,0,'C');
    $pdf->Cell(45,6,$hasil['nama'],1,0);
    $pdf->Cell(35,6,$hasil['jenis_kelamin'],1,0);
    $pdf->Cell(35,6,$hasil['telp'],1,0);
    $pdf->Cell(45,6,$hasil['alamat'],1,1);  
}
 
$pdf->Output();


?>