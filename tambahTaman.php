<?php
	require_once("util.php");
	if(!isset($_POST['nama'])){
		header('Location:daftarTaman.php');
	}
	else{
		$nama = $_POST['nama'];
		if(tambahDatabaseTaman($nama)){
			header('Location:daftarTaman.php');
			die();		
		}
		else{
			echo "Sistem tidak dapat menerima taman baru untuk saat ini";
		}
	}
?>