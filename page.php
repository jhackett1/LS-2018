<?php get_header();
// Start loop
if (have_posts()):
  while(have_posts()): the_post();
  ?>
    <?php if (get_the_post_thumbnail_url($post->ID)) { ?>
      <section class="image-holder single">
        <div class="featured-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID, 'large') ?>')"></div>
      </section>
    <?php } ?>
    <div class="side-body container">
      <main class="site-content single <?php if (get_the_post_thumbnail_url($post->ID)) { echo 'with-image'; } ?>">
        <article class="post post-single">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      </main>
    </div>

  <?php endwhile;
// Finish loop
endif;
get_footer(); ?>
