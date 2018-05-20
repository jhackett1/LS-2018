<aside class="site-sidebar">
  <h2>Popular stories</h2>
  <?php $popular = new WP_Query(array(
      'posts_per_page' => 4,
      // Most viewed posts first
      'meta_key' => 'sw_post_views_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      // Exclude current post
      'post__not_in' => array($post->ID)
  ));
  if ($popular->have_posts()): ?>
    <ul class="popular-posts-list">
    <?php while ($popular->have_posts()): $popular->the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('thumbnail') ?>
          <h4><?php the_title(); ?></h4>
        </a>
      </li>
    <?php endwhile; ?>
    </ul>
    <?php wp_reset_postdata();
  endif; ?>
</aside>
