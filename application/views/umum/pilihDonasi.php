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
                <a href="#step-2" type="button" class="btn btn-success btn-circle" style="background-color: #D26A29; border-color: #D26A29; color: white;">2</a>
                <p><small>Pilih Donasi</small></p>
            </div>
        	</div>
    	</div>
    	<form class="form" role="form" action="<?php echo base_url('UserC/input_dataB/'.$id_bencana)?>" method="POST"> 
         <div class="panel panel-primary setup-content" id="step-2" style="border-color: #D26A29">
            <div class="panel-heading" style="background-color: #D26A29; border-color: #D26A29; color: white;">
                 <h3 class="panel-title text-center">Jenis Donasi</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Pilihlah jenis donasi yang ingin anda donasikan</label>
                    <select name="nama_bantuan" class="form-control" id="JenisDonasi" onchange="configureDropDownLists(this,'donasi');">
                        <option selected disabled>Pilih Jenis Donasi</option>
                        <option value="barang">Barang</option>
                        <option value="dana">Dana</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Donasi :</label>
                    <select name="nama_bantuan" class="form-control" id="donasi">
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jumlah Bantuan :</label>
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah bantuan" required> 
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <input type="hidden" name="kode" value="<?php echo rand(00000000,999999999)?>">
                    </div> 
                </div>  
                <button class="main-btn nextBtn pull-right" type="submit">Next</button>
            </div>
        </div>
    </form>
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

<script type="text/javascript">


function configureDropDownLists(JenisDonasi,donasi) {
        var barang = new Array('Baju', 'Selimut', 'Celana', 'Rok');

        switch (JenisDonasi.value) {
                 case 'barang':
                       document.getElementById(donasi).options.length = 0;
                       for (i = 0; i < barang.length; i++) {
                       createOption(document.getElementById(donasi), barang[i], barang[i]);
                }
                break;
            case 'dana':
                document.getElementById(donasi).options.length = 0; 
            for (i = 0; i < dana.length; i++) {
                createOption(document.getElementById(donasi), dana[i], dana[i]);
                }
                break;
        }

    }

 function createOption(JenisDonasi, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        JenisDonasi.options.add(opt);
    }
</script>