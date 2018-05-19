<?php get_header();
// Start loop
if (have_posts()):
  while(have_posts()): the_post(); ?>
    <section class="image-holder">
      <div class="featured-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID, 'large') ?>')"></div>
    </section>
    <div class="side-body container">
      <main class="site-content single">
        <article class="post post-single">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <span class="post-meta"><?php the_category(', '); echo " | " . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span>
          <?php the_content(); ?>
        </article>
      </main>
      <?php get_sidebar(); ?>
    </div>
  <?php endwhile;
// Finish loop
endif;
get_footer(); ?>
