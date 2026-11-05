<?php
/**
 * Modern Health & Nutrition Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern Health & Nutrition Page
 * Strictly scoped to the Health page (slug: health / ID 173).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy in AGENT.md.
 *
 * @package Bosa Charity
 */

get_header();

// Verified authentic local uploads for background and imagery
$img_hero_bg        = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_16_mobile_health_unit.jpg' );
$img_camp_eye       = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_09_health_camp_eye_doctor.jpg' );
$img_child_checkup  = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_10_child_medical_checkup.jpeg' );
$img_food_rations   = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_02_food_ration_bags.jpg' );
$img_patient_care   = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_11_patient_field_care.jpg' );
$img_relief_handover= home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_01_relief_kit_handover.jpg' );
$img_tribal_hamlet  = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_12_remote_tribal_hamlet_relief.jpeg' );
$img_clinic_reg     = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_11_clinic_registration.jpeg' );
$img_cta_bg         = home_url( '/wp-content/uploads/2024/07/WhatsApp-Image-2024-07-30-at-12.43.10-PM.jpeg' );
?>

<main id="gasvs-main-content" class="gasvs-health-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-health-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-health-hero-inner">
        
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
            <li class="gasvs-current" aria-current="page">Health &amp; Nutrition</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Preventive Healthcare &amp; Nutrition</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-health-hero-title gasvs-animate-slide-up">
          Health &amp; Nutrition: <span class="gasvs-text-gradient">Preventive Care &amp; Child Well-being</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-health-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Improving healthcare access and nutritional security across underserved rural and tribal communities through mobile diagnostic camps, doctor consultations, early childhood nutrition, and public health convergence.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Master Data -->
        <div class="gasvs-health-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">10</span>
            <span class="gasvs-stat-pill-label">Multi-Specialty Health Camps</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">1,250+</span>
            <span class="gasvs-stat-pill-label">Rural Villagers Screened</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">5</span>
            <span class="gasvs-stat-pill-label">Pre-Primary Tribal Schools</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">125</span>
            <span class="gasvs-stat-pill-label">Children Receiving Daily Milk</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">150</span>
            <span class="gasvs-stat-pill-label">Families on Dry-Ration Support</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. CONTEXT & THE NEED: RURAL HEALTHCARE REALITY
       ========================================================================= -->
  <section class="gasvs-section gasvs-health-context-section" id="healthcare-context">
    <div class="gasvs-container">
      
      <div class="gasvs-health-context-grid">
        
        <!-- Text Content Column -->
        <div class="gasvs-health-context-content">
          <span class="gasvs-kicker">The Community Need</span>
          <h2 class="gasvs-section-title">Bridging the Healthcare Divide in Remote Tribal Corridors</h2>
          <p class="gasvs-section-subtitle text-left">
            Across the Satpura range and forest pockets of Sausar, Pandhurna, and Junnardeo, remote tribal families face stark geographic, economic, and systemic barriers in accessing timely medical care.
          </p>

          <div class="gasvs-context-points">
            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Last-Mile Accessibility Barriers</h3>
                <p>Severe geographical isolation and absence of local diagnostic facilities often force families to travel up to 50 km to reach basic secondary medical care, leading to neglected chronic conditions.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Silent Chronic Lifestyle &amp; Age-Related Ailments</h3>
                <p>Unmanaged hypertension, diabetes, cataract, refractive eye errors, and chronic joint ailments severely hinder daily tribal agricultural and manual livelihoods when left untreated.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Early Childhood Nutritional Fragility</h3>
                <p>Pre-school children in remote hamlets require sustained macronutrient and micronutrient intake to prevent stunting, wasting, and immune vulnerability during formative development years.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual Media Card Column -->
        <div class="gasvs-health-context-media">
          <div class="gasvs-media-card-wrapper">
            <div class="gasvs-media-frame">
              <img 
                src="<?php echo esc_url( $img_patient_care ); ?>" 
                alt="GASVS Community Doctor and Healthcare Worker Providing Field Consultation"
                class="gasvs-img-fluid no-lazyload skip-lazy"
                data-skip-lazy="1"
              />
              <div class="gasvs-media-badge-tag">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                <span>Direct Field Healthcare</span>
              </div>
            </div>

            <div class="gasvs-context-stat-card">
              <div class="gasvs-context-stat-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
              <div class="gasvs-context-stat-info">
                <div class="gasvs-context-stat-value">5 Focus Regions</div>
                <div class="gasvs-context-stat-desc">Sausar · Pandhurna · Nagpur · Indore · Junnardeo</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. CORE PROGRAMMES & STRATEGIC INTERVENTIONS
       ========================================================================= -->
  <section class="gasvs-section gasvs-health-programs-section" id="core-programmes">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Intervention Model</span>
        <h2 class="gasvs-section-title">Integrated Health &amp; Nutrition Programmes</h2>
        <p class="gasvs-section-subtitle">
          Combining grassroots mobilisation, specialized diagnostic camps, supplemental pre-school feeding, and formal public healthcare system convergence.
        </p>
      </div>

      <div class="gasvs-programs-grid">
        
        <!-- Program 1: General Multi-Specialty Health Camps -->
        <article class="gasvs-health-card">
          <div class="gasvs-health-card-img-wrap">
            <img 
              src="<?php echo esc_url( $img_camp_eye ); ?>" 
              alt="General Health Camp with Eye Screening and Doctor Consultations"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-emerald">Health Camps</span>
          </div>
          <div class="gasvs-health-card-body">
            <div class="gasvs-card-meta-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>10 Camps · 1,250+ Reached</span>
            </div>
            <h3 class="gasvs-health-card-title">General Medical &amp; Diagnostic Camps</h3>
            <p class="gasvs-health-card-desc">
              Organised across Sausar, Pandhurna, Nagpur, Indore, and Junnardeo to bridge rural communities with formal healthcare. Includes doctor checkups, diabetes and hypertension screening, ophthalmic exams, and free medicine dispensation.
            </p>
            <ul class="gasvs-card-feature-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>General medical consultations &amp; clinical diagnosis</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Diabetes, hypertension &amp; refractive eye screening</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Free essential medicines &amp; specialized hospital referral</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Program 2: Pre-Primary School & Nutrition Programme (JDF) -->
        <article class="gasvs-health-card">
          <div class="gasvs-health-card-img-wrap">
            <img 
              src="<?php echo esc_url( $img_child_checkup ); ?>" 
              alt="Pre-Primary Tribal Child Health Assessment and Growth Monitoring"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-amber">Partner: Jiv Daya Foundation</span>
          </div>
          <div class="gasvs-health-card-body">
            <div class="gasvs-card-meta-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>5 Tribal Villages · 125 Children</span>
            </div>
            <h3 class="gasvs-health-card-title">Pre-Primary Child Nutrition &amp; School Readiness</h3>
            <p class="gasvs-health-card-desc">
              Supported by the Jiv Daya Foundation (JDF), this programme integrates early childhood education, daily nutritional nourishment, hygienic habits, and physical health tracking across five tribal villages.
            </p>
            <ul class="gasvs-card-feature-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>5 community-based pre-primary centres established</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>125 enrolled children receive daily milk &amp; biscuits</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Foundational learning materials &amp; school readiness</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Program 3: Household Food Security & Dry-Ration Distribution -->
        <article class="gasvs-health-card">
          <div class="gasvs-health-card-img-wrap">
            <img 
              src="<?php echo esc_url( $img_food_rations ); ?>" 
              alt="Dry Ration Bags for Tribal Families to Ensure Household Nutritional Security"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-blue">Household Food Security</span>
          </div>
          <div class="gasvs-health-card-body">
            <div class="gasvs-card-meta-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>150 Vulnerable Tribal Families</span>
            </div>
            <h3 class="gasvs-health-card-title">Nutritional Safety Nets &amp; Dry Ration Support</h3>
            <p class="gasvs-health-card-desc">
              Protecting tribal households during seasonal distress, monsoons, and economic hardship by providing essential staple rations, pulses, edible oils, and balanced nutrition kits to prevent family-level undernutrition.
            </p>
            <ul class="gasvs-card-feature-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>150 marginalized tribal families receive dry-ration kits</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Staple grains, pulses, and protein-rich diet security</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Sustained support for households with infants &amp; seniors</span>
              </li>
            </ul>
          </div>
        </article>

        <!-- Program 4: Integrated Referrals & Public Health Convergence -->
        <article class="gasvs-health-card">
          <div class="gasvs-health-card-img-wrap">
            <img 
              src="<?php echo esc_url( $img_clinic_reg ); ?>" 
              alt="Health Camp Registration Desk and Clinical Linkages"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
            <span class="gasvs-card-badge gasvs-badge-purple">Health Convergence</span>
          </div>
          <div class="gasvs-health-card-body">
            <div class="gasvs-card-meta-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>Institutional Referrals</span>
            </div>
            <h3 class="gasvs-health-card-title">Clinical Referral &amp; System Integration</h3>
            <p class="gasvs-health-card-desc">
              Converging community camps with state and central health machinery. Patients diagnosed with critical eye conditions, diabetes complications, or psychosocial needs are systematically navigated into formal tertiary care.
            </p>
            <ul class="gasvs-card-feature-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Secondary &amp; tertiary hospital care escorting</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Cross-referral with GASVS Mental Health pathways</span>
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Linkage with GMC Chhindwara &amp; RMH Nagpur</span>
              </li>
            </ul>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. CLINICAL SERVICES & DIAGNOSTIC MATRIX
       ========================================================================= -->
  <section class="gasvs-section gasvs-health-matrix-section" id="services-matrix">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Clinical Scope</span>
        <h2 class="gasvs-section-title">Diagnostic Screening &amp; Healthcare Spectrum</h2>
        <p class="gasvs-section-subtitle">
          Structured diagnostic assessments and medical interventions delivered at zero cost directly inside tribal and village settlements.
        </p>
      </div>

      <div class="gasvs-services-matrix-grid">
        
        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3"/><path d="M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4"/><circle cx="20" cy="10" r="2"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">General Medical Examination</h3>
          <p class="gasvs-service-box-desc">Comprehensive physician evaluations, chest auscultation, vital signs tracking, fever management, and primary treatment for infections.</p>
          <div class="gasvs-service-tag">100% Free Consultation</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Hypertension &amp; Blood Pressure</h3>
          <p class="gasvs-service-box-desc">Early detection of cardiovascular risks and chronic hypertension using digital sphygmomanometers, accompanied by dietary lifestyle counseling.</p>
          <div class="gasvs-service-tag">Diagnostic Screening</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Blood Glucose &amp; Diabetes Testing</h3>
          <p class="gasvs-service-box-desc">Random blood sugar (RBS) spot diagnostics to unmask undetected rural diabetes, with medication management and dietary advice.</p>
          <div class="gasvs-service-tag">Spot Diagnostic</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Ophthalmic &amp; Eye Screening</h3>
          <p class="gasvs-service-box-desc">Visual acuity testing, cataract identification, corneal evaluation, and refractive error detection with prescription linkage and surgery referral.</p>
          <div class="gasvs-service-tag">Eye Care Linkage</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Free Essential Medicines</h3>
          <p class="gasvs-service-box-desc">On-site dispensation of prescribed antibiotics, analgesics, antihistamines, iron-folic acid, multivitamins, and ointments.</p>
          <div class="gasvs-service-tag">On-Site Pharmacy</div>
        </div>

        <div class="gasvs-service-box">
          <div class="gasvs-service-box-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="gasvs-service-box-title">Maternal &amp; Child Nutrition Guidance</h3>
          <p class="gasvs-service-box-desc">Community counseling on lactation, infant weaning, dietary diversity, hygiene practices, and tracking immunization records.</p>
          <div class="gasvs-service-tag">Preventive Counseling</div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. AUTHENTIC PHOTOGRAPHIC FIELD SHOWCASE (100% FACTUAL FIELD ASSETS)
       ========================================================================= -->
  <section class="gasvs-section gasvs-health-gallery-section" id="field-showcase">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Field Evidence</span>
        <h2 class="gasvs-section-title">Authentic Healthcare &amp; Nutrition in Action</h2>
        <p class="gasvs-section-subtitle">
          Photographic documentation of our mobile medical camps, pediatric checkups, nutritional feedings, and tribal village outreach.
        </p>
      </div>

      <div class="gasvs-gallery-grid">
        
        <!-- Photo 1: Eye Screening Camp -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_camp_eye ); ?>" 
              alt="Ophthalmic examination and eye doctor consultation at GASVS rural medical camp"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Diagnostic Camp</span>
            <p>Ophthalmic diagnostic screening and eye doctor examination at rural health camp.</p>
          </figcaption>
        </figure>

        <!-- Photo 2: Child Pediatric Checkup -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_child_checkup ); ?>" 
              alt="Pediatric screening and child growth assessment conducted by healthcare professionals"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Pediatric Assessment</span>
            <p>Pediatric checkup and child growth monitoring under rural health intervention.</p>
          </figcaption>
        </figure>

        <!-- Photo 3: Elder and Patient Care -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_patient_care ); ?>" 
              alt="Healthcare provider providing doorstep medical consultation for an elder in village"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Elder Care</span>
            <p>Doorstep doctor consultation and geriatric healthcare assessment in rural village.</p>
          </figcaption>
        </figure>

        <!-- Photo 4: Dry Ration Bags Distribution -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_food_rations ); ?>" 
              alt="Nutritional food ration bags prepared for distribution to 150 marginalized families"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Food Security</span>
            <p>Dry-ration food packs ensuring household food and nutritional security for 150 families.</p>
          </figcaption>
        </figure>

        <!-- Photo 5: Relief Kit Handover -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_relief_handover ); ?>" 
              alt="Handover of nutritional relief kit to tribal family members"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Nutritional Relief</span>
            <p>Handover of essential nutrition and health relief packs to tribal beneficiaries.</p>
          </figcaption>
        </figure>

        <!-- Photo 6: Remote Tribal Outreach -->
        <figure class="gasvs-gallery-card">
          <div class="gasvs-gallery-img-wrap">
            <img 
              src="<?php echo esc_url( $img_tribal_hamlet ); ?>" 
              alt="Mobile health team reaching remote tribal hamlet in forest terrain"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
            />
          </div>
          <figcaption class="gasvs-gallery-caption">
            <span class="gasvs-gallery-tag">Tribal Outreach</span>
            <p>Mobile outreach reaching remote forest settlements in Sausar and Junnardeo.</p>
          </figcaption>
        </figure>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. INSTITUTIONAL HEALTH PARTNERS & ACCREDITATIONS
       ========================================================================= -->
  <section class="gasvs-section gasvs-health-partners-section" id="health-partners">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Collaborations</span>
        <h2 class="gasvs-section-title">Institutional Health &amp; Nutrition Partners</h2>
        <p class="gasvs-section-subtitle">
          Working hand-in-hand with statutory health departments, medical colleges, and philanthropic foundations.
        </p>
      </div>

      <div class="gasvs-health-partners-grid">
        
        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Philanthropic Partner</div>
          <h3 class="gasvs-partner-title">Jiv Daya Foundation (JDF)</h3>
          <p class="gasvs-partner-desc">Supporting the Pre-Primary School &amp; Nutrition Programme across 5 tribal villages, providing daily milk, nutritious biscuits, and dry-ration support for 150 families.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Government Partner</div>
          <h3 class="gasvs-partner-title">District Health Department, Madhya Pradesh</h3>
          <p class="gasvs-partner-desc">Collaborating on grassroots rural health camps, immunization surveillance, ASHA frontline worker training, and primary health centre convergence.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Government Partner</div>
          <h3 class="gasvs-partner-title">Public Health Department &amp; NHM, Maharashtra</h3>
          <p class="gasvs-partner-desc">Partnering under the National Health Mission for clinical referrals, mobile health access, and integrated public mental and general health interventions.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Tertiary Care Partner</div>
          <h3 class="gasvs-partner-title">Government Medical College (GMC), Chhindwara</h3>
          <p class="gasvs-partner-desc">Facilitating secondary and tertiary medical referrals, specialized surgeries, and diagnostic consultations for marginalized tribal patients.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Specialized Care Partner</div>
          <h3 class="gasvs-partner-title">Regional Mental Hospital, Nagpur</h3>
          <p class="gasvs-partner-desc">Convergence on psychosomatic screening, inpatient psychiatric linkages, and holistic community health rehabilitation models.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-pill">Technical NGO Partner</div>
          <h3 class="gasvs-partner-title">MP Voluntary Health Association (MPVHA)</h3>
          <p class="gasvs-partner-desc">Capacity building, public healthcare advocacy, and statewide health education network strengthening for grassroots NGOs.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. CALL TO ACTION: HOW TO GET INVOLVED
       ========================================================================= -->
  <section class="gasvs-health-cta-section" id="get-involved">
    <div class="gasvs-container">
      
      <div class="gasvs-health-cta-box">
        <div class="gasvs-health-cta-glow"></div>
        <div class="gasvs-health-cta-inner text-center">
          
          <span class="gasvs-badge-pill gasvs-badge-white">
            <span class="gasvs-badge-dot"></span>
            <span>Support Community Healthcare</span>
          </span>

          <h2 class="gasvs-health-cta-heading">
            Partner With Us to Expand <span class="gasvs-text-gradient">Tribal Health &amp; Child Nutrition</span>
          </h2>

          <p class="gasvs-health-cta-lead">
            Whether sponsoring a multi-specialty medical camp in an unreached forest hamlet or underwriting daily milk and nutrition for tribal pre-school children, your collaboration creates immediate life-saving impact.
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
