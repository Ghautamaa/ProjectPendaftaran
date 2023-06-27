<?php
// memanggil library FPDF
require '../../../backend/fpdf.php';
include '../../../backend/connection.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);

$pdf->Cell(200,10,'DATA KARYAWAN',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(50,7,'Tim' ,1,0,'C');
$pdf->Cell(75,7,'Ketua',1,0,'C');
$pdf->Cell(75,7,'Anggota1',1,0,'C');
$pdf->Cell(75,7,'Anggota2',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($db,"SELECT  * FROM tb_peserta");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(50,6, $d['tim'],1,0);
  $pdf->Cell(75,6, $d['ketua'],1,0);  
  $pdf->Cell(55,6, $d['anggota1'],1,1);
  $pdf->Cell(55,6, $d['anggota2'],1,1);
}
 
$pdf->Output();
 
?>