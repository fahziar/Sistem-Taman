<?php
	require_once('util.php');
	$judul = $_POST['judul'];
	$nama = $_POST['nama'];
	$telp = $_POST['no_telp'];
	$tid = (int)$_POST['tid'];
	$isi = $_POST['isi'];
	$link_foto = uploadPengaduan();
	if(!$link_foto){
		header('Location:formPengaduan.php?upload=0');
		die();
	}
	if(terimaPengaduan($judul,$nama,$telp,$tid,$isi,$link_foto)){
		kirimEmail($nama,$isi);
		header('Location:listPengaduanPublik.php');
		die();
	}
	else{
		echo "Something's wrong";
	}

?>