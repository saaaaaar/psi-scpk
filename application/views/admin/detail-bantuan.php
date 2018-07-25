<?php $akses = $this->session->userdata('akses');?>

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
                    <?php
                    foreach($detailposko as $dp){
                        $id_bencana = $dp['id_bencana'];
                    }?>
                    <a href="/psi-scpk/informasi/detail/<?php echo $id_bencana?>"><button class="btn btn-success btn pull-right">Kembali</button></a>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Column Barang Bantuan-->
                    <div class="col-lg-6">
                        <!-- Start Page Content -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Barang Bantuan Terverifikasi <span class="badge badge-info">Terverifikasi</span></h4>
                                        <div class="table-responsive m-t-20">
                                            <table id="example23" class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Bantuan</th>
                                                        <th>Jumlah</th>
                                                        <th>Detail Donatur</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 0;
                                                    foreach($detailposko as $dp){
                                                        if($dp['status_penerimaan'] == TRUE){
                                                        $no++;
                                                            ?>
                                                        <tr>
                                                            <td><?php echo $no?></td>
                                                            <td><?php echo $dp['nama_bantuan']?></td>
                                                            <td><?php echo $dp['jumlah']?></td>
                                                            <td><?php echo $dp['nama']?></td>
                                                        </tr>
                                                    <?php }
                                                    }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End PAge Content -->
                    </div>
                    <!-- Column Barang Bantuan-->
                    <!-- Column Uang Bantuan-->
                    <div class="col-lg-6">
                        <!-- Start Page Content -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Barang Bantuan Belum Terverifikasi <span class="badge badge-danger">Belum Terverifikasi</span></h4>
                                        <div class="table-responsive m-t-20">
                                            <table id="example23" class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Bantuan</th>
                                                        <th>Jumlah</th>
                                                        <th>Detail Donatur</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 0;
                                                    foreach($detailposko as $dp){
                                                        if($dp['status_penerimaan'] == FALSE){
                                                        $no++;
                                                            ?>
                                                        <tr>
                                                            <td><?php echo $no?></td>
                                                            <td><?php echo $dp['nama_bantuan']?></td>
                                                            <td><?php echo $dp['jumlah']?></td>
                                                            <td><?php echo $dp['nama']?></td>
                                                        </tr>
                                                    <?php }
                                                    }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End PAge Content -->
                    </div>
                    <!-- Column Uang Bantuan-->
                </div>
                <!-- End Page Content -->
            </div>
            <!-- End Container fluid  -->

            <!-- footer -->
            <footer class="footer" style=""> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
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
    <script src="<?php echo base_url('assets/dashboard/js/lib/jquery.nicescroll/jquery.nicescroll.min.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/jquery.slimscroll.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/dashboard/js/sidebarmenu.js')?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/custom.min.js')?>"></script>
    <script>
        $(function(){
            $("html").niceScroll({
                cursorcolor:"#16385d",
                cursorwidth:"5px",
                background:"#fff",
                cursorborder:"1px solid #5c4ac7",
                cursorborderradius:0
                });  // a world f
        });
    </script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/sweetalert/sweetalert.min.js')?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url('assets/dashboard/js/lib/sweetalert/sweetalert.init.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/chart-js/Chart.bundle.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/chart-js/chartjs-init.js')?>"></script>
</body>

</html>