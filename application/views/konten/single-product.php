<!DOCTYPE html>
<html lang="en">


<!-- Breadcrumb Area Start -->
<div class="section breadcrumb-area bg-bright">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-wrapper">
                    <h2 class="breadcrumb-title">Lihat Produk</h2>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>index">Beranda</a></li>
                        <li>Hewan Peliharaan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

<!-- Single Product Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2">

                <!-- Product Details Image Start -->
                <div class="product-details-img">

                    <!-- Single Product Image Start -->
                    <div class="single-product-img swiper-container product-gallery-top">
                        <div class="swiper-wrapper popup-gallery">

                            <a class="swiper-slide w-100" href="<?php echo base_url(); ?>assets/images/daftar_hewan/<?php echo $ambil->foto_hewan; ?>">
                                <img class="w-100" src="<?php echo base_url(); ?>assets/images/daftar_hewan/<?php echo $ambil->foto_hewan; ?>" alt="Product" style="width: 600px; height: 600px; object-fit: cover;">
                            </a>
                            <!-- <a class="swiper-slide w-100" href="<?php echo base_url(); ?>assets/images/products/medium-product/kucing_persia_putih_jantan.jpg">
                                    <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/medium-product/kucing_persia_putih_jantan.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url(); ?>assets/images/products/medium-product/735_5.jpg">
                                    <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/medium-product/735_5.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url(); ?>assets/images/products/medium-product/putih.jpg">
                                    <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/medium-product/putih.jpg" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url(); ?>assets/images/products/large-product/5.png">
                                    <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/5.png" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url(); ?>assets/images/products/large-product/6.png">
                                    <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/6.png" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url(); ?>assets/images/products/large-product/7.png">
                                    <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/7.png" alt="Product">
                                </a>
                                <a class="swiper-slide w-100" href="<?php echo base_url(); ?>assets/images/products/large-product/8.png">
                                    <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/8.png" alt="Product">
                                </a> -->

                        </div>
                    </div>
                    <!-- Single Product Image End -->

                    <!-- Single Product Thumb Start -->
                    <div class="single-product-thumb swiper-container product-gallery-thumbs">
                        <!-- <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/images/products/medium-product/kucing_persia_putih_jantan.jpg" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/images/products/medium-product/735_5.jpg" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/images/products/medium-product/putih.jpg" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/images/products/medium-plus-product/4.png" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/images/products/medium-plus-product/5.png" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/images/products/medium-plus-product/6.png" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/images/products/medium-plus-product/7.png" alt="Product">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/images/products/medium-plus-product/8.png" alt="Product">
                            </div>
                        </div> -->

                        <!-- Next Previous Button Start -->
                        <div class="swiper-button-next swiper-nav-button"><i class="ti-arrow-right"></i></div>
                        <div class="swiper-button-prev swiper-nav-button"><i class="ti-arrow-left"></i></div>
                        <!-- Next Previous Button End -->

                    </div>
                    <!-- Single Product Thumb End -->

                </div>
                <!-- Product Details Image End -->

            </div>

            <div class="col-lg-7">

                <!-- Product Summery Start -->
                <div class="product-summery position-relative">

                    <!-- Product Head Start -->
                    <div class="product-head mb-3">
                        <h2 class="product-title"><?php echo $ambil->jenis; ?></h2>
                    </div>
                    <!-- Product Head End -->

                    <!-- Rating Start -->
                    <!-- <span class="rating justify-content-start mb-2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </span> -->
                    <!-- Rating End -->

                    <!-- Price Box Start -->
                    <div class="price-box mb-2">
                        <span class="regular-price">Rp.<?php echo number_format($ambil->harga); ?> </span>
                    </div>
                    <!-- Price Box End -->

                    <!-- SKU Start -->
                    <div class="sku mb-3">
                        <span>Kategori</span>
                        <span><?php echo $ambil->jenis_hewan; ?></span>
                    </div>
                    <!-- SKU End -->

                    <!-- Product Inventory Start -->
                    <div class="product-inventroy mb-3">
                        <span class="inventroy-title"> <strong>Info :</strong></span>
                        <span class="inventory-varient">Tersedia</span>
                    </div>
                    <!-- Product Inventory End -->
                    <div class="product-inventroy mb-3">
                        <span class="inventroy-title"> <strong>Jumlah:</strong></span>
                        <span class="inventory-varient">12 Ekor</span>
                    </div>
                    <div class="sku mb-3">
                        <span>Jenis Kelamin</span>
                        <span> <?= $ambil->jenis_kelamin; ?></span>
                    </div>
                    <!-- Description Start -->
                    <div class="product-inventroy mb-3">
                        <?= $ambil->deskripsi; ?>
                    </div>
                    <!-- Description End -->

                    <!-- Quantity Start -->
                    <div class="quantity d-flex align-items-center mb-5">
                        <span class="me-2"><strong>Jumlah : </strong></span>
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" value="1" type="text">
                            <div class="dec qtybutton"></div>
                            <div class="inc qtybutton"></div>
                        </div>
                    </div>
                    <!-- Quantity End -->

                    <!-- Cart Button Start -->
                    <div class="cart-btn action-btn mb-6">
                        <div class="action-cart-btn-wrapper d-flex">
                            <div class="add-to_cart">
                                <a class="btn btn-primary btn-hover-dark rounded-0" href="<?php echo base_url(); ?>cart">Masukkan Keranjang</a>
                            </div>
                            <a href="<?php echo base_url(); ?>wishlist" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                        </div>
                    </div>
                    <!-- Cart Button End -->

                    <!-- Social Shear Start -->
                    <!-- <div class="social-share">
                        <div class="widget-social justify-content-start mb-6">
                            <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                            <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                            <a title="Whatsapps" href="<?php echo base_url(); ?>https://api.whatsapp.com/send?phone=628222943533&text=Saya%20berminat%20memesan%20Apakah%20produk%20tersedia?"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div> -->
                    <!-- Social Shear End -->

                    <div class="payment-option mt-4 d-flex justify-content-start">
                        <span><strong>Pembayaran: </strong></span>
                        <br>

                    </div>
                    <div class="mb-3">
                        <table>
                            <thead>
                                <tr>
                                    <?php foreach ($pembayaran->result_array() as $a) { ?>
                                        <th>

                                            <img src="<?php echo base_url(); ?>assets/img/pembayaran/<?php echo $a['payment_method_image']; ?>" alt="Product" style="width: 80px; height: 80px; object-fit: cover;">

                                        </th>
                                    <?php } ?>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
                <!-- Product Summery End -->

            </div>

        </div>
    </div>
