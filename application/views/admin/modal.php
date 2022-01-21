<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Data Barang</title>
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet">
    <!-- <link href="<?php echo base_url() . 'assets/css/jquery.dataTables.min.css' ?>" rel="stylesheet"> -->
</head>

<body class="theme-orange">

    <div id="wrapper">
        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Kelola Data Metode Pembayaran</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Metode Pembayaran</li>

                        </ul>

                        <a href="" class="action quickview" data-bs-toggle="modal" data-bs-target="#modal_add_new" title="Tambah" class="btn btn-primary"><button class="btn  btn-primary "><i class="fa fa-plus-square"> Tambah Metode Pembayaran</i></button> </a>

                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <?= $this->session->flashdata('success_flashData'); ?>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Kelola Data Metode Pembayaran<small>Silahkan tambahkan metode pembayaran</small></h2>
                                <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);">Tindakan</a></li>
                                            <li><a href="javascript:void(0);">Tindakan Lainnya</a></li>
                                            <li><a href="javascript:void(0);">Lain-nya</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                        <thead class="table-dark">
                                            <tr>
                                            <tr>
                                                <td>ID</td>
                                                <td>Nama Metode</td>
                                                <td>Kode Transfer</td>
                                                <td>Detail</td>
                                                <td>Logo Instansi</td>
                                                <td>Aksi</td>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($pembayaran->result_array() as $i) :
                                                $barang_id = $i['payment_method_id'];
                                                $barang_nama = $i['payment_method_name'];
                                                $barang_satuan = $i['payment_method_transfer_code'];
                                                $barang_harga = $i['payment_method_details'];
                                            ?>
                                                <?php if (!empty($i['payment_method_image'])) {
                                                    $image = "<img  src=" . base_url('assets/img/pembayaran/') . $i['payment_method_image'] . "  style='width: 140px; height: 140px; object-fit: cover;'>";
                                                } else {
                                                    $image = '';
                                                }
                                                ?>
                                                <tr>
                                                    <td><?php echo $barang_id; ?></td>
                                                    <td><?php echo $barang_nama; ?></td>
                                                    <td><?php echo $barang_satuan; ?></td>
                                                    <td><?php echo $barang_harga; ?></td>
                                                    <td><?php echo $image; ?></td>
                                                    <td>
                                                        <div class="d-inline-flex">
                                                            <a class="btn  btn-outline-warning mr-3  " data-bs-toggle="modal" data-bs-target="#modal_edit<?php echo $barang_id; ?>"><i class='fa fa-edit btn-outline-warning'></i></a>
                                                            <form action="<?= base_url('Admin_Pembayaran/delete'); ?>" method="POST">
                                                                <input type="hidden" value="<?= $i['payment_method_id']; ?>" name="payment_method_id" id="payment_method_id">
                                                                <input type="hidden" value="<?= $i['payment_method_image']; ?>" name="payment_method_image" id="payment_method_image">
                                                                <button title="Hapus Metode Pembayaran '<?= $i['payment_method_name']; ?>'" class='btn btn-outline-danger ' type='submit' id='hapus' name='hapus' onclick='javascript:confirmationDelete($(this));return false;'><i class='fa fa-trash'></i></button>
                                                            </form>
                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>


    <!-- ============ MODAL ADD BARANG =============== -->
    <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form action="<?= base_url('Admin_Pembayaran/add'); ?>" enctype='multipart/form-data' method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title text-brown" id="exampleModalLongTitle">Tambah Data Metode Pembayaran</h5>

                    </div>
                    <div class="modal-body">
                        <div class="row align-items-center">
                            <div class="col-4 mb-3">
                                <label for="payment_method_name" class="text-dark">Nama Metode</label>
                            </div>
                            <div class="col-8 mb-3">
                                <input required maxlength="50" type="text" class="form-control text-dark" id="payment_method_name" name="payment_method_name">
                            </div>
                            <div class="col-4 mb-3">
                                <label for="payment_method_transfer_code" class="text-dark">Kode Transfer</label>
                            </div>
                            <div class="col-8 mb-3">
                                <input required maxlength="100" type="text" class="form-control text-dark" id="payment_method_transfer_code" name="payment_method_transfer_code">
                            </div>
                            <div class="col-4 mb-3">
                                <label for="payment_method_details" class="text-dark">Deskripsi</label>
                            </div>
                            <div class="col-8 mb-3">
                                <textarea type="text" maxlength="500" rows="5" cols="1" class="form-control text-dark" id="payment_method_details" name="payment_method_details"></textarea>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="payment_method_image" class="text-dark">Logo Instansi</label>
                            </div>
                            <div class="col-8 mb-3">
                                <input required type="file" class="form-control-file text-dark" id="payment_method_image" name="payment_method_image" accept=".png, .jpg, .jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id='tambah' name='tambah'>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--END MODAL ADD BARANG-->

    <!-- ============ MODAL EDIT BARANG =============== -->
    <?php
    foreach ($pembayaran->result_array() as $i) :
        $barang_id = $i['payment_method_id'];
        $barang_nama = $i['payment_method_name'];
        $barang_satuan = $i['payment_method_transfer_code'];
        $barang_harga = $i['payment_method_details'];
        $img = $i['payment_method_image'];
    ?>
        <?php if (!empty($row->payment_method_image)) {
            $image = "<img  src=" . base_url('assets/img/pembayaran/') . $row->payment_method_image . "  style='width: 140px; height: 140px; object-fit: cover;'>";
        } else {
            $image = '';
        }
        ?>
        <div class="modal fade" id="modal_edit<?php echo $barang_id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'Admin_Pembayaran/Update' ?>">
                        <div class="modal-header">
                            <h5 class="modal-title text-brown" id="exampleModalLongTitle">Ubah Data Metode Pembayaran</h5>

                        </div>
                        <div class="modal-body">

                            <input type="hidden" name="payment_method_id" value="<?php echo $barang_id; ?>" class="form-control" type="text" placeholder="Kode Barang..." readonly>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama Metode</label>
                                <div class="col-xs-8">
                                    <input name="payment_method_name" value="<?php echo $barang_nama; ?>" class="form-control" type="text" placeholder="Nama Barang..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Kode Transfer</label>
                                <div class="col-xs-8">
                                    <input name="payment_method_transfer_code" value="<?php echo $barang_satuan; ?>" class="form-control" type="text" placeholder="Nama Barang..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Detail</label>
                                <div class="col-xs-8">
                                    <input name="payment_method_details" value="<?php echo $barang_harga; ?>" class="form-control" type="text" placeholder="Harga..." required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Logo Instansi</label>
                                <div class="col-xs-8">
                                    <img src="<?php echo base_url(); ?>assets/img/pembayaran/<?php echo $img; ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                    <input readonly name="img" value="<?php echo $img; ?>" class="form-control" type="text">
                                    <input name="payment_method_image" class="form-control" type="file">
                                    <!-- <input type="hidden" class="form-control-file text-dark" id="old_image" hidden="lama" value=" <?php echo $img; ?>"> -->
                                    <!-- <input type="file" class="form-control-file text-dark" id="payment_method_image" name="foto" accept=".png, .jpg, .jpeg"> -->
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-bs-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    <!--END MODAL ADD BARANG-->

    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/bundles/vendorscripts.bundle.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js -->

    <!-- Plugins JS -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/swiper-bundle.min.js"></script>

    <!-- Vendor JS -->

    <script src="<?php echo base_url(); ?>assets/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
    <!--Main JS-->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

    <script src="<?php echo base_url(); ?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/forms/advanced-form-elements.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/ui/dialogs.js"></script>
    <script>
        $(document).ready(function() {
            $('#mydata').DataTable();
        });
    </script>
</body>

</html>