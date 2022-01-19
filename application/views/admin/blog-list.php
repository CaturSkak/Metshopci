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
            \
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-10 text-center mb-15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive check-all-parent">
                                <table class="table table-striped custom-table">
                                    <thead class="thead-dark">
                                        <?php $no = 1; ?>
                                        <a href="<?php echo base_url(); ?>apppesan" class="btn btn-warning btn-round btn-sm hidden-sm"><i class="icon icon-refresh"></i></a>
                                        <a href="<?php echo site_url(''); ?>" class="btn btn-danger btn-round btn-sm hidden-sm" title="Hapus"><i class="las la-trash" style="size: 5px;"></i></a>
                                        <p></p>
                                        <tr>
                                            <th width="140px">
                                                <label class="fancy-checkbox">
                                                    <input class="check-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </th>
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
                                    <?php foreach ($lihatartikel as $artikel) { ?>

                                        <tr>
                                            <td style="width: 50px;">
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?php echo $artikel->judul_artikel; ?></td>
                                            <td><?php echo $artikel->kategori; ?></td>

                                            <td><input type="hidden" name="foto" value="<?php echo $artikel->foto; ?>"><img src="<?php echo base_url(); ?>assets/images/artikel_gambar/<?php echo $artikel->foto; ?>" width="120" height="110" class="avatar-preview "></td>
                                            <td><a href="<?php echo base_url(); ?>bloglist/lihat/<?php echo $artikel->artikel_id ?>" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Lihat" class="btn btn-primary"><button class="btn btn-light btn-round"><i class="las la-eye" style="font-size: 20px;"></i></button></a>
                                            </td>
                                            <td>

                                                <a>
                                                    <form action=" <?= base_url('bloglist/delete'); ?>/<?php echo $artikel->artikel_id ?>" method="POST">
                                                        <input type="hidden" value="<?= $artikel->artikel_id; ?>" name="artikel_id" id="artikel_id">
                                                        <input type="hidden" value="<?= $artikel->foto; ?>" name="foto" id="foto">
                                                        <a href="<?php echo base_url(); ?>bloglist/update/<?php echo $artikel->artikel_id ?>" class="btn btn-warning btn-round" type="hidden" title="Edit"><i class="fa fa-edit"></i></a>
                                                        <button type='submit' id='hapus' name='hapus' class="btn btn-danger btn-round" title="Hapus"><i class="las la-trash" style="font-size: 17px;"></i></button>
                                                    </form>
                                                </a>


                                            </td>
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