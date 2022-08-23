<?php
/**
 * The content display on testimonial template page .
 */
 ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                <?php esc_html_e('Testimonial', 'asru') ?>
            </div>
            <h1 class="display-6 mb-5">
                <?php esc_html_e('Trusted By Thousands Of People And Nonprofits', 'asru') ?>
            </h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            <?php 
                $args = [ 
                'post_type' => ' Testimonials ',
                'post_per_page' => 3,
                ];
                $query = new WP_Query( $args );
                while($query->have_posts()) {
                $query->the_post();

                    $profession = get_field('profession');
                    $profession_info = get_field('profession_info');
            ?>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="<?php the_post_thumbnail_url(); ?>" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <?php if($profession_info) { ?>
                            <p><?php echo $profession_info; ?></p>
                        <?php } ?>
                        
                        <h5 class="mb-1"><?php the_title(); ?></h5>
                        <?php if($profession) { ?>
                            <span class="fst-italic"><?php echo $profession ?></span>
                        <?php } ?>
                        
                    </div>
                </div>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>