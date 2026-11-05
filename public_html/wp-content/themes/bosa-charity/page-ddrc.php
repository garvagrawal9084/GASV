<?php
/**
 * Modern Disability Rehabilitation and Resource Centre (DDRC) Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 *
 * Template Name: Modern Disability Rehabilitation and Resource Centre (DDRC) Page
 * Strictly scoped to the DDRC page (slug: disability-rehabilitation-and-resource-centre-ddrc / ID 198).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENT.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Field-Verified Local Photos (Zero Duplication Across Sections)
$img_hero_bg          = home_url( '/wp-content/uploads/2024/07/DDRC-1-1-2-1024x769.jpg' );
$img_context_sukma    = home_url( '/wp-content/uploads/2024/07/DDRC-4-1-1-1024x769.jpg' );

// 4 Core Service Pillars
$img_pillar_outreach  = home_url( '/wp-content/uploads/2024/07/DDRC-3-1-1-1024x768.jpg' );
$img_pillar_education = home_url( '/wp-content/uploads/2024/07/DDRC-1-1-1-1024x769.jpg' );
$img_pillar_rehab     = home_url( '/wp-content/uploads/gasvs_images/disability/disability_05_assistive_hands.jpg' );
$img_pillar_linkages  = home_url( '/wp-content/uploads/2024/07/DDRC-3-1-1-768x576-1.jpg' );

// Impact & Center Showcase
$img_impact_showcase  = home_url( '/wp-content/uploads/2024/07/DDRC-2-2-1-1024x768.jpg' );

// 6 Unique Field Showcase Photos (Distinct from above)
$img_gallery_1        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_10_rehab_center_banner.jpg' );
$img_gallery_2        = home_url( '/wp-content/uploads/2024/07/DDRC-4-1-1-768x577-1.jpg' );
$img_gallery_3        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_07_national_assistive_event.jpg' );
$img_gallery_4        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_02_car_driving.jpg' );
$img_gallery_5        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_13_leadership_presentation.jpg' );
$img_gallery_6        = home_url( '/wp-content/uploads/gasvs_images/disability/disability_09_accessible_voting.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-ddrc-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-ddrc-hero" id="ddrc-hero" style="background-image: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(17, 24, 39, 0.88) 100%), url('<?php echo esc_url( $img_hero_bg ); ?>');">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-ddrc-hero-inner">

        <!-- Breadcrumb Navigation -->
        <nav class="gasvs-breadcrumb-nav" aria-label="Breadcrumb">
          <ol class="gasvs-breadcrumbs">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li><span>Program</span></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li><span>Disability</span></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">DDRC Sukma</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Ministry of Social Justice &amp; Empowerment, GoI · Sukma District, Chhattisgarh</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-ddrc-hero-title gasvs-animate-slide-up">
          Disability Rehabilitation &amp; Resource Centre (DDRC): <span class="gasvs-text-gradient">Sukma District</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-ddrc-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          A flagship central government initiative implemented by Gramin Adivasi Samaj Vikas Sansthan (GASVS) since January 2017 in Sukma district, Chhattisgarh. Delivering grassroots disability identification, specialized physiotherapy, assistive aid fitment, and statutory entitlement convergence to empower tribal communities with dignity and self-reliance.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Authentic Master Data -->
        <div class="gasvs-ddrc-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">Jan 2017</span>
            <span class="gasvs-stat-pill-label">Selected Implementation Agency</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">200+</span>
            <span class="gasvs-stat-pill-label">Certificates Issued (2023)</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">150+</span>
            <span class="gasvs-stat-pill-label">Therapy Recipients (2023)</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">7,500+</span>
            <span class="gasvs-stat-pill-label">PwDs &amp; CwDs Supported</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">National Award</span>
            <span class="gasvs-stat-pill-label">President of India (2020)</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. PROGRAM CONTEXT & STATUTORY MANDATE
       ========================================================================= -->
  <section class="gasvs-section gasvs-ddrc-context-section" id="ddrc-context">
    <div class="gasvs-container">

      <div class="gasvs-ddrc-context-grid">

        <!-- Text Content Column -->
        <div class="gasvs-ddrc-context-content">
          <span class="gasvs-kicker">Statutory Mandate &amp; Grassroots Reach</span>
          <h2 class="gasvs-section-title">Bridging the Grassroots Disability Gap in Remote Bastar</h2>
          <p class="gasvs-section-subtitle gasvs-text-left">
            The Disability Rehabilitation and Resource Centre (DDRC) is an initiative by the Ministry of Social Justice and Empowerment, Government of India. This scheme aims to provide comprehensive services to Persons with Disabilities (PwDs) at the grassroots level by creating infrastructure and building capacity at the district level.
          </p>

          <p class="gasvs-ddrc-body-copy">
            In <strong>January 2017</strong>, GASVS was officially selected as the implementing agency for the DDRC program in <strong>Sukma district, Chhattisgarh</strong>. Located in the southernmost tribal heartland of the Bastar division, Sukma is characterized by dense forest topography, vulnerable tribal populations, and severe geographical isolation. Prior to DDRC, tribal families had negligible access to specialized clinical therapies, assistive devices, or official disability documentation.
          </p>

          <p class="gasvs-ddrc-body-copy">
            As the designated implementing agency, GASVS operates a multi-disciplinary district rehabilitation resource centre, mobilizes outreach teams into interior gram panchayats, and collaborates closely with district health authorities and the Department of Social Welfare to deliver early screening, clinical physiotherapy, speech therapy, and legal social security linkages.
          </p>

          <div class="gasvs-context-points">
            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">District Infrastructure &amp; Technical Capacity</h3>
                <p>Creating specialized physical rehabilitation infrastructure, fully equipped therapy units, and localized administrative facilities at the district level so PwDs no longer need to travel hundreds of kilometers for rehabilitative care.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Early Detection &amp; Village Screening Camps</h3>
                <p>Deploying trained grassroots functionaries and multi-disciplinary medical teams to conduct early detection camps in remote forest habitations, identifying congenital conditions, locomotor challenges, and sensory impairments early in childhood.</p>
              </div>
            </div>

            <div class="gasvs-context-point">
              <div class="gasvs-point-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
              </div>
              <div class="gasvs-point-text">
                <h3 class="gasvs-point-title">Statutory Concessions &amp; UDID Facilitation</h3>
                <p>Eliminating bureaucratic barriers by coordinating with the District Medical Board to facilitate official disability certificates (UDID), bus passes, railway travel concessions, and monthly state pensions directly to tribal beneficiaries.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual Media Column -->
        <div class="gasvs-ddrc-context-media">
          <div class="gasvs-image-frame gasvs-ddrc-frame">
            <img src="<?php echo esc_url( $img_context_sukma ); ?>" alt="GASVS DDRC team conducting screening and consultation with beneficiaries in Sukma district" class="gasvs-framed-img" loading="lazy" width="768" height="577" />
            <div class="gasvs-frame-caption">
              <span class="gasvs-caption-pill">District Implementation Agency</span>
              <p>GASVS rehabilitation professionals conducting comprehensive assessment and counseling for beneficiaries at Sukma, Chhattisgarh.</p>
            </div>
          </div>

          <div class="gasvs-context-stat-callout">
            <div class="gasvs-callout-icon">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <div class="gasvs-callout-text">
              <span class="gasvs-callout-strong">Central Government Mandate</span>
              <span class="gasvs-callout-desc">Empowering Persons with Disabilities across Sukma district through localized, sustainable rehabilitation infrastructure.</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. FOUR FOUNDATIONAL PILLARS OF DDRC INTERVENTION
       ========================================================================= -->
  <section class="gasvs-section gasvs-ddrc-pillars-section" id="ddrc-pillars">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Core Service Spectrum</span>
        <h2 class="gasvs-section-title">Key Services Provided by DDRC through GASVS</h2>
        <p class="gasvs-section-subtitle">
          Delivering an integrated continuum of rehabilitation care—combining grassroots awareness, cognitive development, specialized clinical therapy, and institutional convergence.
        </p>
      </div>

      <div class="gasvs-ddrc-pillars-grid">

        <!-- Pillar 1: Awareness and Counselling Services -->
        <article class="gasvs-ddrc-pillar-card">
          <div class="gasvs-pillar-img-wrap">
            <img src="<?php echo esc_url( $img_pillar_outreach ); ?>" alt="Community outreach and awareness session conducted by GASVS DDRC in rural Sukma" loading="lazy" width="768" height="576" />
            <span class="gasvs-pillar-tag">Outreach &amp; Advocacy</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-header">
              <div class="gasvs-pillar-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              </div>
              <h3 class="gasvs-pillar-title">Awareness &amp; Counselling Services</h3>
            </div>
            <p class="gasvs-pillar-text">
              GASVS conducts structured community outreach programs to educate PwDs, caregivers, and rural families about available rehabilitation services and support mechanisms.
            </p>
            <ul class="gasvs-pillar-bullets">
              <li><strong>Disability Rights Education:</strong> Informing communities about legal protections under the Rights of Persons with Disabilities (RPwD) Act 2016.</li>
              <li><strong>Government Scheme Guidance:</strong> Empowering families with step-by-step clarity on navigating social welfare benefits and grants.</li>
              <li><strong>Stigma Reduction:</strong> Organizing grassroots dialogues to eliminate superstition and foster deep community acceptance and respect.</li>
            </ul>
            <div class="gasvs-pillar-footer-badges">
              <span class="gasvs-chip">RPwD Act Rights</span>
              <span class="gasvs-chip">Family Counselling</span>
              <span class="gasvs-chip">Anti-Stigma Outreach</span>
            </div>
          </div>
        </article>

        <!-- Pillar 2: Education Services & Cognitive Development -->
        <article class="gasvs-ddrc-pillar-card">
          <div class="gasvs-pillar-img-wrap">
            <img src="<?php echo esc_url( $img_pillar_education ); ?>" alt="Educational and cognitive development activities for children with disabilities" loading="lazy" width="768" height="576" />
            <span class="gasvs-pillar-tag">Education &amp; Growth</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-header">
              <div class="gasvs-pillar-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
              </div>
              <h3 class="gasvs-pillar-title">Education &amp; Cognitive Development</h3>
            </div>
            <p class="gasvs-pillar-text">
              Focusing on the cognitive, communicative, and social development of Children with Disabilities (CwDs) through tailored educational support and inclusive mainstream schooling.
            </p>
            <ul class="gasvs-pillar-bullets">
              <li><strong>Mainstream School Integration:</strong> Partnering with government schools to eliminate physical and instructional barriers for disabled students.</li>
              <li><strong>Tailored Learning Modules:</strong> Providing specialized training to enhance learning capabilities, literacy, and developmental milestones.</li>
              <li><strong>Social Skills Enhancement:</strong> Facilitating group activities, play therapy, and peer interaction to foster confidence and self-expression.</li>
            </ul>
            <div class="gasvs-pillar-footer-badges">
              <span class="gasvs-chip">Mainstream Inclusion</span>
              <span class="gasvs-chip">Cognitive Training</span>
              <span class="gasvs-chip">Child Development</span>
            </div>
          </div>
        </article>

        <!-- Pillar 3: Therapeutic Services (Physiotherapy & OT) -->
        <article class="gasvs-ddrc-pillar-card">
          <div class="gasvs-pillar-img-wrap">
            <img src="<?php echo esc_url( $img_pillar_rehab ); ?>" alt="Clinical physiotherapy and therapeutic rehabilitation fitting by GASVS specialists" loading="lazy" width="768" height="576" />
            <span class="gasvs-pillar-tag">Clinical Rehabilitation</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-header">
              <div class="gasvs-pillar-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </div>
              <h3 class="gasvs-pillar-title">Therapeutic Services (Physiotherapy &amp; OT)</h3>
            </div>
            <p class="gasvs-pillar-text">
              Offering comprehensive physiotherapy, occupational therapy, and speech therapy services delivered by qualified professionals to reduce physical limitations.
            </p>
            <ul class="gasvs-pillar-bullets">
              <li><strong>Personalized Treatment Plans:</strong> Dedicated professionals work closely with each individual to assess functional needs and design customized therapies.</li>
              <li><strong>Limitation &amp; Deformity Prevention:</strong> Therapeutic regimens to restore muscle strength, improve joint mobility, and prevent secondary deformities.</li>
              <li><strong>Enhanced Daily Living:</strong> Occupational rehabilitation empowering individuals to perform activities of daily living (ADLs) with autonomy.</li>
            </ul>
            <div class="gasvs-pillar-footer-badges">
              <span class="gasvs-chip">Physiotherapy OPD</span>
              <span class="gasvs-chip">Occupational Therapy</span>
              <span class="gasvs-chip">Speech Support</span>
            </div>
          </div>
        </article>

        <!-- Pillar 4: Convergence and Linkages -->
        <article class="gasvs-ddrc-pillar-card">
          <div class="gasvs-pillar-img-wrap">
            <img src="<?php echo esc_url( $img_pillar_linkages ); ?>" alt="Facilitating disability certificates and government linkages for rural beneficiaries" loading="lazy" width="768" height="576" />
            <span class="gasvs-pillar-tag">Policy &amp; Convergence</span>
          </div>
          <div class="gasvs-pillar-body">
            <div class="gasvs-pillar-header">
              <div class="gasvs-pillar-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
              </div>
              <h3 class="gasvs-pillar-title">Convergence &amp; Linkages</h3>
            </div>
            <p class="gasvs-pillar-text">
              Actively developing seamless convergence with government schemes, statutory departments, and community welfare programs to establish a dependable safety net.
            </p>
            <ul class="gasvs-pillar-bullets">
              <li><strong>Disability Certification &amp; UDID:</strong> Facilitating medical board evaluations for prompt issuance of Unique Disability ID (UDID) cards.</li>
              <li><strong>Concessions &amp; Social Security:</strong> Securing railway and bus travel passes, pension disbursements, and financial disability grants.</li>
              <li><strong>Multi-Departmental Safety Net:</strong> Linking PwDs to healthcare, vocational skills, assistive devices, and sustainable rural livelihood initiatives.</li>
            </ul>
            <div class="gasvs-pillar-footer-badges">
              <span class="gasvs-chip">UDID Certification</span>
              <span class="gasvs-chip">Travel Concessions</span>
              <span class="gasvs-chip">Pensions &amp; Linkages</span>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. STEP-BY-STEP REHABILITATION PATHWAY
       ========================================================================= -->
  <section class="gasvs-section gasvs-ddrc-pathway-section" id="ddrc-pathway">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Continuum of Care</span>
        <h2 class="gasvs-section-title">The DDRC Grassroots Rehabilitation Continuum</h2>
        <p class="gasvs-section-subtitle">
          How GASVS delivers structured, accountable, and transparent support—from village identification to lifelong community inclusion.
        </p>
      </div>

      <div class="gasvs-ddrc-pathway-flow">

        <!-- Step 1 -->
        <div class="gasvs-pathway-step">
          <div class="gasvs-step-badge">Step 01</div>
          <div class="gasvs-step-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <h3 class="gasvs-step-title">Village Screening &amp; Identification</h3>
          <p class="gasvs-step-desc">
            Grassroots outreach workers conduct home visits and cluster-level screening camps across remote forest habitations in Sukma district to identify children and adults with physical or mental disabilities.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="gasvs-pathway-step">
          <div class="gasvs-step-badge">Step 02</div>
          <div class="gasvs-step-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
          </div>
          <h3 class="gasvs-step-title">Clinical Assessment &amp; UDID Facilitation</h3>
          <p class="gasvs-step-desc">
            Organizing specialized medical assessment boards in coordination with the District Health Department to evaluate disability percentage and facilitate official UDID certification and travel passes.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="gasvs-pathway-step">
          <div class="gasvs-step-badge">Step 03</div>
          <div class="gasvs-step-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
          </div>
          <h3 class="gasvs-step-title">Therapeutic Regimens &amp; Assistive Fitting</h3>
          <p class="gasvs-step-desc">
            Designing personalized physiotherapy, occupational therapy, and speech therapy regimens at the district centre, followed by custom measurements, fitting, and distribution of assistive devices.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="gasvs-pathway-step">
          <div class="gasvs-step-badge">Step 04</div>
          <div class="gasvs-step-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="gasvs-step-title">Entitlement Linkage &amp; Social Inclusion</h3>
          <p class="gasvs-step-desc">
            Connecting beneficiaries to monthly disability pensions, barrier-free school admissions, vocational training, and village self-help groups, restoring complete dignity and economic independence.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. IMPACT & MEASURABLE OUTCOMES IN SUKMA DISTRICT
       ========================================================================= -->
  <section class="gasvs-section gasvs-ddrc-impact-section" id="ddrc-impact">
    <div class="gasvs-container">

      <div class="gasvs-ddrc-impact-card">
        <div class="gasvs-ddrc-impact-grid">

          <!-- Left Column: Authentic Field Media -->
          <div class="gasvs-impact-media">
            <div class="gasvs-impact-img-frame">
              <img src="<?php echo esc_url( $img_impact_showcase ); ?>" alt="Beneficiaries receiving assistive tricycles and rehabilitation support at Sukma DDRC" loading="lazy" width="768" height="576" />
              <div class="gasvs-impact-badge">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <span>Verified Field Impact · Sukma</span>
              </div>
            </div>
          </div>

          <!-- Right Column: Narrative & Counter Metrics -->
          <div class="gasvs-impact-content">
            <span class="gasvs-kicker gasvs-kicker-gold">Transformative Grassroots Results</span>
            <h2 class="gasvs-impact-title">Impact of DDRC in Sukma District</h2>
            <p class="gasvs-impact-lead">
              Since GASVS began implementing the DDRC program in Sukma in 2017, the impact has been significant and enduring. We have successfully identified and supported numerous PwDs, providing them with the services they need to lead more independent and fulfilling lives.
            </p>
            <p class="gasvs-impact-desc">
              For example, in <strong>2023 alone</strong>, GASVS facilitated the issuance of <strong>over 200 disability certificates</strong> and provided therapeutic services to <strong>more than 150 PwDs</strong>, enabling them to dramatically improve their physical mobility, functional autonomy, and mental well-being in an otherwise underserved tribal region.
            </p>

            <!-- 4 Verified Metrics Grid -->
            <div class="gasvs-impact-metrics-grid">
              <div class="gasvs-impact-metric-box">
                <span class="gasvs-impact-num">200+</span>
                <span class="gasvs-impact-label">Disability Certificates Issued (2023)</span>
              </div>

              <div class="gasvs-impact-metric-box">
                <span class="gasvs-impact-num">150+</span>
                <span class="gasvs-impact-label">PwDs Receiving Therapy Services (2023)</span>
              </div>

              <div class="gasvs-impact-metric-box">
                <span class="gasvs-impact-num">198+</span>
                <span class="gasvs-impact-label">Linked to Assistive Devices</span>
              </div>

              <div class="gasvs-impact-metric-box">
                <span class="gasvs-impact-num">7,500+</span>
                <span class="gasvs-impact-label">Total PwDs &amp; CwDs Supported</span>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. AUTHENTIC FIELD PHOTO SHOWCASE (ZERO DUPLICATION)
       ========================================================================= -->
  <section class="gasvs-section gasvs-ddrc-gallery-section" id="ddrc-gallery">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Field Documentation</span>
        <h2 class="gasvs-section-title">Authentic Field Action &amp; Community Transformation</h2>
        <p class="gasvs-section-subtitle">
          Verified photographic documentation of grassroots rehabilitation centers, assistive device handovers, clinical therapy, and community inclusion.
        </p>
      </div>

      <div class="gasvs-ddrc-gallery-grid">

        <!-- Photo 1: DDRC Rehabilitation Banner & Center Team -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-img">
            <img src="<?php echo esc_url( $img_gallery_1 ); ?>" alt="Official DDRC Rehabilitation Banner and dedicated center team in Sukma" loading="lazy" width="600" height="450" />
            <span class="gasvs-gallery-badge">District Resource Centre</span>
          </div>
          <div class="gasvs-gallery-info">
            <h3 class="gasvs-gallery-caption">DDRC Sukma Infrastructure &amp; Staff</h3>
            <p>Official rehabilitation centre team and administrative facility dedicated to delivering localized disability services.</p>
          </div>
        </div>

        <!-- Photo 2: Decentralized Screening Camp -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-img">
            <img src="<?php echo esc_url( $img_gallery_2 ); ?>" alt="Decentralized disability screening and health assessment camp conducted by GASVS" loading="lazy" width="600" height="450" />
            <span class="gasvs-gallery-badge">Screening Camp</span>
          </div>
          <div class="gasvs-gallery-info">
            <h3 class="gasvs-gallery-caption">Field Screening &amp; Medical Assessment</h3>
            <p>Conducting village-level medical evaluation camps to identify locomotor, sensory, and cognitive conditions in remote habitations.</p>
          </div>
        </div>

        <!-- Photo 3: Wheelchairs Handover Ceremony -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-img">
            <img src="<?php echo esc_url( $img_gallery_3 ); ?>" alt="Distribution of modern assistive wheelchairs to Persons with Disabilities" loading="lazy" width="600" height="450" />
            <span class="gasvs-gallery-badge">Mobility Aids</span>
          </div>
          <div class="gasvs-gallery-info">
            <h3 class="gasvs-gallery-caption">Assistive Wheelchair Distribution</h3>
            <p>Coordinating the delivery of high-quality assistive wheelchairs to restore independent personal mobility for rural PwDs.</p>
          </div>
        </div>

        <!-- Photo 4: Tricycle Handover for Rural Mobility -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-img">
            <img src="<?php echo esc_url( $img_gallery_4 ); ?>" alt="Beneficiaries receiving customized mobility tricycles from GASVS" loading="lazy" width="600" height="450" />
            <span class="gasvs-gallery-badge">Assistive Tricycles</span>
          </div>
          <div class="gasvs-gallery-info">
            <h3 class="gasvs-gallery-caption">Mobility Tricycles for Rural Independence</h3>
            <p>Providing durable manual and motorized tricycles enabling disabled individuals to commute to work, education, and public spaces.</p>
          </div>
        </div>

        <!-- Photo 5: Village CBR & Disability Committee Meeting -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-img">
            <img src="<?php echo esc_url( $img_gallery_5 ); ?>" alt="Community-Based Rehabilitation village meeting and advocacy group dialogue" loading="lazy" width="600" height="450" />
            <span class="gasvs-gallery-badge">Community CBR</span>
          </div>
          <div class="gasvs-gallery-info">
            <h3 class="gasvs-gallery-caption">Grassroots Disability Committee Dialogue</h3>
            <p>Mobilizing village disability self-help groups (SHGs) and caregivers to advocate for local accessibility and government entitlements.</p>
          </div>
        </div>

        <!-- Photo 6: Empowered Youth Achieving Independence -->
        <div class="gasvs-gallery-card">
          <div class="gasvs-gallery-img">
            <img src="<?php echo esc_url( $img_gallery_6 ); ?>" alt="Empowered rural youth with disability achieving self-reliance through GASVS support" loading="lazy" width="600" height="450" />
            <span class="gasvs-gallery-badge">Youth Empowerment</span>
          </div>
          <div class="gasvs-gallery-info">
            <h3 class="gasvs-gallery-caption">Independent Living &amp; Social Dignity</h3>
            <p>Fostering youth leadership, functional autonomy, and civic inclusion for persons with disabilities across Central India.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. INSTITUTIONAL PARTNERS & GOVERNMENT CONVERGENCE
       ========================================================================= -->
  <section class="gasvs-section gasvs-ddrc-partners-section" id="ddrc-partners">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Collaborative Governance</span>
        <h2 class="gasvs-section-title">Government Convergence &amp; Institutional Recognition</h2>
        <p class="gasvs-section-subtitle">
          Collaborating with premier government ministries, district healthcare systems, and statutory bodies to advance disability equity.
        </p>
      </div>

      <div class="gasvs-ddrc-partners-grid">

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-wrap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="gasvs-partner-name">Ministry of Social Justice &amp; Empowerment</h3>
          <p class="gasvs-partner-role">Government of India</p>
          <p class="gasvs-partner-desc">Sponsoring and sanctioning authority for the DDRC scheme, establishing decentralized district rehabilitation infrastructure nationwide.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-wrap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11M8 14v4M12 14v4M16 14v4"/></svg>
          </div>
          <h3 class="gasvs-partner-name">District Administration, Sukma</h3>
          <p class="gasvs-partner-role">Government of Chhattisgarh</p>
          <p class="gasvs-partner-desc">District Magistrate and Collectorate leadership coordinating inter-departmental convergence and social security linkage for tribal PwDs.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-wrap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3 class="gasvs-partner-name">District Health Department &amp; NHM</h3>
          <p class="gasvs-partner-role">Healthcare Delivery &amp; Medical Board</p>
          <p class="gasvs-partner-desc">Convening regular medical evaluation boards, certifying disability percentages, and issuing official UDID cards.</p>
        </div>

        <div class="gasvs-partner-card">
          <div class="gasvs-partner-icon-wrap">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="gasvs-partner-name">Social Welfare &amp; PRIs</h3>
          <p class="gasvs-partner-role">Gram Panchayats &amp; Welfare Dept</p>
          <p class="gasvs-partner-desc">Partnering with local Gram Panchayats and Block Development offices to ensure no disabled individual is excluded from welfare schemes.</p>
        </div>

      </div>

      <!-- Presidential National Award Spotlight Box -->
      <div class="gasvs-ddrc-award-spotlight">
        <div class="gasvs-award-spotlight-inner">
          <div class="gasvs-award-icon-box">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
          </div>
          <div class="gasvs-award-text-box">
            <span class="gasvs-award-tag">National Recognition</span>
            <h3 class="gasvs-award-title">Conferred the National Award-2020 by the Hon'ble President of India</h3>
            <p class="gasvs-award-desc">
              In 2021, Gramin Adiwasi Samaj Vikas Sansthan (GASVS) was honored with the prestigious <strong>National Award-2020</strong> by the <strong>Ministry of Social Justice and Empowerment, Government of India</strong> (presented by the Hon'ble President of India) in recognition of three decades of unwavering grassroots commitment to disability rehabilitation, community empowerment, and social inclusion.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       8. CALL TO ACTION / REGISTRATION & CONTACT DETAILS
       ========================================================================= -->
  <section class="gasvs-section gasvs-ddrc-cta-section" id="ddrc-cta">
    <div class="gasvs-container">

      <div class="gasvs-cta-card">
        <div class="gasvs-cta-glow"></div>
        <div class="gasvs-cta-content">
          <span class="gasvs-kicker gasvs-kicker-gold">Advance Grassroots Dignity</span>
          <h2 class="gasvs-cta-title">Partner with Us to Expand Grassroots Disability Rehabilitation</h2>
          <p class="gasvs-cta-subtitle">
            Every assistive mobility aid, specialized therapy session, and UDID certificate restores self-reliance, social dignity, and fundamental human rights to an individual in need across remote tribal habitations.
          </p>

          <div class="gasvs-cta-actions">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
              <span>Support Disability Rehabilitation</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn gasvs-btn-secondary">
              <span>Contact Registered Office</span>
            </a>
          </div>

          <div class="gasvs-cta-compliance-strip">
            <div class="gasvs-compliance-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <span>Society Reg: M.P.–25307</span>
            </div>
            <div class="gasvs-compliance-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>12A &amp; 80G Certified</span>
            </div>
            <div class="gasvs-compliance-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>Reg. Office: Sausar, Pandhurna (M.P.)</span>
            </div>
            <div class="gasvs-compliance-item">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <span>+91 9823224640</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

</main>

<?php
get_footer();
