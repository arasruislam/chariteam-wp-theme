<?php  
/**
 * Essential theme supports
 * */

 function apex_support() {
    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** tag-title **/
    add_theme_support( 'custom-logo' );

    /** Text Domain **/
    load_theme_textdomain('asru', get_template_directory(). './languages');

    /** Text Domain **/
    add_theme_support( 'post-thumbnails', ['sliders', 'causes', 'involves', 'teams', 'testimonials']);

 }
 add_action('after_setup_theme', 'apex_support' );

// Register Navigation
function apex_nav() {
    register_nav_menus( [
        'primary_menu' => __('Primary Menu', 'asru'),
    
        ]
    );
}
add_action( 'after_setup_theme', 'apex_nav' );

/** Add Sidebar **/
function apex_widget() {
    // Footer page list
    register_sidebar( array(
        'name'          => __( 'Footer Newsletter', 'asru' ),
        'id'            => 'newsletter',
        'description'   => __( 'Widgets in this area will be shown on footer', 'asru' ),
        'before_widget' => '<li id="%1$s" class="btn-link">',
        'after_widget'  => '</li>',
        'before_title'  => '<h5 class="text-light mb-4">',
        'after_title'   => '</h5>',
    ) );

    // Footer Newsletter
    register_sidebar( array(
        'name'          => __( 'Footer Menu', 'asru' ),
        'id'            => 'footer_menu',
        'description'   => __( 'Widgets in this area will be shown on footer', 'asru' ),
        'before_widget' => '<li id="%1$s" class="btn-link">',
        'after_widget'  => '</li>',
        'before_title'  => '<h5 class="text-light mb-4">',
        'after_title'   => '</h5>',
    ) );

    // Address
    register_sidebar( array(
        'name'          => __( 'Footer Address', 'asru' ),
        'id'            => 'footer_address',
        'description'   => __( 'Widgets in this area will be shown on footer', 'asru' ),
        'before_widget' => '<li id="%1$s" class="btn-link">',
        'after_widget'  => '</li>',
        'before_title'  => '<h5 class="text-light mb-4">',
        'after_title'   => '</h5>',
    ) );
}
add_action('widgets_init', 'apex_widget');


