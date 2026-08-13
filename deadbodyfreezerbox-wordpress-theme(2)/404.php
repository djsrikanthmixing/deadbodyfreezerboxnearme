<?php
/**
 * The template for displaying 404 (Not Found) pages.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="container error-404-wrap animate-on-scroll">
  <div class="error-code"><i class="fa-solid fa-snowflake" aria-hidden="true"></i> 404</div>
  <h1 style="margin: 15px 0;"><?php esc_html_e( 'Page Not Found', 'freezerbox' ); ?></h1>
  <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto 35px; font-size: 1.05rem;">
    <?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Please head back home, or reach our 24/7 emergency helpline directly.', 'freezerbox' ); ?>
  </p>

  <div class="hero-cta" style="justify-content: center;">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-gold">
      <i class="fa-solid fa-house" aria-hidden="true"></i> <?php esc_html_e( 'Back to Homepage', 'freezerbox' ); ?>
    </a>
    <a href="tel:<?php freezerbox_phone_link(); ?>" class="btn btn-whatsapp">
      <i class="fa-solid fa-phone" aria-hidden="true"></i> <?php esc_html_e( 'Call Emergency Helpline', 'freezerbox' ); ?>
    </a>
  </div>

  <div style="max-width: 500px; margin: 45px auto 0;">
    <?php get_search_form(); ?>
  </div>
</div>

<?php
get_footer();
