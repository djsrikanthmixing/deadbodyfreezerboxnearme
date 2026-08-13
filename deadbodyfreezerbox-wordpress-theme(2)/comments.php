<?php
/**
 * The template for displaying comments.
 *
 * Loads only on singular views where comments are open or there's at
 * least one comment, per WordPress convention.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$freezerbox_comment_count = get_comments_number();
			if ( '1' === $freezerbox_comment_count ) {
				esc_html_e( 'One Comment', 'freezerbox' );
			} else {
				printf(
					/* translators: %s: number of comments */
					esc_html( _n( '%s Comment', '%s Comments', $freezerbox_comment_count, 'freezerbox' ) ),
					esc_html( number_format_i18n( $freezerbox_comment_count ) )
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'    => 'ol',
					'short_ping' => true,
					'callback' => 'freezerbox_comment_callback',
				)
			);
			?>
		</ol>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => '&laquo;',
				'next_text' => '&raquo;',
			)
		);
		?>

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'freezerbox' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_form'   => 'comment-respond glass-box',
			'title_reply'  => __( 'Leave a Reply', 'freezerbox' ),
			'label_submit' => __( 'Post Comment', 'freezerbox' ),
			'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s btn btn-gold">%4$s</button>',
		)
	);
	?>

</div><!-- #comments -->
