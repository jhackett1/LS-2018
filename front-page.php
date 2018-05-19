<?php get_header(); ?>

<div class="site-body container">
  <main class="site-content home">

    <?php
      $do_not_duplicate = array();

      function homepage_grid($category_slug, &$do_not_duplicate, $top = false){
      $home_grid_query = new WP_Query(array(
        'category_name' => get_theme_mod($category_slug),
        'posts_per_page' => 4,
        'post__not_in' => $do_not_duplicate
      ));
      // Start loop
      if ($home_grid_query->have_posts()):
        $counter = 0;?>
        <?php if ($top === false) { ?>
          <h2 class="grid-title"><?php echo get_category_by_slug(get_theme_mod($category_slug))->name ?></h2>
        <?php } ?>
        <div class="post-grid">
          <?php while($home_grid_query->have_posts()): $home_grid_query->the_post();
          array_push($do_not_duplicate, get_the_ID());
          ?>
          <article class="post-grid-item <?php if ($counter == 0) { echo 'post'; } else {echo 'trail'; } ?>">
            <a href="<?php the_permalink(); ?>">
              <span class="post-date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
              <div class="image-holder">
                <div class="featured-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID, 'large') ?>')"></div>
              </div>
              <h2 class="post-title"><?php the_title(); ?></h2>
              <?php if ($counter == 0) { ?>
                <p class="post-excerpt"><?php the_excerpt(); ?></p>
              <?php } ?>
            </a>
          </article>

          <?php $counter++;
          endwhile;
          wp_reset_postdata(); ?>
        </div>
        <?php if ($top === false) { ?>
          <a href="<?php echo get_category_link( get_category_by_slug(get_theme_mod($category_slug))) ?>" class="more-stories">View more →</a>
        <?php } ?>
      <?php endif;
    } ?>


    <?php homepage_grid('sw_grid_1_category', $do_not_duplicate, true)?>
    <?php homepage_grid('sw_grid_2_category', $do_not_duplicate)?>
    <?php homepage_grid('sw_grid_3_category', $do_not_duplicate)?>
    <?php get_template_part('cta') ?>
    <?php homepage_grid('sw_grid_4_category', $do_not_duplicate)?>
    <?php homepage_grid('sw_grid_5_category', $do_not_duplicate)?>
    <?php homepage_grid('sw_grid_6_category', $do_not_duplicate)?>

  </main>
</div>

<?php get_footer(); ?>
