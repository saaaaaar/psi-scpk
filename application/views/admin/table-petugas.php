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
                    <h3 class="text-primary">Dashboard</h3>
                </div>
                <?php if($akses == 1){?>
                <div class="col-md-7 align-self-center">
                    <ul class="breadcrumb">
                        <li><a href="/psi-scpk/logsinti/pindah/admin/form-petugas"><button type="button" class="btn btn-info m-b-10 pull-right">Tambah Petugas</button></a></li>
                    </ul>
                </div>
                <?php }?>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <?php if($akses == 99){?>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Petugas Administrasi</h4>
                                <div class="table-responsive m-t-15">
                                    <table class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Lengkap</th>
                                                <th>No Identitas</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 0;
                                            foreach($pasif as $p){
                                                if($p['kode_akses'] == 1){
                                                $no++;?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $p['nama']?></td>
                                                    <td><?php echo $p['no_identitas']?></td>
                                                    <td><?php 
                                                        if($p['status'] == FALSE){
                                                            echo "<span class='badge badge-danger'>Non - Aktif</span>";
                                                        }else{
                                                            echo "<span class='badge badge-success'>Bertugas</span>";
                                                        }?>
                                                    </td>
                                                    <td>
                                                        <a href="/psi-scpk/Pengguna/hapus/<?php echo $p['id']?>"><button type="button" class="btn btn-danger m-b-10 btn-sm">Hapus</button></a>
                                                        <button type="button" class="btn btn-info m-b-10 btn-sm" data-toggle="modal" data-target="#editpetugas">Edit</button>
                                                    </td>
                                                </tr>
                                            <?php }
                                            }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Petugas Lapangan</h4>
                                <div class="table-responsive m-t-15">
                                    <table class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Lengkap</th>
                                                <th>No Identitas</th>
                                                <th>Penempatan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 0;
                                            foreach($aktif as $a){
                                                if($a['kode_akses'] == 2){
                                                $no++;?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $a['nama']?></td>
                                                    <td><?php echo $a['no_identitas']?></td>
                                                    <td><?php echo $a['kode']?></td>
                                                    <td><span class='badge badge-info'>Aktif</span></td>
                                                </tr>
                                            <?php }
                                            }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Petugas Lapangan</h4>
                                <div class="table-responsive m-t-15">
                                    <table class="display nowrap table table-hover table-bordered responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Lengkap</th>
                                                <th>No Identitas</th>
                                                <th>Status</th>
                                                <?php if($akses != 0){?>
                                                    <th>Aksi</th>
                                                <?php }?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 0;
                                            foreach($pasif as $p){
                                                if($p['kode_akses'] == 2){
                                                $no++;?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $p['nama']?></td>
                                                    <td><?php echo $p['no_identitas']?></td>
                                                    <td><span class='badge badge-danger'>Non - Aktif</span></td>
                                                    <?php if($akses != 0){?>
                                                        <td>
                                                            <a href="/psi-scpk/Pengguna/hapus/<?php echo $p['id']?>"><button type="button" class="btn btn-danger m-b-10 btn-sm">Hapus</button></a>
                                                            <button type="button" class="btn btn-info m-b-10 btn-sm" data-toggle="modal" data-target="#editpetugas">Edit</button>
                                                        </td>
                                                    <?php }?>
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
            <!-- End Container fluid  -->
            <!-- Edit Data Petugas -->
            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="editpetugas">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                        <form action="" novalidate="novalidate">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <h5>Detail Petugas</h5>
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
                                            <label class="col-sm-3 control-label">No identitas</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Jabatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Penempatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Edit Data Petugas -->

            <!-- Edit Data Petugas -->
            <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="tambahpetugas">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                        <form class="form-valide" action="/psi-scpk/Pengguna/tambah" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <div class="modal-title">
                                    <h5>Detail Petugas <small style="color: red"> Status : Belum terkonfirmasi</small></h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-number">Foto<span class="text-danger">*</span></label>
                                        <div class="col-lg-7">
                                            <input type="file" class="form-control" id="val-number" name="val-number" placeholder="$21.60" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Nama Lengkap<span class="text-danger">*</span></label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Nama Lengkap Petugas...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4">Jenis Kelamin<span class="text-danger">*</span></label>
                                        <div class="col-lg-7" required>
                                            <input type="radio" name="kelamin" value="Pria" checked=""> Pria
                                            <input type="radio" name="kelamin" value="Wanita"> Wanita
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Jabatan<span class="text-danger">*</span></label>
                                        <div class="col-lg-7" required>
                                            <input type="radio" name="jabatan" value="1" checked=""> Petugas Administrasi <br>
                                            <input type="radio" name="jabatan" value="2"> Petugas Lapangan
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-suggestions">No Identitas<span class="text-danger">*</span></label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" id="val-suggestions" name="val-suggestions" placeholder="No Identitas yang Masih Berlaku...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Edit Data Petugas -->

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