<?php
/**
 * The header for the Freezer Box Near Me theme.
 *
 * Outputs everything from <!DOCTYPE html> through the opening <main> tag,
 * including the site header and navigation.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$freezerbox_description = is_front_page()
	? __( '24/7 Dead Body Freezer Box on Rent in Hyderabad. Fast doorstep delivery, freezer box near me, mortuary freezer box, ambulance and funeral services.', 'freezerbox' )
	: wp_strip_all_tags( get_the_excerpt() );

if ( empty( $freezerbox_description ) ) {
	$freezerbox_description = get_bloginfo( 'description' );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( ! is_singular() || ! pings_open() ) : ?>
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<?php endif; ?>

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo esc_url( is_front_page() ? home_url( '/' ) : get_permalink() ); ?>">
<meta property="og:title" content="<?php echo esc_attr( wp_get_document_title() ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $freezerbox_description ); ?>">
<meta property="og:image" content="<?php echo esc_url( has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'large' ) : get_template_directory_uri() . '/assets/images/freezer-box.webp' ); ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="en_IN">
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?php echo esc_url( is_front_page() ? home_url( '/' ) : get_permalink() ); ?>">
<meta name="twitter:title" content="<?php echo esc_attr( wp_get_document_title() ); ?>">
<meta name="twitter:description" content="<?php echo esc_attr( $freezerbox_description ); ?>">
<meta name="twitter:image" content="<?php echo esc_url( has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'large' ) : get_template_directory_uri() . '/assets/images/freezer-box.webp' ); ?>">

<!-- Performance: Resource Hints & Preloads -->
<link rel="dns-prefetch" href="https://fonts.googleapis.com">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php if ( is_front_page() ) : ?>
<link rel="preload" as="image" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/freezer-box.webp' ); ?>" type="image/webp" fetchpriority="high">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main-content" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to main content', 'freezerbox' ); ?></a>

<!-- Header Navigation -->
<header id="siteHeader">
  <div class="container nav-container">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="<?php bloginfo( 'name' ); ?> Home">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <i class="fa-solid fa-snowflake" aria-hidden="true"></i>
      <?php endif; ?>
      <span><?php bloginfo( 'name' ); ?></span>
    </a>

    <nav aria-label="Main Navigation">
      <?php
      if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container'      => false,
            'items_wrap'     => '<ul class="nav-links" id="navLinks">%3$s</ul>',
            'walker'         => new FreezerBox_Nav_Walker(),
          )
        );
      } else {
        freezerbox_fallback_primary_menu();
      }
      ?>
    </nav>

    <div class="header-actions">
      <a href="tel:<?php freezerbox_phone_link(); ?>" class="btn btn-gold" style="padding: 10px 20px; font-size: 0.85rem;" aria-label="<?php esc_attr_e( 'Call Emergency Helpline', 'freezerbox' ); ?>">
        <i class="fa-solid fa-phone" aria-hidden="true"></i> <?php esc_html_e( 'Call Now', 'freezerbox' ); ?>
      </a>
      <button class="mobile-menu-btn" id="menuBtn" aria-label="<?php esc_attr_e( 'Toggle Navigation Menu', 'freezerbox' ); ?>" aria-expanded="false" aria-controls="navLinks">
        <i class="fa-solid fa-bars" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</header>

<main id="main-content">
