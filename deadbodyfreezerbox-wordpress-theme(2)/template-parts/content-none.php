<?php
/**
 * Template part shown when no posts match the query.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="glass-box" style="padding: 40px; text-align: center;">
  <h2><?php esc_html_e( 'Nothing Found', 'freezerbox' ); ?></h2>
  <?php if ( is_search() ) : ?>
    <p><?php esc_html_e( 'Sorry, no results matched your search. Please try different keywords.', 'freezerbox' ); ?></p>
    <?php get_search_form(); ?>
  <?php else : ?>
    <p><?php esc_html_e( 'It looks like nothing was found. Please check back soon.', 'freezerbox' ); ?></p>
  <?php endif; ?>
</div>
