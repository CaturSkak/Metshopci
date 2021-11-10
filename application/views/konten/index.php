

    <div class="section">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">

                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="<?php echo base_url();?>assets/images/slider/slider1-1.png" alt="Slider Image" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-start">
                            <h5 class="sub-title">MetShop Pet's</h5>
                            <h2 class="title m-0">Penjodohan Hewan Peliharaan</h2>
                            <p class="ms-0">Temukan Pasangan untuk Hewan Peliharaan Anda.</p>
                            <a href="<?php echo base_url();?>shop" class="btn btn-dark btn-hover-primary">Belanja Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="hero-slide-item swiper-slide">
                    <div class="hero-slide-bg">
                        <img src="<?php echo base_url();?>assets/images/slider/slider1-2.png" alt="Slider Image" />
                    </div>
                    <div class="container">
                        <div class="hero-slide-content text-center text-md-end">
                            <h5 class="sub-title">MetShop Pet's</h5>
                            <h2 class="title m-0">Penjualan Hewan Peliharaan</h2>
                            <p>Temani Hidup Anda dengan Hewan Peliharaan.</p>
                            <a href="<?php echo base_url();?>shop" class="btn btn-dark btn-hover-primary">Belanja Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-lg-none"></div>
            <!-- Swiper Pagination End -->

            <!-- Swiper Navigation Start -->
            <div class="home-slider-prev swiper-button-prev main-slider-nav d-lg-flex d-none"><i class="icon-arrow-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav d-lg-flex d-none"><i class="icon-arrow-right"></i></div>
            <!-- Swiper Navigation End -->
        </div>
    </div>
    <!-- Hero/Intro Slider End -->

    <div class="section section-padding">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-n6">

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single CTA Wrapper Start -->
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <i class="ti-truck"></i>
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">COD</h4>
                            <p>Free Ongkir & Fitur COD</p>
                        </div>
                        <!-- CTA Content End -->

                    </div>
                    <!-- Single CTA Wrapper End -->
                </div>

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1100">
                    <!-- Single CTA Wrapper Start -->
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Hubungi Kami</h4>
                            <p>Pelayanan Pelanggan 24 Jam</p>
                        </div>
                        <!-- CTA Content End -->

                    </div>
                    <!-- Single CTA Wrapper End -->
                </div>

                <div class="col mb-6" data-aos="fade-up" data-aos-duration="1200">
                    <!-- Single CTA Wrapper Start -->
                    <div class="single-cta-wrapper">

                        <!-- CTA Icon Start -->
                        <div class="cta-icon">
                            <i class="ti-bar-chart"></i>
                        </div>
                        <!-- CTA Icon End -->

                        <!-- CTA Content Start -->
                        <div class="cta-content">
                            <h4 class="title">Garansi Uang Kembali</h4>
                            <p>Garansi Uang Kembali maksimal 3 hari</p>
                        </div>
                        <!-- CTA Content End -->

                    </div>
                    <!-- Single CTA Wrapper End -->
                </div>

            </div>
        </div>
    </div>

    <!-- Product Section Start -->
    <div class="section position-relative">
        <div class="container">

            <!-- Section Title & Tab Start -->
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <!-- Tab Start -->
                <div class="col-12">
                    <ul class="product-tab-nav nav justify-content-center mb-n3 pb-8 title-border-bottom">
                        <li class="nav-item mb-3"><a class="nav-link active" data-bs-toggle="tab" href="#tab-product-all">Hewan Terlaris</a></li>
                        <li class="nav-item mb-3"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-featured">Penjualan</a></li>
                        <li class="nav-item mb-3"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-all">Favorit Teratas</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <!-- Section Title & Tab End -->

            <!-- Products Tab Start -->
            <div class="row" data-aos="fade-up" data-aos-duration="1100">
                <div class="col-12">
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab-product-all">
                            <div class="row mb-n8">

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/kucing.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Kucing Anggora Asli</a></h5>
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

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/AnggoraMp.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">Baru</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Kucing Anggora Mix Persia</a></h5>
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

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/persia.png" alt="Product" />
                                            </a>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Kucing Persia Asli</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.5.000.000</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/koren.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>

                                            <div class="countdown-area">
                                                <div class="countdown-wrapper" data-countdown="2021/12/31"></div>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Kucing Mainecoon</a></h5>
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

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/Chihuahua.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Anjing Chihuahua</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.12.800.000</span>
                                            <span class="old">Rp.16.000.000</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/shiba inu.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">Baru</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist." class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Anjing Shiba Inu</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.6.000.000</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/alaskan malamute.png" alt="Product" />
                                            </a>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Anjing Alaskan Malamute</a></h5>
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

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/siberia husky.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" title="Quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Anjing Siberian Husky</a></h5>
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

                        <div class="tab-pane fade" id="tab-product-featured">
                            <div class="row mb-n8">

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/kucing.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Kucing Anggora Asli</a></h5>
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

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/shiba inu.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Anjing Shiba inu</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.6.000.000</span>
                                            <span class="old">Rp.7.200.000</span
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/Chameleon.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">Baru</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Chameleon Veiled</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.3.280.000</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/Ular Albino.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="new">New</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Ular Retic Tiger Albino</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.2.000.000</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/arwana1.png" alt="Product" />
                                            </a>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Ikan Arwana Golden Pino</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.3.725.000</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/koi1.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-18%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quickview"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Ikan Koi Kohaku</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.10.000.000</span>
                                            <span class="old">Rp.13.000.000</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/kakatua.png" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            <span class="sale">-20%</span>
                                            </span>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" title="Quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.html" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Burung Kakatua</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.3.000.000</span>>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                                <!-- Product Start -->
                                <div class="col-12 col-sm-6 col-lg-3 product-wrapper mb-8">
                                    <div class="product">
                                        <!-- Thumb Start  -->
                                        <div class="thumb">
                                            <a href="<?php echo base_url();?>singleproduct" class="image">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/medium-product/love bird.png" alt="Product" />
                                            </a>
                                            <div class="action-wrapper">
                                                <a href="#/" class="action quickview" data-bs-toggle="modal" data-bs-target="#quick-view"><i class="ti-plus"></i></a>
                                                <a href="wishlist.php" class="action wishlist" title="Wishlist"><i class="ti-heart"></i></a>
                                                <a href="cart.php" class="action cart" title="Cart"><i class="ti-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <!-- Thumb End  -->

                                        <!-- Content Start  -->
                                        <div class="content">
                                            <h5 class="title"><a href="<?php echo base_url();?>singleproduct">Burung Love Bird</a></h5>
                                            <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            <span class="price">
                                            <span class="new">Rp.840.000</span>
                                            </span>
                                        </div>
                                        <!-- Content End  -->
                                    </div>
                                </div>
                                <!-- Product End -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Products Tab End -->
        </div>
    </div>
    <!-- Product Section End -->

    <!-- Banner Section Start -->
    <div class="section section-margin">

        <div class="container">
            <!-- Banners Start -->
            <div class="row mb-n6">

                <!-- Banner Start -->
                <div class="col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <a href="shop.php" class="banner">
                        <img class="fit-image" src="<?php echo base_url();?>assets/images/banner/Promo1.png" alt="Banner Image" />
                    </a>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-md-6 col-12 mb-6" data-aos="fade-up" data-aos-duration="1400">
                    <a href="shop.php" class="banner">
                        <img class="fit-image" src="<?php echo base_url();?>assets/images/banner/promo2.png" alt="Banner Image" />
                    </a>
                </div>
                <!-- Banner End -->

            </div>
            <!-- Banners End -->
        </div>

    </div>
    <!-- Banner Section End -->

    <!-- Product Deal Section Start -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h2 class="title" data-aos="fade-up" data-aos-duration="1000">Hewan Favorit Bulan Ini</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Latest Blog Carousel Start -->
                    <div class="product-deal-carousel arrow-outside-container">
                        <div class="swiper-container">

                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <!-- Single Product Deal Start -->
                                    <div class="single-deal-product row mb-n6">
                                        <!-- Deal Thumb Start -->
                                        <div class="deal-thumb col-md-6 mb-6" data-aos="fade-up" data-aos-duration="1200">
                                            <a href="<?php echo base_url();?>singleproduct">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/large-product/kucing anggora1.png" alt="Product Image">
                                            </a>
                                        </div>
                                        <!-- Deal Thumb End -->
                                        <!-- Deal Content Start -->
                                        <div class="product-deal-content col-md-6 mb-6" data-aos="fade-up" data-aos-duration="1400">
                                            <h5 class="title mb-3"><a href="<?php echo base_url();?>singleproduct">Kucing Anggora Asli</a></h5>
                                            <span class="rating mb-3">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            <span class="price">
                                                    <span class="new">Rp.5.740.000</span>
                                            <span class="old">Rp.7.000.000</span>
                                            </span>
                                            <p>harga mmbawa rupa karna di toko kami slalu rutin vitamin dan pakan royal canin 70% 20 meo 10% proplan ...jadi jangan di samakan dengan yg murah ya kak makasih ..</p>
                                            <div class="countdown-area">
                                                <div class="countdown-wrapper" data-countdown="2021/10/31"></div>
                                            </div>
                                            <a href="shop.php" class="btn btn-primary btn-hover-dark">Beli Sekarang</a>
                                        </div>
                                        <!-- Deal Content End -->
                                    </div>
                                    <!-- Single Product Deal End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Product Deal Start -->
                                    <div class="single-deal-product row mb-n6">
                                        <!-- Deal Thumb Start -->
                                        <div class="deal-thumb col-md-6 mb-6">
                                            <a href="<?php echo base_url();?>singleproduct">
                                                <img class="fit-image" src="<?php echo base_url();?>assets/images/products/large-product/shiba inu.png" alt="Product Image">
                                            </a>
                                        </div>
                                        <!-- Deal Thumb End -->
                                        <!-- Deal Content Start -->
                                        <div class="product-deal-content col-md-6 mb-6">
                                            <h5 class="title mb-3"><a href="single-product.html">Anjing Shiba Inu</a></h5>
                                            <span class="rating mb-3">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            <span class="price">
                                                    <span class="new">Rp.5.450.000</span>
                                            <span class="old">Rp.6.000.000</span>
                                            </span>
                                            <p>Shiba Inu jantan bulan berjalan
                                                Dob jan
                                                Stamboom
                                                Microchip
                                                Sehat, anatomi good
                                                Pup pee sudah rutin di luar
                                                Vaksin lengkap
                                                Bloodline Rusia
                                                Bloodline Iki Haici Delta kennel

                                                Lokasi bandar lampung
                                                Harga pasti pas
                                                Ga pake mahal.</p>
                                            <div class="countdown-area">
                                                <div class="countdown-wrapper" data-countdown="2021/10/31"></div>
                                            </div>
                                            <a href="shop.php" class="btn btn-primary btn-hover-dark">Beli Sekarang</a>
                                        </div>
                                        <!-- Deal Content End -->
                                    </div>
                                    <!-- Single Product Deal End -->
                                </div>

                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Next Previous Button Start -->
                            <div class="swiper-deal-button-next swiper-button-next swiper-nav-button"><i class="ti-angle-right"></i></div>
                            <div class="swiper-deal-button-prev swiper-button-prev swiper-nav-button"><i class="ti-angle-left"></i></div>
                            <!-- Next Previous Button End -->
                        </div>
                    </div>
                    <!-- Latest Blog Carousel End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Product Deal Section End -->

    <!-- Testimonial Section Start -->
    <div class="section bg-bright section-padding section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Testimonial Carousel Start -->
                    <div class="testimonial-carousel">

                        <!-- Testimonial Gallery Top Start -->
                        <div class="swiper-container testimonial-gallery-top" data-aos="fade-up" data-aos-duration="1000">
                            <div class="swiper-wrapper">

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">

                                    <!-- Testimonial Content Start -->
                                    <div class="testimonial-content text-center">
                                        <p>Bagus banget pelayanan dari penjual, the best lah pokoknya buat MetShop, Suskses selalu ya</p>
                                    </div>
                                    <!-- Testimonial Content End -->

                                </div>
                                <!-- Single Swiper Slide End -->

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">

                                    <!-- Testimonial Content Start -->
                                    <div class="testimonial-content text-center">
                                        <p>Bisa COD ini yang membuat saya suka, karena bisa langsung memantau hewan peliharaan yang saya sukai, pokonya BAGUSSS!!</p>
                                    </div>
                                    <!-- Testimonial Content End -->

                                </div>
                                <!-- Single Swiper Slide End -->

                                 <div class="swiper-slide">

                                    <!-- Testimonial Content Start -->
                                    <div class="testimonial-content text-center">
                                        <p>Terima kasih banyak kak, gemes banget kucingnya, sehat, bulunya halus banget, sesuai ekspektasi. </p>
                                    </div>
                                    <!-- Testimonial Content End -->

                                </div>
                                <!-- Single Swiper Slide End -->
                            </div>

                        </div>
                        <!-- Testimonial Gallery Top End -->

                        <!-- Testimonial Gallery Thumb Start -->
                        <div class="swiper-container testimonial-gallery-thumbs" data-aos="fade-up" data-aos-duration="1500">
                            <div class="swiper-wrapper">

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Thumb Start -->
                                    <div class="testimonial-thumb text-center">
                                        <img src="<?php echo base_url();?>assets/images/testimonial/kayes.jpg" alt="Testimonial Image">
                                        <h3 class="thumb-title">Kayess</h3>
                                        <h6 class="thumb-subtitle">Pelanggan</h6>
                                    </div>
                                    <!-- Testimonial Thumb End -->
                                </div>
                                <!-- Single Swiper Slide End -->

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Thumb Start -->
                                    <div class="testimonial-thumb text-center">
                                        <img src="<?php echo base_url();?>assets/images/testimonial/kucing.png" alt="Testimonial Image">
                                        <h3 class="thumb-title">Fira</h3>
                                        <h6 class="thumb-subtitle">Pelanggan</h6>
                                    </div>
                                    <!-- Testimonial Thumb End -->
                                </div>
                                <!-- Single Swiper Slide End -->

                                <!-- Single Swiper Slide Start -->
                                <div class="swiper-slide">
                                    <!-- Testimonial Thumb Start -->
                                    <div class="testimonial-thumb text-center">
                                        <img src="<?php echo base_url();?>assets/images/testimonial/agustina.jpg" alt="Testimonial Image">
                                        <h3 class="thumb-title">Agustina</h3>
                                        <h6 class="thumb-subtitle">Pelanggan</h6>
                                    </div>
                                    <!-- Testimonial Thumb End -->
                                </div>

                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Testimonial Gallery Thumb End -->

                    </div>
                    <!-- Testimonial Carousel End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    <div class="section section-margin-bottom">
        <div class="container">

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Artikel Untuk Anda</h2>
                    </div>
                </div>
            </div>

            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n8">

                <div class="col mb-8" data-aos="fade-up" data-aos-duration="1000">
                    <!-- Single Blog Start -->
                    <div class="single-blog-wrapper">

                        <!-- Blog Thumb Start -->
                        <div class="blog-thumb thumb-effect">
                            <a class="image" href="blogdetails">
                                <img class="fit-image" width="300px" src="<?php echo base_url();?>assets/images/blog/kucing.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <!-- Blog Thumb End -->

                        <!-- Blog Content Start -->
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><span>Oleh</span><a href="#/">Admin</a></li>
                                    <li><span>27, Januari, 2021</span></li>
                                </ul>
                            </div>
                            <h2 class="blog-title"><a href="blogdetails">Cara Menangani Kucing Kesayangan yang Terkena Diare</a></h2>
                            <p>Halodoc, Jakarta - Diare termasuk masalah kesehatan yang jarang terjadi pada kucing. Namun, jika ini terjadi pada kucing peliharaan kamu, tandanya ia sedang mengalami masalah kesehatan pada pencernaannya. Apabila diare terbilang singkat, kamu tidak perlu khawatir karena biasanya ini terjadi akibat adanya zat pemicu dalam makanan atau minumannya. Ut...</p>
                            <a class="more-link" href="blogdetails">Baca Selengkapnya</a>
                        </div>
                        <!-- Blog Content End -->

                    </div>
                    <!-- Single Blog End -->
                </div>

                <div class="col mb-8" data-aos="fade-up" data-aos-duration="1300">
                    <!-- Single Blog Start -->
                    <div class="single-blog-wrapper">

                        <!-- Blog Thumb Start -->
                        <div class="blog-thumb thumb-effect">
                            <a class="image" href="blogdetails">
                                <img class="fit-image" src="<?php echo base_url();?>assets/images/blog/ikancupang.jpeg" width="300px" alt="Blog Image">
                            </a>
                        </div>
                        <!-- Blog Thumb End -->

                        <!-- Blog Content Start -->
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><span>Oleh</span><a href="#/">Admin</a></li>
                                    <li><span>12, Februari, 2021</span></li>
                                </ul>
                            </div>
                            <h2 class="blog-title"><a href="blogdetails2">Cara Membedakan Ikan Cupang Jantan dan Betina</a></h2>
                            <p>Jakarta - Ikan cupang mempunyai tampilan yang indah yang membuat banyak orang kecanduan memeliharanya. Namun penampilan ikan ini juga tergantung jenis kelaminnya, apakah ikan cupang jantan atau ikan cupang betina. Perbedaan ikan cupang jantan dengan betina secara penampilan adalah secara penampilan tubuhnya lebih langsing. Ut...</p>
                            <a class="more-link" href="blogdetails2">Baca Selengkapnya</a>
                        </div>
                        <!-- Blog Content End -->

                    </div>
                    <!-- Single Blog End -->
                </div>

                <div class="col mb-8" data-aos="fade-up" data-aos-duration="1600">
                    <!-- Single Blog Start -->
                    <div class="single-blog-wrapper">

                        <!-- Blog Thumb Start -->
                        <div class="blog-thumb thumb-effect">
                            <a class="image" href="blogdetails">
                                <img class="fit-image" src="<?php echo base_url();?>assets/images/blog/anjing.jpg" width="300px" alt="Blog Image">
                            </a>
                        </div>
                        <!-- Blog Thumb End -->

                        <!-- Blog Content Start -->
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><span>Oleh</span><a href="#/">Admin</a></li>
                                    <li><span>20, Maret, 2021</span></li>
                                </ul>
                            </div>
                            <h2 class="blog-title"><a href="blogdetails3">Tips merawat anjing peliharaan untuk pemula</a></h2>
                            <p>Selain dikenal sebagai hewan peliharaan yang setia, anjing juga bisa menjadi penjaga rumah yang baik. Banyak yang percaya kalo memelihara anjing bisa meredakan stress dan mengurangi rasa kesepian. Memiliki anjing sebagai hewan peliharaan pun bahkan bisa dijadikan sebagai kebanggaan karena selain lucu, hewan yang satu ini pun juga cerdas lho! Ut...</p>
                            <a class="more-link" href="blogdetails3">Baca Selengkapnya</a>
                        </div>
                        <!-- Blog Content End -->

                    </div>
                    <!-- Single Blog End -->
                </div>

            </div>

        </div>
    </div>


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
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="cart.html">Add to cart</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
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
                            <!-- Social Shear End -->f

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
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                    <li><a href="index-4.html">Home Four</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="shop.php">Shop Grid</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                    <li><a href="single-product-group.html">Single Product Group</a></li>
                                    <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                    <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                    <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login.html">Login | Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.php">Blog Details</a></li>
                                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
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


