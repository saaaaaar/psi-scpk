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
            <div class="row">
            <div class="title col-md-9"><h2>Judul Artikel</h2></div>      
            </div>

            <div class="row">
                <main id="main" class="col-md-7">
                    <div class="blog">
                        <div class="blog-img">
                            <img class="img-responsive" src="<?php echo base_url('assets/img/blog-post.jpg') ?>" alt="">    
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fa fa-clock-o"></i>Batas Pengumpulan Bantuan</li>
                                <li><i class="fa fa-map-marker"></i>Lokasi Bencana</li>
                            </ul>
                            <h3>Tingkat Bencana:</h3>
                            <div class="progress">
                            <div class="progress-bar" style="background-color: #D26A29; width:20%">20%</div>
                            </div>
                            <h4>Jumlah Korban :</h4>
                            <p>Deskripsi Artikel</p>
                        </div>
                    </div>
                </main>
                <!-- /Main -->

                <!-- Aside -->
                <aside id="aside" class="col-md-5">
                    <!-- Dana -->
                    <div class="widget">
                        <h3 class="title">Donasi terkumpul</h3>
                        <div class="widget-category">
                            <p>Nominal Dana Terkumpul</p>
                            <p>Jumlah Barang terkumpul</p>
                        </div>
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
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle" style="background-color: #D26A29; border-color: #D26A29">1</a>
                <p><small>Identitas Diri</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: #D26A29; border-color: #D26A29; color: white;">2</a>
                <p><small>Pilih Donasi</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-31" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: #D26A29; border-color: #D26A29; color: white;">3</a>
                <p><small>Detail Donasi</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: #D26A29; border-color: #D26A29; color: white;">4</a>
                <p><small>Ringkasan Donasi</small></p>
            </div>
            </div>
        </div>

        <form class="form" role="form" method="post" action=""> 
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
                    <label for="nama_donatur" class="col-sm-3 control-label">
                    <span class="required">*</span> Nama :</label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" id="nama_donatur" name="nama_donatur" placeholder="Masukkan nama anda" required>
                    </div> 
                </div>
                 <div class="form-group">   
                    <label for="email_donatur" class="col-sm-3 control-label">
                    <span class="required">*</span> Email: </label> 
                    <div class="col-sm-8"> 
                        <input type="email" class="form-control" id="email_donatur" name="email_donatur" placeholder="email@domain.com" required> 
                    </div> 
                </div>
                <div class="form-group">   
                    <label for="nohp_donatur" class="col-sm-3 control-label">
                    <span class="required">*</span> Nomor Telepon: </label> 
                    <div class="col-sm-8"> 
                        <input type="text" class="form-control" id="nohp_donatur" name="nohp_donatur" placeholder="08xxxxxxxxxx" required> 
                    </div> 
                </div>
                <button class="main-btn nextBtn pull-right" type="button">Next</button>
                <button type="button" class="white-btn pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
        
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
                        <input type="text" class="form-control" id="jumlah_bantuan" name="jumlah_bantuan" placeholder="Masukkan jumlah bantuan" required> 
                    </div> 
                </div>
                <button class="main-btn nextBtn pull-right" type="button">Next</button>
                <button type="button" class="white-btn pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-31" style="border-color: #D26A29">
            <div class="panel-heading" style="background-color: #D26A29; border-color: #D26A29; color: white;">
                 <h3 class="panel-title text-center">Detail Donasi</h3>
            </div>
           <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Metode Pembayaran</label>
                    <select class="form-control">
                        <option selected disabled>Pilih Metode Pembayaran</option>
                        <option value="Transfer BCA">Transfer BCA</option>
                        <option value="Transfer Mandiri">Transfer Mandiri</option>
                        <option value="Transfer BNI">Transfer BNI</option>
                        <option value="Transfer BRI">Transfer BRI</option>
                    </select>                    
                </div>
                <button class="main-btn nextBtn pull-right" type="button">Next</button>
                <button type="button" class="white-btn pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-3" style="border-color: #D26A29">
            <div class="panel-heading" style="background-color: #D26A29; border-color: #D26A29; color: white;">
                 <h3 class="panel-title text-center">Detail Donasi</h3>
            </div>
           <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Lokasi Pemberian Donasi</label>
                                    
                </div>
                <button class="main-btn nextBtn pull-right" type="button">Next</button>
                <button type="button" class="white-btn pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-4" style="border-color: #D26A29">
            <div class="panel-heading" style="background-color: #D26A29; border-color: #D26A29; color: white;">
                 <h3 class="panel-title">Ringkasan Donasi</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Donasi</label>
                    <label class="control-label col-md-9">: Dana</label>                
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jumlah Donasi</label>
                    <label class="control-label col-md-9">: Rp. 120.000</label>                
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Metode Pembayaran</label>
                    <label class="control-label col-md-9">: Transfer Mandiri</label>                
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Kode Payment</label>
                    <label class="control-label col-md-9">: 827162514291027 </label>                
                </div>
                <div class="form-group col-md-12">
                    <p>*Pastikan anda transfer sebelum 1X24 jam atau donasi anda otomatis dibatalkan oleh sistem</p>           
                </div>
                <button class="main-btn pull-right">Selesai</button>
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