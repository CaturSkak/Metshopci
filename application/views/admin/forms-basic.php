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
                    <h2>Hewan dan Produk</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.html"><i class="icon-home"></i></a></li>
 
                        <li class="breadcrumb-item active">Hewan dan Produk</li>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
            <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                        <?php echo form_open_multipart('formsbasic/add');?>
                        <div class="form-group">
                                    <select name="jenis_hewan" id="jenis_hewan" class="form-control show-tick">
                                        <option>Pilih Kategori Hewan / Perjodohan</option>
                                        <option>Hewan Peliharaan</option>
                                        <option>Reptil</option>
                                        <option>Ikan</option>
                                        <option>Burung</option>
                                    </select>
                        </div>
                        <div class="form-group">
                                    <input type="text" class="form-control" id="jenis" name="jenis" 
                                    placeholder="Tulis Jenis Hewan">
                                </div>
                        <div class="form-group">
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control show-tick">
                                        <option>Pilih Kategori Jenis Kelamin</option>
                                        <option>Jantan</option>
                                        <option>Betina</option>
                                    </select>
                        </div>
                        <div class="form-group">
                                    <select name="rincian" id="rincian" class="form-control show-tick">
                                        <option>Tipe Pembelian</option>
                                        <option>Pembelian</option>
                                        <option>Perjodohan</option>
                                    </select>
                        </div>
                        <div class="form-group">
                        <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" id="harga" name="harga" 
                            placeholder="Harga">
                        <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                        </div>
                        </div>
                        </div>

                                <div class="card">
                                <div class="form-group">
                                    <h5>Upload Foto</h5>
                                    <p></p>
                                    <h6><small>Masukkan Foto Untuk Hewan Anda Disini!</small></h6>
                                    <p></p>
                                    <input type="file" name="foto_hewan" id="foto_hewan" class="form-control"/>
                                </div>
                                </div>
                                
                                <textarea class="summernote" name="deskripsi" cols="137" rows="5"></textarea>
                                <p></p>
                                <button button type="submit" class="btn btn-danger btn-lg btn-block">Tambah</button>
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

