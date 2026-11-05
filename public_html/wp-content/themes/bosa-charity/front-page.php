<?php
/**
 * Modern Front Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * STRICT SCOPE: Only loaded for the home page (is_front_page()).
 * Preserves all WordPress header, footer, forms, and backend functionality.
 *
 * @package Bosa Charity
 */

get_header();
?>

<main id="gasvs-main-content" class="gasvs-home-modern" role="main">

  <!-- =========================================================================
       1. HERO SECTION WITH MOTION FRAMES
       ========================================================================= -->
  <section class="gasvs-hero-section">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-hero-grid">
        
        <!-- Left Column: Synchronized Copy & Actions -->
        <div class="gasvs-hero-content">
          <div class="gasvs-badge-pill gasvs-animate-fade-in">
            <span class="gasvs-badge-dot"></span>
            <span>Est. 1991 · 37+ Years of Grassroots Experience</span>
          </div>

          <div class="gasvs-hero-text-slider" id="gasvs-hero-text-carousel" role="region" aria-label="Hero Highlights">
            
            <!-- Slide 1 Text: Rural & Tribal Communities (Default Active) -->
            <div class="gasvs-hero-text-slide is-active" data-slide-index="0" role="group" aria-roledescription="slide" aria-label="1 of 5" aria-hidden="false">
              <div class="gasvs-slide-kicker">
                <span class="gasvs-slide-tag">Rural &amp; Tribal Development</span>
              </div>
              <h1 class="gasvs-hero-title">
                Building Inclusive Communities,<br><span class="gasvs-text-gradient">Advancing Dignity.</span>
              </h1>
              <p class="gasvs-hero-lead">
                Since 1991, Gramin Adiwasi Samaj Vikas Sansthan (GASVS) has worked alongside underserved tribal and rural communities across Madhya Pradesh and Maharashtra to build inclusive, resilient, and self-reliant futures.
              </p>
              <div class="gasvs-hero-cta-group">
                <a href="#our-programs" class="gasvs-btn gasvs-btn-primary">
                  <span>Explore Our Work</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 13l5 5 5-5M7 6l5 5 5-5"/></svg>
                </a>
                <a href="#contact-us" class="gasvs-btn gasvs-btn-outline-light">
                  <span>Partner with GASVS</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
              </div>
            </div>

            <!-- Slide 2 Text: Mental Health for All -->
            <div class="gasvs-hero-text-slide" data-slide-index="1" role="group" aria-roledescription="slide" aria-label="2 of 5" aria-hidden="true">
              <div class="gasvs-slide-kicker">
                <span class="gasvs-slide-tag">Community Mental Health</span>
              </div>
              <h2 class="gasvs-hero-title">
                Mental Health for All:<br><span class="gasvs-text-gradient">Care &amp; Dignity.</span>
              </h2>
              <p class="gasvs-hero-lead">
                Promoting mental well-being, access to psychiatric care, and dignity for every individual through community clinics, counseling, and Home Again rehabilitation.
              </p>
              <div class="gasvs-hero-cta-group">
                <a href="<?php echo esc_url( home_url( '/mental-health/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
                  <span>Explore Mental Health</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#contact-us" class="gasvs-btn gasvs-btn-outline-light">
                  <span>Partner with GASVS</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
              </div>
            </div>

            <!-- Slide 3 Text: Inclusion, Dignity & Equal Opportunities -->
            <div class="gasvs-hero-text-slide" data-slide-index="2" role="group" aria-roledescription="slide" aria-label="3 of 5" aria-hidden="true">
              <div class="gasvs-slide-kicker">
                <span class="gasvs-slide-tag">Disability Inclusion &amp; Rights</span>
              </div>
              <h2 class="gasvs-hero-title">
                Inclusion, Dignity &amp;<br><span class="gasvs-text-gradient">Equal Opportunities.</span>
              </h2>
              <p class="gasvs-hero-lead">
                Enabling persons with disabilities to live independent, empowered, and meaningful lives through assistive devices, community-based rehabilitation, and rights advocacy.
              </p>
              <div class="gasvs-hero-cta-group">
                <a href="<?php echo esc_url( home_url( '/disability/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
                  <span>Explore Disability Inclusion</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#contact-us" class="gasvs-btn gasvs-btn-outline-light">
                  <span>Partner with GASVS</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
              </div>
            </div>

            <!-- Slide 4 Text: Empowering Women, Transforming Lives -->
            <div class="gasvs-hero-text-slide" data-slide-index="3" role="group" aria-roledescription="slide" aria-label="4 of 5" aria-hidden="true">
              <div class="gasvs-slide-kicker">
                <span class="gasvs-slide-tag">Women's Livelihoods &amp; Enterprise</span>
              </div>
              <h2 class="gasvs-hero-title">
                Empowering Women,<br><span class="gasvs-text-gradient">Transforming Lives.</span>
              </h2>
              <p class="gasvs-hero-lead">
                Strengthening livelihoods, leadership, and economic independence for women through tribal self-help groups, leaf-plate enterprises, and sustainable vocations.
              </p>
              <div class="gasvs-hero-cta-group">
                <a href="<?php echo esc_url( home_url( '/livelihood/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
                  <span>Explore Livelihoods</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#contact-us" class="gasvs-btn gasvs-btn-outline-light">
                  <span>Partner with GASVS</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
              </div>
            </div>

            <!-- Slide 5 Text: Nurturing Brighter Futures -->
            <div class="gasvs-hero-text-slide" data-slide-index="4" role="group" aria-roledescription="slide" aria-label="5 of 5" aria-hidden="true">
              <div class="gasvs-slide-kicker">
                <span class="gasvs-slide-tag">Child Health &amp; Education</span>
              </div>
              <h2 class="gasvs-hero-title">
                Nurturing Brighter Futures<br><span class="gasvs-text-gradient">for Every Child.</span>
              </h2>
              <p class="gasvs-hero-lead">
                Supporting children's education, health, nutrition, and early development to build a stronger, healthier foundation for every child across rural and tribal communities.
              </p>
              <div class="gasvs-hero-cta-group">
                <a href="#our-programs" class="gasvs-btn gasvs-btn-primary">
                  <span>Support Our Work</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#contact-us" class="gasvs-btn gasvs-btn-outline-light">
                  <span>Partner with GASVS</span>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
              </div>
            </div>

          </div>

          <!-- Trust Badges -->
          <div class="gasvs-hero-trust-bar gasvs-animate-fade-in gasvs-delay-3">
            <div class="gasvs-trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>12A &amp; 80G Tax Exemption</span>
            </div>
            <div class="gasvs-trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
              <span>National Award Winner</span>
            </div>
            <div class="gasvs-trust-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              <span>17.5L+ Population Covered</span>
            </div>
          </div>
        </div>

        <!-- Right Column: Interactive Motion Showcase -->
        <div class="gasvs-hero-media gasvs-animate-fade-in gasvs-delay-1">
          <div class="gasvs-motion-frame-wrap">
            <div class="gasvs-motion-frame-glow"></div>
            
            <div class="gasvs-showcase-card">
              <div class="gasvs-showcase-slides" id="gasvs-showcase-carousel" role="region" aria-roledescription="carousel" aria-label="GASVS Impact Highlights">

                <!-- Slide 1: Rural & Tribal Communities -->
                <div class="gasvs-showcase-slide is-active" role="group" aria-roledescription="slide" aria-label="1 of 5" aria-hidden="false">
                  <img 
                    src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/home_hero/home_hero_01_empowering_rural_01.jpeg' ) ); ?>" 
                    alt="Empowering Rural and Tribal Communities with clean solar energy and sustainable livelihood initiatives" 
                    class="gasvs-showcase-img"
                    loading="eager"
                  />
                </div>

                <!-- Slide 2: Mental Health for All -->
                <div class="gasvs-showcase-slide" role="group" aria-roledescription="slide" aria-label="2 of 5" aria-hidden="true">
                  <img 
                    src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/home_hero/home_hero_02_mental_health_01.jpg' ) ); ?>" 
                    alt="Community Mental Health Care and Home Again family counseling session" 
                    class="gasvs-showcase-img"
                    loading="lazy"
                  />
                </div>

                <!-- Slide 3: Inclusion, Dignity and Equal Opportunities -->
                <div class="gasvs-showcase-slide" role="group" aria-roledescription="slide" aria-label="3 of 5" aria-hidden="true">
                  <img 
                    src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/home_hero/home_hero_03_inclusion_dignity.png' ) ); ?>" 
                    alt="Inclusion, Dignity and Equal Opportunities for persons with disabilities" 
                    class="gasvs-showcase-img"
                    loading="lazy"
                  />
                </div>

                <!-- Slide 4: Empowering Women, Transforming Lives -->
                <div class="gasvs-showcase-slide" role="group" aria-roledescription="slide" aria-label="4 of 5" aria-hidden="true">
                  <img 
                    src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/home_hero/home_hero_04_empowering_women.jpeg' ) ); ?>" 
                    alt="Empowering Women and Transforming Lives through tribal Self-Help Group leaf-plate enterprises" 
                    class="gasvs-showcase-img"
                    loading="lazy"
                  />
                </div>

                <!-- Slide 5: Nurturing Brighter Futures -->
                <div class="gasvs-showcase-slide" role="group" aria-roledescription="slide" aria-label="5 of 5" aria-hidden="true">
                  <img 
                    src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/home_hero/home_hero_05_brighter_futures_01.jpeg' ) ); ?>" 
                    alt="Nurturing Brighter Futures through early childhood education and nutrition support" 
                    class="gasvs-showcase-img"
                    loading="lazy"
                  />
                </div>

              </div>

              <!-- Carousel Controls: Prev, Pagination Dots, Next -->
              <div class="gasvs-showcase-controls" role="toolbar" aria-label="Hero showcase navigation">
                <button type="button" class="gasvs-showcase-nav-btn gasvs-showcase-prev" aria-label="Previous slide">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <div class="gasvs-showcase-dots" role="tablist" aria-label="Showcase slides pagination">
                  <button type="button" class="gasvs-showcase-dot is-active" role="tab" aria-selected="true" aria-label="Slide 1: Rural and Tribal Communities" data-slide-index="0"></button>
                  <button type="button" class="gasvs-showcase-dot" role="tab" aria-selected="false" aria-label="Slide 2: Mental Health for All" data-slide-index="1"></button>
                  <button type="button" class="gasvs-showcase-dot" role="tab" aria-selected="false" aria-label="Slide 3: Inclusion and Dignity" data-slide-index="2"></button>
                  <button type="button" class="gasvs-showcase-dot" role="tab" aria-selected="false" aria-label="Slide 4: Empowering Women" data-slide-index="3"></button>
                  <button type="button" class="gasvs-showcase-dot" role="tab" aria-selected="false" aria-label="Slide 5: Nurturing Brighter Futures" data-slide-index="4"></button>
                </div>
                <button type="button" class="gasvs-showcase-nav-btn gasvs-showcase-next" aria-label="Next slide">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </button>
              </div>

            </div>

            <!-- Floating Metric Card 1 (Top-Right) -->
            <div class="gasvs-float-card gasvs-float-card-1">
              <div class="gasvs-float-icon gasvs-icon-amber">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="gasvs-float-info">
                <span class="gasvs-float-number">4,200+</span>
                <span class="gasvs-float-label">Villages Reached</span>
              </div>
            </div>

            <!-- Floating Metric Card 2 (Bottom-Left) -->
            <div class="gasvs-float-card gasvs-float-card-2">
              <div class="gasvs-float-icon gasvs-icon-emerald">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              </div>
              <div class="gasvs-float-info">
                <span class="gasvs-float-number">19,328+</span>
                <span class="gasvs-float-label">Lives Reached</span>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       2. IMPACT STATS STRIP (Verified Master Impact Metrics)
       ========================================================================= -->
  <section class="gasvs-stats-section">
    <div class="gasvs-container">
      <div class="gasvs-stats-grid">
        
        <!-- Metric 1: Mental Health -->
        <div class="gasvs-stat-box">
          <div class="gasvs-stat-accent-bar"></div>
          <span class="gasvs-stat-value">19,328+</span>
          <span class="gasvs-stat-title">Individuals Reached</span>
          <p class="gasvs-stat-desc">Through community mental-health &amp; well-being initiatives</p>
        </div>

        <!-- Metric 2: Disability Inclusion -->
        <div class="gasvs-stat-box">
          <div class="gasvs-stat-accent-bar"></div>
          <span class="gasvs-stat-value">7,500+</span>
          <span class="gasvs-stat-title">PwDs &amp; CwDs Supported</span>
          <p class="gasvs-stat-desc">Assistive device delivery, rehabilitation &amp; UDID advocacy</p>
        </div>

        <!-- Metric 3: Sustainable Livelihoods -->
        <div class="gasvs-stat-box">
          <div class="gasvs-stat-accent-bar"></div>
          <span class="gasvs-stat-value">3,500+</span>
          <span class="gasvs-stat-title">Livelihoods Linked</span>
          <p class="gasvs-stat-desc">Tribal women SHG enterprises, dona-pattal &amp; livestock</p>
        </div>

        <!-- Metric 4: Renewable Clean Energy -->
        <div class="gasvs-stat-box">
          <div class="gasvs-stat-accent-bar"></div>
          <span class="gasvs-stat-value">1,450+</span>
          <span class="gasvs-stat-title">Clean Energy Beneficiaries</span>
          <p class="gasvs-stat-desc">Benefiting from solar lighting &amp; rural electrification</p>
        </div>

        <!-- Metric 5: Village Coverage -->
        <div class="gasvs-stat-box">
          <div class="gasvs-stat-accent-bar"></div>
          <span class="gasvs-stat-value">4,200+</span>
          <span class="gasvs-stat-title">Villages Reached</span>
          <p class="gasvs-stat-desc">Grassroots tribal &amp; rural communities actively served</p>
        </div>

        <!-- Metric 6: Frontline Stakeholders -->
        <div class="gasvs-stat-box">
          <div class="gasvs-stat-accent-bar"></div>
          <span class="gasvs-stat-value">6,543+</span>
          <span class="gasvs-stat-title">Stakeholders Capacitated</span>
          <p class="gasvs-stat-desc">Frontline workers, caregivers &amp; community leaders trained</p>
        </div>

        <!-- Metric 7: Public Systems Coverage -->
        <div class="gasvs-stat-box">
          <div class="gasvs-stat-accent-bar"></div>
          <span class="gasvs-stat-value">17.5 Lakh+</span>
          <span class="gasvs-stat-title">Population Covered</span>
          <p class="gasvs-stat-desc">Through strengthened public health systems &amp; DMHP</p>
        </div>

        <!-- Metric 8: Formal Care Pathways -->
        <div class="gasvs-stat-box">
          <div class="gasvs-stat-accent-bar"></div>
          <span class="gasvs-stat-value">2,263+</span>
          <span class="gasvs-stat-title">Linked to Formal Care</span>
          <p class="gasvs-stat-desc">Identified &amp; linked to formal mental health care pathways</p>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. ABOUT GASVS & PRESIDENTIAL AWARD STORY
       ========================================================================= -->
  <section class="gasvs-section gasvs-about-section">
    <div class="gasvs-container">
      <div class="gasvs-about-grid">
        
        <!-- Media Showcase Frame -->
        <div class="gasvs-about-media-col">
          <div class="gasvs-about-frame">
            <img 
              src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/06/photo-about-us-home-page-1024x604.jpg' ) ); ?>" 
              alt="President of India presenting National Award to GASVS" 
              class="gasvs-about-img"
              loading="lazy"
            />
            <div class="gasvs-award-ribbon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
              <div>
                <strong>National Award Conferred</strong>
                <span>By the President of India</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Narrative Content -->
        <div class="gasvs-about-content-col">
          <span class="gasvs-kicker">About GASVS</span>
          <h2 class="gasvs-section-heading">Catalyzing Sustainable Social Change in Rural India</h2>
          
          <p class="gasvs-body-text">
            At <strong>Gramin Adiwasi Samaj Vikas Sansthan</strong>, we believe deeply in the power of community-driven change. Registered in 1991 under the MP Society Registration Act, we have dedicated over three decades to uplifting the most marginalized individuals in Madhya Pradesh, Maharashtra, and beyond.
          </p>

          <div class="gasvs-feature-list">
            <div class="gasvs-feature-item">
              <div class="gasvs-feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <h4 class="gasvs-feature-title">Community-Based Rehabilitation (CBR)</h4>
                <p class="gasvs-feature-desc">Comprehensive support, assistive aids, and equal opportunities for Persons with Disabilities.</p>
              </div>
            </div>

            <div class="gasvs-feature-item">
              <div class="gasvs-feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <h4 class="gasvs-feature-title">Sustainable Agro-Livelihoods</h4>
                <p class="gasvs-feature-desc">High-density cotton farming, organic agriculture, and women self-help group capacity building.</p>
              </div>
            </div>

            <div class="gasvs-feature-item">
              <div class="gasvs-feature-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <h4 class="gasvs-feature-title">Mental Health & Maternal Nutrition</h4>
                <p class="gasvs-feature-desc">Breaking societal stigmas, community mental health clinics, and child malnutrition eradication.</p>
              </div>
            </div>
          </div>

          <div class="gasvs-about-cta">
            <a href="<?php echo esc_url( home_url( '/our-history-and-mission-our-approach/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
              <span>Read Our Full History & Mission</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       4. KEY FOCUS AREAS & CORE PROGRAMS
       ========================================================================= -->
  <section id="our-programs" class="gasvs-section gasvs-programs-section">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header gasvs-text-center">
        <span class="gasvs-kicker">Our Mission in Action</span>
        <h2 class="gasvs-section-heading">Core Programs & Strategic Initiatives</h2>
        <p class="gasvs-section-subtitle">
          Holistic, evidence-based interventions addressing systemic barriers in healthcare, inclusion, livelihood, and nutrition.
        </p>
      </div>

      <div class="gasvs-programs-grid">
        
        <!-- Card 1: Health & Mental Wellness -->
        <article class="gasvs-program-card gasvs-card-health">
          <div class="gasvs-card-img-wrap">
            <img 
              src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_02_manswa_consultation.jpg' ) ); ?>" 
              alt="Project Manswa - Community Mental Health Consultation" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-emerald">Mental Health</span>
          </div>
          <div class="gasvs-card-body">
            <h3 class="gasvs-card-title">Community Mental Health & Psychosocial Care</h3>
            <p class="gasvs-card-desc">
              Pioneering rural mental healthcare, psychiatric clinics, and NALAM doorstep support. Reached over 19,328 individuals with 2,263 linked to formal care pathways.
            </p>
            <a href="<?php echo esc_url( home_url( '/health/' ) ); ?>" class="gasvs-card-link">
              <span>Explore Health Program</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Card 2: Disability & Inclusion -->
        <article class="gasvs-program-card gasvs-card-disability">
          <div class="gasvs-card-img-wrap">
            <img 
              src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/disability/disability_03_wheelchairs.jpg' ) ); ?>" 
              alt="GASVS Disability and Assistive Device Distribution" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-amber">Inclusion & Dignity</span>
          </div>
          <div class="gasvs-card-body">
            <h3 class="gasvs-card-title">Disability Inclusion & Community Rehabilitation</h3>
            <p class="gasvs-card-desc">
              Comprehensive Community-Based Rehabilitation (CBR), assistive aid distribution (wheelchairs, prosthetics), and UDID certification supporting 7,500+ PwDs and CwDs.
            </p>
            <a href="<?php echo esc_url( home_url( '/disability/' ) ); ?>" class="gasvs-card-link">
              <span>Explore Disability Program</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Card 3: Sustainable Livelihood -->
        <article class="gasvs-program-card gasvs-card-livelihood">
          <div class="gasvs-card-img-wrap">
            <img 
              src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_07_dona_pattal_women_shg.jpeg' ) ); ?>" 
              alt="Tribal Women Operating Dona-Pattal Press Enterprise" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-green">Women's Enterprise</span>
          </div>
          <div class="gasvs-card-body">
            <h3 class="gasvs-card-title">Sustainable Livelihoods & Women's Enterprise</h3>
            <p class="gasvs-card-desc">
              Promoting tribal women Self-Help Groups, eco-friendly dona-pattal manufacturing, organic farming, and the Pashu Sakhi livestock network across 15 village collectives.
            </p>
            <a href="<?php echo esc_url( home_url( '/livelihood/' ) ); ?>" class="gasvs-card-link">
              <span>Explore Livelihood Program</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Card 4: Health, Nutrition & Pre-School Welfare -->
        <article class="gasvs-program-card gasvs-card-nutrition">
          <div class="gasvs-card-img-wrap">
            <img 
              src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_03_preprimary_tribal_school.jpeg' ) ); ?>" 
              alt="Pre-School Nutrition and Education Program with JDF" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-violet">Child Welfare</span>
          </div>
          <div class="gasvs-card-body">
            <h3 class="gasvs-card-title">Child Nutrition, Education & Health Camps</h3>
            <p class="gasvs-card-desc">
              Pre-primary nutritional support in tribal villages with JDF, coupled with multi-specialty rural health camps delivering free screening and doctor care to 1,250+ villagers.
            </p>
            <a href="<?php echo esc_url( home_url( '/malnutrition/' ) ); ?>" class="gasvs-card-link">
              <span>Explore Nutrition Program</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Card 5: Renewable Energy & Watershed Management -->
        <article class="gasvs-program-card gasvs-card-energy">
          <div class="gasvs-card-img-wrap">
            <img 
              src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_05_water_check_dam.jpeg' ) ); ?>" 
              alt="Renewable Energy and Water Resource Management Check Dam" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-emerald">Clean Energy & Water</span>
          </div>
          <div class="gasvs-card-body">
            <h3 class="gasvs-card-title">Renewable Energy & Water Security</h3>
            <p class="gasvs-card-desc">
              Solar lighting across remote hamlets via trained tribal women Solar Engineers, alongside community watershed structures and check dams securing groundwater.
            </p>
            <a href="<?php echo esc_url( home_url( '/our-history-and-mission-our-approach/' ) ); ?>" class="gasvs-card-link">
              <span>Explore Green Initiatives</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Card 6: Youth Leadership & Rights -->
        <article class="gasvs-program-card gasvs-card-youth">
          <div class="gasvs-card-img-wrap">
            <img 
              src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_13_youth_assembly_srijan.jpg' ) ); ?>" 
              alt="Youth Leadership and Child Rights Assembly" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-amber">Youth & Social Justice</span>
          </div>
          <div class="gasvs-card-body">
            <h3 class="gasvs-card-title">Youth Leadership & Rights Advocacy</h3>
            <p class="gasvs-card-desc">
              Mobilizing communities against child marriage with Kailash Satyarthi Foundation, plus the SRIJAN youth leadership initiative with MP Police training adolescent ambassadors.
            </p>
            <a href="<?php echo esc_url( home_url( '/our-history-and-mission-our-approach/' ) ); ?>" class="gasvs-card-link">
              <span>Explore Rights Initiatives</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       5. AWARDS & NATIONAL RECOGNITIONS SHOWCASE
       ========================================================================= -->
  <section class="gasvs-section gasvs-awards-section">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header gasvs-text-center gasvs-light-header">
        <span class="gasvs-kicker gasvs-kicker-amber">Honors & Accolades</span>
        <h2 class="gasvs-section-heading">Recognized at the Highest National Level</h2>
        <p class="gasvs-section-subtitle">
          Acknowledged by the Government of India and leading national foundations for exemplary service.
        </p>
      </div>

      <div class="gasvs-awards-grid">
        
        <div class="gasvs-award-card">
          <div class="gasvs-award-img-box">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/AWARD-1-420x300.png' ) ); ?>" alt="National Award Presented by President of India" class="no-lazyload skip-lazy" data-skip-lazy="1" />
          </div>
          <h4 class="gasvs-award-title">National Award for Outstanding Service</h4>
          <p class="gasvs-award-org">Conferred by Hon'ble President of India</p>
        </div>

        <div class="gasvs-award-card">
          <div class="gasvs-award-img-box">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/Mahaveer-Award-420x300.jpg' ) ); ?>" alt="Mahaveer Award for Philanthropy" class="no-lazyload skip-lazy" data-skip-lazy="1" />
          </div>
          <h4 class="gasvs-award-title">Mahaveer National Award</h4>
          <p class="gasvs-award-org">Excellence in Human Welfare & Community Upliftment</p>
        </div>

        <div class="gasvs-award-card">
          <div class="gasvs-award-img-box">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/1-Relief-rehabilitation-Award-420x300.jpg' ) ); ?>" alt="Relief and Rehabilitation Award" class="no-lazyload skip-lazy" data-skip-lazy="1" />
          </div>
          <h4 class="gasvs-award-title">National Relief & Rehabilitation Award</h4>
          <p class="gasvs-award-org">Outstanding Impact in Disability Support</p>
        </div>

        <div class="gasvs-award-card">
          <div class="gasvs-award-img-box">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/AWARD-2-420x300.png' ) ); ?>" alt="Leadership in Social Welfare Award" class="no-lazyload skip-lazy" data-skip-lazy="1" />
          </div>
          <h4 class="gasvs-award-title">State Leadership in Social Welfare</h4>
          <p class="gasvs-award-org">Madhya Pradesh & Maharashtra Recognition</p>
        </div>

      </div>

      <div class="gasvs-text-center gasvs-mt-40">
        <a href="<?php echo esc_url( home_url( '/awards-and-recognition/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
          <span>View All Honors & Recognitions</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. STORIES OF REAL CHANGE (CASE STUDIES)
       ========================================================================= -->
  <section class="gasvs-section gasvs-stories-section">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header gasvs-text-center">
        <span class="gasvs-kicker">Transforming Real Lives</span>
        <h2 class="gasvs-section-heading">Stories of Resilience and Change</h2>
        <p class="gasvs-section-subtitle">
          Real impact from the ground in Chhindwara, Sausar, Pandhurna, and surrounding districts.
        </p>
      </div>

      <div class="gasvs-stories-grid">
        
        <article class="gasvs-story-card">
          <div class="gasvs-story-img-wrap">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/disability/disability_15_sanjay_waghale_portrait_01.jpeg' ) ); ?>" alt="Sanjay Waghale, Gram Panchayat Pump Operator, operating the village drinking water system in Teegaon" class="no-lazyload skip-lazy" data-skip-lazy="1" />
            <span class="gasvs-story-pill">Disability Inclusion</span>
          </div>
          <div class="gasvs-story-body">
            <h3 class="gasvs-story-title">Sanjay Waghale — Locomotor Disability to Community Leadership</h3>
            <p class="gasvs-story-desc">
              Supported by the GASVS CBR programme in Teegaon village (Pandhurna) to obtain his UDID card, disability pension, and marriage grant. Established a goat-rearing enterprise, became SHG President, and in 2025 secured formal appointment as Gram Panchayat Pump Operator.
            </p>
            <a href="<?php echo esc_url( home_url( '/disability/#sanjay-waghale' ) ); ?>" class="gasvs-story-link">
              <span>Read Full Story</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <article class="gasvs-story-card">
          <div class="gasvs-story-img-wrap">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/stories/meera_pahad/meera_pahad_pashu_sakhi_01.jpeg' ) ); ?>" alt="Meera Pahad, trained Pashu Sakhi and animal healthcare leader in Nanda village" class="no-lazyload skip-lazy" data-skip-lazy="1" />
            <span class="gasvs-story-pill">Pashu Sakhi &amp; Livelihoods</span>
          </div>
          <div class="gasvs-story-body">
            <h3 class="gasvs-story-title">Meera Pahad — From Social Exclusion to Community Leadership</h3>
            <p class="gasvs-story-desc">
              Overcame caste discrimination in Nanda village through Pashu Sakhi training. In July 2024, her veterinary intervention contained a Foot-and-Mouth Disease outbreak, earning community trust and an independent monthly income of ~₹8,000.
            </p>
            <a href="<?php echo esc_url( home_url( '/livelihood/#meera-pahad' ) ); ?>" class="gasvs-story-link">
              <span>Read Full Story</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <article class="gasvs-story-card">
          <div class="gasvs-story-img-wrap">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_07_women_packaging_enterprise.jpg' ) ); ?>" alt="Khushi Vishwakarma - Rural Solar Engineer" class="no-lazyload skip-lazy" data-skip-lazy="1" />
            <span class="gasvs-story-pill">Women's Enterprise</span>
          </div>
          <div class="gasvs-story-body">
            <h3 class="gasvs-story-title">Khushi Vishwakarma — Lighting Homes, Building Futures</h3>
            <p class="gasvs-story-desc">
              Selected at 19 from Rakhi-Kol village for solar engineer training with Bindi International. Installed solar home lighting in over 100 households, generating sustainable technical income.
            </p>
            <a href="<?php echo esc_url( home_url( '/livelihood/#khushi-vishwakarma' ) ); ?>" class="gasvs-story-link">
              <span>Read Full Story</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>


      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. TRUSTED PARTNERS & SUPPORTERS
       ========================================================================= -->
  <section class="gasvs-section gasvs-partners-section">
    <div class="gasvs-container">
      <div class="gasvs-text-center gasvs-mb-30">
        <span class="gasvs-kicker">Collaborative Action</span>
        <h3 class="gasvs-sub-heading">Our Trusted Partners & Supporters</h3>
      </div>

      <div class="gasvs-partners-grid">
        <div class="gasvs-partner-box" title="Rural India Supporting Trust (RIST)">
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/logo-pic1.jpg' ) ); ?>" alt="RIST" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="The Live Love Laugh Foundation">
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/logo-pic2.jpg' ) ); ?>" alt="Live Love Laugh Foundation" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="Indira Foundation">
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/logo-pic3.jpg' ) ); ?>" alt="Indira Foundation" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="Life Insurance Corporation of India (LIC)">
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/logo-pic4.jpg' ) ); ?>" alt="LIC" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="The Banyan">
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/logo-pic5.jpg' ) ); ?>" alt="The Banyan" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="Partner Organization">
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/07/logo-pic6.jpg' ) ); ?>" alt="Partner Organization" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       8. GET INVOLVED & CONTACT FORM
       ========================================================================= -->
  <section id="get-involved" class="gasvs-section gasvs-contact-section">
    <div class="gasvs-container">
      <div class="gasvs-contact-card">
        <div class="gasvs-contact-grid">
          
          <!-- Left: Information & Tax Exemption -->
          <div class="gasvs-contact-info-col">
            <span class="gasvs-kicker gasvs-kicker-amber">Join Our Mission</span>
            <h2 class="gasvs-contact-title">Partner With Us To Catalyze Change</h2>
            <p class="gasvs-contact-lead">
              Whether through corporate CSR partnerships, volunteering your expertise, or direct philanthropic giving, every contribution transforms a life.
            </p>

            <div class="gasvs-tax-badge">
              <div class="gasvs-tax-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
              </div>
              <div>
                <strong>50% Tax Exemption Under Section 80G</strong>
                <p>Donations to GASVS are eligible for tax deduction under Section 80G of the Income Tax Act 1961.</p>
              </div>
            </div>

            <div class="gasvs-contact-methods">
              <div class="gasvs-method-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Vivekanand Colony, At Belgaon, Sausar, Dist. Pandhurna, MP-480106</span>
              </div>
              <div class="gasvs-method-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:+919823224640">+91 9823224640</a>
              </div>
              <div class="gasvs-method-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:info@gasvs.org">info@gasvs.org</a>
              </div>
            </div>
          </div>

          <!-- Right: Interactive Contact Form -->
          <div class="gasvs-contact-form-col">
            <div class="gasvs-form-wrapper">
              <h3 class="gasvs-form-heading">Send Us a Message</h3>
              <p class="gasvs-form-sub">We welcome inquiries for collaborations, visits, and support.</p>
              <?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]' ); ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

