document.addEventListener('DOMContentLoaded', () => {
      const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      // 1. Scroll-Triggered Reveal Animation using IntersectionObserver
      if (!prefersReducedMotion) {
        const observer = new IntersectionObserver((entries, obs) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('animated');
              obs.unobserve(entry.target);
            }
          });
        }, { root: null, rootMargin: '0px', threshold: 0.12 });

        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
      } else {
        document.querySelectorAll('.animate-on-scroll').forEach(el => el.classList.add('animated'));
      }

      // 2. Sticky Header Scroll Effect
      const siteHeader = document.getElementById('siteHeader');
      let ticking = false;

      const updateHeader = () => {
        if (window.scrollY > 50) {
          siteHeader.classList.add('scrolled');
        } else {
          siteHeader.classList.remove('scrolled');
        }
        ticking = false;
      };

      window.addEventListener('scroll', () => {
        if (!ticking) {
          requestAnimationFrame(updateHeader);
          ticking = true;
        }
      }, { passive: true });

      // 3. Mobile Menu Toggle Logic
      const menuBtn = document.getElementById('menuBtn');
      const navLinks = document.getElementById('navLinks');

      menuBtn.addEventListener('click', () => {
        const isOpen = navLinks.classList.toggle('active');
        menuBtn.setAttribute('aria-expanded', isOpen);
        const icon = menuBtn.querySelector('i');
        icon.classList.toggle('fa-bars', !isOpen);
        icon.classList.toggle('fa-xmark', isOpen);
      });

      document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
          navLinks.classList.remove('active');
          menuBtn.setAttribute('aria-expanded', 'false');
          const icon = menuBtn.querySelector('i');
          icon.classList.remove('fa-xmark');
          icon.classList.add('fa-bars');
        });
      });

      // 4. Hero Image Auto Slider with Fade Transition
      const slides = document.querySelectorAll('#heroSlider .slider-slide');
      let currentSlide = 0;

      if (slides.length > 1 && !prefersReducedMotion) {
        setInterval(() => {
          slides[currentSlide].classList.remove('active');
          currentSlide = (currentSlide + 1) % slides.length;
          slides[currentSlide].classList.add('active');
        }, 4000);
      }

      // 5. Smooth FAQ Accordion Logic
      const faqItems = document.querySelectorAll('.faq-item');

      faqItems.forEach((item, index) => {
        const button = item.querySelector('button');
        const answer = item.querySelector('.faq-answer');
        const answerId = `faq-answer-${index + 1}`;
        answer.id = answerId;
        button.setAttribute('aria-controls', answerId);

        button.addEventListener('click', () => {
          const isActive = item.classList.contains('active');

          faqItems.forEach(faq => {
            faq.classList.remove('active');
            faq.querySelector('button').setAttribute('aria-expanded', 'false');
          });

          if (!isActive) {
            item.classList.add('active');
            button.setAttribute('aria-expanded', 'true');
          }
        });
      });

      // 6. Scroll To Top Button Visibility & Logic
      const scrollTopBtn = document.getElementById('scrollTopBtn');

      window.addEventListener('scroll', () => {
        scrollTopBtn.classList.toggle('visible', window.scrollY > 400);
      }, { passive: true });

      scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' });
      });
    });
