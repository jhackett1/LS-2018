<!DOCTYPE html>
<!--
 _   _ _____ _     _     ___  _
| | | | ____| |   | |   / _ \| |
| |_| |  _| | |   | |  | | | | |
|  _  | |___| |___| |__| |_| |_|
|_| |_|_____|_____|_____\___/(_)

Scrutinising the source, I see...

If you like what you see, perhaps you'd consider using me for your next web project?

Find out more at SMALLWINS.CO.UK or shoot an email to HELLO@SMALLWINS.CO.UK

- Joshua

 -->
 <html <?php language_attributes(); ?>>
 	<head>
 		<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title('|', true, 'right'); echo bloginfo('name')?> | <?php echo bloginfo('description'); ?></title>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php get_template_part('social-meta'); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( 'frontend' ); ?>>
    <header class="site-header">
      <div class="container">
        <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
        <nav class="main-menu">
          <a class="close" role="button">
            <img src="<?php echo get_template_directory_uri() ?>/img/cross.svg"/>
          </a>
          <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
          <i class="fa fa-search">
          </i>
          <section class="search-box">
            <?php get_search_form(); ?>
          </section>          
        </nav>
        <a class="bars" role="button">
          <img src="<?php echo get_template_directory_uri() ?>/img/bars.svg"/>
        </a>
      </div>
    </header>
