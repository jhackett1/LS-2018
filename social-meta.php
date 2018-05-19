<meta property="fb:app_id" content="1134129026651501" />
<?php
if (is_single()){
  $feat = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'ogimg' );
  $feat = $feat[0];
  $description = get_post_field( 'post_content', $post->ID );
  $description = trim( wp_strip_all_tags( $description, true ) );
  $description = wp_trim_words( $description, 15 );
  ?>
  <meta property="og:url" content="<?php the_permalink() ?>"/>
  <meta property="og:title" content="<?php single_post_title(''); ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?php echo $feat; ?>" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@<?php echo get_theme_mod('smallwins_twitter_account'); ?>">
  <meta name="twitter:creator" content="@<?php echo get_theme_mod('smallwins_twitter_account'); ?>">
  <meta name="twitter:title" content="<?php the_title(); ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="<?php echo $feat; ?>">
<?php } else { ?>
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo get_theme_mod('smallwins_default_social_share_image'); ?>" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@<?php echo get_theme_mod('smallwins_twitter_account'); ?>">
  <meta name="twitter:creator" content="@<?php echo get_theme_mod('smallwins_twitter_account'); ?>">
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
  <meta name="twitter:image" content="<?php echo get_theme_mod('smallwins_default_social_share_image'); ?>" >
<?php } ?>
