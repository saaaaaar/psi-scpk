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
    <title>Login - Logistikku</title>
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

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card" style="margin: 15% auto 10% auto;">
                            <div class="login-form">
                                <h4>
                                    <img src="<?php echo base_url('assets/img/logoo.png')?>" style="width: 30%; height: 30%;"/>
                                    <p style="margin-top: 10px;">
                                        <img src="<?php echo base_url('assets/img/text.png')?>" style="width: 40%; height: 40%;"/>
                                    </p>
                                </h4>
                                <form action="<?php echo base_url('LogsInti/masuk')?>" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="No Induk Pegawai" id="username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="background-color: #8B3E24;">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

</body>

</html>