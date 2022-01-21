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
                    <h2>Update Hewan & Perjodohan</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.html"><i class="icon-home"></i></a></li>
 
                        <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>formsadvanced">Daftar Hewan & Perjodohan</li></a>
                    </ul>
                   
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
            <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                        <?php echo form_open_multipart('formsadvanced/updatehewan');?>
                        <div class="form-group">
                                    <select class="form-control show-tick" name="jenis_hewan" id="jenis_hewan" require>
                                        <option value="<?php echo $ambil->jenis_hewan;?>"><?php echo $ambil->jenis_hewan;?></option>
                                        <option value="Hewan Peliharaan">Hewan Peliharaan</option>
                                        <option value="Reptil">Reptil</option>
                                        <option value="Ikan">Ikan</option>
                                        <option value="Burung">Burung</option>
                                    </select>
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $ambil->jenis;?>" 
                                placeholder="Tulis Jenis Hewan">
                        </div>
                        <div class="form-group">
                        <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="umur" name="umur" value="<?php echo $ambil->umur;?>"
                                    placeholder="Umur Hewan">
                                    <div class="input-group-append">
                                    <span class="input-group-text">Tahun/Bulan</span>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                                    <select class="form-control show-tick" name="jenis_kelamin" id="jenis_kelamin">
                                        <option value="<?php echo $ambil->jenis_kelamin;?>"><?php echo $ambil->jenis_kelamin;?></option>
                                        <option value="Jantan">Jantan</option>
                                        <option value="Betina">Betina</option>
                                    </select>
                        </div>
                        <div class="form-group">
                        <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="berat" name="berat" value="<?php echo $ambil->berat;?>"
                                    placeholder="Berat Hewan">
                                    <div class="input-group-append">
                                    <span class="input-group-text">kg/g</span>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                                    <select class="form-control show-tick" name="rincian" id="rincian" >
                                        <option value="<?php echo $ambil->rincian;?>"><?php echo $ambil->rincian;?></option>
                                        <option value="Pembelian">Pembelian</option>
                                        <option value="Perjodohan">Perjodohan</option>
                                    </select>
                        </div>
                        <div class="form-group">
                        <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $ambil->harga;?>" placeholder="Harga">
                        <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                        </div>
                        </div>
                        <div class="form-group">
							<input type="number" name="jumlah" class="form-control" id="jumlah" value="<?php echo $ambil->jumlah;?>" placeholder="Jumlah Hewan">
						</div>
                        </div>

                                <div class="card">
                                <div class="form-group">
                                    <h5>Upload Foto</h5>
                                    <p></p>
                                    <h6><small>Masukkan Foto Untuk Hewan Anda Disini!</small></h6>
                                    <p></p>
                                    <img  src="<?php echo base_url();?>assets/images/daftar_hewan/<?php echo $ambil->foto_hewan;?>" width="150" height="110">
                                    <p></p>
                                    <input readonly type="text" class="form-control" id="jenis" name="old_image" style="width: 330px;" value="<?php echo $ambil->foto_hewan;?>">
                                    <input type="file" name="foto_hewan" id="foto_hewan" class="form-control" <?php echo $ambil->foto_hewan;?>>
                                </div>
                                </div>
                                
                                <textarea class="summernote" name="deskripsi" cols="137" rows="5"><?php echo $ambil->deskripsi;?></textarea>
                                <input type="hidden" name="hewan_id" value="<?php echo $ambil->hewan_id;?>">
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

