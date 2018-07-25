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
<!--home-->
	<header id="home">

		<div class="bg-img" style="background-image: url('assets/img/11.jpg');">
			<div class="overlay"></div>
		</div>

		<nav id="nav" class="navbar nav-transparent">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="/psi-scpk">
							<img class="logo" src="assets/img/logofix.png" alt="logo">
							<img class="logo-alt" src="assets/img/logo_png3.png" alt="logo">
						</a>
					</div>
					<div class="nav-collapse">
						<span></span>
					</div>
				</div>

				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Beranda</a></li>
					<li><a href="#blog">Donasi</a></li>
					<li><a href="#laporan">Laporan</a></li>
					<li><a href="#features">Fitur</a></li>
					<li><a href="#team">Tim</a></li>
					<li><a href="#footer">Kontak</a></li>
				</ul>
			</div>
		</nav>

		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Logistic-Ku</h1>
							<p class="white-text">Berilah bantuan anda kepada korban bencana</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<!--/home-->

<!--bencana-->
<div id="blog" class="section md-padding" style=" background-color: #f7f7f7;">
	<div class="container">
		<div class="row text-center">
			<div class="section-header">
				<h2 class="title" style="color: black;">Bencana yang baru terjadi</h2>
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
		<div class="row text-center">
			<a href="<?php echo base_url('LogsInti/bencana');?>"><button class="main-btn">Lihat Semua</button></a>
		</div>
		</div>
	</div>
</div>

<!--Laporan-->
<div id="laporan" class="section md-padding">
	<div class="container">
		<div class="row text-center">
		<div class="section-header">
				<h2 class="title">Bencana yang telah dibantu</h2>
				<?php foreach($informasis as $in) { ?>
				<div class="col-md-3">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="<?php echo base_url('assets/img/'.$in->gambar)?>" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<h3><?php echo $in->judul ?></h3>
								<li><i class="fa fa-clock-o text-left"></i><?php echo $in->batas_pengumpulan ?></li>
								<br>
								<li><i class="fa fa-map-marker text-left"></i><?php echo $in->lokasi ?></li>
							</ul>
							<a href="/psi-scpk/LogsInti/artikel/<?php echo $in->id_bencana;?>">Selebihnya</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		</div>
		<div class="row text-center">
			<a href="<?php echo base_url('LogsInti/bencana2');?>"><button class="main-btn">Lihat Semua</button></a>
		</div>
	</div>
</div>

<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Kenapa memberi bantuan lewat LogisticKu?</h2>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p><strong>Mudah dan Cepat, </strong>dengan memberi bantuan secara online</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p><strong>Tepat dan Akurat, </strong>karna data diisi sendiri oleh relawan</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p><strong>Modern, </strong>karna menggunakan teknologi informasi</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p><strong>Fleksibel, </strong>karna dapat melakukan bantuan dimana pun</p>
					</div>
				</div>
				<!-- /why choose us content -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->

	<!--tim-->
	<div id="team" class="section bg-grey md-padding" style="background-color: #fff;">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">Tim Kami</h2>
				</div>
				<div class="col-md-3">
				<div class="testimonial">
					<div class="testimonial-meta">
						<img src="assets/img/sari.jpg" alt="">
						<h3 class="black-text">Sari Kurnia</h3>
						<span>Programmer</span>
					</div>
				</div>
				</div>
				<div class="col-md-3">
				<div class="testimonial">
					<div class="testimonial-meta">
						<img src="assets/img/dewi.jpg" alt="">
						<h3 class="black-text">Puspita Dewi</h3>
						<span>Website Designer</span>
					</div>
				</div>
				</div>
				<div class="col-md-3">
				<div class="testimonial">
					<div class="testimonial-meta">
						<img src="assets/img/poppy.jpg" alt="">
						<h3 class="black-text">Annisa Rositasari</h3>
						<span>System Analysis</span>
					</div>
				</div>
				</div>
				<div class="col-md-3">
				<div class="testimonial">
					<div class="testimonial-meta">
						<img src="assets/img/cipa.jpg" alt="">
						<h3 class="black-text">ST Musdalifah</h3>
						<span>Designer</span>
					</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>

	

<!-- Kontak -->
	<footer id="footer" class="sm-padding" style="border-top: 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-logo">
						<a href="/psi-scpk"><img src="assets/img/logofix.png" alt="logo"></a>
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
