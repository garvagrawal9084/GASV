<?php
/**
 * SEO, Social Graph & Schema.org Structured Data Engine
 *
 * Implements high-impact on-page SEO, verified meta descriptions, Open Graph protocol,
 * Twitter Cards, canonical links, robots directives, and JSON-LD structured data for GASVS.
 * Strictly compliant with the Zero Dummy Data Policy.
 *
 * @package Bosa Charity
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Returns contextual SEO metadata for the current query/page.
 *
 * @return array
 */
function gasvs_get_seo_context() {
	$site_name = 'Gramin Adiwasi Samaj Vikas Sansthan (GASVS)';
	$base_url  = untrailingslashit( home_url() );
	$default_img = $base_url . '/wp-content/uploads/gasvs_images/home_hero/home_hero_01_empowering_rural_01.jpeg';
	$default_img_alt = 'Empowering Rural and Tribal Communities - Gramin Adiwasi Samaj Vikas Sansthan';

	// Default fallback (Front Page / Homepage)
	$meta = array(
		'title'       => 'GASVS | Rural Development & Mental Health NGO in MP',
		'description' => 'Since 1991, GASVS has empowered 19,328+ individuals through community mental health, disability inclusion, and sustainable livelihoods across Madhya Pradesh.',
		'canonical'   => $base_url . '/',
		'type'        => 'website',
		'image'       => $default_img,
		'image_alt'   => $default_img_alt,
		'section'     => '',
	);

	if ( is_front_page() || is_home() ) {
		return $meta;
	}

	// About Us
	if ( is_page( 'our-history-and-mission-our-approach' ) || is_page( 91 ) ) {
		$meta['title']       = 'About GASVS | Grassroots Mission & History Since 1991';
		$meta['description'] = 'Founded in 1991, GASVS is an accredited NGO (Reg. M.P. - 25307) advancing dignity, health equity, and rural empowerment across MP, Maharashtra & Chhattisgarh.';
		$meta['canonical']   = $base_url . '/our-history-and-mission-our-approach/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/home_hero/home_hero_01_empowering_rural_02.jpeg';
		$meta['image_alt']   = 'GASVS Grassroots Community Work and Leadership Assembly';
		$meta['section']     = 'About Us';
		return $meta;
	}

	// Awards & Recognition
	if ( is_page( 'awards-and-recognition' ) || is_page( 251 ) ) {
		$meta['title']       = 'Awards & National Honors | GASVS Milestones';
		$meta['description'] = 'Recognized with the 2021 National Award for services to persons with disabilities, alongside district, state, and national commendations for grassroots impact.';
		$meta['canonical']   = $base_url . '/awards-and-recognition/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/disability/disability_03_sanjay_waghale_pump.jpg';
		$meta['image_alt']   = 'National Recognition and Community Disability Leadership';
		$meta['section']     = 'Impact & Stories';
		return $meta;
	}

	// Reports & Governance
	if ( is_page( 'reports-and-publications' ) || is_page( 249 ) ) {
		$meta['title']       = 'Governance & Disclosures | GASVS Accountability';
		$meta['description'] = 'Verified statutory compliance: 12A, 80G, FCRA, CSR-1, and NITI Aayog Darpan. Official audited statements and annual reports available upon formal request.';
		$meta['canonical']   = $base_url . '/reports-and-publications/';
		$meta['image']       = $default_img;
		$meta['image_alt']   = 'GASVS Statutory Governance and Compliance';
		$meta['section']     = 'Resources';
		return $meta;
	}

	// Health & Nutrition
	if ( is_page( 'health' ) || is_page( 173 ) ) {
		$meta['title']       = 'Health & Nutrition Programs | Rural Wellness | GASVS';
		$meta['description'] = 'Strengthening rural healthcare across 4,200+ villages through maternal health screening, nutrition awareness, and community-led preventive care interventions.';
		$meta['canonical']   = $base_url . '/health/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/community_impact/impact_09_health_camp_eye_doctor.jpg';
		$meta['image_alt']   = 'GASVS Community Doctor and Healthcare Worker Providing Field Checkups';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// Community Mental Health Hub
	if ( is_page( 'community-mental-health-and-inclusion-program' ) || is_page( 179 ) || is_page( 'mental-health' ) || is_page( 175 ) ) {
		$meta['title']       = 'Community Mental Health & Inclusion Programs | GASVS';
		$meta['description'] = 'Over 19,328 individuals supported through doorstep psychiatric care, counseling, rehabilitation, and stigma reduction in MP and Maharashtra.';
		$meta['canonical']   = $base_url . '/community-mental-health-and-inclusion-program/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/home_hero/home_hero_02_mental_health_01.jpg';
		$meta['image_alt']   = 'GASVS Community Mental Health Outreach and Counseling';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// MHRC Jam Sawali
	if ( is_page( 'mental-health-resource-center-mhrc' ) || is_page( 181 ) ) {
		$meta['title']       = 'MHRC Sanjeevani Kendra Jam Sawali | Mental Health | GASVS';
		$meta['description'] = 'Providing clinical consultations, free psychotropic medicines, and compassionate counseling at the Sanjeevani Mental Health Resource Centre, Jam Sawali.';
		$meta['canonical']   = $base_url . '/mental-health-resource-center-mhrc/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/mental_health/mental_health_01_home_counseling.jpg';
		$meta['image_alt']   = 'Sanjeevani Mental Health Resource Centre Clinical Consultations at Jam Sawali';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// Home Again Indore
	if ( is_page( 'home-again-empowering-lives-in-indore' ) || is_page( 177 ) ) {
		$meta['title']       = 'Home Again Indore | Community Living & Recovery | GASVS';
		$meta['description'] = 'A supportive community living initiative in Indore enabling women with psychosocial disabilities to regain independence, dignity, and vocational skills.';
		$meta['canonical']   = $base_url . '/home-again-empowering-lives-in-indore/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/mental_health/mental_health_15_hospital_ward_visit.jpg';
		$meta['image_alt']   = 'Home Again Supportive Housing and Social Integration in Indore';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// DMHP Chhindwara
	if ( is_page( 'district-mental-health-program-dmhp-chhindwara' ) || is_page( 185 ) ) {
		$meta['title']       = 'DMHP Chhindwara | Public Mental Health Systems | GASVS';
		$meta['description'] = 'Strengthening public mental health systems across Chhindwara: training 6,543+ frontline ASHAs, police personnel, and medical officers in early detection.';
		$meta['canonical']   = $base_url . '/district-mental-health-program-dmhp-chhindwara/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/mental_health/mental_health_05_asha_training.jpg';
		$meta['image_alt']   = 'DMHP Chhindwara Healthcare Worker and Police Training Hall';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// DMHP Nagpur
	if ( is_page( 'district-mental-health-program-dmhp-nagpur' ) || is_page( 183 ) ) {
		$meta['title']       = 'DMHP Nagpur | Grassroots Mental Healthcare | GASVS';
		$meta['description'] = 'Collaborative district mental health interventions in Nagpur delivering psychiatric outreach clinics, community counseling, and worker capacity building.';
		$meta['canonical']   = $base_url . '/district-mental-health-program-dmhp-nagpur/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/home_hero/home_hero_02_mental_health_02.jpg';
		$meta['image_alt']   = 'DMHP Nagpur Community Psychiatry and Healthcare Outreach';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// Disability Inclusion Hub
	if ( is_page( 'disability' ) || is_page( 192 ) ) {
		$meta['title']       = 'Disability Inclusion & Rights Programs | GASVS';
		$meta['description'] = 'Supporting 7,500+ persons with disabilities through assistive aids, UDID registration, CBR, and rights advocacy for dignity and equal community participation.';
		$meta['canonical']   = $base_url . '/disability/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/home_hero/home_hero_03_inclusion_dignity.png';
		$meta['image_alt']   = 'Disability Inclusion, Rights, and Assistive Aid Distribution';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// CBR – BDPO Program
	if ( is_page( 'cbr-bdpo-program-sausar-and-pandhurna-blocks-of-chhindwara-district' ) || is_page( 194 ) ) {
		$meta['title']       = 'CBR-BDPO Program | Sausar & Pandhurna | GASVS';
		$meta['description'] = 'Community-Based Rehabilitation across 156+ villages in Sausar & Pandhurna, building self-advocacy through Block Disabled Persons Organizations (BDPOs).';
		$meta['canonical']   = $base_url . '/cbr-bdpo-program-sausar-and-pandhurna-blocks-of-chhindwara-district/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/disability/disability_01_camp.jpg';
		$meta['image_alt']   = 'Village Level Disabled Persons Organization Meeting in Sausar Block';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// PwD Welfare Program
	if ( is_page( 'pwd-welfare-program' ) || is_page( 196 ) ) {
		$meta['title']       = 'PwD Welfare & Assistive Devices Program | GASVS';
		$meta['description'] = 'Facilitating motorized tricycles, prosthetics, wheelchair fittings, and government pension linkages for thousands of rural persons with disabilities.';
		$meta['canonical']   = $base_url . '/pwd-welfare-program/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/disability/disability_04_prosthesis_fitting.jpg';
		$meta['image_alt']   = 'Prosthetic Fittings and Assistive Device Support by GASVS';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// DDRC Sukma
	if ( is_page( 'disability-rehabilitation-and-resource-centre-ddrc' ) || is_page( 198 ) ) {
		$meta['title']       = 'DDRC Sukma | District Disability Rehabilitation | GASVS';
		$meta['description'] = 'Operating the District Disability Rehabilitation Centre in Sukma, Chhattisgarh: physiotherapy, therapeutic aids, and rehabilitation in remote tribal areas.';
		$meta['canonical']   = $base_url . '/disability-rehabilitation-and-resource-centre-ddrc/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/disability/disability_06_tricycle_distribution.jpg';
		$meta['image_alt']   = 'District Disability Rehabilitation Centre Screenings in Sukma';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// Sustainable Livelihoods
	if ( is_page( 'livelihood' ) || is_page( 'livelihood-program' ) || is_page( 200 ) || is_page( 202 ) ) {
		$meta['title']       = 'Sustainable Livelihoods & Enterprise | GASVS';
		$meta['description'] = 'Linking 3,500+ rural families to sustainable livelihoods through Pashu Sakhi livestock healthcare, Dona-pattal enterprises, NTFP, and farmer collectives.';
		$meta['canonical']   = $base_url . '/livelihood/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/stories/meera_pahad/meera_pahad_pashu_sakhi_01.jpeg';
		$meta['image_alt']   = 'Meera Pahad, Trained Pashu Sakhi Animal Healthcare Leader in Nanda Village';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// Childline 1098 Sukma
	if ( is_page( 'child-line' ) || is_page( 206 ) ) {
		$meta['title']       = 'Child Line 1098 Sukma | 24-Hour Emergency Protection';
		$meta['description'] = '24-hour emergency phone outreach and rescue service for vulnerable, orphaned, and distressed children across Sukma District, Chhattisgarh.';
		$meta['canonical']   = $base_url . '/child-line/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/home_hero/home_hero_05_brighter_futures_01.jpeg';
		$meta['image_alt']   = 'Childline 1098 24-Hour Emergency Child Protection in Sukma District';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// Pre-School Child Nutrition (Malnutrition)
	if ( is_page( 'malnutrition' ) || is_page( 208 ) ) {
		$meta['title']       = 'Pre-School Child Nutrition & Early Learning | GASVS';
		$meta['description'] = 'Combating severe childhood malnutrition in Junnardeo tribal block through pre-primary nutrition camps, supplementary diet, and growth monitoring.';
		$meta['canonical']   = $base_url . '/malnutrition/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/community_impact/impact_03_preprimary_tribal_school.jpeg';
		$meta['image_alt']   = 'Children in Junnardeo Tribal Pre-School Nutrition Camp';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// Financial Literacy Program
	if ( is_page( 'financial-literacy-program' ) || is_page( 204 ) ) {
		$meta['title']       = 'Financial Literacy & Economic Empowerment | GASVS';
		$meta['description'] = 'Empowering rural youth, self-help groups, and tribal households with practical banking knowledge, savings discipline, and digital payment literacy.';
		$meta['canonical']   = $base_url . '/financial-literacy-program/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/home_hero/home_hero_04_empowering_women.jpeg';
		$meta['image_alt']   = 'GASVS Financial Planning Workshop for Rural SHG Members';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// COVID-19 Relief (Project UTTHAN)
	if ( is_page( 'c19' ) || is_page( 858 ) ) {
		$meta['title']       = 'COVID-19 Relief & Project UTTHAN | Crisis Response';
		$meta['description'] = 'Emergency humanitarian assistance during the pandemic: distributing dry ration kits, PPE, hygiene supplies, and livelihoods recovery for vulnerable families.';
		$meta['canonical']   = $base_url . '/c19/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/community_impact/impact_01_relief_kit_handover.jpg';
		$meta['image_alt']   = 'GASVS Field Team Distributing Relief Kits During COVID-19';
		$meta['section']     = 'Impact & Stories';
		return $meta;
	}

	// Special Campaigns
	if ( is_page( 'other-campaigns' ) || is_page( 866 ) || is_page( 'other-programmes' ) || is_page( 210 ) ) {
		$meta['title']       = 'Community Campaigns & Watershed Conservation | GASVS';
		$meta['description'] = 'Grassroots initiatives in environmental conservation, tree plantation, watershed check dams, anti-stigma street theatre, and child marriage prevention.';
		$meta['canonical']   = $base_url . '/other-campaigns/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/community_impact/impact_04_watershed_shramdaan.jpeg';
		$meta['image_alt']   = 'Community Members Building Watershed Check Dam through Shramdaan';
		$meta['section']     = 'Our Work';
		return $meta;
	}

	// Partnership Opportunities
	if ( is_page( 'partnership-opportunities' ) || is_page( 905 ) ) {
		$meta['title']       = 'Partner With GASVS | CSR & Institutional Alliances';
		$meta['description'] = 'Collaborate with GASVS through CSR initiatives, institutional grants, and strategic alliances to scale proven grassroots impact across Central India.';
		$meta['canonical']   = $base_url . '/partnership-opportunities/';
		$meta['image']       = $default_img;
		$meta['image_alt']   = 'Institutional Alliances and CSR Partnerships with GASVS';
		$meta['section']     = 'Get Involved';
		return $meta;
	}

	// Volunteer Opportunities
	if ( is_page( 'volunteer-opportunities' ) || is_page( 903 ) || is_page( 'volunteer' ) || is_page( 85 ) ) {
		$meta['title']       = 'Volunteer With GASVS | Community Engagement & Impact';
		$meta['description'] = 'Join GASVS as a field volunteer, intern, or technical resource person to contribute skills in community development, mental health, and disability rights.';
		$meta['canonical']   = $base_url . '/volunteer-opportunities/';
		$meta['image']       = $base_url . '/wp-content/uploads/gasvs_images/community_impact/impact_14_tree_plantation_conservation.jpeg';
		$meta['image_alt']   = 'Community Volunteers and Youth Engaged in Conservation';
		$meta['section']     = 'Get Involved';
		return $meta;
	}

	// Contact Us
	if ( is_page( 'contact' ) || is_page( 79 ) ) {
		$meta['title']       = 'Contact GASVS | Head Office Sausar, Pandhurna MP';
		$meta['description'] = 'Reach our head office in Sausar, Pandhurna (MP). Phone: +91 9823224640 | Email: info@gasvs.org. Let\'s build inclusive communities together.';
		$meta['canonical']   = $base_url . '/contact/';
		$meta['image']       = $default_img;
		$meta['image_alt']   = 'GASVS Head Office in Sausar Pandhurna';
		$meta['section']     = 'Contact';
		return $meta;
	}

	// Generic page fallback
	if ( is_singular() ) {
		$post = get_queried_object();
		if ( $post && isset( $post->post_title ) ) {
			$meta['title']       = esc_html( $post->post_title ) . ' | GASVS';
			$excerpt             = ! empty( $post->post_excerpt ) ? $post->post_excerpt : wp_trim_words( wp_strip_all_tags( $post->post_content ), 25 );
			if ( ! empty( $excerpt ) ) {
				$meta['description'] = esc_html( $excerpt );
			}
			$meta['canonical']   = get_permalink( $post->ID );
		}
	}

	return $meta;
}

/**
 * Filter document title to provide fully optimized SEO titles.
 *
 * @param string $title
 * @return string
 */
function gasvs_seo_document_title( $title ) {
	$meta = gasvs_get_seo_context();
	if ( ! empty( $meta['title'] ) ) {
		return $meta['title'];
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'gasvs_seo_document_title', 9999 );

/**
 * Inject essential SEO, Open Graph, Twitter Cards, and Schema.org JSON-LD tags into <head>.
 */
function gasvs_seo_head_tags() {
	$meta = gasvs_get_seo_context();
	$site_name = 'Gramin Adiwasi Samaj Vikas Sansthan (GASVS)';
	?>
	<!-- Essential SEO Meta Directives -->
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
	<meta name="description" content="<?php echo esc_attr( $meta['description'] ); ?>" />
	<link rel="canonical" href="<?php echo esc_url( $meta['canonical'] ); ?>" />

	<!-- Open Graph Protocol (Facebook, WhatsApp, LinkedIn) -->
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="<?php echo esc_attr( $meta['type'] ); ?>" />
	<meta property="og:title" content="<?php echo esc_attr( $meta['title'] ); ?>" />
	<meta property="og:description" content="<?php echo esc_attr( $meta['description'] ); ?>" />
	<meta property="og:url" content="<?php echo esc_url( $meta['canonical'] ); ?>" />
	<meta property="og:site_name" content="<?php echo esc_attr( $site_name ); ?>" />
	<meta property="og:image" content="<?php echo esc_url( $meta['image'] ); ?>" />
	<meta property="og:image:secure_url" content="<?php echo esc_url( $meta['image'] ); ?>" />
	<meta property="og:image:alt" content="<?php echo esc_attr( $meta['image_alt'] ); ?>" />

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@GasvsSausar" />
	<meta name="twitter:creator" content="@GasvsSausar" />
	<meta name="twitter:title" content="<?php echo esc_attr( $meta['title'] ); ?>" />
	<meta name="twitter:description" content="<?php echo esc_attr( $meta['description'] ); ?>" />
	<meta name="twitter:image" content="<?php echo esc_url( $meta['image'] ); ?>" />

	<!-- Schema.org JSON-LD Structured Data -->
	<?php if ( is_front_page() || is_home() ) : ?>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "NGO",
		"name": "Gramin Adiwasi Samaj Vikas Sansthan",
		"alternateName": ["GASVS", "Gramin Adivasi Samaj Vikas Sansthan"],
		"url": "<?php echo esc_url( home_url( '/' ) ); ?>",
		"logo": "<?php echo esc_url( home_url( '/wp-content/themes/bosa-charity/screenshot.png' ) ); ?>",
		"foundingDate": "1991",
		"description": "Registered Indian grassroots not-for-profit organization founded in 1991, working across Madhya Pradesh, Maharashtra, and Chhattisgarh in community mental health, disability inclusion, sustainable livelihoods, and child welfare.",
		"taxID": "Reg. No. M.P. - 25307",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "Vivekanand Colony, Belgaon",
			"addressLocality": "Sausar",
			"addressRegion": "Madhya Pradesh",
			"postalCode": "480106",
			"addressCountry": "IN"
		},
		"contactPoint": {
			"@type": "ContactPoint",
			"telephone": "+91-9823224640",
			"contactType": "general inquiries",
			"email": "info@gasvs.org",
			"availableLanguage": ["Hindi", "English"]
		},
		"sameAs": [
			"https://www.facebook.com/gasvs01",
			"https://x.com/GasvsSausar",
			"https://youtube.com/@gasvs?si=Iz3apoZbghmcgDP4"
		]
	}
	</script>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"name": "Gramin Adiwasi Samaj Vikas Sansthan (GASVS)",
		"url": "<?php echo esc_url( home_url( '/' ) ); ?>"
	}
	</script>
	<?php else : ?>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "BreadcrumbList",
		"itemListElement": [
			{
				"@type": "ListItem",
				"position": 1,
				"name": "Home",
				"item": "<?php echo esc_url( home_url( '/' ) ); ?>"
			}
			<?php if ( ! empty( $meta['section'] ) ) : ?>,
			{
				"@type": "ListItem",
				"position": 2,
				"name": "<?php echo esc_js( $meta['section'] ); ?>"
			},
			{
				"@type": "ListItem",
				"position": 3,
				"name": "<?php echo esc_js( $meta['title'] ); ?>",
				"item": "<?php echo esc_url( $meta['canonical'] ); ?>"
			}
			<?php else : ?>,
			{
				"@type": "ListItem",
				"position": 2,
				"name": "<?php echo esc_js( $meta['title'] ); ?>",
				"item": "<?php echo esc_url( $meta['canonical'] ); ?>"
			}
			<?php endif; ?>
		]
	}
	</script>
	<?php endif; ?>
	<?php
}
add_action( 'wp_head', 'gasvs_seo_head_tags', 1 );
