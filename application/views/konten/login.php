
<!DOCTYPE html>
<html lang="en">

<body>


    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Login</h2>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.php">Beranda</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Login Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 m-auto">
                    <div class="login-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-6">
                            <h2 class="title mb-2">LOGIN</h2>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="<?php echo base_url('login/cek_log');?>" method="post">

                            <!-- Input Email Start -->
                            <div class="single-input-item mb-2">
                                <label><strong>Username</label><span class="required"></strong></span></label>
                                <input name="username"  placeholder="Email atau Username">
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-2">
                                <label><strong>Password Anda</label><span class="required"></strong></span></label>
                                <input name="password" type="password" placeholder="Masukkan Password Anda">
                            </div>
                            <!-- Input Password End -->

                            <!-- Button/Forget Password Start -->
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta mb-n3">

                                <input type="submit" name="btn_log" value="login" class="btn btn-primary "><br>
                                  

                                </div>
                                <a href="<?php echo base_url();?>#" class="forget-pwd mb-3"><strong>Lupa Password?</strong></a>
                            </div>
                            <!-- Button/Forget Password End -->

                            <!-- Lost Password & Creat New Account Start -->
                            <div class="lost-password">
                                <a href="<?php echo base_url();?>register"><strong>Daftar Sekarang</strong></a>
                            </div>
                            <!-- Lost Password & Creat New Account End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->


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
                                    <a class="swiper-slide" href="<?php echo base_url();?>#">
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/1.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="<?php echo base_url();?>#">
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/2.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="<?php echo base_url();?>#">
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/3.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="<?php echo base_url();?>#">
                                        <img class="w-100" src="<?php echo base_url();?>assets/images/products/large-product/4.png" alt="Product">
                                    </a>
                                    <a class="swiper-slide" href="<?php echo base_url();?>#">
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
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="<?php echo base_url();?>cart.php">Add to cart</a>
                                    </div>
                                    <a href="<?php echo base_url();?>wishlist.php" title="Wishlist" class="action"><i class="ti-heart"></i></a>
                                </div>
                            </div>
                            <!-- Cart Button End -->

                            <!-- Social Shear Start -->
                            <div class="social-share">
                                <div class="widget-social justify-content-center mb-6">
                                    <a title="Twitter" href="<?php echo base_url();?>#/"><i class="icon-social-twitter"></i></a>
                                    <a title="Instagram" href="<?php echo base_url();?>#/"><i class="icon-social-instagram"></i></a>
                                    <a title="Linkedin" href="<?php echo base_url();?>#/"><i class="icon-social-linkedin"></i></a>
                                    <a title="Skype" href="<?php echo base_url();?>#/"><i class="icon-social-skype"></i></a>
                                    <a title="Dribble" href="<?php echo base_url();?>#/"><i class="icon-social-dribbble"></i></a>
                                </div>
                            </div>
                            <!-- Social Shear End -->

                            <!-- Payment Option Start -->
                            <div class="payment-option mt-4 d-flex justify-content-start">
                                <span><strong>Payment: </strong></span>
                                <a href="<?php echo base_url();?>#">
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
    <a href="<?php echo base_url();?>#" class="scroll-top show" id="scroll-top">
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
                                <a href="<?php echo base_url();?>#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>index.php">Home One</a></li>
                                    <li><a href="<?php echo base_url();?>index-2.php">Home Two</a></li>
                                    <li><a href="<?php echo base_url();?>index-3.php">Home Three</a></li>
                                    <li><a href="<?php echo base_url();?>index-4.php">Home Four</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>shop.php">Shop Grid</a></li>
                                    <li><a href="<?php echo base_url();?>shop-left-sidebar.php">Shop Left Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>shop-right-sidebar.php">Shop Right Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>shop-list-fullwidth.php">Shop List Fullwidth</a></li>
                                    <li><a href="<?php echo base_url();?>shop-list-left-sidebar.php">Shop List Left Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>shop-list-right-sidebar.php">Shop List Right Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>wishlist.php">Wishlist</a></li>
                                    <li><a href="<?php echo base_url();?>cart.php">Shopping Cart</a></li>
                                    <li><a href="<?php echo base_url();?>checkout.php">Checkout</a></li>
                                    <li><a href="<?php echo base_url();?>compare.php">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>single-product.php">Single Product</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-sale.php">Single Product Sale</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-group.php">Single Product Group</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-normal.php">Single Product Normal</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-affiliate.php">Single Product Affiliate</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-slider.php">Single Product Slider</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>about.php">About Us</a></li>
                                    <li><a href="<?php echo base_url();?>contact.php">Contact</a></li>
                                    <li><a href="<?php echo base_url();?>faq.php">Faq</a></li>
                                    <li><a href="<?php echo base_url();?>error-404.php">Error 404</a></li>
                                    <li><a href="<?php echo base_url();?>my-account.php">My Account</a></li>
                                    <li><a href="<?php echo base_url();?>login.php">Login | Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>blog.php">Blog</a></li>
                                    <li><a href="<?php echo base_url();?>blog-left-sidebar.php">Blog Left Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>blog-right-sidebar.php">Blog Right Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>blog-details.php">Blog Details</a></li>
                                    <li><a href="<?php echo base_url();?>blog-details-sidebar.php">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url();?>about.php">About</a></li>
                            <li><a href="<?php echo base_url();?>contact.php">Contact</a></li>
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
                                <li><a class="dropdown-item" href="<?php echo base_url();?>#">English</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>#">Japanese</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>#">Arabic</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>#">Romanian</a></li>
                            </ul>
                        </div>
                        <div class="header-top-curr dropdown">
                            <h4 class="title">Currency:</h4>
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="<?php echo base_url();?>#">USD</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url();?>#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Language, Currency & Link End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto bottom-0">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="<?php echo base_url();?>#"> +012 3456 789</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="<?php echo base_url();?>#"> info@example.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="<?php echo base_url();?>#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="<?php echo base_url();?>#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="<?php echo base_url();?>#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="<?php echo base_url();?>#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="<?php echo base_url();?>#"><i class="fa fa-vimeo"></i></a>
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


    <script src="<?php echo base_url();?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Plugins JS -->


    <script src="<?php echo base_url();?>assets/js/plugins/aos.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/nice-select.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/countdown.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/lightgallery-all.min.js"></script>


    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!-- 
    <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins.min.js"></script>  
    -->

    <!--Main JS-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>