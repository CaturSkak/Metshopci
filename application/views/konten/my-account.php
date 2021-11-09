    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Akun Saya</h2>
                        <ul>
                            <li><a href="index">Beranda</a></li>
                            <li>Akun Saya</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- My Account Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <div class="row">

                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Dashboard</a>
                                    <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Pesanan</a>
                                    <a href="#chat" data-bs-toggle="tab"><i class="fa fa-envelope"></i> Pesan</a>
                                    <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Metode Pembayaran</a>
                                    <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> Alamat</a>
                                    <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i>Detail Akun</a>
                                    <a href="login"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Dashboard</h3>
                                            <div class="welcome">
                                                <p>Halo, <strong>Jhony Sins</strong> (Jika Bukan <strong>Jhony !</strong><a href="login" class="logout"> Logout</a>)</p>
                                            </div>
                                            <p class="mb-0">Dari Akun dashboard anda. Anda dapat dengan mudah memeriksa & melihat pesanan terbaru Anda, mengelola alamat pengiriman dan penagihan Anda, serta mengedit kata sandi dan detail akun Anda.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Pesanan</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table tfable-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Nomor Pesanan</th>
                                                            <th>Tanggal</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Detail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>21 Feb 2021</td>
                                                            <td>Belum dikonfirmasi</td>
                                                            <td>Rp.6.000.000</td>
                                                            <td><a href="konfirmasipesanan" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>12 Maret 2021</td>
                                                            <td>Belum dikonfirmasi</td>
                                                            <td>Rp.5.740.000</td>
                                                            <td><a href="konfirmasipesanan" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>22 Juli, 2021</td>
                                                            <td>Sudah Lunas</td>
                                                            <td>Rp.2.000.000</td>
                                                            <td><a href="konfirmasipesanan" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">Lihat</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>12 Juni, 2019</td>
                                                            <td>Belum dikonfirmasi</td>
                                                            <td>Rp.1.000.000</td>
                                                            <td><a href="konfirmasipesanan" class="btn btn btn-dark btn-hover-primary btn-sm rounded-0">Lihat</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                   
 <!-- Single Tab Content Start -->
 <div class="tab-pane fade" id="chat" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Pesan</h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                           

    <div  >
   
        <div class="container-fluid">            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card chat-appp ">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <div class="row clearfix">
                                    <div class="col-lg-6">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                               
                                               <img width="50px" style="border-radius: 100px; -moz-border-radius: 100px;" src="<?php echo base_url();?>assets/images/logo.png" alt="avatar" />
                                               <h6 class="m-b-0 chat-about">Admin </h6> <br>                                   
                                               <small  > &nbsp; Terlihat : 2 Menit  lalu</small>
                                            </a>
                                       
                                          
                                            
                                        
                                    </div>
                                    <div class="col-lg-6 hidden-sm text-left" >
                                        <a class="float-right" href="javascript:void(0);" class="btn btn-secondary"><i class="icon-camera "></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="chat-history">
                                <ul class="m-b-0">
                                    
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time float-right">10:12 WIB, Hari Ini</span>
                                        </div><br>
                                        <div class="message other-message float-right">Halo Apakah Kucing Ini Sehat ?</div>                                    
                                    </li>                               
                                    <li class="clearfix ">
                                        <div class="message-data">
                                            <img width="50px" style="border-radius: 100px; -moz-border-radius: 100px;" src="<?php echo base_url();?>assets/images/logo.png" alt="avatar">
                                            <span class="message-data-time ">10:15 WIB, Hari Ini</span>
                                        </div>
                                        <div class="message my-message">Iya, Batul Kucing ini sangat sehat !</div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="message-data text-right">
                                            <span class="message-data-time float-right">10:17 WIB, Hari Ini</span>
                                        </div><br>
                                        <div class="message other-message float-right">Saya Ingin Membeli kucing ini apakah ready ?. </div>                                    
                                    </li> 
                                    <li class="clearfix">
                                        <div class="message-data">
                                            <img width="50px" style="border-radius: 100px; -moz-border-radius: 100px;" src="<?php echo base_url();?>assets/images/logo.png" alt="avatar">
                                            <span class="message-data-time" >10:10 WIB, Hari Ini</span>
                                        </div>
                                        <div class="message my-message"> Oh, ya kak ready silahkan kakak ke menu beli untuk memesan nya.</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">
                                    
                                    <textarea type="text" row="4" class="form-control" placeholder="Tulis Pesan anda Disini..."></textarea>
                                    <div class="input-group-prepend">
                                        <span class="btn btn input-group-text"><i class="icon-paper-plane"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="plist" class="people-list">
                           
                            <ul class="right_chat list-unstyled mb-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                        <div class="widget-list">
                                <h3 class="widget-title mb-6">Produk Terkini</h3>
                                <div class="sidebar-body product-list-wrapper mb-n6">

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="liathewanjodoh" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url();?>assets/images/products/medium-product/kucing.png" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="liathewanjodoh">Kucing Anggora Asli</a>
                                            </h6>
                                            <span class="price">
                                                    <span class="new" >Rp.350.000</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="liathewanjodoh" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url();?>assets/images/products/medium-product/shiba inu.png" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->

                                        <!-- Product List Content Start -->
                                        <div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="liathewanjodoh">Anjing Shiba Inu</a>
                                            </h6>
                                            <span class="price">
                                                    <span class="new">Rp.6.150.000</span>
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list mb-6">

                                        <!-- Product List Thumb Start -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="liathewanjodoh" class="image">
                                                    <img class="fit-image first-image" src="<?php echo base_url();?>assets/images/products/medium-product/koren.png" alt="Product Image">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Product List Thumb End -->
