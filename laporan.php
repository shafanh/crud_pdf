<?php
include "fpdf.php";

$pdf = new FPDF('p','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',14);

$titleX = ($pdf->GetPageWidth() - $pdf->GetStringWidth('PT. ANAK JAYA BAPAK SEJAHTERA')) / 2;

$pdf->Cell(0,7,'PT. ANAK JAYA BAPAK SEJAHTERA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,7,'DAFTAR PEGAWAI',0,1,'C');

$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'ID',1,0,'C');
$pdf->Cell(30,6,'FOTO',1,0,'C');
$pdf->Cell(40,6,'NAMA PEGAWAI',1,0,'C');
$pdf->Cell(32,6,'JENIS KELAMIN',1,0,'C');
$pdf->Cell(28,6,'NO. TELP',1,0,'C');
$pdf->Cell(40,6,'ALAMAT',1,1,'C');
 
$pdf->SetFont('Arial','',10);

$mysqli = new mysqli("localhost","root","","mynotescode");
$no = 1;
$tampil = mysqli_query($mysqli, "select * from pegawai");
while ($hasil = mysqli_fetch_array($tampil)){
    $pdf->Cell(20,30,$hasil['nis'],1,0,'C');
    $pdf->Cell(30,30,$pdf->Image('images/'.$hasil['foto'], $pdf->GetX(), $pdf->GetY(), 30),1,0,'C');
    $pdf->Cell(40,30,$hasil['nama'],1,0,'C');
    $pdf->Cell(32,30,$hasil['jenis_kelamin'],1,0,'C');
    $pdf->Cell(28,30,$hasil['telp'],1,0,'C');
    $pdf->Cell(40,30,$hasil['alamat'],1,1,'C');  
}
 
$pdf->Output();


?>
