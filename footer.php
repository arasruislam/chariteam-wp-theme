<?php 
    $footer_bottom = get_field('footer_bottom', 'option')
?>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <?php 
                        $logo = get_field('logo', 'option');
                    ?>
                    <h1 class="fw-bold text-primary mb-4">
                        <img src="<?php echo $logo['footer_logo']['url']; ?>" alt="">
                    </h1>
                    <p>
                      <?php echo $logo['footer_text']; ?>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php 
                        if (is_active_sidebar( 'footer_address' )) { ?>
                        <?php dynamic_sidebar('footer_address'); ?>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php 
                        if (is_active_sidebar( 'footer_menu' )) { ?>
                        <?php dynamic_sidebar('footer_menu'); ?>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-lg-3 col-md-6">
                    <?php 
                        if (is_active_sidebar( 'newsletter' )) { ?>
                        <?php dynamic_sidebar('newsletter'); ?>
                    <?php
                        }
                    ?>
                   
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <?php echo $footer_bottom; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <?php wp_footer(); ?>
    
</body>

</html>