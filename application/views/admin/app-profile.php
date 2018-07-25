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
    <script src="<?php echo base_url('assets/dashboard/js/lib/chart-js/Chart.bundle.js')?>"></script>
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
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <img src="/psi-scpk/assets/img/avatar/7.jpg" alt="Allison Walker" />
                                        </div>
                                    </header>

                                    <h3>Selamat Datang, <?php echo $this->session->userdata('nama');?></h3>
                                    <div class="desc">
                                        <?php echo $this->session->userdata('jabatan'). " ";
                                              echo "<p><label>NIP :  ". $this->session->userdata('identitas'). "</label></p>";
                                              if($akses == 2){
                                                echo "Kode Posko <h1>" . $this->session->userdata('posko') . "</h1><br>"; 
                                              }

                                              if($this->session->userdata('status_bantuan') == TRUE || $this->session->userdata('status_bantuan') == 1){
                                                echo "<a href='/psi-scpk/pengguna/updatepetugas/". $this->session->userdata('id'). "'><button class='btn btn-flat btn-primary'>Selesai Bertugas</button></a>";
                                              }elseif($akses == 2){
                                                echo "<button class='btn btn-flat btn-primary' data-toggle='modal' data-target='#bantuan'>Verifikasi Bantuan</button>";
                                              }
                                        ?>                                        
                                    </div>
                                    <div class="contacts">
                                    <?php if($akses == 0){?>
                                        <a href="/psi-scpk/informasi/tampil"><i class="fa fa-info"></i>Info Bencana</a>
                                        <a href="#"><i class="fa fa-plus"></i>Tambah Pos Posko</a>
                                        <a href="/psi-scpk/pengguna"><i class="fa fa-user"></i>Petugas</a>
                                    <?php }if($akses == 1){?>
                                        <a href="/psi-scpk/logsinti/pindah/admin/form-info"><i class="fa fa-plus"></i>Tambah Info Bencana</a>
                                        <a href="/psi-scpk/logsinti/pindah/admin/form-petugas"><i class="fa fa-plus"></i>Tambah Petugas</a>
                                        <a href="/psi-scpk/informasi/tampil"><i class="fa fa-info"></i>Info Bencana</a>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <?php if($akses == 2){?>
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Data Pengungsi Posko </h4>
                                    <?php foreach($chart as $k){
                                            if($k['selamat'] == NULL){?>
                                                <button class="btn btn-info btn-flat pull-right" data-toggle="modal" data-target="#tambahdata">Tambah Data Korban</button>
                                            <?php }else{?>
                                                <button class="btn btn-info btn-flat pull-right" data-toggle="modal" data-target="#editdata">Edit Korban</button>
                                        <?php }
                                    }?>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="panel">
                                            <div class="panel-body">
                                                <canvas id="doughutChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="table-responsive m-t-20">
                                            <table id="example23" class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kondisi Korban</th>
                                                        <th>Jumlah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    foreach($chart as $k){?>
                                                    <tr>
                                                        <td><?php echo "1"?></td>
                                                        <td><?php echo "Selamat"?></td>
                                                        <td><?php echo $k['selamat']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo "2"?></td>
                                                        <td><?php echo "Luka-Luka"?></td>
                                                        <td><?php echo $k['luka']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo "3"?></td>
                                                        <td><?php echo "Meninggal"?></td>
                                                        <td><?php echo $k['meninggal']?></td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                <?php }?>
                </div>
                <!-- End Page Content -->
            </div>
            <!-- End Container fluid  -->

            <!-- Detail Donatur Modal[uang] -->
            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="tambahdata">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                        <form action="/psi-scpk/posko/updateposko/<?php echo $this->session->userdata('bencana')?>" novalidate="novalidate" method="POST">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <h5>Tambah Data Korban</h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Selamat</label>
                                            <div class="col-sm-9">
                                                <input type="hidden" class="form-control" name="petugas" id="petugas" value="<?php echo $this->session->userdata('id')?>">
                                                <input type="hidden" class="form-control" name="kode" id="kode" value="<?php echo $this->session->userdata('posko')?>">
                                                <input type="text" class="form-control" name="selamat" id="selamat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Luka - Luka</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="luka" id="luka">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Meninggal</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="meninggal" id="meninggal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Donatur Modal -->

            <!-- Detail Donatur Modal[uang] -->
            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="editdata">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                        <form action="/psi-scpk/posko/tambahkrban/<?php echo $this->session->userdata('posko')?>" novalidate="novalidate" method="POST">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <h5>Tambah Data Korban</h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Selamat</label>
                                            <div class="col-sm-9">
                                                <input type="radio" name="kondisi" value="Selamat"> Selamat <br>
                                                <input type="radio" name="kondisi" value="Luka-Luka"> Luka - Luka <br>
                                                <input type="radio" name="kondisi" value="Meninggal"> Meninggal
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Jumlah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="jumlah" id="jumlah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn-flat">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Donatur Modal -->

            <!-- Detail Donatur Modal[uang] -->
            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="bantuan">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                        <form action="/psi-scpk/posko/updatebantuan/<?php echo $this->session->userdata('posko')?>" novalidate="novalidate" method="POST">
                            <div class="modal-body">
                                <div class="">
                                    <div class="form-group">
                                        <div class="row">
                                            <h1 align="center">Apakah Bantuan Telah Diterima?</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn-md">Ya</button>
                                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Belum</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Donatur Modal -->


            <!-- footer -->
            <footer class="footer" style=""> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url('assets/dashboard/js/lib/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/form-validation/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/form-validation/jquery.validate.unobtrusive.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/jquery.nicescroll/jquery.nicescroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/jquery.slimscroll.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/sidebarmenu.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
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
    <script>
        //doughut chart
        var ctx = document.getElementById( "doughutChart" );
        ctx.height = 150;
        var myChart = new Chart( ctx, {
            type: 'doughnut',
            data: {
                datasets: [ {
                    data: [ <?php 
                            foreach ($chart as $c) {
                                echo $c['luka'] .",". $c['meninggal'] .",".$c['selamat'];
                            }
                        ?> ],
                    backgroundColor: [
                                        "rgba(0, 123, 255,0.9)",
                                        "rgba(0, 123, 255,0.5)",
                                        "rgba(0,0,0,0.07)"
                                    ],
                    hoverBackgroundColor: [
                                        "rgba(0, 123, 255,0.9)",
                                        "rgba(0, 123, 255,0.5)",
                                        "rgba(0,0,0,0.07)"
                                    ]

                                } ],
                labels: [
                                "Luka-Luka",
                                "Meninggal",
                                "Selamat",
                            ]
            },
            options: {
                responsive: true
            }
        } );
    </script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/sweetalert/sweetalert.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/sweetalert/sweetalert.init.js')?>"></script>
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