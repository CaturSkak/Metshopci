<!doctype html>
<html lang="en">

<head>
    <title>
        <?= $title; ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="HexaBit Bootstrap 4x Admin Template">
    <meta name="author" content="WrapTheme, www.thememakker.com">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
    <link rel="icon" href="<?php echo base_url(); ?>logo.png" type="image/logo">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/color_skins.css">
</head>



<body class="theme-orange">

    <!-- WRAPPER -->
    <div id="wrapper" class="auth-main">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>Logooo.png"><img src="<?php echo base_url(); ?>/assets/images/image-gallery/logo.png" width="30" height="30" class="d-inline-block align-top mr-2" alt="">MetShopPet's</a>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>BerandaAdmin">Beranda MetShopPet's</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>auth">Log In</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-7">
                    <div class="auth_detail">
                        <h2 class="text-monospace">
                            Semua Yang Anda Butuhkan Ada<br>Disini, Seperti:
                            <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">Hewan Peliharaan</div>
                                    <div class="carousel-item">Makanan Hewan</div>
                                    <div class="carousel-item">Perjodohan Hewan</div>
                                    <div class="carousel-item">Tempat Tinggal Hewan</div>
                                </div>
                            </div>
                        </h2>
                        <p>Jika Anda ingin mengetahui lebih Banyak Lagi Tentang Informasi Toko MetShopPet's bisa follow yang ada di Bawah ini</p>
                        <ul class="social-links list-unstyled">
                            <li><a class="btn btn-default" href="<?php echo base_url(); ?>javascript:void(0);" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="btn btn-default" href="<?php echo base_url(); ?>javascript:void(0);" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="btn btn-default" href="<?php echo base_url(); ?>javascript:void(0);" data-toggle="tooltip" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">

                        <div class="body">
                            <div class="header text-center">
                                <h1 class="h4">Buat Akun</h1>
                            </div>
                            <form class="form-auth-small" method="POST" action="<?= base_url('auth/registrasi') ?>">
                                <div class="form-group">
                                    <label class="control-label sr-only">Nama</label>
                                    <input type="nama" name="nama" class="form-control" id="signup-email" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input name="email" class="form-control" id="signup-email" placeholder="Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="control-label sr-only">Password</label>
                                        <input type="password" name="password" class="form-control" id="signup-password" placeholder="Kata Sandi">
                                        <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>

                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label sr-only">Konfirmasi Password</label>
                                        <input type="password" name="password2" class="form-control" id="signup-password2" placeholder="Konfirmasi Password">

                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" id="signup-password" placeholder="Kata Sandi" value="<?= set_value('password'); ?>">
                                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="signup-password2" class="control-label sr-only">Password</label>
                                    <input type="password" name="konfirmasipassword" class="form-control" id="signup-password" placeholder="Konfirmasi Kata Sandi" value="<?= set_value('konfirmasipassword'); ?>">
                                    //<?= form_error('konfirmasipassword', ' <small class="text-danger pl-3">', '</small>'); ?>
                                </div> -->
                                <button button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

    <script src="<?php echo base_url(); ?>light/assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>light/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="<?php echo base_url(); ?>light/assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>