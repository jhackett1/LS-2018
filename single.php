<?php get_header();
// Start loop
if (have_posts()):
  while(have_posts()): the_post();
  ?>
    <section class="image-holder single">
      <div class="featured-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID, 'large') ?>')"></div>
    </section>
    <div class="side-body container">
      <main class="site-content single">
        <article class="post post-single">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <span class="post-meta"><?php the_category(', '); echo " | " . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
          <?php the_content(); ?>
        </article>
        <?php get_sidebar(); ?>
      </main>
    </div>
    <section class="related-posts-container container">
      <?php
        // Get an array of category IDs the main post is part of
        $categories = wp_get_post_terms($post, 'category', array(
          'fields' => 'ids'
        ));
        $related = new WP_Query(array(
          // Only get four posts
          'posts_per_page' => 4,
          // Posts that share at least one category with the main post
          'category__in' => $categories,
          // Exclude current post
          'post__not_in' => array($post->ID)
        ));
        // Start loop
        if ($related->have_posts()):
          $counter = 0; ?>
          <h2 class="grid-title">Related</h2>
          <div class="post-grid">
            <?php while($related->have_posts()): $related->the_post();
            ?>
            <article class="post-grid-item <?php if ($counter == 0) { echo 'post'; } else {echo 'trail'; } ?>">
              <a href="<?php the_permalink(); ?>">
                <div class="image-holder">
                  <div class="featured-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID, 'large') ?>')"></div>
                </div>
                <div class="text-panel">
                  <span class="post-date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
                  <h2 class="post-title"><?php the_title(); ?></h2>
                  <?php if ($counter == 0) { ?>
                    <p class="post-excerpt"><?php the_excerpt(); ?></p>
                  <?php } ?>
                </div>
              </a>
            </article>

            <?php $counter++;
            endwhile;
            wp_reset_postdata(); ?>
          </div>
          <?php if ($top === false) { ?>
            <a href="<?php echo get_category_link( get_category_by_slug(get_theme_mod($category_slug))) ?>" class="more-stories">More <?php echo get_category_by_slug(get_theme_mod($category_slug))->name ?> →</a>
          <?php } ?>
        <?php endif; ?>
      </section>

  <?php endwhile;
// Finish loop
endif;
get_footer(); ?>
