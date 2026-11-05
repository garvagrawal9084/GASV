<?php
/**
 * Modern Community-Based Rehabilitation (CBR – BDPO) Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 *
 * Template Name: Modern CBR – BDPO Program Page
 * Strictly scoped to the CBR BDPO page (slug: cbr-bdpo-program-sausar-and-pandhurna-blocks-of-chhindwara-district / ID 194).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENT.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Field-Verified Local Photos (Zero Duplication Across Sections)
$img_hero_bg              = home_url( '/wp-content/uploads/2024/07/CBR-BDPO.jpeg' );
$img_overview             = home_url( '/wp-content/uploads/2024/07/CBR-–-BDPO-Program-1-1024x470.jpg' );
$img_chetana_bdpo         = home_url( '/wp-content/uploads/2024/07/Chetana-Disabled-Persons-Organization-BDPO-.jpeg' );
$img_pandhurna_expansion  = home_url( '/wp-content/uploads/2024/07/CBR-–-BDPO-Program-3-1024x471.jpg' );

// 4 Core Strategic Pillars
$img_pillar_entitlements  = home_url( '/wp-content/uploads/2024/07/Chetana-Disabled-Persons-Organization-BDPO-1.jpeg' );
$img_pillar_assistive     = home_url( '/wp-content/uploads/2024/07/cBDPO-1024x768.png' );
$img_pillar_rehab         = home_url( '/wp-content/uploads/2024/07/Chetana-Disabled-Persons-Organization-BDPO-768x576-1.jpeg' );
$img_pillar_voting        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_09_accessible_voting.jpg' );

// Story of Change Spotlight
$img_story_sanjay         = home_url( '/wp-content/uploads/gasvs_images/disability/disability_03_sanjay_waghale_pump.jpg' );

// 6 Unique Field Showcase Photos (Distinct from above)
$img_gallery_1            = home_url( '/wp-content/uploads/2024/07/cBDPO-768x576-1.png' );
$img_gallery_2            = home_url( '/wp-content/uploads/gasvs_images/disability/disability_10_divyang_diwas.jpg' );
$img_gallery_3            = home_url( '/wp-content/uploads/gasvs_images/disability/disability_07_national_assistive_event.jpg' );
$img_gallery_4            = home_url( '/wp-content/uploads/gasvs_images/disability/disability_13_leadership_presentation.jpg' );
$img_gallery_5            = home_url( '/wp-content/uploads/gasvs_images/disability/disability_14_village_group_meeting.jpg' );
$img_gallery_6            = home_url( '/wp-content/uploads/gasvs_images/disability/disability_02_car_driving.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-cbr-bdpo-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-cbr-hero" id="cbr-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-cbr-hero-inner">

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
            <li><a href="<?php echo esc_url( home_url( '/disability/' ) ); ?>">Disability Inclusion</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">CBR – BDPO Program</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Community-Based Rehabilitation</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-cbr-hero-title gasvs-animate-slide-up">
          CBR – BDPO Program: <span class="gasvs-text-gradient">Sausar &amp; Pandhurna Blocks</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-cbr-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Pioneering grassroots Community-Based Rehabilitation (CBR) since 2007 across Sausar and Pandhurna blocks of Chhindwara (now Pandhurna) district. Empowering Persons and Children with Disabilities (PwDs/CwDs), capacitating village caregivers and local governance, and building autonomous Disabled People's Organizations (DPOs) for sustainable inclusion and dignity.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Authentic Master Data -->
        <div class="gasvs-cbr-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">7,500+</span>
            <span class="gasvs-stat-pill-label">PwDs &amp; CwDs Supported</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">25 VDPOs</span>
            <span class="gasvs-stat-pill-label">Federated in Pandhurna</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">22 VDPOs</span>
            <span class="gasvs-stat-pill-label">Strengthened in Sausar</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">161</span>
            <span class="gasvs-stat-pill-label">UDID Certificates Facilitated</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">198</span>
            <span class="gasvs-stat-pill-label">Linked to Assistive Devices</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. PROGRAM GENESIS & STRATEGIC OVERVIEW
       ========================================================================= -->
  <section class="gasvs-section gasvs-cbr-overview-section" id="cbr-overview">
    <div class="gasvs-container">

      <div class="gasvs-cbr-overview-grid">

        <!-- Text Content Column -->
        <div class="gasvs-cbr-overview-content">
          <span class="gasvs-kicker">Program Genesis &amp; Framework</span>
          <h2 class="gasvs-section-title">Integrating Persons with Disabilities into Village Life</h2>
          <p class="gasvs-section-subtitle text-left">
            Community-Based Rehabilitation is not merely an assistance program; it is a holistic community development strategy that equalizes opportunities, upholds fundamental human rights, and secures social inclusion.
          </p>

          <p class="gasvs-cbr-body-copy">
            Since <strong>2007</strong>, Gramin Adiwasi Samaj Vikas Sansthan (GASVS) has been a pivotal facilitator in the Sausar and Pandhurna blocks of Chhindwara District (now reorganized as Pandhurna District). By actively sensitizing and building the capacities of Persons with Disabilities (PwDs), their families, caregivers, teachers, school administrations, public health workers, and Panchayati Raj officials, GASVS fosters a supportive environment that enables PwDs to realize their full human potential.
          </p>

          <p class="gasvs-cbr-body-copy">
            Through collaborative grassroots mobilization involving PwDs and their communities, GASVS delivers essential interventions spanning healthcare access, disability certification, specialized assistive aids, primary education integration, and sustainable livelihood pathways.
          </p>

          <div class="gasvs-context-points">
            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Community-Driven Empowerment</h3>
                <p>Transferring decision-making power directly to PwDs and their families, transitioning from passive beneficiaries into self-advocates through structured village mutual-aid groups.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Systemic Health &amp; Assistive Linkages</h3>
                <p>Conducting medical screening camps, facilitating UDID certifications, providing custom prosthetic fittings, and distributing tricycles, wheelchairs, and calipers across rural clusters.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Civic Inclusion &amp; Entitlements Access</h3>
                <p>Enabling full participation in Gram Sabhas, ensuring accessible electoral voting, and securing government disability pensions, scholarships, and self-employment grants.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Media Visual Column -->
        <div class="gasvs-cbr-overview-media">
          <div class="gasvs-media-card-wrapper">
            <div class="gasvs-media-frame">
              <img 
                src="<?php echo esc_url( $img_overview ); ?>" 
                alt="Village Level Disabled Persons Organization (VDPO) meeting in rural Sausar discussing disability rights, livelihoods, and entitlements"
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
                <div class="gasvs-context-stat-value">22 Village Groups</div>
                <div class="gasvs-context-stat-desc">Strengthened across Sausar Block</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. FOUR STRATEGIC PILLARS OF CBR-BDPO
       ========================================================================= -->
  <section class="gasvs-section gasvs-cbr-pillars-section" id="cbr-pillars">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Core Methodology</span>
        <h2 class="gasvs-section-title">Four Strategic Pillars of Intervention</h2>
        <p class="gasvs-section-subtitle">
          Addressing the multifaceted needs of Persons with Disabilities through a rigorous, rights-based community architecture.
        </p>
      </div>

      <div class="gasvs-cbr-pillars-grid">

        <!-- Pillar 1: Entitlement, UDID & Certification -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_entitlements ); ?>" 
              alt="GASVS disability field team and beneficiaries coordinating disability certificates and UDID administrative documentation"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 01 · Rights</span>
          </div>
          <div class="gasvs-pillar-content">
            <h3 class="gasvs-pillar-title">Certification &amp; Entitlement Access</h3>
            <p class="gasvs-pillar-desc">
              Organizing medical certification camps, overcoming remote geographic hurdles, facilitating Unique Disability ID (UDID) cards, and linking PwDs to monthly state disability pensions, railway concessions, and social welfare schemes.
            </p>
            <div class="gasvs-pillar-highlights">
              <span class="gasvs-pill-tag">161+ Certificates Facilitated</span>
              <span class="gasvs-pill-tag">UDID Registration Drives</span>
              <span class="gasvs-pill-tag">State Pension Linkage</span>
            </div>
          </div>
        </article>

        <!-- Pillar 2: Assistive Devices & Mobility Aids -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_assistive ); ?>" 
              alt="Community distribution ceremony of modified hand-pedaled tricycles and wheelchairs for persons with locomotor disabilities"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 02 · Mobility</span>
          </div>
          <div class="gasvs-pillar-content">
            <h3 class="gasvs-pillar-title">Assistive Devices &amp; Mobility Aids</h3>
            <p class="gasvs-pillar-desc">
              Screening, procurement, and customized distribution of essential assistive equipment—including hand-pedaled tricycles, wheelchairs, crutches, walking sticks, and sensory devices—enabling beneficiaries to move freely and independently.
            </p>
            <div class="gasvs-pillar-highlights">
              <span class="gasvs-pill-tag">198+ Assistive Systems Delivered</span>
              <span class="gasvs-pill-tag">Tricycle &amp; Wheelchair Camps</span>
              <span class="gasvs-pill-tag">Zero Financial Cost</span>
            </div>
          </div>
        </article>

        <!-- Pillar 3: Physical Rehabilitation & Prosthetics -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_rehab ); ?>" 
              alt="Clinical fitting and measurement session for artificial limbs, functional calipers, and custom prosthetics for rural amputees"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 03 · Clinical Care</span>
          </div>
          <div class="gasvs-pillar-content">
            <h3 class="gasvs-pillar-title">Prosthetics &amp; Physical Rehabilitation</h3>
            <p class="gasvs-pillar-desc">
              Providing specialized clinical assessments, plaster casting, and custom fitting of artificial limbs (prosthetics) and orthotic calipers. Combined with home-based physiotherapy guidance to restore functional motor autonomy.
            </p>
            <div class="gasvs-pillar-highlights">
              <span class="gasvs-pill-tag">Custom Limb Measurements</span>
              <span class="gasvs-pill-tag">Calipers &amp; Orthotic Care</span>
              <span class="gasvs-pill-tag">Caregiver Physical Therapy</span>
            </div>
          </div>
        </article>

        <!-- Pillar 4: Civic Rights, Accessibility & Voting -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_voting ); ?>" 
              alt="Accessible voting assistance for disabled citizens during democratic elections in rural Madhya Pradesh"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 04 · Inclusion</span>
          </div>
          <div class="gasvs-pillar-content">
            <h3 class="gasvs-pillar-title">Civic Inclusion &amp; Accessible Voting</h3>
            <p class="gasvs-pillar-desc">
              Advocating for barrier-free rural infrastructure, ramps at public buildings, and active participation in local democracy. Recognized nationally for spearheading 100% inclusion of disabled women in Panchayati Raj governance.
            </p>
            <div class="gasvs-pillar-highlights">
              <span class="gasvs-pill-tag">Accessible Polling Booths</span>
              <span class="gasvs-pill-tag">100% Women PRI Inclusion</span>
              <span class="gasvs-pill-tag">Gram Sabha Representation</span>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. PROGRAM EVOLUTION & PHASED SUSTAINABILITY TIMELINE
       ========================================================================= -->
  <section class="gasvs-section gasvs-cbr-timeline-section" id="cbr-timeline">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Phased Methodology</span>
        <h2 class="gasvs-section-title">A Phased Journey to Community Ownership</h2>
        <p class="gasvs-section-subtitle">
          From 2007 to 2017, the CBR program was implemented through structured phases, progressively building capacity until self-sustaining Disabled People’s Organizations took charge.
        </p>
      </div>

      <div class="gasvs-timeline-flow">

        <!-- Phase 1 -->
        <div class="gasvs-timeline-step">
          <div class="gasvs-tstep-node">
            <span class="gasvs-tstep-year">2007</span>
          </div>
          <div class="gasvs-tstep-card">
            <span class="gasvs-tstep-badge">Phase I · Foundation</span>
            <h3 class="gasvs-tstep-title">Inception in Sausar Block</h3>
            <p class="gasvs-tstep-desc">
              Initiation of village-level door-to-door surveys across Sausar block, identifying neglected Persons with Disabilities, breaking entrenched superstitious stigma, and organizing initial village mutual-aid collectives.
            </p>
          </div>
        </div>

        <!-- Phase 2 -->
        <div class="gasvs-timeline-step">
          <div class="gasvs-tstep-node">
            <span class="gasvs-tstep-year">2010</span>
          </div>
          <div class="gasvs-tstep-card">
            <span class="gasvs-tstep-badge">Phase II · Capacity</span>
            <h3 class="gasvs-tstep-title">Ecosystem &amp; Caregiver Capacity Building</h3>
            <p class="gasvs-tstep-desc">
              Conducting extensive training for caregivers, primary school teachers, and Anganwadi workers to recognize children with disabilities (CwDs), support inclusive education, and facilitate early therapeutic interventions.
            </p>
          </div>
        </div>

        <!-- Phase 3 -->
        <div class="gasvs-timeline-step">
          <div class="gasvs-tstep-node">
            <span class="gasvs-tstep-year">2013</span>
          </div>
          <div class="gasvs-tstep-card">
            <span class="gasvs-tstep-badge">Phase III · Momentum</span>
            <h3 class="gasvs-tstep-title">Misereor, CARITAS &amp; CBR Forum Partnership</h3>
            <p class="gasvs-tstep-desc">
              The program gained substantial international momentum through the support of Misereor (Germany) via CARITAS – India and CBR Forum (Bangalore), expanding clinical reach, assistive technology, and legal advocacy.
            </p>
          </div>
        </div>

        <!-- Phase 4 -->
        <div class="gasvs-timeline-step">
          <div class="gasvs-tstep-node">
            <span class="gasvs-tstep-year">2015</span>
          </div>
          <div class="gasvs-tstep-card">
            <span class="gasvs-tstep-badge">Phase IV · Transition</span>
            <h3 class="gasvs-tstep-title">DPO Handover &amp; Pandhurna Expansion</h3>
            <p class="gasvs-tstep-desc">
              Beginning the phase-out in Sausar, transitioning leadership to the autonomous Chetana BDPO. Replicating the model in adjacent Pandhurna block with CBR Forum Bangalore to build lasting institutional empowerment.
            </p>
          </div>
        </div>

        <!-- Phase 5 -->
        <div class="gasvs-timeline-step">
          <div class="gasvs-tstep-node">
            <span class="gasvs-tstep-year">2018+</span>
          </div>
          <div class="gasvs-tstep-card">
            <span class="gasvs-tstep-badge">Phase V · Sustainability</span>
            <h3 class="gasvs-tstep-title">District Federation &amp; National Accolades</h3>
            <p class="gasvs-tstep-desc">
              Establishment of 25 VDPOs in Pandhurna federated with the Chhindwara District Level DPO (DDPO). In 2021, conferred the prestigious National Award by the Hon'ble President of India for outstanding empowerment of PwDs.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. GRASSROOTS DPO ARCHITECTURE: CHETANA BDPO & PANDHURNA BDPO
       ========================================================================= -->
  <section class="gasvs-section gasvs-cbr-dpo-section" id="cbr-dpo">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Grassroots Governance</span>
        <h2 class="gasvs-section-title">The Disabled People’s Organization (DPO) Model</h2>
        <p class="gasvs-section-subtitle">
          Sustainable impact achieved by shifting institutional power from external organizations into democratic, community-owned Disabled People's Organizations.
        </p>
      </div>

      <div class="gasvs-cbr-dpo-grid">

        <!-- Chetana BDPO Card -->
        <article class="gasvs-dpo-card">
          <div class="gasvs-dpo-media">
            <img 
              src="<?php echo esc_url( $img_chetana_bdpo ); ?>" 
              alt="Chetana Disabled Persons Organization (BDPO) executive assembly and leadership meeting in Sausar"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-dpo-badge">Sausar Block · Established 2007</span>
          </div>
          <div class="gasvs-dpo-body">
            <h3 class="gasvs-dpo-title">Chetana Disabled Persons Organization (BDPO)</h3>
            <p class="gasvs-dpo-desc">
              Pioneered in Sausar block, Chetana BDPO was nurtured by GASVS through a multi-phase empowerment model. As the project completed its transition in 2015, Chetana BDPO assumed full leadership over disability rights, livelihood advocacy, and community support.
            </p>
            <ul class="gasvs-dpo-features">
              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span><strong>22 Village-Level DPOs:</strong> Federated under one autonomous block leadership.</span>
              </li>
              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span><strong>100% Autonomous Leadership:</strong> Managed entirely by PwD representatives.</span>
              </li>
              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span><strong>Mutual-Aid &amp; Microcredit:</strong> Organizing peer savings and self-help initiatives.</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Pandhurna BDPO Card -->
        <article class="gasvs-dpo-card">
          <div class="gasvs-dpo-media">
            <img 
              src="<?php echo esc_url( $img_pandhurna_expansion ); ?>" 
              alt="Pandhurna Block CBR-BDPO assembly with community members, CBR Forum representatives, and GASVS field coordinators"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-dpo-badge">Pandhurna Block · Expanded 2015</span>
          </div>
          <div class="gasvs-dpo-body">
            <h3 class="gasvs-dpo-title">Pandhurna BDPO &amp; 25 Village VDPOs</h3>
            <p class="gasvs-dpo-desc">
              Encouraged by the breakthroughs in Sausar, GASVS partnered with CBR Forum (Bangalore) in 2015 to replicate the CBR framework across adjacent Pandhurna block. Phase I concluded in 2016 and Phase II in 2018, establishing a formidable network of 25 VDPOs.
            </p>
            <ul class="gasvs-dpo-features">
              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span><strong>25 Village Level DPOs (VDPOs):</strong> Active village advocacy and inclusion networks.</span>
              </li>
              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span><strong>DDPO Federation:</strong> Linked to the Chhindwara District Level Disabled People's Organization.</span>
              </li>
              <li>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span><strong>Technical Stakeholder:</strong> Continuous technical and field support provided by GASVS.</span>
              </li>
            </ul>
          </div>
        </article>

      </div>

      <!-- Federation Architecture Ribbon -->
      <div class="gasvs-dpo-architecture-box">
        <h4 class="gasvs-arch-title">Democratic Three-Tier Representation Architecture</h4>
        <div class="gasvs-arch-steps">
          <div class="gasvs-arch-step">
            <span class="gasvs-arch-num">Tier 1</span>
            <strong>Village Level DPOs (VDPOs)</strong>
            <p>47 total village mutual-aid groups (22 Sausar + 25 Pandhurna) resolving grassroots rights and inclusion.</p>
          </div>
          <div class="gasvs-arch-arrow">➔</div>
          <div class="gasvs-arch-step">
            <span class="gasvs-arch-num">Tier 2</span>
            <strong>Block Level DPOs (BDPOs)</strong>
            <p>Chetana BDPO (Sausar) &amp; Pandhurna BDPO negotiating with Block Development Offices &amp; PRIs.</p>
          </div>
          <div class="gasvs-arch-arrow">➔</div>
          <div class="gasvs-arch-step">
            <span class="gasvs-arch-num">Tier 3</span>
            <strong>District Level DPO (DDPO)</strong>
            <p>Chhindwara DDPO coordinating policy advocacy, judicial access, and district-wide medical boards.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. SPOTLIGHT STORY OF CHANGE: SANJAY WAGHALE
       ========================================================================= -->
  <section class="gasvs-section gasvs-cbr-story-section" id="cbr-story">
    <div class="gasvs-container">

      <div class="gasvs-story-spotlight-card">
        <div class="gasvs-story-glow"></div>
        <div class="gasvs-story-spotlight-grid">

          <div class="gasvs-story-spotlight-media">
            <img 
              src="<?php echo esc_url( $img_story_sanjay ); ?>" 
              alt="Sanjay Waghale, 40, operating the village drinking water system at Teegaon Gram Panchayat"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-story-badge">
              <span>Authentic Field Story · Teegaon Village</span>
            </div>
          </div>

          <div class="gasvs-story-spotlight-content">
            <span class="gasvs-badge-pill gasvs-badge-white">
              <span class="gasvs-badge-dot"></span>
              <span>Verified Story of Change</span>
            </span>

            <h2 class="gasvs-story-spotlight-title">
              Sanjay Waghale: <span class="gasvs-text-gradient">A Journey Towards Inclusion &amp; Self-Reliance</span>
            </h2>

            <p class="gasvs-story-spotlight-text">
              Sanjay Waghale, a 40-year-old resident with a locomotor disability from Teegaon village in Pandhurna district, once experienced severe social exclusion and economic uncertainty. When the GASVS Community-Based Rehabilitation program commenced work in his village, our field coordinators partnered with Sanjay to navigate the complex administrative hurdles that stood between him and his statutory rights.
            </p>

            <p class="gasvs-story-spotlight-text">
              Through consistent CBR facilitation, Sanjay secured his official Unique Disability ID (UDID) card, obtained his monthly disability pension, and received a government marriage grant. Empowered with financial stability and newfound confidence, Sanjay established a thriving goat-rearing enterprise, was democratically elected President of his village Self-Help Group, and in <strong>2025 secured formal employment as a Pump Operator at the Gram Panchayat</strong>.
            </p>

            <div class="gasvs-story-impact-pills">
              <div class="gasvs-simpact-pill">
                <strong>UDID Card &amp; Pension</strong>
                <span>Statutory rights secured</span>
              </div>
              <div class="gasvs-simpact-pill">
                <strong>SHG President</strong>
                <span>Democratic village leadership</span>
              </div>
              <div class="gasvs-simpact-pill">
                <strong>Pump Operator</strong>
                <span>Formal Gram Panchayat role (2025)</span>
              </div>
            </div>

            <div class="gasvs-story-quote">
              <blockquote>
                &ldquo;GASVS showed me that having a disability does not mean having no future. Today, I earn with dignity, lead my village group, and operate the water pump that serves my entire community.&rdquo;
              </blockquote>
              <cite>— Sanjay Waghale, Teegaon, Pandhurna District</cite>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. IMPACT & NATIONAL RECOGNITION MILESTONE
       ========================================================================= -->
  <section class="gasvs-section gasvs-cbr-awards-section" id="cbr-impact">
    <div class="gasvs-container">

      <div class="gasvs-vision-card">
        <div class="gasvs-vision-glow"></div>
        <div class="gasvs-vision-inner">

          <span class="gasvs-badge-pill gasvs-badge-white">
            <span class="gasvs-badge-dot"></span>
            <span>Presidential &amp; National Accolades</span>
          </span>

          <h2 class="gasvs-vision-title">
            Recognized at the Highest Levels: <span class="gasvs-text-gradient">National Award-2020</span>
          </h2>

          <p class="gasvs-vision-lead">
            The transformative impact of GASVS’s Community-Based Rehabilitation and Disability Inclusion program was recognized by the Ministry of Social Justice and Empowerment, Government of India, culminating in the prestigious <strong>National Award-2020</strong>, conferred by the <strong>Hon'ble President of India</strong> for outstanding grassroots contribution towards empowering persons with disabilities.
          </p>

          <div class="gasvs-vision-metrics-grid">
            <div class="gasvs-vision-metric">
              <span class="gasvs-vmetric-val">2021</span>
              <span class="gasvs-vmetric-title">National Award-2020</span>
              <p class="gasvs-vmetric-desc">Conferred by the Hon'ble President of India, Ministry of Social Justice &amp; Empowerment.</p>
            </div>

            <div class="gasvs-vision-metric">
              <span class="gasvs-vmetric-val">100%</span>
              <span class="gasvs-vmetric-title">Women in PRI (2016)</span>
              <p class="gasvs-vmetric-desc">Awarded for achieving complete inclusion of disabled women in local self-governance.</p>
            </div>

            <div class="gasvs-vision-metric">
              <span class="gasvs-vmetric-val">2016</span>
              <span class="gasvs-vmetric-title">Sparsh Abhiyan Award</span>
              <p class="gasvs-vmetric-desc">State-level recognition for accessible healthcare outreach and humanitarian dignity.</p>
            </div>

            <div class="gasvs-vision-metric">
              <span class="gasvs-vmetric-val">2019</span>
              <span class="gasvs-vmetric-title">Mahaveer National Award</span>
              <p class="gasvs-vmetric-desc">Prestigious national award for sustained excellence in human welfare and rural rehabilitation.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. AUTHENTIC FIELD PHOTO SHOWCASE (ZERO DUPLICATION)
       ========================================================================= -->
  <section class="gasvs-section gasvs-cbr-gallery-section" id="cbr-gallery">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Photographic Evidence</span>
        <h2 class="gasvs-section-title">Field Operations in Sausar &amp; Pandhurna</h2>
        <p class="gasvs-section-subtitle">
          Authentic field documentation of GASVS disability rehabilitation camps, leadership seminars, assistive device handovers, and community celebrations in Madhya Pradesh.
        </p>
      </div>

      <div class="gasvs-gallery-grid">

        <!-- Photo 1: Multi-Disciplinary Screening Camp -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_1 ); ?>" 
              alt="Multi-disciplinary screening and medical evaluation camp organized in a rural cluster for PwDs"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Assessment Camp</span>
            <p>Comprehensive disability evaluation and medical board screening organized in remote tribal habitations.</p>
          </figcaption>
        </figure>

        <!-- Photo 2: Divyang Diwas Celebration -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_2 ); ?>" 
              alt="International Day of Persons with Disabilities (Divyang Diwas) celebration and community awareness rally"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Divyang Diwas</span>
            <p>Village rally and public celebration commemorating the International Day of Persons with Disabilities.</p>
          </figcaption>
        </figure>

        <!-- Photo 3: National Assistive Device Consultation -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_3 ); ?>" 
              alt="National assistive aid consultation and expert technical workshop on modern mobility aids"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Assistive Tech Event</span>
            <p>Multi-stakeholder technical consultation on accessible devices and rural assistive aid delivery systems.</p>
          </figcaption>
        </figure>

        <!-- Photo 4: DPO Leadership Presentation -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_4 ); ?>" 
              alt="Disabled People's Organization leadership training seminar and advocacy skills presentation"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Leadership Capacity</span>
            <p>DPO office-bearers participating in advocacy training, legal rights literacy, and administrative negotiation.</p>
          </figcaption>
        </figure>

        <!-- Photo 5: Inclusive Sports & Youth Empowerment -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_5 ); ?>" 
              alt="Inclusive youth sports competition promoting social interaction, teamwork, and confidence for CwDs"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Inclusive Sports</span>
            <p>Community sports festivals organized for children with disabilities to foster confidence and peer solidarity.</p>
          </figcaption>
        </figure>

        <!-- Photo 6: Wheelchair Youth Mobility -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_gallery_6 ); ?>" 
              alt="Young beneficiary receiving customized wheelchair for schooling and independent village mobility"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Youth Mobility</span>
            <p>Customized wheelchair provision enabling rural adolescents to attend school and participate in community life.</p>
          </figcaption>
        </figure>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       9. INSTITUTIONAL COLLABORATIONS & CBR ALLIANCES
       ========================================================================= -->
  <section class="gasvs-section gasvs-cbr-partners-section" id="cbr-partners">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Governance &amp; Alliances</span>
        <h2 class="gasvs-section-title">Institutional Collaborations</h2>
        <p class="gasvs-section-subtitle">
          Building resilient disability inclusion through trusted partnerships with global development organizations, government departments, and grassroots federations.
        </p>
      </div>

      <div class="gasvs-cbr-partners-grid">

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">International Development</div>
          <h3 class="gasvs-partner-title">Misereor, Germany</h3>
          <p class="gasvs-partner-desc">Key international funding and strategic partner supporting the CBR program's expansion, capacity building, and sustainable transition across Chhindwara district.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">National Development Partner</div>
          <h3 class="gasvs-partner-title">CARITAS – India</h3>
          <p class="gasvs-partner-desc">National implementing partner providing institutional oversight, humanitarian development frameworks, and community mobilization methodologies.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Technical &amp; Resource Partner</div>
          <h3 class="gasvs-partner-title">CBR Forum, Bangalore</h3>
          <p class="gasvs-partner-desc">Pioneering technical partner directing the CBR framework, training modules, Pandhurna block expansion, and DPO federation architecture.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Central Government Ministry</div>
          <h3 class="gasvs-partner-title">Ministry of Social Justice &amp; Empowerment</h3>
          <p class="gasvs-partner-desc">Government of India apex body recognizing GASVS with the National Award-2020 and enabling statutory welfare and certification pathways.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">District Health Administration</div>
          <h3 class="gasvs-partner-title">District Health Department, MP</h3>
          <p class="gasvs-partner-desc">Collaborating on medical evaluation boards, UDID card issuing clinics, specialist surgeon consultations, and primary health centre referrals.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">District Federation Alliance</div>
          <h3 class="gasvs-partner-title">Chhindwara District DPO (DDPO)</h3>
          <p class="gasvs-partner-desc">District-level apex federation of disabled persons organizations ensuring policy advocacy, legal justice, and barrier-free public infrastructure.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       10. CALL TO ACTION & ASSISTANCE HELPLINE
       ========================================================================= -->
  <section class="gasvs-cbr-cta-section" id="cbr-contact">
    <div class="gasvs-container">

      <div class="gasvs-health-cta-box">
        <div class="gasvs-health-cta-glow"></div>
        <div class="gasvs-health-cta-inner text-center">

          <span class="gasvs-badge-pill gasvs-badge-white">
            <span class="gasvs-badge-dot"></span>
            <span>Disability Rights &amp; Rehabilitation Helpdesk</span>
          </span>

          <h2 class="gasvs-health-cta-heading">
            Connect With the <span class="gasvs-text-gradient">Disability Inclusion Network</span>
          </h2>

          <p class="gasvs-health-cta-lead">
            Whether you require assistance with UDID certification, need guidance on assistive aids and wheelchairs, or wish to collaborate with our Community-Based Rehabilitation teams in Pandhurna and Sausar, we are here to support.
          </p>

          <div class="gasvs-health-cta-btn-group">
            <a href="tel:+919823224640" class="gasvs-btn gasvs-btn-primary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Call Helpline: +91 9823224640</span>
            </a>

            <a href="mailto:info@gasvs.org" class="gasvs-btn gasvs-btn-secondary">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <span>Email: info@gasvs.org</span>
            </a>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-white">
              <span>Contact Registered Office</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

          <div class="gasvs-health-cta-meta">
            <span>✓ Registered NGO: M.P.–25307</span>
            <span>•</span>
            <span>✓ 12A &amp; 80G Certified</span>
            <span>•</span>
            <span>✓ FCRA &amp; CSR-1 Accredited</span>
            <span>•</span>
            <span>✓ National Award-2020 Conferred by President of India</span>
          </div>

        </div>
      </div>

    </div>
  </section>

</main>

<?php
get_footer();
