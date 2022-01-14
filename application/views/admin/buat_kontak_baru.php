<!doctype html>
<html lang="en">


<body class="theme-orange">

    <div id="wrapper">

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Buat Kontak Baru</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>index"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo base_url();?>appcontact">Kontak</li></a>
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
                    placeholder="Nama Panjang">
                    <p></p>
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" 
                    placeholder="Email">
                    <p></p>
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" 
                    placeholder="Nomer Hp/Tlp">
                    <p></p>
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" 
                    placeholder="Alamat Rumah">
                </div>


                <div class="card">
                <div class="form-group">
                    <h5>Upload Foto</h5>
                    <p></p>
                    <h6><small>Masukkan Foto Anda Disini!</small></h6>
                    <p></p>
                    <input type="file" name="foto" id="foto" class="form-control"/>
                </div>
                </div>
                <button button type="submit" class="btn btn-primary btn-lg btn-block">Tambah</button>
                </div>
        </div>
        <?php echo form_close();?>
    </div>
</div>
</div>
</div>
</div>

<!-- Javascript -->
<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>


<script src="<?php echo base_url();?>../assets/vendor/dropify/js/dropify.min.js"></script>

<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/forms/dropify.js"></script>

<script src="<?php echo base_url();?>../assets/vendor/summernote/dist/summernote.js"></script>

</body>
</html>
