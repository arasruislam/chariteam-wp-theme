<?php 
/**
 * Displaying when user make a page
*/
?>

<?php get_header(); ?>

<!-- Dynamic slider Area Start-->
<?php get_template_part('./template_parts/content', 'breadcrumb') ?>

<section class="demo-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-4">
                <h3 class="my-3 border-bottom"><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