</div>
<!-- Single Product Section End -->

<!-- Single Product Tab Start -->
<div class="section section-padding bg-bright">
    <div class="container">
        <div class="row">

            <!-- Single Product Tab Start -->
            <div class="col-lg-12 single-product-tab">
                <ul class="nav nav-tabs mb-n3" id="myTab" role="tablist">
                    <li class="nav-item mb-3">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Deskripsi</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Ulasan</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false">Aturan Pengiriman</a>
                    </li>

                </ul>

                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                        <div class="desc-content">
                            <p><b>DESKRIPSI HEWAN :</b></p>
                            <p><?php echo $ambil->jenis; ?></p>
                            <p>Kategori <?php echo $ambil->jenis_hewan; ?></p>
                            <p>Umur 3-4 Bulan</p>
                            <p>Tersedia</p>
                            <p>Jumlah 12 ekor</p>
                            <p>Jenis Kelamin <?= $ambil->jenis_kelamin; ?></p>
                            <?= $ambil->deskripsi; ?>
                            <p>Melayani Pengiriman Luar Kota Dan Dalam Kota</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Start Single Content -->
                        <div class="product_tab_content mt-8 p-3 border">

                            <!-- Start Single Review -->
                            <div class="single-review d-flex mb-4">

                                <!-- Review Thumb Start -->
                                <div class="review_thumb">
                                    <img alt="review images" src="<?php echo base_url(); ?>assets/images/testimonial/kayes.jpg">
                                </div>
                                <!-- Review Thumb End -->

                                <!-- Review Details Start -->
                                <div class="review_details">
                                    <div class="review_info mb-2">

                                        <!-- Rating Start -->
                                        <span class="rating justify-content-start mb-3">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                        <!-- Rating End -->

                                        <!-- Review Title & Date Start -->
                                        <div class="review-title-date d-flex">
                                            <h5 class="title">Kayess - </h5><span> 21 Januari, 2020</span>
                                        </div>
                                        <!-- Review Title & Date End -->

                                    </div>
                                    <p>kittennya bagus, bersih gaada kutu, bagus banget beli disini!!</p>
                                </div>
                                <!-- Review Details End -->

                            </div>
                            <!-- End Single Review -->

                            <!-- Rating Wrap Start -->
                            <div class="rating_wrap">
                                <h5 class="rating-title mb-2">Tambah Ulasan </h5>
                                <p class="mb-2">Alamat email Anda tidak akan dipublikasikan. Bidang yang harus diisi ditandai *</p>
                                <h6 class="rating-sub-title mb-2">Rating</h6>

                                <!-- Rating Start -->
                                <span class="rating justify-content-start mb-3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <!-- Rating End -->

                            </div>
                            <!-- Rating Wrap End -->

                            <!-- Comments ans Replay Start -->
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12 ">

                                        <!-- Comment form Start -->
                                        <form action="#" class="comment-form-area">
                                            <div class="row comment-input">

                                                <!-- Input Name Start -->
                                                <div class="col-md-6 comment-form-author mb-3">
                                                    <label>Nama</label>
                                                    <input type="text" required="required" name="Name">
                                                </div>
                                                <!-- Input Name End -->

                                                <!-- Input Email Start -->
                                                <div class="col-md-6 comment-form-emai mb-3">
                                                    <label>Email</label>
                                                    <input type="text" required="required" name="email">
                                                </div>
                                                <!-- Input Email End -->

                                            </div>
                                            <!-- Comment Texarea Start -->
                                            <div class="comment-form-comment mb-3">
                                                <label>Komentar</label>
                                                <textarea class="comment-notes" required="required"></textarea>
                                            </div>
                                            <!-- Comment Texarea End -->

                                            <!-- Comment Submit Button Start -->
                                            <div class="comment-form-submit">
                                                <button class="btn btn-primary btn-hover-dark border-0">Kirim</button>
                                            </div>
                                            <!-- Comment Submit Button End -->

                                        </form>
                                        <!-- Comment form End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Comments ans Replay End -->

                        </div>
                        <!-- End Single Content -->
                    </div>
                    <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- Shipping Policy Start -->
                        <div class="shipping-policy mt-8 mb-n3">
                            <h4 class="title mb-4">ATURAN PENGIRIMAN</h4>
                            <p class="mb-3">Kami melayani pengiriman hewan kesayangan anda mulai dari penjemputan di tempat anda sampai ke pelabuhan / stasiun / airport atau penjemputan hewan kesayangan anda dari pelabuhan / stasiun /airport, proses administrasi, keperluan dokumen-dokumen, karantina hingga hewan kesayangan anda tiba di rumah anda.
                                Didukung dengan pengalaman kami di bidang ini maka kami dapat menjamin suatu pelayanan yang cepat, efisien dan aman.</p>
                            <ul class="policy-list mb-3">
                                <li>Menyediakan Kandang / Kennel Box</li>
                                <li><a href="#">Free Tempat Makan & Minum</a></li>
                                <li>Free Makanan, Snack & Vitamin Selama Perjalanan</li>
                                <li>Free Survey & Konsultasi (Jakarta, Bandung, Surabaya, Jogjakarta, Bali, Medan)</li>
                                <li>Harga Sudah Termasuk Pengurusan Dokumen Karantina, Cek Darah & Kesehatan, Perawatan & Pengiriman Cargo</li>
                                <li>pilihan Pengiriman via Udara, Pengiriman via Laut, Pengiriman via Kereta Api, Pengiriman via Mobil </li>
                            </ul>
                            <p class="mb-3">Catatan :
                                Booking Fee tidak dapat dibatalkan / dikembalikan / digantikan dengan alasan apapun
                                Perubahan waktu / hari keberangkatan minimal 7 hari sebelum hari H dan akan dikenakan biaya tambahan apabila proses sudah berjalan
                                Tidak ada pembayaran langsung melalui kurir / pegawai saat penjemputan atau pengantaran hewan.
                                Customer sudah setuju & mengerti dengan segala ketentuan diatas.</p>
                        </div>
                        <!-- Shipping Policy End -->
                    </div>
                    <!-- Single Product Tab End -->

                </div>
            </div>
        </div>
        <!-- Single Product Tab End -->

        <!-- Product Section Start -->
        <div class="section section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 class="title">Produk Lainnya</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col">

                        <div class="product-carousel arrow-outside-container">
                            <div class="swiper-container">

                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <!-- Product Start -->
                                        <div class="product-wrapper">
                                            <div class="product">
                                                <!-- Thumb Start  -->
                                                <div class="thumb">
                                                    <a href="<?php echo base_url(); ?>single-product" class="image">
                                                        <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/kucing.png" alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="sale">-18%</span>
                                                    </span>
                                                    <div class="action-wrapper">
                                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                        <a href="<?php echo base_url(); ?>wishlist" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                        <a href="<?php echo base_url(); ?>cart" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Thumb End  -->

                                                <!-- Content Start  -->
                                                <div class="content">
                                                    <h5 class="title"><a href="<?php echo base_url(); ?>singleproduct">Kucing Anggora Asli</a></h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">Rp.5.740.000</span>
                                                        <span class="old">Rp.7.000.000</span>
                                                    </span>
                                                </div>
                                                <!-- Content End  -->
                                            </div>
                                        </div>
                                        <!-- Product End -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Product Start -->
                                        <div class="product-wrapper">
                                            <div class="product">
                                                <!-- Thumb Start  -->
                                                <div class="thumb">
                                                    <a href="<?php echo base_url(); ?>singleproduct" class="image">
                                                        <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/AnggoraMp.png" alt="Product" />
                                                    </a>
                                                    <div class="action-wrapper">
                                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                        <a href="<?php echo base_url(); ?>wishlist" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                        <a href="<?php echo base_url(); ?>cart" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Thumb End  -->

                                                <!-- Content Start  -->
                                                <div class="content">
                                                    <h5 class="title"><a href="<?php echo base_url(); ?>singleproduct">Kucing Anggora mix Persia</a></h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">Rp.4.000.000</span>
                                                    </span>
                                                </div>
                                                <!-- Content End  -->
                                            </div>
                                        </div>
                                        <!-- Product End -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Product Start -->
                                        <div class="product-wrapper">
                                            <div class="product">
                                                <!-- Thumb Start  -->
                                                <div class="thumb">
                                                    <a href="<?php echo base_url(); ?>single-product" class="image">
                                                        <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/koren.png" alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="sale">-20%</span>
                                                    </span>
                                                    <div class="action-wrapper">
                                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                        <a href="<?php echo base_url(); ?>wishlist" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                        <a href="<?php echo base_url(); ?>cart" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Thumb End  -->

                                                <!-- Content Start  -->
                                                <div class="content">
                                                    <h5 class="title"><a href="<?php echo base_url(); ?>single-product">Kucing Mainecoon</a></h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">Rp.14.760.000</span>
                                                        <span class="old">Rp.18.000.000</span>
                                                    </span>
                                                </div>
                                                <!-- Content End  -->
                                            </div>
                                        </div>
                                        <!-- Product End -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Product Start -->
                                        <div class="product-wrapper">
                                            <div class="product">
                                                <!-- Thumb Start  -->
                                                <div class="thumb">
                                                    <a href="<?php echo base_url(); ?>single-product" class="image">
                                                        <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/alaskan malamute.png" alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="sale">-18%</span>
                                                    </span>
                                                    <div class="action-wrapper">
                                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                                        <a href="<?php echo base_url(); ?>wishlist" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                        <a href="<?php echo base_url(); ?>cart" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Thumb End  -->

                                                <!-- Content Start  -->
                                                <div class="content">
                                                    <h5 class="title"><a href="<?php echo base_url(); ?>single-product">Anjing Alasakan Malamute</a></h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">Rp.15.000.000</span>

                                                    </span>
                                                </div>
                                                <!-- Content End  -->
                                            </div>
                                        </div>
                                        <!-- Product End -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Product Start -->
                                        <div class="product-wrapper">
                                            <div class="product">
                                                <!-- Thumb Start  -->
                                                <div class="thumb">
                                                    <a href="<?php echo base_url(); ?>single-product" class="image">
                                                        <img class="fit-image" src="<?php echo base_url(); ?>assets/images/products/medium-product/siberia husky.png" alt="Product" />
                                                    </a>
                                                    <span class="badges">
                                                        <span class="new">New</span>
                                                    </span>
                                                    <div class="action-wrapper">
                                                        <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                        <a href="<?php echo base_url(); ?>wishlist" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                        <a href="<?php echo base_url(); ?>cart" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                                <!-- Thumb End  -->

                                                <!-- Content Start  -->
                                                <div class="content">
                                                    <h5 class="title"><a href="<?php echo base_url(); ?>single-product">Anjing Siberian Husky</a></h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new">Rp.3.200.000</span>
                                                        <span class="old">Rp.4.000.000</span>
                                                    </span>
                                                </div>
                                                <!-- Content End  -->
                                            </div>
                                        </div>
                                        <!-- Product End -->
                                    </div>

                                </div>

                                <div class="swiper-pagination d-block d-md-none"></div>
                                <div class="swiper-button-prev swiper-nav-button d-none d-md-flex"><i class="ti-angle-left"></i></div>
                                <div class="swiper-button-next swiper-nav-button d-none d-md-flex"><i class="ti-angle-right"></i></div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Product Section End -->


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
                                        <a class="swiper-slide" href="#">
                                            <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/1.png" alt="Product">
                                        </a>
                                        <a class="swiper-slide" href="#">
                                            <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/2.png" alt="Product">
                                        </a>
                                        <a class="swiper-slide" href="#">
                                            <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/3.png" alt="Product">
                                        </a>
                                        <a class="swiper-slide" href="#">
                                            <img class="w-100" src="<?php echo base_url(); ?>assets/images/products/large-product/4.png" alt="Product">
                                        </a>
                                        <a class="swiper-slide" href="#">
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
                                            <a class="btn btn-primary btn-hover-dark rounded-0" href="<?php echo base_url(); ?>cart">Add to cart</a>
                                        </div>
                                        <a href="<?php echo base_url(); ?>wishlist" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                                <!-- Cart Button End -->

                                <!-- Social Shear Start -->
                                <div class="social-share">
                                    <div class="widget-social justify-content-center mb-6">
                                        <a title="Twitter" href="#/"><i class="icon-social-twitter"></i></a>
                                        <a title="Instagram" href="#/"><i class="icon-social-instagram"></i></a>
                                        <a title="Linkedin" href="#/"><i class="icon-social-linkedin"></i></a>
                                        <a title="Skype" href="#/"><i class="icon-social-skype"></i></a>
                                        <a title="Whatsapps" href="<?php echo base_url(); ?>https://api.whatsapp.com/send?phone=6282264144712&text=Saya%20berminat%20memesan%20Apakah%20produk%20tersedia?"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                                <!-- Social Shear End -->

                                <!-- Payment Option Start -->
                                <div class="payment-option mt-4 d-flex justify-content-start">
                                    <span><strong>Payment: </strong></span>
                                    <a href="#">
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
        <a href="#" class="scroll-top show" id="scroll-top">
            <i class="arrow-top ti-angle-double-up"></i>
            <i class="arrow-bottom ti-angle-double-up"></i>
        </a>
        <!-- Scroll Top End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="fa fa-times"></i>
                </div>
                <!-- Button Close End -->

                <!-- Mobile Menu Inner Wrapper Start -->
                <div class="mobile-menu-inner-wrapper">
                    <!-- Mobile Menu Search Box Start -->
                    <div class="search-box-offcanvas">
                        <form>
                            <input class="search-input-offcanvas" type="text" placeholder="Search product...">
                            <button class="search-btn"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <!-- Mobile Menu Search Box End -->

                    <!-- Mobile Menu Start -->
                    <div class="mobile-navigation">
                        <nav>
                            <ul class="mobile-menu">
                                <li class="has-children">
                                    <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url(); ?>index">Home One</a></li>
                                        <li><a href="<?php echo base_url(); ?>index-2">Home Two</a></li>
                                        <li><a href="<?php echo base_url(); ?>index-3">Home Three</a></li>
                                        <li><a href="<?php echo base_url(); ?>index-4">Home Four</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url(); ?>shop">Shop Grid</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop-left-sidebar">Shop Left Sidebar</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop-right-sidebar">Shop Right Sidebar</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop-list-fullwidth">Shop List Fullwidth</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop-list-left-sidebar">Shop List Left Sidebar</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop-list-right-sidebar">Shop List Right Sidebar</a></li>
                                        <li><a href="<?php echo base_url(); ?>wishlist">Wishlist</a></li>
                                        <li><a href="<?php echo base_url(); ?>cart">Shopping Cart</a></li>
                                        <li><a href="<?php echo base_url(); ?>checkout">Checkout</a></li>
                                        <li><a href="<?php echo base_url(); ?>compare">Compare</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url(); ?>single-product">Single Product</a></li>
                                        <li><a href="<?php echo base_url(); ?>single-product-sale">Single Product Sale</a></li>
                                        <li><a href="<?php echo base_url(); ?>single-product-group">Single Product Group</a></li>
                                        <li><a href="<?php echo base_url(); ?>single-product-normal">Single Product Normal</a></li>
                                        <li><a href="<?php echo base_url(); ?>single-product-affiliate">Single Product Affiliate</a></li>
                                        <li><a href="<?php echo base_url(); ?>single-product-slider">Single Product Slider</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                        <li><a href="<?php echo base_url(); ?>faq">Faq</a></li>
                                        <li><a href="<?php echo base_url(); ?>error-404">Error 404</a></li>
                                        <li><a href="<?php echo base_url(); ?>my-account">My Account</a></li>
                                        <li><a href="<?php echo base_url(); ?>login">Login | Register</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
                                        <li><a href="<?php echo base_url(); ?>blog-left-sidebar">Blog Left Sidebar</a></li>
                                        <li><a href="<?php echo base_url(); ?>blog-right-sidebar">Blog Right Sidebar</a></li>
                                        <li><a href="<?php echo base_url(); ?>blog-details">Blog Details</a></li>
                                        <li><a href="<?php echo base_url(); ?>blog-details-sidebar">Blog Details Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>about">About</a></li>
                                <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Mobile Menu End -->

                    <!-- Language, Currency & Link Start -->
                    <div class="offcanvas-lag-curr mb-6">
                        <div class="header-top-lan-curr-link">
                            <div class="header-top-lan dropdown">
                                <h4 class="title">Language:</h4>
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Japanese</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">Romanian</a></li>
                                </ul>
                            </div>
                            <div class="header-top-curr dropdown">
                                <h4 class="title">Currency:</h4>
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Language, Currency & Link End -->

                    <!-- Contact Links/Social Links Start -->
                    <div class="mt-auto bottom-0">

                        <!-- Contact Links Start -->
                        <ul class="contact-links">
                            <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                            <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                        </ul>
                        <!-- Contact Links End -->

                        <!-- Social Widget Start -->
                        <div class="widget-social">
                            <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                            <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                        </div>
                        <!-- Social Widget Ende -->
                    </div>
                    <!-- Contact Links/Social Links End -->
                </div>
                <!-- Mobile Menu Inner Wrapper End -->

            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

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