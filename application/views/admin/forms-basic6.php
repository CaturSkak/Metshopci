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
                    <h2>Update Agen</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.html"><i class="icon-home"></i></a></li>
 
                        <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>formsadvanced3">Daftar Agen</li></a>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
            <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                        <?php echo form_open_multipart('formsadvanced3/updateagen');?>
                        <div class="form-group">
                                    <input type="text" class="form-control" id="nama_agen" name="nama_agen" value="<?php echo $ambil->nama_agen;?>" 
                                    placeholder="Tulis Nama Agen">
                        </div>
                        <div class="form-group">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $ambil->alamat;?>"
                                    placeholder="Alamat">
                        </div>
                        <div class="form-group">
                        <div class="input-group mb-3">
                        <span class="input-group-text">(+62)</span>
                            <input type="text" class="form-control" id="nomer_telepon" name="nomer_telepon" value="<?php echo $ambil->nomer_telepon;?>" 
                            placeholder="Nomer Telpon / Hp">
                        </div>
                        </div>
                        </div>
                    </div>
                                
                                <textarea class="summernote" name="deskripsi" cols="137" rows="5"><?php echo $ambil->deskripsi;?></textarea>
                                <input type="hidden" name="agen_id" value="<?php echo $ambil->agen_id;?>">
                                <p></p>
                                <button button type="submit" class="btn btn-danger btn-lg btn-block">Update</button>
                                </div>
                            </div>
                            <?php echo form_close();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

