<?php
/**
 * The template for displaying all static Pages.
 *
 * Used for any WordPress Page that isn't assigned a custom template
 * (e.g. Contact, About, Privacy Policy pages created in wp-admin).
 * Renders the site's shared header/footer chrome around the page's
 * own editable content.
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
  <div class="row" style="max-width: 900px; margin: 0 auto;">
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'glass-box' ); ?> style="padding: 40px;">
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
      </article>

      <?php
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    endwhile;
    ?>
  </div>
</div>

<?php
get_footer();
