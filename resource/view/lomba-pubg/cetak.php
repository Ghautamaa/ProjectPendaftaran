<?php
// memanggil library FPDF
require '../../../backend/fpdf.php';
include '../../../backend/connection.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13,);

$pdf->Cell(300,10,'DATA PESERTA LOMBA PUBG-M',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',11);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(40,7,'Tim' ,1,0,'C');
$pdf->Cell(40,7,'Ketua',1,0,'C');
$pdf->Cell(40,7,'Anggota 1',1,0,'C');
$pdf->Cell(40,7,'Anggota 2',1,0,'C');
$pdf->Cell(40,7,'Anggota 3',1,0,'C');
$pdf->Cell(30,7,'Telepon',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($db, "	SELECT tb_peserta.*
							FROM tb_peserta 
							INNER JOIN tb_kategorilomba 
							ON tb_peserta.kategori_id = tb_kategorilomba.id
							WHERE tb_kategorilomba.id = 2");

while ($d = mysqli_fetch_array($data)) {
  $pdf->Cell(10, 6, $no++, 1, 0, 'C');
  $pdf->Cell(40, 6, $d['tim'], 1, 0, 'C');
  $pdf->Cell(40, 6, $d['ketua'], 1, 0, 'C');
  $pdf->Cell(40, 6, $d['anggota1'], 1, 0, 'C');
  $pdf->Cell(40, 6, $d['anggota2'], 1, 0, 'C');
  $pdf->Cell(40, 6, $d['anggota3'], 1, 0, 'C');
  $pdf->Cell(30, 6, $d['telp'], 1, 1, 'C');
}
 
$pdf->Output();
 
?>