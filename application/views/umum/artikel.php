<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>LogisticKu</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.default.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.default.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/tab.css"); ?>" />

</head>

<body>
<!--header-->
	<header>
		<nav id="nav" class="navbar">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="/psi-scpk">
							<img class="logo" src="<?php echo base_url('assets/img/logofix.png') ?>" alt="logo">		
						</a>
					</div>
				</div>

				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="/psi-scpk">Beranda</a></li>
					<li><a href="#footer">Kontak</a></li>
				</ul>
			</div>
		</nav>
	</header>
<!--/header-->

	<!-- Blog -->
	<div id="blog" class="section md-padding">
		<div class="container">
			<?php foreach($informasi as $i){
					$gambar = $i['gambar'];?>
			<div class="row">
			<div class="title col-md-9"><h2><?php echo $i['judul']?></h2></div>	
			</div>

			<div class="row">
				<main id="main" class="col-md-7">					
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo base_url('assets/img/'.$gambar)?>" alt="">	
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-clock-o text-left"></i><?php echo $i['batas_pengumpulan']?></li>
								<li><i class="fa fa-map-marker text-left"></i><?php echo $i['lokasi']?></li>
							</ul>
							<h4>Jumlah Korban : <br><br>
								<?php foreach($korban as $k){
									echo "Selamat : " . $k['ks'] . "<br>";
									echo "Luka - Luka : " . $k['kl'] . "<br>";
									echo "Meninggal : " . $k['km'] . "<br>";
								}?>
								
							</h4>
							<p><?php echo $i['deskripsi']?></p>
						</div>
					</div>
					<?php }?>
				</main>
				<!-- /Main -->

				<!-- Aside -->
				<aside id="aside" class="col-md-5">
					<!-- Dana -->
					<div class="widget">
						<h3 class="title">Silahkan Berikan Bantuan Anda</h3>
						<button class="main-btn" data-toggle="modal" data-target="#donasiModal">Donasi Sekarang</button>
					</div>
					<!-- /Dana -->					
				</aside>
			</div>
		</div>
	</div>
	<!-- /Blog -->

	<!-- Kontak -->
	<footer id="footer" class="sm-padding bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-logo">
						<a href="/psi-scpk"><img src="<?php echo base_url('assets/img/logofix.png') ?>" alt="logo"></a>
					</div>
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<div class="footer-copyright">
						<p>Copyright © 2018. All Rights Reserved. Designed by LogisticKu</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /kontak -->

	<!-- The Modal -->
  <div class="modal fade" id="donasiModal">
    <div class="modal-dialog modal-dialog-centered" style="width:90%">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-center">Selamat Datang!</h3>
          <p class="modal-title text-center">Silahkan isi form ini agar anda dapat memberi donasi</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        	<div class="stepwizard">
        	<div class="setup-panel">
            <div class="stepwizard-step col-xs-12"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle" style="background-color: #D26A29; border-color: #D26A29">1</a>
                <p><small>Identitas Diri</small></p>
            </div>
        	</div>
    	</div>

    	<?php
    	foreach ($informasi as $i) {
    		$id_bencana = $i['id_bencana'];
    	}
    	?>

    	<form class="form" role="form" action="<?php echo base_url('UserC/input_dataD/'.$id_bencana)?>" method="POST"> 
	        <div class="panel panel-primary setup-content" id="step-1" style="border-color: #D26A29">
	            <div class="panel-heading" style="background-color: #D26A29; border-color: #D26A29; color: white;">
	                 <h3 class="panel-title text-center">Identitas Diri</h3>
	            </div>
	            <div class="panel-body">
	               	<p style="font-size: 20px;"></p>
	                <div class="form-group">
	                	<label class="control-label">Silahkan isi identitas anda agar dapat memberi donasi</label>
	                </div>
	                <div class="form-group">
						<span class="required" style="color: red;"><strong>* Required</strong></span> 
	                </div>
	                <div class="form-group">
	                    <label for="nama" class="col-sm-3 control-label">
						<span class="required">*</span> Nama :</label> 
						<div class="col-sm-8"> 
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda" required>
						</div> 
	                </div>
	                 <div class="form-group">   
	                    <label for="email" class="col-sm-3 control-label">
						<span class="required">*</span> Email: </label> 
						<div class="col-sm-8"> 
							<input type="email" class="form-control" id="email" name="email" placeholder="email@domain.com" required> 
						</div> 
	                </div>
	                <div class="form-group">   
	                    <label for="no_hp" class="col-sm-3 control-label">
						<span class="required">*</span> Nomor Telepon: </label> 
						<div class="col-sm-8"> 
							<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx" required> 
						</div> 
	                </div>
	                 <div class="form-group">   
	                 	<div class="col-sm-12">
	                 		<input type="checkbox" class="control-label" id="verifikasi" name="verifikasi" value="1" required> 
	                 		<span class="required" style="color: red;"><strong>** Donasi yang anda berikan berupa uang akan diubah menjadi barang</strong></span>
	                 	</div>
	                </div>
	                <button class="main-btn nextBtn pull-right" type="submit">Next</button>
	                <button type="button" class="white-btn pull-right" data-dismiss="modal">Close</button>
	            </div>
	        </div>
    	</form>
        </div>
    </div>
	</div>
</div>

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/owl.carousel.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.magnific-popup.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/main.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/tab.js"); ?>"></script>

</body>

</html>