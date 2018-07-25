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


	<!-- The Modal -->
        <h3 class="modal-title text-center">Silahkan isi form ini agar anda dapat memberi donasi</h3>
        <div class="modal-body">
        	<div class="stepwizard">
        	<div class="setup-panel">
            <div class="stepwizard-step col-xs-12"> 
                <a href="#step-4" type="button" class="btn btn-success btn-circle" style="background-color: #D26A29; border-color: #D26A29; color: white;">3</a>
                <p><small>Ringkasan Donasi</small></p>
            </div>
        	</div>
    	</div>

         <div class="panel panel-primary setup-content" id="step-4" style="border-color: #D26A29">
            <div class="panel-heading" style="background-color: #D26A29; border-color: #D26A29; color: white;">
                 <h3 class="panel-title">Ringkasan Donasi</h3>
            </div>
            <?php 
				foreach($donatur as $d){ 
			?>
            <div class="panel-body">
            	<div class="form-group">                	
                    <label class="control-label col-md-3">Nama Anda</label>
                    <label class="control-label col-md-9">: <?php echo $d->nama;?> </label>                
                </div>
                <div class="form-group">                	
                    <label class="control-label col-md-3">Nomor Telepon</label>
                    <label class="control-label col-md-9">: <?php echo $d->no_hp;?> </label>                
                </div>
                <div class="form-group">                	
                    <label class="control-label col-md-3">Email Anda</label>
                    <label class="control-label col-md-9">: <?php echo $d->email;?> </label>                
                </div>
                <?php } ?>
                <?php 
					foreach($bantuan as $b){ 
				?>
                <div class="form-group">                	
                    <label class="control-label col-md-3">Jenis Donasi</label>
                    <label class="control-label col-md-9">: <?php echo $b->nama_bantuan;?> </label>                
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jumlah Donasi</label>
                    <label class="control-label col-md-9">: <?php echo $b->jumlah?> </label>                
                </div>
                <?php if($b->nama_bantuan != "dana"){?>
                <div class="form-group">
                    <label class="control-label col-md-3">Alamat Pengiriman barang</label>
                    <label class="control-label col-md-9">: Jalan Kaliurang Km. 14,5, Yogyakarta, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584 </label>     
                </div>
            	<?php }else{?>
                <div class="form-group">
                    <label class="control-label col-md-3">Kode Payment</label>
                    <label class="control-label col-md-9">: <?php echo $b->kode?> </label>                
                </div>
            	<?php }?>
                <div class="form-group col-md-12">
                    <p>*Pastikan anda transfer sebelum 1X24 jam atau donasi anda otomatis dibatalkan oleh sistem</p>           
                </div>
                <?php } ?>
                <a href="/psi-scpk"><button class="main-btn pull-right">Selesai</button></a>                
            </div>            
        </div>
    </div>

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
	<script type="text/javascript" src="<?php echo base_url("assets/js/tab.js"); ?>"></script>

</body>

</html>