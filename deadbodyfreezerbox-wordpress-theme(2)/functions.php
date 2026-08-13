<?php
/**
 * Freezer Box Near Me — Theme functions.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'FREEZERBOX_VERSION', '1.0.0' );

/**
 * Theme setup: supports, menus, image sizes.
 */
function freezerbox_setup() {
	load_theme_textdomain( 'freezerbox', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 80,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	add_theme_support(
		'custom-background',
		array(
			'default-color' => '040A12',
		)
	);
	add_theme_support( 'align-wide' );

	set_post_thumbnail_size( 600, 400, true );
	add_image_size( 'freezerbox-card', 500, 340, true );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'freezerbox' ),
			'footer'  => __( 'Footer Quick Links', 'freezerbox' ),
		)
	);
}
add_action( 'after_setup_theme', 'freezerbox_setup' );

/**
 * Enqueue styles and scripts.
 */
function freezerbox_scripts() {
	// Font Awesome (icon font used throughout the design).
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

	// Google Fonts used by the design (Cinzel for headings, Plus Jakarta Sans for body copy).
	wp_enqueue_style( 'freezerbox-fonts', 'https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap', array(), null );

	// Parent stylesheet (theme header only).
	wp_enqueue_style( 'freezerbox-style', get_stylesheet_uri(), array(), FREEZERBOX_VERSION );

	// Main design stylesheet.
	wp_enqueue_style( 'freezerbox-main', get_template_directory_uri() . '/assets/css/main.css', array( 'freezerbox-style' ), FREEZERBOX_VERSION );

	// Main behaviour script (scroll reveal, sticky header, mobile menu, hero slider, FAQ accordion, back-to-top).
	wp_enqueue_script( 'freezerbox-main', get_template_directory_uri() . '/assets/js/main.js', array(), FREEZERBOX_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'freezerbox_scripts' );

/**
 * Register widget areas.
 */
function freezerbox_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'freezerbox' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Shown on blog posts and archive pages.', 'freezerbox' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'freezerbox_widgets_init' );

/**
 * Business info — Theme Customizer.
 *
 * Every hardcoded phone number / WhatsApp number / address in the original
 * HTML is made editable from Appearance → Customize → Business Info, with
 * defaults matching the original design exactly, so the visual output is
 * unchanged out of the box.
 */
function freezerbox_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'freezerbox_business_info',
		array(
			'title'    => __( 'Business Info', 'freezerbox' ),
			'priority' => 30,
		)
	);

	$fields = array(
		'freezerbox_phone_display' => array( 'label' => 'Phone Number (display)', 'default' => '+91 9666002935' ),
		'freezerbox_phone_link'    => array( 'label' => 'Phone Number (tel: link, digits only with country code)', 'default' => '+919666002935' ),
		'freezerbox_whatsapp'      => array( 'label' => 'WhatsApp Number (digits only with country code)', 'default' => '919666002935' ),
		'freezerbox_address'       => array( 'label' => 'Address', 'default' => 'Main Road, City Center, Hyderabad, Telangana 500001' ),
		'freezerbox_area'          => array( 'label' => 'Service Area (short)', 'default' => 'Hyderabad, Telangana' ),
	);

	foreach ( $fields as $id => $args ) {
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $args['default'],
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			$id,
			array(
				'label'   => __( $args['label'], 'freezerbox' ),
				'section' => 'freezerbox_business_info',
				'type'    => 'text',
			)
		);
	}
}
add_action( 'customize_register', 'freezerbox_customize_register' );


/**
 * Additional Customizer fields for footer and social links.
 */
function freezerbox_additional_customizer_controls( $wp_customize ) {
    $wp_customize->add_setting(
        'freezerbox_footer_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'freezerbox_footer_text',
        array(
            'label'   => __( 'Footer Information', 'freezerbox' ),
            'section' => 'freezerbox_business_info',
            'type'    => 'text',
        )
    );

    foreach ( array(
        'facebook'  => 'Facebook URL',
        'instagram' => 'Instagram URL',
        'youtube'   => 'YouTube URL',
    ) as $key => $label ) {
        $setting = 'freezerbox_social_' . $key;
        $wp_customize->add_setting(
            $setting,
            array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            $setting,
            array(
                'label'   => $label,
                'section' => 'freezerbox_business_info',
                'type'    => 'url',
            )
        );
    }
}
add_action( 'customize_register', 'freezerbox_additional_customizer_controls' );

/**
 * Small helpers so templates stay readable.
 */
function freezerbox_phone_display() {
	echo esc_html( get_theme_mod( 'freezerbox_phone_display', '+91 9666002935' ) );
}
function freezerbox_phone_link() {
	echo esc_attr( get_theme_mod( 'freezerbox_phone_link', '+919666002935' ) );
}
function freezerbox_whatsapp_number() {
	echo esc_attr( get_theme_mod( 'freezerbox_whatsapp', '919666002935' ) );
}

/**
 * Fallback menu that matches the original homepage navigation exactly,
 * used only if no "Primary Menu" has been assigned yet in Appearance → Menus.
 */
function freezerbox_fallback_primary_menu() {
    $pages = array(
        'home'         => __( 'Home', 'freezerbox' ),
        'services'     => __( 'Services', 'freezerbox' ),
        'service-areas'=> __( 'Service Areas', 'freezerbox' ),
        'reviews'      => __( 'Reviews', 'freezerbox' ),
        'faq'          => __( 'FAQ', 'freezerbox' ),
        'contact'      => __( 'Contact', 'freezerbox' ),
    );

    echo '<ul class="nav-links" id="navLinks">';
    foreach ( $pages as $slug => $label ) {
        $url = home_url( '/' );
        if ( 'home' !== $slug ) {
            $page = get_page_by_path( $slug, OBJECT, 'page' );
            if ( $page ) {
                $url = get_permalink( $page->ID );
            }
        }
        echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}

/**
 * Excerpt length / more string tuned to the design's card layout.
 */
function freezerbox_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'freezerbox_excerpt_length' );

function freezerbox_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'freezerbox_excerpt_more' );

/**
 * Pingback header for singular posts.
 */
function freezerbox_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">' . "\n";
	}
}
add_action( 'wp_head', 'freezerbox_pingback_header' );

/**
 * Register the reusable "Freezer Box Near Me Landing" page template
 * living in /page-templates so it appears in the editor's Template dropdown.
 */
function freezerbox_page_templates( $templates ) {
	$templates['page-templates/template-freezer-box-near-me.php'] = __( 'Landing Page: Freezer Box Near Me', 'freezerbox' );
	return $templates;
}
add_filter( 'theme_page_templates', 'freezerbox_page_templates' );

/**
 * Custom walker so wp_nav_menu() outputs markup that matches the
 * original hand-coded <ul class="nav-links">/<li>/<a> structure exactly.
 */
require get_template_directory() . '/inc/class-freezerbox-nav-walker.php';

/**
 * Custom comment output matching the theme's visual design.
 */
require get_template_directory() . '/inc/comment-callback.php';
require get_template_directory() . '/inc/page-setup.php';
