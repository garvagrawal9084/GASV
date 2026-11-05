<?php
/**
 * Modern Home Again (Indore) Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern Home Again Indore Page
 * Strictly scoped to the Home Again page (slug: home-again-empowering-lives-in-indore / ID 177).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy in AGENT.md.
 *
 * @package Bosa Charity
 */

get_header();

// Verified authentic local uploads for background and imagery (Zero duplicates across sections)
$img_hero_bg           = home_url( '/wp-content/uploads/2024/07/Mental-Health-Home-Again-5-2.jpg' );
$img_hospital_visit    = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_15_hospital_ward_visit.jpg' );
$img_caregiver_group   = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_15_home_again_caregiver_group.jpg' );
$img_rakhi_celebration = home_url( '/wp-content/uploads/2024/07/Mental-Health-Home-Again-4-2.jpg' );
$img_morning_prayer    = home_url( '/wp-content/uploads/2024/07/Mental-Health-Home-Again-2.jpg' );
$img_gardening_plants  = home_url( '/wp-content/uploads/2024/07/Mental-Health-Home-Again-3.jpg' );

// Field Showcase Gallery (6 distinct authentic photos)
$img_gallery_home_life = home_url( '/wp-content/uploads/2024/07/Mental-Health-Home-Again-1.jpg' );
$img_gallery_puzzles   = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_18_psychosocial_activity.jpeg' );
$img_gallery_counsel   = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_19_outdoor_shg_counseling.jpg' );
$img_gallery_caregiver = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_03_community_group.jpg' );
$img_gallery_entitle   = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_20_graduation_felicitation.jpg' );
$img_gallery_training  = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_14_interactive_circle.jpg' );

