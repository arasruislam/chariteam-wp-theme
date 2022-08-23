<?php 
/**
 * Template Name: Home Page
*/
?>

<?php get_header(); ?>


    <!-- Slider Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php 
                    $args = array(
                        'post_type' => 'Sliders',
                        'post_per_page' => 3,
                    );
                    $query = new WP_Query($args);

                    while ($query->have_posts()) {
                        $query->the_post(); 

                    $slider_text = get_field('slider_text');
                    $slider_btn_text = get_field('slider_btn_text');
                    $slider_btn_url = get_field('slider_btn_url');
                ?>

                    <div class="carousel-item active">
                        <img class="w-100" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?> ">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5">
                                        <h1 class="display-4 text-white mb-3 animated slideInDown">
                                            <?php the_title(); ?> 
                                        </h1>
                                        <?php if($slider_text){  ?>
                                            <p class="my-3"><?php echo $slider_text; ?></p>
                                        <?php
                                        } ?>

                                        <?php if($slider_btn_text){ ?>
                                            <a class="btn btn-primary py-2 px-3 animated slideInDown" href="<?php echo $slider_btn_url; ?>">
                                            <?php echo $slider_btn_text; ?>
                                            </a>
                                        <?php
                                        } ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                    wp_reset_postdata();
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- About Start -->
    <?php echo get_template_part('./template_parts/content', 'about') ?>

    <!-- Causes Start -->
    <?php echo get_template_part('./template_parts/content', 'causes') ?>

    <!-- Service Start -->
    <?php echo get_template_part('./template_parts/content', 'service') ?>

    <!-- Donate Start -->
    <?php echo get_template_part('./template_parts/content', 'donate') ?>

    <!-- Team Start -->
    <?php echo get_template_part('./template_parts/content', 'team') ?>

    <!-- Testimonial Start -->
    <?php echo get_template_part('./template_parts/content', 'testimonial') ?>

<?php get_footer(); ?>
