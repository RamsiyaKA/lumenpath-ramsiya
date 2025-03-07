<?php
/* Template Name: Blog Masonary Page */
get_header();
?>


    <!-- Add your site or application content here -->
    <main>

        <div class="adjust-header-space bg-common-white"></div>

        <!-- blog area start  -->
        <section class="df-blog__area section-spacing p-relative fix">
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="container">
                <div class="row justify-content-center section-title-spacing wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-8">
                        <div class="section__title-wrapper text-center">
                            <h2 class="section__title">Our Blogs</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 grid">
                    
                   
                    <!-- item 4 -->
                    <div class="col-lg-12 grid-item">
                        <div class="df-blog2__box bg-2">
                            <div class="df-blog2__thumb-wrap p-relative">
                                <div class="df-blog2__thumb">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/coming-soon.png" alt="image not found">
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- blog area end  -->

    </main>

    <!-- footer-area-start -->
<?php get_footer(); ?>
    <!-- footer-area-end -->
