<?php
/**
 * Walker that renders wp_nav_menu() with the same flat <li><a> markup
 * the original static HTML used, so no CSS is needed for menu items.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class FreezerBox_Nav_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		// Sub-menus collapse into the same flat list (design has no dropdowns).
		$output .= '';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = implode( ' ', array_filter( $classes ) );

		$output .= '<li' . ( $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '' ) . '>';

		$atts = array();
		$atts['href']  = ! empty( $item->url ) ? $item->url : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( '' !== $value ) {
				$attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
			}
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );

		$output .= '<a' . $attributes . '>' . esc_html( $title ) . '</a>';
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}
