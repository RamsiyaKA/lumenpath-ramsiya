<?php
/* Header Template */
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title> -->
    <title>Al-Noor Al-Huda Trading Company</title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/favicon.webp">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div id="header-sticky" class="header__main">
        <div class="container header__main-container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="header__main-content-wrapper p-relative">
                        <div class="header__main-left">
                            <div class="header__logo">
                                <a href="<?php echo home_url(); ?>" class="logo-dark">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/logo.png" alt="logo-img" width="120">
                                </a>
                            </div>
                            <div class="area-separator d-none d-lg-inline-flex"></div>
                                <div class="location-search">
                                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/iso-mark.png" alt="" width="65%">
                                </div>
                        </div>
                        
                        <div class="header__main-right">
                                <div class="main-menu main-menu1 d-none d-xl-block">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="menu-item-has-children">
                                                <a href="index.php">Home</a>
                                                
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Categories</a>
                                                <ul class="sub-menu">
                                                    <li><a href="<?php echo site_url('index.php/plumbing-items-page/'); ?>">Plumbing Items</a></li>
                                                    <li><a href="<?php echo site_url('index.php/electrical-items'); ?>">Electrical Items</a></li>
                                                    <li><a href="<?php echo site_url('index.php/sanitary-items'); ?>">Sanitary Items</a></li>
                                                    <li><a href="<?php echo site_url('index.php/safety-items'); ?>">Safety Items</a></li>
                                                    <li><a href="<?php echo site_url('index.php/paints'); ?>">Paint Items</a></li>
                                                    <li><a href="<?php echo site_url('index.php/other-items'); ?>">Other Items</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown has-mega-menu">
                                                <a href="<?php echo site_url('/index.php/services-v2-page'); ?>">Services</a>
                                                <!-- <ul class="mega-menu">
                                                    <li class="mega-menu-item">
                                                        <ul>
                                                            <li><a href="civil-works.php">Civil Works</a></li>
                                                            
                                                            <li><a href="glass-works.php">Glass Work</a>
                                                            </li>
                                                            <li><a href="fabrication-works.php">Fabrication works</a></li>
                                                            <li><a href="painting-works.php">Painting Works</a>
                                                            </li>
                                                            
                                                            <li><a href="carpentary-works.php">Carpentry Works</a>
                                                            </li>
                                                            <li><a href="gypsum-works.php">Gypsum work</a></li>
                                                            <li><a href="flooring-works.php">Flooring Works</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <ul>
                                                            <li><a href="fire-rated-door-works.php">Fire rated Doors</a></li>
                                                            
                                                            <li><a href="interior-fit-out-works.php">Interior Fit-out Works</a></li>
                                                            <li><a href="upvc-doors-and-windows.php">UPVC Doors and Windows</a></li>
                                                            <li><a href="waterproofig-works.php">Waterproofing work</a></li>
                                                            <li><a href="expansion-joints-works.php">Expansion joints Works</a></li>
                                                            <li><a href="aluminium-doors-kitchen-windows.php">Aluminum Kitchen, Doors & windows</a></li>
                                                            
                                                            <li><a href="false-ceiling-works.php">False ceiling works</a></li>
                                                        </ul>
                                                    </li>
                                                   
                                                    
                                                </ul> -->
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="<?php echo site_url('/index.php/about-us/'); ?>">About Us</a>                                                
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="<?php echo site_url('/index.php/blogs-page/'); ?>">Blogs</a>
                                                
                                            </li>
                                            <li><a href="<?php echo site_url('/index.php/contact-page'); ?>">Contact</a></li>
                                           <li><button class="btn btn-primary d-none d-md-block ">
                                            <!-- <a style="padding: 10px 0;color:#fff;" href="<?php echo site_url('/index.php/brouchure_compressed.pdf'); ?>" download>Download</a></button></li> -->
                                            <a style="padding: 10px 0;color:#fff;" href="<?php echo get_stylesheet_directory_uri(); ?>/brouchure_compressed.pdf" download="">Download</a>

                                        </ul>
                                        
                                    </nav>
                                </div>
                                
                                <div class="area-separator d-none d-lg-inline-flex"></div>
                                <div class="message__now d-none d-lg-inline-flex">
                                    <div class="meta-item">
                                        <div class="meta-item__icon">
                                            <i class="icon-074-phone"></i>
                                        </div>
                                        <div class="meta-item__text">
                                            <p>CONTACT NUMBER</p>
                                            <span><a class="is-black" href="tel:+97466445912">+974 66445912</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="area-separator d-none d-lg-inline-flex"></div>
                                <button class="btn btn-primary d-block d-md-none ">
                                    <!-- <a style="padding: 20px 0;color:#fff;font-size: 14px;" href="<?php echo site_url('/index.php/brouchure_compressed.pdf'); ?>" download >Download</a></button> -->
                                    <a style="padding: 10px 0;color:#fff;" href="<?php echo get_stylesheet_directory_uri(); ?>/brouchure_compressed.pdf" download="">Download</a>

                                    <button class="side-toggle">
                                    <span class="menu__bar">
                                        <span class="bar-icon">
                                            <span></span>
                                    <span></span>
                                    <span></span>
                                    </span>
                                    </span>
                                </button>
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <!-- side toggle start -->
    <aside class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset__widget offset__header">
                    <div class="offset__logo">
                        <a href="index.php">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/logo-white.png" alt="logo" >
                        </a>
                    </div>
                    <button class="side-info-close">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="offset__widget offset__support d-none d-sm-block">
                    <h3 class="offset__title">Handling over projects that are a Source of Pride
                        </h3>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset__widget offset__support">
                    <h6 class="offset__sub-title small fw-400 mb-30">CONTACT US</h6>
                    <div class="meta-item mb-20">
                        <div class="meta-item__icon-2">
                            <i class="icon-007-telephone"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="tel:+97466445912">+974 66445912</a></span>
                        </div>
                    </div>
                    <div class="meta-item mb-20">
                        <div class="meta-item__icon-2 style-2">
                            <i class="icon-052-email"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="mailto:al.nooralhuda@gmail.com">al.nooralhuda@gmail.com</a></span>
                        </div>
                    </div>
                    <div class="meta-item">
                        <div class="meta-item__icon-2 style-3">
                            <i class="icon-030-pin"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="https://www.google.com/maps/place/AL+NOOR+AL+HUDA+TRADING+%26+CONT.+CO+EST+./@25.2785798,51.535354,17z/data=!3m1!4b1!4m6!3m5!1s0x3e45c569ae10c7fb:0x96e41869c6be64ee!8m2!3d25.278575!4d51.5379289!16s%2Fg%2F11g67y4ns0?entry=ttu">C.R. NO: 49223, P.O. BOX: 31591, <br> DOHA, QATAR</a></span>
                        </div>
                    </div>
                </div>
                <div class="offset__widget offset__gallery">
                    <div class="offset__instagram d-none d-sm-block">
                        <h6 class="offset__sub-title small fw-400 mb-30">OUR PRODUCTS</h6>
                        <div class="tp-insta">
                            <div class="row">
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/offcanvas/insta-1.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/offcanvas/insta-2.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/offcanvas/insta-3.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/offcanvas/insta-4.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/offcanvas/insta-5.webp" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/offcanvas/insta-6.webp" alt="image not found"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- side toggle end -->




