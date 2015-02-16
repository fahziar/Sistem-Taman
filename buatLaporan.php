<?php
require('lib/mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Laporan Pengaduan Taman',0,1,'C');
	$this->SetFont('Arial','',12);
	$this->Cell(0,12,'Diupdate tanggal '.date("d-m-Y"),0,2,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('localhost','root','root');
mysql_select_db('sistem-pengaduan');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('SELECT taman.id AS `No.`, taman.nama AS `Nama Taman` ,COUNT(dd.status) AS `Sudah Diproses`,COUNT(ff.status) AS `Sedang diproses`,COUNT(ee.status) AS `Belum diproses` FROM taman LEFT JOIN (SELECT * FROM pengaduan WHERE status="Sudah ditangani") AS `dd` ON taman.id = dd.tid LEFT JOIN (SELECT * FROM pengaduan WHERE status="Belum ditangani") AS `ee` ON taman.id = ee.tid LEFT JOIN (SELECT * FROM pengaduan WHERE status="Sedang diproses") AS `ff` ON taman.id = ff.tid GROUP BY taman.id');

$downloadfilename = "Laporan_Pengaduan";
$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");
?>
