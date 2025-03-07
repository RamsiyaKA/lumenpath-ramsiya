<?php
/* Template Name: Paints Page */
get_header();
?>
    <main>

        <div class="adjust-header-space bg-common-white"></div>

        <!-- page title area start  -->
        <section class="page-title-area-2 breadcrumb-spacing bg-theme-4 section-spacing">
            <div class="d-none" data-background="d-none"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper-2 text-center">
                            <h2 class="page__title-2 mb-15">Paint Items</h2>
                            <div class="breadcrumb-menu-2 d-flex justify-content-center">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items-2">
                                        <li class="trail-item-2 trail-begin"><a href="index.php"><span>Home</span></a></li>
                                        <li class="trail-item-2 trail-end"><span>Products</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area start  -->

        <!-- product area start  -->
        <div class="product-area section-spacing bg-theme-4 b-top b-bottom-2">
            <div class="container">
                <div class="row g-50">
                    <div class="col-xl-3 col-lg-4 order-lg-1 order-2">
                        <div class="product-left-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="product-left-item mb-45">
                                <h6 class="product-widget-title">Product categories</h6>
                                    <ul class="product-categories">
                                        <li><a href="<?php echo site_url('index.php/plumbing-items-page/'); ?>">Plumbing Items</a></li>
                                        <li><a href="<?php echo site_url('index.php/electrical-items/'); ?>">Electrical Items</a></li>
                                        <li><a href="<?php echo site_url('index.php/sanitary-items-page/'); ?>">Sanitary Items</a></li>
                                        <li><a href="<?php echo site_url('index.php/safety-items/'); ?>">Safety Items</a></li>
                                        <li><a href="<?php echo site_url('index.php/paints/'); ?>">Paint Items</a></li>
                                        <li><a href="<?php echo site_url('index.php/other-items/'); ?>">Other Items</a></li>
                                    </ul>
                            </div>                           
                                                        
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-lg-2 order-1">
                        <div class="product-area-wrapper mb-20 wow fadeInUp" data-wow-delay=".3s">
                            <div class="product-filter-wrapper mb-30">
                                <div class="row g-5">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="items-showing-text">
                                            <!--<div class="items-showing capitalize">
                                                <p> Showing <span>1</span>–<span>9</span> of <span>11</span> Results</p>
                                            </div>-->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-01.png" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Oryx Paints
                                        </h4>
                                        
                                       
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-02.png" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Berger Paints</h4>
                                        
                                       
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-03.png" alt="product"></a>
                                        
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Hempel Paints</h4>
                                      
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-04.png" alt="product"></a>
                                        
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Hampel Paints</h4>
                                        
                                         
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-05.png" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Jotun Paints</a></h4>
                                          
                                    </div>
                                </div>
                                 <div class="product-single">
                                    <div class="product-thumb">
                                        
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/Paint-06.png" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Epoxy</a></h4>
                                       
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-07.png" alt="product"></a>
                                       
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Brushes</h4>
                                        
                                         
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-08.png" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Scrapers</h4>
                                        
                                         
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-10.png" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Spray Gun</h4>
                                        
                                         
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-11.png" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Rollers</h4>
                                        
                                         
                                    </div>
                                </div>
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="shop-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shop/paint-12.png" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Paint Tray</h4>
                                        
                                         
                                    </div>
                                </div>
                                <!--
                                <div class="product-single">
                                    <div class="product-thumb">
                                        <a href="shop-details.html"><img src="assets/img/shop/Electrical-11.jpg" alt="product"></a>
                                        
                                    </div>
                                    <div class="product-description">
                                        <h4 class="product-name">Exhaust Fans</h4>
                                       
                                         
                                    </div>
                                </div>-->
                            </div>
                            <!-- <div class="basic-pagination mt-30 wow fadeInUp" data-wow-delay=".3s">
                                <ul>
                                    <li><a class="prev page-numbers" href="#">
                                            <i class="icon-022-left"></i>
                                        </a>
                                    </li>
                                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="page-numbers" href="#">
                                            <i class="fa-light fa-ellipsis"></i>
                                        </a>
                                    </li>
                                     <li><a class="page-numbers" href="#">10</a></li>
                                    <li><a class="next page-numbers" href="#">
                                            <i class="icon-021-next"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="brand__area ">
                    <div class="container" style="background-color: #f3f6f9;">
                        <div class="brands__wrapper wow fadeInUp" data-wow-delay=".3s">
                            <div class="swiper brand__slider" >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Other-logo/other-13.jpeg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Other-logo/other-14.jpeg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Other-logo/other-15.jpeg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Other-logo/other-16.jpeg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Other-logo/other-17.jpeg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Electrical-logo/Electrical-logo-06.jpg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Electrical-logo/Electrical-logo-12.jpg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Electrical-logo/Electrical-logo-07.jpg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Electrical-logo/Electrical-logo-08.jpg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Electrical-logo/Electrical-logo-09.jpg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Electrical-logo/Electrical-logo-10.jpg" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand__item">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Other-logo/other-18.jpeg" alt="image not found">
                                        </div>
                                    </div>
                                
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Electrical-logo/Logo-07.jpg" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/brands/Electrical-logo/Logo-08.jpg" alt="image not found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product area end  -->

      

    </main>
<?php get_footer();?>