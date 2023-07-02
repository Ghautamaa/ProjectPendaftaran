<?php
// memanggil library FPDF
require '../../../../backend/fpdf.php';
include '../../../../backend/connection.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13,);

$pdf->Cell(280,10,'DATA AKUN',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',11);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(115,7,'nama' ,1,0,'C');
$pdf->Cell(115,7,'email',1,0,'C');
$pdf->Cell(40,7,'level',1,0,'C');

 
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($db, "SELECT * FROM tb_user where id != 1");
while ($d = mysqli_fetch_array($data)){
  $pdf->Cell(10, 6, $no++, 1, 0, 'C');
  $pdf->Cell(115, 6, $d['nama'], 1, 0, 'C');
  $pdf->Cell(115, 6, $d['email'], 1, 0, 'C');
  $pdf->Cell(40, 6, $d['level'], 1, 1, 'C');  
}
 
$pdf->Output();
 
?>