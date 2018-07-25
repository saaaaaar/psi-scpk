<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/logoo.png')?>">
    <title>Sistem Logistik Bantuan</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/dashboard/css/lib/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/dashboard/css/helper.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dashboard/css/style.css')?>" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <?php
            include 'navigation.php';
        ?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <?php foreach($info as $i){?>
                                    <form class="form-valide" action="/psi-scpk/informasi/update/<?php echo $i['id_bencana']?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-number">Foto<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="val-number" name="val-number" accept="image/*">
                                                <img src="<?php echo base_url('assets/img/'.$i['gambar'])?>" style="width: 90%; height: 90%;">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Judul<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" value="<?php echo $i['judul']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Jenis Bencana<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-select2" name="val-select2">
                                                    <option value="">Jenis bencana</option>
                                                    <option <?php if($i['jenis_bencana'] == "Banjir"){ echo "selected";}?> value="Banjir">Banjir</option>
                                                    <option <?php if($i['jenis_bencana'] == "Tanah Longsor"){ echo "selected";}?> value="Tanah Longsor">Tanah Longsor</option>
                                                    <option <?php if($i['jenis_bencana'] == "Gempa Bumi"){ echo "selected";}?> value="Gempa Bumi">Gempa Bumi</option>
                                                    <option <?php if($i['jenis_bencana'] == "Gunung Meletus"){ echo "selected";}?> value="Gunung Meletus">Gunung Meletus</option>
                                                    <option <?php if($i['jenis_bencana'] == "Tsunami"){ echo "selected";}?> value="Tsunami">Tsunami</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Deskripsi<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea placeholder="Deskripsi singkat" rows="10" style="width: 260px; padding: 8px 15px;" id="val-suggestions" name="val-suggestions" required=""><?php echo $i['deskripsi']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Lokasi</label>
                                            <div class="col-lg-6">
                                                <input type="text" id="val-digits" name="val-digits" class="form-control" value="<?php echo $i['lokasi']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label">Batas Waktu<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="val-website" name="val-website" value="<?php echo $i['batas_pengumpulan']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-md btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url('assets/dashboard/js/lib/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/lib/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/jquery.slimscroll.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/dashboard/js/sidebarmenu.js')?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
    <!-- Form validation -->
    <script src="<?php echo base_url('assets/dashboard/js/lib/form-validation/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/form-validation/jquery.validate-init.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/custom.min.js')?>"></script>

</body>

</html>