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
    <title>Ela - Bootstrap Admin Dashboard Template</title>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Bantuan Masuk</h4>
                                <div class="table-responsive m-t-20">
                                    <table id="example23" class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Donatur</th>
                                                <th>Bencana</th>
                                                <th>Jenis Bantuan</th>
                                                <th>Jumlah</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 0;
                                            foreach($bantuan as $b){
                                                $no++;?>
                                                <tr>
                                                    <td><?php echo $no?></td>
                                                    <td><?php echo $b['nama']?></td>
                                                    <td><?php echo $b['judul']?></td>
                                                    <td><?php echo $b['nama_bantuan']?></td>
                                                    <td><?php echo $b['jumlah']?></td>
                                                    <td><a href="/psi-scpk/bantuan/verifikasi/<?php echo $b['id_bantuan']?>"><button class="btn btn-sm btn-info">Verifikasi Bantuan</button></a></td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
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
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/dashboard/js/custom.min.js')?>"></script>


    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/datatables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/datatables/datatables-init.js')?>"></script>
</body>

</html>