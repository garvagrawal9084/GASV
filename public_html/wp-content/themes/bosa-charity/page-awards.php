<?php
/**
 * Modern Awards & Recognition Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern Awards Page
 * Strictly scoped to the Awards page (slug: awards-and-recognition / ID 251).
 * Preserves all WordPress header, footer, links, backend compatibility, and content verbatim.
 *
 * @package Bosa Charity
 */

get_header();

// Verified local uploads for awards and ceremonies
$img_presidential_ceremony = content_url( '/uploads/2024/06/photo-about-us-home-page-1024x604.jpg' );
$img_presidential_wide     = content_url( '/uploads/2024/07/Presidential-Award-1024x604.jpg' );
$img_mahaveer              = content_url( '/uploads/2024/07/Mahaveer-Award-768x512.jpg' );
$img_relief_1              = content_url( '/uploads/2024/07/1-Relief-rehabilitation-Award-768x512.jpg' );
$img_relief_2              = content_url( '/uploads/2024/07/2-Relief-rehabilitation-Award-768x512.jpg' );
$img_award_trophy_1        = content_url( '/uploads/2024/07/AWARD-1-768x512.png' );
$img_award_trophy_2        = content_url( '/uploads/2024/07/AWARD-2-768x512.png' );
?>

<main id="gasvs-main-content" class="gasvs-awards-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-awards-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-awards-hero-inner">
        
        <!-- Breadcrumb Navigation -->
        <nav class="gasvs-breadcrumb-nav" aria-label="Breadcrumb">
          <ol class="gasvs-breadcrumbs">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li><a href="<?php echo esc_url( home_url( '/our-history-and-mission-our-approach/' ) ); ?>">About Us</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">Awards &amp; Recognition</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Honors &amp; Distinctions</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-awards-hero-title gasvs-animate-slide-up">
          Awards &amp; <span class="gasvs-text-gradient">National Recognition</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-awards-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Celebrating over three decades of steadfast grassroots leadership, disability empowerment, and healthcare advocacy honored at district, state, and national levels — including the prestigious Presidential Award.
        </p>

        <!-- Key Metrics Strip -->
        <div class="gasvs-awards-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">8+</span>
            <span class="gasvs-stat-pill-label">Honors &amp; State Awards</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">2005–2022</span>
            <span class="gasvs-stat-pill-label">Legacy of Recognition</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">Presidential</span>
            <span class="gasvs-stat-pill-label">Rashtrapati Bhavan Honor</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">Top 100</span>
            <span class="gasvs-stat-pill-label">UN &amp; Youth Forum Leader</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. CROWN JEWEL SPOTLIGHT: PRESIDENTIAL AWARD
       ========================================================================= -->
  <section class="gasvs-section gasvs-presidential-section" id="presidential-honor">
    <div class="gasvs-container">
      
      <div class="gasvs-presidential-spotlight">
        <div class="gasvs-presidential-grid">
          
          <!-- Spotlight Media Frame -->
          <div class="gasvs-presidential-media-col">
            <div class="gasvs-presidential-frame">
              <img 
                src="<?php echo esc_url( $img_presidential_ceremony ); ?>" 
                alt="GASVS Conferred with the Presidential Award by the President of India at Rashtrapati Bhavan" 
                class="gasvs-presidential-img no-lazyload"
                data-no-lazy="1"
                loading="eager"
                width="1024"
                height="604"
              />
              <div class="gasvs-presidential-media-overlay">
                <span class="gasvs-presidential-loc-badge">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"/><circle cx="12" cy="10" r="3"/></svg>
                  Rashtrapati Bhavan, New Delhi
                </span>
                <span class="gasvs-presidential-year-badge">Year 2021</span>
              </div>
            </div>

            <div class="gasvs-presidential-caption">
              <p>National Award ceremony at Rashtrapati Bhavan, honoring GASVS for exceptional community-based rehabilitation and empowerment of Persons with Disabilities (PwDs).</p>
            </div>
          </div>

          <!-- Spotlight Content Column -->
          <div class="gasvs-presidential-text-col">
            <div class="gasvs-presidential-kicker-wrap">
              <span class="gasvs-kicker">Highest National Recognition</span>
              <span class="gasvs-presidential-level-tag">National Level</span>
            </div>

            <h2 class="gasvs-presidential-title">Presidential Award for Empowerment of PwDs</h2>

            <div class="gasvs-presidential-meta-box">
              <div class="gasvs-meta-item">
                <span class="gasvs-meta-label">Conferred By</span>
                <span class="gasvs-meta-value">Ministry for Social Justice and Empowerment, Government of India</span>
              </div>
              <div class="gasvs-meta-item">
                <span class="gasvs-meta-label">Category &amp; Reason</span>
                <span class="gasvs-meta-value">Outstanding work in the empowerment of Persons with Disabilities (PwDs)</span>
              </div>
            </div>

            <p class="gasvs-presidential-desc">
              Conferred by the Hon’ble President of India, this prestigious national award honors GASVS’s comprehensive community-led rehabilitation framework. Working in remote tribal villages across Chhindwara, Pandhurna, and Betul, GASVS provides physical rehabilitation, assistive aid camps, psychological support, and livelihood training, ensuring that Persons with Disabilities lead lives of independence and self-worth.
            </p>

            <div class="gasvs-presidential-tags">
              <span class="gasvs-ptag">Community Rehabilitation</span>
              <span class="gasvs-ptag">Aids &amp; Appliances</span>
              <span class="gasvs-ptag">Inclusive Education</span>
              <span class="gasvs-ptag">Social Justice</span>
            </div>

            <div class="gasvs-presidential-actions">
              <a href="#awards-chronicle" class="gasvs-btn gasvs-btn-primary">
                <span>View Full Award Chronicle</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
              </a>
              <a href="<?php echo esc_url( home_url( '/reports-and-publications/' ) ); ?>" class="gasvs-btn gasvs-btn-outline">
                <span>Verified Annual Reports</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
              </a>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       3. CEREMONY & CERTIFICATE SHOWCASE GALLERY
       ========================================================================= -->
  <section class="gasvs-section gasvs-gallery-section" id="ceremony-gallery">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Honors in Action</span>
        <h2 class="gasvs-section-title">Award Ceremonies &amp; Recognitions</h2>
        <p class="gasvs-section-subtitle">
          Moments capturing felicitation by national leaders, state dignitaries, and eminent philanthropic foundations.
        </p>
      </div>

      <div class="gasvs-ceremony-grid">
        
        <!-- Item 1: Presidential Award 2021 -->
        <article class="gasvs-ceremony-card">
          <div class="gasvs-ceremony-thumb">
            <img 
              src="<?php echo esc_url( $img_presidential_wide ); ?>" 
              alt="Presidential Award presentation at Rashtrapati Bhavan" 
              class="no-lazyload"
              data-no-lazy="1"
              loading="eager"
              width="768"
              height="453"
            />
            <span class="gasvs-ceremony-badge gasvs-badge-gold">National · 2021</span>
          </div>
          <div class="gasvs-ceremony-body">
            <span class="gasvs-ceremony-agency">Ministry for Social Justice and Empowerment</span>
            <h3 class="gasvs-ceremony-name">Presidential National Award</h3>
            <p class="gasvs-ceremony-detail">Outstanding work in the empowerment of PwDs</p>
          </div>
        </article>

        <!-- Item 2: Mahaveer Award 2019 -->
        <article class="gasvs-ceremony-card">
          <div class="gasvs-ceremony-thumb">
            <img 
              src="<?php echo esc_url( $img_mahaveer ); ?>" 
              alt="Mahaveer Award presentation ceremony by Bhagwan Mahaveer Foundation" 
              class="no-lazyload"
              data-no-lazy="1"
              loading="lazy"
              width="768"
              height="512"
            />
            <span class="gasvs-ceremony-badge gasvs-badge-blue">National · 2019</span>
          </div>
          <div class="gasvs-ceremony-body">
            <span class="gasvs-ceremony-agency">Bhagwan Mahaveer Foundation</span>
            <h3 class="gasvs-ceremony-name">Bhagwan Mahaveer Award</h3>
            <p class="gasvs-ceremony-detail">Community &amp; Social Service</p>
          </div>
        </article>

        <!-- Item 3: Relief & Rehabilitation Award 2021 -->
        <article class="gasvs-ceremony-card">
          <div class="gasvs-ceremony-thumb">
            <img 
              src="<?php echo esc_url( $img_relief_1 ); ?>" 
              alt="Relief and Rehabilitation Award ceremony by District Collectorate Chhindwara" 
              class="no-lazyload"
              data-no-lazy="1"
              loading="lazy"
              width="768"
              height="512"
            />
            <span class="gasvs-ceremony-badge gasvs-badge-teal">District · 2021</span>
          </div>
          <div class="gasvs-ceremony-body">
            <span class="gasvs-ceremony-agency">District Collectorate, Chhindwara</span>
            <h3 class="gasvs-ceremony-name">Relief &amp; Rehabilitation Award</h3>
            <p class="gasvs-ceremony-detail">Relief work during Covid-19 pandemic in remote tribal areas</p>
          </div>
        </article>

        <!-- Item 4: Relief & Rehabilitation Award 2022 -->
        <article class="gasvs-ceremony-card">
          <div class="gasvs-ceremony-thumb">
            <img 
              src="<?php echo esc_url( $img_relief_2 ); ?>" 
              alt="Relief and Rehabilitation Award 2022 ceremony for PwDs" 
              class="no-lazyload"
              data-no-lazy="1"
              loading="lazy"
              width="768"
              height="512"
            />
            <span class="gasvs-ceremony-badge gasvs-badge-teal">District · 2022</span>
          </div>
          <div class="gasvs-ceremony-body">
            <span class="gasvs-ceremony-agency">District Collectorate, Chhindwara</span>
            <h3 class="gasvs-ceremony-name">Relief &amp; Rehabilitation Award</h3>
            <p class="gasvs-ceremony-detail">Relief &amp; rehabilitation work for Persons with Disabilities</p>
          </div>
        </article>

        <!-- Item 5: National Yuva Mandal Puraskar -->
        <article class="gasvs-ceremony-card">
          <div class="gasvs-ceremony-thumb">
            <img 
              src="<?php echo esc_url( $img_award_trophy_1 ); ?>" 
              alt="National Yuva Mandal Puraskar trophy and citation" 
              class="no-lazyload"
              data-no-lazy="1"
              loading="lazy"
              width="768"
              height="512"
            />
            <span class="gasvs-ceremony-badge gasvs-badge-gold">National · 2006</span>
          </div>
          <div class="gasvs-ceremony-body">
            <span class="gasvs-ceremony-agency">Ministry of Youth &amp; Sports Affairs / NYK</span>
            <h3 class="gasvs-ceremony-name">National Yuva Mandal Purskar</h3>
            <p class="gasvs-ceremony-detail">Best implementation Strategy at National Level</p>
          </div>
        </article>

        <!-- Item 6: State & District Yuva Mandal Honors -->
        <article class="gasvs-ceremony-card">
          <div class="gasvs-ceremony-thumb">
            <img 
              src="<?php echo esc_url( $img_award_trophy_2 ); ?>" 
              alt="State Yuva Mandal Puraskar honors" 
              class="no-lazyload"
              data-no-lazy="1"
              loading="lazy"
              width="768"
              height="512"
            />
            <span class="gasvs-ceremony-badge gasvs-badge-indigo">State &amp; District</span>
          </div>
          <div class="gasvs-ceremony-body">
            <span class="gasvs-ceremony-agency">Ministry of Youth &amp; Sports Affairs / NYK</span>
            <h3 class="gasvs-ceremony-name">State &amp; District Yuva Mandal Puraskar</h3>
            <p class="gasvs-ceremony-detail">Excellence in grassroots youth &amp; community implementation strategy</p>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. AWARDS GRANTED TO GASVS (ALL 8 ORIGINAL AWARDS VERBATIM)
       ========================================================================= -->
  <section class="gasvs-section gasvs-chronicle-section" id="awards-chronicle">
    <div class="gasvs-container">
      
      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Honors Register</span>
        <h2 class="gasvs-section-title">Awards Granted to GASVS</h2>
        <p class="gasvs-section-subtitle">
          Complete historical register of district, state, and national accolades conferred to Gramin Adiwasi Samaj Vikas Sansthan.
        </p>

        <!-- View Mode Switcher -->
        <div class="gasvs-view-switcher" role="tablist" aria-label="Awards View Format">
          <button type="button" class="gasvs-view-btn is-active" id="btn-card-view" role="tab" aria-selected="true" aria-controls="view-cards-panel">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            <span>Timeline Cards</span>
          </button>
          <button type="button" class="gasvs-view-btn" id="btn-table-view" role="tab" aria-selected="false" aria-controls="view-table-panel">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3h18v18H3zM3 9h18M3 15h18M9 3v18M15 3v18"/></svg>
            <span>Tabular Register</span>
          </button>
        </div>
      </div>

      <!-- PANEL 1: TIMELINE CARDS VIEW (DEFAULT) -->
      <div id="view-cards-panel" class="gasvs-view-panel" role="tabpanel" aria-labelledby="btn-card-view">
        <div class="gasvs-awards-timeline">
          
          <!-- 1. 2022 -->
          <div class="gasvs-award-item">
            <div class="gasvs-award-year-badge">
              <span class="gasvs-year-num">2022</span>
              <span class="gasvs-year-level">District Level</span>
            </div>
            <div class="gasvs-award-card-inner">
              <div class="gasvs-award-header-row">
                <h3 class="gasvs-award-name">Relief &amp; rehabilitation Award</h3>
                <span class="gasvs-pill-tag gasvs-tag-district">District Collectorate</span>
              </div>
              <div class="gasvs-award-agency-row">
                <span class="gasvs-agency-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M13 21V3l6 4v14"/></svg>
                </span>
                <strong>Agency:</strong> <span>District Collectorate, Chhindwara</span>
              </div>
              <div class="gasvs-award-reason-box">
                <span class="gasvs-reason-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </span>
                <div>
                  <span class="gasvs-reason-label">Reason / Citation:</span>
                  <p class="gasvs-reason-text">Relief &amp; rehabilitation work for PwDs</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 2. 2021 Presidential -->
          <div class="gasvs-award-item gasvs-award-item-highlight">
            <div class="gasvs-award-year-badge">
              <span class="gasvs-year-num">2021</span>
              <span class="gasvs-year-level">National Level</span>
            </div>
            <div class="gasvs-award-card-inner">
              <div class="gasvs-award-header-row">
                <h3 class="gasvs-award-name">Presidential Award</h3>
                <span class="gasvs-pill-tag gasvs-tag-presidential">President of India</span>
              </div>
              <div class="gasvs-award-agency-row">
                <span class="gasvs-agency-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </span>
                <strong>Agency:</strong> <span>Ministry for Social Justice and Empowerment</span>
              </div>
              <div class="gasvs-award-reason-box">
                <span class="gasvs-reason-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </span>
                <div>
                  <span class="gasvs-reason-label">Reason / Citation:</span>
                  <p class="gasvs-reason-text">Outstanding work in the empowerment of PwDs</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 3. 2021 Relief & Rehab -->
          <div class="gasvs-award-item">
            <div class="gasvs-award-year-badge">
              <span class="gasvs-year-num">2021</span>
              <span class="gasvs-year-level">District Level</span>
            </div>
            <div class="gasvs-award-card-inner">
              <div class="gasvs-award-header-row">
                <h3 class="gasvs-award-name">Relief &amp; rehabilitation Award</h3>
                <span class="gasvs-pill-tag gasvs-tag-district">District Collectorate</span>
              </div>
              <div class="gasvs-award-agency-row">
                <span class="gasvs-agency-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M13 21V3l6 4v14"/></svg>
                </span>
                <strong>Agency:</strong> <span>District Collectorate, Chhindwara</span>
              </div>
              <div class="gasvs-award-reason-box">
                <span class="gasvs-reason-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </span>
                <div>
                  <span class="gasvs-reason-label">Reason / Citation:</span>
                  <p class="gasvs-reason-text">Relief work during Covid-19 pandemic in remote area of the Chhindwara District</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 4. 2019 Mahaveer -->
          <div class="gasvs-award-item">
            <div class="gasvs-award-year-badge">
              <span class="gasvs-year-num">2019</span>
              <span class="gasvs-year-level">National Level</span>
            </div>
            <div class="gasvs-award-card-inner">
              <div class="gasvs-award-header-row">
                <h3 class="gasvs-award-name">Mahaveer Award</h3>
                <span class="gasvs-pill-tag gasvs-tag-national">National Foundation</span>
              </div>
              <div class="gasvs-award-agency-row">
                <span class="gasvs-agency-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </span>
                <strong>Agency:</strong> <span>Bhagwan Mahaveer Foundation</span>
              </div>
              <div class="gasvs-award-reason-box">
                <span class="gasvs-reason-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </span>
                <div>
                  <span class="gasvs-reason-label">Reason / Citation:</span>
                  <p class="gasvs-reason-text">Community &amp; Social Service</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 5. 2017 Young Leaders -->
          <div class="gasvs-award-item">
            <div class="gasvs-award-year-badge">
              <span class="gasvs-year-num">2017</span>
              <span class="gasvs-year-level">National / Global</span>
            </div>
            <div class="gasvs-award-card-inner">
              <div class="gasvs-award-header-row">
                <h3 class="gasvs-award-name">Young Leaders Award</h3>
                <span class="gasvs-pill-tag gasvs-tag-un">UN &amp; Youth Forum</span>
              </div>
              <div class="gasvs-award-agency-row">
                <span class="gasvs-agency-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20M2 12h20"/></svg>
                </span>
                <strong>Agency:</strong> <span>Indian Youth forum &amp; UN change maker</span>
              </div>
              <div class="gasvs-award-reason-box">
                <span class="gasvs-reason-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </span>
                <div>
                  <span class="gasvs-reason-label">Reason / Citation:</span>
                  <p class="gasvs-reason-text">Innovative Leader among India’s Top 100</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 6. 2006 National Yuva Mandal -->
          <div class="gasvs-award-item">
            <div class="gasvs-award-year-badge">
              <span class="gasvs-year-num">2006</span>
              <span class="gasvs-year-level">National Level</span>
            </div>
            <div class="gasvs-award-card-inner">
              <div class="gasvs-award-header-row">
                <h3 class="gasvs-award-name">National Yuva Mandal Purskar – National level</h3>
                <span class="gasvs-pill-tag gasvs-tag-national">Central Ministry</span>
              </div>
              <div class="gasvs-award-agency-row">
                <span class="gasvs-agency-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M13 21V3l6 4v14"/></svg>
                </span>
                <strong>Agency:</strong> <span>Ministry of Youth &amp; Sports Affairs/NYK</span>
              </div>
              <div class="gasvs-award-reason-box">
                <span class="gasvs-reason-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </span>
                <div>
                  <span class="gasvs-reason-label">Reason / Citation:</span>
                  <p class="gasvs-reason-text">Best implementation Strategy</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 7. 2006 State Yuva Mandal -->
          <div class="gasvs-award-item">
            <div class="gasvs-award-year-badge">
              <span class="gasvs-year-num">2006</span>
              <span class="gasvs-year-level">State Level</span>
            </div>
            <div class="gasvs-award-card-inner">
              <div class="gasvs-award-header-row">
                <h3 class="gasvs-award-name">State Yuva Mandal Puraskar – State level</h3>
                <span class="gasvs-pill-tag gasvs-tag-state">State NYK</span>
              </div>
              <div class="gasvs-award-agency-row">
                <span class="gasvs-agency-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M13 21V3l6 4v14"/></svg>
                </span>
                <strong>Agency:</strong> <span>Ministry of Youth &amp; Sports Affairs/NYK</span>
              </div>
              <div class="gasvs-award-reason-box">
                <span class="gasvs-reason-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </span>
                <div>
                  <span class="gasvs-reason-label">Reason / Citation:</span>
                  <p class="gasvs-reason-text">Best implementation Strategy</p>
                </div>
              </div>
            </div>
          </div>

          <!-- 8. 2005 District Yuva Mandal -->
          <div class="gasvs-award-item">
            <div class="gasvs-award-year-badge">
              <span class="gasvs-year-num">2005</span>
              <span class="gasvs-year-level">District Level</span>
            </div>
            <div class="gasvs-award-card-inner">
              <div class="gasvs-award-header-row">
                <h3 class="gasvs-award-name">District Yuva Mandal Puraskar – District level</h3>
                <span class="gasvs-pill-tag gasvs-tag-district">District NYK</span>
              </div>
              <div class="gasvs-award-agency-row">
                <span class="gasvs-agency-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l8-4v18M13 21V3l6 4v14"/></svg>
                </span>
                <strong>Agency:</strong> <span>Ministry of Youth &amp; Sports Affairs/NYK</span>
              </div>
              <div class="gasvs-award-reason-box">
                <span class="gasvs-reason-icon">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                </span>
                <div>
                  <span class="gasvs-reason-label">Reason / Citation:</span>
                  <p class="gasvs-reason-text">Best implementation Strategy</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- PANEL 2: TABULAR REGISTER VIEW -->
      <div id="view-table-panel" class="gasvs-view-panel gasvs-table-panel is-hidden" role="tabpanel" aria-labelledby="btn-table-view">
        <div class="gasvs-table-container">
          <table class="gasvs-modern-awards-table" aria-label="Official Awards Register">
            <thead>
              <tr>
                <th scope="col" class="th-year">Year</th>
                <th scope="col" class="th-award">Award</th>
                <th scope="col" class="th-agency">Agency</th>
                <th scope="col" class="th-reason">Reason</th>
              </tr>
            </thead>
            <tbody>
              <tr class="tr-row">
                <td class="td-year"><span class="gasvs-table-year-chip">2022</span></td>
                <td class="td-award"><strong>Relief &amp; rehabilitation Award</strong></td>
                <td class="td-agency">District Collectorate, Chhindwara</td>
                <td class="td-reason">Relief &amp; rehabilitation work for PwDs</td>
              </tr>
              <tr class="tr-row tr-highlight">
                <td class="td-year"><span class="gasvs-table-year-chip gasvs-chip-gold">2021</span></td>
                <td class="td-award">
                  <div class="gasvs-award-title-cell">
                    <strong>Presidential Award</strong>
                    <span class="gasvs-mini-badge">National Honor</span>
                  </div>
                </td>
                <td class="td-agency">Ministry for Social Justice and Empowerment</td>
                <td class="td-reason">Outstanding work in the empowerment of PwDs</td>
              </tr>
              <tr class="tr-row">
                <td class="td-year"><span class="gasvs-table-year-chip">2021</span></td>
                <td class="td-award"><strong>Relief &amp; rehabilitation Award</strong></td>
                <td class="td-agency">District Collectorate, Chhindwara</td>
                <td class="td-reason">Relief work during Covid-19 pandemic in remote area of the Chhindwara District</td>
              </tr>
              <tr class="tr-row">
                <td class="td-year"><span class="gasvs-table-year-chip">2019</span></td>
                <td class="td-award"><strong>Mahaveer Award</strong></td>
                <td class="td-agency">Bhagwan Mahaveer Foundation</td>
                <td class="td-reason">Community &amp; Social Service</td>
              </tr>
              <tr class="tr-row">
                <td class="td-year"><span class="gasvs-table-year-chip">2017</span></td>
                <td class="td-award"><strong>Young Leaders Award</strong></td>
                <td class="td-agency">Indian Youth forum &amp; UN change maker</td>
                <td class="td-reason">Innovative Leader among India’s Top 100</td>
              </tr>
              <tr class="tr-row">
                <td class="td-year"><span class="gasvs-table-year-chip">2006</span></td>
                <td class="td-award"><strong>National Yuva Mandal Purskar – National level</strong></td>
                <td class="td-agency">Ministry of Youth &amp; Sports Affairs/NYK</td>
                <td class="td-reason">Best implementation Strategy</td>
              </tr>
              <tr class="tr-row">
                <td class="td-year"><span class="gasvs-table-year-chip">2006</span></td>
                <td class="td-award"><strong>State Yuva Mandal Puraskar – State level</strong></td>
                <td class="td-agency">Ministry of Youth &amp; Sports Affairs/NYK</td>
                <td class="td-reason">Best implementation Strategy</td>
              </tr>
              <tr class="tr-row">
                <td class="td-year"><span class="gasvs-table-year-chip">2005</span></td>
                <td class="td-award"><strong>District Yuva Mandal Puraskar – District level</strong></td>
                <td class="td-agency">Ministry of Youth &amp; Sports Affairs/NYK</td>
                <td class="td-reason">Best implementation Strategy</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. INSTITUTIONAL ACCREDITATION & TRUST STRIP
       ========================================================================= -->
  <section class="gasvs-section gasvs-trust-section">
    <div class="gasvs-container">
      <div class="gasvs-trust-grid">
        
        <div class="gasvs-trust-card">
          <div class="gasvs-trust-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <div class="gasvs-trust-content">
            <h4>MP Society Act 1973</h4>
            <p>Registered NGO under MP Society Registration Act 1973 (Reg. No. 24040/91)</p>
          </div>
        </div>

        <div class="gasvs-trust-card">
          <div class="gasvs-trust-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <div class="gasvs-trust-content">
            <h4>12A &amp; 80G Certified</h4>
            <p>Certified under sections 12A &amp; 80G of the Income Tax Act with 50% tax deductions</p>
          </div>
        </div>

        <div class="gasvs-trust-card">
          <div class="gasvs-trust-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20M2 12h20"/></svg>
          </div>
          <div class="gasvs-trust-content">
            <h4>FCRA Compliant</h4>
            <p>Approved under Foreign Contribution Regulation Act by Ministry of Home Affairs</p>
          </div>
        </div>

        <div class="gasvs-trust-card">
          <div class="gasvs-trust-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <div class="gasvs-trust-content">
            <h4>NITI Aayog Darpan</h4>
            <p>Verified NGO partner on the Government of India NITI Aayog portal</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       6. CALL TO ACTION / TRANSPARENCY & INVOLVEMENT
       ========================================================================= -->
  <section class="gasvs-section gasvs-awards-cta-section">
    <div class="gasvs-container">
      <div class="gasvs-awards-cta-content text-center">
        
        <span class="gasvs-kicker gasvs-kicker-light">Accountability &amp; Impact</span>
        <h2 class="gasvs-awards-cta-heading">Explore Verified Reports &amp; Support Our Mission</h2>
        <p class="gasvs-awards-cta-lead">
          Our recognitions represent the trust of millions of rural and tribal community members. Review our comprehensive annual filings or connect with our team to explore impactful CSR and philanthropic partnerships.
        </p>

        <div class="gasvs-awards-cta-btn-group">
          <a href="<?php echo esc_url( home_url( '/reports-and-publications/' ) ); ?>" class="gasvs-btn gasvs-btn-primary">
            <span>Annual Reports &amp; Publications</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/our-history-and-mission-our-approach/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-light">
            <span>Our History &amp; Mission</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gasvs-btn gasvs-btn-outline-light">
            <span>Contact &amp; CSR Connect</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </a>
        </div>

        <div class="gasvs-awards-cta-meta">
          <span>Registered under MP Society Registration Act 1973</span>
          <span class="gasvs-cta-dot">·</span>
          <span>Reg. No. 24040/91</span>
          <span class="gasvs-cta-dot">·</span>
          <span>12A &amp; 80G Certified</span>
        </div>

      </div>
    </div>
  </section>

</main>

<script>
// Tab switcher for Timeline Cards vs Tabular Register
document.addEventListener('DOMContentLoaded', function() {
  const btnCards = document.getElementById('btn-card-view');
  const btnTable = document.getElementById('btn-table-view');
  const panelCards = document.getElementById('view-cards-panel');
  const panelTable = document.getElementById('view-table-panel');

  if (btnCards && btnTable && panelCards && panelTable) {
    btnCards.addEventListener('click', function() {
      btnCards.classList.add('is-active');
      btnCards.setAttribute('aria-selected', 'true');
      btnTable.classList.remove('is-active');
      btnTable.setAttribute('aria-selected', 'false');
      panelCards.classList.remove('is-hidden');
      panelTable.classList.add('is-hidden');
    });

    btnTable.addEventListener('click', function() {
      btnTable.classList.add('is-active');
      btnTable.setAttribute('aria-selected', 'true');
      btnCards.classList.remove('is-active');
      btnCards.setAttribute('aria-selected', 'false');
      panelTable.classList.remove('is-hidden');
      panelCards.classList.add('is-hidden');
    });
  }
});
</script>

<?php
get_footer();
