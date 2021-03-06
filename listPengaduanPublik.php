<?php
	require_once("config.php");
	$connection = new mysqli($db_host, $db_username, $db_password, $db_name);
    if(!isset($_GET['search'])){
           $result = $connection->query("SELECT pengaduan.id, pengaduan.nama_pelapor, pengaduan.judul, pengaduan.tanggal, pengaduan.isi,pengaduan.status, pengaduan.link_foto, taman.nama FROM pengaduan,taman where pengaduan.tid = taman.id ORDER BY pengaduan.id DESC");
        }
        else{
            $search = $_GET['search'];
            $result = $connection->query("SELECT pengaduan.id, pengaduan.nama_pelapor, pengaduan.judul, pengaduan.tanggal, pengaduan.isi,pengaduan.status, pengaduan.link_foto, taman.nama FROM pengaduan,taman where pengaduan.tid = taman.id and (pengaduan.nama_pelapor like '%$search%' or taman.nama like '%$search%' or pengaduan.isi like '%$search%') ORDER BY pengaduan.id DESC"); 
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

    <title>Daftar Pengaduan</title>
</head>

<body class="metro" background-color="green">	
    <div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="homeUser.html" class="element"><span class="icon-home"></span><b> Home</b></a>
		<a href="listPengaduanPublik.php" class="element"><span class="icon-list"></span><b> Daftar Pengaduan</b></a>
        <div class="element" style="padding:15px 10px">
                    <form action='listPengaduanPublik.php' method='get'>
                        <div class="input-control text size4">
                            <input type="text" name="search" placeholder="Search">


                            <button class="btn-search"></button>
                        </div>
                    </form>
        </div>
    </div>
	</div>
	
 <div class="">
  <div style="background: #b8b9ba; background-size: cover;">
       <div class="container" style="padding: 20px 10px">	
	  <div class="row">
		<div class="panel-content fg-dark nlp nrp">
			<?php
				while ($row = $result->fetch_array())
				{
			?>
			<div class="bg-darkBlue" style="height: 200px">
				<img src="<?php echo $row['link_foto'];?>" class="place-left margin20 nlm ntm size4" style="height: 200px">
				<h2 class="fg-white" style="padding: 10px 10px"><?php echo $row['judul'];?></h2>
				<p class="fg-yellow" style="font-size: 20px"><?php echo $row['nama'];?> | <?php echo $row['tanggal'];?> | <?php echo $row['status'];?></p>
				<p class="fg-white"><?php echo $row['isi'];?></p>
			</div><br>
			<?php
                }
                if($result->num_rows == 0){
					if ( isset($_GET['search']) ){
						$key = $_GET['search'];
						echo "<p> Pencarian untuk '$key' tidak ditemukan</p>";
					}
					else{
						echo "<h3>Tidak ada yang dapat ditampilkan</h3>";
					}
                }
            ?>
	    </div>
        </div>
	  </div>
	</div>
   </div>
</div>	
    <script src="js/hitua.js"></script>

</body>
</html>