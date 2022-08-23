<?php
/**
 * The content display on Donate template page .
 */
 ?>

<?php 
    $donate_page = get_field('donate_page', 'option');
    $donate_page_title = get_field('donate_page_title', 'option');
    $donate_page_text = get_field('donate_page_text', 'option');
    $donate_bg_img = get_field('donate_bg_img', 'option');
?>

<div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="<?php echo $donate_bg_img['url'] ?>">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    <?php echo $donate_page; ?>
                </div>
                <h1 class="display-6 text-white mb-5">
                    <?php echo $donate_page_title; ?>
                </h1>
                <p class="text-white-50 mb-0">
                <?php echo $donate_page_text; ?>
                </p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 bg-white p-5">
                        <div class="row g-3">
                            <?php echo do_shortcode('[contact-form-7 id="56" title="Contact form 1"]') ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>