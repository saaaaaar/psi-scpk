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
    <title>Rincian Informasi</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/dashboard/css/lib/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dashboard/css/lib/sweetalert/sweetalert.css')?>" rel="stylesheet">
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
            <?php foreach($info as $i){?>
            <div class="row page-titles">
                <ul class="navbar-nav mr-auto mt-md-0">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-info"><?php echo $i['judul']?></h3>
                    </div>
                </ul>
                <ul class="navbar-nav my-md-0">
                    <li class="nav-item">
                        <div class="sweetalert">
                            <a href="/psi-scpk/informasi/tampil"><button class="btn btn-success btn">Kembali</button></a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Chart Data Posko dan Bencana -->
                <div class="row">
                    <!-- Bar Chart -->
                    <div class="col-sm-12 col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Data Korban Bencana</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-5">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Total Pengungsi</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="doughutChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Column Chart-->
                    <div class="col-lg-12">
                        <div class="card bg-dark">
                            <div class="card-body">
                                <div class="card-two" align="center">
                                    <header><h4 style="color: white;">Deskripsi</h4><hr style="background-color: white;"></header>
                                    <!-- <div class="row">
                                        <div class="col-lg-6">
                                            <img class="img-responsive" src="/psi-scpk/assets/img/<?php //echo $i['gambar']?>">
                                        </div>
                                        <div class="col-lg-6"> -->
                                            <h5 style="color: white;"><?php echo $i['deskripsi']?></h5>
                                      <!--   </div>
                                    </div> -->
                                    <div class="sweetalert" hidden="">
                                        <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                        <button class="btn btn-info btn sweet-message">Sweet Message</button>
                                        <button class="btn btn-primary btn sweet-text">Sweet Text</button>
                                        <button class="btn btn-success btn sweet-success">Sweet Success</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column Chart-->
                    <!-- Column Posko-->
                    <div class="col-lg-12">
                        <!-- Start Page Content -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <header class="card-title">
                                            <h4 >Data Posko Pengungsian</h4>
                                            <button class="pull-right btn btn-primary" data-toggle="modal" data-target="#tambahposko">Tambah Pos Posko</button>
                                        </header>
                                        <div class="table-responsive m-t-15">
                                            <table id="example23" class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Kode Posko</th>
                                                        <th>Komponen Pengungsi</th>
                                                        <th>Jumlah Pengungsi</th>
                                                        <th>Penanggung Jawab</th>
                                                        <th>Status Bantuan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $no = 0;
                                                    foreach($posko as $p){
                                                        $no++;?>
                                                        <tr>
                                                            <td><?php echo $no?></td>
                                                            <td><?php echo $p['kode']?></td>
                                                            <td>
                                                                <span class="badge badge-danger"><?php echo $p['meninggal']?></span>
                                                                <span class="badge badge-warning"><?php echo $p['luka']?></span>
                                                                <span class="badge badge-info"><?php echo $p['selamat']?></span>
                                                            </td>
                                                            <td>
                                                                <?php 
                                                                if($p['selamat'] == NULL){
                                                                    echo "0";
                                                                }else{
                                                                    echo $p['selamat']+$p['luka']+$p['meninggal'];
                                                                }?>
                                                                    
                                                                </td>
                                                            <td>
                                                                <?php 
                                                                if($p['nama'] == NULL){ echo "<button class='btn btn-danger btn-flat btn-sm'>Belum Ada</button>";
                                                                }else{ echo $p['nama'];}?>

                                                            </td>
                                                            <td>
                                                                <?php if($p['status_bantuan'] == TRUE || $p['status_bantuan'] == 1){?>
                                                                    <span class="badge badge-success">Diterima</span>
                                                                <?php }else{?>
                                                                    <span class="badge badge-warning">Belum Diterima</span>
                                                                <?php }?>
                                                            </td>
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
                    <!-- Column Posko-->
                    <!-- Column Barang Bantuan-->
                    <div class="col-lg-4">
                        <!-- Start Page Content -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Total Barang Bantuan Masuk</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="bantuanChart"></canvas>
                                    </div>
                                </div>
                        <!-- End PAge Content -->
                    </div>
                    <!-- Column Barang Bantuan-->
                    <!-- Column Uang Bantuan-->
                    <div class="col-lg-8">
                        <!-- Start Page Content -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-title">
                                        <h4 class="card-title">Barang Bantuan Masuk</h4>
                                        <a href="/psi-scpk/bantuan/detail/<?php echo $i['id_bencana']?>"><button class="btn btn-secondary btn pull-right">Rincian</button></a>
                                        <h5><?php 
                                            foreach ($bantuan as $b) {
                                                if($b['nama_bantuan'] == "dana"){ ?>
                                                    <span class="btn btn-flat btn-info">Uang Terkumpul : Rp <?php echo $b['jumlah']?></span>
                                                <?php }
                                            }
                                        ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive m-t-20">
                                            <table id="example23" class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Bantuan</th>
                                                        <th>Jumlah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 0; 
                                                    foreach($bantuan as $b){
                                                        $no++;
                                                        if($b['nama_bantuan'] != "dana"){?>
                                                            <tr>
                                                                <td><?php echo $no?></td>
                                                                <td><?php echo $b['nama_bantuan']?></td>
                                                                <td><?php echo $b['jumlah']?></td>
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
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <?php }?>

            <!-- Detail Donatur Modal[uang] -->
            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="financial">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                        <form action="javascript:;" novalidate="novalidate">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <h5>Detail Donatur <small style="color: red"> Status : Belum terkonfirmasi</small></h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">No HP</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Kode</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Jumlah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Donatur Modal -->
            <!-- Detail Donatur Modal[barang] -->
            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="barang">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                        <form action="javascript:;" novalidate="novalidate">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <h5>Detail Donatur <small style="color: red"> Status : Belum terkonfirmasi</small></h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">No HP</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Jenis Barang</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Jumlah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Donatur Modal -->

            <!-- Tambah Pos Posko -->
            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="tambahposko">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="/psi-scpk/posko/tambah/<?php echo $i['id_bencana']?>" novalidate="novalidate" method="POST">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <h5>Tambah Pos Posko Baru</h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Kode Posko</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="kode_posko" id="kode_posko">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Petugas Bertugas</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="petugas" id="petugas">
                                                    <option>--Petugas Tidak Bertugas--</option>
                                                    <?php foreach($petugas as $pg){?>
                                                        <option value="<?php echo $pg['id']?>"><?php echo $pg['nama']?></option>
                                                    <?php }
                                                        if($pg['id'] == NULL && $pg['nama'] == NULL){
                                                            echo "<option>Tidak Ada Petugas</option>";
                                                        }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Tambah</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Posko Modal -->

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
    <script src="<?php echo base_url('assets/dashboard/js/lib/form-validation/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/form-validation/jquery.validate.unobtrusive.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/jquery.nicescroll/jquery.nicescroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/jquery.slimscroll.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/sidebarmenu.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/lib/sweetalert/sweetalert.min.js')?>"></script>
    <!-- <script src="<?php echo base_url('assets/dashboard/js/lib/sweetalert/sweetalert.init.js')?>"></script> -->
    <script src="<?php echo base_url('assets/dashboard/js/custom.min.js')?>"></script>
    <script>
    //bar chart
    var ctx = document.getElementById( "barChart" );
    //    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ <?php
                    foreach ($barchart as $bc) {
                        echo "'".$bc['kode']."',";
                    }
                ?>
            ],
            datasets: [
                {
                    label: "Luka - Luka",
                    data: [<?php
                            foreach ($barchart as $c) {
                                echo $c['luka'].",";
                            }
                        ?>],
                    borderColor: "rgb(255, 211, 20)",
                    borderWidth: "0",
                    backgroundColor: "rgb(255, 211, 20)"
                            },
                {
                    label: "Meninggal",
                    data: [ <?php
                            foreach ($barchart as $c) {
                                echo $c['meninggal'].",";
                            }
                        ?>],
                    borderColor: "rgb(229, 39, 39)",
                    borderWidth: "0",
                    backgroundColor: "rgb(229, 39, 39)"
                            },
                {
                    label: "Selamat",
                    data: [ <?php
                            foreach ($barchart as $c) {
                                echo $c['selamat'].",";
                            }
                        ?>],
                    borderColor: "rgb(33, 118, 255)",
                    borderWidth: "0",
                    backgroundColor: "rgb(33, 118, 255)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    //bantuan chart
    var ctx = document.getElementById( "doughutChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'doughnut',
        data: {
            datasets: [ {
                data: [ <?php
                        foreach ($doughutchart as $cp) {
                            echo $cp['km'].",".$cp['kl'].",".$cp['ks'];
                        }?>  ],
                backgroundColor: [
                    "rgb(229, 39, 39)",
                    "rgb(255, 211, 20)",
                    "rgb(33, 118, 255)"
                ],
                hoverBackgroundColor: [
                    "rgb(229, 39, 39)",
                    "rgb(255, 211, 20)",
                    "rgb(33, 118, 255)"
                ]

            } ],
            labels: [
                "Meninggal",
                "Luka-Luka",
                "Selamat",
            ]
        },
        options: {
            responsive: true
        }
    } );

    //doughut chart
    var ctx = document.getElementById( "bantuanChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?php
                        foreach ($bantuan as $b) {
                            if($b['nama_bantuan'] != "dana"){
                                echo $b['jumlah'].",";
                            }
                        }?>  ],
                backgroundColor: [
                    "rgb(255, 66, 66)",
                    "rgb(33, 118, 255)",
                    "rgb(255, 211, 20)",
                    "rgb(109, 255, 107)",
                    "rgb(94, 230, 255)"
                ],
                hoverBackgroundColor: [
                    "rgb(255, 66, 66)",
                    "rgb(33, 118, 255)",
                    "rgb(255, 211, 20)",
                    "rgb(109, 255, 107)",
                    "rgb(94, 230, 255)"
                ]

            } ],
            labels: [
                <?php
                    foreach ($bantuan as $b) {
                        if($b['nama_bantuan'] != "dana"){
                            echo "'".$b['nama_bantuan']."',";
                        }
                    }?>
            ]
        },
        options: {
            responsive: true
        }
    } );

    </script>
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