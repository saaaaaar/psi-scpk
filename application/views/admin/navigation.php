<?php 
    $akses = $this->session->userdata('akses');
    $nama = $this->session->userdata('nama');
    $nip = $this->session->userdata('identitas');
?>        
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('Informasi')?>">
                        <!-- Logo icon -->
                        <b><img src="<?php echo base_url('assets/img/logooo.png')?>" alt="homepage" class="dark-logo"/></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="<?php echo base_url('assets/img/text.png')?>" alt="homepage" class="dark-logo" style="margin-left: 5px;width: 35%;"/></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0 pull-left">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0 pull-right">
                        <!-- Comment -->
                        <!-- <li class="nav-item">
                            <a class="nav-link text-muted text-muted" href="/psi-scpk/Informasi/pindah/table-bantuan-masuk" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                        </li> -->
                        <!-- End Comment -->
                        <!-- Messages -->
                        <!-- <li class="nav-item">
                            <a class="nav-link text-muted" href="/psi-scpk/Informasi/pindah/table-pengiriman" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                        </li> -->
                        <!-- End Messages -->
                        <!-- Profile -->
                        <?php if($akses == 2){?>
                            <li class="nav-item">
                                <a class="nav-link text-muted" aria-haspopup="true" aria-expanded="false"><?php echo $nama." [ ".$nip." ]";?>
                                </a>
                            </li>
                        <?php }?>
                         <li class="nav-item">
                            <a class="nav-link text-muted" href="/psi-scpk/logsinti/keluar" aria-haspopup="true" aria-expanded="false">Keluar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <?php if($akses != 2){?>
                            <li class="nav-devider"></li>
                            <li class="nav-label">Home</li>
                            <li> <a class="has-arrow  " href="/psi-scpk/informasi" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="/psi-scpk/informasi/dashboard">Statistik Bantuan Bencana</a></li>
                                    <li><a href="/psi-scpk/informasi">Profil</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Features</li>
                            <li>
                                <a href="/psi-scpk/informasi/tampil" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Informasi Bencana</span></a>
                            </li>
                            <li> 
                                <a href="/psi-scpk/pengguna" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Petugas</span></a>
                            </li>
                            <?php if($akses == 1){?>
                                 <li>
                                    <a href="/psi-scpk/bantuan/bantuanmasuk" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Verifikasi Bantuan Masuk</span></a>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">Blanko Pengisian Data</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="/psi-scpk/logsinti/pindah/admin/form-info">Tambah Informasi Bencana</a></li>
                                        <li><a href="/psi-scpk/logsinti/pindah/admin/form-petugas">Tambah Petugas</a></li>
                                    </ul>
                                </li>
                            <?php }else{?>
                                <!-- <li>
                                    <a href="/psi-scpk/bantuan/pengiriman" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Distribusi Bantuan</span></a>
                                </li> -->
                            <?php }
                        }else{?>
                            <li class="nav-label">Home</li>
                            <li> 
                                <a href="/psi-scpk/posko/tampil/<?php echo $this->session->userdata('id')?>" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Beranda</span></a>
                            </li>
                        <?php }?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar 