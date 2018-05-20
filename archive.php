<?php get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<?php if (is_author()) { ?>
  <section class="author-header">
    <div class="container">
      <h1><?php the_archive_title(); ?></h1>
      <?php echo get_avatar(get_the_author_meta( 'ID' ), 70); ?>
    </div>
  </section>
<?php } ?>

<div class="side-body">
  <main class="site-content container">
    <?php if (is_author()) { ?>
      <h2 class="archive-title">Latest stories</h2>
    <?php } else { ?>
      <h1 class="archive-title"><?php the_archive_title(); ?><?php if($paged > 1) echo ', page ' . $paged; ?></h1>
    <?php } ?>
    <?php get_template_part('loop'); ?>
  </main>
</div>
<?php get_footer(); ?>
