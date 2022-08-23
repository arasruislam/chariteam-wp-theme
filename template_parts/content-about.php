<?php
/**
 * The content display on about template page .
 */
 ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <?php 
                $about_img = get_field('about_img', 'option');
                $founder = get_field('founder', 'option');
                $about_text = get_field('about_text', 'option');
            ?>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="<?php echo $about_img['top_img']['url']; ?>" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="<?php echo $about_img['second_img']['url']; ?>" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                        <?php esc_html_e('About Us', 'asru') ?>
                    </div>
                    <h1 class="display-6 mb-5">
                        <?php esc_html_e('We Help People In Need Around The World', 'asru') ?>
                    </h1>
                    
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                    <p class="text-dark mb-2">
                            <?php echo $founder['founder_discription']; ?>
                        </p>
                        <span class="text-primary">
                            <?php echo $founder['founder_name']; ?>
                        </span>
                    </div>
                    <p class="mb-5">
                        <?php echo $about_text ?>
                    </p>

                    <?php 
                        $Buttons = get_field('about_btn', 'option');
                        foreach ($Buttons as $Button) {
                    ?>

                        <a class="btn btn-primary py-2 px-3 me-3" href="<?php echo $Button['btn_link']; ?>">
                            <?php echo $Button['btn_text']; ?>
                        </a>

                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>