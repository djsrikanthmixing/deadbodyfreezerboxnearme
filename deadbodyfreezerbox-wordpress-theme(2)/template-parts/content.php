<?php
/**
 * Template part for displaying post excerpts within the blog loop
 * (index.php, archive.php, search.php).
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-list-item' ); ?>>

  <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" class="post-thumbnail" style="display:block; border-radius: 14px; overflow: hidden; margin-bottom: 18px;">
      <?php the_post_thumbnail( 'freezerbox-card' ); ?>
    </a>
  <?php endif; ?>

  <h2 class="entry-title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h2>

  <div class="post-meta">
    <span><i class="fa-solid fa-calendar" aria-hidden="true"></i> <?php echo esc_html( get_the_date() ); ?></span>
    <span><i class="fa-solid fa-user" aria-hidden="true"></i> <?php the_author(); ?></span>
  </div>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>

  <a href="<?php the_permalink(); ?>" class="card-cta"><?php esc_html_e( 'Read More', 'freezerbox' ); ?> <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>

</article>
