
<!DOCTYPE html>
<html lang="en">

    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Hubungi Kami</h2>
                        <ul>
                            <li><a href="<?php echo base_url();?>index.html">Beranda</a></li>
                            <li>Hubungi Kami</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n10">
                <div class="col-12 col-lg-6 mb-10 order-2 order-lg-1" data-aos="fade-up" data-aos-duration="1000">

                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Data Diri</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper contact-form">
                        <form action="assets/php/amber.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Nama *" name="name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="email" placeholder="Email *" name="email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Keterangan *" name="subject">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-8">
                                                <textarea cols="30" rows="5" class="textarea-item" name="message" placeholder="Pesan"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-hover-dark">Kirim</button>
                                        </div>
                                        <p class="col-8 form-message mb-0"></p>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                    <!-- Contact Form Wrapper End -->

                </div>
                <div class="col-12 col-lg-6 mb-10 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="1500">
                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Hubungi Kami</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-content">
                        <p>Jika Anda kebingungan Bisa langsung datang ke toko kami, Hubungi Customer Service kami atau kirim melalui email yang ada dibawah ini.</p>
                        <address class="contact-block">
                            <ul>
                                <li><i class="fa fa-fax"></i> Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang Ploso, Malang, Jawa Timur 65152</li>
                                <li><i class="fa fa-phone"></i> <a href="<?php echo base_url();?>tel:123-123-456-789">082229434533</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="<?php echo base_url();?>mailto:demo@example.com">metshopcare@gmail.com </a></li>
                            </ul>
                        </address>

                        <div class="working-time">
                            <h6 class="title">Jam Kerja Toko</h6>
                            <p>Senin – Sabtu : 08.00 – 22.00 WIB</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact us Section End -->

    <!-- Contact Map Start -->
    <div class="section">

        <!-- Google Map Area Start -->
        <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15807.808378572216!2d112.606886!3d-7.900074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x10433eaf1fb2fb4c!2sHummasoft%20Technology!5e0!3m2!1sid!2sid!4v1633495929730!5m2!1sid!2sid" width="1400" height="670" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Google Map Area Start -->

    </div>
    <!-- Contact Map End -->



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
                                        <a class="btn btn-primary btn-hover-dark rounded-0" href="<?php echo base_url();?>cart.html">Add to cart</a>
                                    </div>
                                    <a href="<?php echo base_url();?>wishlist.html" title="Wishlist" class="action"><i class="ti-heart"></i></a>
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
                                    <li><a href="<?php echo base_url();?>index.html">Home One</a></li>
                                    <li><a href="<?php echo base_url();?>index-2.html">Home Two</a></li>
                                    <li><a href="<?php echo base_url();?>index-3.html">Home Three</a></li>
                                    <li><a href="<?php echo base_url();?>index-4.html">Home Four</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>shop.html">Shop Grid</a></li>
                                    <li><a href="<?php echo base_url();?>shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                    <li><a href="<?php echo base_url();?>shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>wishlist.html">Wishlist</a></li>
                                    <li><a href="<?php echo base_url();?>cart.html">Shopping Cart</a></li>
                                    <li><a href="<?php echo base_url();?>checkout.html">Checkout</a></li>
                                    <li><a href="<?php echo base_url();?>compare.html">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>single-product.html">Single Product</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-sale.html">Single Product Sale</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-group.html">Single Product Group</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-normal.html">Single Product Normal</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-affiliate.html">Single Product Affiliate</a></li>
                                    <li><a href="<?php echo base_url();?>single-product-slider.html">Single Product Slider</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>about.html">About Us</a></li>
                                    <li><a href="<?php echo base_url();?>contact.html">Contact</a></li>
                                    <li><a href="<?php echo base_url();?>faq.html">Faq</a></li>
                                    <li><a href="<?php echo base_url();?>error-404.html">Error 404</a></li>
                                    <li><a href="<?php echo base_url();?>my-account.html">My Account</a></li>
                                    <li><a href="<?php echo base_url();?>login.html">Login | Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="<?php echo base_url();?>#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url();?>blog.html">Blog</a></li>
                                    <li><a href="<?php echo base_url();?>blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="<?php echo base_url();?>blog-details.html">Blog Details</a></li>
                                    <li><a href="<?php echo base_url();?>blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url();?>about.html">About</a></li>
                            <li><a href="<?php echo base_url();?>contact.html">Contact</a></li>
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


</body>

</html>