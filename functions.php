<?php

/** Thumbnail / Featured Image */

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
}

// Custom Post Type
function create_posttype() {
 
    register_post_type( 'editions',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Editions' ),
                'singular_name' => __( 'Item' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'editions'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'thumbnail' ),

 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


// thumbnail in posts in admin

add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Thumbs');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
    if($column_name === 'riv_post_thumbs'){
        echo the_post_thumbnail( 'thumbnail' );
    }
}

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


// disable category archives, author pages

function remove_redundant_pages()
{
  global $wp_query;

  $target = get_option('siteurl');
  $status = '301';

  if (is_category()){
    wp_redirect($target, 301);
    die();
  }

  if ( is_author() ) {
    wp_redirect($target, 301);
    die();
  }
}
add_action('template_redirect', 'remove_redundant_pages');


// Remove specific pages from wp-sitemap.xml
function disable_sitemap_specific_page($args, $post_type) {
  if ('page' !== $post_type) return $args;
  $args['post__not_in'] = isset($args['post__not_in']) ? $args['post__not_in'] : array();
  $args['post__not_in'][] = 417; // sketchbooks
  return $args;
}
add_filter('wp_sitemaps_posts_query_args', 'disable_sitemap_specific_page', 10, 2);


// disable users sitemap

add_filter( 'wp_sitemaps_users_query_args', 'exclude_authors_from_sitemap' );

function exclude_authors_from_sitemap( $args ) {
    $args['exclude'] = get_users( [ 'fields' => 'ID' ] );  // Exclude all authors.
    return $args;
}

// disable empty categories from sitemap

add_filter( 'wp_sitemaps_taxonomies_query_args', 'exclude_categories_from_sitemap', 10, 2 );

function exclude_categories_from_sitemap( $args, $taxonomy ) {
    if ( 'category' === $taxonomy ) {
        $args['hide_empty'] = true;  // Only show non-empty categories.
        $args['number'] = 0;    // Set to 0 to exclude all.
    }
    return $args;
}

// disable uncategorized from sitemap

add_filter(
  'wp_sitemaps_taxonomies_query_args',
  function( $args ) {
    $args['exclude'] = isset( $args['exclude'] ) ? $args['exclude'] : array();
    $args['exclude'][] = 1;
    return $args;
  }
);

// enqueue admin css

function enqueue_admin_css() {
  wp_enqueue_style( 'admin-css', get_template_directory_uri(). '/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_css' );