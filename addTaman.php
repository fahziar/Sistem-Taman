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

    <title>Tambah Taman</title>
</head>

<body class="metro">	
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
  <div style="background: url(images/bg.jpg); background-size: cover; height:620px ">
	<div class="span4 place-left bg-darkBlue padding20 text-center">
		<h1 class="fg-white"><br>Tambah Taman
		</h1>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
  <div class="container" style="padding: 30px 10px">	
	  <div class="row">
		  <div class="offset5">
			<form method="post" action="tambahTaman.php">
				<label><b>Nama Taman</b></label>
				<div class="span6 input-control text info-state">
					<input type="text" placeholder="nama taman" name="nama"/>
				</div>
				<br>
				<br>
				<button type="submit" class="bg-darkBlue fg-white large" id="kirimButton">Tambah</button>
			</form>
		  </div>
	  </div>
	</div>
   </div>
 </div>
    <script src="js/hitua.js"></script>

</body>
</html>