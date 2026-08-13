<?php
/**
 * The template for displaying single blog posts.
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
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div class="container" style="padding-bottom: 70px;">
  <div style="display: grid; grid-template-columns: <?php echo is_active_sidebar( 'sidebar-1' ) ? '2fr 1fr' : '1fr'; ?>; gap: 40px; align-items: start;">
    <div>
      <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', 'single' );

        the_post_navigation(
          array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'freezerbox' ) . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'freezerbox' ) . '</span> <span class="nav-title">%title</span>',
          )
        );

        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      endwhile;
      ?>
    </div>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
get_footer();
