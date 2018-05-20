<?php
// THEME FUNCTIONS

// Get the customiser functions file
require_once "customiser.php";

// Enqueue scripts and styles
add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome/css/fontawesome-all.min.css');
  wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Cabin:400,400i,700,700i%7CAndada%3A400&subset=latin%2Clatin-ext&ver=1.0");
  wp_enqueue_script('bundle', get_template_directory_uri() . '/js/bundle.js', false, false, true);
});

// Add support for a site logo and featured images
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

// Register two menus
register_nav_menus( array(
  'main' => 'Main',
  'footer' => 'Footer'
));

// Register a widgetised area
// add_action('widgets_init', function() {
//   register_sidebar( array(
//       'name'          => __( 'Sidebar', 'smallwins' ),
//       'id'            => 'sidebar',
//       'before_widget' => '<section id="%1$s" class="widget %2$s">',
//       'after_widget'  => '</aside>',
//       'before_title'  => '<h3 class="widget-title">',
//       'after_title'   => '</h3>',
//   ) );
// });

// Remove some unnecessary markup from nav menus
add_filter( 'wp_nav_menu_args', function ( $args = '' ) {
    $args['container'] = false;
    return $args;
});

// Prettify excerpts
add_filter( 'excerpt_length', function($length) {
	return 20;
}, 999 );
add_filter('excerpt_more', function($more) {
  global $post;
	return '...';
});

// Remove unneeded Wordpress widgets and menus for a cleaner client experience
add_action('admin_menu', function() {
    remove_menu_page( 'about.php' );
    remove_meta_box('dashboard_primary', 'dashboard', 'core');// Remove WordPress Events and News
});
add_action( 'wp_before_admin_bar_render', function() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('wp-logo');
}, 7 );

// Do not auto-P images
add_filter('the_content', function($content){
  return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
});

// Customise the wp_login logo to the site logo
add_action('login_head', function(){
  ?>
    <style type="text/css">
      .login h1 a{
        background-image: none, url(<?php echo wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'medium' )[0]; ?>);
        background-size: contain;
      }
    </style>
  <?php
});

// Remove prefixes on archive.php titles
add_filter( 'get_the_archive_title', function ($title) {
  if ( is_category() ) {
    $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
    $title = get_the_author();
  }
  return $title;
});

// Remove style="width" from .wp-caption
add_filter('img_caption_shortcode_width', '__return_false');

// Track post views in a meta key
function sw_set_post_views($postID) {
    $count_key = 'sw_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function sw_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    sw_set_post_views($post_id);
}
add_action( 'wp_head', 'sw_track_post_views');
