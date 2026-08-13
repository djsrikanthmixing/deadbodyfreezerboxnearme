<?php
/**
 * The footer for the Freezer Box Near Me theme.
 *
 * Closes the #main-content wrapper opened in header.php and outputs the
 * site footer, floating action buttons, and mobile sticky call bar that
 * appear on every page.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</main><!-- #main-content -->

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" style="margin-bottom: 15px;" aria-label="<?php esc_attr_e( 'Footer Logo', 'freezerbox' ); ?>">
          <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <i class="fa-solid fa-snowflake" aria-hidden="true"></i>
          <?php endif; ?>
          <span><?php bloginfo( 'name' ); ?></span>
        </a>
        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
          <?php
          echo esc_html(
            get_theme_mod( 'freezerbox_footer_text' )
              ? get_theme_mod( 'freezerbox_footer_text' )
              : ( get_bloginfo( 'description' )
                  ? get_bloginfo( 'description' )
                  : __( 'Providing compassionate, rapid, and respectful 24/7 Dead Body Freezer Box Rentals, Mortuary Cabinets, Hearse Vans, and Funeral Transportation across Hyderabad and Telangana.', 'freezerbox' ) )
          );
          ?>
        </p>
      </div>

      <div class="footer-col">
        <h4><?php esc_html_e( 'Quick Links', 'freezerbox' ); ?></h4>
        <?php
        if ( has_nav_menu( 'footer' ) ) {
          wp_nav_menu(
            array(
              'theme_location' => 'footer',
              'container'      => false,
              'items_wrap'     => '<ul>%3$s</ul>',
              'walker'         => new FreezerBox_Nav_Walker(),
            )
          );
        } else {
          ?>
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/#home' ) ); ?>"><?php esc_html_e( 'Home', 'freezerbox' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Our Services', 'freezerbox' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'Why Choose Us', 'freezerbox' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#coverage' ) ); ?>"><?php esc_html_e( 'Coverage Areas', 'freezerbox' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#faq' ) ); ?>"><?php esc_html_e( 'FAQs', 'freezerbox' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'freezerbox' ); ?></a></li>
          </ul>
          <?php
        }
        ?>
      </div>

      <div class="footer-col">
        <h4><?php esc_html_e( 'Our Services', 'freezerbox' ); ?></h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Freezer Box Rental', 'freezerbox' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Mortuary Freezer Box', 'freezerbox' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'VIP Freezer Box', 'freezerbox' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Hearse Van Service', 'freezerbox' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Last Journey Vehicle', 'freezerbox' ); ?></a></li>
          <li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Ambulance Service', 'freezerbox' ); ?></a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4><?php esc_html_e( 'Emergency Contact', 'freezerbox' ); ?></h4>
        <ul>
          <li><a href="tel:<?php freezerbox_phone_link(); ?>" style="color: var(--gold-primary); font-weight: 700;"><i class="fa-solid fa-phone" aria-hidden="true"></i> <?php freezerbox_phone_display(); ?></a></li>
          <li><a href="https://wa.me/<?php freezerbox_whatsapp_number(); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> <?php esc_html_e( 'WhatsApp Support', 'freezerbox' ); ?></a></li>
          <li><span style="color: var(--text-muted);"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> <?php echo esc_html( get_theme_mod( 'freezerbox_area', 'Hyderabad, Telangana' ) ); ?></span></li>
          <li><span style="color: var(--text-muted);"><i class="fa-solid fa-clock" aria-hidden="true"></i> <?php esc_html_e( '24/7 365 Days Service', 'freezerbox' ); ?></span></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'freezerbox' ); ?></p>
    </div>
  </div>
</footer>

<!-- Floating Action Buttons -->
<div class="floating-container" aria-label="<?php esc_attr_e( 'Quick contact actions', 'freezerbox' ); ?>">
  <button class="float-btn float-top" id="scrollTopBtn" aria-label="<?php esc_attr_e( 'Scroll to top', 'freezerbox' ); ?>">
    <span class="float-label"><?php esc_html_e( 'Back to Top', 'freezerbox' ); ?></span>
    <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
  </button>
  <a href="https://wa.me/<?php freezerbox_whatsapp_number(); ?>?text=<?php echo rawurlencode( __( 'I need urgent Dead Body Freezer Box service in Hyderabad', 'freezerbox' ) ); ?>" class="float-btn float-wa" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'WhatsApp Emergency Helpline', 'freezerbox' ); ?>">
    <span class="float-label"><?php esc_html_e( 'WhatsApp Us', 'freezerbox' ); ?></span>
    <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
  </a>
  <a href="tel:<?php freezerbox_phone_link(); ?>" class="float-btn float-phone" aria-label="<?php esc_attr_e( 'Call Emergency Helpline', 'freezerbox' ); ?>">
    <span class="float-label"><?php esc_html_e( 'Call Now', 'freezerbox' ); ?></span>
    <i class="fa-solid fa-phone" aria-hidden="true"></i>
  </a>
</div>

<!-- Mobile Sticky Bottom Call Bar -->
<div class="mobile-sticky-bar" role="navigation" aria-label="<?php esc_attr_e( 'Mobile emergency contact', 'freezerbox' ); ?>">
  <div class="bar-flex">
    <a href="tel:<?php freezerbox_phone_link(); ?>" class="btn-gold"><i class="fa-solid fa-phone" aria-hidden="true"></i> <?php esc_html_e( 'Call Now', 'freezerbox' ); ?></a>
    <a href="https://wa.me/<?php freezerbox_whatsapp_number(); ?>?text=<?php echo rawurlencode( __( 'I need urgent Dead Body Freezer Box service in Hyderabad', 'freezerbox' ) ); ?>" class="btn-whatsapp" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> <?php esc_html_e( 'WhatsApp', 'freezerbox' ); ?></a>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
