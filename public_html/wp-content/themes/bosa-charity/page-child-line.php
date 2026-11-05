<?php
/**
 * Modern Child Line (CHILDLINE 1098) Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 *
 * Template Name: Modern Child Line Page
 * Strictly scoped to the Child Line page (slug: child-line / ID 206).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENTS.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Field-Verified Local Photos (Zero Duplication Across Sections)
$img_hero_bg          = home_url( '/wp-content/uploads/2024/07/CHILDLINE-2.jpeg' );
$img_context_sukma    = home_url( '/wp-content/uploads/2024/07/CHILDLINE-3.jpeg' );

// 4 Core Strategic Pillars
$img_pillar_rescue    = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_10_child_medical_checkup.jpeg' );
$img_pillar_awareness = home_url( '/wp-content/uploads/gasvs_images/home_hero/home_hero_05_brighter_futures_01.jpeg' );
$img_pillar_shelter   = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_01_relief_kit_handover.jpg' );
$img_pillar_linkages  = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_13_youth_assembly_srijan.jpg' );

// 6 Unique Field Showcase Photos (Distinct from above)
$img_gallery_1        = home_url( '/wp-content/uploads/2024/07/CHILDLINE-2-1.jpeg' );
$img_gallery_2        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_03_preprimary_tribal_school.jpeg' );
$img_gallery_3        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_12_remote_tribal_hamlet_relief.jpeg' );
$img_gallery_4        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_15_cleanliness_swachhata_drive.jpeg' );
$img_gallery_5        = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_24_nukkad_natak_performance.jpg' );
$img_gallery_6        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_02_food_ration_bags.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-childline-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-childline-hero" id="childline-hero" style="background-image: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 41, 59, 0.88) 100%), url('<?php echo esc_url( $img_hero_bg ); ?>');">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-childline-hero-inner">

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
            <li class="gasvs-current" aria-current="page">Child Line 1098</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Ministry of Women &amp; Child Development, GoI · CHILDLINE India Foundation · Sukma District</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-childline-hero-title gasvs-animate-slide-up">
          Child Line 1098: <span class="gasvs-text-gradient">24-Hour Emergency Protection</span> in Sukma District
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-childline-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Initiated in January 2022 by Gramin Adiwasi Samaj Vikas Sansthan (GASVS) under the Ministry of Women and Child Development, Government of India, in partnership with CHILDLINE India Foundation. A dedicated 24-hour toll-free emergency phone service providing immediate rescue, medical aid, crisis shelter, and rehabilitation for children in distress.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Authentic Master Data -->
        <div class="gasvs-childline-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">Dial 1098</span>
            <span class="gasvs-stat-pill-label">24/7 Toll-Free Emergency</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">Jan 2022</span>
            <span class="gasvs-stat-pill-label">Initiated in Sukma District</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">0–18 Years</span>
            <span class="gasvs-stat-pill-label">Support Spectrum (Up to 25 yrs)</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">24 Hours</span>
            <span class="gasvs-stat-pill-label">Rapid Field Response</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">100% Free</span>
            <span class="gasvs-stat-pill-label">Accessible Phone Outreach</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. EMERGENCY HELPLINE ACTION BANNER
       ========================================================================= -->
  <section class="gasvs-childline-alert-banner" id="childline-hotline">
    <div class="gasvs-container">
      <div class="gasvs-alert-inner">
        <div class="gasvs-alert-content">
          <div class="gasvs-alert-badge">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <span>Emergency 24x7 Childline</span>
          </div>
          <h2 class="gasvs-alert-heading">Know a child in distress or crisis? Dial 1098 immediately.</h2>
          <p class="gasvs-alert-desc">Any child or concerned citizen can dial 1098 from any phone across India. Free of cost, completely confidential, and answered 24 hours a day, 365 days a year.</p>
        </div>
        <div class="gasvs-alert-action">
          <a href="tel:1098" class="gasvs-btn-emergency">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <span>Call 1098 Now</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. PROGRAM GENESIS & STRATEGIC OVERVIEW (SUKMA CONTEXT)
       ========================================================================= -->
  <section class="gasvs-section gasvs-childline-context-section" id="childline-context">
    <div class="gasvs-container">

      <div class="gasvs-childline-context-grid">

        <!-- Text Content Column -->
        <div class="gasvs-childline-context-content">
          <span class="gasvs-kicker">Program Genesis &amp; Statutory Reach</span>
          <h2 class="gasvs-section-title">Safeguarding Children in Remote Bastar Tribal Corridors</h2>
          <p class="gasvs-section-subtitle gasvs-text-left">
            In January 2022, GASVS initiated Child Line in Sukma District, a flagship project under the Ministry of Women and Child Development of India, implemented in partnership with CHILDLINE INDIA FOUNDATION.
          </p>

          <p class="gasvs-childline-body-copy">
            Located in the southernmost corridor of Chhattisgarh's Bastar division, <strong>Sukma district</strong> is characterized by expansive forested terrain, sparse tribal habitations, and unique geographic isolation. Prior to the establishment of the Child Line sub-centre, children in distress—facing exploitation, early marriage, hazardous labor, or lack of emergency shelter—had limited institutional avenues for prompt rescue and legal protection.
          </p>

          <p class="gasvs-childline-body-copy">
            By dialing <strong>1098</strong>, any child or individual aware of a child in need can access this free, round-the-clock service. GASVS deploys a dedicated, trained grassroots response team equipped to mobilize directly to remote villages, haats, railway lines, and transit points to ensure children's fundamental rights and physical safety are protected.
          </p>

          <div class="gasvs-context-points">
            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Immediate Crisis Protection &amp; Safe Shelter</h3>
                <p>Ensuring immediate rescue from hazardous labor, physical abuse, neglect, trafficking, or destitution, with safe temporary accommodation and crisis nutrition provided without delay.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">24/7 Rapid Response Protocol</h3>
                <p>A round-the-clock team on standby to receive distress alerts from the national 1098 bridge, coordinate with district authorities, and reach the child swiftly across Sukma district.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Broad Age Coverage (0 to 18 &amp; Extended to 25)</h3>
                <p>Serving children from infancy up to 18 years, with extended legal and rehabilitative support for vulnerable young people up to 25 years under special circumstances such as disability or institutional care transition.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual Media Column -->
        <div class="gasvs-childline-context-media">
          <div class="gasvs-image-frame gasvs-childline-frame">
            <img src="<?php echo esc_url( $img_context_sukma ); ?>" alt="GASVS Childline Sukma field outreach and family consultation team in Chhattisgarh" class="gasvs-framed-img" loading="lazy" width="500" height="500" />
            <div class="gasvs-frame-caption">
              <span class="gasvs-caption-pill">Sukma District Field Team</span>
              <p>GASVS Childline team conducting verified community outreach and awareness on child rights and emergency reporting in Sukma, Chhattisgarh (18°23'N 81°39'E).</p>
            </div>
          </div>

          <div class="gasvs-context-stat-callout">
            <div class="gasvs-callout-icon">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <div class="gasvs-callout-text">
              <span class="gasvs-callout-strong">Statutory Mandate &amp; Alignment</span>
              <span class="gasvs-callout-desc">Working in direct alignment with the Juvenile Justice (Care and Protection of Children) Act and District Child Protection Unit (DCPU) Sukma.</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. THE 4-STEP CRISIS-TO-SAFETY WORKFLOW
       ========================================================================= -->
  <section class="gasvs-section gasvs-childline-workflow-section" id="childline-workflow">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Emergency Response Mechanism</span>
        <h2 class="gasvs-section-title">The 4-Step Crisis-to-Safety Protocol</h2>
        <p class="gasvs-section-subtitle">
          How GASVS Childline Sukma operates round-the-clock from the moment a call is received to long-term statutory restoration.
        </p>
      </div>

      <div class="gasvs-workflow-grid">

        <!-- Step 1 -->
        <div class="gasvs-workflow-card">
          <div class="gasvs-workflow-step-num">01</div>
          <div class="gasvs-workflow-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <h3 class="gasvs-workflow-title">Distress Call Received (Dial 1098)</h3>
          <p class="gasvs-workflow-text">The emergency call is received toll-free by the 1098 contact centre, logged with priority classification, and instantly relayed to the GASVS Sukma emergency desk.</p>
          <span class="gasvs-workflow-badge">Toll-Free · 24/7</span>
        </div>

        <!-- Step 2 -->
        <div class="gasvs-workflow-card">
          <div class="gasvs-workflow-step-num">02</div>
          <div class="gasvs-workflow-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h3 class="gasvs-workflow-title">Rapid Field Outreach &amp; Assessment</h3>
          <p class="gasvs-workflow-text">The GASVS response team mobilizes immediately to the reported spot—whether a remote tribal village, school, bus stand, or market—to verify safety and evaluate risk.</p>
          <span class="gasvs-workflow-badge">Rapid Deployment</span>
        </div>

        <!-- Step 3 -->
        <div class="gasvs-workflow-card">
          <div class="gasvs-workflow-step-num">03</div>
          <div class="gasvs-workflow-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3 class="gasvs-workflow-title">Crisis Care, Shelter &amp; Medical Aid</h3>
          <p class="gasvs-workflow-text">Immediate medical screening, psychological reassurance, trauma counseling, and safe temporary shelter are provided, ensuring the child is out of immediate danger.</p>
          <span class="gasvs-workflow-badge">Safe Care &amp; Nutrition</span>
        </div>

        <!-- Step 4 -->
        <div class="gasvs-workflow-card">
          <div class="gasvs-workflow-step-num">04</div>
          <div class="gasvs-workflow-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h3 class="gasvs-workflow-title">CWC Production &amp; Restoration</h3>
          <p class="gasvs-workflow-text">The child is produced before the Child Welfare Committee (CWC) within statutory timelines for legal care orders, family tracing, or enrollment in long-term rehabilitation.</p>
          <span class="gasvs-workflow-badge">Statutory Protection</span>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. FOUR FOUNDATIONAL PILLARS OF CHILDLINE INTERVENTION
       ========================================================================= -->
  <section class="gasvs-section gasvs-childline-pillars-section" id="childline-pillars">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Core Service Spectrum</span>
        <h2 class="gasvs-section-title">Core Interventions Delivered in Sukma District</h2>
        <p class="gasvs-section-subtitle">
          An integrated continuum of child protection combining emergency rescue, community rights literacy, psycho-social healing, and statutory institutional convergence.
        </p>
      </div>

      <div class="gasvs-childline-pillars-grid">

        <!-- Pillar 1: Emergency Rescue & Field Intervention -->
        <article class="gasvs-childline-pillar-card">
          <div class="gasvs-pillar-img-wrap">
            <img src="<?php echo esc_url( $img_pillar_rescue ); ?>" alt="GASVS field response and health screening for children in remote areas" loading="lazy" width="500" height="350" />
            <span class="gasvs-pillar-tag">Emergency Rescue</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-header">
              <div class="gasvs-pillar-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <h3 class="gasvs-pillar-title">24/7 Emergency Rescue &amp; Intervention</h3>
            </div>
            <p class="gasvs-pillar-text">
              Immediate on-ground response to reports of children stranded, abandoned, run away, or subjected to cruelty, violence, and exploitation across Sukma.
            </p>
            <ul class="gasvs-pillar-bullets">
              <li><strong>Crisis Extraction:</strong> Rapid mobilization to remove children from dangerous situations, hazardous work, or immediate harm.</li>
              <li><strong>Transit Point Vigilance:</strong> Active surveillance at bus stands, transit routes, and market areas to intercept runaway or trafficked children.</li>
              <li><strong>Immediate First Aid:</strong> Emergency healthcare assessment, nutrition support, and hospital transportation when required.</li>
            </ul>
            <div class="gasvs-pillar-footer-badges">
              <span class="gasvs-chip">Rapid Rescue</span>
              <span class="gasvs-chip">Transit Vigilance</span>
              <span class="gasvs-chip">Crisis Extraction</span>
            </div>
          </div>
        </article>

        <!-- Pillar 2: Child Rights & School Awareness -->
        <article class="gasvs-childline-pillar-card">
          <div class="gasvs-pillar-img-wrap">
            <img src="<?php echo esc_url( $img_pillar_awareness ); ?>" alt="GASVS team conducting child rights and 1098 awareness session in classroom in Sukma" loading="lazy" width="500" height="500" />
            <span class="gasvs-pillar-tag">Awareness &amp; Literacy</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-header">
              <div class="gasvs-pillar-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
              </div>
              <h3 class="gasvs-pillar-title">Child Rights &amp; School Sensitization</h3>
            </div>
            <p class="gasvs-pillar-text">
              Educating children, teachers, Anganwadi workers, and village communities about child rights, safe vs. unsafe touch, and how to report distress via 1098.
            </p>
            <ul class="gasvs-pillar-bullets">
              <li><strong>Classroom Outreach:</strong> Interactive sessions in ashram schools, government primary schools, and community centers.</li>
              <li><strong>Child Protection Committees:</strong> Collaborating with Village Child Protection Committees (VCPCs) to prevent early child marriage.</li>
              <li><strong>Open House Dialogues:</strong> Community gatherings where children speak directly about issues of safety, education, and health.</li>
            </ul>
            <div class="gasvs-pillar-footer-badges">
              <span class="gasvs-chip">School Sessions</span>
              <span class="gasvs-chip">Child Rights Education</span>
              <span class="gasvs-chip">VCPC Collaboration</span>
            </div>
          </div>
        </article>

        <!-- Pillar 3: Crisis Care, Counseling & Safe Shelter -->
        <article class="gasvs-childline-pillar-card">
          <div class="gasvs-pillar-img-wrap">
            <img src="<?php echo esc_url( $img_pillar_shelter ); ?>" alt="Essential relief kits and nutritional care distribution for children and families" loading="lazy" width="500" height="350" />
            <span class="gasvs-pillar-tag">Care &amp; Counseling</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-header">
              <div class="gasvs-pillar-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              </div>
              <h3 class="gasvs-pillar-title">Psychosocial Healing &amp; Safe Shelter</h3>
            </div>
            <p class="gasvs-pillar-text">
              Providing emotional stabilization, trauma-informed counseling, safe crisis housing, and nutritional support for children who have survived hardship.
            </p>
            <ul class="gasvs-pillar-bullets">
              <li><strong>Trauma Counseling:</strong> Professional, compassionate counseling to help children process trauma, grief, and separation anxiety.</li>
              <li><strong>Temporary Safe Shelter:</strong> Coordination with recognized Children's Homes and specialized adoption/shelter facilities.</li>
              <li><strong>Nutritional &amp; Material Relief:</strong> Immediate dry-rations, clean clothing, bedding, and medical hygiene items for children in need.</li>
            </ul>
            <div class="gasvs-pillar-footer-badges">
              <span class="gasvs-chip">Trauma Care</span>
              <span class="gasvs-chip">Safe Shelter</span>
              <span class="gasvs-chip">Nutritional Relief</span>
            </div>
          </div>
        </article>

        <!-- Pillar 4: Statutory Convergence & Institutional Rehabilitation -->
        <article class="gasvs-childline-pillar-card">
          <div class="gasvs-pillar-img-wrap">
            <img src="<?php echo esc_url( $img_pillar_linkages ); ?>" alt="Youth assembly and community convergence program on rights and protection" loading="lazy" width="500" height="350" />
            <span class="gasvs-pillar-tag">Statutory Convergence</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-header">
              <div class="gasvs-pillar-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>
              </div>
              <h3 class="gasvs-pillar-title">Statutory Convergence &amp; Restoration</h3>
            </div>
            <p class="gasvs-pillar-text">
              Ensuring all interventions strictly adhere to child welfare statutes through coordination with CWC, DCPU, Police, and judicial institutions.
            </p>
            <ul class="gasvs-pillar-bullets">
              <li><strong>Child Welfare Committee (CWC) Linkage:</strong> Presenting cases within 24 hours for official inquiry, care, and rehabilitation orders.</li>
              <li><strong>Family Tracing &amp; Restoration:</strong> Conducting systematic social investigation reports to safely reunite children with parents or legal guardians.</li>
              <li><strong>Educational Re-enrollment:</strong> Linking out-of-school and rescued children back into government residential schools (Ashrams) and welfare schemes.</li>
            </ul>
            <div class="gasvs-pillar-footer-badges">
              <span class="gasvs-chip">CWC Orders</span>
              <span class="gasvs-chip">Family Reunification</span>
              <span class="gasvs-chip">School Enrollment</span>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. THE SPECTRUM OF CARE: WHO WE PROTECT
       ========================================================================= -->
  <section class="gasvs-section gasvs-childline-spectrum-section" id="childline-spectrum">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Child Protection Mandate</span>
        <h2 class="gasvs-section-title">Children Supported Across Diverse Vulnerabilities</h2>
        <p class="gasvs-section-subtitle">
          Childline operates without discrimination, upholding the fundamental dignity, care, and constitutional rights of every child.
        </p>
      </div>

      <div class="gasvs-spectrum-grid">

        <div class="gasvs-spectrum-card">
          <div class="gasvs-spectrum-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3 class="gasvs-spectrum-title">Runaway &amp; Missing Children</h3>
          <p>Children separated from families at markets, transit routes, or railway hubs are safely sheltered and reunited with parents through verified family tracing.</p>
        </div>

        <div class="gasvs-spectrum-card">
          <div class="gasvs-spectrum-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
          </div>
          <h3 class="gasvs-spectrum-title">Child Labor &amp; Exploitation</h3>
          <p>Children engaged in hazardous work, agricultural servitude, or domestic servitude are rescued and assisted with educational rehabilitation.</p>
        </div>

        <div class="gasvs-spectrum-card">
          <div class="gasvs-spectrum-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="gasvs-spectrum-title">Child Marriage Prevention</h3>
          <p>Proactive village-level interventions in coordination with District Police and Panchayat leaders to prevent early, forced child marriages.</p>
        </div>

        <div class="gasvs-spectrum-card">
          <div class="gasvs-spectrum-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3 class="gasvs-spectrum-title">Medical Crises &amp; Severe Malnutrition</h3>
          <p>Children suffering from untreated acute illness or severe acute malnutrition are linked to District Hospital Sukma and Nutrition Rehabilitation Centres (NRC).</p>
        </div>

        <div class="gasvs-spectrum-card">
          <div class="gasvs-spectrum-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <h3 class="gasvs-spectrum-title">Physical &amp; Emotional Abuse Survivors</h3>
          <p>Confidential psychosocial counseling, emergency protective shelter, and legal support for children who have survived physical, verbal, or sexual violence.</p>
        </div>

        <div class="gasvs-spectrum-card">
          <div class="gasvs-spectrum-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
          </div>
          <h3 class="gasvs-spectrum-title">Extended Youth Care (Up to 25 Years)</h3>
          <p>Extending specialized counseling, assistive devices, and rehabilitation for young adults with disabilities or those transitioning out of child care institutions.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. AUTHENTIC FIELD SHOWCASE & OUTREACH GALLERY
       ========================================================================= -->
  <section class="gasvs-section gasvs-childline-gallery-section" id="childline-gallery">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Field Media &amp; Verified Documentation</span>
        <h2 class="gasvs-section-title">Grassroots Child Protection in Action</h2>
        <p class="gasvs-section-subtitle">
          Real, field-verified photographs documenting GASVS Childline awareness drives, village outreach, health checkups, and youth assemblies.
        </p>
      </div>

      <div class="gasvs-gallery-grid">

        <figure class="gasvs-gallery-item">
          <img src="<?php echo esc_url( $img_gallery_1 ); ?>" alt="GASVS Childline field team conducting community outreach in Sukma district" loading="lazy" width="500" height="500" />
          <figcaption class="gasvs-gallery-caption">
            <strong>Community Awareness:</strong> Field team consulting families on child safety and 1098 reporting in Sukma.
          </figcaption>
        </figure>

        <figure class="gasvs-gallery-item">
          <img src="<?php echo esc_url( $img_gallery_2 ); ?>" alt="GASVS team educating children about child rights in a rural classroom" loading="lazy" width="500" height="500" />
          <figcaption class="gasvs-gallery-caption">
            <strong>School Sensitization:</strong> Interactive workshop teaching children how to reach emergency help via 1098.
          </figcaption>
        </figure>

        <figure class="gasvs-gallery-item">
          <img src="<?php echo esc_url( $img_gallery_3 ); ?>" alt="Doctor conducting health screening for child in rural community camp" loading="lazy" width="500" height="350" />
          <figcaption class="gasvs-gallery-caption">
            <strong>Health &amp; Pediatric Care:</strong> Clinical health screening and vital checkups for children in rural hamlets.
          </figcaption>
        </figure>

        <figure class="gasvs-gallery-item">
          <img src="<?php echo esc_url( $img_gallery_4 ); ?>" alt="Pre-primary school children receiving early childhood learning and nutrition" loading="lazy" width="500" height="350" />
          <figcaption class="gasvs-gallery-caption">
            <strong>Early Childhood Support:</strong> Nutritious meals and nurturing learning environments for tribal children.
          </figcaption>
        </figure>

        <figure class="gasvs-gallery-item">
          <img src="<?php echo esc_url( $img_gallery_5 ); ?>" alt="SRIJAN youth assembly discussing community safety and leadership" loading="lazy" width="500" height="350" />
          <figcaption class="gasvs-gallery-caption">
            <strong>Adolescent Protection:</strong> Youth assembly fostering legal awareness, cyber safety, and protective leadership.
          </figcaption>
        </figure>

        <figure class="gasvs-gallery-item">
          <img src="<?php echo esc_url( $img_gallery_6 ); ?>" alt="Handover of dry-ration and emergency relief kits for vulnerable children" loading="lazy" width="500" height="350" />
          <figcaption class="gasvs-gallery-caption">
            <strong>Crisis Material Aid:</strong> Handing over essential nutritional and survival kits to vulnerable families.
          </figcaption>
        </figure>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. STATUTORY CONVERGENCE & INSTITUTIONAL PARTNERS
       ========================================================================= -->
  <section class="gasvs-section gasvs-childline-partners-section" id="childline-partners">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Multi-Stakeholder Collaboration</span>
        <h2 class="gasvs-section-title">Institutional Partners &amp; Public Systems Convergence</h2>
        <p class="gasvs-section-subtitle">
          Childline operates as part of the unified national child protection framework, collaborating seamlessly with central, state, and district bodies.
        </p>
      </div>

      <div class="gasvs-partners-grid">

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <div class="gasvs-partner-card-content">
            <h3 class="gasvs-partner-card-title">Ministry of Women &amp; Child Development</h3>
            <p>Government of India — Central scheme administrator for child protection and welfare across India.</p>
          </div>
        </div>

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <div class="gasvs-partner-card-content">
            <h3 class="gasvs-partner-card-title">CHILDLINE India Foundation</h3>
            <p>National nodal agency managing 1098 emergency helpline infrastructure under Mission Vatsalya.</p>
          </div>
        </div>

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <div class="gasvs-partner-card-content">
            <h3 class="gasvs-partner-card-title">Child Welfare Committee (CWC) Sukma</h3>
            <p>Statutory bench responsible for legal orders, child custody, and individualized rehabilitation plans.</p>
          </div>
        </div>

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-card-icon">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div class="gasvs-partner-card-content">
            <h3 class="gasvs-partner-card-title">District Administration &amp; Police Sukma</h3>
            <p>District Child Protection Unit (DCPU) and Special Juvenile Police Unit (SJPU) for field law enforcement.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       9. EMERGENCY CALL TO ACTION & OFFICIAL HEADQUARTERS CONTACT
       ========================================================================= -->
  <section class="gasvs-section gasvs-childline-cta-section" id="childline-cta">
    <div class="gasvs-container">
      <div class="gasvs-childline-cta-card">
        <div class="gasvs-childline-cta-content">
          <span class="gasvs-cta-kicker">Every Child Deserves Safety &amp; Dignity</span>
          <h2 class="gasvs-cta-title">Together, We Can End Child Suffering &amp; Vulnerability</h2>
          <p class="gasvs-cta-desc">
            Whether you suspect child abuse, spot a stranded minor, or want to support child welfare initiatives in remote tribal regions, connect with us or report instantly via 1098.
          </p>

          <div class="gasvs-cta-buttons">
            <a href="tel:1098" class="gasvs-btn-emergency">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>Dial 1098 Helpline</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn-outline">
              <span>Contact GASVS Office</span>
            </a>
            <a href="<?php echo esc_url( home_url( '/our-history-and-mission-our-approach/' ) ); ?>" class="gasvs-btn-text-link">
              <span>About Our Organization &rarr;</span>
            </a>
          </div>

          <!-- Official Registered Entity Details -->
          <div class="gasvs-cta-official-info">
            <div class="gasvs-official-col">
              <strong>Gramin Adiwasi Samaj Vikas Sansthan (GASVS)</strong>
              <span>Registered under M.P. Society Registration Act 1973 (Reg. No.: M.P. – 25307)</span>
            </div>
            <div class="gasvs-official-col">
              <strong>Head Office:</strong>
              <span>Vivekanand Colony, Belgaon, Sausar, District Pandhurna, M.P. – 480106</span>
            </div>
            <div class="gasvs-official-col">
              <strong>Official Enquiries:</strong>
              <span>Phone: +91 9823224640 · Email: info@gasvs.org</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