</main>

<script>
/**
 * GASVS Home Hero Showcase Automatic Carousel
 * Rotates slides automatically every 5 seconds with pause-on-hover & accessibility
 */
(function() {
  'use strict';

  function initHeroShowcase() {
    var carousel = document.getElementById('gasvs-showcase-carousel');
    if (!carousel) return;

    var heroSection = carousel.closest('.gasvs-hero-section') || document;
    var card = carousel.closest('.gasvs-showcase-card') || carousel;
    var slides = carousel.querySelectorAll('.gasvs-showcase-slide');
    var dots = card.querySelectorAll('.gasvs-showcase-dot');
    var prevBtn = card.querySelector('.gasvs-showcase-prev');
    var nextBtn = card.querySelector('.gasvs-showcase-next');
    var textSlides = heroSection.querySelectorAll('.gasvs-hero-text-slide');
    var textCarousel = document.getElementById('gasvs-hero-text-carousel');

    if (slides.length <= 1) return;

    var currentIndex = 0;
    var timer = null;
    var INTERVAL_MS = 5000; // 5 seconds automatic rotation

    function goToSlide(index) {
      if (index < 0) {
        index = slides.length - 1;
      } else if (index >= slides.length) {
        index = 0;
      }

      currentIndex = index;

      // Update right-column image slides
      for (var i = 0; i < slides.length; i++) {
        if (i === currentIndex) {
          slides[i].classList.add('is-active');
          slides[i].setAttribute('aria-hidden', 'false');
        } else {
          slides[i].classList.remove('is-active');
          slides[i].setAttribute('aria-hidden', 'true');
        }
      }

      // Update right-column dots
      for (var j = 0; j < dots.length; j++) {
        if (j === currentIndex) {
          dots[j].classList.add('is-active');
          dots[j].setAttribute('aria-selected', 'true');
        } else {
          dots[j].classList.remove('is-active');
          dots[j].setAttribute('aria-selected', 'false');
        }
      }

      // Update left-column synchronized text caption slides
      for (var k = 0; k < textSlides.length; k++) {
        if (k === currentIndex) {
          textSlides[k].classList.add('is-active');
          textSlides[k].setAttribute('aria-hidden', 'false');
        } else {
          textSlides[k].classList.remove('is-active');
          textSlides[k].setAttribute('aria-hidden', 'true');
        }
      }
    }

    function nextSlide() {
      goToSlide(currentIndex + 1);
    }

    function prevSlide() {
      goToSlide(currentIndex - 1);
    }

    function startAutoplay() {
      stopAutoplay();
      timer = setInterval(nextSlide, INTERVAL_MS);
    }

    function stopAutoplay() {
      if (timer) {
        clearInterval(timer);
        timer = null;
      }
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function(e) {
        e.preventDefault();
        nextSlide();
        startAutoplay();
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function(e) {
        e.preventDefault();
        prevSlide();
        startAutoplay();
      });
    }

    for (var k = 0; k < dots.length; k++) {
      (function(dot) {
        dot.addEventListener('click', function(e) {
          e.preventDefault();
          var idx = parseInt(this.getAttribute('data-slide-index'), 10);
          if (!isNaN(idx)) {
            goToSlide(idx);
            startAutoplay();
          }
        });
      })(dots[k]);
    }

    // Pause auto-rotation on mouse hover over card or text content so visitor can comfortably read
    card.addEventListener('mouseenter', stopAutoplay);
    card.addEventListener('mouseleave', startAutoplay);
    if (textCarousel) {
      textCarousel.addEventListener('mouseenter', stopAutoplay);
      textCarousel.addEventListener('mouseleave', startAutoplay);
    }

    // Pause on focus within card or text
    card.addEventListener('focusin', stopAutoplay);
    card.addEventListener('focusout', startAutoplay);
    if (textCarousel) {
      textCarousel.addEventListener('focusin', stopAutoplay);
      textCarousel.addEventListener('focusout', startAutoplay);
    }

    // Keyboard navigation (Left / Right arrow keys)
    card.addEventListener('keydown', function(e) {
      if (e.key === 'ArrowRight') {
        nextSlide();
        startAutoplay();
      } else if (e.key === 'ArrowLeft') {
        prevSlide();
        startAutoplay();
      }
    });

    // Touch swipe support for mobile devices
    var touchStartX = 0;
    var touchEndX = 0;

    card.addEventListener('touchstart', function(e) {
      if (e.changedTouches && e.changedTouches.length > 0) {
        touchStartX = e.changedTouches[0].screenX;
      }
      stopAutoplay();
    }, { passive: true });

    card.addEventListener('touchend', function(e) {
      if (e.changedTouches && e.changedTouches.length > 0) {
        touchEndX = e.changedTouches[0].screenX;
        var diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 40) {
          if (diff > 0) {
            nextSlide();
          } else {
            prevSlide();
          }
        }
      }
      startAutoplay();
    }, { passive: true });

    // Expose programmatic navigation hook for external controls & testing
    window.GASVS_goToSlide = goToSlide;

    // Start auto-rotation
    startAutoplay();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHeroShowcase);
  } else {
    initHeroShowcase();
  }
})();
</script>

<?php
get_footer();
