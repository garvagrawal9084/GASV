<?php
/**
 * Modern Volunteer Opportunities Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern Volunteer Opportunities Page
 * Strictly scoped to the Volunteer Opportunities page (slug: volunteer-opportunities / ID 903).
 * Preserves all WordPress header, footer, links, backend compatibility, and institutional integrity.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENTS.md.
 *
 * @package Bosa Charity
 */

get_header();

// 100% Authentic, Verified Field Photos (Zero Duplication Across Pages or Sections)
$img_hero_bg          = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_13_youth_assembly_srijan.jpg' );
$img_shramdaan        = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_04_watershed_shramdaan.jpeg' );
$img_cleanliness      = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_15_cleanliness_swachhata_drive.jpeg' );
$img_doctor_camp      = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_09_health_camp_eye_doctor.jpg' );
$img_preprimary       = home_url( '/wp-content/uploads/gasvs_images/community_impact/impact_03_preprimary_tribal_school.jpeg' );
$img_street_theatre   = home_url( '/wp-content/uploads/gasvs_images/mental_health/mental_health_24_nukkad_natak_performance.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-volunteer-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-volunteer-hero" id="volunteer-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-volunteer-hero-inner">

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
            <li class="gasvs-current" aria-current="page">Volunteer Opportunities</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill gasvs-animate-fade-in">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Grassroots Volunteerism &amp; Community Solidarity</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-volunteer-hero-title gasvs-animate-slide-up">
          Be Part of a More <span class="gasvs-text-gradient">Inclusive Future</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-volunteer-hero-lead gasvs-animate-slide-up gasvs-delay-1">
          Communities make change possible, and collaboration helps that change grow. Whether you bring professional expertise, field time, educational skills, or communications talent, join our 37-year grassroots movement working alongside rural, tribal, and marginalized communities across Central India.
        </p>

        <!-- Key Metrics Strip: 100% Verifiable Master Data -->
        <div class="gasvs-volunteer-hero-stats gasvs-animate-slide-up gasvs-delay-2">
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">37+ Years</span>
            <span class="gasvs-stat-pill-label">Grassroots Experience (Est. 1991)</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">4,200+</span>
            <span class="gasvs-stat-pill-label">Villages Reached Across MP &amp; MH</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">19,328+</span>
            <span class="gasvs-stat-pill-label">Mental Health Lives Touched</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">7,500+</span>
            <span class="gasvs-stat-pill-label">Persons with Disabilities Supported</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">6,543+</span>
            <span class="gasvs-stat-pill-label">Frontline Workers Capacitated</span>
          </div>
          <div class="gasvs-stat-pill">
            <span class="gasvs-stat-pill-num">17.5L+</span>
            <span class="gasvs-stat-pill-label">Population Covered by Public Systems</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. PHILOSOPHY OF VOLUNTEERISM: COMMUNITY-CENTERED ACTION
       ========================================================================= -->
  <section class="gasvs-section gasvs-volunteer-overview-section" id="volunteer-overview">
    <div class="gasvs-container">
      <div class="row align-items-center">

        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="gasvs-overview-content">
            <span class="gasvs-kicker">Our Grassroots Philosophy</span>
            <h2 class="gasvs-section-title">Lasting Change Is Built With Communities, Not Simply Delivered to Them</h2>
            <p class="gasvs-overview-lead">
              Since 1991, Gramin Adiwasi Samaj Vikas Sansthan (GASVS) has operated on the firm belief that true development cannot be imported. Lasting social impact is co-created with local people, frontline workers, and grassroots institutions.
            </p>
            <p class="gasvs-overview-body">
              When you volunteer with GASVS, you do not observe from a distance. You work shoulder-to-shoulder with village self-help groups (SHGs), Block Disabled People’s Organizations (BDPOs), livestock health workers (Pashu Sakhis), Anganwadi teachers, and rural youth leaders in Pandhurna, Sausar, Betul, Chhindwara, Nagpur, and Wardha.
            </p>
            <div class="gasvs-values-list">
              <div class="gasvs-value-item">
                <div class="gasvs-value-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <strong>Dignity &amp; Respect First:</strong> We treat community members as knowledgeable partners, ensuring every intervention honors local wisdom and traditions.
                </div>
              </div>
              <div class="gasvs-value-item">
                <div class="gasvs-value-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <strong>Ethical Safeguarding:</strong> Uncompromising protection of child rights, vulnerable adults, and persons with physical or psychosocial disabilities.
                </div>
              </div>
              <div class="gasvs-value-item">
                <div class="gasvs-value-icon">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <div>
                  <strong>Sustainable Capacity Retention:</strong> We train and transfer skills to local residents so positive change endures long after volunteer tenures.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="gasvs-overview-visual-card">
            <div class="gasvs-overview-img-wrap">
              <img src="<?php echo esc_url( $img_shramdaan ); ?>" alt="Community members and volunteers engaged in watershed Shramdaan and check-dam construction in rural Madhya Pradesh" loading="lazy" class="gasvs-overview-img">
              <div class="gasvs-overview-tag">
                <span class="gasvs-tag-pulse"></span>
                <span>Community Shramdaan in Action</span>
              </div>
            </div>
            <div class="gasvs-overview-card-caption">
              <h4>Collective Community Action (Shramdaan)</h4>
              <p>Villagers, youths, and GASVS volunteers joining hands for soil conservation, check-dam restoration, and public health campaigns in Sausar &amp; Pandhurna blocks.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. FOUR CORE VOLUNTEER & ENGAGEMENT PATHWAYS
       ========================================================================= -->
  <section class="gasvs-section gasvs-volunteer-pathways-section" id="volunteer-pathways">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Ways to Contribute</span>
        <h2 class="gasvs-section-title">Explore Our Core Volunteer &amp; Fellowship Pathways</h2>
        <p class="gasvs-section-subtitle">
          Whether you are a college student, an experienced doctor, a mental health professional, an educator, or a digital advocate, there is a dedicated pathway for your talents.
        </p>
      </div>

      <div class="gasvs-pathways-grid">

        <!-- Pathway 1: Community Action & Youth Leadership -->
        <article class="gasvs-pathway-card">
          <div class="gasvs-pathway-media">
            <img src="<?php echo esc_url( $img_cleanliness ); ?>" alt="GASVS field team and local volunteers conducting a Swachhata cleanliness drive in a rural tribal village" loading="lazy" class="gasvs-pathway-img">
            <span class="gasvs-pathway-badge">Field Immersion</span>
          </div>
          <div class="gasvs-pathway-content">
            <h3 class="gasvs-pathway-title">Community Action &amp; Environmental Stewardship</h3>
            <p class="gasvs-pathway-desc">
              Work on the ground alongside village panchayats and youth groups on tree plantation drives, watershed conservation, public sanitation (Swachhata Shramdaan), and adolescent leadership workshops through the SRIJAN initiative in partnership with district stakeholders.
            </p>
            <div class="gasvs-pathway-tags">
              <span class="gasvs-pill-tag">Swachhata Drives</span>
              <span class="gasvs-pill-tag">Tree Plantation</span>
              <span class="gasvs-pill-tag">SRIJAN Youth</span>
              <span class="gasvs-pill-tag">Soil Conservation</span>
            </div>
            <div class="gasvs-pathway-action">
              <a href="#volunteer-signup" class="gasvs-pathway-link">
                <span>Apply for Field Volunteering</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- Pathway 2: Healthcare & Professional Support -->
        <article class="gasvs-pathway-card">
          <div class="gasvs-pathway-media">
            <img src="<?php echo esc_url( $img_doctor_camp ); ?>" alt="Specialist doctor providing free vision examination and medical screening at a GASVS rural healthcare camp" loading="lazy" class="gasvs-pathway-img">
            <span class="gasvs-pathway-badge">Specialized Clinical</span>
          </div>
          <div class="gasvs-pathway-content">
            <h3 class="gasvs-pathway-title">Healthcare &amp; Mental Health Professional Support</h3>
            <p class="gasvs-pathway-desc">
              Qualified psychiatrists, clinical psychologists, general physicians, occupational therapists, and public health researchers provide diagnostic camps, treatment linkages, and clinical capacity-building for frontline ASHA workers and community caregivers.
            </p>
            <div class="gasvs-pathway-tags">
              <span class="gasvs-pill-tag">Psychiatric Care</span>
              <span class="gasvs-pill-tag">Eye &amp; Health Camps</span>
              <span class="gasvs-pill-tag">NALAM Follow-ups</span>
              <span class="gasvs-pill-tag">Worker Training</span>
            </div>
            <div class="gasvs-pathway-action">
              <a href="#volunteer-signup" class="gasvs-pathway-link">
                <span>Offer Professional Support</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- Pathway 3: Pre-School Nutrition & Tribal Child Mentorship -->
        <article class="gasvs-pathway-card">
          <div class="gasvs-pathway-media">
            <img src="<?php echo esc_url( $img_preprimary ); ?>" alt="Pre-primary tribal school children receiving nutritious meals, early learning materials, and joyful education from GASVS teachers" loading="lazy" class="gasvs-pathway-img">
            <span class="gasvs-pathway-badge">Education &amp; Nutrition</span>
          </div>
          <div class="gasvs-pathway-content">
            <h3 class="gasvs-pathway-title">Pre-School Education &amp; Child Nutrition Mentorship</h3>
            <p class="gasvs-pathway-desc">
              Help nurture early childhood development in remote tribal hamlets. Volunteers conduct foundational literacy sessions, interactive storytelling, creative arts, and support daily hot nutritious meal distributions ensuring children arrive healthy and prepared for primary schooling.
            </p>
            <div class="gasvs-pathway-tags">
              <span class="gasvs-pill-tag">Early Literacy</span>
              <span class="gasvs-pill-tag">Tribal Schools</span>
              <span class="gasvs-pill-tag">Child Nutrition</span>
              <span class="gasvs-pill-tag">Creative Learning</span>
            </div>
            <div class="gasvs-pathway-action">
              <a href="#volunteer-signup" class="gasvs-pathway-link">
                <span>Mentor Tribal Children</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </div>
        </article>

        <!-- Pathway 4: Anti-Stigma Arts, Advocacy & Storytelling -->
        <article class="gasvs-pathway-card">
          <div class="gasvs-pathway-media">
            <img src="<?php echo esc_url( $img_street_theatre ); ?>" alt="GASVS community youth staging an anti-stigma street theatre (Nukkad Natak) performance in a crowded village square" loading="lazy" class="gasvs-pathway-img">
            <span class="gasvs-pathway-badge">Arts &amp; Media</span>
          </div>
          <div class="gasvs-pathway-content">
            <h3 class="gasvs-pathway-title">Street Theatre, Legal Literacy &amp; Digital Storytelling</h3>
            <p class="gasvs-pathway-desc">
              Deploy creative arts and communications to break taboos. Join rural Nukkad Natak (street theatre) troupes addressing mental health stigma, participate in child marriage prevention legal literacy workshops (supported by Kailash Satyarthi Foundation), or document field stories of change.
            </p>
            <div class="gasvs-pathway-tags">
              <span class="gasvs-pill-tag">Nukkad Natak</span>
              <span class="gasvs-pill-tag">Stigma Reduction</span>
              <span class="gasvs-pill-tag">Child Rights</span>
              <span class="gasvs-pill-tag">Field Documentation</span>
            </div>
            <div class="gasvs-pathway-action">
              <a href="#volunteer-signup" class="gasvs-pathway-link">
                <span>Join Advocacy &amp; Arts</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
              </a>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. THE 4-STEP VOLUNTEER JOURNEY
       ========================================================================= -->
  <section class="gasvs-section gasvs-volunteer-steps-section" id="volunteer-process">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">How It Works</span>
        <h2 class="gasvs-section-title">Your 4-Step Journey as a GASVS Volunteer</h2>
        <p class="gasvs-section-subtitle">
          We maintain a structured, ethical, and supportive onboarding process to ensure volunteers are safe, well-guided, and directly aligned with genuine grassroots priorities.
        </p>
      </div>

      <div class="gasvs-steps-grid">

        <div class="gasvs-step-card">
          <div class="gasvs-step-num">01</div>
          <h4 class="gasvs-step-title">Express Your Interest</h4>
          <p class="gasvs-step-desc">
            Submit the official Volunteer Sign-Up Form below indicating your background, skills, availability, and preferred focus areas (field, clinical, or remote).
          </p>
        </div>

        <div class="gasvs-step-card">
          <div class="gasvs-step-num">02</div>
          <h4 class="gasvs-step-title">Consultation &amp; Matching</h4>
          <p class="gasvs-step-desc">
            Our programme coordinators hold a brief telephone or video discussion to review your interests and match your strengths with active community projects.
          </p>
        </div>

        <div class="gasvs-step-card">
          <div class="gasvs-step-num">03</div>
          <h4 class="gasvs-step-title">Orientation &amp; Ethics</h4>
          <p class="gasvs-step-desc">
            Receive dedicated briefing on community culture, local languages, rural safety protocols, Do No Harm principles, and ethical child/disability safeguarding.
          </p>
        </div>

        <div class="gasvs-step-card">
          <div class="gasvs-step-num">04</div>
          <h4 class="gasvs-step-title">Action &amp; Certification</h4>
          <p class="gasvs-step-desc">
            Work alongside experienced GASVS community mobilizers, creating verifiable impact. Upon completion, receive an official institutional Certificate of Volunteering.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. INTERACTIVE VOLUNTEER SIGN-UP FORM & DIRECT CONTACT
       ========================================================================= -->
  <section class="gasvs-section gasvs-volunteer-form-section" id="volunteer-signup">
    <div class="gasvs-container">
      <div class="row">

        <!-- Left Column: Why Volunteer & Contact Details -->
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="gasvs-volunteer-info-card">
            <span class="gasvs-kicker">Take the First Step</span>
            <h2 class="gasvs-section-title">Ready to Make a Concrete Difference?</h2>
            <p class="gasvs-info-lead">
              Every hour you give helps a child receive better nutrition, a person with disabilities secure rights, a family overcome mental health stigma, or a rural woman lead an independent livelihood.
            </p>

            <div class="gasvs-perks-box">
              <h4 class="gasvs-perks-heading">What We Offer Our Volunteers:</h4>
              <ul class="gasvs-perks-list">
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                  <span><strong>Grassroots Immersion:</strong> Real hands-on experience in rural and tribal central India.</span>
                </li>
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                  <span><strong>Expert Mentorship:</strong> Direct guidance from senior social workers, psychologists, and development practitioners.</span>
                </li>
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                  <span><strong>Official Verification:</strong> Institutional Certificate of Contribution highlighting projects and logged hours.</span>
                </li>
                <li>
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                  <span><strong>Safe &amp; Inclusive Setting:</strong> Supportive team culture respecting all backgrounds and abilities.</span>
                </li>
              </ul>
            </div>

            <!-- Direct Contact Block -->
            <div class="gasvs-direct-contact-block">
              <h5 class="gasvs-direct-heading">Head Office &amp; Volunteer Coordination</h5>
              
              <div class="gasvs-direct-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Vivekanand Colony, Belgaon, Sausar, District Pandhurna, Madhya Pradesh – 480106</span>
              </div>

              <div class="gasvs-direct-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:+919823224640">+91 9823224640</a>
              </div>

              <div class="gasvs-direct-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:info@gasvs.org">info@gasvs.org</a>
              </div>

              <div class="gasvs-direct-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>Office Hours: Monday – Saturday, 9:30 AM – 6:00 PM IST</span>
              </div>
            </div>

          </div>
        </div>

        <!-- Right Column: Interactive Volunteer Sign-Up Form -->
        <div class="col-lg-7">
          <div class="gasvs-form-wrapper gasvs-volunteer-form-card">
            <div class="gasvs-form-header">
              <span class="gasvs-form-badge">Volunteer Sign-Up Form</span>
              <h3 class="gasvs-form-heading">Register Your Interest</h3>
              <p class="gasvs-form-sub">
                Fill out the form below. Our coordination team will review your details and contact you within 2 working days.
              </p>
            </div>

            <?php 
              // Execute the authentic Contact Form 7 shortcode configured for Volunteer Opportunities (ID 911 / 413e465)
              $cf7_rendered = false;
              if ( function_exists( 'do_shortcode' ) ) {
                $cf7_output = do_shortcode( '[contact-form-7 id="911" title="Volunteer Opportunities"]' );
                if ( empty( $cf7_output ) || strpos( $cf7_output, '[contact-form-7' ) !== false ) {
                  $cf7_output = do_shortcode( '[contact-form-7 id="413e465" title="Volunteer Opportunities"]' );
                }
                if ( ! empty( $cf7_output ) && strpos( $cf7_output, '[contact-form-7' ) === false ) {
                  echo $cf7_output;
                  $cf7_rendered = true;
                }
              }

              // Fallback markup matching exact CF7 field specifications if plugin is inactive or rendering in offline preview
              if ( ! $cf7_rendered ) : 
            ?>
              <form action="<?php echo esc_url( home_url( '/volunteer-opportunities/' ) ); ?>#wpcf7-f911-p903-o1" method="post" class="wpcf7-form init" aria-label="Volunteer Opportunities Form">
                <div class="form-area">
                  <div class="row">
                    
                    <div class="col-12 mb-3">
                      <label for="volunteer-name" class="gasvs-field-label">Full Name <span class="gasvs-req">*</span></label>
                      <span class="wpcf7-form-control-wrap" data-name="your-name">
                        <input id="volunteer-name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="Enter your full name" value="" type="text" name="your-name" required />
                      </span>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="volunteer-email" class="gasvs-field-label">Email Address <span class="gasvs-req">*</span></label>
                      <span class="wpcf7-form-control-wrap" data-name="your-email">
                        <input id="volunteer-email" size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" placeholder="Enter your active email" value="" type="email" name="your-email" required />
                      </span>
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="volunteer-phone" class="gasvs-field-label">Phone Number <span class="gasvs-req">*</span></label>
                      <span class="wpcf7-form-control-wrap" data-name="your-number">
                        <input id="volunteer-phone" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="Enter 10-digit mobile number" value="" type="text" name="your-number" required />
                      </span>
                    </div>

                    <div class="col-12 mb-3">
                      <label for="volunteer-association" class="gasvs-field-label">How Would You Like to Be Associated with Us? <span class="gasvs-req">*</span></label>
                      <span class="wpcf7-form-control-wrap" data-name="your-number">
                        <input id="volunteer-association" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="e.g. Field Volunteer, Mental Health Doctor, Youth Mentor, Digital Storytelling, CSR Partner" value="" type="text" name="your-number" required />
                      </span>
                    </div>

                    <div class="col-12 mb-4">
                      <p class="gasvs-form-consent">
                        <small>By submitting this form, you consent to GASVS contacting you regarding volunteer opportunities and community initiatives. Your data will never be shared with third parties.</small>
                      </p>
                    </div>

                    <div class="col-12">
                      <p>
                        <input class="wpcf7-form-control wpcf7-submit gasvs-btn-submit" type="submit" value="Submit Volunteer Application" />
                      </p>
                    </div>

                  </div>
                </div>
              </form>
            <?php endif; ?>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       6. FREQUENTLY ASKED QUESTIONS (FAQ)
       ========================================================================= -->
  <section class="gasvs-section gasvs-volunteer-faq-section" id="volunteer-faq">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-kicker">Helpful Answers</span>
        <h2 class="gasvs-section-title">Frequently Asked Questions</h2>
        <p class="gasvs-section-subtitle">
          Everything you need to know about volunteering, field locations, ethical guidelines, and time commitments with GASVS.
        </p>
      </div>

      <div class="gasvs-faq-grid">

        <div class="gasvs-faq-card">
          <h4 class="gasvs-faq-question">Who is eligible to volunteer with GASVS?</h4>
          <p class="gasvs-faq-answer">
            Anyone aged 18 or above with a sincere passion for community inclusion, equity, and human dignity. We welcome undergraduate and postgraduate students, medical professionals, psychiatrists, researchers, social work scholars, working professionals, and retirees.
          </p>
        </div>

        <div class="gasvs-faq-card">
          <h4 class="gasvs-faq-question">Can I contribute remotely or part-time?</h4>
          <p class="gasvs-faq-answer">
            Yes. While on-ground community interaction offers unparalleled immersion, we regularly have remote opportunities in research, grant documentation, translation (Hindi/English/Marathi), graphic design, digital advocacy, and institutional communications.
          </p>
        </div>

        <div class="gasvs-faq-card">
          <h4 class="gasvs-faq-question">Where are field volunteer activities located?</h4>
          <p class="gasvs-faq-answer">
            Our active field interventions are centered in Pandhurna and Sausar blocks in Madhya Pradesh, extending to Betul, Chhindwara, Indore (Home Again), and Nagpur and Wardha districts in Maharashtra. Exact placement depends on current project needs and volunteer preferences.
          </p>
        </div>

        <div class="gasvs-faq-card">
          <h4 class="gasvs-faq-question">What is the expected time commitment?</h4>
          <p class="gasvs-faq-answer">
            Commitments are flexible: from short-term weekend community drives and 2-to-4-week winter/summer social work internships, to extended 3-to-6-month fellowships. We ask that volunteers uphold whatever schedule they commit to out of respect for community schedules.
          </p>
        </div>

        <div class="gasvs-faq-card">
          <h4 class="gasvs-faq-question">Does GASVS provide a certificate upon completion?</h4>
          <p class="gasvs-faq-answer">
            Yes. Volunteers who complete their agreed role with sincerity receive a formal Certificate of Volunteering from GASVS, detailing their programmatic contributions, hours invested, and key milestones achieved.
          </p>
        </div>

        <div class="gasvs-faq-card">
          <h4 class="gasvs-faq-question">What ethical guidelines do volunteers follow?</h4>
          <p class="gasvs-faq-answer">
            Volunteers are required to uphold our strict child safeguarding, mental health privacy, and gender sensitivity guidelines. Taking photographs of children or beneficiaries without explicit institutional and parental consent is strictly prohibited.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       7. STATUTORY GOVERNANCE & TAX COMPLIANCE STRIP (100% FACTUAL)
       ========================================================================= -->
  <section class="gasvs-volunteer-compliance-strip" id="volunteer-compliance">
    <div class="gasvs-container">
      <div class="gasvs-compliance-inner">
        <div class="gasvs-compliance-text">
          <div class="gasvs-compliance-badge">Statutory Accreditations</div>
          <h3 class="gasvs-compliance-title">Committed to Complete Institutional Transparency</h3>
          <p class="gasvs-compliance-desc">
            Gramin Adiwasi Samaj Vikas Sansthan (GASVS) is a legally verified not-for-profit society registered under the M.P. Society Registration Act of 1973 (Reg. No. M.P. – 25307). All donations to GASVS are eligible for 50% tax deduction under Section 80G and Section 12A of the Income Tax Act. Registered with NITI Aayog NGO Darpan and Ministry of Corporate Affairs for CSR (CSR-1). Approved for foreign philanthropic contributions under the Foreign Contribution Regulation Act (FCRA).
          </p>
        </div>
        <div class="gasvs-compliance-cta">
          <a href="<?php echo esc_url( home_url( '/reports-and-publications/' ) ); ?>" class="gasvs-btn-outline-white">
            <span>View Institutional Disclosures</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
