
<!doctype html>
<html lang="en">
<head>
    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/plugins/swiper-bundle.min.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>light/assets/css/style.css" />
</head>
<body class="theme-orange">


<div id="wrapper">
        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Daftar Hewan & Perjodohan Hewan</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Daftar Hewan & Perjodohan Hewan</li>
                        </ul>
                        <a href="<?php echo base_url(); ?>formsbasic" class="btn btn-sm btn-primary" title="">Tambah Hewan Baru</a>
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
                                            <th scope="col">Kategori Hewan </th>
                                            <th scope="col">Jenis Hewan </th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Rincian</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Deskripsi</th>
                                            <th colspan="3">Tindakan</th>
                                        </tr>
                            </thead>
                    <tbody>                    
                    
                    </tbody>
                        <?php foreach ($lihathewan as $hewan){ ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?php echo $hewan->jenis_hewan;?></td>
                            <td><?php echo $hewan->jenis;?></td>
                            <td><?php echo $hewan->jenis_kelamin;?></td>
                            <td><?php echo $hewan->rincian;?></td>
                            <td>Rp. <?php echo $hewan->harga;?></td>
                            <td><img src="<?php echo base_url();?>assets/images/daftar_hewan/<?php echo $hewan->foto_hewan;?>" width="150" height="110"></td>
                            <td><?php echo $hewan->deskripsi;?></td>
                            <td><a href="<?php echo base_url();?><?php echo $hewan->hewan_id?>" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview" class="btn btn-primary"><button class="btn btn-primary " ><i class="icon icon-info"></i></button></a>
                            </td>
                            <td><a href="<?php echo base_url();?>formsadvanced/update/<?php echo $hewan->hewan_id?>" class="btn btn-warning" type="hidden" title="Edit"><i class="fa fa-edit"></i></a></td>
                            <td><a href="<?php echo site_url('/formsadvanced/delete');?>/<?php echo $hewan->hewan_id?>" class="btn btn-danger js-sweetalert" title="Hapus"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
      <!-- Modal Start  -->
      <div class="modalquickview modal fade" id="quick-view<?= $hewan->hewan_id?>" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    
                                <a class="swiper-slide w-100" href="assets/images/products/medium-product/persia.png">
                                    <img class="w-100" src="assets/images/products/medium-product/persia.png" alt="Product">
                                <a class="swiper-slide w-100" href="assets/images/products/medium-product/kucing_persia_putih_jantan.jpg">
                                    <img class="w-100" src="assets/images/products/medium-product/kucing_persia_putih_jantan.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="assets/images/products/medium-product/735_5.jpg">
                                    <img class="w-100" src="assets/images/products/medium-product/735_5.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="assets/images/products/medium-product/putih.jpg">
                                    <img class="w-100" src="assets/images/products/medium-product/putih.jpg" alt="Product">
                                </a>

                                
                                </div>

                                <!-- Swiper Pagination Start -->
                                <!-- <div class="swiper-pagination d-md-none"></div> -->
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div class="swiper-product-button-next swiper-button-next"><i class="ti-arrow-right"></i></div>
                                <div class="swiper-product-button-prev swiper-button-prev"><i class="ti-arrow-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                            <!-- Single Product Image End -->

                        </div>
                        <!-- Product Details Image End -->

                    </div>
                    <div class="col-md-6 col-12 overflow-hidden position-relative">

                        <!-- Product Summery Start -->
                        <div class="product-summery position-relative">

                            <!-- Product Head Start -->
                            <div class="product-head mb-3">
                                <h2 class="product-title">Kucing Persia Peaknose</h2>
                            </div>
                            <!-- Product Head End -->

                            

                            <!-- Price Box Start -->
                            <div class="sku mb-3">
                            <span>Kategori</span>
                                <span><?= $ambil->jenis_hewan; ?></span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                        <div class="product-inventroy mb-3">
                            <span class="inventroy-title"> <strong>Info :</strong></span>
                            <span class="inventory-varient">Tersedia</span>
                     
                        <!-- Product Inventory End -->

                        <!-- Description Start -->
                        <p ><p>Kucing Persia Peaknose</p>
                        <p>Jantan</p>
                        <p>Umur 3-4 Bulan</p>
                        <p>No Kutu No Jamur</p>
                        <p>No Cacat</p>
                        <p>Obat Cacing Rutin</p>
                        <p>Linca Dan Pinter</p>
                        <p>Di Jamin Sehat, Sudah Vaksin</p>
                        <p>

                        Di Butuhkan Betina Jenis Kucing Persia Peaknose/Kucing Anggora/Kucing Persia Asli</p>


                        <p>Melayani Pengiriman Luar Kota Dan Dalam Kota</p>
                        <!-- Description End -->

                    </div>
                  

                       

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->



<!-- Javascript -->
<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>    
<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url();?>assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 
    
<!-- Plugins JS -->
<script src="<?php echo base_url();?>assets/js/plugins/swiper-bundle.min.js"></script>

<!-- Vendor JS -->

<script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
 <!--Main JS-->
 <script src="<?php echo base_url();?>assets/js/main.js"></script>

<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/forms/advanced-form-elements.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/ui/dialogs.js"></script>
</body>
</html>