<!-- Product List Content Start -->
<div class="product-list-content">
                                            <h6 class="product-name">
                                                <a href="liathewanjodoh">Kucing Mainecoon</a>
                                            </h6>
                                            <span class="price">
                                                    <span class="new">Rp.550.000</span>
                                            
                                            </span>
                                        </div>
                                        <!-- Product List Content End -->

                                        </div>
                                        </div>
                                        </div>
                                        <!-- Product List Thumb End -->
                                        </div>
                                    </a>                            
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
<script src="light/assets/bundles/libscripts.bundle.js"></script>    
<script src="light/assets/bundles/vendorscripts.bundle.js"></script>

<script src="light/assets/bundles/easypiechart.bundle.js"></script><!-- easypiechart Plugin Js -->
<script src="../light/assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 

<script src="light/assets/bundles/mainscripts.bundle.js"></script>
<script src="light/assets/js/pages/ui/dialogs.js"></script>


<!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Metode Pembayaran</h3>
                                            
                                            <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                                <label class="fit-image ms-1">
                                    
                                <a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><img src="<?php echo base_url();?>assets/images/payment/oppo.png" class="bank-icon rounded-circle"><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ovo</strong> </label>
                                
                            </div>

                             <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                                <label class="fit-image ms-1"><a> &nbsp;&nbsp;</a><img src="<?php echo base_url();?>assets/images/payment/gopay.png" class="bank-icon rounded-circle"><strong> &nbsp;&nbsp;&nbsp;&nbsp;Gopay</strong> </label>
                                
                            </div>

                             <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                                <label class="fit-image ms-1"><a> &nbsp;&nbsp;</a><img src="<?php echo base_url();?>assets/images/payment/mdr.png" class="bank-icon rounded-circle"><strong> &nbsp;&nbsp;Mandiri</strong> </label>
                                
                            </div>

                              <div class="card-body shadow-sm rounded d-flex mb-3" id="card-bank">
                                <label class="fit-image ms-1"><a> &nbsp;&nbsp;&nbsp;&nbsp;</a><img src="<?php echo base_url();?>assets/images/payment/bnii.png" class="bank-icon rounded-circle"><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BNI</strong> </label>
                                
                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                              

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Alamat</h3>
                                            <address>
                                                <p><strong>Alex Aya</strong></p>
                                                <p>Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang Ploso, Malang, Jawa Timur 65152</p>
                                                <p>Telepon: 082229434533</p>
                                            </address>
                                            <a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i class="fa fa-edit me-2"></i>Edit Alamat</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3 class="title">Detail akun</h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item mb-3">
                                                                <label for="first-name" class="required mb-2">Nama Depan</label>
                                                                <input type="text" id="first-name" placeholder="Syamsul" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item mb-3">
                                                                <label for="last-name" class="required mb-2">Nama Belakang</label>
                                                                <input type="text" id="last-name" placeholder="Arifin" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="display-name" class="required mb-2">Nama Tampilan</label>
                                                        <input type="text" id="display-name" placeholder="Syamsul" />
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1">Email Addres</label>
                                                        <input type="email" id="email" placeholder="syamsularifin@gmail.com" />
                                                    </div>
                                                    <fieldset>
                                                        <legend>Ubah Password</legend>
                                                        <div class="single-input-item mb-3">
                                                            <label for="current-pwd" class="required mb-2">Password Lama</label>
                                                            <input type="password" id="current-pwd" placeholder="asadsdadasdad" readonly/>
                                                        </div>
                                                        <div class="row mb-n3">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="new-pwd" class="required mb-2">Password Baru</label>
                                                                    <input type="password" id="new-pwd" placeholder="password baru" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="confirm-pwd" class="required mb-2">Confirm Password</label>
                                                                    <input type="password" id="confirm-pwd" placeholder="Confirm Password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item single-item-button mt-6">
                                                        <button class="btn btn btn-primary btn-hover-dark rounded-0">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->

                                </div>
                            </div>
                            <!-- My Account Tab Content End -->

                        </div>
                    </div>
                    <!-- My Account Page End -->

                </div>
            </div>

        </div>
    </div>
    <!-- My Account Section End -->


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
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/1.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/2.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/3.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/4.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="#">
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/5.png" alt="Product">
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
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="cart">Add to cart</a>
                                    </div>
                                    <a href="wishlist" title="Wishlist" class="action"><i class="ti-heart"></i></a>
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
                                    <a title="Dribble" href="#/"><i class="icon-social-dribbble"></i></a>
                                </div>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Payment Option Start -->
                            <div class="payment-option mt-4 d-flex justify-content-start">
                                <span><strong>Payment: </strong></span>
                                <a href="#">
                                    <img class="fit-image ms-1" src="<?php echo base_url();?>assets/images/payment/payment_large.png" alt="Payment Option Image">
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
                                    <li><a href="index">Home One</a></li>
                                    <li><a href="index-2">Home Two</a></li>
                                    <li><a href="index-3">Home Three</a></li>
                                    <li><a href="index-4">Home Four</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="shop">Shop Grid</a></li>
                                    <li><a href="shop-left-sidebar">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-fullwidth">Shop List Fullwidth</a></li>
                                    <li><a href="shop-list-left-sidebar">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar">Shop List Right Sidebar</a></li>
                                    <li><a href="wishlist">Wishlist</a></li>
                                    <li><a href="cart">Shopping Cart</a></li>
                                    <li><a href="checkout">Checkout</a></li>
                                    <li><a href="compare">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="single-product">Single Product</a></li>
                                    <li><a href="single-product-sale">Single Product Sale</a></li>
                                    <li><a href="single-product-group">Single Product Group</a></li>
                                    <li><a href="single-product-normal">Single Product Normal</a></li>
                                    <li><a href="single-product-affiliate">Single Product Affiliate</a></li>
                                    <li><a href="single-product-slider">Single Product Slider</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="faq">Faq</a></li>
                                    <li><a href="error-404">Error 404</a></li>
                                    <li><a href="my-account">My Account</a></li>
                                    <li><a href="login">Login | Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="blog">Blog</a></li>
                                    <li><a href="blog-left-sidebar">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details">Blog Details</a></li>
                                    <li><a href="blog-details-sidebar">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="about">About</a></li>
                            <li><a href="contact">Contact</a></li>
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

