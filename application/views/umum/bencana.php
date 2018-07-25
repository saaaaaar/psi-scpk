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

	<!-- Bencana -->
	<div id="bencana" class="section md-padding">
	<div class="bg-img">
			<div class="overlay"></div>
		</div>
		<div class="container">
			<div class="row">
			<div class="title col-md-9"><h3 style="color: white;">Pilih bencana yang ingin anda bantu</h3></div>				
				<aside id="aside" class="col-md-3">
					<!-- Search -->
					<div class="widget">
						<div class="widget-search">
							<form action="<?php echo site_url('LogsInti/search');?>" method = "post">
							<input class="search-input" type="text" name = "keyword" placeholder="Cari" />
							<button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
						</form>
						</div>
					</div>
					<!-- /Search -->
				</aside>
				</div>

			<div class="row">
			<div class="section-header text-center">
				<div class="blog">
				<?php foreach($informasi as $info) { ?>
				<div class="col-md-3">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo base_url('assets/img/'.$info->gambar)?>" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<h3><?php echo $info->judul ?></h3>
								<li><i class="fa fa-clock-o text-left"></i><?php echo $info->batas_pengumpulan ?></li>
								<br>
								<li><i class="fa fa-map-marker text-left"></i><?php echo $info->lokasi ?></li>
							</ul>
							<a href="<?php echo site_url('LogsInti/artikel/'.$info->id_bencana); ?>">Selebihnya</a>
						</div>
					</div>
				</div>
			<?php } ?>
				</div>
			</div>
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

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/owl.carousel.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.magnific-popup.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/main.js"); ?>"></script>

</body>

</html>
