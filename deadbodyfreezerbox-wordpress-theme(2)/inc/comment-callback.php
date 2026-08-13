<?php
/**
 * Custom comment markup, styled to match the site's glass-box design.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'freezerbox_comment_callback' ) ) {
	function freezerbox_comment_callback( $comment, $args, $depth ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
		?>
		<<?php echo esc_html( $tag ); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
			<div class="comment-body glass-box">
				<div class="comment-author-row" style="display:flex; align-items:center; gap:12px; margin-bottom:10px;">
					<?php echo get_avatar( $comment, 48 ); ?>
					<div>
						<p class="comment-author">
							<?php echo get_comment_author_link(); ?>
						</p>
						<p class="comment-metadata">
							<a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
								<?php
								printf(
									/* translators: %s: comment date and time */
									esc_html__( '%s ago', 'freezerbox' ),
									esc_html( human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) )
								);
								?>
							</a>
							<?php edit_comment_link( __( '(Edit)', 'freezerbox' ), ' ' ); ?>
						</p>
					</div>
				</div>

				<?php if ( '0' === $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><em><?php esc_html_e( 'Your comment is awaiting moderation.', 'freezerbox' ); ?></em></p>
				<?php endif; ?>

				<div class="comment-content entry-content">
					<?php comment_text(); ?>
				</div>

				<?php
				comment_reply_link(
					array_merge(
						$args,
						array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<p class="reply">',
							'after'     => '</p>',
						)
					)
				);
				?>
			</div>
		<?php
	}
}
