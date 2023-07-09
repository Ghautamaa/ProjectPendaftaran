<?php
// memanggil library FPDF
require '../../../backend/fpdf.php';
include '../../../backend/connection.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13,);

$pdf->Cell(300,10,'DATA PESERTA LOMBA MLBB',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',12);

$pdf->Cell(12.5,7.5,'No',1,0,'C');
$pdf->Cell(35,7.5,'Tim' ,1,0,'C');
$pdf->Cell(32.5,7.5,'Ketua',1,0,'C');
$pdf->Cell(32.5,7.5,'Anggota 1',1,0,'C');
$pdf->Cell(32.5,7.5,'Anggota 2',1,0,'C');
$pdf->Cell(32.5,7.5,'Anggota 3',1,0,'C');
$pdf->Cell(32.5,7.5,'Anggota 4',1,0,'C');
$pdf->Cell(32.5,7.5,'Cadangan',1,0,'C');
$pdf->Cell(35,7.5,'Telepon',1,1,'C');
 
$pdf->SetFont('Times', '', 12);

$sql = "SELECT * FROM tb_mlbb";
$query = mysqli_query($db, $sql);
$no = 1;
while ($peserta = mysqli_fetch_array($query)) {
  $pdf->Cell(12.5, 7.5, $no++, 1, 0, 'C');
  $pdf->Cell(35, 7.5, $peserta['tim'], 1, 0, 'C');
  $pdf->Cell(32.5, 7.5, $peserta['ketua'], 1, 0, 'C');
  $pdf->Cell(32.5, 7.5, $peserta['anggota1'], 1, 0, 'C');
  $pdf->Cell(32.5, 7.5, $peserta['anggota2'], 1, 0, 'C');
  $pdf->Cell(32.5, 7.5, $peserta['anggota3'], 1, 0, 'C');
  $pdf->Cell(32.5, 7.5, $peserta['anggota4'], 1, 0, 'C');
  $pdf->Cell(32.5, 7.5, $peserta['cadangan'], 1, 0, 'C');
  $pdf->Cell(35, 7.5, $peserta['telp'], 1, 1, 'C');
}
 
$pdf->Output();
 
?>