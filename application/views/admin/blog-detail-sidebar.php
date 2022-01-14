<html lang="en">
<body class="theme-orange">
<head>
    
</head>

    <div id="wrapper">
        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Artikel</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>bloglist"></a>Artikel</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-25 col-md-12 right-box">
                    <div class="card single_post2">
                        <center><img class="img-fluid" src="<?php echo base_url();?>assets/images/artikel_gambar/<?php echo $ambil->foto;?>" style="width: 50%" alt="gambar"></center>
                        <div class="body">                    
                                <h4 class="title"><?= $ambil->judul_artikel; ?></h4>
                                <p class="date">
                                    <small><?php if ($ambil->timestamp == 0) {
                                                        echo  "&nbsp;";
                                                    } else {
                                                        echo date('d F Y', strtotime($ambil->timestamp));
                                                    }; ?></small>
                                </p>
                                <p class="text"><?= $ambil->deskripsi_artikel ?>
                                </p>
                        </div>                        
                    </div>
                    </div>
                </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>