<?php
/* Template Name: Contact Page */
get_header();
?>

    <!-- Add your site or application content here -->
    <main>

        <div class="adjust-header-space bg-common-white"></div>

        <!-- contact area start  -->
        <section class="df-contact__area section-spacing-top p-relative fix">
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="container">
                <div class="row justify-content-center section-title-spacing wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-8">
                        <div class="section__title-wrapper text-center">
                            <span class="section__subtitle bg-lighter">Contact Us</span>
                            <h2 class="section__title">Contact with Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-4 col-lg-4 col-md-6">
                        <div class="df-contact__box wow fadeInUp" data-wow-delay=".4s">
                            <div class="df-contact__icon mb-20"><i class="icon-051-telephone-1"></i></div>
                            <h4 class="df-contact__content"><a href="tel:+97466445912">+974 66445912
                            </a></h4>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-4 col-md-6">
                        <div class="df-contact__box wow fadeInUp" data-wow-delay=".5s">
                            <div class="df-contact__icon mb-20"><i class="icon-052-email"></i></div>
                            <h4 class="df-contact__content"><a href="mailto:al.nooralhuda@gmail.com">al.nooralhuda@gmail.com</a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-4 col-md-6">
                        <div class="df-contact__box wow fadeInUp" data-wow-delay=".6s">
                            <div class="df-contact__icon mb-20"><i class="icon-030-pin"></i></div>
                            <h4 class="df-contact__content"><a href="https://www.google.com/maps/place/AL+NOOR+AL+HUDA+TRADING+%26+CONT.+CO+EST+./@25.2785798,51.535354,17z/data=!3m1!4b1!4m6!3m5!1s0x3e45c569ae10c7fb:0x96e41869c6be64ee!8m2!3d25.278575!4d51.5379289!16s%2Fg%2F11g67y4ns0?entry=ttu">C.R. NO: 49223, P.O. BOX: 31591, DOHA, QATAR</a></h4>
                        </div>
                    </div>
                </div>
                <div class="df-booking2__form-wrapper section-spacing-top">
                    
                    <div class="df-booking2__form">
                        <form action="form.php" method="POST">
                            <div class="row gx-5">
                                <div class="col-md-12">
                                    <div class="df-input-field">
                                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="df-input-field">
                                        <input type="text" id="number" name="number" placeholder="Your Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="df-input-field">
                                        <input type="text" id="email" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                               
                               
                                <div class="col-md-12">
                                    <div class="df-input-field">
                                        <textarea id="message" name="message" placeholder="Write Message Here..." required></textarea>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="df-booking2__form-btn mt-0">
                                        <button type="submit" class="primary-btn">send now
                                            <span class="icon__box">
                                                <img class="icon__first" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/arrow-white.webp"
                                                    alt="image not found">
                                                <img class="icon__second" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/arrow-white.webp"
                                                    alt="image not found">
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" section-spacing-top">
                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4049.577090349959!2d51.53811785027576!3d25.278554691809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c569ae10c7fb%3A0x96e41869c6be64ee!2sAL%20NOOR%20AL%20HUDA%20TRADING%20%26%20CONT.%20CO%20EST%20.!5e0!3m2!1sen!2sin!4v1708148533192!5m2!1sen!2sin" width="1920" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               
            </div>
        </section>
        <!-- contact area end  -->

    </main>

    <!-- footer-area-start -->
    <?php get_footer(); ?>
    <!-- footer-area-end -->
