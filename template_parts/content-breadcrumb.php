<?php

/**
 * Displays the content Breadcrumb on page template.
 */

?>

<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">
            <?php echo is_front_page() ? get_bloginfo('name') : wp_title(''); ?>
        </h1>
    </div>
</div>