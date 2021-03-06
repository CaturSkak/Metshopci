<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.1/js/dropify.js" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,900|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body class="theme-orange">
<div id="wrapper">
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Tambah Produk</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.html"><i class="icon-home"></i></a></li>
 
                        <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>formsadvanced2">Daftar Produk</li></a>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
            <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                        <?php echo form_open_multipart('formsbasic3/add');?>
                        <div class="form-group">
                                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" 
                                    placeholder="Tulis Nama Produk">
                                </div>
                        <div class="form-group">
                                    <select name="kategori" id="kategori" class="form-control show-tick">
                                        <option>Pilih Kategori Barang</option>
                                        <option>Makanan</option>
                                        <option>Barang</option>
                                        <option>Peralatan</option>
                                        <option>Obat</option>
                                    </select>
                        </div>
                        <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="berat" name="berat" 
                                    placeholder="Berat Produk">
                                    <div class="input-group-append">
                                    <span class="input-group-text">kg/g</span>
                        </div>
                        </div>
                        <div class="form-group">
							<input type="number" name="jumlah_barang" class="form-control" id="jumlah_barang" placeholder="Jumlah Barang">
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
                                    <input type="file" name="foto_produk" id="foto_produk" class="dropify"/>
                                </div>
                                </div>
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
<script src="<?php echo base_url();?>light/assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url();?>light/assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url();?>light/vendor/dropify/js/dropify.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.1/js/dropify.js"></script>

<script src="<?php echo base_url();?>light/assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url();?>light/assets/js/pages/forms/dropify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="light/dropify/js/dropify.min.js"></script>

<script type="text/javascript" src="<?php echo base_url().'resources/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'resources/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'resources/dropify/js/dropify.js'?>"></script>
 
<script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify();
    });
 
</script>
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