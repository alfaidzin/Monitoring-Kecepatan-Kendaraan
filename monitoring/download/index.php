<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'LAPORAN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'MONITORING KECEPATAN KENDARAAN',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'id_riwayat',1,0);

$pdf->Cell(20,6,'id_lokasi',1,0);

$pdf->Cell(30,6,'id_kendaraan',1,0);
$pdf->Cell(40,6,'kecepatan',1,0);
$pdf->Cell(30,6,'kategori',1,0);
$pdf->Cell(50,6,'waktu',1,1);

$pdf->SetFont('Arial','',10);

include '../koneksi.php';
$kecepatan = mysqli_query($koneksi, "select * from riwayat");
while ($row = mysqli_fetch_array($kecepatan)){
    $pdf->Cell(20,6,$row['id_riwayat'],1,0);

    $pdf->Cell(20,6,$row['id_lokasi'],1,0);

    $pdf->Cell(30,6,$row['id_kendaraan'],1,0);
    $pdf->Cell(40,6,$row['kecepatan'],1,0);
    $pdf->Cell(30,6,$row['kategori'],1,0);
    $pdf->Cell(50,6,$row['waktu'],1,1); 
}

$pdf->Output();
?>