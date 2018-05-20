<?php get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<div class="side-body">
  <main class="site-content container">
    <h1 class="archive-title"><?php the_archive_title(); ?><?php if($paged > 1) echo ', page ' . $paged; ?></h1>
    <?php get_template_part('loop'); ?>
  </main>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
