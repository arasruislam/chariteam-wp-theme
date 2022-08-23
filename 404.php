<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */
?>

<?php get_header(); ?>


    <!-- Breadcrumb -->
    <?php echo get_template_part('./template_parts/content', 'breadcrumb') ?>

    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1"><?php esc_html_e('404', 'asru') ?></h1>
                    <h1 class="mb-4"><?php esc_html_e('Page Not Found', 'asru') ?></h1>
                    <p class="mb-4">
                        <?php esc_html_e('We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?', 'asru') ?>
                    </p>
                    <a class="btn btn-outline-primary py-2 px-3" href="<?php echo site_url(); ?>">
                        <?php esc_html_e('Go Back To Home', '') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        
<?php get_footer(); ?>