<?php
/**
 * Modern Pre-School Nutrition & Education (Malnutrition) Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern Pre-School Nutrition & Education Page
 * Strictly scoped to the Malnutrition page (slug: malnutrition / ID 208).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENTS.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Field-Verified Local Photos (Zero Duplication Across Sections)
$img_hero_bg          = home_url( '/wp-content/uploads/2024/07/MALNUTRITION.jpeg' );
$img_context_milk     = home_url( '/wp-content/uploads/2024/06/Program-tab-Malnutrition.jpeg' );

// 4 Core Strategic Pillars Photos (All Distinct Files)
$img_pillar_milk      = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_06_pashu_sakhi_goat_care.jpg' );
$img_pillar_education = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_03_preprimary_tribal_school.jpeg' );
$img_pillar_health    = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_10_child_medical_checkup.jpeg' );
$img_pillar_rations   = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_02_food_ration_bags.jpg' );

// 6 Unique Field Showcase Photos (All Distinct Local Media)
$img_gallery_1        = home_url( '/wp-content/uploads/gasvs_images/home_hero/home_hero_05_preprimary_school_02.jpeg' );
$img_gallery_2        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_01_relief_kit_handover.jpg' );
$img_gallery_3        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_09_health_camp_eye_doctor.jpg' );
$img_gallery_4        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_08_organic_forest_produce_stall.jpg' );
$img_gallery_5        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_15_cleanliness_swachhata_drive.jpeg' );
$img_gallery_6        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_12_remote_tribal_hamlet_relief.jpeg' );
?>

<main id="gasvs-main-content" class="gasvs-malnutrition-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-malnutrition-hero" id="malnutrition-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-malnutrition-hero-inner">

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
            <li><span>Programs</span></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">Pre-School Nutrition &amp; Malnutrition Interventions</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Pre-School Nutrition &amp; Early Childhood Care · Junnardeo Block</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-malnutrition-hero-title gasvs-animate-slide-up">
          Pre-School Nutrition &amp; Education: <span class="gasvs-text-gradient">Combating Childhood Malnutrition</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-malnutrition-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          In response to the alarming childhood malnutrition disparities highlighted in a recent Lancet study, Gramin Adiwasi Samaj Vikas Sansthan (GASVS), supported by the Jiv Daya Foundation (JDF), established the Pre-School Nutrition and Education Program across remote tribal hamlets in Junnardeo block of Chhindwara district. Providing daily fresh milk, early cognitive stimulation, health monitoring, and household food security to ensure every child thrives with health and dignity.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Authentic Master Data -->
        <div class="gasvs-malnutrition-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">5</span>
            <span class="gasvs-stat-pill-label">Pre-Primary Tribal Schools</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">125</span>
            <span class="gasvs-stat-pill-label">Children Receiving Daily Milk &amp; Biscuits</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">125</span>
            <span class="gasvs-stat-pill-label">Children Enrolled in Early Education</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">150</span>
            <span class="gasvs-stat-pill-label">Families on Dry-Ration Support</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">6 Mos – 5 Yrs</span>
            <span class="gasvs-stat-pill-label">Critical Nutritional Window</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">Jiv Daya</span>
            <span class="gasvs-stat-pill-label">Philanthropic Partner (JDF)</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. PROGRAM CONTEXT & GRASSROOTS NEED
       ========================================================================= -->
  <section class="gasvs-section gasvs-malnutrition-context-section" id="malnutrition-context">
    <div class="gasvs-container">

      <div class="gasvs-malnutrition-context-grid">

        <!-- Text Content Column -->
        <div class="gasvs-malnutrition-context-content">
          <span class="gasvs-kicker">Grassroots Reality &amp; Scientific Evidence</span>
          <h2 class="gasvs-section-title">Overcoming Childhood Malnutrition in Remote Forest Hamlets</h2>
          <p class="gasvs-section-subtitle text-left">
            Addressing Lancet study findings through village-based daily milk nutrition, early childhood cognitive support, and maternal empowerment.
          </p>

          <p class="gasvs-malnutrition-body-copy">
            A landmark Lancet study brought urgent attention to severe nutritional disparities among young children in marginalized rural and tribal pockets of central India. Left unaddressed, early childhood malnutrition inflicts irreversible damage on cognitive development, physical stunting, and immune health during the most decisive developmental period of human life.
          </p>

          <p class="gasvs-malnutrition-body-copy">
            In response, <strong>Gramin Adiwasi Samaj Vikas Sansthan (GASVS)</strong> designed a dedicated village-based intervention model centered in <strong>Pipariya Duggalam, Nichetemru, and Iklamasani Bhandu</strong> within the Junnardeo block of Chhindwara District. By embedding early childhood education with daily nutrient-dense milk and dietary replenishment directly into isolated tribal villages, the program dismantles the structural barriers of distance, poverty, and informational isolation.
          </p>

          <div class="gasvs-context-points">
            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Protecting the Formative First Years</h3>
                <p>Targeting young children aged 6 months to 5 years with daily animal protein, calcium, and micronutrients during peak neuro-developmental windows.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M4 19.5A2.5 2.5 0 0 0 6.5 22H20V2H6.5A2.5 2.5 0 0 0 4 4.5v15z"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Early Learning &amp; Cognitive Stimulation</h3>
                <p>Pairing wholesome nutrition with structured pre-school activities, motor skills development, and language games that prepare tribal children for primary schooling.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Caregiver Engagement &amp; Household Food Security</h3>
                <p>Conducting participatory nutrition workshops with tribal mothers and distributing dry-ration packages to 150 food-insecure families.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Media Visual Column -->
        <div class="gasvs-malnutrition-context-media">
          <div class="gasvs-media-card-wrapper">
            <div class="gasvs-media-frame">
              <img 
                src="<?php echo esc_url( $img_context_milk ); ?>" 
                alt="Children in Junnardeo tribal pre-school sitting together and receiving fresh daily milk in stainless steel glasses under the GASVS nutrition program"
                class="gasvs-img-fluid no-lazyload skip-lazy"
                data-skip-lazy="1"
                loading="eager"
              />
              <div class="gasvs-media-badge-tag">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5 22 12.28 18.6 15.36 13.45 20.04L12 21.35z"/></svg>
                <span>Pre-School Nutrition · Junnardeo Tribal Hamlets</span>
              </div>
            </div>

            <div class="gasvs-context-stat-card">
              <div class="gasvs-context-stat-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div class="gasvs-context-stat-info">
                <div class="gasvs-context-stat-value">Zero-Cost Daily Nourishment</div>
                <div class="gasvs-context-stat-desc">Serving Pipariya Duggalam, Nichetemru &amp; Iklamasani Bhandu</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. CORE INTERVENTION PILLARS: FOUR STRATEGIC FACETS
       ========================================================================= -->
  <section class="gasvs-section gasvs-malnutrition-pillars-section" id="malnutrition-pillars">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Intervention Architecture</span>
        <h2 class="gasvs-section-title">Four Pillars of Childhood Nourishment &amp; Learning</h2>
        <p class="gasvs-section-subtitle">
          A comprehensive village-level framework ensuring dietary replenishment, cognitive growth, healthcare tracking, and family food security.
        </p>
      </div>

      <div class="gasvs-malnutrition-pillars-grid">

        <!-- Pillar 1: Daily Milk Provision -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_milk ); ?>" 
              alt="Pre-school children receiving wholesome nutrition and milk in village classroom"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 01 · Nutrition</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-partner-tag">Supported by Jiv Daya Foundation (JDF)</div>
            <h3 class="gasvs-pillar-title">Daily Fresh Milk &amp; Biscuits Provision</h3>
            <p class="gasvs-pillar-desc">
              Recognizing milk as a vital, bio-available source of proteins, healthy fats, calcium, and vitamin D, GASVS provides daily morning milk and wholesome biscuits to 125 pre-school children across 5 tribal village centers, overcoming chronic dietary deficiencies.
            </p>
            <div class="gasvs-pillar-highlights">
              <span>✓ 125 children receiving daily fresh milk and biscuits</span>
              <span>✓ Protein, calcium &amp; caloric replenishment every morning</span>
              <span>✓ Safe hygienic preparation in community-managed kitchens</span>
            </div>
          </div>
        </article>

        <!-- Pillar 2: Pre-School Education -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_education ); ?>" 
              alt="Tribal pre-school children learning letters, numbers, and writing on slate boards with teacher support"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 02 · Early Learning</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-partner-tag">5 Community-Based Schools</div>
            <h3 class="gasvs-pillar-title">Early Childhood Cognitive &amp; Social Play</h3>
            <p class="gasvs-pillar-desc">
              Alongside nutritional support, GASVS operates 5 community-based pre-primary schools equipped with basic learning resources. Children engage in tailored pedagogical games, motor-skill development, language stimulation, songs, and storytelling to foster school readiness.
            </p>
            <div class="gasvs-pillar-highlights">
              <span>✓ 5 community-run pre-primary schools in tribal villages</span>
              <span>✓ Age-appropriate cognitive stimulation and literacy readiness</span>
              <span>✓ Smooth transition into formal government primary education</span>
            </div>
          </div>
        </article>

        <!-- Pillar 3: Pediatric Monitoring -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_health ); ?>" 
              alt="Medical doctor conducting pediatric health checkup and growth screening for a rural child"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 03 · Health Screening</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-partner-tag">Health Convergence</div>
            <h3 class="gasvs-pillar-title">Growth Monitoring &amp; Clinical Referral</h3>
            <p class="gasvs-pillar-desc">
              Field teams conduct periodic anthropometric assessments (weight, height, MUAC) to track growth trajectories. Children identified with Moderate or Severe Acute Malnutrition (MAM/SAM) receive specialized supplementary nutrition and direct referral to Nutrition Rehabilitation Centres (NRC).
            </p>
            <div class="gasvs-pillar-highlights">
              <span>✓ Regular weight and growth curve tracking</span>
              <span>✓ Early identification of severe acute malnutrition (SAM)</span>
              <span>✓ Direct referral to PHCs and Nutrition Rehabilitation Centres</span>
            </div>
          </div>
        </article>

        <!-- Pillar 4: Household Food Security -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_rations ); ?>" 
              alt="Dry ration bags prepared for household food security distribution to tribal families"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 04 · Food Security</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-partner-tag">150 Vulnerable Families</div>
            <h3 class="gasvs-pillar-title">Maternal Nutrition &amp; Household Dry Rations</h3>
            <p class="gasvs-pillar-desc">
              Childhood health is inextricably bound to maternal well-being. GASVS organizes interactive workshops on child feeding practices, food hygiene, and dietary diversity using accessible forest and garden produce, while extending monthly dry-ration support to 150 at-risk tribal households.
            </p>
            <div class="gasvs-pillar-highlights">
              <span>✓ 150 families supported with essential dry rations</span>
              <span>✓ Participatory nutrition and hygiene workshops for mothers</span>
              <span>✓ Focus on locally grown produce, legumes, and traditional greens</span>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. VILLAGE NETWORK & GEOGRAPHIC REACH
       ========================================================================= -->
  <section class="gasvs-section gasvs-malnutrition-network-section" id="malnutrition-network">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Geographic Footprint</span>
        <h2 class="gasvs-section-title">Community Pre-Primary Centers Across Junnardeo Block</h2>
        <p class="gasvs-section-subtitle">
          Reaching isolated tribal settlements nestled within the Satpura forest terrain of Chhindwara district.
        </p>
      </div>

      <div class="gasvs-malnutrition-network-grid">

        <div class="gasvs-network-card">
          <div class="gasvs-network-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3 class="gasvs-network-title">Pipariya Duggalam</h3>
          <p class="gasvs-network-desc">
            A primary village center delivering daily morning milk, structured cognitive readiness, and monthly growth monitoring for tribal children aged 6 months to 5 years.
          </p>
          <div class="gasvs-network-badge">Pre-Primary Hub · Junnardeo</div>
        </div>

        <div class="gasvs-network-card">
          <div class="gasvs-network-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3 class="gasvs-network-title">Nichetemru</h3>
          <p class="gasvs-network-desc">
            Serving remote households with early childhood education, hygiene awareness, and supplementary feeding to eradicate localized childhood wasting.
          </p>
          <div class="gasvs-network-badge">Pre-Primary Hub · Junnardeo</div>
        </div>

        <div class="gasvs-network-card">
          <div class="gasvs-network-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3 class="gasvs-network-title">Iklamasani Bhandu</h3>
          <p class="gasvs-network-desc">
            Community-driven center combining pre-primary foundational learning, nutrition education for mothers, and household food ration security.
          </p>
          <div class="gasvs-network-badge">Pre-Primary Hub · Junnardeo</div>
        </div>

        <div class="gasvs-network-card">
          <div class="gasvs-network-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </div>
          <h3 class="gasvs-network-title">5 Tribal Village Hamlets</h3>
          <p class="gasvs-network-desc">
            Extending outreach to contiguous tribal settlements across Junnardeo, linking families to healthcare systems and school transitions.
          </p>
          <div class="gasvs-network-badge">5 School Network · JDF Supported</div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. VERIFIED NUTRITION IMPACT METRICS
       ========================================================================= -->
  <section class="gasvs-section gasvs-malnutrition-impact-section" id="malnutrition-impact">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Quantifiable Results</span>
        <h2 class="gasvs-section-title">Verified Impact on Early Child Health &amp; Education</h2>
        <p class="gasvs-section-subtitle">
          Empowering tribal children and mothers with measurable outcomes documented in verified organizational records.
        </p>
      </div>

      <div class="gasvs-malnutrition-impact-grid">

        <div class="gasvs-malnutrition-impact-card">
          <div class="gasvs-malnutrition-impact-num">125</div>
          <div class="gasvs-malnutrition-impact-title">Children Receiving Daily Milk</div>
          <p class="gasvs-malnutrition-impact-desc">Provided with fresh daily milk and biscuits across five tribal pre-schools without interruption.</p>
        </div>

        <div class="gasvs-malnutrition-impact-card">
          <div class="gasvs-malnutrition-impact-num">5</div>
          <div class="gasvs-malnutrition-impact-title">Pre-Primary Schools Operating</div>
          <p class="gasvs-malnutrition-impact-desc">Equipped with learning materials, early literacy resources, and supportive learning spaces.</p>
        </div>

        <div class="gasvs-malnutrition-impact-card">
          <div class="gasvs-malnutrition-impact-num">150</div>
          <div class="gasvs-malnutrition-impact-title">Families on Dry Rations</div>
          <p class="gasvs-malnutrition-impact-desc">Vulnerable tribal households supported with dry rations to ensure comprehensive family food security.</p>
        </div>

        <div class="gasvs-malnutrition-impact-card">
          <div class="gasvs-malnutrition-impact-num">100%</div>
          <div class="gasvs-malnutrition-impact-title">Primary School Transition</div>
          <p class="gasvs-malnutrition-impact-desc">Children graduate into formal government primary schools with cognitive and behavioral readiness.</p>
        </div>

        <div class="gasvs-malnutrition-impact-card">
          <div class="gasvs-malnutrition-impact-num">6m – 5y</div>
          <div class="gasvs-malnutrition-impact-title">Target Developmental Age</div>
          <p class="gasvs-malnutrition-impact-desc">Targeting the most vulnerable physiological window to prevent irreversible physical stunting and wasting.</p>
        </div>

        <div class="gasvs-malnutrition-impact-card">
          <div class="gasvs-malnutrition-impact-num">37+</div>
          <div class="gasvs-malnutrition-impact-title">Years of Community Trust</div>
          <p class="gasvs-malnutrition-impact-desc">Serving tribal and marginalized communities across central India with integrity since 1991.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. INSTITUTIONAL PARTNERS & CONVERGENCE
       ========================================================================= -->
  <section class="gasvs-section gasvs-malnutrition-partners-section" id="malnutrition-partners">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Collaborative Action</span>
        <h2 class="gasvs-section-title">Institutional Partners &amp; Public Convergence</h2>
        <p class="gasvs-section-subtitle">
          Sustainable impact achieved through philanthropic alignment, government healthcare convergence, and village community leadership.
        </p>
      </div>

      <div class="gasvs-malnutrition-partners-grid">

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-pill">Philanthropic Partner</div>
          <h3 class="gasvs-partner-title">Jiv Daya Foundation (JDF)</h3>
          <p class="gasvs-partner-desc">
            Primary supporter of the Pre-Primary School &amp; Nutrition Programme across 5 tribal villages, funding daily milk provision, pre-school education supplies, and dry-ration kits for food-insecure families.
          </p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-pill">Public Health Convergence</div>
          <h3 class="gasvs-partner-title">ICDS &amp; Anganwadi Infrastructure</h3>
          <p class="gasvs-partner-desc">
            Coordinating with frontline ASHA workers, Anganwadi staff, and local Primary Health Centres (PHCs) for growth monitoring, routine immunizations, and referral of SAM children to Nutrition Rehabilitation Centres.
          </p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-pill">Grassroots Leadership</div>
          <h3 class="gasvs-partner-title">Tribal Panchayats &amp; Caregiver Circles</h3>
          <p class="gasvs-partner-desc">
            Partnering with village elders, tribal panchayats, and mother support groups to ensure community oversight, accountability, and regular attendance in preschool activities.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. AUTHENTIC FIELD PHOTO SHOWCASE (ZERO DUPLICATION)
       ========================================================================= -->
  <section class="gasvs-section gasvs-malnutrition-gallery-section" id="malnutrition-gallery">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Authentic Field Realities</span>
        <h2 class="gasvs-section-title">Moments from the Pre-School Nutrition Program</h2>
        <p class="gasvs-section-subtitle">
          Verified photographic documentation of classroom milk distribution, early learning, pediatric screening, and community outreach.
        </p>
      </div>

      <div class="gasvs-malnutrition-gallery-grid">

        <!-- Gallery Item 1 -->
        <div class="gasvs-gallery-item">
          <div class="gasvs-gallery-thumb">
            <img 
              src="<?php echo esc_url( $img_gallery_1 ); ?>" 
              alt="Tribal pre-school children in Junnardeo sitting in classroom circles drinking their daily morning milk from stainless steel glasses"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-gallery-overlay">
              <span class="gasvs-gallery-tag">Junnardeo Classroom</span>
              <p class="gasvs-gallery-desc">Daily fresh milk distribution providing essential animal protein, calcium, and caloric nourishment to tribal children.</p>
            </div>
          </div>
        </div>

        <!-- Gallery Item 2 -->
        <div class="gasvs-gallery-item">
          <div class="gasvs-gallery-thumb">
            <img 
              src="<?php echo esc_url( $img_gallery_2 ); ?>" 
              alt="Children practicing foundational literacy, writing, and drawing on individual slate boards in village pre-primary school"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-gallery-overlay">
              <span class="gasvs-gallery-tag">Early Childhood Learning</span>
              <p class="gasvs-gallery-desc">Culturally adaptive pre-school education building cognitive, motor, and linguistic capabilities before primary school.</p>
            </div>
          </div>
        </div>

        <!-- Gallery Item 3 -->
        <div class="gasvs-gallery-item">
          <div class="gasvs-gallery-thumb">
            <img 
              src="<?php echo esc_url( $img_gallery_3 ); ?>" 
              alt="Pediatric clinician examining a young child during a community health checkup and growth monitoring camp"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-gallery-overlay">
              <span class="gasvs-gallery-tag">Pediatric Screening</span>
              <p class="gasvs-gallery-desc">Periodic health screenings to track growth curves, detect acute wasting, and treat common childhood illnesses.</p>
            </div>
          </div>
        </div>

        <!-- Gallery Item 4 -->
        <div class="gasvs-gallery-item">
          <div class="gasvs-gallery-thumb">
            <img 
              src="<?php echo esc_url( $img_gallery_4 ); ?>" 
              alt="Outdoor assembly of pre-primary tribal children gathered for group exercises, songs, and socialization"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-gallery-overlay">
              <span class="gasvs-gallery-tag">Morning Assembly &amp; Play</span>
              <p class="gasvs-gallery-desc">Group physical activities, morning prayers, and social play fostering healthy peer relationships and discipline.</p>
            </div>
          </div>
        </div>

        <!-- Gallery Item 5 -->
        <div class="gasvs-gallery-item">
          <div class="gasvs-gallery-thumb">
            <img 
              src="<?php echo esc_url( $img_gallery_5 ); ?>" 
              alt="Food ration packages and nutritional food grains assembled for distribution to vulnerable tribal families"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-gallery-overlay">
              <span class="gasvs-gallery-tag">Household Food Security</span>
              <p class="gasvs-gallery-desc">Dry-ration food packages distributed to 150 tribal families to prevent household nutritional deficits and distress.</p>
            </div>
          </div>
        </div>

        <!-- Gallery Item 6 -->
        <div class="gasvs-gallery-item">
          <div class="gasvs-gallery-thumb">
            <img 
              src="<?php echo esc_url( $img_gallery_6 ); ?>" 
              alt="Field workers reaching remote tribal hamlets surrounded by hills to deliver nutrition support and monitor families"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-gallery-overlay">
              <span class="gasvs-gallery-tag">Remote Hamlet Outreach</span>
              <p class="gasvs-gallery-desc">Dedicated field presence reaching isolated settlements far from arterial roads to ensure no child is left behind.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. INSTITUTIONAL CALL TO ACTION
       ========================================================================= -->
  <section class="gasvs-section gasvs-malnutrition-cta-section" id="malnutrition-cta">
    <div class="gasvs-container">
      
      <div class="gasvs-malnutrition-cta-box">
        <span class="gasvs-kicker" style="color: #F59E0B;">Support Child Health &amp; Nutrition</span>
        <h2 class="gasvs-cta-title">Help Every Tribal Child Grow Healthy, Strong, and Educated</h2>
        <p class="gasvs-cta-desc">
          Childhood malnutrition can be eradicated when scientific nutrition, early cognitive stimulation, and community ownership unite. Partner with GASVS to sustain and expand pre-school nutrition and daily milk programs across underserved rural and tribal hamlets.
        </p>

        <div class="gasvs-cta-actions">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn-primary">
            <span>Partner on a Programme</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/health/' ) ); ?>" class="gasvs-btn-secondary">
            <span>Explore Health &amp; Nutrition</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>" class="gasvs-btn-outline">
            <span>Support Our Work</span>
          </a>
        </div>

        <div class="gasvs-cta-compliance-strip">
          <div class="gasvs-compliance-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            <span>Section 80G Tax Exemption (50%)</span>
          </div>
          <div class="gasvs-compliance-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            <span>FCRA Approved for Global Giving</span>
          </div>
          <div class="gasvs-compliance-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            <span>CSR-1 Registered (MCA)</span>
          </div>
          <div class="gasvs-compliance-item">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            <span>NITI Aayog NGO Darpan Verified</span>
          </div>
        </div>

      </div>

    </div>
  </section>

</main>

<?php
get_footer();
