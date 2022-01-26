<!DOCTYPE html>
<html lang="en">

<!-- Breadcrumb Area Start -->
<div class="section breadcrumb-area bg-bright">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrapper">
                    <h2 class="breadcrumb-title">Checkout Pembelian</h2>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>index.php">Beranda</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Checkout Section Start -->
<div class="section section-margin">
    <div class="container">
        <?= $this->session->flashdata('warning_flashData'); ?>
        <?= $this->session->flashdata('error_flashData'); ?>
        <?= $this->session->flashdata('success_flashData'); ?>
        <div class="row mb-n4">

            <div class="col-xl-8 col-lg-12 col-12 px-0 px-lg-4 mb-5">
                <div class="card rounded shadow mb-5">
                    <div class="card-header">
                        <h4 class="text-center">Konfirmasi Data Diri</h4>

                    </div>
                    <div class="card-body px-0 mx-0">
                        <div class="row px-0 px-md-4 pl-3 d-flex">
                            <div class="col-12 col-md-6">
                                <div class="mx-auto d-flex">
                                    <div class="row d-flex w-100">
                                        <div class="col-12 d-flex">
                                            <?php
                                            if (!empty($user['foto_pengguna'])) {
                                                $url = base_url('assets/images/profil/') . $user['foto_pengguna'];
                                                if (@getimagesize($url)) {
                                                    $urlImg = base_url("assets/images/profil/") . $user['foto_pengguna'];
                                                } else {
                                                    $urlImg = base_url("assets/img/system/undraw_profile.svg");
                                                }
                                            } else {
                                                $urlImg = base_url('assets/images/profil/') . $userr['foto_pengguna'];
                                            }
                                            ?>
                                            <img class="mx-auto mb-3 mt-3 rounded-circle border bg-dark" src="<?= $urlImg; ?>" style="object-fit: cover; height: 100px; width: 100px;">
                                        </div>
                                        <div class="col-12 text-dark d-flex">
                                            <p class="m-0 p-0 mx-auto"><?= $userr['nama_lengkap']; ?></p>
                                        </div>
                                        <div class="col-12 text-dark d-flex">
                                            <p class="m-0 p-0 mx-auto"><?= $userr['nomor_telepon']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="my-3 border-top col-12 d-flex d-md-none"></span>
                            <div class="col-12 col-md-6 d-flex m-0 p-0">
                                <span class="border d-none ml-n3 mr-3 d-md-flex"></span>
                                <div class="mx-auto d-flex">
                                    <div class="row d-flex w-100">
                                        <?php if (empty($userr['nomor_telepon'])) : ?>
                                            <div class="col-12 d-flex my-auto">
                                                <h4 class="text-warning text-center font-weight-light m-0 p-0 pb-3 mx-auto">Perhatian!</h4>
                                            </div>
                                            <div class="col-12 d-flex my-auto">
                                                <h6 class="text-muted text-center font-weight-light m-0 p-0 pb-3 mx-auto">Setel <span class="text-dark">"Nomor Telephone, Alamat, dan Daerah Pengiriman"</span> untuk menikmati Fitur Jasa Ekspedisi Kurir, Terimakasih.</h6>
                                            </div>
                                        <?php else : ?>
                                            <div class="col-12 d-flex">
                                                <h4 class="text-center m-0 p-0 pb-3 mx-auto"><i class="fa fa-map-marker fa-2x text-success pt-2"></i></h4>
                                            </div>
                                            <div class="col-12 text-secondary d-flex">
                                                <p class="m-0 p-0 mx-auto"><u>Alamat Pengiriman</u></p>
                                            </div>
                                            <div class="col-12 text-dark d-flex">
                                                <p class="m-0 p-0 mx-auto text-center"><?= $userr['alamat']; ?></p>
                                            </div>
                                            <div class="col-12 text-secondary d-flex mt-3">
                                                <p class="m-0 p-0 mx-auto"><u>Daerah Pengiriman</u></p>
                                            </div>
                                            <div class="col-12 text-dark d-flex mb-3">
                                                <p class="m-0 p-0 mx-auto text-center"><?php if (!empty($userr['province_name'])) : ?><?= $userr['alamat']; ?>, Kecamatan <?= $userr['subdistrict_name']; ?>, <?= $userr['city_name']; ?>, Provinsi <?= $userr['province_name']; ?><?php endif; ?></p>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-inline-flex w-100">
                            <a href="<?= base_url('Profile'); ?>" class="px-4 mx-auto btn btn-outline-secondary rounded-pill border-0"><i class="fa fa-pencil mr-1"></i> Ubah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card rounded shadow">
                    <div class="card-header">
                        <h4 class="text-center" id="produk">Sesuaikan Produk</h4>
                    </div>
                    <div class="card-body">
                        <section class="cart-area">
                            <div class="cart-inner">
                                <div class="">
                                    <table class=" table-responsive">
                                        <?php
                                        $subjumlah = 0;
                                        $jmlBarang = 0;
                                        ?>
                                        <?php if (!empty($barang)) : ?>
                                            <thead>
                                                <tr>
                                                    <th class="w-100">Keranjang Belanja</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($barang as $row) : ?>
                                                    <tr>
                                                        <td class="w-100">
                                                            <div class="card-body shadow-sm rounded d-flex mb-3">
                                                                <?php if (!empty($row->jumlah) && $row->jumlah >= 1 && $row->jumlah >= $row->jumlah_keranjang) : ?>
                                                                    <?php
                                                                    $subjumlah = $subjumlah + ($row->harga * $row->jumlah_keranjang);
                                                                    $jmlBarang++;
                                                                    ?>
                                                                    <div class="col-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <?php
                                                                            if (!empty($row->foto_hewan)) {
                                                                                $url = base_url("assets/images/daftar_hewan/") . "$row->foto_hewan";
                                                                                if (@getimagesize($url)) {
                                                                                    $urlImg = base_url("assets/images/daftar_hewan/$row->foto_hewan");
                                                                                } else {
                                                                                    $urlImg = base_url("assets/images/daftar_hewan/$row->foto_hewan");
                                                                                }
                                                                            } else {
                                                                                $urlImg = base_url('assets/images/daftar_hewan/') . 'no-img.png';
                                                                            }
                                                                            ?>
                                                                            <label for="<?= $row->hewan_id; ?>"><img class="shadow rounded" src="<?= $urlImg; ?>" style="width: 90px; height: 90px;"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-9 my-auto">
                                                                        <div class="row ml-3 ml-sm-0">
                                                                            <div class="col-12 my-2 d-flex w-100">

                                                                                <p class="text-dark font-weight-bolder d-block w-100 mr-auto"><?= $row->jenis; ?> (<?= $row->rincian; ?>)</p>

                                                                            </div>
                                                                            <div class="col-12 mt-1">
                                                                                <div class="row d-flex">
                                                                                    <div class="col-6 d-inline-flex">
                                                                                        <h4 class="text-primary font-weight-bold mt-1"><span class="d-block" style="min-width: 200px;">Rp <?= number_format($row->harga, 0, ",", ".") ?></span></h4>
                                                                                    </div>
                                                                                    <div class="col-6 d-inline-flex w-100">
                                                                                        <div class="product_count d-inline-flex ml-auto col-9">
                                                                                            <form id="updateForm" action="<?= base_url('keranjang/tambah'); ?>" method="POST">
                                                                                                <div class="form-group">
                                                                                                    <input type="hidden" name="product_id" value="<?= $row->hewan_id; ?>">
                                                                                                    <input type="number" onchange="this.form.submit()" min="1" max="<?= $row->jumlah; ?>" style="min-width: 40px;" class="form-control-sm text-center rounded w-100" name="cart_amount_item" id="cart_amount_item" value="<?= $row->jumlah_keranjang; ?>" title="Quantity :">
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <form class="ml-3" method="POST" action="<?= base_url('keranjang/hapus'); ?>">
                                                                                            <button name="product_id" type="submit" value="<?= $row->hewan_id; ?>" class="btn  btn-outline-danger"><i class="fa fa-trash"></i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php elseif ($row->jumlah < $row->jumlah_keranjang && $row->jumlah != 0) : ?>
                                                                    <?php
                                                                    $subjumlah = $subjumlah + ($row->harga * $row->jumlah);
                                                                    $jmlBarang++;
                                                                    ?>
                                                                    <div class="col-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <?php
                                                                            if (!empty($row->foto_hewan)) {
                                                                                $url = base_url("assets/images/daftar_hewan/") . "$row->foto_hewan";
                                                                                if (@getimagesize($url)) {
                                                                                    $urlImg = base_url("assets/images/daftar_hewan/$row->foto_hewan");
                                                                                } else {
                                                                                    $urlImg = base_url("assets/images/daftar_hewan/$row->foto_hewan");
                                                                                }
                                                                            } else {
                                                                                $urlImg = base_url('assets/images/daftar_hewan/') . 'no-img.png';
                                                                            }
                                                                            ?>
                                                                            <label for="<?= $row->hewan_id; ?>"><img class="shadow rounded" src="<?= $urlImg; ?>" style="width: 90px; height: 90px;"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-9 my-auto">
                                                                        <div class="row ml-3 ml-sm-0">
                                                                            <div class="col-12 my-2 d-flex w-100">
                                                                                <div class="media d-flex w-100">
                                                                                    <div class="media-body d-flex w-100">
                                                                                        <p class="text-dark font-weight-bolder d-block w-100 mr-auto"><?= $row->jenis; ?> <i class="fa fa-exclamation-circle text-warning" style="cursor: help;" title="Stok barang hanya tersisa <?= $row->jumlah; ?> (Barang dikeranjang <?= $row->jumlah_keranjang; ?>)"></i></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 mt-1">
                                                                                <div class="row d-flex">
                                                                                    <div class="col-6 d-inline-flex">
                                                                                        <h4 class="text-primary font-weight-bold mt-1"><span class="d-block" style="min-width: 200px;">Rp <?= number_format($row->harga, 0, ",", ".") ?></span></h4>
                                                                                    </div>
                                                                                    <div class="col-6 d-inline-flex w-100">
                                                                                        <div class="product_count d-inline-flex ml-auto">
                                                                                            <form id="updateForm" action="<?= base_url('keranjang/tambah'); ?>" method="POST">
                                                                                                <div class="form-group">
                                                                                                    <input type="hidden" name="product_id" value="<?= $row->hewan_id; ?>">
                                                                                                    <input type="number" onchange="this.form.submit()" min="1" max="<?= $row->jumlah; ?>" style="min-width: 40px;" class="form-control-sm text-center rounded w-100" name="cart_amount_item" id="cart_amount_item" value="<?= $row->jumlah; ?>" title="Quantity : *stok barang hanya tersisa <?= $row->jumlah; ?>">
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <form class="ml-3" method="POST" action="<?= base_url('keranjang/hapus'); ?>">
                                                                                            <button name="product_id" type="submit" value="<?= $row->hewan_id; ?>" class="btn border-0 btn-outline-danger rounded-circle"><i class="fa fa-trash"></i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php else : ?>
                                                                    <div class="col-3">
                                                                        <div class="d-flex align-items-center">
                                                                            <?php
                                                                            if (!empty($row->foto_hewan)) {
                                                                                $url = base_url("assets/images/daftar_hewan/") . "$row->foto_hewan";
                                                                                if (@getimagesize($url)) {
                                                                                    $urlImg = base_url("assets/images/daftar_hewan/$row->foto_hewan");
                                                                                } else {
                                                                                    $urlImg = base_url("assets/images/daftar_hewan/$row->foto_hewan");
                                                                                }
                                                                            } else {
                                                                                $urlImg = base_url('assets/images/daftar_hewan/') . 'no-img.png';
                                                                            }
                                                                            ?>
                                                                            <label for="<?= $row->hewan_id; ?>"><img class="shadow rounded" src="<?= $urlImg; ?>" style="width: 90px; height: 90px;"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-9 my-auto">
                                                                        <div class="row ml-3 ml-sm-0">
                                                                            <div class="col-12 my-2 d-flex w-100">
                                                                                <div class="media d-flex w-100">
                                                                                    <div class="media-body d-flex w-100">
                                                                                        <p class="text-muted font-weight-bolder d-block w-100 mr-auto"><?= $row->jenis; ?> </p>

                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 my-2">
                                                                                <div class="row d-flex">
                                                                                    <div class="col-6 d-inline-flex">
                                                                                        <h4 class="text-muted font-weight-bold mt-1"><span class="d-block" style="min-width: 200px;">Rp <?= number_format($row->harga, 0, ",", ".") ?></span></h4>
                                                                                    </div>
                                                                                    <div class="col-6 d-inline-flex w-100">
                                                                                        <div class="product_count d-inline-flex ml-auto">
                                                                                            <input class="text-danger font-weight-bolder" disabled type="text" value="HABIS" style="max-width: 65px;" title="Maaf stok habis, Barang ini tidak akan dicheckout">
                                                                                        </div>
                                                                                        <form class="ml-3" method="POST" action="<?= base_url('keranjang/hapus'); ?>">
                                                                                            <button name="product_id" type="submit" value="<?= $row->hewan_id; ?>" class="btn border-0 btn-outline-danger rounded-circle"><i class="fa fa-trash"></i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        <?php else : ?>
                                            <tr class="border-0">
                                                <td class="border-0"></td>
                                                <td class="border-0 w-100">
                                                    <h6 class="text-center font-weight-light">Keranjang anda kosong, <a class="text-primary text-hover" href="<?= base_url('hewanumuum'); ?>">Belanja sekarang!</a></h6>
                                                </td>
                                                <td class="border-0"></td>
                                            </tr>
                                        <?php endif ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <div class="cart-bottom">
                            <div class="row w-100">
                                <div class="col-12 ml-2 ml-sm-4">
                                    <div class="row">
                                        <div class="col-6 my-auto">
                                            <p class="my-auto ml-0 ml-md-2 text-dark">Subtotal</p>
                                        </div>
                                        <div class="col-6 my-auto d-flex w-100">
                                            <input type="hidden" value="<?= $subjumlah; ?>" name="subjumlah" id="subjumlah">
                                            <h5 class="ml-auto mr-0 mr-md-4">Rp <?= number_format($subjumlah, 0, ",", "."); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 px-0 px-lg-2 mb-5">
                <form action="<?= base_url('shop/keranjang/checkout'); ?>" method="POST">
                    <input type="hidden" name="customer_id" value="<?= $user['pengguna_id']; ?>">
                    <div class="card rounded shadow">
                        <div class="card-header">
                            <h4 class="text-center">Metode Pembayaran</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($pembayaran as $row) : ?>
                                <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                                    <label class="c-pointer" for="payment_method_id<?= $row->payment_method_id ?>"><img style="width: 80px; height: 80px; object-fit: cover;" src="<?= base_url('assets/img/pembayaran/'); ?><?= $row->payment_method_image ?>" class="bank-icon rounded-circle"> <?= $row->payment_method_name ?>
                                        <input required type="radio" class=" pixel-radio  ml-auto align-self-center mb-3" value="<?= $row->payment_method_id ?>" name="payment_method_id" id="payment_method_id<?= $row->payment_method_id ?>" type="radio"></input>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <hr>
                            <div class="cart-bottom">
                                <div class="row w-100">
                                    <div class="col-6 pl-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Total Harga</p>
                                            </div>
                                            <div class="col-12">
                                                <h5>Rp <span id="text_total"><?= number_format($subjumlah, 0, ",", "."); ?></span></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 align-self-center d-inline-flex p-0">
                                        <?php if (!empty($barang) && !empty($jmlBarang)) : ?>
                                            <input type="hidden" value="0" name="ongkir" id="ongkir">
                                            <input type="hidden" value="" name="nama_kurir" id="nama_kurir">
                                            <button type="submit" value="<?= $subjumlah; ?>" name="jumlah" id="jumlah" class="btn btn-primary rounded-pill ml-auto text-uppercase shadow d-inline-flex "> Bayar</button>
                                        <?php else : ?>
                                            <button disabled title="Tidak ada barang yang dipilih" class="btn btn-primary rounded-pill ml-auto text-uppercase shadow d-inline-flex px-4 py-2"><i class="fa fa-shopping-bag mr-2 pt-1"></i> Bayar</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
    <!-- Modal Start  -->
    <div class="modalquickview modal fade" id="quick-view" tabindex="-1" aria-labelledby="quick-view" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="btn close" data-bs-dismiss="modal">×</button>
                <div class="row">
                    <div class="col-md-6 col-12">

                        <!-- Product Details Image Start -->
                        <div class="modal-product-carousel">

                            <!-- Single Product Image Start -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <a class="swiper-slide" href="<?php echo base_url(); ?>#">
                                        <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/1.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="<?php echo base_url(); ?>#">
                                        <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/2.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="<?php echo base_url(); ?>#">
                                        <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/3.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="<?php echo base_url(); ?>#">
                                        <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/4.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="<?php echo base_url(); ?>#">
                                        <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/5.png" alt="Product">
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
                                <h2 class="product-title">Single Product Slider</h2>
                            </div>
                            <!-- Product Head End -->

                            <!-- Rating Start -->
                            <span class="rating justify-content-start mb-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                            <!-- Rating End -->

                            <!-- Price Box Start -->
                            <div class="price-box mb-2">
                                <span class="regular-price">$70.00</span>
                                <span class="old-price"><del>$85.00</del></span>
                            </div>
                            <!-- Price Box End -->

                            <!-- SKU Start -->
                            <div class="sku mb-3">
                                <span>SKU: 12345</span>
                            </div>
                            <!-- SKU End -->

                            <!-- Product Inventory Start -->
                            <div class="product-inventroy mb-3">
                                <span class="inventroy-title"> <strong>Availability:</strong></span>
                                <span class="inventory-varient">12 Left in Stock</span>
                            </div>
                            <!-- Product Inventory End -->

                            <!-- Description Start -->
                            <p class="desc-content mb-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <!-- Description End -->

                            <!-- Quantity Start -->
                            <div class="quantity d-flex align-items-center justify-content-start mb-5">
                                <span class="me-2"><strong>Qty: </strong></span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"></div>
                                    <div class="inc qtybutton"></div>
                                </div>
                            </div>
                            <!-- Quantity End -->

                            <!-- Cart Button Start -->
                            <div class="cart-btn action-btn mb-6">
                                <div class="action-cart-btn-wrapper d-flex justify-content-start">
                                    <div class="add-to_cart">
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="<?php echo base_url(); ?>cart.php">Add to cart</a>
                                    </div>
                                    <a href="<?php echo base_url(); ?>wishlist.php" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <!-- Cart Button End -->

                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <div class="widget-social justify-content-center mb-6">
                                    <a title="Twitter" href="<?php echo base_url(); ?>#/"><i class="icon-social-twitter"></i></a>
                                    <a title="Instagram" href="<?php echo base_url(); ?>#/"><i class="icon-social-instagram"></i></a>
                                    <a title="Linkedin" href="<?php echo base_url(); ?>#/"><i class="icon-social-linkedin"></i></a>
                                    <a title="Skype" href="<?php echo base_url(); ?>#/"><i class="icon-social-skype"></i></a>
                                    <a title="Dribble" href="<?php echo base_url(); ?>#/"><i class="icon-social-dribbble"></i></a>
                                </div>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Payment Option Start -->
                            <div class="payment-option mt-4 d-flex justify-content-start">
                                <span><strong>Payment: </strong></span>
                                <a href="<?php echo base_url(); ?>#">
                                    <img class="fit-image ms-1" src="<?php echo base_url(); ?>assets/images/payment/payment_large.png" alt="Payment Option Image">
                                </a>
                            </div>
                            <!-- Payment Option End -->

                        </div>
                        <!-- Product Summery End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End  -->

    <!-- Scroll Top Start -->
    <a href="<?php echo base_url(); ?>#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top ti-angle-double-up"></i>
        <i class="arrow-bottom ti-angle-double-up"></i>
    </a>
    <!-- Scroll Top End -->


    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->


    <script src="<?php echo base_url(); ?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Plugins JS -->


    <script src="<?php echo base_url(); ?>assets/js/plugins/aos.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/nice-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/countdown.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/lightgallery-all.min.js"></script>


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!-- 
    <script src="<?php echo base_url(); ?>assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins.min.js"></script>  
    -->

    <!--Main JS-->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>

</html>