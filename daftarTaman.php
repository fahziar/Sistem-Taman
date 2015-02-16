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

    <title>Daftar Taman</title>
</head>

<body class="metro">	
    <div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="homeUser.html" class="element"><span class="icon-home"></span><b> Home</b></a>
		<a href="listPengaduanPublik.html" class="element"><span class="icon-list"></span><b> Daftar Pengaduan</b></a>
		<a href="#" class="element"><span class="icon-file-pdf"></span><b> Laporan</b></a>
		<a href="daftarTaman.php" class="element"><span class="icon-list"></span><b> Daftar Taman</b></a>
		<a href="#" class="element place-right"><span class="icon-exit"></span><b> Logout</b></a>
    </div>
	</div>
<div class="">
  <div style="background: url(images/bg.jpg); background-size: cover; height:620px ">
	<div class="span4 place-left bg-darkBlue padding20 text-center">
		<h1 class="fg-white"><br>Daftar Taman
		</h1>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
  <div class="container" style="padding: 30px 10px">	
	  <div class="row">
		  <div class="offset4">
                    <table class="table striped responsive">
                        <thead>
                        <tr class="bg-darkBlue fg-white">
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Taman</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
							<td class="text-center">1</td>
							<td class="text-center">Taman Jomblo</td>
							<td class="text-center">
								<a href="addTaman.html" class="fg-blue"><span class="icon-plus"></span>   |   </a>
								<a href="" class="fg-blue"><span class="icon-remove"></span>   |   </a>
								<a href="editTaman.html" class="fg-blue"><span class="icon-pencil"></span></a>
								
							</td>
						</tr>
						  <tr>
							<td class="text-center">2</td>
							<td class="text-center">Taman Jomblo</td>
							<td class="text-center">
								<a href="addTaman.html" class="fg-blue"><span class="icon-plus"></span>   |   </a>
								<a href="" class="fg-blue"><span class="icon-remove"></span>   |   </a>
								<a href="editTaman.html" class="fg-blue"><span class="icon-pencil"></span></a>
								
							</td>
						</tr>
                  
                        </tbody>

                        <tfoot></tfoot>
                    </table>
                </div>
		  </div>
	  </div>
	</div>
   </div>
 </div>
    <script src="js/hitua.js"></script>

</body>
</html>