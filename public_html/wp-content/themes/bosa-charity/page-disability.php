<?php
/**
 * Modern Disability Inclusion Hub Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 *
 * Template Name: Modern Disability Inclusion Hub Page
 * Strictly scoped to the Disability page (slug: disability / ID 192).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENT.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Field-Verified Local Photos (16 Distinct Photos, Zero Intra-Page or Cross-Section Duplication)
$img_hero_bg           = home_url( '/wp-content/uploads/gasvs_images/disability/disability_07_national_assistive_event.jpg' );
$img_context           = home_url( '/wp-content/uploads/gasvs_images/disability/disability_14_village_group_meeting.jpg' );
$img_prog_cbr          = home_url( '/wp-content/uploads/gasvs_images/disability/disability_13_leadership_presentation.jpg' );
$img_prog_pwd          = home_url( '/wp-content/uploads/gasvs_images/disability/disability_11_inclusive_sports.jpg' );
$img_prog_ddrc         = home_url( '/wp-content/uploads/gasvs_images/disability/disability_10_rehab_center_banner.jpg' );
$img_domain_camp       = home_url( '/wp-content/uploads/gasvs_images/disability/disability_01_camp.jpg' );
$img_domain_tricycle   = home_url( '/wp-content/uploads/gasvs_images/disability/disability_06_tricycle_distribution.jpg' );
$img_domain_prosthesis = home_url( '/wp-content/uploads/gasvs_images/disability/disability_04_prosthesis_fitting.jpg' );
$img_domain_civic      = home_url( '/wp-content/uploads/gasvs_images/disability/disability_09_accessible_voting.jpg' );
$img_story_sanjay      = home_url( '/wp-content/uploads/gasvs_images/disability/disability_16_sanjay_waghale_portrait_02.jpeg' );
$img_show_wheelchair   = home_url( '/wp-content/uploads/gasvs_images/disability/disability_03_wheelchairs.jpg' );
$img_show_hands        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_05_assistive_hands.jpg' );
$img_show_driving      = home_url( '/wp-content/uploads/gasvs_images/disability/disability_02_car_driving.jpg' );
$img_show_youth        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_12_wheelchair_youth.jpg' );
$img_event_divyang     = home_url( '/wp-content/uploads/gasvs_images/disability/disability_10_divyang_diwas.jpg' );
$img_event_team        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_08_team_entitlements.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-disability-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-disability-hero" id="disability-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-disability-hero-inner">

        <!-- Breadcrumb Navigation -->
        <nav class="gasvs-breadcrumb-nav" aria-label="Breadcrumb">
          <ol class="gasvs-breadcrumbs">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li><span>Our Work</span></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">Disability Inclusion</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-badge-amber">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Disability Inclusion Since 2007</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-disability-hero-title">
          Disability Inclusion: <span class="gasvs-text-gradient">Advancing Rights, Dignity &amp; Self-Reliance</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-disability-hero-lead">
          Pioneering community-based rehabilitation, legislative rights advocacy, tailored assistive devices, and grassroots Disabled People’s Organizations (DPOs) to dismantle social, physical, and systemic barriers for Persons and Children with Disabilities (PwDs &amp; CwDs) across rural and tribal central India.
        </p>

        <!-- Quick Jump Pills -->
        <div class="gasvs-hero-quicklinks">
          <a href="#core-programs" class="gasvs-quick-pill">
            <span>Core Programs</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
          </a>
          <a href="#services-matrix" class="gasvs-quick-pill">
            <span>Intervention Matrix</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
          </a>
          <a href="#sanjay-waghale" class="gasvs-quick-pill">
            <span>Story of Change</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
          </a>
          <a href="#mobility-showcase" class="gasvs-quick-pill">
            <span>Assistive Aids</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>
          </a>
        </div>

        <!-- Key Metrics Strip: 100% Verifiable Master Data from AGENT.md -->
        <div class="gasvs-disability-hero-stats">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">7,500+</span>
            <span class="gasvs-stat-pill-label">PwDs &amp; CwDs Supported</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">22+</span>
            <span class="gasvs-stat-pill-label">Village Disability Groups</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">850</span>
            <span class="gasvs-stat-pill-label">Direct Chetana CBR Beneficiaries</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">198</span>
            <span class="gasvs-stat-pill-label">Linked to Assistive Devices</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">161</span>
            <span class="gasvs-stat-pill-label">Disability Certificates Issued</span>
          </div>
        </div>

      </div>
    </div>
  </header>


  <!-- =========================================================================
       2. CONTEXT & REALITIES: DISMANTLING SYSTEMIC BARRIERS
       ========================================================================= -->
  <section class="gasvs-section gasvs-disability-context-section" id="context-reality">
    <div class="gasvs-container">
      <div class="gasvs-disability-context-grid">

        <!-- Left: Textual Narrative & Strategic Principles -->
        <div class="gasvs-disability-context-content">
          <span class="gasvs-kicker">Rural &amp; Tribal Grassroots Realities</span>
          <h2 class="gasvs-section-title">Bridging the Gap from Isolation to Independent Living</h2>
          <p class="gasvs-disability-body-lead">
            In the remote Satpura plateau and forested borderlands of Madhya Pradesh and Maharashtra, persons with disabilities endure profound compounded vulnerabilities. Harsh hilly topography, severe economic hardship, lack of accessible healthcare, and pervasive social stigma frequently consign individuals to lives of confinement within their households.
          </p>
          <p class="gasvs-disability-body-copy">
            Gramin Adiwasi Samaj Vikas Sansthan (GASVS) addresses these structural inequities through a rights-affirming, community-anchored paradigm. Rather than treating disability as a private medical misfortune, we view it as a civil rights imperative—mandating the removal of attitudinal, physical, institutional, and economic hurdles so every individual participates fully in community life.
          </p>

          <div class="gasvs-disability-pillars-mini">
            <div class="gasvs-pillar-mini-item">
              <div class="gasvs-pillar-mini-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="gasvs-pillar-mini-body">
                <h4>Social Model of Disability</h4>
                <p>Reframing barriers within the environment, community attitudes, and institutional access rather than locating deficits within the individual.</p>
              </div>
            </div>

            <div class="gasvs-pillar-mini-item">
              <div class="gasvs-pillar-mini-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div class="gasvs-pillar-mini-body">
                <h4>Collective Self-Advocacy</h4>
                <p>Fostering village-level self-help groups and Block Disabled Persons Organizations (BDPOs) so PwDs lead their own advocacy agendas.</p>
              </div>
            </div>

            <div class="gasvs-pillar-mini-item">
              <div class="gasvs-pillar-mini-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </div>
              <div class="gasvs-pillar-mini-body">
                <h4>Last-Mile Public Convergence</h4>
                <p>Navigating government bureaucracies to unlock Unique Disability ID (UDID) cards, pensions, transport concessions, and assistive aids.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Authentic Context Visual Card -->
        <div class="gasvs-disability-context-media">
          <div class="gasvs-media-card-wrapper">
            <div class="gasvs-media-frame">
              <img 
                src="<?php echo esc_url( $img_context ); ?>" 
                alt="Village-level Disabled Persons Organization meeting organized by GASVS in Sausar block" 
                class="gasvs-img-fluid no-lazyload skip-lazy" 
                data-skip-lazy="1"
                loading="eager"
              />
              <div class="gasvs-media-badge-tag">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                <span>Grassroots Collective Leadership</span>
              </div>
            </div>

            <div class="gasvs-context-stat-card">
              <div class="gasvs-context-stat-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="gasvs-context-stat-info">
                <div class="gasvs-context-stat-value">Active Since 2007</div>
                <div class="gasvs-context-stat-desc">Community-Based Rehabilitation across 22 village DPOs</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       3. THREE CORE PROGRAMMATIC INITIATIVES (THEMATIC PILLARS)
       ========================================================================= -->
  <section class="gasvs-section gasvs-disability-programs-section" id="core-programs">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Programmatic Architecture</span>
        <h2 class="gasvs-section-title">Our Three Flagship Disability Programs</h2>
        <p class="gasvs-section-subtitle">
          GASVS delivers comprehensive interventions spanning community-level collective organization, welfare advocacy, and specialized district-level clinical rehabilitation.
        </p>
      </div>

      <div class="gasvs-programs-triad-grid">

        <!-- Program Card 1: CBR – BDPO -->
        <div class="gasvs-program-card">
          <div class="gasvs-prog-card-media">
            <img src="<?php echo esc_url( $img_prog_cbr ); ?>" 
                 alt="Leadership development workshop for members of Chetana Disabled Persons Organization" 
                 class="gasvs-prog-img" 
                 loading="lazy" />
            <span class="gasvs-prog-badge">Flagship CBR Model</span>
          </div>
          <div class="gasvs-prog-card-body">
            <div class="gasvs-prog-meta">
              <span class="gasvs-prog-tag">CBR &amp; Self-Advocacy</span>
              <span class="gasvs-prog-location">Sausar &amp; Pandhurna</span>
            </div>
            <h3 class="gasvs-prog-title">
              <a href="<?php echo esc_url( home_url( '/cbr-bdpo-program-sausar-and-pandhurna-blocks-of-chhindwara-district/' ) ); ?>">
                CBR – BDPO Program: Grassroots Collectives
              </a>
            </h3>
            <p class="gasvs-prog-excerpt">
              Initiated in 2007 in partnership with Misereor (Germany) and CBR Forum Bangalore. Organizes PwDs into 22 village-level groups and the federated Chetana Block Disabled Persons Organization (BDPO) to secure self-determination, rights awareness, and institutional inclusion.
            </p>
            <ul class="gasvs-prog-points">
              <li><strong>22 Village DPOs</strong> established and federated</li>
              <li><strong>850 PwDs &amp; CwDs</strong> directly supported</li>
              <li>Capacity building for caregivers, teachers &amp; PRIs</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/cbr-bdpo-program-sausar-and-pandhurna-blocks-of-chhindwara-district/' ) ); ?>" 
               class="gasvs-btn gasvs-btn-outline">
              <span>View Full CBR Program</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Program Card 2: PwD Welfare Program -->
        <div class="gasvs-program-card">
          <div class="gasvs-prog-card-media">
            <img src="<?php echo esc_url( $img_prog_pwd ); ?>" 
                 alt="Inclusive sports and recreational games organized for children with disabilities" 
                 class="gasvs-prog-img" 
                 loading="lazy" />
            <span class="gasvs-prog-badge">Welfare &amp; Development</span>
          </div>
          <div class="gasvs-prog-card-body">
            <div class="gasvs-prog-meta">
              <span class="gasvs-prog-tag">Rights &amp; Early Care</span>
              <span class="gasvs-prog-location">In Partnership with GOONJ</span>
            </div>
            <h3 class="gasvs-prog-title">
              <a href="<?php echo esc_url( home_url( '/pwd-welfare-program/' ) ); ?>">
                PwD Welfare Program: Protection &amp; Recreation
              </a>
            </h3>
            <p class="gasvs-prog-excerpt">
              Collaborative grassroots welfare initiative implemented in Sausar block in partnership with GOONJ, New Delhi. Dedicated to raising community awareness, championing the RPwD Act 2016, providing inclusive education, and promoting adaptive sports for CwDs.
            </p>
            <ul class="gasvs-prog-points">
              <li>Early detection and childhood screening camps</li>
              <li>Dissemination of legal rights &amp; disability acts</li>
              <li>Adapted sports and recreation boosting confidence</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/pwd-welfare-program/' ) ); ?>" 
               class="gasvs-btn gasvs-btn-outline">
              <span>View PwD Welfare Program</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Program Card 3: DDRC Initiative -->
        <div class="gasvs-program-card">
          <div class="gasvs-prog-card-media">
            <img src="<?php echo esc_url( $img_prog_ddrc ); ?>" 
                 alt="Disability Rehabilitation and Resource Centre DDRC facility and service delivery" 
                 class="gasvs-prog-img" 
                 loading="lazy" />
            <span class="gasvs-prog-badge">Clinical Infrastructure</span>
          </div>
          <div class="gasvs-prog-card-body">
            <div class="gasvs-prog-meta">
              <span class="gasvs-prog-tag">Therapeutic Services</span>
              <span class="gasvs-prog-location">MSJE, Govt. of India Scheme</span>
            </div>
            <h3 class="gasvs-prog-title">
              <a href="<?php echo esc_url( home_url( '/disability-rehabilitation-and-resource-centre-ddrc/' ) ); ?>">
                Disability Rehabilitation &amp; Resource Centre
              </a>
            </h3>
            <p class="gasvs-prog-excerpt">
              District-level rehabilitation infrastructure implemented under the aegis of the Ministry of Social Justice and Empowerment, Government of India. Delivers clinical physiotherapy, occupational therapy, assistive device distribution, and medical board certification.
            </p>
            <ul class="gasvs-prog-points">
              <li>Physiotherapy and personalized therapy regimens</li>
              <li>Facilitation of 200+ UDID certificates in a single year</li>
              <li>Bus and rail travel concession passes facilitated</li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/disability-rehabilitation-and-resource-centre-ddrc/' ) ); ?>" 
               class="gasvs-btn gasvs-btn-outline">
              <span>View DDRC Initiative</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- =========================================================================
       4. FOUR CORE INTERVENTION DOMAINS / COMPREHENSIVE SERVICES MATRIX
       ========================================================================= -->
  <section class="gasvs-section gasvs-disability-matrix-section" id="services-matrix">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Holistic Intervention Spectrum</span>
        <h2 class="gasvs-section-title">Four Strategic Pillars of Action</h2>
        <p class="gasvs-section-subtitle">
          Every person with a disability requires an individualized continuum of care, from early detection and clinical certification to mobility aids and active civic participation.
        </p>
      </div>

      <div class="gasvs-four-pillars-grid">

        <!-- Pillar 1: Camps & Certification -->
        <div class="gasvs-action-card">
          <div class="gasvs-action-media">
            <img src="<?php echo esc_url( $img_domain_camp ); ?>" 
                 alt="Medical assessment and screening camp conducted in rural tribal village by GASVS" 
                 class="gasvs-action-img" 
                 loading="lazy" />
            <div class="gasvs-action-badge">Pillar 01</div>
          </div>
          <div class="gasvs-action-content">
            <h3 class="gasvs-action-title">Screening, Assessment &amp; Certification</h3>
            <p class="gasvs-action-text">
              Organizing multi-disciplinary diagnostic camps across remote forest hamlets in coordination with District Medical Boards. Facilitating official disability assessments, UDID registration, and enrollment into government social security pensions and schemes.
            </p>
            <div class="gasvs-action-metric">
              <span class="gasvs-metric-num">161+</span>
              <span class="gasvs-metric-desc">Official Disability Certificates Facilitated</span>
            </div>
          </div>
        </div>

        <!-- Pillar 2: Assistive Devices & Mobility -->
        <div class="gasvs-action-card">
          <div class="gasvs-action-media">
            <img src="<?php echo esc_url( $img_domain_tricycle ); ?>" 
                 alt="Distribution of hand-powered mobility tricycles to rural persons with locomotor disabilities" 
                 class="gasvs-action-img" 
                 loading="lazy" />
            <div class="gasvs-action-badge">Pillar 02</div>
          </div>
          <div class="gasvs-action-content">
            <h3 class="gasvs-action-title">Assistive Devices &amp; Mobility Solutions</h3>
            <p class="gasvs-action-text">
              Procuring, customizing, and distributing appropriate assistive technology tailored to rugged rural geography—including hand-powered tricycles, heavy-duty wheelchairs, crutches, walking sticks, and specialized pediatric seating supports.
            </p>
            <div class="gasvs-action-metric">
              <span class="gasvs-metric-num">198</span>
              <span class="gasvs-metric-desc">People Linked to Assistive-Device Systems</span>
            </div>
          </div>
        </div>

        <!-- Pillar 3: Prosthetics & Rehabilitation -->
        <div class="gasvs-action-card">
          <div class="gasvs-action-media">
            <img src="<?php echo esc_url( $img_domain_prosthesis ); ?>" 
                 alt="Custom prosthetic measurement and artificial limb fitting session conducted by GASVS technicians" 
                 class="gasvs-action-img" 
                 loading="lazy" />
            <div class="gasvs-action-badge">Pillar 03</div>
          </div>
          <div class="gasvs-action-content">
            <h3 class="gasvs-action-title">Prosthetics, Orthotics &amp; Therapy</h3>
            <p class="gasvs-action-text">
              Delivering customized prosthetic limb fitments, orthotic calipers, gait retraining, and regular physical rehabilitation therapies. Restoring functional biomechanical locomotion to empower individuals toward dignity and economic self-sufficiency.
            </p>
            <div class="gasvs-action-metric">
              <span class="gasvs-metric-num">150+</span>
              <span class="gasvs-metric-desc">Therapeutic Treatments &amp; Limb Fits</span>
            </div>
          </div>
        </div>

        <!-- Pillar 4: Civic Inclusion & Accessible Voting -->
        <div class="gasvs-action-card">
          <div class="gasvs-action-media">
            <img src="<?php echo esc_url( $img_domain_civic ); ?>" 
                 alt="Accessible voting and civic participation supported by GASVS for persons with disabilities" 
                 class="gasvs-action-img" 
                 loading="lazy" />
            <div class="gasvs-action-badge">Pillar 04</div>
          </div>
          <div class="gasvs-action-content">
            <h3 class="gasvs-action-title">Civic Inclusion &amp; Democratic Rights</h3>
            <p class="gasvs-action-text">
              Ensuring persons with disabilities exercise their fundamental democratic rights without physical or systemic obstacles. Partnering with district election machinery to guarantee barrier-free polling booths, transport support, and representation in local Panchayats.
            </p>
            <div class="gasvs-action-metric">
              <span class="gasvs-metric-num">100%</span>
              <span class="gasvs-metric-desc">Universal Civic &amp; Electoral Inclusion</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- =========================================================================
       5. AUTHENTIC STORY OF CHANGE SPOTLIGHT: SANJAY WAGHALE
       ========================================================================= -->
  <section class="gasvs-section gasvs-story-spotlight-section" id="sanjay-waghale">
    <div class="gasvs-container">

      <div class="gasvs-story-spotlight-card">
        <div class="gasvs-story-spotlight-grid">

          <!-- Left Column: Authentic Photo -->
          <div class="gasvs-story-spotlight-media">
            <img src="<?php echo esc_url( $img_story_sanjay ); ?>" 
                 alt="Sanjay Waghale outside the Gram Panchayat Teegaon office, appointed as the official village pump operator" 
                 class="gasvs-story-img" 
                 loading="lazy" />
            <div class="gasvs-story-media-overlay">
              <span class="gasvs-story-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <span>Verified Field Story</span>
              </span>
              <span class="gasvs-story-location">Teegaon Village, Pandhurna District</span>
            </div>
          </div>

          <!-- Right Column: Authentic Story Narrative from AGENT.md -->
          <div class="gasvs-story-spotlight-content">
            <div class="gasvs-badge-pill gasvs-badge-amber">
              <span class="gasvs-badge-dot"></span>
              <span>Story of Change · Inclusion &amp; Self-Reliance</span>
            </div>

            <h2 class="gasvs-story-title">
              Sanjay Waghale: <span class="gasvs-text-gradient">A Journey Towards Inclusion &amp; Leadership</span>
            </h2>

            <p class="gasvs-story-quote">
              &ldquo;Through collective mobilization and institutional support, Sanjay dismantled years of isolation—evolving from a marginalized villager into the President of his village Self-Help Group and an officially employed Gram Panchayat Pump Operator.&rdquo;
            </p>

            <div class="gasvs-story-narrative">
              <p>
                Sanjay Waghale, a 40-year-old man living with a locomotor disability from Teegaon village in Pandhurna district (formerly Chhindwara), had long faced severe barriers in accessing government welfare entitlements and securing stable livelihood opportunities.
              </p>
              <p>
                Through GASVS’s Community-Based Rehabilitation (CBR) Program, Sanjay was identified, counseled, and supported to obtain an official Unique Disability ID (UDID) Card. Our field workers assisted him in enrolling in the state Disability Pension Scheme and accessing the Government Marriage Assistance Grant.
              </p>
              <p>
                Equipped with financial confidence and enterprise support, Sanjay established a sustainable goat-rearing enterprise. His natural leadership earned him the respect of his community, and he was elected President of his village Self-Help Group (SHG). In 2025, his self-reliance reached a historic milestone when he secured formal public employment as a Pump Operator at the local Gram Panchayat, ensuring dependable drinking water distribution across Teegaon.
              </p>
            </div>

            <div class="gasvs-story-milestones">
              <div class="gasvs-milestone-item">
                <span class="gasvs-milestone-icon">✓</span>
                <span class="gasvs-milestone-label">UDID Card &amp; Pension Sanctioned</span>
              </div>
              <div class="gasvs-milestone-item">
                <span class="gasvs-milestone-icon">✓</span>
                <span class="gasvs-milestone-label">Elected President, Village SHG</span>
              </div>
              <div class="gasvs-milestone-item">
                <span class="gasvs-milestone-icon">✓</span>
                <span class="gasvs-milestone-label">Gram Panchayat Pump Operator (2025)</span>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>


  <!-- =========================================================================
       6. ASSISTIVE TECHNOLOGY & FUNCTIONAL INDEPENDENCE SHOWCASE
       ========================================================================= -->
  <section class="gasvs-section gasvs-showcase-section" id="mobility-showcase">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Independence in Action</span>
        <h2 class="gasvs-section-title">Enabling Mobility, Dignity &amp; Livelihoods</h2>
        <p class="gasvs-section-subtitle">
          Every assistive aid provided by GASVS is customized to unlock personal freedom, access to schooling, and community employment.
        </p>
      </div>

      <div class="gasvs-showcase-quad-grid">

        <!-- Showcase 1: Wheelchair Mobility -->
        <div class="gasvs-showcase-tile">
          <div class="gasvs-tile-media">
            <img src="<?php echo esc_url( $img_show_wheelchair ); ?>" 
                 alt="Group of rural wheelchair recipients supported by GASVS" 
                 class="gasvs-tile-img" 
                 loading="lazy" />
          </div>
          <div class="gasvs-tile-body">
            <span class="gasvs-tile-tag">Locomotor Mobility</span>
            <h4 class="gasvs-tile-title">Wheelchairs for Community Life</h4>
            <p class="gasvs-tile-text">Enabling individuals with bilateral lower-limb paralysis to navigate village environments, visit neighbors, and participate in social gatherings.</p>
          </div>
        </div>

        <!-- Showcase 2: Upper Limb Prosthetics -->
        <div class="gasvs-showcase-tile">
          <div class="gasvs-tile-media">
            <img src="<?php echo esc_url( $img_show_hands ); ?>" 
                 alt="Upper-limb assistive hands and adaptive technology demonstrated by GASVS beneficiaries" 
                 class="gasvs-tile-img" 
                 loading="lazy" />
          </div>
          <div class="gasvs-tile-body">
            <span class="gasvs-tile-tag">Adaptive Technology</span>
            <h4 class="gasvs-tile-title">Upper-Limb Functional Aids</h4>
            <p class="gasvs-tile-text">Fitting adaptive mechanical hands and grip aids, enabling beneficiaries to perform daily domestic tasks, eat independently, and handle work tools.</p>
          </div>
        </div>

        <!-- Showcase 3: Adapted Vehicle Driving -->
        <div class="gasvs-showcase-tile">
          <div class="gasvs-tile-media">
            <img src="<?php echo esc_url( $img_show_driving ); ?>" 
                 alt="Person with disability driving adapted vehicle independently" 
                 class="gasvs-tile-img" 
                 loading="lazy" />
          </div>
          <div class="gasvs-tile-body">
            <span class="gasvs-tile-tag">Economic Freedom</span>
            <h4 class="gasvs-tile-title">Adapted Transport &amp; Enterprise</h4>
            <p class="gasvs-tile-text">Supporting retrofitted steering and hand controls for vehicles, unlocking independent transport for livelihood ventures and agricultural transport.</p>
          </div>
        </div>

        <!-- Showcase 4: Youth & Education Mobility -->
        <div class="gasvs-showcase-tile">
          <div class="gasvs-tile-media">
            <img src="<?php echo esc_url( $img_show_youth ); ?>" 
                 alt="Youth with disability on modern wheelchair pursuing education and social participation" 
                 class="gasvs-tile-img" 
                 loading="lazy" />
          </div>
          <div class="gasvs-tile-body">
            <span class="gasvs-tile-tag">Youth &amp; Education</span>
            <h4 class="gasvs-tile-title">Inclusive Education &amp; Schooling</h4>
            <p class="gasvs-tile-text">Ensuring children and youth with disabilities attend local government schools without being held back by long walking distances over village roads.</p>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- =========================================================================
       7. COMMUNITY ADVOCACY, INCLUSION CELEBRATIONS & FIELD TEAM
       ========================================================================= -->
  <section class="gasvs-section gasvs-advocacy-section" id="advocacy-events">
    <div class="gasvs-container">

      <div class="gasvs-dual-advocacy-grid">

        <!-- Card 1: Divyang Diwas Celebrations -->
        <div class="gasvs-advocacy-card">
          <div class="gasvs-advocacy-media">
            <img src="<?php echo esc_url( $img_event_divyang ); ?>" 
                 alt="Divyang Diwas celebration organized by GASVS honoring achievers with disabilities" 
                 class="gasvs-advocacy-img" 
                 loading="lazy" />
            <span class="gasvs-advocacy-badge">Awareness &amp; Pride</span>
          </div>
          <div class="gasvs-advocacy-body">
            <span class="gasvs-kicker">3rd December Celebration</span>
            <h3 class="gasvs-advocacy-title">International Day of Persons with Disabilities (Divyang Diwas)</h3>
            <p class="gasvs-advocacy-text">
              Every year on December 3rd, GASVS brings together hundreds of PwDs, caregivers, local officials, and community members across Sausar and Pandhurna. These public assemblies feature cultural performances, sports events, public honorings of local achievers, and grassroots awareness rallies to dismantle pervasive social stigma.
            </p>
            <div class="gasvs-advocacy-highlight">
              <span class="gasvs-highlight-dot"></span>
              <span>Transforming community attitudes from charity to rights &amp; equal dignity</span>
            </div>
          </div>
        </div>

        <!-- Card 2: Dedicated Field Cadre & Entitlements -->
        <div class="gasvs-advocacy-card">
          <div class="gasvs-advocacy-media">
            <img src="<?php echo esc_url( $img_event_team ); ?>" 
                 alt="GASVS Community-Based Rehabilitation field staff and village resource persons" 
                 class="gasvs-advocacy-img" 
                 loading="lazy" />
            <span class="gasvs-advocacy-badge">Grassroots Leadership</span>
          </div>
          <div class="gasvs-advocacy-body">
            <span class="gasvs-kicker">Our Dedicated Field Cadre</span>
            <h3 class="gasvs-advocacy-title">64 Grassroots Workers Navigating Last-Mile Entitlements</h3>
            <p class="gasvs-advocacy-text">
              Our front-line Community-Based Rehabilitation workers travel miles into forested tribal villages, conducting household surveys, identifying hidden children with disabilities, counseling anxious parents, and walking families through complex bureaucratic certification processes at government hospitals.
            </p>
            <div class="gasvs-advocacy-highlight">
              <span class="gasvs-highlight-dot"></span>
              <span>161 disability certificates and 198 assistive systems facilitated doorstep-to-doorstep</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- =========================================================================
       8. INSTITUTIONAL PARTNERS & COLLABORATIONS NETWORK
       ========================================================================= -->
  <section class="gasvs-section gasvs-disability-partners-section" id="partners-network">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Collaborative Ecosystem</span>
        <h2 class="gasvs-section-title">Institutional Partners in Disability Inclusion</h2>
        <p class="gasvs-section-subtitle">
          Sustainable community-based rehabilitation thrives through rigorous institutional partnerships uniting civil society, government departments, and international development agencies.
        </p>
      </div>

      <div class="gasvs-disability-partners-grid">

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-circle">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </div>
          <h4 class="gasvs-partner-name">CBR Forum (Bangalore)</h4>
          <p class="gasvs-partner-role">Technical Partner &amp; Programmatic Mentorship for CBR Implementation &amp; BDPO Replication</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-circle">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
          </div>
          <h4 class="gasvs-partner-name">Misereor (Germany)</h4>
          <p class="gasvs-partner-role">International Philanthropic Partner Supporting Sustainable Grassroots Community Rehabilitation</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-circle">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h4 class="gasvs-partner-name">CARITAS – India</h4>
          <p class="gasvs-partner-role">National Development Partner Championing Social Inclusion and Community Capacity Building</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-circle">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h4 class="gasvs-partner-name">GOONJ (New Delhi)</h4>
          <p class="gasvs-partner-role">Strategic Partner for PwD Welfare, Dignity Kits, Community Awareness, and Inclusion Campaigns</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-circle">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 2l9 8H3l9-8z"/></svg>
          </div>
          <h4 class="gasvs-partner-name">Ministry of Social Justice &amp; Empowerment</h4>
          <p class="gasvs-partner-role">Government of India · Scheme Partner for District Disability Rehabilitation Centre (DDRC)</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-circle">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h4 class="gasvs-partner-name">District Health &amp; Social Welfare Departments</h4>
          <p class="gasvs-partner-role">Govt. of MP &amp; Maharashtra · Medical Assessment Camps, UDID Boards, and Pension Schemes</p>
        </div>

      </div>

    </div>
  </section>


  <!-- =========================================================================
       9. CALL TO ACTION (CTA): GET INVOLVED & SUPPORT INCLUSION
       ========================================================================= -->
  <section class="gasvs-disability-cta-section" id="get-involved">
    <div class="gasvs-container">

      <div class="gasvs-disability-cta-box">
        <div class="gasvs-disability-cta-glow"></div>
        <div class="gasvs-disability-cta-inner text-center">

          <span class="gasvs-badge-pill gasvs-badge-white">
            <span class="gasvs-badge-dot"></span>
            <span>Advance Fundamental Dignity</span>
          </span>

          <h2 class="gasvs-disability-cta-heading">
            Partner With Us to Create a <span class="gasvs-text-gradient">Barrier-Free World</span>
          </h2>

          <p class="gasvs-disability-cta-lead">
            Whether sponsoring a tailored tricycle for an isolated tribal youth, supporting therapeutic rehabilitation, or underwriting grassroots rights advocacy, your collaboration creates transformative, lifelong impact.
          </p>

          <div class="gasvs-disability-cta-btn-group">
            <a href="tel:+919823224640" class="gasvs-btn gasvs-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Call: +91 9823224640</span>
            </a>

            <a href="mailto:info@gasvs.org" class="gasvs-btn gasvs-btn-secondary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <span>Email: info@gasvs.org</span>
            </a>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-white">
              <span>Contact Our Team</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

          <div class="gasvs-disability-cta-meta">
            <span>✓ Registered NGO: M.P.–25307</span>
            <span>•</span>
            <span>✓ 50% Tax Exemption Under Section 80G</span>
            <span>•</span>
            <span>✓ CSR-1 &amp; FCRA Certified</span>
          </div>

        </div>
      </div>

    </div>
  </section>

</main>

<?php
get_footer();
