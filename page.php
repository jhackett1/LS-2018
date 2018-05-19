<?php get_header(); ?>

<div class="side-body">
  <main class="site-content single">
    <?php
    // Start loop
    if (have_posts()):
      while(have_posts()): the_post(); ?>

      <article class="post post-single">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </article>

      <?php endwhile;
    // Finish loop
    endif; ?>
  </main>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