$img_cta_bg            = home_url( '/wp-content/uploads/2024/07/Community-Mental-Health-and-Inclusion-Program-2-1-1-1024x471.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-home-again-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-home-again-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-home-again-hero-inner">
        
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
            <li><a href="<?php echo esc_url( home_url( '/mental-health/' ) ); ?>">Mental Health</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">Home Again (Indore)</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Community-Based Mental Health Rehabilitation</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-home-again-hero-title gasvs-animate-slide-up">
          Home Again: <span class="gasvs-text-gradient">Empowering Lives in Indore</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-home-again-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Pioneered by The Banyan and implemented by GASVS in Indore, Home Again provides supportive shared housing, allied social care, and community living for individuals transitioning from long-term psychiatric institutionalisation back into society with dignity and autonomy.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Master Data -->
        <div class="gasvs-home-again-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">2</span>
            <span class="gasvs-stat-pill-label">Group Homes in Indore</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">12</span>
            <span class="gasvs-stat-pill-label">Clients Released from IRMH</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">100%</span>
            <span class="gasvs-stat-pill-label">Community Living Model</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">19,328+</span>
            <span class="gasvs-stat-pill-label">Mental Health Reach</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">2,263+</span>
            <span class="gasvs-stat-pill-label">Care Pathway Linkages</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. CONTEXT & THE NEED: DEINSTITUTIONALISATION WITH DIGNITY
       ========================================================================= -->
  <section class="gasvs-section gasvs-home-again-context-section" id="program-context">
    <div class="gasvs-container">
      
      <div class="gasvs-home-again-context-grid">
        
        <!-- Text Content Column -->
        <div class="gasvs-home-again-context-content">
          <span class="gasvs-kicker">The Community Need &amp; Innovation</span>
          <h2 class="gasvs-section-title">Rebuilding Lives Beyond Institutional Care</h2>
          <p class="gasvs-section-subtitle text-left">
            For individuals who have spent prolonged periods inside psychiatric hospitals, clinical recovery alone is not enough. Without supportive community alternatives and family reintegration, many remain institutionalised indefinitely.
          </p>

          <div class="gasvs-context-points">
            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Breaking Prolonged Institutionalisation</h3>
                <p>Clients stabilized after long stays at the Indore Regional Mental Hospital (IRMH) often find that their families are untraceable or unable to provide care, leaving them stranded in hospital wards without social pathways.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Restoring Autonomy, Choice &amp; Familial Warmth</h3>
                <p>Home Again transitions participants from sterile hospital routines into warm, rented homes within ordinary neighborhoods, where affinity groups share daily chores, cooking, leisure, and mutual care.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">WHO-Recognized Grassroots Innovation</h3>
                <p>Recognized globally as an innovative model of mental healthcare, Home Again demonstrates that individuals with chronic psychosocial conditions can thrive, work, and lead dignified lives when supported in the community.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual Media Card Column -->
        <div class="gasvs-home-again-context-media">
          <div class="gasvs-media-card-wrapper">
            <div class="gasvs-media-frame">
              <img 
                src="<?php echo esc_url( $img_hospital_visit ); ?>" 
                alt="GASVS Mental Health Team Conducting Assessment and Hospital Transition Visit at Psychiatric Ward"
                class="gasvs-img-fluid no-lazyload skip-lazy"
                data-skip-lazy="1"
              />
              <div class="gasvs-media-badge-tag">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                <span>Institutional Transition Care</span>
              </div>
            </div>

            <div class="gasvs-context-stat-card">
              <div class="gasvs-context-stat-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="gasvs-context-stat-info">
                <div class="gasvs-context-stat-value">Pioneered by The Banyan</div>
                <div class="gasvs-context-stat-desc">Implemented in Indore by GASVS with IRMH Convergence</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. CORE PROGRAM COMPONENTS (THE 4 PILLARS OF HOME AGAIN)
       ========================================================================= -->
  <section class="gasvs-section gasvs-home-again-programs-section" id="core-components">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Rehabilitation Model</span>
        <h2 class="gasvs-section-title">Core Program Components</h2>
        <p class="gasvs-section-subtitle">
          A four-pillared holistic ecosystem designed to support individuals in rebuilding their lives with security, self-reliance, and full social inclusion.
        </p>
      </div>

      <div class="gasvs-programs-grid">
        
        <!-- Component 1: Affinity Groups and Community Living -->
        <article class="gasvs-home-again-card">
          <div class="gasvs-home-again-card-img-wrap">
            <img 
              src="<?php echo esc_url( $img_caregiver_group ); ?>" 
              alt="Home Again Residents and Caregivers Gathered in Living Room in Indore"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-emerald">Affinity Groups</span>
          </div>
          <div class="gasvs-home-again-card-body">
            <div class="gasvs-card-meta-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              <span>Community Living · Mutual Support</span>
            </div>
            <h3 class="gasvs-home-again-card-title">Affinity Groups &amp; Community Living</h3>
            <p class="gasvs-home-again-card-desc">
              Individuals come together to form supportive affinity groups and reside in homes located within normal residential neighborhoods. This structure builds strong peer bonds, mutual empathy, and an enduring sense of community belonging.
            </p>
            <ul class="gasvs-card-feature-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Clustered group living in regular Indore city neighborhoods</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Participatory decision-making and shared household routines</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Active interaction and natural integration with local neighbors</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Component 2: Allied Support Services & Case Management -->
        <article class="gasvs-home-again-card">
          <div class="gasvs-home-again-card-img-wrap">
            <img 
              src="<?php echo esc_url( $img_rakhi_celebration ); ?>" 
              alt="Home Again Residents Celebrating Rakshabandhan with District Officials in Indore"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-amber">Allied Services</span>
          </div>
          <div class="gasvs-home-again-card-body">
            <div class="gasvs-card-meta-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
              <span>Personalized Case Management</span>
            </div>
            <h3 class="gasvs-home-again-card-title">Allied Support Services &amp; Entitlements</h3>
            <p class="gasvs-home-again-card-desc">
              Comprehensive social care support that links each resident with personalized case management, dedicated onsite personal assistants, government welfare entitlements, ongoing healthcare access, and vocational guidance.
            </p>
            <ul class="gasvs-card-feature-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Onsite personal assistance and dedicated caregiver support</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Linkage to UDID cards, disability pensions &amp; government schemes</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Regular psychiatric review &amp; seamless medical adherence</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Component 3: Shared Living in a Familial Environment -->
        <article class="gasvs-home-again-card">
          <div class="gasvs-home-again-card-img-wrap">
            <img 
              src="<?php echo esc_url( $img_morning_prayer ); ?>" 
              alt="Home Again Residents Engaging in Morning Mindfulness and Prayer Practice"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-blue">Shared Living</span>
          </div>
          <div class="gasvs-home-again-card-body">
            <div class="gasvs-card-meta-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>Familial Atmosphere · Safety</span>
            </div>
            <h3 class="gasvs-home-again-card-title">Shared Living &amp; Familial Setting</h3>
            <p class="gasvs-home-again-card-desc">
              Participants reside in comfortable, furnished houses designed to emulate a warm home environment. This setting eliminates institutional rigidity, providing privacy, mutual companionship, emotional warmth, and security.
            </p>
            <ul class="gasvs-card-feature-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Comfortable residential spaces with private and shared areas</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Daily communal cooking, morning reflection, and shared dining</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>A safe, supportive emotional sanctuary that promotes healing</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Component 4: Holistic Empowerment & Reintegration -->
        <article class="gasvs-home-again-card">
          <div class="gasvs-home-again-card-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gardening_plants ); ?>" 
              alt="Home Again Residents Participating in Therapeutic Gardening and Plantation"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-purple">Empowerment</span>
          </div>
          <div class="gasvs-home-again-card-body">
            <div class="gasvs-card-meta-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>Autonomy · Economic Pathways</span>
            </div>
            <h3 class="gasvs-home-again-card-title">Holistic Empowerment &amp; Social Reintegration</h3>
            <p class="gasvs-home-again-card-desc">
              By combining psychosocial rehabilitation with vocational skill-building, therapeutic gardening, and community outings, Home Again empowers individuals to reclaim their self-determination and lead fulfilling lives.
            </p>
            <ul class="gasvs-card-feature-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Therapeutic gardening, handicrafts, and creative recreation</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Vocational pathways, micro-enterprise links &amp; self-reliance</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Restoration of dignity, civic agency, and self-confidence</span>
              </li>
            </ul>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. COMPREHENSIVE CARE MATRIX (6 CARE DIMENSIONS)
       ========================================================================= -->
  <section class="gasvs-section gasvs-home-again-matrix-section" id="care-matrix">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Comprehensive Ecosystem</span>
        <h2 class="gasvs-section-title">The Six Dimensions of Supportive Living</h2>
        <p class="gasvs-section-subtitle">
          Every participant in the Home Again Indore homes receives multi-layered, individualized care that supports full physical, emotional, and social recovery.
        </p>
      </div>

      <div class="gasvs-services-matrix-grid">
        
        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3"/><path d="M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4"/><circle cx="20" cy="10" r="2"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Psychiatric &amp; Medical Follow-up</h3>
          <p class="gasvs-service-box-desc">Regular outpatient reviews with psychiatrists at IRMH and local healthcare facilities, tracking symptom remission, gentle medication management, and general wellness.</p>
          <div class="gasvs-service-tag">Clinical Continuity</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Onsite Personal Assistance</h3>
          <p class="gasvs-service-box-desc">Compassionate, trained female caregivers reside alongside the participants, offering gentle guidance with daily activities, problem-solving, and emotional reassurance.</p>
          <div class="gasvs-service-tag">24/7 Caregiver Support</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Legal &amp; Entitlement Linkages</h3>
          <p class="gasvs-service-box-desc">Facilitating government identity documentation (Aadhaar cards, voter IDs), UDID disability certification, bank accounts, and monthly state disability pensions.</p>
          <div class="gasvs-service-tag">Rights &amp; Entitlements</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Livelihood &amp; Vocational Pathways</h3>
          <p class="gasvs-service-box-desc">Identifying individual strengths and interests to link residents with handicrafts, tailoring, kitchen gardening, and women-led Self-Help Group micro-enterprises.</p>
          <div class="gasvs-service-tag">Economic Inclusion</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Leisure, Recreation &amp; Culture</h3>
          <p class="gasvs-service-box-desc">Encouraging active community participation through festival celebrations (Rakshabandhan, Diwali), temple and park visits, music, storytelling, and board games.</p>
          <div class="gasvs-service-tag">Social Well-being</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Family Reintegration &amp; Counseling</h3>
          <p class="gasvs-service-box-desc">Wherever viable, conducting active tracing and psychosocial counseling with biological families to rebuild fractured ties and facilitate joyful family homecomings.</p>
          <div class="gasvs-service-tag">Family Reunion</div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. AUTHENTIC PHOTOGRAPHIC FIELD SHOWCASE (100% FACTUAL FIELD ASSETS)
       ========================================================================= -->
  <section class="gasvs-section gasvs-home-again-gallery-section" id="field-showcase">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Field Evidence</span>
        <h2 class="gasvs-section-title">Authentic Moments of Recovery &amp; Community Life</h2>
        <p class="gasvs-section-subtitle">
          Photographic documentation of our group homes in Indore, peer interactions, therapeutic recreation, and community integration.
        </p>
      </div>

      <div class="gasvs-gallery-grid">
        
        <!-- Photo 1: Home Life and Bedside Care -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_home_life ); ?>" 
              alt="Home Again Indore group home residential living room and caring interaction"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Residential Sanctuary</span>
            <p>Home-based residential setting in Indore offering personalized comfort and compassionate care.</p>
          </figcaption>
        </figure>

        <!-- Photo 2: Cognitive & Leisure Group Therapy -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_puzzles ); ?>" 
              alt="Home Again residents engaged in collaborative puzzle-solving and psychosocial cognitive activities"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Psychosocial Recreation</span>
            <p>Collaborative puzzle and sensory activities supporting cognitive wellness and group bonding.</p>
          </figcaption>
        </figure>

        <!-- Photo 3: Individual Case Counseling -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_counsel ); ?>" 
              alt="Individual psychosocial counseling session conducted by trained mental health social worker"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Individual Counseling</span>
            <p>One-on-one counseling session addressing individual emotional well-being and life goals.</p>
          </figcaption>
        </figure>

        <!-- Photo 4: Caregiver Circle & Community Dialogue -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_caregiver ); ?>" 
              alt="Caregiver circle and mental health peer support group meeting"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Peer &amp; Caregiver Circle</span>
            <p>Caregiver dialogue and mutual support group meeting strengthening the mental health safety net.</p>
          </figcaption>
        </figure>

        <!-- Photo 5: Entitlements and Financial Security Handover -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_entitle ); ?>" 
              alt="Handover of entitlement grants and financial assistance to mental health beneficiaries"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Entitlement Security</span>
            <p>Facilitating government pensions, livelihood grants, and economic independence for participants.</p>
          </figcaption>
        </figure>

        <!-- Photo 6: Frontline Worker & Social Care Training -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_training ); ?>" 
              alt="Frontline healthcare workers and caregivers attending community mental health training session"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Frontline Capacity</span>
            <p>Training frontline caregivers and social workers in community mental health rehabilitation.</p>
          </figcaption>
        </figure>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. INSTITUTIONAL PARTNERS & COLLABORATIONS
       ========================================================================= -->
  <section class="gasvs-section gasvs-home-again-partners-section" id="partners-network">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Collaborations &amp; Support</span>
        <h2 class="gasvs-section-title">Institutional Partners for Home Again Indore</h2>
        <p class="gasvs-section-subtitle">
          Implemented through deep convergence between technical pioneers, government health systems, philanthropic foundations, and civic institutions.
        </p>
      </div>

      <div class="gasvs-health-partners-grid">
        
        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Technical &amp; Model Pioneer</div>
          <h3 class="gasvs-partner-title">The Banyan, Chennai</h3>
          <p class="gasvs-partner-desc">Pioneered the innovative 'Home Again' community rehabilitation model; provides expert technical guidance, caregiver training curriculum, and operational monitoring.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Philanthropic Partner</div>
          <h3 class="gasvs-partner-title">Rural India Supporting Trust (RIST)</h3>
          <p class="gasvs-partner-desc">Providing foundational philanthropic grant support for the establishment, residential maintenance, and allied care services of the Indore Home Again project.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Government Hospital Partner</div>
          <h3 class="gasvs-partner-title">Indore Regional Mental Hospital (IRMH)</h3>
          <p class="gasvs-partner-desc">Collaborating on clinical candidate selection, patient discharge procedures, continuing outpatient psychiatric evaluations, and emergency medical support.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Statutory Health System</div>
          <h3 class="gasvs-partner-title">District Health Department, Madhya Pradesh</h3>
          <p class="gasvs-partner-desc">Facilitating public healthcare linkages, medical checkups, essential medicines, and convergence with district mental health machinery.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Civic &amp; Community Partner</div>
          <h3 class="gasvs-partner-title">Indore District Administration &amp; Police</h3>
          <p class="gasvs-partner-desc">Supporting safety, legal protections, civic integration events (such as Rakshabandhan ceremonies), and fostering inclusive neighborhoods free from stigma.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Institutional Foundation</div>
          <h3 class="gasvs-partner-title">The Live Love Laugh Foundation (TLLLF)</h3>
          <p class="gasvs-partner-desc">Long-standing institutional collaborator in grassroots community mental health, psychiatric consultations, and community stigma reduction programs.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. CALL TO ACTION: EXPAND SUPPORTIVE HOUSING IN INDORE
       ========================================================================= -->
  <section class="gasvs-health-cta-section" id="get-involved">
    <div class="gasvs-container">
      
      <div class="gasvs-health-cta-box">
        <div class="gasvs-health-cta-glow"></div>
        <div class="gasvs-home-again-cta-inner text-center">
          
          <span class="gasvs-badge-pill gasvs-badge-white">
            <span class="gasvs-badge-dot"></span>
            <span>Support Mental Health Rehabilitation</span>
          </span>

          <h2 class="gasvs-health-cta-heading">
            Partner With Us to Expand <span class="gasvs-text-gradient">Community Group Homes</span>
          </h2>

          <p class="gasvs-health-cta-lead">
            Whether supporting residential operational costs for recovered women in Indore or enabling vocational pathways and livelihood kits, your partnership creates lifelong dignity and independence.
          </p>

          <div class="gasvs-health-cta-btn-group">
            <a href="tel:+919823224640" class="gasvs-btn gasvs-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Call +91 9823224640</span>
            </a>

            <a href="mailto:info@gasvs.org" class="gasvs-btn gasvs-btn-secondary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <span>Email: info@gasvs.org</span>
            </a>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-white">
              <span>Contact Us</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

          <div class="gasvs-health-cta-meta">
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
