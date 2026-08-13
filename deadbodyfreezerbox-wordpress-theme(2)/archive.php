<?php
/**
 * The template for displaying archive pages: category, tag, date,
 * author and custom taxonomy archives.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="page-header-block">
  <div class="container">
    <h1><?php the_archive_title(); ?></h1>
    <?php if ( get_the_archive_description() ) : ?>
      <div class="archive-description entry-content"><?php the_archive_description(); ?></div>
    <?php endif; ?>
  </div>
</div>

<div class="container" style="padding-bottom: 70px;">
  <div style="display: grid; grid-template-columns: <?php echo is_active_sidebar( 'sidebar-1' ) ? '2fr 1fr' : '1fr'; ?>; gap: 40px; align-items: start;">
    <div>
      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
          get_template_part( 'template-parts/content' );
        endwhile;

        echo '<div class="pagination-nav">';
        the_posts_pagination(
          array(
            'mid_size'  => 2,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
          )
        );
        echo '</div>';
      else :
        get_template_part( 'template-parts/content', 'none' );
      endif;
      ?>
    </div>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
get_footer();
