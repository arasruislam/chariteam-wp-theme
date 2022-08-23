<?php
/**
 * The content display on team template page .
 */
 ?>
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                <?php esc_html_e('Team Members', 'asru') ?>
            </div>
            <h1 class="display-6 mb-5">
                <?php esc_html_e("Let's Meet With Our Ordinary Soldiers", 'asru') ?>
            </h1>
        </div>
        <div class="row g-4">
            
            <?php 
                $args = [ 
                'post_type' => ' Teams ',
                'post_per_page' => 4,
                ];
                $query = new WP_Query( $args );
                while($query->have_posts()) {
                $query->the_post();

                $team_cat = get_field('team_cat');
            ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5><?php the_title(); ?></h5>
                            <p class="text-primary"><?php echo $team_cat ?></p>
                            <div class="team-social text-center">
                                <?php 
                                    $social_items = get_field('social_item');

                                    foreach($social_items as $social_item) {
                                    
                                ?> 
                                        <a class="btn btn-square" href="<?php echo $social_item['social_url'] ?>"><i class="<?php echo $social_item['social_icons']['value']; ?>"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>