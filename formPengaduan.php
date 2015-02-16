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

    <title>Form Pengaduan</title>
</head>

<body class="metro" background-color="green">	
    <div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="homeUser.html" class="element"><span class="icon-home"></span><b> Home</b></a>
		<a href="listPengaduanPublik.html" class="element"><span class="icon-list"></span><b> Daftar Pengaduan</b></a>
    </div>
	</div>
<div class="">
  <div style="background: url(images/bg.jpg); background-size: cover; ">
	<div class="span4 place-left bg-darkBlue padding20 text-center">
		<h1 class="fg-white"><br>Form Pengaduan
		</h1>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
  <div class="container" style="padding: 25px 10px">	
	  <div class="row">
		  <div class="offset5">
			<form method="post" action="terimaPengaduan.php" onSubmit="return Validation()" enctype="multipart/form-data">
				<label><b>Judul</b></label>
				<div class="span6 input-control text info-state">
					<input type="text" placeholder="judul" id="Judul" name='judul'/>
				</div>
				<label><b>Nama Pengadu</b></label>
				<div class="span6 input-control text info-state">
					<input type="text" placeholder="nama pengadu" id="Pengadu" name='nama'/>
				</div>
				<label><b>Nomor Telepon</b></label>
				<div class="span6 input-control text info-state">
					<input type="number" placeholder="nomor telepon" id="Telepon" name='no_telp'/>
				</div>
				<label><b>Taman</b></label>
				<div class="span6 input-control select info-state">
					<select name='tid'>
						<option selected>-pilih taman-</option>
						<?php
							require_once('util.php');
							$result = bacaDatabaseTaman();
							while($row = mysql_fetch_assoc($result)){
								$id = $row['id'];
								$nama = $row['nama'];
								echo "<option value='$id'> $nama </option>";
							}
						?>
					</select>
				</div>
				<label><b>Upload Foto</b></label>
				<input type="file" id="Foto" name='imgSrc'/>
			    <br><br>
				<label><b>Isi Pengaduan</b></label>
				<div class="span6 input-control textarea info-state">
					<textarea placeholder="isi pengaduan" id="Pengaduan" name='isi'></textarea>
				</div>
				
				<br>
				<button type="submit" class="bg-darkBlue fg-white large" id="kirimButton">Kirim</button>
				<script src="js/validasi.js"/>
			</form>
		  </div>
	  </div>
	</div>
   </div>
 </div>
    <script src="js/hitua.js"></script>

</body>
</html>