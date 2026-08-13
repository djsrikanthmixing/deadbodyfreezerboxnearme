<?php
/**
 * Template Name: Contact
 * @package FreezerBox
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
get_header();
?>
<section id="contact" style="background: var(--bg-navy);">
    <div class="container">
      <div class="section-title animate-on-scroll">
        <h2>24/7 Emergency Contact & Helpline</h2>
        <p>Reach our dispatch center immediately for instant assistance across Hyderabad & Secunderabad.</p>
      </div>

      <div class="contact-emergency-banner animate-on-scroll" role="alert">
        <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
        <p>Emergency Helpline — Call Now: <a href="tel:<?php freezerbox_phone_link(); ?>"><?php freezerbox_phone_display(); ?></a></p>
      </div>

      <div class="contact-grid">
        <div class="glass-box contact-info animate-on-scroll delay-1">
          <h3>Dead Body Freezer Box Near Me</h3>
          
          <div class="info-list">
            <div class="info-item">
              <i class="fa-solid fa-phone" aria-hidden="true"></i>
              <div>
                <h4>24/7 Helpline Phone</h4>
                <p><a href="tel:<?php freezerbox_phone_link(); ?>" style="color: var(--gold-primary); font-weight: 700;"><?php freezerbox_phone_display(); ?></a></p>
              </div>
            </div>

            <div class="info-item">
              <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
              <div>
                <h4>WhatsApp Emergency</h4>
                <p><a href="https://wa.me/<?php freezerbox_whatsapp_number(); ?>" target="_blank" rel="noopener" style="color: var(--green-wa); font-weight: 700;">Chat on WhatsApp</a></p>
              </div>
            </div>

            <div class="info-item">
              <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
              <div>
                <h4>Main Location</h4>
                <p>Hyderabad, Secunderabad & All Telangana Districts — 500001</p>
              </div>
            </div>

            <div class="info-item">
              <i class="fa-solid fa-clock" aria-hidden="true"></i>
              <div>
                <h4>Operating Hours</h4>
                <p>24 Hours / 7 Days A Week (Always Open)</p>
              </div>
            </div>
          </div>

          <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="tel:<?php freezerbox_phone_link(); ?>" class="btn btn-gold" aria-label="Call Now">
              <i class="fa-solid fa-phone" aria-hidden="true"></i> Call Helpline
            </a>
            <a href="https://wa.me/<?php freezerbox_whatsapp_number(); ?>" class="btn btn-whatsapp" target="_blank" rel="noopener" aria-label="WhatsApp Us">
              <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp
            </a>
          </div>
        </div>

        <div class="map-container animate-on-scroll delay-2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.3160407079!2d78.26795856403248!3d17.41229980187425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" title="Dead Body Freezer Box Near Me Location Map" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>
<?php
get_footer();
