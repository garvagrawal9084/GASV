<?php
/**
 * Modern C19 Relief Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern C19 Relief Page
 * Strictly scoped to the C19 page (slug: c19 / ID 858).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENTS.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Verified Field Photos (Zero Duplication Across Sections)
$img_hero_bg          = home_url( '/wp-content/uploads/2024/07/C-19-5-1.jpg' );
$img_context_handover = home_url( '/wp-content/uploads/2024/07/C-19-5.jpg' );

// 4 Strategic Pillars Photos
$img_pillar_medicine  = home_url( '/wp-content/uploads/2024/07/C-19-7.jpg' );
$img_pillar_food      = home_url( '/wp-content/uploads/2024/07/C-19-4.jpg' );
$img_pillar_tele      = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_01_relief_kit_handover.jpg' );
$img_pillar_mobility  = home_url( '/wp-content/uploads/2024/07/C-19-6.jpg' );

// NITI Aayog Campaigns Photos
$img_niti_dada        = home_url( '/wp-content/uploads/2024/07/Surakshit-Dada-1.jpg' );
$img_niti_tum_hum     = home_url( '/wp-content/uploads/2024/07/Surakshit-Dada-2.jpg' );

// Gallery Showcase Photos (Distinct Authentic Assets)
$img_gal_doorstep     = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_02_food_ration_bags.jpg' );
$img_gal_packages     = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_11_patient_field_care.jpg' );
$img_gal_camp         = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_12_remote_tribal_hamlet_relief.jpeg' );
$img_gal_protection   = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_15_cleanliness_swachhata_drive.jpeg' );
$img_gal_senior       = home_url( '/wp-content/uploads/2024/06/C1.png' );
$img_gal_caregiver    = home_url( '/wp-content/uploads/2024/06/C.png' );
?>

<main id="gasvs-main-content" class="gasvs-c19-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-c19-hero" id="c19-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-c19-hero-inner">

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
            <li class="gasvs-current" aria-current="page">COVID-19 Relief (Project UTTHAN)</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · COVID-19 Emergency Relief &amp; Resilience</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-c19-hero-title gasvs-animate-slide-up">
          C19 Relief Through Project &#8216;UTTHAN&#8217;: <span class="gasvs-text-gradient">Protecting Vulnerable Communities</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-c19-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Mobilizing emergency healthcare, psychiatric medicine continuity, food security, and proactive telephonic counselling across Sausar, Pandhurna, and Sukma for individuals living with mental illness, persons with disabilities, senior citizens, and marginalized families during the COVID-19 pandemic.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Authentic Master Data -->
        <div class="gasvs-c19-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">133</span>
            <span class="gasvs-stat-pill-label">PLwMI Provided Psychiatric Medicines</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">2,660</span>
            <span class="gasvs-stat-pill-label">Food Ration Kits Distributed</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">10,000</span>
            <span class="gasvs-stat-pill-label">Senior Citizens Reached</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">7,750</span>
            <span class="gasvs-stat-pill-label">Senior Citizens Benefited</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">100+</span>
            <span class="gasvs-stat-pill-label">Frontline Volunteers Mobilized</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">64</span>
            <span class="gasvs-stat-pill-label">Travel Concession Passes Provided</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. PROGRAM CONTEXT & GRASSROOTS NEED
       ========================================================================= -->
  <section class="gasvs-section gasvs-c19-context-section" id="c19-context">
    <div class="gasvs-container">

      <div class="gasvs-c19-context-grid">

        <!-- Text Content Column -->
        <div class="gasvs-c19-context-content">
          <span class="gasvs-kicker">Crisis Response &amp; Overview</span>
          <h2 class="gasvs-section-title">Rapid Humanitarian Response for the Most Vulnerable in Lockdown</h2>
          <p class="gasvs-section-subtitle text-left">
            Addressing the severe medical, nutritional, and psychological distress inflicted by COVID-19 on marginalized rural and tribal households.
          </p>

          <p class="gasvs-c19-body-copy">
            The COVID-19 pandemic has had a profound impact on the most vulnerable populations, pushing many deeper into poverty and ill-health. Recognizing this urgent humanitarian need, Gramin Adiwasi Samaj Vikas Sansthan (GASVS) launched <strong>Project &#8216;UTTHAN&#8217;</strong> to provide critical relief and support to those most affected, especially individuals living with mental illness (PLwMI) and persons with disabilities (PwDs).
          </p>

          <p class="gasvs-c19-body-copy">
            Operating across Sausar, Pandhurna, and Sukma districts, our teams partnered with village-level Disabled People's Organizations (DPOs), local community volunteers, and caregiver groups to deliver uninterrupted psychiatric care, dry-ration security, proactive psychological first-aid, and protective equipment directly to remote doorsteps.
          </p>

          <div class="gasvs-context-points">
            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Critical Psychiatric Care &amp; Medicine Continuity</h3>
                <p>Ensuring that 133 individuals living with mental illness in Sausar block received regular doctor-prescribed psychiatric medications and medical consultations without lockdown disruption.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Grassroots Food Security &amp; Essential Ration Supply</h3>
                <p>Distributing 2,660 comprehensive food ration packages across Sausar, Pandhurna, and Sukma in collaboration with national relief partners to prevent malnutrition and distress.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Teleconsultations, Grief Counselling &amp; Helpline</h3>
                <p>Operating a dedicated mental health helpline and proactive calling system to deliver anxiety management tools, bereavement support, and COVID-19 prevention protocols.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Media Visual Column -->
        <div class="gasvs-c19-context-media">
          <div class="gasvs-media-card-wrapper">
            <div class="gasvs-media-frame">
              <img 
                src="<?php echo esc_url( $img_context_handover ); ?>" 
                alt="GASVS field team and local community leaders distributing food and medical relief kits to vulnerable family members under Project UTTHAN"
                class="gasvs-img-fluid no-lazyload skip-lazy"
                data-skip-lazy="1"
                loading="eager"
              />
              <div class="gasvs-media-badge-tag">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                <span>Project UTTHAN · Emergency Humanitarian Action</span>
              </div>
            </div>

            <div class="gasvs-context-stat-card">
              <div class="gasvs-context-stat-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
              </div>
              <div class="gasvs-context-stat-info">
                <div class="gasvs-context-stat-value">Zero-Cost Doorstep Relief</div>
                <div class="gasvs-context-stat-desc">Serving Sausar, Pandhurna &amp; Sukma districts throughout lockdown</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. CORE INTERVENTION PILLARS: FOUR KEY FACETS OF PROJECT UTTHAN
       ========================================================================= -->
  <section class="gasvs-section gasvs-c19-pillars-section" id="c19-pillars">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Intervention Architecture</span>
        <h2 class="gasvs-section-title">Four Pillars of Project &#8216;UTTHAN&#8217;</h2>
        <p class="gasvs-section-subtitle">
          A multi-sectoral emergency framework safeguarding medical health, daily sustenance, emotional well-being, and mobility for marginalized populations.
        </p>
      </div>

      <div class="gasvs-c19-pillars-grid">

        <!-- Pillar 1: Medical & Psychiatric Support -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_medicine ); ?>" 
              alt="Emergency medical and food relief packages being prepared and distributed for persons with psychosocial disabilities"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 01 · Healthcare</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-partner-tag">Supported by Paul Hamlyn Foundation (PHF)</div>
            <h3 class="gasvs-pillar-title">Emergency Medical &amp; Psychiatric Continuity</h3>
            <p class="gasvs-pillar-desc">
              With the financial support of the <strong>Paul Hamlyn Foundation (PHF)</strong>, GASVS provided immediate medical assistance and psychiatric medication supplies to 133 persons living with mental illness in the Sausar block, preventing acute relapse and clinical deterioration during lockdown.
            </p>
            <div class="gasvs-pillar-highlights">
              <span>✓ 133 PLwMI provided critical psychiatric medicines</span>
              <span>✓ Regular doctor tele-consultations and monitoring</span>
              <span>✓ Continuous home adherence checkups by field staff</span>
            </div>
          </div>
        </article>

        <!-- Pillar 2: Food Security & Ration Kits -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_food ); ?>" 
              alt="Distribution of 2660 food ration kits in Sausar and Pandhurna with village DPO volunteers"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 02 · Food Security</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-partner-tag">GOONJ · Reliance · MISEREOR · JDF</div>
            <h3 class="gasvs-pillar-title">Food Security &amp; Essential Ration Distribution</h3>
            <p class="gasvs-pillar-desc">
              Collaborating with <strong>GOONJ, Reliance Foundation, MISEREOR, and JIVDAYA Foundation</strong>, we distributed 2,660 food kits through the coordinated efforts of local volunteers, village-level Disabled People's Organizations (DPOs), and caregiver groups in Sausar, Pandhurna, and Sukma.
            </p>
            <div class="gasvs-pillar-highlights">
              <span>✓ 2,660 comprehensive family ration packages delivered</span>
              <span>✓ Coordinated through local DPOs &amp; caregiver networks</span>
              <span>✓ Doorstep delivery to elderly and mobility-impaired persons</span>
            </div>
          </div>
        </article>

        <!-- Pillar 3: Teleconsultations & Grief Counseling -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_tele ); ?>" 
              alt="GASVS frontline worker providing compassionate relief handover and psychosocial support"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 03 · Tele-Health</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-partner-tag">Community Mental Health Helpline</div>
            <h3 class="gasvs-pillar-title">Teleconsultations, Grief &amp; Loss Counselling</h3>
            <p class="gasvs-pillar-desc">
              In the Pandhurna block, Project 'UTTHAN' facilitated online counselling sessions via proactive outreach calls and operated an active mental health helpline. Frontline staff provided specialized counselling on bereavement, loss, and grief, while equipping families with self-help techniques to manage panic and anxiety.
            </p>
            <div class="gasvs-pillar-highlights">
              <span>✓ Proactive outreach calls to vulnerable households</span>
              <span>✓ Bereavement, panic &amp; acute anxiety support</span>
              <span>✓ Distribution of PPE and essential nutrition kits</span>
            </div>
          </div>
        </article>

        <!-- Pillar 4: Mobility & Safety Protocol -->
        <article class="gasvs-pillar-card">
          <div class="gasvs-pillar-media">
            <img 
              src="<?php echo esc_url( $img_pillar_mobility ); ?>" 
              alt="Beneficiary receiving emergency relief package, protective masks and welfare entitlement assistance"
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-pillar-badge">Pillar 04 · Mobility &amp; Rights</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-partner-tag">Concession Passes &amp; Public Awareness</div>
            <h3 class="gasvs-pillar-title">Concessional Mobility Passes &amp; Safety Protocols</h3>
            <p class="gasvs-pillar-desc">
              To alleviate mobility barriers, GASVS facilitated official bus passes offering a 50% travel concession to 64 PLwMI/PwDs, restoring their ability to access hospitals and essential services. Simultaneously, broad educational drives and social media campaigns promoted mask usage, hand hygiene, and physical distancing.
            </p>
            <div class="gasvs-pillar-highlights">
              <span>✓ 64 official 50% concession bus passes facilitated</span>
              <span>✓ Multi-channel awareness on COVID-19 prevention</span>
              <span>✓ Direct distribution of face masks and protective gear</span>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. NITI AAYOG COLLABORATIVE CAMPAIGNS IN SUKMA DISTRICT
       ========================================================================= -->
  <section class="gasvs-section gasvs-c19-niti-section" id="c19-niti-aayog">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Government &amp; Aspirational Districts Collaboration</span>
        <h2 class="gasvs-section-title">Collaborative COVID-19 Campaigns with NITI Aayog</h2>
        <p class="gasvs-section-subtitle">
          Partnering with NITI Aayog, district administration, and social welfare departments to protect senior citizens and manage home-care in Chhattisgarh's Sukma district.
        </p>
      </div>

      <div class="gasvs-c19-niti-grid">

        <!-- Campaign 1: Surakshit Dada-Dadi; Nana-Nani Abhiyan -->
        <div class="gasvs-c19-niti-card">
          <div class="gasvs-c19-niti-media">
            <img 
              src="<?php echo esc_url( $img_niti_dada ); ?>" 
              alt="GASVS volunteer conducting doorstep checkup and delivering essential assistance to a senior citizen under Surakshit Dada-Dadi Abhiyan" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-niti-tag">NITI Aayog · Senior Citizen Protection</div>
          </div>
          <div class="gasvs-c19-niti-content">
            <h3 class="gasvs-niti-title">Surakshit Dada-Dadi; Nana-Nani Abhiyan</h3>
            <div class="gasvs-niti-partner">In collaboration with Social Welfare Department &amp; District Administration, Sukma District</div>
            <p class="gasvs-niti-desc">
              Launched by <strong>NITI Aayog</strong>, this campaign focused on the holistic health and social protection of senior citizens during the COVID-19 pandemic. In Sukma district, GASVS mobilized over 100 dedicated grassroots volunteers who proactively contacted approximately 10,000 senior citizens.
            </p>
            <p class="gasvs-niti-desc">
              Volunteers provided essential COVID-19 preventive education, delivered vital medicines and dry ration packages directly to homes, and resolved longstanding ration card grievances—directly benefiting <strong>7,750 senior citizens</strong>.
            </p>
            <div class="gasvs-niti-stats-row">
              <div class="gasvs-niti-stat-badge">
                <strong>10,000</strong>
                <span>Senior Citizens Reached</span>
              </div>
              <div class="gasvs-niti-stat-badge">
                <strong>7,750</strong>
                <span>Senior Citizens Benefited</span>
              </div>
              <div class="gasvs-niti-stat-badge">
                <strong>100+</strong>
                <span>Volunteers Mobilized</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Campaign 2: Surakshit Tum – Surakshit Hum -->
        <div class="gasvs-c19-niti-card">
          <div class="gasvs-c19-niti-media">
            <img 
              src="<?php echo esc_url( $img_niti_tum_hum ); ?>" 
              alt="GASVS trained volunteer monitoring vitals and educating family caregivers during home quarantine under Surakshit Tum Surakshit Hum" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <div class="gasvs-niti-tag">NITI Aayog · Home-Care Management</div>
          </div>
          <div class="gasvs-c19-niti-content">
            <h3 class="gasvs-niti-title">Surakshit Tum &#8211; Surakshit Hum</h3>
            <div class="gasvs-niti-partner">In partnership with Local Leaders &amp; District Administration (Aspirational Districts)</div>
            <p class="gasvs-niti-desc">
              In response to the pandemic, NITI Aayog's <strong>&#8216;Surakshit Tum; Surakshit Hum&#8217;</strong> campaign supported dedicated home-care for asymptomatic and mildly symptomatic COVID-19 patients across 112 Aspirational Districts.
            </p>
            <p class="gasvs-niti-desc">
              GASVS partnered with local community leaders and district administration to train <strong>100 frontline volunteers</strong> in Chhattisgarh. Volunteers provided compassionate home-care support, educated family caretakers on strict infection control protocols, delivered psychosocial counselling, and updated district authorities with real-time patient status reports.
            </p>
            <div class="gasvs-niti-stats-row">
              <div class="gasvs-niti-stat-badge">
                <strong>100</strong>
                <span>Volunteers Trained</span>
              </div>
              <div class="gasvs-niti-stat-badge">
                <strong>112</strong>
                <span>Aspirational Districts Model</span>
              </div>
              <div class="gasvs-niti-stat-badge">
                <strong>Doorstep</strong>
                <span>Quarantine Support &amp; Monitoring</span>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. VERIFIED RELIEF IMPACT BY THE NUMBERS
       ========================================================================= -->
  <section class="gasvs-section gasvs-c19-impact-section" id="c19-impact">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Verified Metrics</span>
        <h2 class="gasvs-section-title">Measurable Humanitarian Impact</h2>
        <p class="gasvs-section-subtitle">
          Every number verified from organizational activity reports and institutional audits across Madhya Pradesh and Chhattisgarh.
        </p>
      </div>

      <div class="gasvs-c19-impact-grid">
        <div class="gasvs-c19-impact-card">
          <div class="gasvs-impact-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <div class="gasvs-c19-impact-num">133</div>
          <div class="gasvs-c19-impact-title">PLwMI Medical Aid</div>
          <div class="gasvs-c19-impact-desc">Persons living with mental illness provided essential psychiatric medicines and clinical follow-ups in Sausar block.</div>
        </div>

        <div class="gasvs-c19-impact-card">
          <div class="gasvs-impact-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </div>
          <div class="gasvs-c19-impact-num">2,660</div>
          <div class="gasvs-c19-impact-title">Food Kits Delivered</div>
          <div class="gasvs-c19-impact-desc">High-nutrition dry-ration packages distributed across Sausar, Pandhurna, and Sukma in partnership with GOONJ, Reliance, MISEREOR, and JDF.</div>
        </div>

        <div class="gasvs-c19-impact-card">
          <div class="gasvs-impact-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <div class="gasvs-c19-impact-num">10,000</div>
          <div class="gasvs-c19-impact-title">Elderly Citizens Contacted</div>
          <div class="gasvs-c19-impact-desc">Senior citizens reached across Sukma district through NITI Aayog's Surakshit Dada-Dadi; Nana-Nani Abhiyan.</div>
        </div>

        <div class="gasvs-c19-impact-card">
          <div class="gasvs-impact-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          </div>
          <div class="gasvs-c19-impact-num">7,750</div>
          <div class="gasvs-c19-impact-title">Senior Citizens Benefited</div>
          <div class="gasvs-c19-impact-desc">Provided essential medicines, ration support, and ration card grievance resolution in remote tribal hamlets.</div>
        </div>

        <div class="gasvs-c19-impact-card">
          <div class="gasvs-impact-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
          </div>
          <div class="gasvs-c19-impact-num">100+</div>
          <div class="gasvs-c19-impact-title">Trained Volunteers</div>
          <div class="gasvs-c19-impact-desc">Mobilized for home-care assistance, caregiver orientation, health monitoring, and administrative reporting.</div>
        </div>

        <div class="gasvs-c19-impact-card">
          <div class="gasvs-impact-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
          </div>
          <div class="gasvs-c19-impact-num">64</div>
          <div class="gasvs-c19-impact-title">Concessional Bus Passes</div>
          <div class="gasvs-c19-impact-desc">Provided 50% travel concession passes to PLwMI and PwDs to secure essential mobility and hospital access.</div>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. RELIEF PARTNERS & INSTITUTIONAL NETWORK
       ========================================================================= -->
  <section class="gasvs-section gasvs-c19-partners-section" id="c19-partners">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Relief Collaborations</span>
        <h2 class="gasvs-section-title">Institutional Relief Partners</h2>
        <p class="gasvs-section-subtitle">
          GASVS is profoundly grateful to the philanthropic foundations, national civil society organizations, and government bodies that made this emergency response possible.
        </p>
      </div>

      <div class="gasvs-c19-partners-grid">

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-logo-tag">Paul Hamlyn Foundation</div>
          <div class="gasvs-partner-name">Paul Hamlyn Foundation (PHF)</div>
          <p class="gasvs-partner-role">Financial &amp; Medical Support for 133 PLwMI in Sausar Block</p>
        </div>

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-logo-tag">NITI Aayog</div>
          <div class="gasvs-partner-name">NITI Aayog (Govt. of India)</div>
          <p class="gasvs-partner-role">Surakshit Dada-Dadi &amp; Surakshit Tum-Hum Partner in Sukma District</p>
        </div>

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-logo-tag">GOONJ</div>
          <div class="gasvs-partner-name">GOONJ, New Delhi</div>
          <p class="gasvs-partner-role">Emergency Family Food Kits &amp; Essential Relief Materials</p>
        </div>

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-logo-tag">Reliance Foundation</div>
          <div class="gasvs-partner-name">Reliance Foundation</div>
          <p class="gasvs-partner-role">Humanitarian Dry Rations &amp; Community Nutrition Support</p>
        </div>

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-logo-tag">MISEREOR</div>
          <div class="gasvs-partner-name">MISEREOR</div>
          <p class="gasvs-partner-role">International Solidarity &amp; Emergency Subsistence Packages</p>
        </div>

        <div class="gasvs-partner-badge-card">
          <div class="gasvs-partner-logo-tag">Jiv Daya Foundation</div>
          <div class="gasvs-partner-name">Jiv Daya Foundation (JDF)</div>
          <p class="gasvs-partner-role">Disability and Psychosocial Healthcare Emergency Assistance</p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. AUTHENTIC FIELD GALLERY
       ========================================================================= -->
  <section class="gasvs-section gasvs-c19-gallery-section" id="c19-gallery">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Field Documentation</span>
        <h2 class="gasvs-section-title">Authentic Grassroots Relief in Action</h2>
        <p class="gasvs-section-subtitle">
          Real photographic records of emergency relief, senior citizen home care, ration distributions, and caregiver training across rural Madhya Pradesh and Chhattisgarh.
        </p>
      </div>

      <div class="gasvs-c19-gallery-grid">

        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_gal_doorstep ); ?>" 
              alt="GASVS team handing over emergency ration kit to rural tribal family under Project UTTHAN" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Project UTTHAN · Doorstep Care</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">Doorstep Food &amp; Medical Relief</h4>
            <p class="gasvs-gallery-meta">Sausar Block · Supporting Vulnerable Households</p>
          </div>
        </div>

        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_gal_packages ); ?>" 
              alt="Family food ration kit distribution to village beneficiaries in Sausar" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Food Security</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">Dry-Ration Package Assembly</h4>
            <p class="gasvs-gallery-meta">Coordinated via Village DPO Collective</p>
          </div>
        </div>

        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_gal_camp ); ?>" 
              alt="Community distribution camp coordinated with Disabled People's Organizations" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Relief Camp</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">DPO Relief Distribution Gathering</h4>
            <p class="gasvs-gallery-meta">Pandhurna &amp; Sausar Blocks · Collaborative Relief</p>
          </div>
        </div>

        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_gal_protection ); ?>" 
              alt="Vulnerable beneficiary receiving relief package and safety awareness briefing" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Safety Protocols</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">Nutrition &amp; PPE Handover</h4>
            <p class="gasvs-gallery-meta">Infection Control Guidance &amp; Mobility Support</p>
          </div>
        </div>

        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_gal_senior ); ?>" 
              alt="Volunteer visiting elderly citizen at home under NITI Aayog Surakshit Dada-Dadi Abhiyan" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">NITI Aayog · Sukma</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">Surakshit Dada-Dadi Home Visit</h4>
            <p class="gasvs-gallery-meta">Doorstep Ration, Medicine &amp; Ration Card Resolution</p>
          </div>
        </div>

        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_gal_caregiver ); ?>" 
              alt="Volunteer instructing family caregiver on patient vitals and safety in home quarantine" 
              class="no-lazyload skip-lazy"
              data-skip-lazy="1"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Home Quarantine Care</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">Surakshit Tum – Surakshit Hum</h4>
            <p class="gasvs-gallery-meta">100 Volunteers Trained for Frontline Home Care</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. INSTITUTIONAL CALL TO ACTION
       ========================================================================= -->
  <section class="gasvs-section gasvs-c19-cta-section" id="c19-cta">
    <div class="gasvs-container">
      <div class="gasvs-c19-cta-box">
        <span class="gasvs-badge-pill">
          <span class="gasvs-badge-dot"></span>
          <span>Resilience Beyond Crisis</span>
        </span>
        <h2 class="gasvs-cta-title">From Emergency Relief to Long-Term Community Inclusion</h2>
        <p class="gasvs-cta-desc">
          The grassroots partnerships, caregiver circles, and village DPO networks strengthened during COVID-19 relief continue to drive our core ongoing initiatives in community mental health, disability inclusion, and sustainable livelihoods.
        </p>
        <div class="gasvs-cta-actions">
          <a href="<?php echo esc_url( home_url( '/community-mental-health-and-inclusion-program/' ) ); ?>" class="gasvs-btn-primary">
            Explore Mental Health Programs
          </a>
          <a href="<?php echo esc_url( home_url( '/pwd-welfare-program/' ) ); ?>" class="gasvs-btn-secondary">
            Explore Disability Inclusion
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn-outline">
            Partner with GASVS
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
