<?php
	require_once('util.php');
	if (isset($_POST['submit']) && isset($_POST['password']))
	{
		verifikasiPassword($_POST['password']);
	}

	if (isset($_GET['logout']))
	{
		logout();
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

    <title>Home Admin</title>
</head>

<body class="metro" background-color="green">	
    <div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="homeAdmin.html" class="element"><span class="icon-home"></span><b> Home</b></a>
    </div>
	</div>
 <div class="">
        <div style="background: url(images/bg.jpg); background-size: cover; ">
            <div class="container" style="padding: 30px 10px">
      <div class="grid">
        <div class="row"><br>
            <div class="span9">
                <div class="carousel" id="carousel1">
                    <div class="slide image-container">
                        <img src="images/musik.jpg" class="cover1" />
						 <div class="overlay">
							Mau Bandung yang asri dan indah ? <br>
							Yuk lebih peduli terhadap taman-taman di kota Bandung
						</div>
                    </div>
					
					<div class="slide image-container">
						<img src="images/jomblo4.jpg" class="cover1"/>
						<div class="overlay">
							Mau Bandung yang asri dan indah ? <br>
							Yuk lebih peduli terhadap taman-taman di kota Bandung
						</div>
					</div>
					
					<div class="slide image-container">
						<img src="images/lansia1.jpg" class="cover1"/>
						<div class="overlay">
							Mau Bandung yang asri dan indah ? <br>
							Yuk lebih peduli terhadap taman-taman di kota Bandung
						</div>
					</div>

					<div class="slide image-container">
						<img src="images/film.jpg" class="cover1"/>
						<div class="overlay">
							Mau Bandung yang asri dan indah ? <br>
							Yuk lebih peduli terhadap taman-taman di kota Bandung
						</div>
					</div>
					
					<div class="slide image-container">
						<img src="images/dago1.jpg" class="cover1"/>
						<div class="overlay">
							Mau Bandung yang asri dan indah ? <br>
							Yuk lebih peduli terhadap taman-taman di kota Bandung
						</div>
					</div>
					
					<div class="slide image-container">
						<img src="images/fotografi.jpg" class="cover1"/>
						<div class="overlay">
							Mau Bandung yang asri dan indah ? <br>
							Yuk lebih peduli terhadap taman-taman di kota Bandung
						</div>
					</div>
					<a class="controls left"><i class="icon-arrow-left-3"></i></a>
					<a class="controls right"><i class="icon-arrow-right-3"></i></a>
				</div>
					<script>
						$(function(){
						$("#carousel1").carousel({
						height: 470
						});
						})
					</script>
            </div>
			<div class="offset10">
			  <form method="post" action="homeAdmin.php">
				<div class="span4 input-control text info-state">
					<input name="password" type="password" placeholder="Password"/>
				</div>
				<br><br><br>
				<button name="submit" type="submit" class="bg-darkBlue fg-white large" id="loginButton">Login</button>
			  </form>
				<br><br>
				<div class="offset0">
					<div class="span4 place-left bg-darkBlue padding20 text-left">
					   <h3 class="fg-white">Selamat datang</h3><p class="fg-white">
					   di <sharp class="fg-yellow" style=" font-size:20px">Sistem Pengaduan Ruang Taman</sharp> Kota Bandung.
					   </p>
					  <br><br><br><br><br>
					   <div class="panel-content nlp nrp">
				     <div class="bg-darkBlue" style="height: 63px">
							<img src="images/logo.png" class="place-right margin1 nlm ntm" style="width: 55px; height: 50px;"/>
							<div class="icon-location fg-white" style="font-size: 14px"> Jl. Ambon No. 1 A Bandung</div>
							<div class="icon-phone fg-white" style="font-size: 14px"> 022-4231921</div>
							<div class="icon-mail fg-white" style="font-size: 14px"> distankam[at]bandung.go.id</div>
							
				      </div>
					</div>
					</div>
				</div>
			</div>
          </div>
        </div>
		<div class="offset0">
		Copyright © 2015<br>
         Dinas Pemakaman dan Pertamanan Kota Bandung</div>
    </div>
 </div>
</div>
	
    <script src="js/hitua.js"></script>

</body>
</html>