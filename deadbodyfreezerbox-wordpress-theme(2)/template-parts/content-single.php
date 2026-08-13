<?php
/**
 * Template part for displaying a full single post.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'glass-box' ); ?> style="padding: 40px; margin-bottom: 30px;">

  <div class="post-meta">
    <span><i class="fa-solid fa-calendar" aria-hidden="true"></i> <?php echo esc_html( get_the_date() ); ?></span>
    <span><i class="fa-solid fa-user" aria-hidden="true"></i> <?php the_author(); ?></span>
    <?php if ( has_category() ) : ?>
      <span><i class="fa-solid fa-folder" aria-hidden="true"></i> <?php the_category( ', ' ); ?></span>
    <?php endif; ?>
  </div>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-thumbnail" style="margin-bottom: 25px; border-radius: 14px; overflow: hidden;">
      <?php the_post_thumbnail( 'large' ); ?>
    </div>
  <?php endif; ?>

  <div class="entry-content">
    <?php
    the_content();

    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'freezerbox' ),
        'after'  => '</div>',
      )
    );
    ?>
  </div>

  <?php if ( has_tag() ) : ?>
    <div class="post-tags" style="margin-top: 25px; border-top: 1px solid var(--border-card); padding-top: 20px;">
      <i class="fa-solid fa-tags" aria-hidden="true"></i> <?php the_tags( '', ', ', '' ); ?>
    </div>
  <?php endif; ?>

</article>
