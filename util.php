<?php
	require_once("config.php");
	//require_once 'swiftmailer-master/lib/swift_required.php';

	function verifikasiPassword( $real){
		$password = "kamilRidwanWalkot";
		if($password===$real){
			setcookie("preman-login",1);
			header('Location:listPengaduanAdmin.php');
			die();
		}
		else{
			header('Location:homeAdmin.php?error=1');
			die();
		}
		
		return;
	}
	
	function terimaPengaduan($judul,  $nama_pelapor,  $telepon_pelapor,$tid, $isi, $link_foto){
		connectDatabase();
		$query = "INSERT INTO `pengaduan` (`judul`,`nama_pelapor`,`telepon_pelapor`,`tanggal`,`tid`,`isi`,`link_foto`) VALUES('$judul','$nama_pelapor','$telepon_pelapor',CURDATE(),$tid,'$isi','$link_foto');";
		$result = mysql_query($query);
		return $result;
	}
	
	function uploadPengaduan(){
		$i=0;
		$allowed =  array('gif','png' ,'jpg');
		$filename = $_FILES['imgSrc']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) {
		    return in_array($ext,$allowed);
		}
		while(file_exists("images/$i-{$_FILES['imgSrc']["name"]}")){
			$i++;
		}
		move_uploaded_file ($_FILES['imgSrc'] ['tmp_name'],
   		"images/$i-{$_FILES['imgSrc'] ['name']}");
		$imgSrc = "images/$i-{$_FILES['imgSrc'] ['name']}";
		return $imgSrc;
	}
	
	function kirimEmail( $nama_pelapor, $msg){
		$subject="[PREMAN] Aduan dari ".$nama_pelapor;
		$to = "muzavan@gmail.com";
		$headers = "From: fahziar@gmail.com\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$msg = $isi;
		
		mail($to,$subject,$msg,$headers);
	}
	
	function cekIsLogin(){

		if (isset($_COOKIE["preman-login"]))
		{
			return $_COOKIE['preman-login'] == 1;	
		}

		return false;
	}

	function connectDatabase(){
		global $db_host, $db_username, $db_password, $db_name;
		mysql_connect($db_host, $db_username, $db_password);
		mysql_select_db($db_name);
	}

	function tambahDatabaseTaman( $nama_taman){
		connectDatabase();
		$query = "INSERT INTO `taman`(`nama`) VALUES('".$nama_taman."');";
		$result = mysql_query($query);		
		return $result;
	}

	function hapusDatabaseTaman( $id){
		connectDatabase();
		$query = "DELETE FROM `taman` WHERE `taman`.`id`=".$id.";";
		$result = mysql_query($query);		
		echo $result;
		return $result;
	}

	function bacaDatabaseTaman(){
		connectDatabase();
		$query = "SELECT * FROM `taman`";
		$result = mysql_query($query);		
		return $result;
	}

	function logout(){
		setcookie('preman-login', null, -1);
	}


?>