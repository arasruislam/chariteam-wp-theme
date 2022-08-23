<?php 
/**
 * Template Name: About Page
*/
?>

<?php get_header(); ?>

    <!-- Breadcrumb -->
    <?php echo get_template_part('./template_parts/content', 'breadcrumb') ?>

    <!-- About Start -->
    <?php echo get_template_part('./template_parts/content', 'about') ?>

    <!-- Service Start -->
    <?php echo get_template_part('./template_parts/content', 'service') ?>

    <!-- Team Start -->
    <?php echo get_template_part('./template_parts/content', 'team') ?>


<?php get_footer(); ?>