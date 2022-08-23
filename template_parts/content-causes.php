<?php
/**
 * The content display on Causes template page .
 */
 ?>

<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                <?php esc_html_e('Feature Causes', 'asru') ?>
            </div>
            <h1 class="display-6 mb-5">
                <?php esc_html_e('Every Child Deserves The Opportunity To Learn', 'asru') ?>
                
            </h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php 
                $args = array(
                    'post_type' => 'Causes',
                    'post_per_page' => 3,
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) {
                    $query->the_post();
                    
                    $cause_title = get_field('cause_title');
                    $cause_text = get_field('cause_text');
                    $cause_progress = get_field('cause_progress');
                    $cause_btn_text = get_field('cause_btn_text');
                    $cause_btn_url = get_field('cause_btn_url'); 
                    
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small><?php the_title(); ?>
                                </small>
                            </div>
                            <h5 class="mb-3">
                                <?php echo $cause_title; ?>
                                
                            </h5>
                            <p>
                                <?php echo $cause_text; ?>
                                
                            </p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <?php 
                                    if($cause_progress) { ?>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-dark"><?php echo $cause_progress['progress_amount']['goal_amount']['goal_money']; ?>
                                        <small class="text-body"><?php echo $cause_progress['progress_amount']['goal_amount']['goal_text']; ?></small></p>
                                        <p class="text-dark"><?php echo $cause_progress['progress_amount']['raise_amount']['raise_money']; ?><small class="text-body"> <?php echo $cause_progress['progress_amount']['raise_amount']['raise_text']; ?></small></p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <span>
                                                <?php echo $cause_progress['progress_percentage']; ?>
                                                
                                            </span>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="">
                            <div class="causes-overlay">
                                <?php 
                                    if($cause_btn_text) { ?>
                                <a class="btn btn-outline-primary" href="<?php echo $cause_btn_url; ?>">
                                    <?php echo $cause_btn_text; ?>
                                    
                                </a>
                                <?php
                                    }
                                ?>
                                
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