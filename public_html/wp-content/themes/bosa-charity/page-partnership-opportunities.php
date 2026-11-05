<?php
/**
 * Modern Partnership Opportunities Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 *
 * Template Name: Modern Partnership Opportunities Page
 * Strictly scoped to the Partnership Opportunities page (slug: partnership-opportunities / ID 905).
 * Preserves all WordPress header, footer, links, backend compatibility, and contact form handling.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENTS.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Field-Verified Media from Official Project Media Archives
$img_hero_bg          = home_url( '/wp-content/uploads/gasvs_images/disability/disability_07_national_assistive_event.jpg' );
$img_dignitaries      = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_13_dignitaries_machine_presentation.jpg' );
$img_police_collab    = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_12_police_community_initiative.jpg' );
$img_training_hall    = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_04_worker_training_hall.jpg' );
$img_women_enterprise = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_07_women_packaging_enterprise.jpg' );

// Authentic Uploaded Partner Logos
$logo_rist     = home_url( '/wp-content/uploads/2024/07/logo-pic1.jpg' );
$logo_tlllf    = home_url( '/wp-content/uploads/2024/07/logo-pic2.jpg' );
$logo_indira   = home_url( '/wp-content/uploads/2024/07/logo-pic3.jpg' );
$logo_lic      = home_url( '/wp-content/uploads/2024/07/logo-pic4.jpg' );
$logo_banyan   = home_url( '/wp-content/uploads/2024/07/logo-pic5.jpg' );
$logo_partner6 = home_url( '/wp-content/uploads/2024/07/logo-pic6.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-partnership-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-partnership-hero" id="partnership-hero" style="background-image: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(17, 24, 39, 0.90) 100%), url('<?php echo esc_url( $img_hero_bg ); ?>');">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-partnership-hero-inner">

        <!-- Breadcrumb Navigation -->
        <nav class="gasvs-breadcrumb-nav" aria-label="Breadcrumb">
          <ol class="gasvs-breadcrumbs">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li><span>Get Involved</span></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">Partnership Opportunities</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Collaborative Grassroots Impact · Working Alongside Communities Since 1991</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-partnership-hero-title gasvs-animate-slide-up">
          Partnership Opportunities &amp; <span class="gasvs-text-gradient">Strategic Alliances</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-partnership-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Collaborating with Government Departments, CSR Foundations, International Philanthropies, and Technical Institutions to scale evidence-informed solutions across mental health, disability inclusion, rural livelihoods, and social justice.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Authentic Master Data -->
        <div class="gasvs-partnership-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">37+</span>
            <span class="gasvs-stat-pill-label">Years of Grassroots Trust</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">17.5 Lakh+</span>
            <span class="gasvs-stat-pill-label">Population Reached via Public Systems</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">4,200+</span>
            <span class="gasvs-stat-pill-label">Villages Reached</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">12A &amp; 80G</span>
            <span class="gasvs-stat-pill-label">FCRA &amp; CSR-1 Certified</span>
          </div>
        </div>

        <!-- Hero Actions -->
        <div class="gasvs-partnership-hero-actions gasvs-animate-slide-up gasvs-delay-3">
          <a href="#partner-models" class="gasvs-btn gasvs-btn-primary">
            <span>Explore Partnership Models</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 13l5 5 5-5M7 6l5 5 5-5"/></svg>
          </a>
          <a href="#partner-inquiry" class="gasvs-btn gasvs-btn-outline-light">
            <span>Initiate Collaboration</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. OUR PARTNERSHIP PHILOSOPHY & INSTITUTIONAL CAPABILITIES
       ========================================================================= -->
  <section class="gasvs-section gasvs-partnership-principles-section" id="principles">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Why Partner With Us</span>
        <h2 class="gasvs-section-title">Rooted in Communities, Committed to Systemic Change</h2>
        <p class="gasvs-section-subtitle">
          Lasting transformation is built with communities, not simply delivered to them. GASVS bridges grassroots realities with institutional capabilities to co-create sustainable, scalable outcomes.
        </p>
      </div>

      <div class="gasvs-partnership-principles-grid">

        <!-- Principle Card 1 -->
        <div class="gasvs-principle-card">
          <div class="gasvs-principle-icon-circle">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="gasvs-principle-title">Deep Community Grounding</h3>
          <p class="gasvs-principle-desc">
            With continuous field presence since 1991 across Sausar, Pandhurna, Chhindwara, Betul, Nagpur, and Wardha, GASVS commands deep community trust and strong relationships with tribal families, gram panchayats, and frontline workers.
          </p>
        </div>

        <!-- Principle Card 2 -->
        <div class="gasvs-principle-card">
          <div class="gasvs-principle-icon-circle">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 2l9 8H3l9-8z"/></svg>
          </div>
          <h3 class="gasvs-principle-title">Public System Strengthening</h3>
          <p class="gasvs-principle-desc">
            Rather than establishing redundant parallel networks, our initiatives integrate into Primary Health Centres, District Hospitals, Government Medical Colleges, Social Welfare departments, and local law enforcement mechanisms.
          </p>
        </div>

        <!-- Principle Card 3 -->
        <div class="gasvs-principle-card">
          <div class="gasvs-principle-icon-circle">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="gasvs-principle-title">Fiduciary Integrity &amp; Compliance</h3>
          <p class="gasvs-principle-desc">
            Operating under rigorous non-profit governance standards, GASVS maintains active registrations under 12A, 80G, FCRA (MHA), CSR-1 (MCA), and NITI Aayog NGO Darpan, guaranteeing total financial transparency and accountability.
          </p>
        </div>

        <!-- Principle Card 4 -->
        <div class="gasvs-principle-card">
          <div class="gasvs-principle-icon-circle">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
          </div>
          <h3 class="gasvs-principle-title">Evidence-Informed Outcomes</h3>
          <p class="gasvs-principle-desc">
            Interventions are measured against rigorous programmatic milestones, tracking tangible improvements in human dignity, psychiatric stabilization, livelihood earnings, and barrier-free civic participation.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. FOUR PARTNERSHIP MODELS & ENGAGEMENT STREAMS
       ========================================================================= -->
  <section class="gasvs-section gasvs-partnership-models-section" id="partner-models">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Collaboration Streams</span>
        <h2 class="gasvs-section-title">Strategic Engagement Models</h2>
        <p class="gasvs-section-subtitle">
          We welcome collaboration across structured avenues designed to align corporate CSR mandates, philanthropic strategies, and institutional expertise with high-need tribal communities.
        </p>
      </div>

      <div class="gasvs-models-grid">

        <!-- Model 1: CSR Partnerships -->
        <article class="gasvs-model-card">
          <div class="gasvs-model-badge">Schedule VII Compliant</div>
          <div class="gasvs-model-icon-box">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          </div>
          <h3 class="gasvs-model-title">Corporate Social Responsibility (CSR)</h3>
          <p class="gasvs-model-desc">
            Collaborating with leading corporates and PSUs to deliver high-impact, legally compliant CSR projects under Section 135 of the Companies Act, 2013.
          </p>
          <ul class="gasvs-model-list">
            <li><strong>Thematic Focus:</strong> Community mental healthcare, disability rehabilitation, rural mother-child nutrition, tribal livelihoods, clean solar energy, and women entrepreneurship.</li>
            <li><strong>Governance &amp; Reporting:</strong> Timely utilization certificates (UCs), audited project accounts, third-party impact assessment support, and dedicated project management.</li>
            <li><strong>Registrations:</strong> Verified MCA CSR-1 Registration, 80G Tax Exemption (50% deduction), and valid 12A certification.</li>
          </ul>
          <div class="gasvs-model-footer">
            <a href="#partner-inquiry" class="gasvs-btn-text">
              <span>Discuss a CSR Partnership</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Model 2: Government & Public System Strengthening -->
        <article class="gasvs-model-card">
          <div class="gasvs-model-badge">Public Sector Alliances</div>
          <div class="gasvs-model-icon-box">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 2l9 8H3l9-8z"/></svg>
          </div>
          <h3 class="gasvs-model-title">Government &amp; Public Health Systems</h3>
          <p class="gasvs-model-desc">
            Operating as an experienced field implementation partner for district administrations, health missions, and social justice departments.
          </p>
          <ul class="gasvs-model-list">
            <li><strong>Key Collaborations:</strong> District Mental Health Programme (DMHP) across Pandhurna, Chhindwara, Betul, Nagpur, and Wardha; National Health Mission (NHM Maharashtra).</li>
            <li><strong>Institutional Facilities:</strong> District Disability Rehabilitation Centre (DDRC) operation with the Ministry of Social Justice &amp; Empowerment; Mental Health Resource Center (MHRC).</li>
            <li><strong>Community Safety:</strong> SRIJAN Youth Leadership Initiative in partnership with the Pandhurna District Police under MP Police Community Policing.</li>
          </ul>
          <div class="gasvs-model-footer">
            <a href="#partner-inquiry" class="gasvs-btn-text">
              <span>Partner on Public Programs</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Model 3: Strategic Philanthropy & Multi-Year Grants -->
        <article class="gasvs-model-card">
          <div class="gasvs-model-badge">Philanthropic Innovation</div>
          <div class="gasvs-model-icon-box">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <h3 class="gasvs-model-title">Philanthropic Foundations &amp; Trusts</h3>
          <p class="gasvs-model-desc">
            Partnering with national and global grant-making institutions to incubate, refine, and scale pathbreaking community care models.
          </p>
          <ul class="gasvs-model-list">
            <li><strong>Flagship Models:</strong> The <em>Home Again</em> initiative in Indore (transitioning women from institutional psychiatric facilities to dignified community living homes).</li>
            <li><strong>Grassroots Networks:</strong> Community-Based Rehabilitation (CBR) and BDPOs, NALAM mental health worker cadres, and Pashu Sakhi livestock healthcare networks.</li>
            <li><strong>Global Compliance:</strong> Fully authorized and experienced in FCRA compliance for international philanthropic endowments and multi-year grants.</li>
          </ul>
          <div class="gasvs-model-footer">
            <a href="#partner-inquiry" class="gasvs-btn-text">
              <span>Explore Strategic Granting</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

        <!-- Model 4: Technical & Academic Collaborations -->
        <article class="gasvs-model-card">
          <div class="gasvs-model-badge">Knowledge &amp; Capacity</div>
          <div class="gasvs-model-icon-box">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          </div>
          <h3 class="gasvs-model-title">Technical &amp; Academic Alliances</h3>
          <p class="gasvs-model-desc">
            Teaming with specialized NGOs, universities, and technical consortia to introduce cutting-edge methodologies and evidence-based field toolkits.
          </p>
          <ul class="gasvs-model-list">
            <li><strong>Clinical &amp; Psychiatric Expertise:</strong> Technical knowledge partnerships with The Banyan (Chennai) and Regional Mental Hospital (Nagpur) for psychiatric rehabilitation.</li>
            <li><strong>Skill Toolkits:</strong> Partnerships with Bindi International (Solar Engineer residential training) and The Goat Trust (veterinary Pashu Sakhi training modules).</li>
            <li><strong>Human Rights &amp; Child Protection:</strong> Collaboration with Kailash Satyarthi Children's Foundation on the Access to Justice Project preventing child marriage.</li>
          </ul>
          <div class="gasvs-model-footer">
            <a href="#partner-inquiry" class="gasvs-btn-text">
              <span>Connect on Technical Support</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. AUTHENTIC PARTNER LOGOS SHOWCASE
       ========================================================================= -->
  <section class="gasvs-section gasvs-partnership-logos-section" id="partner-logos">
    <div class="gasvs-container">

      <div class="gasvs-text-center gasvs-mb-30">
        <span class="gasvs-kicker">Collaborative Action</span>
        <h3 class="gasvs-sub-heading">Our Trusted Partners &amp; Institutional Supporters</h3>
        <p class="gasvs-partner-intro-note">
          GASVS is privileged to work alongside esteemed institutional partners, public health authorities, and foundations united in our vision for an equitable and inclusive society.
        </p>
      </div>

      <div class="gasvs-partners-grid">
        <div class="gasvs-partner-box" title="Rural India Supporting Trust (RIST)">
          <img src="<?php echo esc_url( $logo_rist ); ?>" alt="Rural India Supporting Trust (RIST)" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="The Live Love Laugh Foundation (TLLLF)">
          <img src="<?php echo esc_url( $logo_tlllf ); ?>" alt="The Live Love Laugh Foundation" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="Indira Foundation">
          <img src="<?php echo esc_url( $logo_indira ); ?>" alt="Indira Foundation" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="Life Insurance Corporation of India (LIC)">
          <img src="<?php echo esc_url( $logo_lic ); ?>" alt="Life Insurance Corporation of India (LIC)" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="The Banyan, Chennai">
          <img src="<?php echo esc_url( $logo_banyan ); ?>" alt="The Banyan" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
        <div class="gasvs-partner-box" title="Strategic Partner Organization">
          <img src="<?php echo esc_url( $logo_partner6 ); ?>" alt="Strategic Institutional Partner" class="no-lazyload skip-lazy" data-skip-lazy="1" />
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. EXTENDED VERIFIED PARTNER DIRECTORY (Categorized Roster)
       ========================================================================= -->
  <section class="gasvs-section gasvs-partner-directory-section" id="partner-directory">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Institutional Directory</span>
        <h2 class="gasvs-section-title">Verified Institutional Partner Network</h2>
        <p class="gasvs-section-subtitle">
          In strict compliance with our institutional governance and AGENTS.md data authenticity policy, the following organizations comprise our verified partner network across states and thematic initiatives.
        </p>
      </div>

      <div class="gasvs-partner-directory-grid">

        <!-- Category 1: Government & Public Health -->
        <div class="gasvs-directory-category-card">
          <div class="gasvs-category-header">
            <div class="gasvs-category-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 2l9 8H3l9-8z"/></svg>
            </div>
            <h3 class="gasvs-category-name">Government &amp; Public Systems</h3>
          </div>
          <ul class="gasvs-directory-list">
            <li>
              <strong>District Health Department, Madhya Pradesh</strong>
              <span>Public health delivery, screening camps, and community mental health coordination in Pandhurna and Chhindwara.</span>
            </li>
            <li>
              <strong>Public Health Department &amp; NHM, Maharashtra</strong>
              <span>District Mental Health Programme (DMHP) implementation across Nagpur and Wardha districts.</span>
            </li>
            <li>
              <strong>Government Medical College (GMC), Chhindwara</strong>
              <span>Tertiary medical referrals, specialist psychiatric consultations, and clinical coordination.</span>
            </li>
            <li>
              <strong>Regional Mental Hospital, Nagpur</strong>
              <span>Referral pathways, clinical mentorship, and specialized inpatient-to-community transition care.</span>
            </li>
            <li>
              <strong>Pandhurna District Police (MP Police)</strong>
              <span>Community policing and adolescent empowerment under the SRIJAN Youth Initiative.</span>
            </li>
            <li>
              <strong>Ministry of Social Justice &amp; Empowerment, GoI</strong>
              <span>Implementation partner for District Disability Rehabilitation Centre (DDRC).</span>
            </li>
          </ul>
        </div>

        <!-- Category 2: CSR & Foundations -->
        <div class="gasvs-directory-category-card">
          <div class="gasvs-category-header">
            <div class="gasvs-category-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            </div>
            <h3 class="gasvs-category-name">CSR &amp; Philanthropic Foundations</h3>
          </div>
          <ul class="gasvs-directory-list">
            <li>
              <strong>The Live Love Laugh Foundation (TLLLF)</strong>
              <span>Strategic foundation support for grassroots mental health awareness, counselling, and community stigma reduction.</span>
            </li>
            <li>
              <strong>Gulshan Care Foundation</strong>
              <span>Supporting healthcare access and social welfare interventions for vulnerable rural populations.</span>
            </li>
            <li>
              <strong>Life Insurance Corporation of India (LIC)</strong>
              <span>CSR partnership supporting community health camps and socio-economic empowerment.</span>
            </li>
            <li>
              <strong>Rural India Supporting Trust (RIST)</strong>
              <span>Long-term philanthropic partnership supporting integrated community development and inclusion.</span>
            </li>
            <li>
              <strong>Indira Foundation</strong>
              <span>Philanthropic support championing education, health access, and social justice.</span>
            </li>
            <li>
              <strong>Jiv Daya Foundation (JDF)</strong>
              <span>Support for palliative and healthcare access in underserved rural belts.</span>
            </li>
          </ul>
        </div>

        <!-- Category 3: Technical & NGO Partners -->
        <div class="gasvs-directory-category-card">
          <div class="gasvs-category-header">
            <div class="gasvs-category-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            </div>
            <h3 class="gasvs-category-name">Technical &amp; NGO Collaborators</h3>
          </div>
          <ul class="gasvs-directory-list">
            <li>
              <strong>The Banyan (Chennai)</strong>
              <span>Technical pioneer and institutional mentor for the <em>Home Again</em> community mental health living model.</span>
            </li>
            <li>
              <strong>Kailash Satyarthi Children's Foundation</strong>
              <span>Program partner for the Access to Justice Project combating child marriage and exploitation.</span>
            </li>
            <li>
              <strong>Bindi International</strong>
              <span>Technical capacity-building partner for rural women solar engineers in Junnardeo Block.</span>
            </li>
            <li>
              <strong>The Goat Trust</strong>
              <span>Livestock technical guidance and capacity-building curriculum for the Pashu Sakhi initiative.</span>
            </li>
            <li>
              <strong>Madhya Pradesh Voluntary Health Association (MPVHA)</strong>
              <span>Statewide network partner for community health advocacy and policy engagement.</span>
            </li>
            <li>
              <strong>NIWCYD (Nagpur) &amp; CORD Organisation</strong>
              <span>Joint grassroots program implementation and the Vanbhoj community conservation initiative.</span>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. AUTHENTIC COLLABORATIVE IMPACT GALLERY
       ========================================================================= -->
  <section class="gasvs-section gasvs-partnership-gallery-section" id="partner-impact">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Field Highlights</span>
        <h2 class="gasvs-section-title">Partnership in Action Across the Grassroots</h2>
        <p class="gasvs-section-subtitle">
          Real, verifiable photographs of official delegations, public police assemblies, worker training halls, and women-led enterprise clusters.
        </p>
      </div>

      <div class="gasvs-partnership-gallery-grid">

        <!-- Photo 1: Dignitaries Machine Presentation -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_dignitaries ); ?>" 
              alt="Dignitaries and partner representatives during assistive equipment handover" 
              class="gasvs-gallery-img"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Institutional Presentation</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">Institutional Equipment Handover</h4>
            <p class="gasvs-gallery-desc">Senior government dignitaries and CSR representatives reviewing community assistive and livelihood technology distributions.</p>
          </div>
        </div>

        <!-- Photo 2: Police Partnership -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_police_collab ); ?>" 
              alt="Pandhurna District Police and GASVS Community Youth Initiative" 
              class="gasvs-gallery-img"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Community Policing</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">SRIJAN Youth &amp; Police Partnership</h4>
            <p class="gasvs-gallery-desc">Collaborative adolescent leadership, safety training, and cyber awareness conducted with the Pandhurna District Police.</p>
          </div>
        </div>

        <!-- Photo 3: Worker Training Hall -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_training_hall ); ?>" 
              alt="Frontline healthcare worker training hall supported by institutional partners" 
              class="gasvs-gallery-img"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Capacity Building</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">Stakeholder &amp; Worker Training</h4>
            <p class="gasvs-gallery-desc">Equipping 6,543+ frontline workers and ASHA cadres with community mental health screening and rehabilitation competencies.</p>
          </div>
        </div>

        <!-- Photo 4: Women Packaging Enterprise -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-media">
            <img 
              src="<?php echo esc_url( $img_women_enterprise ); ?>" 
              alt="Women SHG members in leaf plate dona-pattal packaging enterprise supported by CSR" 
              class="gasvs-gallery-img"
              loading="lazy"
            />
            <span class="gasvs-gallery-tag">Livelihoods &amp; CSR</span>
          </div>
          <div class="gasvs-gallery-info">
            <h4 class="gasvs-gallery-title">Women-Led Enterprise Clusters</h4>
            <p class="gasvs-gallery-desc">CSR-supported Dona-Pattal eco-plate manufacturing and non-timber forest produce packaging, providing direct income to tribal women.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. STATUTORY CREDENTIALS & COMPLIANCE BADGE STRIP
       ========================================================================= -->
  <section class="gasvs-section gasvs-compliance-strip-section" id="compliance">
    <div class="gasvs-container">

      <div class="gasvs-compliance-card">
        <div class="gasvs-compliance-grid">

          <div class="gasvs-compliance-item">
            <div class="gasvs-comp-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            </div>
            <div>
              <strong>Society Registration</strong>
              <p>M.P. – 25307 (M.P. Societies Act 1973)</p>
            </div>
          </div>

          <div class="gasvs-compliance-item">
            <div class="gasvs-comp-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><line x1="7" y1="8" x2="17" y2="8"/><line x1="7" y1="12" x2="17" y2="12"/><line x1="7" y1="16" x2="13" y2="16"/></svg>
            </div>
            <div>
              <strong>Tax Identification (PAN)</strong>
              <p>AAATG5607K</p>
            </div>
          </div>

          <div class="gasvs-compliance-item">
            <div class="gasvs-comp-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <div>
              <strong>Income Tax 12A &amp; 80G</strong>
              <p>50% Tax Exemption for Donors</p>
            </div>
          </div>

          <div class="gasvs-compliance-item">
            <div class="gasvs-comp-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
            <div>
              <strong>FCRA Registration</strong>
              <p>Authorized for International Grants</p>
            </div>
          </div>

          <div class="gasvs-compliance-item">
            <div class="gasvs-comp-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>
            <div>
              <strong>MCA CSR-1 &amp; NITI Aayog</strong>
              <p>Reg. CSR-1 &amp; NGO Darpan Active</p>
            </div>
          </div>

        </div>

        <div class="gasvs-compliance-transparency-note">
          <p>
            <strong>Transparency Notice:</strong> Official audited balance sheets, utilization certificates, and compliance records are maintained at our registered office and provided to donors, institutional partners, and CSR boards upon formal request.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. INTERACTIVE PARTNERSHIP INQUIRY & CONTACT FORM
       ========================================================================= -->
  <section id="partner-inquiry" class="gasvs-section gasvs-partnership-inquiry-section">
    <div class="gasvs-container">
      <div class="gasvs-contact-card">
        <div class="gasvs-contact-grid">

          <!-- Left Column: Strategic Outreach Information -->
          <div class="gasvs-contact-info-col">
            <span class="gasvs-kicker gasvs-kicker-amber">Collaborate With GASVS</span>
            <h2 class="gasvs-contact-title">Start a Partnership Dialogue</h2>
            <p class="gasvs-contact-lead">
              We welcome exploratory conversations with institutional grantmakers, CSR committees, health leaders, and development professionals seeking to co-create sustainable solutions in underserved central India.
            </p>

            <div class="gasvs-workflow-steps">
              <h4 class="gasvs-workflow-title">Partnership Pathway</h4>
              
              <div class="gasvs-workflow-step">
                <span class="gasvs-step-num">1</span>
                <div>
                  <strong>Initial Dialogue &amp; Needs Assessment</strong>
                  <p>Exploring alignment with your institutional priorities and community realities.</p>
                </div>
              </div>

              <div class="gasvs-workflow-step">
                <span class="gasvs-step-num">2</span>
                <div>
                  <strong>Field Scoping &amp; Proposal Co-Design</strong>
                  <p>Developing actionable project frameworks, verifiable indicators, and budget plans.</p>
                </div>
              </div>

              <div class="gasvs-workflow-step">
                <span class="gasvs-step-num">3</span>
                <div>
                  <strong>MoU &amp; Structured Implementation</strong>
                  <p>Formalizing partnership agreements, milestone schedules, and reporting cadences.</p>
                </div>
              </div>

              <div class="gasvs-workflow-step">
                <span class="gasvs-step-num">4</span>
                <div>
                  <strong>Impact Tracking &amp; Governance</strong>
                  <p>Continuous monitoring, joint field reviews, and verified audited utilization.</p>
                </div>
              </div>
            </div>

            <!-- Direct Coordinates -->
            <div class="gasvs-contact-methods">
              <div class="gasvs-method-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span><strong>Head Office:</strong> Vivekanand Colony, Belgaon, Sausar, Dist. Pandhurna, Madhya Pradesh – 480106</span>
              </div>
              <div class="gasvs-method-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:+919823224640">+91 9823224640 (Executive Office)</a>
              </div>
              <div class="gasvs-method-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:info@gasvs.org">info@gasvs.org</a>
              </div>
            </div>

          </div>

          <!-- Right Column: Interactive Partnership Form (100% Functional CF7) -->
          <div class="gasvs-contact-form-col">
            <div class="gasvs-form-wrapper">
              <h3 class="gasvs-form-heading">Submit a Partnership Inquiry</h3>
              <p class="gasvs-form-sub">Share your organization's interests and our partnership team will connect promptly.</p>
              
              <?php
              // Render Contact Form 7 while preserving 100% functional submission
              $post_905 = get_post( 905 );
              if ( $post_905 && has_shortcode( $post_905->post_content, 'contact-form-7' ) ) {
                preg_match( '/\[contact-form-7[^\]]+\]/', $post_905->post_content, $cf7_match );
                echo do_shortcode( $cf7_match[0] );
              } else {
                echo do_shortcode( '[contact-form-7 id="402643f" title="campaign-contact_copy"]' );
              }
              ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
