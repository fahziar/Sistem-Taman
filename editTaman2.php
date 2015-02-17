<?php
	<?php
	require_once("util.php");

	if (!CekIsLogin())
	{
		header("Location:homeAdmin.php");
		die()
	}
	
	require_once("util.php");
	if(!isset($_POST['nama'])){
		header('Location:daftarTaman.php');
	}
	else{
		$nama = $_POST['nama'];
		$id = $_GET['id'];
		if(updateDatabaseTaman($id,$nama)){
			header('Location:daftarTaman.php');
			die();		
		}
		else{
			echo "Sistem tidak dapat menerima taman baru untuk saat ini";
		}
	}
?>