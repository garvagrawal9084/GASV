<?php
/**
 * Modern About Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern About Page
 * Strictly scoped to the About page (slug: our-history-and-mission-our-approach / ID 91).
 * Preserves all WordPress header, footer, links, backend compatibility, and content.
 *
 * @package Bosa Charity
 */

get_header();

$banner_bg = content_url( '/uploads/2024/07/WhatsApp-Image-2024-07-30-at-12.43.10-PM.jpeg' );
$about_img = content_url( '/uploads/2024/06/About-Us-photo-1-1024x471.jpg' );
$award_img = content_url( '/uploads/2024/07/Presidential-Award-1024x604.jpg' );
$cta_bg    = content_url( '/uploads/2024/07/District-Mental-Health-Program-DMHP-2.jpeg' );
?>

<main id="gasvs-main-content" class="gasvs-about-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-about-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-about-hero-inner">
        
        <!-- Breadcrumb Navigation -->
        <nav class="gasvs-breadcrumb-nav" aria-label="Breadcrumb">
          <ol class="gasvs-breadcrumbs">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li><span>About Us</span></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">Our History & Mission</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Est. 1991</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-about-hero-title gasvs-animate-slide-up">
          Our History and Mission, <span class="gasvs-text-gradient">Our Approach</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-about-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Catalyzing transformative social change, healthcare equity, and holistic empowerment for marginalized tribal communities across Madhya Pradesh and Maharashtra for over three decades.
        </p>

        <!-- Trust Stats Strip -->
        <div class="gasvs-about-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">1991</span>
            <span class="gasvs-stat-pill-label">Founded in Sausar</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">32+</span>
            <span class="gasvs-stat-pill-label">Years of Grassroots Impact</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">4</span>
            <span class="gasvs-stat-pill-label">Key Focus Districts</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">12A & 80G</span>
            <span class="gasvs-stat-pill-label">Certified Tax-Exempt NGO</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. FOUNDING HERITAGE & OVERVIEW
       ========================================================================= -->
  <section class="gasvs-section gasvs-about-heritage-section" id="our-history">
    <div class="gasvs-container">
      <div class="gasvs-about-heritage-grid">
        
        <!-- Media Frame -->
        <div class="gasvs-heritage-media-col">
          <div class="gasvs-heritage-frame">
            <img 
              src="<?php echo esc_url( $about_img ); ?>" 
              alt="GASVS Community Leadership Conference and Grassroots Team" 
              class="gasvs-heritage-img"
              loading="lazy"
            />
            <div class="gasvs-heritage-float-badge">
              <div class="gasvs-float-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              </div>
              <div class="gasvs-float-text">
                <strong>Sausar, Chhindwara</strong>
                <span>Pioneering Rural Upliftment Since 1991</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Narrative Column -->
        <div class="gasvs-heritage-content-col">
          <span class="gasvs-kicker">About GASVS</span>
          <h2 class="gasvs-section-heading">Rooted in Social Transformation, Guided by Corporate Efficacy</h2>
          
          <div class="gasvs-heritage-lead-box">
            <p class="gasvs-paragraph-lead">
              Established in 1991 within the Sausar block of Chhindwara district, Madhya Pradesh, Gramin Adivasi Samaj Vikas Sansthan (GASVS) is a distinguished non-profit organization committed to the upliftment of marginalized tribal communities. Rooted in a collective vision for social transformation, GASVS has evolved into a proficient entity, blending social work ethos with corporate efficacy.
            </p>
          </div>

          <div class="gasvs-feature-list">
            <div class="gasvs-feature-item">
              <div class="gasvs-feature-check">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <h3 class="gasvs-feature-title">Community-Driven Social Ethos</h3>
                <p class="gasvs-feature-desc">Deep grassroots trust built over three decades of direct collaboration with tribal elders, women's collectives, and local village panchyats.</p>
              </div>
            </div>

            <div class="gasvs-feature-item">
              <div class="gasvs-feature-check">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <h3 class="gasvs-feature-title">Corporate Governance & Rigor</h3>
                <p class="gasvs-feature-desc">Professional management structures, strict financial compliance, third-party audits, and evidence-backed metric reporting for institutional partners.</p>
              </div>
            </div>

            <div class="gasvs-feature-item">
              <div class="gasvs-feature-check">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <h3 class="gasvs-feature-title">Regional Footprint Across Two States</h3>
                <p class="gasvs-feature-desc">Targeted, persistent initiatives across Sausar, Pandhurna, and Junnardeo blocks in Madhya Pradesh, extending into Nagpur district in Maharashtra.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. MISSION & VISION DUAL PILLARS
       ========================================================================= -->
  <section class="gasvs-section gasvs-about-mv-section" id="mission-vision">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Guiding Principles</span>
        <h2 class="gasvs-section-heading">Our Mission & Our Vision</h2>
        <p class="gasvs-section-subtitle">
          The dual cornerstones that guide every strategic intervention, partnership, and community engagement.
        </p>
      </div>

      <div class="gasvs-mv-grid">
        
        <!-- Mission Card -->
        <div class="gasvs-mv-card gasvs-mv-card-mission">
          <div class="gasvs-mv-card-header">
            <div class="gasvs-mv-icon-wrap gasvs-icon-mission">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <circle cx="12" cy="12" r="6"/>
                <circle cx="12" cy="12" r="2"/>
              </svg>
            </div>
            <div class="gasvs-mv-card-title-group">
              <span class="gasvs-mv-card-tag">Core Mandate</span>
              <h2 class="gasvs-mv-card-title">Our Mission</h2>
            </div>
          </div>
          
          <div class="gasvs-mv-card-body">
            <p class="gasvs-mv-card-text">
              At GASVS, we are driven by a steadfast dedication to inclusivity and social equity, we undertakes multifaceted initiatives aimed at catalysing sustainable development and uplifting marginalized tribal communities. Our mission encompasses the holistic empowerment of individuals with physical and mental disabilities, fostering an environment of dignity and opportunity. Our strategic interventions, meticulously crafted and executed at grassroots levels across Sausar, Pandhurna blocks of Pandhurna district, Junnardev block of Chinddhwara district and Nagpur District of Maharahtra, are geared towards fostering inclusivity and resilience within marginalized segments.
            </p>
          </div>

          <div class="gasvs-mv-card-footer">
            <span class="gasvs-tag">Disability Inclusion</span>
            <span class="gasvs-tag">Tribal Upliftment</span>
            <span class="gasvs-tag">Social Equity</span>
            <span class="gasvs-tag">Grassroots Resilience</span>
          </div>
        </div>

        <!-- Vision Card -->
        <div class="gasvs-mv-card gasvs-mv-card-vision">
          <div class="gasvs-mv-card-header">
            <div class="gasvs-mv-icon-wrap gasvs-icon-vision">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                <circle cx="12" cy="12" r="3"/>
              </svg>
            </div>
            <div class="gasvs-mv-card-title-group">
              <span class="gasvs-mv-card-tag">Future Ambition</span>
              <h2 class="gasvs-mv-card-title">Our Vision</h2>
            </div>
          </div>
          
          <div class="gasvs-mv-card-body">
            <p class="gasvs-mv-card-text">
              Our vision is to emerge as a leading agent of transformative change, leveraging corporate best practices and social innovation to address systemic disparities in public health. GASVS envisions a future where equitable access to healthcare and social services is a reality for all, irrespective of socio-economic status or geographical location. Furthermore, we are committed to tackling malnutrition and livelihood challenges, ensuring holistic development across the domains of physical disabilities, mental wellness, nutrition, and sustainable livelihoods.
            </p>
          </div>

          <div class="gasvs-mv-card-footer">
            <span class="gasvs-tag">Public Health Equity</span>
            <span class="gasvs-tag">Social Innovation</span>
            <span class="gasvs-tag">Malnutrition Eradication</span>
            <span class="gasvs-tag">Sustainable Livelihoods</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       4. OPERATIONAL APPROACH & PARTNER SUPPORT MODEL
       ========================================================================= -->
  <section class="gasvs-section gasvs-about-approach-section" id="operational-approach">
    <div class="gasvs-container">
      
      <div class="gasvs-approach-hero-box">
        <span class="gasvs-kicker">Strategic Paradigm</span>
        <h2 class="gasvs-section-heading">Operational Approach</h2>
        
        <p class="gasvs-approach-lead-text">
          At GASVS we have adopted a synergistic approach and operates on a collaborative paradigm, leveraging a "partner support model" to synergise efforts with philanthropic entities aligned with our vision. Our engagements with funding partners are governed by a shared commitment to effectuating tangible and sustainable outcomes, particularly in realms where the marginalized are traditionally neglected. Our initiatives are meticulously designed to address systemic challenges, employing evidence-based strategies for sustainable outcomes.
        </p>
      </div>

      <!-- 3-Pillar Architecture Grid -->
      <div class="gasvs-approach-grid">
        
        <div class="gasvs-approach-card">
          <div class="gasvs-approach-num">01</div>
          <div class="gasvs-approach-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="gasvs-approach-card-title">Synergistic Partner Model</h3>
          <p class="gasvs-approach-card-desc">
            Collaborating seamlessly with CSR leaders, corporate donors, and philanthropic trusts to pool specialized resources, knowledge, and funding for exponential social impact.
          </p>
        </div>

        <div class="gasvs-approach-card">
          <div class="gasvs-approach-num">02</div>
          <div class="gasvs-approach-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
          </div>
          <h3 class="gasvs-approach-card-title">Evidence-Based Design</h3>
          <p class="gasvs-approach-card-desc">
            Structuring every initiative on rigorous ground-level needs assessments, verified baseline metrics, and ongoing quantitative tracking to guarantee verifiable community outcomes.
          </p>
        </div>

        <div class="gasvs-approach-card">
          <div class="gasvs-approach-num">03</div>
          <div class="gasvs-approach-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </div>
          <h3 class="gasvs-approach-card-title">Focus on Neglected Realms</h3>
          <p class="gasvs-approach-card-desc">
            Intentionally directing energy and capital toward remote tribal hamlets and marginalized disability populations that are systematically bypassed by conventional interventions.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. CORE ACTION DOMAINS (Connecting Mission to Action)
       ========================================================================= -->
  <section class="gasvs-section gasvs-about-domains-section">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Translating Mission Into Reality</span>
        <h2 class="gasvs-section-heading">Four Integrated Arenas of Action</h2>
        <p class="gasvs-section-subtitle">
          Our mission and vision come to life through four dedicated program tracks designed for generational resilience.
        </p>
      </div>

      <div class="gasvs-domains-grid">
        
        <!-- Domain 1: Health & Mental Health -->
        <div class="gasvs-domain-card">
          <div class="gasvs-domain-icon-wrap gasvs-domain-health">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
          </div>
          <h3 class="gasvs-domain-title">Mental Health & Wellness</h3>
          <p class="gasvs-domain-desc">
            Running District Mental Health Programs (DMHP) across Nagpur and Chhindwara, Mental Health Resource Centers (MHRC), and 'Home Again' recovery homes.
          </p>
          <a href="<?php echo esc_url( home_url( '/mental-health/' ) ); ?>" class="gasvs-domain-link">
            <span>Explore Health Programs</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <!-- Domain 2: Disability Rehabilitation -->
        <div class="gasvs-domain-card">
          <div class="gasvs-domain-icon-wrap gasvs-domain-disability">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
          </div>
          <h3 class="gasvs-domain-title">Disability Inclusion (CBR)</h3>
          <p class="gasvs-domain-desc">
            Operating District Disability Rehabilitation Centres (DDRC), CBR-BDPO field units, assistive aid camps, and social advocacy for Persons with Disabilities.
          </p>
          <a href="<?php echo esc_url( home_url( '/disability/' ) ); ?>" class="gasvs-domain-link">
            <span>Explore Disability Support</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <!-- Domain 3: Sustainable Livelihoods -->
        <div class="gasvs-domain-card">
          <div class="gasvs-domain-icon-wrap gasvs-domain-livelihood">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <h3 class="gasvs-domain-title">Sustainable Agro-Livelihoods</h3>
          <p class="gasvs-domain-desc">
            Empowering smallholder tribal farmers with high-density cotton farming, organic inputs, Farmer Producer Organizations (FPOs), and women-led SHGs.
          </p>
          <a href="<?php echo esc_url( home_url( '/livelihood/' ) ); ?>" class="gasvs-domain-link">
            <span>Explore Livelihood Tracks</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <!-- Domain 4: Nutrition & Child Protection -->
        <div class="gasvs-domain-card">
          <div class="gasvs-domain-icon-wrap gasvs-domain-nutrition">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21a9 9 0 0 0 9-9c0-4.97-4.03-9-9-9s-9 4.03-9 9a9 9 0 0 0 9 9Z"/><path d="M12 3v18"/></svg>
          </div>
          <h3 class="gasvs-domain-title">Nutrition & Child Protection</h3>
          <p class="gasvs-domain-desc">
            Eradicating severe acute malnutrition in tribal children, implementing Project UTTHAN, operating 24/7 Childline help services, and financial literacy camps.
          </p>
          <a href="<?php echo esc_url( home_url( '/malnutrition/' ) ); ?>" class="gasvs-domain-link">
            <span>Explore Nutrition Action</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. PRESIDENTIAL RECOGNITION SHOWCASE
       ========================================================================= -->
  <section class="gasvs-section gasvs-about-award-section">
    <div class="gasvs-container">
      <div class="gasvs-about-award-card">
        <div class="gasvs-award-grid">
          
          <div class="gasvs-award-img-col">
            <div class="gasvs-award-img-wrap">
              <img 
                src="<?php echo esc_url( $award_img ); ?>" 
                alt="President of India presenting National Award to GASVS founder" 
                class="gasvs-award-img"
                loading="lazy"
              />
              <div class="gasvs-about-award-badge">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                <span>National Award Recipient</span>
              </div>
            </div>
          </div>

          <div class="gasvs-award-text-col">
            <span class="gasvs-kicker">Highest National Recognition</span>
            <h2 class="gasvs-award-heading">Conferred with the National Award by the President of India</h2>
            <p class="gasvs-award-desc">
              For exemplary leadership in disability rehabilitation, community mental health, and transformative rural inclusion, GASVS was honored with the National Award at the Rashtrapati Bhavan. This recognition affirms over three decades of steadfast transparency, grassroots dedication, and institutional credibility.
            </p>
            <div class="gasvs-award-cta-row">
              <a href="<?php echo esc_url( home_url( '/awards-and-recognition/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
                <span>View Awards & Recognition</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
              <a href="<?php echo esc_url( home_url( '/reports-and-publications/' ) ); ?>" class="gasvs-btn gasvs-btn-outline">
                <span>Annual Reports</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       7. GET INVOLVED CALL TO ACTION
       ========================================================================= -->
  <section class="gasvs-section gasvs-about-cta-section">
    <div class="gasvs-container">
      <div class="gasvs-about-cta-content text-center">
        
        <span class="gasvs-kicker gasvs-kicker-light">Get Involved</span>
        <h2 class="gasvs-about-cta-heading">Join Hands with GASVS to Empower Communities</h2>
        <p class="gasvs-about-cta-lead">
          Whether you are a philanthropic foundation looking for reliable grassroots execution, a corporate CSR partner seeking measurable social impact, or a committed volunteer, we invite you to join our journey.
        </p>

        <div class="gasvs-about-cta-btn-group">
          <a href="<?php echo esc_url( home_url( '/volunteer-opportunities/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
            <span>Volunteer With Us</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/partnership-opportunities/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-light">
            <span>Partnership & CSR</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-light">
            <span>Contact Our Team</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </a>
        </div>

        <div class="gasvs-about-cta-meta">
          <span>Registered under MP Society Registration Act 1973</span>
          <span class="gasvs-cta-dot">·</span>
          <span>Reg. No. 24040/91</span>
          <span class="gasvs-cta-dot">·</span>
          <span>12A & 80G Certified</span>
        </div>

      </div>
    </div>
  </section>

</main>

<?php
get_footer();
