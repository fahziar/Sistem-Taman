<?php
	require_once("util.php");

	if (!CekIsLogin())
	{
		header("Location:homeAdmin.php");
		
	} else {
		require_once("config.php");

	$connection = new mysqli($db_host, $db_username, $db_password, $db_name);
	$showPage = true;
	if (isset($_POST['cmd']))
	{
		if($_POST['cmd'] == 1)
		{
			$stmt = $connection->prepare("DELETE FROM `pengaduan` WHERE `id`=?");
			$stmt->bind_param("i", $_POST['id']);
			$stmt->execute();
			$showPage = false;
		} else if($_POST['cmd'] == 2)
		{
			$stmt = $connection->prepare("UPDATE `pengaduan` SET `status`=? WHERE `id`=?");
			$stmt->bind_param("si", $_POST['status'], $_POST['id']);
			$stmt->execute();
		}
	} 
	if ($showPage) {
	    if(!isset($_GET['search'])){
		   $result = $connection->query("SELECT pengaduan.id, pengaduan.nama_pelapor, pengaduan.telepon_pelapor, pengaduan.judul, pengaduan.tanggal, pengaduan.isi,pengaduan.status, pengaduan.link_foto, taman.nama FROM pengaduan,taman where pengaduan.tid = taman.id ORDER BY pengaduan.id DESC");
	    }
	    else{
	        $search = $_GET['search'];
	        $result = $connection->query("SELECT pengaduan.id, pengaduan.nama_pelapor, pengaduan.judul, pengaduan.tanggal, pengaduan.isi,pengaduan.status, pengaduan.telepon_pelapor, pengaduan.link_foto, taman.nama FROM pengaduan,taman where pengaduan.tid = taman.id and (pengaduan.nama_pelapor like '%$search%' or taman.nama like '%$search%' or pengaduan.isi like '%$search%') ORDER BY pengaduan.id DESC"); 
	    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>

    <script type="text/javascript">

    	function refresh()
    	{
    		location.reload();
    	}

    	function hapusPengaduan(id)
    	{
    		if(confirm("Anda yakin akan menghapus pengaduan ini?")){
	    		var xmlHtppObj = new XMLHttpRequest();
	    		xmlHtppObj.open("POST", "listPengaduanAdmin.php", true);
	    		xmlHtppObj.onreadystatechange = function()
				{
					if ((xmlHtppObj.status == 200) && (xmlHtppObj.readyState == 4))
					{
						location.reload();
					}
				
				}

				xmlHtppObj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
				xmlHtppObj.send("id=" + id + "&cmd=1");
			}
    	}

    	function ubahStatus(id, status)
    	{var xmlHtppObj = new XMLHttpRequest();
    		xmlHtppObj.open("POST", "listPengaduanAdmin.php", true);
    		xmlHtppObj.onreadystatechange = function()
			{
				if ((xmlHtppObj.status == 200) && (xmlHtppObj.readyState == 4))
				{
					location.reload();
				}
			
			}

			xmlHtppObj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xmlHtppObj.send("id=" + id + "&cmd=2&status=" + status);

    	}
  	
    </script>
    <title>Daftar Pengaduan</title>
</head>

<body class="metro" background-color="green">	
    <div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="homeAdmin.php" class="element"><span class="icon-home"></span><b> Home</b></a>
		<a href="listPengaduanAdmin.php" class="element"><span class="icon-list"></span><b> Daftar Pengaduan</b></a>
		<a href="buatLaporan.php" class="element"><span class="icon-file-pdf"></span><b> Laporan</b></a>
		<a href="daftarTaman.php" class="element"><span class="icon-list"></span><b> Daftar Taman</b></a>


		<div class="element" style="padding:15px 10px">
					<form action='listPengaduanAdmin.php' method='get'>
						<div class="input-control text size4">
							<input type="text" name="search" placeholder="Search">


							<button class="btn-search"></button>
						</div>
					</form>
		</div>
		<a href="logout.php" class="element place-right"><span class="icon-exit"></span><b> Logout</b></a>

    </div>
	</div>
	
<div class="">
       <div class="container" style="padding: 20px 10px">	
	  <div class="row">
		<div class="panel-content fg-dark nlp nrp">
			<?php
			while ($row = $result->fetch_array())
			{
			?>
			<div class="bg-darkBlue">
				<img src="<?php echo $row['link_foto'];?>" class="place-left margin20 nlm ntm size4" style="height: 200px">
				<h2 class="fg-white" style="padding: 10px 10px"><?php echo $row["judul"];?></h2>
				<p class="fg-yellow" style="font-size: 16px"><?php echo $row["nama"];?> | <?php echo $row["tanggal"];?> | <?php echo $row["status"];?></p>
				<p class="fg-yellow" style="font-size: 14px">Pelapor : <?php echo $row["nama_pelapor"];?> | Kontak : <?php echo $row["telepon_pelapor"];?></p>
				<p class="fg-white"><?php echo $row["isi"];?></p>
				
				<form method="post" action="listPengaduanAdmin.php" style="padding-bottom:10px">
					<input type="hidden" name="cmd" value="2"/>
					<input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
                     <div class="input-control radio default-style margin10 fg-white" data-role="input-control">
                         <label>
                         <input type="radio" name="status" value="Belum ditangani" checked />
                         <span class="check"></span>
                                                 Belum ditangani
                         </label>
                     </div>
                     <div class="input-control radio default-style margin10 fg-white" data-role="input-control">
                         <label>
                         <input type="radio" name="status" value="Sedang diproses"/>
                         <span class="check"></span>
                                                  Sedang diproses
                         </label>
                     </div>
                                         <div class="input-control radio default-style margin10 fg-white" data-role="input-control">
                         <label>
                         <input type="radio" name="status" value="Sudah ditangani"/>
                         <span class="check"></span>
                                                 Sudah ditangani
                         </label>
                     </div>
                                <button type="submit" class="bg-black fg-white medium" id="kirimButton"> Ubah Status</button>
                                <span class="fg-white" style="padding-left: 20px; padding-right:20px">||</span>
                                <a href="javascript:hapusPengaduan(<?php echo $row['id'];?>);" class="fg-white" ><span class="icon-remove fg-white"></span></a>
                        </form>
			</div><br>
			<?php
				}
                if($result->num_rows == 0){
                	$key = $_GET['search'];
                    echo "<p> Pencarian untuk '$key' tidak ditemukan</p>";
                }
			?>
	    </div>
        </div>
	  </div>
	</div>
</div>	
    
<script src="js/hitua.js"></script>

</body>
</html>

<?php
	}
	}
?>
