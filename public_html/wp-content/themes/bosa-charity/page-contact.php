<?php
/**
 * Modern Contact Page Template for GASVS
 * Gramin Adiwasi Samaj Vikas Sansthan
 * 
 * Template Name: Modern Contact Page
 * Strictly scoped to the Contact page (slug: contact / ID 79).
 * Preserves all WordPress header, footer, backend compatibility, and contact forms.
 * Strictly complies with the Zero Dummy / Fake Data policy and Anti-Duplication Image rule in AGENTS.md.
 *
 * @package Bosa Charity
 */

get_header();

// Authentic field photo for community leadership / office presence (Distinct file)
$img_team_field = home_url( '/wp-content/uploads/gasvs_images/disability/disability_08_team_entitlements.jpg' );
?>

<main id="gasvs-main-content" class="gasvs-contact-modern" role="main">

  <!-- =========================================================================
       1. HERO HEADER / BANNER
       ========================================================================= -->
  <header class="gasvs-contact-hero" id="contact-hero">
    <div class="gasvs-hero-glow"></div>
    <div class="gasvs-container">
      <div class="gasvs-contact-hero-inner">

        <!-- Breadcrumb Navigation -->
        <nav class="gasvs-breadcrumb-nav" aria-label="Breadcrumb">
          <ol class="gasvs-breadcrumbs">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="gasvs-sep" aria-hidden="true">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </li>
            <li class="gasvs-current" aria-current="page">Contact Us</li>
          </ol>
        </nav>

        <!-- Kicker Badge -->
        <div class="gasvs-badge-pill">
          <span class="gasvs-badge-dot"></span>
          <span>Gramin Adiwasi Samaj Vikas Sansthan · Est. 1991</span>
        </div>

        <!-- Majestic Title -->
        <h1 class="gasvs-contact-hero-title">
          Connect with <span class="gasvs-text-gradient">GASVS</span>
        </h1>

        <!-- Subtitle -->
        <p class="gasvs-contact-hero-lead">
          Building inclusive, resilient communities through authentic grassroots partnership. Whether you represent an institutional partner, public health department, CSR foundation, volunteer, or a community member seeking guidance—our team in Sausar is here to connect.
        </p>

        <!-- Trust Stats Strip -->
        <div class="gasvs-contact-hero-stats">
          <div class="gasvs-contact-stat-item">
            <span class="gasvs-stat-num">Sausar</span>
            <span class="gasvs-stat-lbl">Registered Head Office</span>
          </div>
          <div class="gasvs-contact-stat-item">
            <span class="gasvs-stat-num">37+ Years</span>
            <span class="gasvs-stat-lbl">Grassroots Experience</span>
          </div>
          <div class="gasvs-contact-stat-item">
            <span class="gasvs-stat-num">24–48 Hrs</span>
            <span class="gasvs-stat-lbl">Typical Response Time</span>
          </div>
          <div class="gasvs-contact-stat-item">
            <span class="gasvs-stat-num">12A &amp; 80G</span>
            <span class="gasvs-stat-lbl">Certified Tax-Exempt NGO</span>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- =========================================================================
       2. PRIMARY CONTACT INFORMATION & INTERACTIVE INQUIRY FORM
       ========================================================================= -->
  <section class="gasvs-section gasvs-contact-main-section" id="contact-details">
    <div class="gasvs-container">
      <div class="gasvs-contact-main-grid">

        <!-- Left Column: Official Contact Channels & Registered Entity -->
        <div class="gasvs-contact-channels-col">

          <div class="gasvs-section-header-compact">
            <span class="gasvs-sub-badge">Official Channels</span>
            <h2 class="gasvs-compact-title">Registered Office &amp; Direct Communication</h2>
            <p class="gasvs-compact-desc">
              Connect with our administrative headquarters and program leadership in Sausar, Pandhurna district.
            </p>
          </div>

          <!-- Head Office Address Card -->
          <div class="gasvs-office-card">
            <div class="gasvs-office-card-header">
              <div class="gasvs-office-icon-wrap">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              </div>
              <div class="gasvs-office-meta">
                <span class="gasvs-office-tag">Registered Headquarters</span>
                <h3 class="gasvs-office-name">Gramin Adiwasi Samaj Vikas Sansthan</h3>
              </div>
            </div>

            <div class="gasvs-office-body">
              <p class="gasvs-office-address">
                <strong>Address:</strong> Vivekanand Colony, Belgaon, Sausar, District Pandhurna, Madhya Pradesh, India – 480106
              </p>
              <p class="gasvs-office-landmark">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span><strong>Working Hours:</strong> Monday – Saturday: 9:30 AM – 6:00 PM IST (Sunday: Closed / Field Emergency Support on call)</span>
              </p>
            </div>

            <div class="gasvs-office-quick-actions">
              <a href="https://maps.google.com/?q=Gramin+Adivasi+Samaj+Vikas+Sansthan+Sausar+Madhya+Pradesh" target="_blank" rel="noopener noreferrer" class="gasvs-btn-sm gasvs-btn-outline-primary">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                <span>Get Directions</span>
              </a>
              <a href="tel:+919823224640" class="gasvs-btn-sm gasvs-btn-primary">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <span>Call Sausar Office</span>
              </a>
            </div>
          </div>

          <!-- Direct Communication Channels Grid -->
          <div class="gasvs-channels-grid">
            
            <!-- Phone Channel -->
            <a href="tel:+919823224640" class="gasvs-channel-card">
              <div class="gasvs-channel-icon-box">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              </div>
              <div class="gasvs-channel-text">
                <span class="gasvs-channel-label">Telephone / Voice Inquiries</span>
                <span class="gasvs-channel-value">+91 9823224640</span>
                <span class="gasvs-channel-sub">Administration &amp; Programs Desk</span>
              </div>
            </a>

            <!-- Email Channel -->
            <a href="mailto:info@gasvs.org" class="gasvs-channel-card">
              <div class="gasvs-channel-icon-box">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              </div>
              <div class="gasvs-channel-text">
                <span class="gasvs-channel-label">Official Email Address</span>
                <span class="gasvs-channel-value">info@gasvs.org</span>
                <span class="gasvs-channel-sub">Official Correspondence &amp; Inquiries</span>
              </div>
            </a>

            <!-- Web Channel -->
            <a href="https://gasvs.org" class="gasvs-channel-card">
              <div class="gasvs-channel-icon-box">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              </div>
              <div class="gasvs-channel-text">
                <span class="gasvs-channel-label">Official Portal</span>
                <span class="gasvs-channel-value">www.gasvs.org</span>
                <span class="gasvs-channel-sub">Verified Impact &amp; Program Information</span>
              </div>
            </a>

            <!-- Official YouTube Channel -->
            <a href="https://youtube.com/@gasvs?si=Iz3apoZbghmcgDP4" target="_blank" rel="noopener noreferrer" class="gasvs-channel-card">
              <div class="gasvs-channel-icon-box" style="color: #FF0000; background: rgba(255, 0, 0, 0.08);">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>
              </div>
              <div class="gasvs-channel-text">
                <span class="gasvs-channel-label">Official YouTube Channel</span>
                <span class="gasvs-channel-value">@gasvs</span>
                <span class="gasvs-channel-sub">Documentaries, Field Stories &amp; Awareness</span>
              </div>
            </a>

            <!-- Executive Leadership -->
            <div class="gasvs-channel-card gasvs-leadership-card">
              <div class="gasvs-channel-icon-box">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div class="gasvs-channel-text">
                <span class="gasvs-channel-label">Chief Executive Officer (CEO)</span>
                <span class="gasvs-channel-value">Mr. Vijay Dhawle</span>
                <span class="gasvs-channel-sub">Governing Board: Mrs. Sanjivni Thakre (President)</span>
              </div>
            </div>

          </div>

          <!-- Specific Inquiry Domains -->
          <div class="gasvs-domains-box">
            <h4 class="gasvs-domains-title">Departmental Inquiries &amp; Engagement</h4>
            <div class="gasvs-domains-list">
              <div class="gasvs-domain-item">
                <div class="gasvs-domain-bullet">1</div>
                <div class="gasvs-domain-content">
                  <strong>Partnerships &amp; CSR Collaboration:</strong>
                  <span>Co-designing scalable health, disability rights, and livelihood programs with institutional donors and public departments.</span>
                </div>
              </div>
              <div class="gasvs-domain-item">
                <div class="gasvs-domain-bullet">2</div>
                <div class="gasvs-domain-content">
                  <strong>Volunteering &amp; Professional Exchange:</strong>
                  <span>Opportunities for psychiatrists, clinical social workers, therapists, and vocational trainers to contribute field expertise.</span>
                </div>
              </div>
              <div class="gasvs-domain-item">
                <div class="gasvs-domain-bullet">3</div>
                <div class="gasvs-domain-content">
                  <strong>Statutory Reports &amp; Due Diligence:</strong>
                  <span>Official audited financial balance sheets, 12A, 80G, FCRA, CSR-1, and annual reports are provided upon formal request.</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Authentic Field Leadership Photo -->
          <div class="gasvs-team-media-card">
            <div class="gasvs-team-media-frame">
              <img 
                src="<?php echo esc_url( $img_team_field ); ?>" 
                alt="GASVS field coordinators and community leadership in Pandhurna district" 
                class="gasvs-team-img"
                loading="lazy"
              />
            </div>
            <div class="gasvs-team-media-caption">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              <span>GASVS field coordinators, community social workers, and disability champions in Pandhurna district.</span>
            </div>
          </div>

        </div>

        <!-- Right Column: Interactive Inquiry Form -->
        <div class="gasvs-contact-form-col">
          <div class="gasvs-form-card">

            <div class="gasvs-form-card-header">
              <span class="gasvs-form-badge">Online Inquiry Desk</span>
              <h2 class="gasvs-form-title">Send Us a Message</h2>
              <p class="gasvs-form-subtitle">
                Please provide your details below. Our administrative team will review your inquiry and respond within 24 to 48 business hours.
              </p>
            </div>

            <!-- Form Container -->
            <div class="gasvs-form-body">
              <?php
              $cf7_rendered = false;
              if ( function_exists( 'shortcode_exists' ) && shortcode_exists( 'contact-form-7' ) ) {
                $cf7_output = do_shortcode( '[contact-form-7 id="66" title="home-contact"]' );
                if ( ! empty( $cf7_output ) && strpos( $cf7_output, '[contact-form-7' ) === false ) {
                  echo $cf7_output;
                  $cf7_rendered = true;
                }
              }

              // Resilient, semantic form fallback matching Contact Form 7 field specifications
              if ( ! $cf7_rendered ) :
              ?>
                <form action="<?php echo esc_url( home_url( '/contact/' ) ); ?>" method="post" class="gasvs-inquiry-form" novalidate>
                  
                  <div class="gasvs-form-group-row">
                    <div class="gasvs-form-group">
                      <label for="your-name" class="gasvs-form-label">Full Name <span class="gasvs-required">*</span></label>
                      <input type="text" id="your-name" name="your-name" class="gasvs-form-input" placeholder="e.g. Ramesh Verma" required>
                    </div>

                    <div class="gasvs-form-group">
                      <label for="your-email" class="gasvs-form-label">Email Address <span class="gasvs-required">*</span></label>
                      <input type="email" id="your-email" name="your-email" class="gasvs-form-input" placeholder="e.g. ramesh@example.org" required>
                    </div>
                  </div>

                  <div class="gasvs-form-group-row">
                    <div class="gasvs-form-group">
                      <label for="your-number" class="gasvs-form-label">Phone Number <span class="gasvs-optional">(Optional)</span></label>
                      <input type="tel" id="your-number" name="your-number" class="gasvs-form-input" placeholder="+91 98765 43210">
                    </div>

                    <div class="gasvs-form-group">
                      <label for="your-subject" class="gasvs-form-label">Subject / Area of Interest <span class="gasvs-required">*</span></label>
                      <select id="your-subject" name="your-subject" class="gasvs-form-select" required>
                        <option value="" disabled selected>Select an inquiry area...</option>
                        <option value="Partnership &amp; CSR Collaboration">Partnership &amp; CSR Collaboration</option>
                        <option value="Community Mental Health Inquiry">Community Mental Health Inquiry</option>
                        <option value="Disability Inclusion &amp; Entitlements">Disability Inclusion &amp; Entitlements</option>
                        <option value="Livelihoods &amp; Pashu Sakhi">Livelihoods &amp; Pashu Sakhi</option>
                        <option value="Volunteering &amp; Professional Support">Volunteering &amp; Professional Support</option>
                        <option value="Statutory Reports &amp; Compliance Request">Statutory Reports &amp; Compliance Request</option>
                        <option value="General Community Inquiry">General Community Inquiry</option>
                      </select>
                    </div>
                  </div>

                  <div class="gasvs-form-group">
                    <label for="your-message" class="gasvs-form-label">Your Message <span class="gasvs-required">*</span></label>
                    <textarea id="your-message" name="your-message" rows="5" class="gasvs-form-textarea" placeholder="Please describe how we can assist you or details of your proposed collaboration..." required></textarea>
                  </div>

                  <div class="gasvs-form-privacy-note">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    <span>We treat your information with complete confidentiality. Details are never shared with third parties.</span>
                  </div>

                  <div class="gasvs-form-submit-row">
                    <button type="submit" class="gasvs-btn-primary gasvs-btn-submit">
                      <span>Send Message</span>
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                  </div>

                </form>
              <?php endif; ?>
            </div>

            <!-- Tax & Trust Assurance Footnote -->
            <div class="gasvs-form-card-footer">
              <div class="gasvs-trust-check">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Section 80G Certified: 50% Tax Exemption on Eligible Donations</span>
              </div>
              <div class="gasvs-trust-check">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                <span>Registered Society: M.P. – 25307 · PAN: AAATG5607K</span>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       3. GEOGRAPHIC SCOPE & REGIONAL FIELD PRESENCE
       ========================================================================= -->
  <section class="gasvs-section gasvs-presence-section" id="operational-geography">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-sub-badge">Regional Presence</span>
        <h2 class="gasvs-section-title">Where We Work</h2>
        <p class="gasvs-section-lead">
          Operating across central India to deliver comprehensive mental health care, disability inclusion, and sustainable livelihoods directly into rural and tribal hamlets.
        </p>
      </div>

      <div class="gasvs-presence-grid">

        <!-- Card 1: Madhya Pradesh -->
        <div class="gasvs-presence-card">
          <div class="gasvs-presence-badge">Primary State</div>
          <div class="gasvs-presence-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </div>
          <h3 class="gasvs-presence-state">Madhya Pradesh</h3>
          <p class="gasvs-presence-role">Foundational Grassroots Footprint &amp; Headquarters</p>
          
          <ul class="gasvs-presence-list">
            <li>
              <strong>Pandhurna District:</strong>
              <span>Sausar (Head Office, CBR center, livelihood units) &amp; Pandhurna blocks.</span>
            </li>
            <li>
              <strong>Chhindwara District:</strong>
              <span>Bichhua &amp; Junnardeo blocks (Community Mental Health, Pashu Sakhi, Solar clean energy).</span>
            </li>
            <li>
              <strong>Betul District:</strong>
              <span>Betul &amp; Multai blocks (Community Mental Health outreach &amp; caregiver networks).</span>
            </li>
            <li>
              <strong>Indore:</strong>
              <span>Home Again supportive community living homes for women with psychosocial disabilities.</span>
            </li>
          </ul>
        </div>

        <!-- Card 2: Maharashtra -->
        <div class="gasvs-presence-card">
          <div class="gasvs-presence-badge">Public System Partner</div>
          <div class="gasvs-presence-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="gasvs-presence-state">Maharashtra</h3>
          <p class="gasvs-presence-role">Public Health &amp; DMHP Collaborative Outreach</p>
          
          <ul class="gasvs-presence-list">
            <li>
              <strong>Nagpur District:</strong>
              <span>Project UDAAN in coordination with District Mental Health Programme &amp; Regional Mental Hospital Nagpur.</span>
            </li>
            <li>
              <strong>Wardha District:</strong>
              <span>Community mental health capacity building, ASHA frontline worker training, and follow-up continuity care.</span>
            </li>
            <li>
              <strong>Institutional Coordination:</strong>
              <span>Active collaboration with Public Health Department (Maharashtra) and National Health Mission (NHM).</span>
            </li>
          </ul>
        </div>

        <!-- Card 3: Chhattisgarh -->
        <div class="gasvs-presence-card">
          <div class="gasvs-presence-badge">Tribal Outreach</div>
          <div class="gasvs-presence-icon-wrap">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/></svg>
          </div>
          <h3 class="gasvs-presence-state">Chhattisgarh</h3>
          <p class="gasvs-presence-role">Marginalized &amp; Tribal Community Programs</p>
          
          <ul class="gasvs-presence-list">
            <li>
              <strong>Sukma District:</strong>
              <span>Community-level interventions, awareness campaigns, and capacity building for marginalized tribal families.</span>
            </li>
            <li>
              <strong>Vulnerability Focus:</strong>
              <span>Bridging access to basic welfare entitlements, nutritional knowledge, and healthcare facilitation.</span>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- =========================================================================
       4. VISITOR & TRAVEL DIRECTIONS GUIDE
       ========================================================================= -->
  <section class="gasvs-section gasvs-directions-section" id="how-to-reach">
    <div class="gasvs-container">

      <div class="gasvs-section-header text-center">
        <span class="gasvs-sub-badge">Directions &amp; Logistics</span>
        <h2 class="gasvs-section-title">How to Reach Our Head Office</h2>
        <p class="gasvs-section-lead">
          Our headquarters in Sausar, Pandhurna district, is readily accessible by road, rail, and air from major transit hubs.
        </p>
      </div>

      <div class="gasvs-directions-grid">

        <!-- By Road -->
        <div class="gasvs-direction-card">
          <div class="gasvs-direction-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
          </div>
          <h3 class="gasvs-direction-title">By Road (NH-547)</h3>
          <p class="gasvs-direction-body">
            Sausar is situated directly along National Highway 547 connecting Nagpur and Chhindwara.
          </p>
          <div class="gasvs-direction-details">
            <div class="gasvs-direction-distance">
              <span>From Nagpur:</span>
              <strong>~70 km (Approx. 1.5 hrs)</strong>
            </div>
            <div class="gasvs-direction-distance">
              <span>From Chhindwara:</span>
              <strong>~55 km (Approx. 1 hr)</strong>
            </div>
          </div>
          <p class="gasvs-direction-note">Frequent state transport and private buses, as well as shared and private taxis, operate throughout the day.</p>
        </div>

        <!-- By Rail -->
        <div class="gasvs-direction-card">
          <div class="gasvs-direction-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="16" rx="2"/><path d="M4 11h16"/><path d="M12 3v8"/><path d="m8 19-2 3"/><path d="m18 22-2-3"/><circle cx="8" cy="15" r="1"/><circle cx="16" cy="15" r="1"/></svg>
          </div>
          <h3 class="gasvs-direction-title">By Rail</h3>
          <p class="gasvs-direction-body">
            Connected via Sausar Railway Station (SASR) and Nagpur Junction (NGP).
          </p>
          <div class="gasvs-direction-details">
            <div class="gasvs-direction-distance">
              <span>Sausar Station (SASR):</span>
              <strong>~2 km to Office</strong>
            </div>
            <div class="gasvs-direction-distance">
              <span>Nagpur Junction (NGP):</span>
              <strong>~72 km to Office</strong>
            </div>
          </div>
          <p class="gasvs-direction-note">Nagpur Junction is a major national railway intersection with daily direct express and Rajdhani trains from all Indian metros.</p>
        </div>

        <!-- By Air -->
        <div class="gasvs-direction-card">
          <div class="gasvs-direction-icon">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>
          </div>
          <h3 class="gasvs-direction-title">By Air</h3>
          <p class="gasvs-direction-body">
            Served by Dr. Babasaheb Ambedkar International Airport in Nagpur (NAG).
          </p>
          <div class="gasvs-direction-details">
            <div class="gasvs-direction-distance">
              <span>Nagpur Airport (NAG):</span>
              <strong>~75 km to Office</strong>
            </div>
            <div class="gasvs-direction-distance">
              <span>Transit Time:</span>
              <strong>Approx. 1 hr 45 min</strong>
            </div>
          </div>
          <p class="gasvs-direction-note">Regular daily direct flights operate to Nagpur from Mumbai, New Delhi, Bengaluru, Hyderabad, Kolkata, and Pune.</p>
        </div>

      </div>

      <!-- Interactive Google Map Frame -->
      <div class="gasvs-map-card">
        <div class="gasvs-map-header">
          <div class="gasvs-map-title-wrap">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span class="gasvs-map-title">Interactive Location Map: Sausar Headquarters</span>
          </div>
          <a href="https://maps.google.com/?q=Gramin+Adivasi+Samaj+Vikas+Sansthan+Sausar+Madhya+Pradesh" target="_blank" rel="noopener noreferrer" class="gasvs-map-link">
            <span>Open in Google Maps</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          </a>
        </div>

        <div class="gasvs-map-embed-container">
          <iframe 
            src="https://maps.google.com/maps?q=Gramin%20Adivasi%20Samaj%20Vikas%20Sansthan%2C%20Vivekanand%20Colony%2C%20Belgaon%2C%20Sausar%2C%20Madhya%20Pradesh%20480106&t=m&z=15&output=embed&iwloc=near"
            title="Gramin Adivasi Samaj Vikas Sansthan Head Office Location Map"
            aria-label="Gramin Adivasi Samaj Vikas Sansthan Head Office Location Map"
            loading="lazy"
            allowfullscreen>
          </iframe>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       5. STATUTORY ACCREDITATIONS & TRANSPARENCY NOTICE
       ========================================================================= -->
  <section class="gasvs-section gasvs-compliance-section" id="statutory-accreditations">
    <div class="gasvs-container">
      
      <div class="gasvs-compliance-banner">
        <div class="gasvs-compliance-content">
          <span class="gasvs-compliance-pill">Legal &amp; Statutory Compliance</span>
          <h3 class="gasvs-compliance-title">Transparent Governance &amp; Official Accreditations</h3>
          <p class="gasvs-compliance-lead">
            Gramin Adiwasi Samaj Vikas Sansthan is a registered non-profit society operating with full statutory compliance under the laws of India. Official audited balance sheets, annual activity reports, and compliance records are maintained at our registered office and provided to donors, CSR partners, and regulatory authorities upon formal request.
          </p>

          <div class="gasvs-compliance-badges-grid">
            <div class="gasvs-cbadge-item">
              <span class="gasvs-cbadge-code">M.P. – 25307</span>
              <span class="gasvs-cbadge-label">M.P. Society Registration Act, 1973</span>
            </div>
            <div class="gasvs-cbadge-item">
              <span class="gasvs-cbadge-code">AAATG5607K</span>
              <span class="gasvs-cbadge-label">Permanent Account Number (PAN)</span>
            </div>
            <div class="gasvs-cbadge-item">
              <span class="gasvs-cbadge-code">Section 12A &amp; 80G</span>
              <span class="gasvs-cbadge-label">50% Tax Exemption on Eligible Donations</span>
            </div>
            <div class="gasvs-cbadge-item">
              <span class="gasvs-cbadge-code">FCRA Approved</span>
              <span class="gasvs-cbadge-label">Foreign Contribution Regulation Act</span>
            </div>
            <div class="gasvs-cbadge-item">
              <span class="gasvs-cbadge-code">CSR-1 Registered</span>
              <span class="gasvs-cbadge-label">Ministry of Corporate Affairs (MCA)</span>
            </div>
            <div class="gasvs-cbadge-item">
              <span class="gasvs-cbadge-code">NITI Aayog</span>
              <span class="gasvs-cbadge-label">NGO Darpan Verified Portal</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================================
       6. CLOSING COLLABORATIVE CTA SECTION
       ========================================================================= -->
  <section class="gasvs-section gasvs-contact-cta-section" id="collaborate-cta">
    <div class="gasvs-container">
      <div class="gasvs-cta-box text-center">

        <span class="gasvs-cta-badge">Join Our Mission</span>
        <h2 class="gasvs-cta-title">Partner with GASVS for Grassroots Transformation</h2>
        <p class="gasvs-cta-desc">
          Lasting community change begins with authentic partnership. Join hands with us as an institutional donor, CSR partner, technical volunteer, or resource collaborator.
        </p>

        <div class="gasvs-cta-actions">
          <a href="<?php echo esc_url( home_url( '/our-work/' ) ); ?>" class="gasvs-btn-primary">
            <span>Explore Our Programs</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/partners/' ) ); ?>" class="gasvs-btn-secondary">
            <span>Institutional Partnerships</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="tel:+919823224640" class="gasvs-btn-outline">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <span>Call +91 9823224640</span>
          </a>
        </div>

        <div class="gasvs-cta-compliance-meta">
          <span>✓ Registered Society: M.P. – 25307</span>
          <span>•</span>
          <span>✓ 12A &amp; 80G Certified</span>
          <span>•</span>
          <span>✓ FCRA Permitted</span>
          <span>•</span>
          <span>✓ CSR-1 Registered</span>
          <span>•</span>
          <span>✓ NITI Aayog Darpan</span>
        </div>

      </div>
    </div>
  </section>

</main>

<?php
get_footer();
