<?php
	function verifikasiPassword(string $password, string $real){
		if($password===$real){
			setcookie("preman-login",1);
			header('Location:lihatpengaduan.php');
			die();
		}
		else{
			header('Location:loginadmin.php?error=1');
			die();
		}
		
		return;
	}
	
	function terimaPengaduan(int $id, string $nama_pelapor, string $telepon_pelapor,int $tid, string $isi, string $link_foto){
		connectDatabase();
		$query = "INSERT INTO `pengaduan` (`id`,`nama_pelapor`,`telepon_pelapor`,`tid`,`isi`,`link_foto`) VALUES($id,'$nama_pelapor',$telepon_pelapor,$tid,'$isi','$link_foto');";
		$result = mysql_query($query);
		return $result;
	}
	
	function uploadPengaduan(){
		$i=0;
		while(file_exists("images/$i-{$_FILES['imgSrc']["name"]}")){
			$i++;
		}
		move_uploaded_file ($_FILES['imgSrc'] ['tmp_name'],
   		"images/$i-{$_FILES['imgSrc'] ['name']}");
		$imgSrc = "images/$i-{$_FILES['imgSrc'] ['name']}";
		return $imgSrc;
	}
	
	function kirimEmail(string $nama_pelapor,string $msg){
		$subject="[PREMAN] Laporan dari ".$nama_pelapor;
		$to = "muzavan@gmail.com";
		$headers = "From: pengunjung@preman.com\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$msg = $isi;
		
		mail($to,$subject,$msg,$headers);
	}
	
	function cekIsLogin(){
		return isset($_COOKIES['preman-login']);
	}

	function connectDatabase(){
		mysql_connect('localhost','root','');
		mysql_select_db('sistem-preman');
	}

	function tambahDatabaseTaman(string $nama_taman){
		connectDatabase();
		$query = "INSERT INTO `taman`(`nama`) VALUES('$nama_taman');";
		$result = mysql_query($query);		
		return $result;
	}

?>