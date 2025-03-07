<?php
/* Footer Template */
?>
<footer>
    <section class="df-footer__area bg-theme-5">
        <div class="footer__widgets-area">
            <div class="container">
                <div class="footer__widgets-wrapper-2 widgets-5 row">
                    <div class="footer__widget col-lg-4 col-md-6 col-12 mt-5">
                        <div class="mb-40">
                            <div class="df-footer__logo mb-30">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo/logo.png" alt="image not found">
                                </a>
                            </div>
                        </div>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="icon-023-facebook-app-symbol"></i></a>
                                </li>
                                <li><a href="#"><i class="icon-025-instagram"></i></a>
                                </li>
                                <li><a href="#"><i class="icon-029-pinterest"></i></a>
                                </li>
                                <li><a href="#"><i class="icon-twitter-x"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__widget col-lg-2 col-md-4 col-12 mt-5">
                        <h4 class="footer__widget-title">Company</h4>
                        <div class="footer__links underline">
                            <ul>
                                <li><a href="<?php echo site_url('/index.php/index-page'); ?>">Services</a></li>
                                <li><a href="<?php echo site_url('/index.php/services-v2-page'); ?>">Services</a></li>
                                <li><a href="<?php echo site_url('/index.php/about-us/'); ?>">About Us</a></li>
                                <li><a href="<?php echo site_url('/index.php/contact-page'); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__widget col-lg-2 col-md-4 col-12 mt-5">
                        <h4 class="footer__widget-title">Categories</h4>
                        <div class="footer__links underline">
                           <ul>
                                <li><a href="<?php echo site_url('index.php/plumbing-items-page/'); ?>">Plumbing Items</a></li>
                                <li><a href="<?php echo site_url('index.php/electrical-items'); ?>">Electrical Items</a></li>
                                <li><a href="<?php echo site_url('index.php/sanitary-items'); ?>">Sanitary Items</a></li>
                                <li><a href="<?php echo site_url('index.php/safety-items'); ?>">Safety Items</a></li>
                                <li><a href="<?php echo site_url('index.php/paints'); ?>">Paint Items</a></li>
                                <li><a href="<?php echo site_url('index.php/other-items'); ?>">Other Items</a></li>
                                               
                            </ul>
                        </div>
                    </div>
                    <div class="footer__widget col-lg-4 col-md-6 col-12 mt-5">
                        <h4 class="footer__widget-title">Contact Info</h4>
                        <div class="footer-meta mb-15">
                            <i class="fa-solid fa-phone"></i>
                            <p>+974 66445912</p>
                        </div>
                        <div class="footer-meta mb-15">
                            <i class="fa-solid fa-envelope"></i>
                            <p>al.nooralhuda@gmail.com</p>
                        </div>
                        <div class="footer-meta mb-15">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>C.R. NO: 49223, P.O. BOX: 31591, <br> DOHA, QATAR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__area p-relative">
            <div class="container">
                <div class="copyright-content__wrapper">
                    <div class="copyright__text">
                        <p>&copy; <?php echo date('Y'); ?> Al-Noor Al-Huda Tradg & Cont. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
 <!-- back to top start -->
 <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <div class="whatsapp-button">
        <a href="https://wa.me/+97466445912" target="_blank">
          <i class="fab fa-whatsapp"></i>
        </a>
    </div>

      <div class="whatsapp-button call-button">
        <a href="tel:+97466445912" target="_blank">
          <i class="fa fa-phone"></i>
        </a>
    </div>
    
<?php wp_footer(); ?>
</body>
</html>
