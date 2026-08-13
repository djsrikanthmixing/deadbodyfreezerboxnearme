<?php
/**
 * The front page template.
 *
 * This is the homepage of the site — hero, services, about/"why choose us",
 * coverage areas, reviews, FAQ and contact sections — converted 1:1 from
 * the original index.html.
 *
 * @package FreezerBox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
  
    <!-- Hero Section -->
    <section class="hero" id="home">
    <div class="container hero-grid">
      <div class="animate-on-scroll">
        <div class="badge-emergency">
          <i class="fa-solid fa-bolt" aria-hidden="true"></i> 24/7 Immediate Doorstep Emergency Service
        </div>
        <p class="hero-tagline">
          24/7 Emergency Mortuary Freezer Box Rental Service in Hyderabad
Looking for a Dead Body Freezer Box on Rent in Hyderabad? We provide 24/7 emergency dead body freezer box rental, mortuary freezer box, VIP freezer box, hearse van, ambulance service, and funeral support with fast 30-minute doorstep delivery across Hyderabad and Telangana.
</p>
        
        <div class="hero-cta">
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="btn btn-gold" aria-label="Call <?php freezerbox_phone_display(); ?>">
            <i class="fa-solid fa-phone" aria-hidden="true"></i> Call Now: <?php freezerbox_phone_display(); ?>
          </a>
          <a href="" class="btn btn-whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> WhatsApp Now
          </a>
        </div>

        <div class="hero-features">
          <div class="feature-item"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> 24/7 365 Days Service</div>
          <div class="feature-item"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Immediate 30-Min Delivery</div>
          <div class="feature-item"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Home & Hospital Setup</div>
          <div class="feature-item"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Hygienic Stainless Steel Freezer Box</div>
          <div class="feature-item"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Hyderabad & All Telangana</div>
        </div>

        <div class="hero-stats" aria-label="Service highlights">
          <div class="hero-stat">
            <strong>24/7</strong>
            <span>Always Available</span>
          </div>
          <div class="hero-stat">
            <strong>30 Min</strong>
            <span>Fast Delivery</span>
          </div>
          <div class="hero-stat">
            <strong>4.9★</strong>
            <span>Google Rating</span>
          </div>
        </div>
      </div>

      <!-- Hero Slider -->
      <div class="animate-on-scroll delay-2">
        <div class="slider-container" id="heroSlider">
          <div class="slider-slide active">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/freezer-box.webp" type="image/webp">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/freezer-box.jpg" alt="Dead Body Freezer Box Rental Hyderabad - 24/7 Mortuary Freezer Box Service" width="600" height="380" loading="eager" fetchpriority="high" decoding="async">
            </picture>
            <div class="slider-overlay">
              <h3>Dead Body Freezer Box Rental</h3>
              <p>24/7 Dead Body Freezer Box Rental with fast doorstep delivery, hygienic stainless steel freezer boxes, and immediate setup for homes, hospitals, and funeral services across Hyderabad & Telangana.</p>
            </div>
          </div>
          <div class="slider-slide">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/last-journey.webp" type="image/webp">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/last-journey.jpg" alt="Last Journey Vehicle and Hearse Van Service in Hyderabad" width="600" height="380" loading="lazy" decoding="async">
            </picture>
            <div class="slider-overlay">
              <h3>Last Journey Vehicle</h3>
              <p>Looking for a Last Journey Vehicle Near Me? We provide 24/7 hearse van services across Hyderabad & Telangana for hospitals, homes, and funeral ceremonies with professional and compassionate support.</p>
            </div>
          </div>
          <div class="slider-slide">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ambulance.webp" type="image/webp">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/ambulance.jpg" alt="24/7 Mortuary Ambulance Service in Hyderabad and Telangana" width="600" height="380" loading="lazy" decoding="async">
            </picture>
            <div class="slider-overlay">
              <h3>24/7 Ambulance Service</h3>
              <p>Reliable 24/7 Ambulance Service in Hyderabad with emergency patient transport, dead body transport, ICU support, oxygen ambulance, and quick doorstep response across all Telangana districts.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services">
    <div class="container">
      <div class="section-title animate-on-scroll">
        <h2>Our Comprehensive Support Services</h2>
        <p>Providing dignified, empathetic, and rapid emergency preservation and transit solutions.</p>
      </div>

      <div class="services-grid">
        <div class="glass-box service-card animate-on-scroll delay-1">
          <div class="service-icon"><i class="fa-solid fa-snowflake" aria-hidden="true"></i></div>
          <h3>Dead Body Freezer Box on Rent in Hyderabad</h3>
          <p>
We provide 24/7 Dead Body Freezer Box on Rent in Hyderabad with hygienic stainless steel freezer boxes, maintaining temperatures between 0°C and -15°C. Our emergency freezer box rental service includes fast 30-minute doorstep delivery for homes, hospitals, and funeral services across Hyderabad and Telangana.
</p>

<a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">
    Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
</a>

</div>

<div class="glass-box service-card animate-on-scroll delay-2">
          <div class="service-icon"><i class="fa-solid fa-box-archive" aria-hidden="true"></i></div>
          <h3>Mortuary Freezer Box Rental in Hyderabad</h3>
          <p>
Our Mortuary Freezer Box in Hyderabad is designed for hospitals, mortuaries, funeral homes, and residences. We provide hygienic stainless steel mortuary freezer boxes with transparent glass, reliable cooling, and 24/7 emergency doorstep delivery across Hyderabad and Telangana.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="glass-box service-card animate-on-scroll delay-3">
          <div class="service-icon"><i class="fa-solid fa-crown" aria-hidden="true"></i></div>
          <h3>VIP Dead Body Freezer Box Rental in Hyderabad</h3>
          <p>
We provide premium VIP Dead Body Freezer Box Rental in Hyderabad with elegant glass-top stainless steel freezer boxes, bright LED lighting, hygienic cooling, and dignified presentation for funeral ceremonies. Available 24/7 with fast doorstep delivery across Hyderabad and Telangana.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="glass-box service-card animate-on-scroll delay-1">
          <div class="service-icon"><i class="fa-solid fa-van-shuttle" aria-hidden="true"></i></div>
          <h3>Last Journey Vehicle Service in Hyderabad</h3>
          <p>
Our Last Journey Vehicle Service in Hyderabad provides clean, air-conditioned funeral vehicles for respectful transportation of the deceased from hospitals, homes, or mortuaries to cremation and burial grounds. Available 24/7 with professional staff.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="glass-box service-card animate-on-scroll delay-2">
          <div class="service-icon"><i class="fa-solid fa-ribbon" aria-hidden="true"></i></div>
          <h3>24/7 Hearse Van Service in Hyderabad</h3>
          <p>
Our 24/7 Hearse Van Service in Hyderabad provides safe, respectful, and timely transportation for the deceased from hospitals, homes, and mortuaries. Clean, air-conditioned hearse vans are available with trained staff across Hyderabad and Telangana.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="glass-box service-card animate-on-scroll delay-3">
          <div class="service-icon"><i class="fa-solid fa-truck-medical" aria-hidden="true"></i></div>
          <h3>24/7 Ambulance Service in Hyderabad</h3>
          <p>
We provide 24/7 emergency ambulance services in Hyderabad with trained drivers, oxygen support, patient transfer, and deceased body transportation. Fast response across Hyderabad and Telangana.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="glass-box service-card animate-on-scroll delay-1">
          <div class="service-icon"><i class="fa-solid fa-truck-fast" aria-hidden="true"></i></div>
          <h3>Dead Body Transportation Service in Hyderabad</h3>
          <p>
Professional Dead Body Transportation Service in Hyderabad for hospitals, homes, mortuaries, cremation grounds, and long-distance transfers with complete dignity and care.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="glass-box service-card animate-on-scroll delay-2">
          <div class="service-icon"><i class="fa-solid fa-house-medical" aria-hidden="true"></i></div>
          <h3>Hospital to Home Dead Body Transport</h3>
          <p>
Immediate hospital to home dead body transport service in Hyderabad with freezer box support, trained staff, and safe transportation available 24 hours a day.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="glass-box service-card animate-on-scroll delay-3">
          <div class="service-icon"><i class="fa-solid fa-route" aria-hidden="true"></i></div>
          <h3>Outstation Dead Body Transport Service</h3>
          <p>
Outstation dead body transport from Hyderabad to all districts of Telangana, Andhra Pradesh, Karnataka, Tamil Nadu, Maharashtra, and across India with freezer box facilities.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <div class="glass-box service-card animate-on-scroll delay-1">
          <div class="service-icon"><i class="fa-solid fa-hands-holding-circle" aria-hidden="true"></i></div>
          <h3>24/7 Funeral Assistance Services</h3>
          <p>
Complete funeral assistance including freezer box rental, hearse van, ambulance service, body transportation, cremation support, and emergency arrangements throughout Hyderabad.
</p>
          <a href="tel:<?php freezerbox_phone_link(); ?>" class="card-cta">Book Now <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section" id="about">
    <div class="container">
      <div class="section-title animate-on-scroll">
        <h2>Why Choose Dead Body Freezer Box Near Me</h2>
        <p>We combine empathetic human care with high-precision refrigeration logistics in times of crisis.</p>
      </div>

      <div class="about-grid">
        <div class="glass-box about-card animate-on-scroll delay-1">
          <i class="fa-solid fa-clock" aria-hidden="true"></i>
          <h4>24/7 Immediate Dispatch</h4>
          <p>Always active helpline ready to dispatch freezer boxes and hearse vans within minutes of your call.</p>
        </div>

        <div class="glass-box about-card animate-on-scroll delay-2">
          <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
          <h4>Clinical Sanitization</h4>
          <p>100% disinfected, stainless steel units cleaned using medical-grade sanitizers before every deployment.</p>
        </div>

        <div class="glass-box about-card animate-on-scroll delay-3">
          <i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i>
          <h4>Empathetic Support</h4>
          <p>Trained drivers and technicians who handle every step with extreme respect, dignity, and care.</p>
        </div>

        <div class="glass-box about-card animate-on-scroll delay-4">
          <i class="fa-solid fa-tags" aria-hidden="true"></i>
          <h4>Transparent Pricing</h4>
          <p>Clear, fixed rental rates without hidden midnight surcharges or unexpected add-on costs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Coverage Areas Section -->
  <section id="coverage">
    <div class="container">
      <div class="section-title animate-on-scroll">
        <h2>Dead Body Freezer Box Rental Service Areas in Hyderabad & Telangana</h2>
        <p>We provide 24/7 Dead Body Freezer Box Rental, Mortuary Freezer Box, Hearse Van, Ambulance Service, and Dead Body Transportation across Hyderabad, Secunderabad, Kukatpally, Miyapur, Gachibowli, Madhapur, Banjara Hills, Jubilee Hills, Uppal, LB Nagar, Dilsukhnagar, Shamshabad, Medchal, Patancheru, and all Telangana districts with fast doorstep delivery.</p>
      </div>

      <div class="coverage-wrapper animate-on-scroll delay-1">
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Hyderabad</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Secunderabad</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Kukatpally</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Miyapur</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Gachibowli</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Madhapur</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Hitech City</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Kondapur</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Banjara Hills</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Jubilee Hills</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Begumpet</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Uppal</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> LB Nagar</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Dilsukhnagar</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Shamshabad</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Patancheru</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Medchal</div>
        <div class="area-chip"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> All Telangana Districts</div>
      </div>
    </div>
  </section>

  <!-- Testimonials & Google Rating -->
  <section id="reviews" style="background: var(--bg-navy);">
    <div class="container">
      <div class="ratings-summary animate-on-scroll">
        <div class="rating-stars">
          <i class="fa-solid fa-star" aria-hidden="true"></i>
          <i class="fa-solid fa-star" aria-hidden="true"></i>
          <i class="fa-solid fa-star" aria-hidden="true"></i>
          <i class="fa-solid fa-star" aria-hidden="true"></i>
          <i class="fa-solid fa-star" aria-hidden="true"></i>
        </div>
        <h2 style="font-size: 1.8rem;">4.9 / 5.0 Google Rating</h2>
        <p style="color: var(--text-muted);">Trusted by over 3,500+ families across Hyderabad during critical hours.</p>
      </div>

      <div class="reviews-grid">
        <div class="glass-box review-card animate-on-scroll delay-1">
          <div class="client-stars"><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></div>
          <p>"I booked a Dead Body Freezer Box Rental in Hyderabad at 2:30 AM. The freezer box arrived within 30 minutes. The equipment was hygienic, the staff was professional, and the service was excellent. Highly recommended."</p>
          <div class="client-name">Srinivas Rao</div>
          <div class="client-location">Kukatpally, Hyderabad</div>
        </div>

        <div class="glass-box review-card animate-on-scroll delay-2">
          <div class="client-stars"><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></div>
          <p>"We used the Hearse Van Service and Mortuary Freezer Box in Hyderabad for our family. The vehicle arrived on time, the staff handled everything respectfully, and the entire process was smooth and professional."</p>
          <div class="client-name">Rajesh Kumar</div>
          <div class="client-location">Gachibowli, Hyderabad</div>
        </div>

        <div class="glass-box review-card animate-on-scroll delay-3">
          <div class="client-stars"><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></div>
          <p>"Affordable Dead Body Freezer Box Rental in Hyderabad with transparent pricing. The VIP Glass Top Mortuary Freezer Box was clean, well maintained, and delivered quickly. Excellent emergency service."</p>
          <div class="client-name">Venkatesh M.</div>
          <div class="client-location">LB Nagar, Hyderabad</div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section id="faq">
    <div class="container">
      <div class="section-title animate-on-scroll">
        <h2>Dead Body Freezer Box Rental FAQs – Hyderabad</h2>
        <p>Find answers to the most common questions about Dead Body Freezer Box Rental, Mortuary Freezer Box, Hearse Van, Ambulance Service, Dead Body Transportation, pricing, delivery, and emergency funeral support in Hyderabad and Telangana.</p>
      </div>

      <div class="faq-grid animate-on-scroll delay-1">
        <div class="faq-item">
    <button aria-expanded="false">
        1. What is a Dead Body Freezer Box?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        A Dead Body Freezer Box is a portable refrigeration unit used to preserve the deceased at temperatures between 0°C and -15°C. Our Dead Body Freezer Box Rental Service in Hyderabad provides hygienic stainless steel freezer boxes with 24/7 doorstep delivery for homes, hospitals, and funeral services.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        2. How fast can you deliver a Dead Body Freezer Box in Hyderabad?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        We provide 24/7 emergency Dead Body Freezer Box Rental in Hyderabad with fast doorstep delivery, usually within 30 to 45 minutes depending on your location and traffic conditions.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        3. What is the rental price of a Dead Body Freezer Box in Hyderabad?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        The rental price depends on the type of freezer box, rental duration, and delivery location. Contact us anytime for a transparent quotation with no hidden charges.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        4. Do you provide Mortuary Freezer Box Rental in Hyderabad?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        Yes. We provide hygienic Mortuary Freezer Box Rental in Hyderabad for homes, hospitals, mortuaries, and funeral ceremonies with 24/7 emergency support.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        5. Do you provide Hearse Van Service in Hyderabad?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        Yes. Our Hearse Van Service in Hyderabad includes air-conditioned last journey vehicles with trained staff for safe and respectful transportation across Hyderabad and Telangana.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        6. Do you provide Dead Body Transportation Service?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        Yes. We provide local and outstation Dead Body Transportation Service with freezer box support, hearse vans, and ambulance services across Hyderabad, Telangana, and neighbouring states.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        7. Which areas in Hyderabad do you cover?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        We cover Hyderabad, Secunderabad, Kukatpally, Miyapur, Gachibowli, Madhapur, Jubilee Hills, Banjara Hills, LB Nagar, Uppal, Dilsukhnagar, Shamshabad, Medchal, Patancheru, and all Telangana districts.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        8. Can I book a Dead Body Freezer Box immediately?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        Yes. Simply call our 24/7 emergency helpline or contact us on WhatsApp. Our team will dispatch a freezer box immediately and provide quick doorstep delivery.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        9. Do you provide Ambulance Service in Hyderabad?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        Yes. We provide 24/7 ambulance services in Hyderabad for hospital transfers, emergency transportation, and funeral support with trained drivers and professional assistance.
    </div>
</div>

<div class="faq-item">
    <button aria-expanded="false">
        10. Why choose your Dead Body Freezer Box Rental Service?
        <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>
    <div class="faq-answer">
        We are trusted for 24/7 emergency response, hygienic stainless steel freezer boxes, transparent pricing, trained staff, quick doorstep delivery, and reliable funeral support services across Hyderabad and Telangana.
    </div>
</div>
    </div>
    </div>
  </section>

  <!-- Contact Section -->
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
