<?php
	require_once("config.php");
	require_once("lib\swift_required.php");

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
	/*
	function kirimEmail( $nama_pelapor, $msg){
		$subject="[PREMAN] Aduan dari ".$nama_pelapor;
		$to = "muzavan@gmail.com";
		$headers = "From: fahziar@gmail.com\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$msg = $isi;
		
		mail($to,$subject,$msg,$headers);
	}
	*/
	
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

	function updateDatabaseTaman($id,$nama){
		connectDatabase();
		$query = "UPDATE `taman` SET `nama`='$nama' WHERE `id`=$id;";
		return mysql_query($query);
	}

	function kirimEmail($nama_pelapor,$msg){
		$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
		  ->setUsername('mendingngoding@gmail.com')
		  ->setPassword('mendingngodingaja')
		  ;

		/*
		You could alternatively use a different transport such as Sendmail or Mail:

		// Sendmail
		$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

		// Mail
		$transport = Swift_MailTransport::newInstance();
		*/

		// Create the Mailer using your created Transport
		$mailer = Swift_Mailer::newInstance($transport);

		$message = Swift_Message::newInstance()

	  // Give the message a subject
	  ->setSubject('[PREMAN] Laporan Terbaru dari '.$nama_pelapor)

	  // Set the From address with an associative array
	  ->setFrom(array('preman-diskamtam@bandungjuara.com' => 'Sistem Pengaduan Ruang Taman'))

	  // Set the To addresses with an associative array
	  ->setTo(array('muzavan@gmail.com', '13512042@std.stei.itb.ac.id' => 'Muhammad Reza Irvanda'))

	  // Give it a body
	  ->setBody($msg)
	  ;

 	$result = $mailer->send($message);
 	return $result;
	}


?>