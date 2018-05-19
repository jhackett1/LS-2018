<?php
// Start loop
if (have_posts()): ?>
  <div class="post-list">
    <?php while(have_posts()): the_post(); ?>

    <article class="post">
      <span class="post-date"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
      <a href="<?php the_permalink(); ?>">
        <div class="image-holder">
          <div class="featured-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID, 'large') ?>')"></div>
        </div>
        <h2 class="post-title"><?php the_title(); ?></h2>
      </a>
      <p class="post-excerpt"><?php the_excerpt(); ?></p>
    </article>

    <?php endwhile; ?>
  </div>
  <section class="post-pagination">
    <?php next_posts_link( 'Older articles' ); ?>
    <?php previous_posts_link( 'Newer articles' ); ?>
  </section>
<?php endif; ?>
