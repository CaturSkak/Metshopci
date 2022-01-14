<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>
<body class="theme-orange">

    <div id="wrapper">

        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Buat Artikel Baru</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index"><i class="iconhome"></i></a></li>
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
                            <?php echo form_open_multipart('blogpost/add');?>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" 
                                    placeholder="Tulis Judul Artikel">
                                </div>

                                <div class="form-group">
                                    <select name="kategori" id="kategori" class="form-control show-tick">
                                        <option>Pilih Kategori Artikel</option>
                                        <option>Hewan Peliharaan</option>
                                        <option>Burung</option>
                                        <option>Ikan</option>
                                        <option>Kesehatan Hewan</option>
                                        <option>Vaksinasi Hewan</option>
                                    </select>
                                </div>

                                <div class="card">
                                <div class="form-group">
                                    <h5>Upload Foto</h5>
                                    <p></p>
                                    <h6><small>Masukkan Foto Untuk Artikel Disini!</small></h6>
                                    <p></p>
                                    <input type="file" name="foto" id="foto" class="form-control"/>
                                </div>
                                </div>
                                
                                <textarea class="summernote" name="deskripsi_artikel" cols="137" rows="5"></textarea>
                                <p></p>
                                <button button type="submit" class="btn btn-primary btn-lg btn-block">posting</button>
                                </div>
                        </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>light/assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>light/assets/bundles/vendorscripts.bundle.js"></script>


    <script src="<?php echo base_url(); ?>light/assets/vendor/dropify/js/dropify.min.js"></script>

    <script src="<?php echo base_url(); ?>light/assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>light/assets/js/pages/forms/dropify.js"></script>

    <script src="<?php echo base_url(); ?>light/assets/vendor/summernote/dist/summernote.js"></script> -->
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