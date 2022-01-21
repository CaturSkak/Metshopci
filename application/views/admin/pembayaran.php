<!doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<link href="<?php echo base_url() . 'assets/css/jquery.dataTables.min.css' ?>" rel="stylesheet">

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

                        <a href="" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Tambah" class="btn btn-primary"><button class="btn  btn-primary "><i class="fa fa-plus-square"> Tambah Metode Pembayaran</i></button> </a>
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
                                                <th style="max-width: 100px;">ID</th>
                                                <th>Nama Metode</th>
                                                <th>Kode Transfer</th>
                                                <th style="min-width: 250px;">Detail</th>
                                                <th style="max-width: 250px;">Logo Instansi</th>
                                                <th style="width: 120px;">Aksi</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pembayaran as $row) : ?>

                                                <?php if (!empty($row->payment_method_image)) {
                                                    $image = "<img  src=" . base_url('assets/img/pembayaran/') . $row->payment_method_image . "  style='width: 140px; height: 140px; object-fit: cover;'>";
                                                } else {
                                                    $image = '';
                                                }
                                                ?>
                                                <tr class="text-dark">
                                                    <td><?= $row->payment_method_id; ?></td>
                                                    <td><?= $row->payment_method_name; ?></td>
                                                    <td><?= $row->payment_method_transfer_code; ?></td>
                                                    <td><?= $row->payment_method_details; ?></td>
                                                    <td><?= $image; ?></td>
                                                    <td>
                                                        <div class="d-inline-flex">

                                                            <button title="Edit Metode Pembayaran '<?= $row->payment_method_name; ?>'" onclick="location.href='<?= base_url('Admin_Pembayaran/'); ?><?= $row->payment_method_id; ?>';" class='btn btn-outline-success shadow-sm btn-block btn-circle mr-3' type='submit' id='edit' name='edit' class="action quickview" data-bs-toggle="modal" data-bs-target="#edit" title="edit"><i class='fa fa-edit'></i></button>
                                                            <form action="<?= base_url('Admin_Pembayaran/delete'); ?>" method="POST">
                                                                <input type="hidden" value="<?= $row->payment_method_id; ?>" name="payment_method_id" id="payment_method_id">
                                                                <input type="hidden" value="<?= $row->payment_method_image; ?>" name="payment_method_image" id="payment_method_image">
                                                                <button title="Hapus Metode Pembayaran '<?= $row->payment_method_name; ?>'" class='btn btn-outline-danger ' type='submit' id='hapus' name='hapus' onclick='javascript:confirmationDelete($(this));return false;'><i class='fa fa-trash'></i></button>
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


    <!-- Modal Tambah -->
    <div class=" modal fade" id="quick-view" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
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
                        <button type="submit" class="btn btn-brown" id='tambah' name='tambah'>Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <?php if (!empty($edit)) : ?>
        <!-- Edit Modal -->
        <div class=" modal fade" id="edit" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="<?= base_url('Admin_Pembayaran/edit'); ?>" enctype='multipart/form-data' method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title text-brown" id="exampleModalLongTitle">Edit Data Metode Pembayaran</h5>
                            <a href="<?= base_url('Admin_Pembayaran'); ?>" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            <div class="row align-items-center">
                                <input type="hidden" value="<?= $edit[0]->payment_method_id; ?>" name="payment_method_id" id="payment_method_id">
                                <input type="hidden" value="<?= $edit[0]->payment_method_image; ?>" name="img" id="img">
                                <div class="col-4 mb-3">
                                    <label for="payment_method_name" class="text-dark">Nama Metode</label>
                                </div>
                                <div class="col-8 mb-3">
                                    <input required maxlength="50" type="text" class="form-control text-dark" id="payment_method_name" name="payment_method_name" value="<?= $edit[0]->payment_method_name; ?>">
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="payment_method_transfer_code" class="text-dark">Kode Transfer</label>
                                </div>
                                <div class="col-8 mb-3">
                                    <input required maxlength="100" type="text" class="form-control text-dark" id="payment_method_transfer_code" name="payment_method_transfer_code" value="<?= $edit[0]->payment_method_transfer_code; ?>">
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="payment_method_details" class="text-dark">Deskripsi</label>
                                </div>
                                <div class="col-8 mb-3">
                                    <textarea type="text" maxlength="500" rows="5" cols="1" class="form-control text-dark" id="payment_method_details" name="payment_method_details"><?= $edit[0]->payment_method_details; ?></textarea>
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="payment_method_image" class="text-dark">Logo Instansi</label>
                                </div>
                                <div class="col-8 mb-3">
                                    <input type="file" class="form-control-file text-dark" id="payment_method_image" name="payment_method_image" accept=".png, .jpg, .jpeg">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('Admin_Pembayaran'); ?>" class="btn btn-outline-secondary">Batal</a>
                            <button type="submit" class="btn btn-brown" id='tambah' name='tambah'>Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif ?>




    <!-- Javascript -->
    <script>
        $(document).ready(function() {
            $('#mydata').DataTable();
        });
    </script>
    <script>
        $('.sparkbar').sparkline('php', {
            type: 'bar'
        });
    </script>
</body>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.datatab').DataTable();
    });
</script>

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

</html>