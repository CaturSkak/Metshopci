<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url(); ?>https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body class="theme-orange">

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
                            <li class="breadcrumb-item active">Artikel</li>
                        </ul>
                        <a href="<?php echo base_url(); ?>blogpost" class="btn btn-sm btn-primary" title="">Buat Baru</a>
                    </div>
                </div>
            </div>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10 text-center mb-15">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-striped custom-table">
                            <thead class="thead-dark">
                            <?php $no = 1; ?>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Deskripsi</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                    <?php foreach ($lihatartikel as $artikel){ ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?php echo $artikel->judul_artikel;?></td>
                            <td><?php echo $artikel->kategori;?></td>
                            <td><img src="<?php echo base_url();?>assets/images/<?php echo $artikel->foto;?>" width="120" height="110"></td>
                            <td><?php echo $artikel->deskripsi_artikel;?></td>
                            <td><a href="<?php echo base_url();?>bloglist/lihat/<?php echo $artikel->artikel_id?>" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
                            </td>
                            <td><a href="<?php echo base_url();?>bloglist/update/<?php echo $artikel->artikel_id?>" class="btn btn-warning" type="hidden" title="Edit"><i class="fa fa-edit"></i></a></td>
                            <td><a href="<?php echo site_url('/bloglist/delete');?>/<?php echo $artikel->artikel_id?>" class="btn btn-sm btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
	</div>
</div>
		</div>
</section>
<!-- Javascript -->
<script src="<?php echo base_url(); ?>light/assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url(); ?>light/assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url(); ?>light/assets/bundles/mainscripts.bundle.js"></script>

<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/popper.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/main.js"></script>
</body>

</html>