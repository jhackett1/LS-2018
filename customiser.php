<?php
// CUSTOMISER SETTINGS

// SOCIAL SHARING
add_action('customize_register', function($wp_customize){

  // Section
  $wp_customize->add_section('sw_homepage', array(
    'title' => __('Homepage Post Grids', 'Small Wins'),
    'priority' => 20
  ));
  $wp_customize->add_section('sw_cta', array(
    'title' => __('Call To Action Bar', 'Small Wins'),
    'priority' => 20
  ));
  $wp_customize->add_section('sw_sharing', array(
    'title' => __('Social Sharing', 'Small Wins'),
    'priority' => 30
  ));

  // Settings
  $wp_customize->add_setting('sw_default_social_share_image', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_twitter_account', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_cta_headline', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_cta_html', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_cta_desc', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_grid_1_category', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_grid_2_category', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_grid_3_category', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_grid_4_category', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_grid_5_category', array(
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('sw_grid_6_category', array(
    'transport' => 'refresh',
  ));


  // Controls
  $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'sw_default_social_share_image', array(
    'label' => __('Default social share image'),
    'settings' => 'sw_default_social_share_image',
    'section' => 'sw_sharing'
  )));
  $wp_customize->add_control(
    'sw_twitter_account',
    array(
        'label' => 'Associated Twitter username (without @ symbol)',
        'section' => 'sw_sharing',
        'type' => 'text',
    )
  );


  $wp_customize->add_control(
    'sw_cta_headline',
    array(
        'label' => 'Headline',
        'section' => 'sw_cta',
        'type' => 'text',
    )
  );
  $wp_customize->add_control(
    'sw_cta_html',
    array(
        'label' => 'Embed code or HTML',
        'section' => 'sw_cta',
        'type' => 'textarea',
    )
  );
  $wp_customize->add_control(
    'sw_cta_desc',
    array(
        'label' => 'Description',
        'section' => 'sw_cta',
        'type' => 'textarea',
    )
  );
  $wp_customize->add_control(
    'sw_grid_1_category',
    array(
        'label' => 'Grid 1 category slug',
        'section' => 'sw_homepage',
        'type' => 'text',
    )
  );
  $wp_customize->add_control(
    'sw_grid_2_category',
    array(
        'label' => 'Grid 2 category slug',
        'section' => 'sw_homepage',
        'type' => 'text',
    )
  );
  $wp_customize->add_control(
    'sw_grid_3_category',
    array(
        'label' => 'Grid 3 category slug',
        'section' => 'sw_homepage',
        'type' => 'text',
    )
  );
  $wp_customize->add_control(
    'sw_grid_4_category',
    array(
        'label' => 'Grid 4 category slug',
        'section' => 'sw_homepage',
        'type' => 'text',
    )
  );
  $wp_customize->add_control(
    'sw_grid_5_category',
    array(
        'label' => 'Grid 5 category slug',
        'section' => 'sw_homepage',
        'type' => 'text',
    )
  );
  $wp_customize->add_control(
    'sw_grid_6_category',
    array(
        'label' => 'Grid 6 category slug',
        'section' => 'sw_homepage',
        'type' => 'text',
    )
  );

});
