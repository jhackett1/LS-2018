<?php get_header(); ?>

<div class="site-body">
  <main class="site-content container">
    <?php if (is_search()) { ?>
      <h1 class="archive-title">Search results</h1>
    <?php } ?>
    <?php get_template_part('loop'); ?>
  </main>
</div>

<?php get_footer(); ?>
