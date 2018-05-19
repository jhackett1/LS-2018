<?php get_header(); ?>

<div class="side-body">
  <main class="site-content container">
    <h1 class="archive-title"><?php the_archive_title(); ?></h1>
    <?php get_template_part('loop'); ?>
  </main>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
