<?php
/**
 * The content display on Service template page .
 */
 ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                <?php esc_html_e('What We Do', 'asru') ?>
                
            </div>
            <h1 class="display-6 mb-5">
                <?php esc_html_e('Learn More What We Do And Get Involved', 'asru') ?>
            </h1>
        </div>
        <div class="row g-4 justify-content-center">   
            
            <?php 
                $args = [ 
                'post_type' => ' Involves ',
                'post_per_page' => 3,
                ];
                $query = new WP_Query( $args );
                while($query->have_posts()) {
                $query->the_post(); 
                    
                $involves_text = get_field('involves_text');
                $involve_btn_text = get_field('involve_btn_text');
                $involve_btn_url = get_field('involve_btn_url');
            ?>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <h4 class="mb-3">
                            <?php the_title(); ?>
                            
                        </h4>
                        <?php if($involves_text){ ?>
                            <p class="mb-4">
                            <?php echo $involves_text ?>
                            </p>
                        <?php
                            } 
                        ?>

                        <?php if($involve_btn_text){ ?> 
                            <a class="btn btn-outline-primary px-3" href="<?php echo $involve_btn_url ?>">
                                <?php echo $involve_btn_text ?>
                            </a>
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