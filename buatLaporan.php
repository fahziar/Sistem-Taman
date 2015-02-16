<?php
require('lib/mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Laporan Pengaduan Taman',0,1,'C');
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
$pdf->Table('SELECT taman.id, taman.nama ,COUNT(dd.status) AS `Sudah Diproses`,COUNT(ff.status) AS `Sedang diproses`,COUNT(ee.status) AS `Belum diproses` FROM taman LEFT JOIN (SELECT * FROM pengaduan WHERE status="Sudah ditangani") AS `dd` ON taman.id = dd.tid LEFT JOIN (SELECT * FROM pengaduan WHERE status="Belum ditangani") AS `ee` ON taman.id = ee.tid LEFT JOIN (SELECT * FROM pengaduan WHERE status="Sedang diproses") AS `ff` ON taman.id = ff.tid GROUP BY taman.id');
/* $pdf->AddPage();
//Second table: specify 3 columns
$pdf->AddCol('No',40,'','C');
$pdf->AddCol('Nama Taman',40,'sistem-pengaduan','C');
$pdf->AddCol('extension',40,'','C');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select firstName,  extension, employeeNumber from employees order by employeeNumber limit 0,10',$prop);
*/
//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F'); 

$downloadfilename = "Laporan_".date("d-m-Y");
$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");
?>
