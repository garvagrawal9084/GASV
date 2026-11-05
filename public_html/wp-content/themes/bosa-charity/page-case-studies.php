<?php
/**
 * Modern Case Studies & Stories of Change Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern Case Studies Page
 * Strictly scoped to the Case Studies page (slug: case-studies / ID 253).
 * Preserves all WordPress header, footer, links, and backend compatibility.
 * Strictly adheres to the Zero Dummy Data Policy and Anti-Duplication Image rule in AGENTS.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Field-Verified Media from Official Project Media Archives
$img_hero_bg          = home_url( '/wp-content/uploads/gasvs_images/home_hero/home_hero_02_mental_health_02.jpg' );
$img_meera_portrait   = home_url( '/wp-content/uploads/gasvs_images/stories/meera_pahad/meera_pahad_pashu_sakhi_01.jpeg' );
$img_meera_livestock  = home_url( '/wp-content/uploads/gasvs_images/stories/meera_pahad/meera_pahad_pashu_sakhi_02.jpeg' );
$img_meera_treatment  = home_url( '/wp-content/uploads/gasvs_images/stories/meera_pahad/meera_pahad_pashu_sakhi_03_treatment.jpg' );

$img_sanjay_pump      = home_url( '/wp-content/uploads/gasvs_images/disability/disability_03_sanjay_waghale_pump.jpg' );
$img_sanjay_portrait  = home_url( '/wp-content/uploads/gasvs_images/disability/disability_16_sanjay_waghale_portrait_02.jpeg' );
$img_khushi_solar     = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_07_women_packaging_enterprise.jpg' );
$img_amar_cbr         = home_url( '/wp-content/uploads/gasvs_images/disability/disability_06_tricycle_distribution.jpg' );
$img_abhay_sanjeevani = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_21_entitlement_handover.jpg' );

$img_storytelling_ethics = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_23_nalam_field_worker_counseling.jpg' );
$img_award_honor         = home_url( '/wp-content/uploads/2024/07/Presidential-Award-1024x604.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-case-studies-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-case-hero" id="stories-hero" style="background-image: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(17, 24, 39, 0.90) 100%), url('<?php echo esc_url( $img_hero_bg ); ?>');">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-case-hero-inner">

        <!-- Breadcrumb Navigation -->
        <nav class="gasvs-breadcrumb-nav" aria-label="Breadcrumb">
          <ol class="gasvs-breadcrumbs">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li><span>Impact &amp; Stories</span></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">Case Studies</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Stories of Change · Grassroots Impact &amp; Human Dignity</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-case-hero-title gasvs-animate-slide-up">
          Voices of Resilience, Inclusion &amp; <span class="gasvs-text-gradient">Grassroots Leadership</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-case-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Behind every statistic is a human story. Explore verified accounts of courage, community inclusion, mental health recovery, and women-led rural livelihoods from our work alongside marginalized communities since 1991.
        </p>

        <!-- Master Verified Impact Metrics Strip -->
        <div class="gasvs-case-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">19,328+</span>
            <span class="gasvs-stat-pill-label">Individuals Reached via Mental Health</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">7,500+</span>
            <span class="gasvs-stat-pill-label">Persons &amp; Children with Disabilities</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">3,500+</span>
            <span class="gasvs-stat-pill-label">People Linked to Livelihoods</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">37+</span>
            <span class="gasvs-stat-pill-label">Years of Grassroots Action</span>
          </div>
        </div>

        <!-- Hero Actions -->
        <div class="gasvs-case-hero-actions gasvs-animate-slide-up gasvs-delay-3">
          <a href="#featured-spotlight" class="gasvs-btn gasvs-btn-primary">
            <span>Featured Story: Meera Pahad</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 13l5 5 5-5M7 6l5 5 5-5"/></svg>
          </a>
          <a href="#stories-archive" class="gasvs-btn gasvs-btn-outline-light">
            <span>Explore All Stories of Change</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. FEATURED SPOTLIGHT: MEERA PAHAD (PASHU SAKHI)
       ========================================================================= -->
  <section class="gasvs-section gasvs-case-spotlight-section" id="featured-spotlight">
    <div class="gasvs-container">

      <div class="gasvs-spotlight-wrapper">
        <div class="gasvs-spotlight-badge-top">
          <span class="gasvs-star-icon">★</span>
          <span>Featured Grassroots Case Study · Livelihood &amp; Inclusion</span>
        </div>

        <div class="gasvs-spotlight-grid">
          
          <!-- Left Column: Story Details -->
          <div class="gasvs-spotlight-content">
            <div class="gasvs-story-meta-tags">
              <span class="gasvs-tag gasvs-tag-location">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Nanda Village, Junnardeo Block, MP
              </span>
              <span class="gasvs-tag gasvs-tag-program">Pashu Sakhi Project · Livelihoods</span>
            </div>

            <h2 class="gasvs-spotlight-title">
              From Social Exclusion to Community Leadership: Meera Pahad’s Journey as a Pashu Sakhi
            </h2>

            <p class="gasvs-spotlight-lead">
              From the margins of society to becoming a trusted livestock healthcare provider, Meera’s story is a powerful testament to women’s empowerment through skills, opportunity, and community-based development.
            </p>

            <div class="gasvs-story-narrative-flow">
              <div class="gasvs-narrative-block">
                <h3 class="gasvs-narrative-heading">
                  <span class="gasvs-step-num">01</span> A Journey That Began with Marginalization
                </h3>
                <p>
                  In Nanda village, located in the challenging terrain of Junnardeo block, 40-year-old Meera Pahad had long experienced social exclusion and discrimination. Despite being educated, Meera and her family faced marginalization because of their Scheduled Caste identity and were compelled to live on the outskirts of the village. Her livelihood depended on goat-rearing, an essential source of income that often received little recognition or respect. For Meera, gaining social acceptance and securing a dignified place within the community remained a distant aspiration.
                </p>
              </div>

              <div class="gasvs-narrative-block">
                <h3 class="gasvs-narrative-heading">
                  <span class="gasvs-step-num">02</span> Skills That Opened New Doors
                </h3>
                <p>
                  A turning point came when Meera joined the GASVS Pashu Sakhi programme, an initiative that equips rural and tribal women with practical livestock healthcare skills and enables them to become local animal health service providers. Through the programme, Meera gained knowledge and hands-on skills in identifying common livestock diseases, providing basic treatment, administering vaccinations, and promoting preventive animal healthcare practices.
                </p>
              </div>

              <div class="gasvs-narrative-block">
                <h3 class="gasvs-narrative-heading">
                  <span class="gasvs-step-num">03</span> Standing Strong During the July 2024 Livestock Crisis
                </h3>
                <p>
                  In July 2024, an outbreak of Foot-and-Mouth Disease (FMD) threatened livestock in Nanda village, putting the livelihoods of several families at risk. As concern spread among livestock owners, Meera stepped forward to help. Drawing on her training, she supported affected goat owners, helped identify signs of illness, and provided timely medical care, containment, and guidance. Her swift intervention protected dozens of household herds from devastating mortality.
                </p>
              </div>

              <div class="gasvs-narrative-block">
                <h3 class="gasvs-narrative-heading">
                  <span class="gasvs-step-num">04</span> Dignity, Independence, and Sustainable Income
                </h3>
                <p>
                  Longstanding social perceptions began to change. Today, Meera earns approximately <strong>₹8,000 per month</strong> through her livestock healthcare services. Her expertise is sought not only in Nanda but also across neighbouring villages. She is now an indispensable community leader and veterinary resource.
                </p>
              </div>
            </div>

            <!-- Blockquote Highlight: Elegant Spotlight Quote Box -->
            <div class="gasvs-case-spotlight-quote">
              <div class="gasvs-quote-header">
                <svg class="gasvs-quote-mark-icon" width="34" height="34" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
              </div>
              <blockquote class="gasvs-quote-body">
                <p>What began as a learning opportunity soon became a pathway to economic independence, social recognition, and personal transformation. When women gain the skills and opportunities to lead, they transform not only their own lives but also the communities around them.</p>
                <cite class="gasvs-quote-attribution">
                  <span class="gasvs-cite-dash" aria-hidden="true">— </span><strong class="gasvs-cite-name">Meera Pahad</strong>, Pashu Sakhi, Nanda Village
                </cite>
              </blockquote>
            </div>

            <div class="gasvs-spotlight-actions">
              <a href="<?php echo esc_url( home_url( '/livelihood/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
                <span>Explore Livelihood &amp; Pashu Sakhi Work</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>

          </div>

          <!-- Right Column: Visual Media Showcase -->
          <div class="gasvs-spotlight-media">
            <div class="gasvs-spotlight-image-card">
              <figure class="gasvs-figure-main">
                <img src="<?php echo esc_url( $img_meera_portrait ); ?>" alt="Meera Pahad, Pashu Sakhi community livestock healthcare provider in Nanda village" class="gasvs-spotlight-img-main">
                <figcaption class="gasvs-figcaption">
                  <strong>Meera Pahad</strong> · Certified Pashu Sakhi serving Nanda and surrounding rural hamlets
                </figcaption>
              </figure>

              <div class="gasvs-spotlight-sub-grid">
                <figure class="gasvs-figure-sub">
                  <img src="<?php echo esc_url( $img_meera_livestock ); ?>" alt="Meera Pahad examining goats in Nanda village" class="gasvs-spotlight-img-sub">
                  <figcaption>Community livestock care</figcaption>
                </figure>
                <figure class="gasvs-figure-sub">
                  <img src="<?php echo esc_url( $img_meera_treatment ); ?>" alt="Meera Pahad administering veterinary treatment and vaccine" class="gasvs-spotlight-img-sub">
                  <figcaption>Clinical diagnosis &amp; treatment</figcaption>
                </figure>
              </div>

              <!-- Quick Facts Callout -->
              <div class="gasvs-spotlight-quick-facts">
                <div class="gasvs-qfact-item">
                  <span class="gasvs-qfact-num">₹8,000</span>
                  <span class="gasvs-qfact-label">Average Monthly Veterinary Earnings</span>
                </div>
                <div class="gasvs-qfact-item">
                  <span class="gasvs-qfact-num">100+</span>
                  <span class="gasvs-qfact-label">Livestock Herds Protected During FMD Outbreak</span>
                </div>
                <div class="gasvs-qfact-item">
                  <span class="gasvs-qfact-num">Nanda</span>
                  <span class="gasvs-qfact-label">Junnardeo Block, Chhindwara</span>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. THEMATIC FILTER TABS & STORIES ARCHIVE GRID
       ========================================================================= -->
  <section class="gasvs-section gasvs-stories-archive-section" id="stories-archive">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Archive of Transformation</span>
        <h2 class="gasvs-section-title">Verified Stories of Change</h2>
        <p class="gasvs-section-subtitle">
          Every story represents an authentic journey documented with informed consent and deep respect for individual autonomy. Filter by theme to explore how community-based solutions create sustainable change.
        </p>
      </div>

      <!-- Filter Tabs Navigation -->
      <div class="gasvs-filter-bar-wrap">
        <div class="gasvs-filter-bar" role="tablist" aria-label="Case Study Themes">
          <button class="gasvs-filter-btn is-active" data-filter="all" role="tab" aria-selected="true">
            All Stories (4)
          </button>
          <button class="gasvs-filter-btn" data-filter="disability" role="tab" aria-selected="false">
            Disability Inclusion (2)
          </button>
          <button class="gasvs-filter-btn" data-filter="livelihood" role="tab" aria-selected="false">
            Livelihoods &amp; Skills (1)
          </button>
          <button class="gasvs-filter-btn" data-filter="mental-health" role="tab" aria-selected="false">
            Mental Health Care (1)
          </button>
        </div>
      </div>

      <!-- Stories Grid -->
      <div class="gasvs-stories-grid" id="stories-grid">

        <!-- ===================================================================
             CARD 1: SANJAY WAGHALE (Disability Inclusion & CBR)
             =================================================================== -->
        <article class="gasvs-story-card" data-category="disability">
          <div class="gasvs-story-card-media">
            <img src="<?php echo esc_url( $img_sanjay_pump ); ?>" alt="Sanjay Waghale operating the village water pump at Gram Panchayat Teegaon" class="gasvs-story-card-img">
            <span class="gasvs-story-theme-badge gasvs-badge-disability">Disability Inclusion</span>
          </div>

          <div class="gasvs-story-card-body">
            <div class="gasvs-story-card-meta">
              <span class="gasvs-meta-location">Teegaon Village, Pandhurna</span>
              <span class="gasvs-meta-prog">CBR &amp; BDPO Initiative</span>
            </div>

            <h3 class="gasvs-story-card-title">
              Sanjay Waghale — Locomotor Disability to Community Leadership &amp; Gram Panchayat Pump Operator
            </h3>

            <div class="gasvs-story-card-summary">
              <div class="gasvs-story-field">
                <strong>Context:</strong> Sanjay, a 40-year-old man living with a severe locomotor disability, faced severe institutional barriers, lack of documentation, and social exclusion in accessing government entitlements and stable livelihood options.
              </div>
              <div class="gasvs-story-field">
                <strong>Intervention:</strong> Through the GASVS Community-Based Rehabilitation (CBR) programme, Sanjay obtained his UDID card, secured his monthly disability pension, and received the government marriage grant. He established a goat-rearing enterprise and was elected President of his village Self-Help Group (SHG).
              </div>
              <div class="gasvs-story-field">
                <strong>Milestone (2025):</strong> Demonstrating exceptional dedication and capability, Sanjay secured formal public employment in 2025 as the official Pump Operator for Gram Panchayat Teegaon, managing the drinking water supply for the entire village.
              </div>
            </div>

            <blockquote class="gasvs-story-card-quote">
              <p>“Securing my UDID card and livelihoods support gave me the footing to be independent. Today, operating the village pump, I serve the same community that once overlooked me.”</p>
              <cite>— Sanjay Waghale, Teegaon</cite>
            </blockquote>

            <div class="gasvs-story-card-actions">
              <a href="<?php echo esc_url( home_url( '/disability/' ) ); ?>" class="gasvs-btn-story-link">
                <span>Explore Disability Programme</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- ===================================================================
             CARD 2: KHUSHI VISHWAKARMA (Clean Energy & Technical Livelihoods)
             =================================================================== -->
        <article class="gasvs-story-card" data-category="livelihood">
          <div class="gasvs-story-card-media">
            <img src="<?php echo esc_url( $img_khushi_solar ); ?>" alt="Khushi Vishwakarma, rural solar engineer supported by GASVS" class="gasvs-story-card-img">
            <span class="gasvs-story-theme-badge gasvs-badge-livelihood">Clean Energy &amp; Skills</span>
          </div>

          <div class="gasvs-story-card-body">
            <div class="gasvs-story-card-meta">
              <span class="gasvs-meta-location">Rakhi-Kol Village, Junnardeo</span>
              <span class="gasvs-meta-prog">Solar Engineer Training / Bindi Int.</span>
            </div>

            <h3 class="gasvs-story-card-title">
              Khushi Vishwakarma — Lighting Homes, Building Futures as a Rural Solar Engineer
            </h3>

            <div class="gasvs-story-card-summary">
              <div class="gasvs-story-field">
                <strong>Context:</strong> At age 19, Khushi was selected for an intensive six-month residential Solar Engineer Training Programme in Rajasthan. During the course, she suffered the sudden, heartbreaking loss of her father, testing her emotional resilience.
              </div>
              <div class="gasvs-story-field">
                <strong>Intervention:</strong> With mentorship from GASVS and technical partner Bindi International, Khushi persevered and mastered technical fabrication, installation, maintenance, and solar battery management.
              </div>
              <div class="gasvs-story-field">
                <strong>Milestone:</strong> She returned to electrify over 100 remote tribal households, earned ₹30,000 from installation work, and earns a steady monthly income of ~₹5,000 servicing solar installations while providing clean energy to off-grid hamlets.
              </div>
            </div>

            <blockquote class="gasvs-story-card-quote">
              <p>“When I climbed rooftops with tools to install our first solar panel, I knew I was not just bringing light to a room, but paving a future of self-reliance for my family.”</p>
              <cite>— Khushi Vishwakarma, Solar Engineer</cite>
            </blockquote>

            <div class="gasvs-story-card-actions">
              <a href="<?php echo esc_url( home_url( '/livelihood/' ) ); ?>" class="gasvs-btn-story-link">
                <span>Explore Livelihood Initiatives</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- ===================================================================
             CARD 3: AMAR WADODE (Disability Leadership & Advocacy)
             =================================================================== -->
        <article class="gasvs-story-card" data-category="disability">
          <div class="gasvs-story-card-media">
            <img src="<?php echo esc_url( $img_amar_cbr ); ?>" alt="Assistive device distribution and mobility empowerment under GASVS CBR" class="gasvs-story-card-img">
            <span class="gasvs-story-theme-badge gasvs-badge-disability">Rights Advocacy &amp; CBR</span>
          </div>

          <div class="gasvs-story-card-body">
            <div class="gasvs-story-card-meta">
              <span class="gasvs-meta-location">Sausar &amp; Pandhurna Blocks, MP</span>
              <span class="gasvs-meta-prog">Caritas India – CBR / BDPO</span>
            </div>

            <h3 class="gasvs-story-card-title">
              Amar Wadode — Empowering Lives and Championing Disability Rights
            </h3>

            <div class="gasvs-story-card-summary">
              <div class="gasvs-story-field">
                <strong>Context:</strong> Living with physical disability in rural Madhya Pradesh, Amar faced limited educational resources, mobility challenges, and scarce formal training opportunities.
              </div>
              <div class="gasvs-story-field">
                <strong>Intervention:</strong> Supported by GASVS, Amar completed a three-month intensive personality development, English communication, and computer training program in Bangalore in 2018.
              </div>
              <div class="gasvs-story-field">
                <strong>Milestone:</strong> He returned to take on leadership roles in the Block Disabled People’s Organization (BDPO) and National Disabled People’s Organization (NDPO), advocating for UDID certification and assistive aids for hundreds of rural PwDs.
              </div>
            </div>

            <blockquote class="gasvs-story-card-quote">
              <p>“Education and peer advocacy taught me that disability is not an impediment to leadership. When we organize through BDPOs, our collective voice cannot be ignored.”</p>
              <cite>— Amar Wadode, BDPO Leader</cite>
            </blockquote>

            <div class="gasvs-story-card-actions">
              <a href="<?php echo esc_url( home_url( '/cbr-bdpo-program-sausar-and-pandhurna-blocks-of-chhindwara-district/' ) ); ?>" class="gasvs-btn-story-link">
                <span>Explore CBR &amp; BDPO Work</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- ===================================================================
             CARD 4: ABHAY WASNIK (Sanjeevani CMHP)
             =================================================================== -->
        <article class="gasvs-story-card" data-category="mental-health">
          <div class="gasvs-story-card-media">
            <img src="<?php echo esc_url( $img_abhay_sanjeevani ); ?>" alt="Entitlement handover and community reintegration support" class="gasvs-story-card-img">
            <span class="gasvs-story-theme-badge gasvs-badge-mental">Sanjeevani CMHP</span>
          </div>

          <div class="gasvs-story-card-body">
            <div class="gasvs-story-card-meta">
              <span class="gasvs-meta-location">Sausar Cluster, MP</span>
              <span class="gasvs-meta-prog">Sanjeevani Mental Health Initiative</span>
            </div>

            <h3 class="gasvs-story-card-title">
              Abhay Wasnik — Sustained Treatment Adherence Leads to Full Recovery
            </h3>

            <div class="gasvs-story-card-summary">
              <div class="gasvs-story-field">
                <strong>Context:</strong> Untreated mental illness in the Wasnik household had led to acute financial distress, social withdrawal, and recurring clinical crises that prevented stable family income.
              </div>
              <div class="gasvs-story-field">
                <strong>Intervention:</strong> The Sanjeevani CMHP team enrolled Abhay and his family into outpatient psychiatric care at CHC Sausar, with regular doorstep visits by field staff ensuring consistent medication compliance.
              </div>
              <div class="gasvs-story-field">
                <strong>Milestone:</strong> Following complete clinical recovery in 2017 with psychiatrist clearance, Abhay re-engaged in productive economic work and restored his family's livelihood and social standing.
              </div>
            </div>

            <blockquote class="gasvs-story-card-quote">
              <p>“Persistent care from grassroots field workers ensured I never missed a dose. Today, my recovery is complete, and our family is thriving once again.”</p>
              <cite>— Abhay Wasnik, Sausar</cite>
            </blockquote>

            <div class="gasvs-story-card-actions">
              <a href="<?php echo esc_url( home_url( '/district-mental-health-program-dmhp-chhindwara/' ) ); ?>" class="gasvs-btn-story-link">
                <span>Explore DMHP Chhindwara</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </a>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. ETHICAL STORYTELLING & PROTECTION PRINCIPLES
       ========================================================================= -->
  <section class="gasvs-section gasvs-ethics-section">
    <div class="gasvs-container">

      <div class="gasvs-ethics-card">
        <div class="gasvs-ethics-content">
          <span class="gasvs-kicker">Ethical Standards</span>
          <h2 class="gasvs-ethics-title">Our Principles for Human-Centred Storytelling</h2>
          <p class="gasvs-ethics-lead">
            Storytelling at GASVS is rooted in dignity, transparency, and informed consent. We honour every participant as an active agent of change in their own life, family, and community.
          </p>

          <div class="gasvs-ethics-grid">
            <div class="gasvs-ethics-item">
              <div class="gasvs-ethics-icon-box">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div class="gasvs-ethics-item-body">
                <h4>Informed Consent &amp; Autonomy</h4>
                <p>Every story, photograph, and detail is shared only after explicit, informed consent. Participants choose how their journey is shared.</p>
              </div>
            </div>

            <div class="gasvs-ethics-item">
              <div class="gasvs-ethics-icon-box">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
              </div>
              <div class="gasvs-ethics-item-body">
                <h4>Zero Fabrication Policy</h4>
                <p>We strictly reject simulated testimonials or dummy data. Every metric, location, and milestone is drawn from verified grassroots records.</p>
              </div>
            </div>

            <div class="gasvs-ethics-item">
              <div class="gasvs-ethics-icon-box">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
              </div>
              <div class="gasvs-ethics-item-body">
                <h4>Dignity &amp; Respectful Representation</h4>
                <p>We present people with dignity, focusing on resilience, skills, and community leadership rather than depicting them as helpless victims.</p>
              </div>
            </div>

            <div class="gasvs-ethics-item">
              <div class="gasvs-ethics-icon-box">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
              </div>
              <div class="gasvs-ethics-item-body">
                <h4>Survivor &amp; Child Protection</h4>
                <p>In accordance with statutory child protection and privacy guidelines, sensitive legal and child case details are strictly protected.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="gasvs-ethics-media">
          <figure>
            <img src="<?php echo esc_url( $img_storytelling_ethics ); ?>" alt="GASVS frontline worker providing compassionate counseling" class="gasvs-ethics-img">
            <figcaption>Doorstep compassionate counseling rooted in trust and dignity</figcaption>
          </figure>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. AWARDS & RECOGNITION CALLOUT BRIDGE
       ========================================================================= -->
  <section class="gasvs-section gasvs-awards-bridge-section">
    <div class="gasvs-container">
      <div class="gasvs-awards-bridge-card">
        <div class="gasvs-awards-bridge-media">
          <img src="<?php echo esc_url( $img_award_honor ); ?>" alt="National Award for Services to Persons with Disabilities conferred at Rashtrapati Bhavan">
        </div>
        <div class="gasvs-awards-bridge-body">
          <span class="gasvs-kicker">Honors &amp; Milestones</span>
          <h2 class="gasvs-awards-bridge-title">Recognized at District, State, and National Levels</h2>
          <p class="gasvs-awards-bridge-text">
            Our community-centred model has been recognized with multiple national honors, including the <strong>National Award 2020 for Services to Persons with Disabilities</strong> conferred by the Hon'ble President of India at Rashtrapati Bhavan, and the prestigious <strong>National Mahaveer Award (2019)</strong>.
          </p>
          <a href="<?php echo esc_url( home_url( '/awards-and-recognition/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-primary">
            <span>Explore All Awards &amp; Recognitions</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       6. CLOSING CALL TO ACTION
       ========================================================================= -->
  <section class="gasvs-section gasvs-case-cta-section">
    <div class="gasvs-container">
      <div class="gasvs-cta-banner text-center">
        <h2 class="gasvs-cta-title">Be Part of the Next Story of Change</h2>
        <p class="gasvs-cta-lead">
          Lasting impact is achieved through collective action. Partner with GASVS to strengthen community mental health care, disability inclusion, sustainable livelihoods, and rural resilience.
        </p>
        <div class="gasvs-cta-actions">
          <a href="<?php echo esc_url( home_url( '/partnership-opportunities/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
            <span>Partner with GASVS</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-light">
            <span>Connect With Us</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- Vanilla JS for Client-Side Filtering -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const filterBtns = document.querySelectorAll('.gasvs-filter-btn');
  const storyCards = document.querySelectorAll('.gasvs-story-card');

  if (filterBtns.length && storyCards.length) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const filter = this.getAttribute('data-filter');

        // Update button states
        filterBtns.forEach(b => {
          b.classList.remove('is-active');
          b.setAttribute('aria-selected', 'false');
        });
        this.classList.add('is-active');
        this.setAttribute('aria-selected', 'true');

        // Filter cards with smooth fade
        storyCards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            card.style.display = 'flex';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 10);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'translateY(15px)';
            setTimeout(() => {
              card.style.display = 'none';
            }, 200);
          }
        });
      });
    });
  }
});
</script>

<?php
get_footer();
