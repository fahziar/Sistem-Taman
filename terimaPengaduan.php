<?php
	require_once('util.php');
	$judul = $_POST['judul'];
	$nama = $_POST['nama'];
	$telp = $_POST['no_telp'];
	$tid = (int)$_POST['tid'];
	$isi = $_POST['isi'];
	$link_foto = uploadPengaduan();
	if(terimaPengaduan($judul,$nama,$telp,$tid,$isi,$link_foto)){
		kirimEmail($nama,$isi);
		header('Location:listPengaduanAdmin.php');
		die();
	}
	else{
		echo "Something's wrong";
	}

?>