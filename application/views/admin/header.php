<!doctype html>
<html lang="en">

<head>
    <title>MetShop Pets -Selamat Datang di MetShop Pets</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="icon" href="<?php echo base_url(); ?>light/ass<meta name=" description" content="HexaBit Bootstrap 4x Admin Template">
    <meta name="author" content="WrapTheme, www.thememakker.com">
    <link rel="icon" href="<?php echo base_url(); ?>light/assets/logo.png" type="image/logo">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fullcalendar/fullcalendar.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">



    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/sweetalert/sweetalert.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nestable/jquery-nestable.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/summernote/dist/summernote.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/vendor/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="dist/css/demo.css">
    <link rel="stylesheet" href="dist/css/dropify.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/charts-c3/plugin.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/toastr/toastr.min.css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/inbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/blog.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/color_skins.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/foto.css">



</head>

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="<?php echo base_url(); ?>assets/images/kucing1.gif" width="150" height="125" alt="Neko"></div>
        <p>Sedang Memuat...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="<?php echo base_url(); ?>BerandaAdmin"><img style="width: 30px; height: 30px;" src="<?php echo base_url(); ?>light/logo.png" alt="HexaBit Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-animated scale-right">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-grid"></i></a>
                        <ul class="dropdown-menu menu-icon app_menu">
                            <li>
                                <a href="<?php echo base_url(); ?>formsadvanced">
                                    <i class="fa fa-github-alt"></i>
                                    <span>Hewan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>apppesan">
                                    <i class="icon-bubbles"></i>
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>apptaskboard">
                                    <i class="icon-list"></i>
                                    <span>Task</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>bloglist">
                                    <i class="icon-globe"></i>
                                    <span>Blog</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="<?php echo base_url(); ?>apppesan" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a></li>
                </ul>
            </div>

            <div class="navbar-right">

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-envelope"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu right_chat email">
                                <li>
                                    <a href="<?php echo base_url(); ?>apppesan">
                                        <div class="media">
                                            <img class="media-object " src="<?php echo base_url(); ?>assets/images/12.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Doni S. <small class="float-right">23 Juni</small></span>
                                                <span class="message">pesanan anda sudah saya terima!</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="<?php echo base_url(); ?>assets/images/wiskas.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Cs Whiskas <small class="float-right">25 Juni</small></span>
                                                <span class="message">Mohon Maaf Bapak Kami dari pihak Whiskas ingin memberikan sponsorshiplight</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="<?php echo base_url(); ?>assets/images/19.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Sonia Vita Sari <small class="float-right">27 Juni</small></span>
                                                <span class="message">Ada Banya Pembelihan hewan yang sudah dibayar di Acc oleh Bapak/Ibu...</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="<?php echo base_url(); ?>assets/images/bolt.png" alt="">
                                            <div class="media-body">
                                                <span class="name">Cs Bolt M.A. <small class="float-right">30 Juni</small></span>
                                                <span class="message">KamI Menawarkan Produk Kami kepada Toko MetShopPet's yaitu Bolt</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu feeds_widget">
                                <li class="header">You have 5 new Notifications</li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-thumbs-o-up text-success"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-success">7 masukkan Baru <small class="float-right text-muted">Today</small></h4>
                                            <small>Untuk Website nya sangat Bagus</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">Pengguna Baru<small class="float-right text-muted">10:45</small></h4>
                                            <small>Team Sportive dan inovatif</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-question-circle text-warning"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">Peringatan Server <small class="float-right text-muted">10:50</small></h4>
                                            <small>Database Tidak Sesuai</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-check text-danger"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-danger">Isu Terselesaikan <small class="float-right text-muted">11:05</small></h4>
                                            <small>Kami Telah Memperbaiki Bug Di Bagian Shop</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">7 Pesanan baru <small class="float-right text-muted">11:35</small></h4>
                                            <small>Kamu Menerima Order dari Tina.</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>pagelogin" class="icon-menu"><i class="icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="rightbar" class="rightbar">
        <ul class="nav nav-tabs-new">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="setting">
                <div class="slim_scroll">
                    <div class="card">
                        <h6>Choose Theme</h6>
                        <ul class="choose-skin list-unstyled mb-0">
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange" class="active">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled mb-0">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Report Panel Usag</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Email Redirect</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Notifications</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Auto Updates</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>Account Settings</h6>
                        <ul class="setting-list list-unstyled mb-0">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Offline</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Location Permission</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Notifications</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane right_chat" id="chat">
                <div class="slim_scroll">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <div class="card">
                        <h6>Recent</h6>
                        <ul class="right_chat list-unstyled mb-0">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="<?php echo base_url(); ?>light/assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Ava Alexander <small class="float-right">Just now</small></span>
                                            <span class="message">Lorem ipsum Veniam aliquip culpa laboris minim tempor</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="<?php echo base_url(); ?>light/assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Debra Stewart <small class="float-right">38min ago</small></span>
                                            <span class="message">Many desktop publishing packages and web page editors</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="<?php echo base_url(); ?>light/assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Susie Willis <small class="float-right">2hr ago</small></span>
                                            <span class="message">Contrary to belief, Lorem Ipsum is not simply random text</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="<?php echo base_url(); ?>light/assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Folisise Chosielie <small class="float-right">2hr ago</small></span>
                                            <span class="message">There are many of passages of available, but the majority</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="<?php echo base_url(); ?>light/assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Marshall Nichols <small class="float-right">1day ago</small></span>
                                            <span class="message">It is a long fact that a reader will be distracted</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="<?php echo base_url(); ?>BerandaAdmin"><img src="<?php echo base_url(); ?>light/logo.png" alt="HexaBit Logo" class="img-fluid logo"><span>MetShop Pet's</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img style="width: 140px; height: 140px; object-fit: cover;" src="<?= base_url('assets/images/profil/') . $user['foto_pengguna']; ?>" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Selamat Datang,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>
                            <?= $user['nama_lengkap']; ?>

                            <!-- <?php if ($user) {
                                        echo  $user['nama_lengkap'];
                                    } else {
                                        redirect('auth');
                                    }; ?> -->
                        </strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="<?php echo base_url(); ?>pageprofile"><i class="icon-user"></i>Profil Saya</a></li>
                        <li><a href="<?php echo base_url(); ?>apppesan"><i class="icon-envelope-open"></i>Pesan</a></li>

                        <li class="divider"></li>
                        <li><a href="<?= base_url('auth/logout') ?>"><i class="icon-power"></i>Keluar</a></li>
                    </ul>
                </div>
            </div>
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li><a href="<?php echo base_url(); ?>BerandaAdmin"><i class="las la-home" style="font-size: 20px;"></i><span>Beranda</span></a></li>

                    <li><a href="<?php echo base_url(); ?>apppesan"><i class="icon-bubbles" style="font-size: 15px;"></i><span>Pesan</span></a></li>
                    <li>
                        <a href="#Tables" class="has-arrow"><i class="las la-shopping-cart" style="font-size: 20px;"></i><span>Transaksi</span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>tablebasic">Pembelian</a></li>
                            <li><a href="<?php echo base_url(); ?>tablenormal">Perjodohan</a></li>
                            <li><a href="<?php echo base_url(); ?>Admin_Pembayaran">Metode Pembayaran</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow"><i class="las la-paw" style="font-size: 20px;"></i><span>Hewan</span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>formsadvanced">Daftar Hewan & Perjodohan Hewan</a></li>
                            <li><a href="<?php echo base_url(); ?>formsbasic">Tambah Hewan & Perjodohan </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow"><i class="las la-shopping-basket" style="font-size: 20px;"></i><span>Produk</span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>formsadvanced2">Daftar Produk</a></li>
                            <li><a href="<?php echo base_url(); ?>formsadvanced3">Daftar Agen</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Blog" class="has-arrow"><i class="las la-poll-h" style="font-size: 20px;"></i><span>Artikel</span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>bloglist">Artikel</a></li>
                            <li><a href="<?php echo base_url(); ?>blogpost">Buat Artikel Baru</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="las la-user-alt" style="font-size: 20px;"></i><span>Data Akun</span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>appcontact">Daftar Akun Admin</a></li>
                            <li><a href="<?php echo base_url(); ?>appcontact2">Daftar Akun Customer</a></li>
                            <li><a href="<?php echo base_url(); ?>appcontact3">Daftar Akun Karyawan</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

</body>

</html>