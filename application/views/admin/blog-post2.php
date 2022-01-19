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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/dropify/css/dropify.min.css">

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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>

<body class="theme-orange">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">
        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Update Artikel</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>bloglist">Artikel</li></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <?php echo form_open_multipart('bloglist/updateartikel'); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="judul_artikel" value="<?php echo $ambil->judul_artikel; ?>" placeholder="judul_artikel" />
                                </div>

                                <div class="form-group">
                                    <select class="form-control show-tick" name="kategori">
                                        <option value="<?php echo $ambil->kategori; ?>"><?php echo $ambil->kategori; ?></option>
                                        <option holder>"Pilih Kategori Artikel</option>
                                        <option value="Hewan Peliharaan">Hewan Peliharaan</option>
                                        <option value="Burung">Burung</option>
                                        <option value="Ikan">Ikan</option>
                                        <option value="Kesehatan Hewan">Kesehatan Hewan</option>
                                        <option value="Vaksinasi Hewan">Vaksinasi Hewan</option>
                                    </select>
                                </div>

                                <div class="card">
                                    <div class="form-group">
                                        <h5>Upload Foto</h5>
                                        <p></p>
                                        <h6><small>Masukkan Foto Untuk Artikel Disini!</small></h6>
                                        <img src="<?php echo base_url(); ?>assets/images/artikel_gambar/<?php echo $ambil->foto; ?>" width="150" height="110">
                                        <p></p>
                                        <input readonly type="text" class="form-control" id="jenis" name="old_image" style="width: 330px;" value="<?php echo $ambil->foto; ?>">
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                                <textarea class="summernote" name="deskripsi_artikel" cols="137" rows="5"><?php echo $ambil->deskripsi_artikel; ?></textarea>
                                <input type="hidden" name="artikel_id" value="<?php echo $ambil->artikel_id; ?>">
                                <p></p>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>


    <script src="<?php echo base_url(); ?>assets/vendor/dropify/js/dropify.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/forms/dropify.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/summernote/dist/summernote.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('.summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

</body>

</html>