// Style & Script 
function theme_script() {
    // theme style
    wp_enqueue_style( 'main_style', get_stylesheet_uri(). './style.css' );

    // Template Style 
    wp_enqueue_style( 'animate', get_template_directory_uri() . './lib/animate/animate.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'carousel', get_template_directory_uri() . './lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . './css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . './css/fontawesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . './css/style.css', array(), '1.0.0', 'all' );

    // Template Script
    wp_enqueue_script( 'wow', get_template_directory_uri() . './lib/wow/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . './lib/easing/easing.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . './lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . './lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri() . './lib/parallax/parallax.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . './js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_script');

/** Apex Custom Post **/
function apex_cpt() {

    // For Slider
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'asru' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'asru' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'asru' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'asru' ),
        'add_new'               => __( 'Add New', 'asru' ),
        'add_new_item'          => __( 'Add New Slider', 'asru' ),
        'new_item'              => __( 'New Slider', 'asru' ),
        'edit_item'             => __( 'Edit Slider', 'asru' ),
        'view_item'             => __( 'View Slider', 'asru' ),
        'all_items'             => __( 'All Sliders', 'asru' ),
        'search_items'          => __( 'Search Sliders', 'asru' ),
        'not_found'             => __( 'No Sliders found.', 'asru' ),
        'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'asru' ),
        'featured_image'        => _x( 'Slider Cover Image', 'asru' ),
        'set_featured_image'    => _x( 'Set cover image', 'asru' ),
        'remove_featured_image' => _x( 'Remove cover image', 'asru' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Slider' ),
        'menu_icon'          => 'dashicons-image-filter',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail'),
    );
    register_post_type( 'Sliders', $args );

    // For Causes
    $labels = array(
        'name'                  => _x( 'Causes', 'Post type general name', 'asru' ),
        'singular_name'         => _x( 'Cause', 'Post type singular name', 'asru' ),
        'menu_name'             => _x( 'Causes', 'Admin Menu text', 'asru' ),
        'name_admin_bar'        => _x( 'Cause', 'Add New on Toolbar', 'asru' ),
        'add_new'               => __( 'Add New', 'asru' ),
        'add_new_item'          => __( 'Add New Cause', 'asru' ),
        'new_item'              => __( 'New Cause', 'asru' ),
        'edit_item'             => __( 'Edit Cause', 'asru' ),
        'view_item'             => __( 'View Cause', 'asru' ),
        'all_items'             => __( 'All Causes', 'asru' ),
        'search_items'          => __( 'Search Causes', 'asru' ),
        'not_found'             => __( 'No Causes found.', 'asru' ),
        'not_found_in_trash'    => __( 'No Causes found in Trash.', 'asru' ),
        'featured_image'        => _x( 'Cause Cover Image', 'asru' ),
        'set_featured_image'    => _x( 'Set cover image', 'asru' ),
        'remove_featured_image' => _x( 'Remove cover image', 'asru' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cause' ),
        'menu_icon'          => 'dashicons-post-status',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail'),
    );
    register_post_type( 'Causes', $args );

    // For Involve
    $labels = array(
        'name'                  => _x( 'Involves', 'Post type general name', 'asru' ),
        'singular_name'         => _x( 'Involve', 'Post type singular name', 'asru' ),
        'menu_name'             => _x( 'Involves', 'Admin Menu text', 'asru' ),
        'name_admin_bar'        => _x( 'Involve', 'Add New on Toolbar', 'asru' ),
        'add_new'               => __( 'Add New', 'asru' ),
        'add_new_item'          => __( 'Add New Involve', 'asru' ),
        'new_item'              => __( 'New Involve', 'asru' ),
        'edit_item'             => __( 'Edit Involve', 'asru' ),
        'view_item'             => __( 'View Involve', 'asru' ),
        'all_items'             => __( 'All Involves', 'asru' ),
        'search_items'          => __( 'Search Involves', 'asru' ),
        'not_found'             => __( 'No Involves found.', 'asru' ),
        'not_found_in_trash'    => __( 'No Involves found in Trash.', 'asru' ),
        'featured_image'        => _x( 'Involve Cover Image', 'asru' ),
        'set_featured_image'    => _x( 'Set cover image', 'asru' ),
        'remove_featured_image' => _x( 'Remove cover image', 'asru' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Involve' ),
        'menu_icon'          => 'dashicons-editor-paragraph',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail'),
    );
    register_post_type( 'Involves', $args );

    // For Team
    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'asru' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'asru' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'asru' ),
        'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'asru' ),
        'add_new'               => __( 'Add New', 'asru' ),
        'add_new_item'          => __( 'Add New Team', 'asru' ),
        'new_item'              => __( 'New Team', 'asru' ),
        'edit_item'             => __( 'Edit Team', 'asru' ),
        'view_item'             => __( 'View Team', 'asru' ),
        'all_items'             => __( 'All Teams', 'asru' ),
        'search_items'          => __( 'Search Teams', 'asru' ),
        'not_found'             => __( 'No Teams found.', 'asru' ),
        'not_found_in_trash'    => __( 'No Teams found in Trash.', 'asru' ),
        'featured_image'        => _x( 'Team Cover Image', 'asru' ),
        'set_featured_image'    => _x( 'Set cover image', 'asru' ),
        'remove_featured_image' => _x( 'Remove cover image', 'asru' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'menu_icon'          => 'dashicons-groups',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail'),
    );
    register_post_type( 'Teams', $args );

    // For Testimonial
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'asru' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'asru' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'asru' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'asru' ),
        'add_new'               => __( 'Add New', 'asru' ),
        'add_new_item'          => __( 'Add New Testimonial', 'asru' ),
        'new_item'              => __( 'New Testimonial', 'asru' ),
        'edit_item'             => __( 'Edit Testimonial', 'asru' ),
        'view_item'             => __( 'View Testimonial', 'asru' ),
        'all_items'             => __( 'All Testimonials', 'asru' ),
        'search_items'          => __( 'Search Testimonials', 'asru' ),
        'not_found'             => __( 'No Testimonials found.', 'asru' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'asru' ),
        'featured_image'        => _x( 'Testimonial Cover Image', 'asru' ),
        'set_featured_image'    => _x( 'Set cover image', 'asru' ),
        'remove_featured_image' => _x( 'Remove cover image', 'asru' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'menu_icon'          => 'dashicons-businessman',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail'),
    );
    register_post_type( 'Testimonials', $args );

}
add_action('init', 'apex_cpt');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __('Theme General Settings', 'asru'),
		'menu_title'	=> __('Theme Settings', 'asru'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Header Settings', 'asru'),
		'menu_title'	=> __('Header', 'asru'),
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Footer Settings', 'asru'),
		'menu_title'	=> __('Footer', 'asru'),
		'parent_slug'	=> 'theme-general-settings',
	));
	
    acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme About Settings', 'asru'),
		'menu_title'	=> __('About', 'asru'),
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> __('Theme Donate Settings', 'asru'),
		'menu_title'	=> __('Donate', 'asru'),
		'parent_slug'	=> 'theme-general-settings',
	));

}