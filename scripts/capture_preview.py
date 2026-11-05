import os
import subprocess
import sys

def render_php_template(php_file_rel, body_classes=""):
    base_dir = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
    full_path = os.path.join(base_dir, php_file_rel)
    
    php_code = f"""
    function get_header(){{}}
    function get_footer(){{}}
    function home_url($p = '') {{ return '.' . $p; }}
    function esc_url($u) {{ return $u; }}
    function shortcode_exists($s) {{ return false; }}
    function get_post($id) {{ return null; }}
    function has_shortcode($c, $t) {{ return false; }}
    function do_shortcode($c) {{
        return '<div class="wpcf7">' .
               '<form>' .
               '<p><input type="text" placeholder="Enter Name*"></p>' .
               '<p><input type="email" placeholder="Enter Email*"></p>' .
               '<p><input type="tel" placeholder="Enter Phone No.*"></p>' .
               '<p><select><option>How Would You Like To Be Associated?</option></select></p>' .
               '<p><input type="submit" value="Submit"></p>' .
               '</form>' .
               '</div>';
    }}
    ob_start();
    include '{full_path}';
    echo ob_get_clean();
    """
    
    res = subprocess.run(['php', '-r', php_code], capture_output=True, text=True, check=True)
    body_content = res.stdout

    html_template = f"""<!DOCTYPE html>
<html lang="en" style="overflow-x:hidden;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GASV Website Preview</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./wp-content/themes/bosa/assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./wp-content/themes/bosa-charity/style.css">
  <link rel="stylesheet" href="./wp-content/themes/bosa-charity/assets/css/gasvs-modern.css">
</head>
<body class="{body_classes}" style="margin:0; padding:0; overflow-x:hidden;">
  {body_content}
</body>
</html>"""
    return html_template

def build_previews():
    base_dir = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
    screenshots_dir = os.path.join(base_dir, 'screenshots')
    os.makedirs(screenshots_dir, exist_ok=True)

    # 1. Home Page Preview
    home_html = render_php_template('public_html/wp-content/themes/bosa-charity/front-page.php', 'home gasvs-home-page')
    home_path = os.path.join(base_dir, 'public_html/preview_home.html')
    with open(home_path, 'w', encoding='utf-8') as f:
        f.write(home_html)
    print("Generated:", home_path)

    home_mobile_html = home_html.replace(
        '<body class="home gasvs-home-page" style="margin:0; padding:0; overflow-x:hidden;">',
        '<style>html, body { max-width: 375px !important; margin: 0 !important; padding: 0 !important; overflow-x: hidden !important; }</style><body class="home gasvs-home-page" style="margin:0; padding:0; overflow-x:hidden;">'
    )
    home_mobile_path = os.path.join(base_dir, 'public_html/preview_mobile.html')
    with open(home_mobile_path, 'w', encoding='utf-8') as f:
        f.write(home_mobile_html)
    print("Generated:", home_mobile_path)

    # 2. Livelihood Page Preview
    livelihood_html = render_php_template('public_html/wp-content/themes/bosa-charity/page-livelihood.php', 'page-template-page-livelihood gasvs-modern-page gasvs-livelihood-page')
    livelihood_path = os.path.join(base_dir, 'public_html/preview_livelihood.html')
    with open(livelihood_path, 'w', encoding='utf-8') as f:
        f.write(livelihood_html)
    print("Generated:", livelihood_path)

    livelihood_mobile_html = livelihood_html.replace(
        '<body class="page-template-page-livelihood gasvs-modern-page gasvs-livelihood-page" style="margin:0; padding:0; overflow-x:hidden;">',
        '<style>html, body { max-width: 375px !important; margin: 0 !important; padding: 0 !important; overflow-x: hidden !important; }</style><body class="page-template-page-livelihood gasvs-modern-page gasvs-livelihood-page" style="margin:0; padding:0; overflow-x:hidden;">'
    )
    livelihood_mobile_path = os.path.join(base_dir, 'public_html/preview_livelihood_mobile.html')
    with open(livelihood_mobile_path, 'w', encoding='utf-8') as f:
        f.write(livelihood_mobile_html)
    print("Generated:", livelihood_mobile_path)

    # 3. Contact Page Preview
    contact_html = render_php_template('public_html/wp-content/themes/bosa-charity/page-contact.php', 'page-template-page-contact gasvs-modern-page gasvs-contact-page')
    contact_path = os.path.join(base_dir, 'public_html/preview_contact.html')
    with open(contact_path, 'w', encoding='utf-8') as f:
        f.write(contact_html)
    print("Generated:", contact_path)

    contact_mobile_html = contact_html.replace(
        '<body class="page-template-page-contact gasvs-modern-page gasvs-contact-page" style="margin:0; padding:0; overflow-x:hidden;">',
        '<style>html, body { max-width: 375px !important; margin: 0 !important; padding: 0 !important; overflow-x: hidden !important; }</style><body class="page-template-page-contact gasvs-modern-page gasvs-contact-page" style="margin:0; padding:0; overflow-x:hidden;">'
    )
    contact_mobile_path = os.path.join(base_dir, 'public_html/preview_contact_mobile.html')
    with open(contact_mobile_path, 'w', encoding='utf-8') as f:
        f.write(contact_mobile_html)
    print("Generated:", contact_mobile_path)

    # 4. Partnership Opportunities Page Preview
    partnership_html = render_php_template('public_html/wp-content/themes/bosa-charity/page-partnership-opportunities.php', 'page-template-page-partnership-opportunities gasvs-modern-page gasvs-partnership-page')
    partnership_path = os.path.join(base_dir, 'public_html/preview_partnership.html')
    with open(partnership_path, 'w', encoding='utf-8') as f:
        f.write(partnership_html)
    print("Generated:", partnership_path)

    partnership_mobile_html = partnership_html.replace(
        '<body class="page-template-page-partnership-opportunities gasvs-modern-page gasvs-partnership-page" style="margin:0; padding:0; overflow-x:hidden;">',
        '<style>html, body { max-width: 375px !important; margin: 0 !important; padding: 0 !important; overflow-x: hidden !important; }</style><body class="page-template-page-partnership-opportunities gasvs-modern-page gasvs-partnership-page" style="margin:0; padding:0; overflow-x:hidden;">'
    )
    partnership_mobile_path = os.path.join(base_dir, 'public_html/preview_partnership_mobile.html')
    with open(partnership_mobile_path, 'w', encoding='utf-8') as f:
        f.write(partnership_mobile_html)
    print("Generated:", partnership_mobile_path)

    # 5. Case Studies Page Preview
    case_studies_html = render_php_template('public_html/wp-content/themes/bosa-charity/page-case-studies.php', 'page-template-page-case-studies gasvs-modern-page gasvs-case-studies-page')
    case_studies_path = os.path.join(base_dir, 'public_html/preview_case_studies.html')
    with open(case_studies_path, 'w', encoding='utf-8') as f:
        f.write(case_studies_html)
    print("Generated:", case_studies_path)

    case_studies_mobile_html = case_studies_html.replace(
        '<body class="page-template-page-case-studies gasvs-modern-page gasvs-case-studies-page" style="margin:0; padding:0; overflow-x:hidden;">',
        '<style>html, body { max-width: 375px !important; margin: 0 !important; padding: 0 !important; overflow-x: hidden !important; }</style><body class="page-template-page-case-studies gasvs-modern-page gasvs-case-studies-page" style="margin:0; padding:0; overflow-x:hidden;">'
    )
    case_studies_mobile_path = os.path.join(base_dir, 'public_html/preview_case_studies_mobile.html')
    with open(case_studies_mobile_path, 'w', encoding='utf-8') as f:
        f.write(case_studies_mobile_html)
    print("Generated:", case_studies_mobile_path)

    # 6. Mental Health Page Preview
    mental_health_html = render_php_template('public_html/wp-content/themes/bosa-charity/page-mental-health.php', 'page-template-page-mental-health gasvs-modern-page gasvs-mental-health-page')
    mental_health_path = os.path.join(base_dir, 'public_html/preview_mental_health.html')
    with open(mental_health_path, 'w', encoding='utf-8') as f:
        f.write(mental_health_html)
    print("Generated:", mental_health_path)

    mental_health_mobile_html = mental_health_html.replace(
        '<body class="page-template-page-mental-health gasvs-modern-page gasvs-mental-health-page" style="margin:0; padding:0; overflow-x:hidden;">',
        '<style>html, body { max-width: 375px !important; margin: 0 !important; padding: 0 !important; overflow-x: hidden !important; }</style><body class="page-template-page-mental-health gasvs-modern-page gasvs-mental-health-page" style="margin:0; padding:0; overflow-x:hidden;">'
    )
    mental_health_mobile_path = os.path.join(base_dir, 'public_html/preview_mental_health_mobile.html')
    with open(mental_health_mobile_path, 'w', encoding='utf-8') as f:
        f.write(mental_health_mobile_html)
    print("Generated:", mental_health_mobile_path)

    # 7. MHRC Page Preview
    mhrc_html = render_php_template('public_html/wp-content/themes/bosa-charity/page-mhrc.php', 'page-template-page-mhrc gasvs-modern-page gasvs-mhrc-page')
    mhrc_path = os.path.join(base_dir, 'public_html/preview_mhrc.html')
    with open(mhrc_path, 'w', encoding='utf-8') as f:
        f.write(mhrc_html)
    print("Generated:", mhrc_path)

    mhrc_mobile_html = mhrc_html.replace(
        '<body class="page-template-page-mhrc gasvs-modern-page gasvs-mhrc-page" style="margin:0; padding:0; overflow-x:hidden;">',
        '<style>html, body { max-width: 375px !important; margin: 0 !important; padding: 0 !important; overflow-x: hidden !important; }</style><body class="page-template-page-mhrc gasvs-modern-page gasvs-mhrc-page" style="margin:0; padding:0; overflow-x:hidden;">'
    )
    mhrc_mobile_path = os.path.join(base_dir, 'public_html/preview_mhrc_mobile.html')
    with open(mhrc_mobile_path, 'w', encoding='utf-8') as f:
        f.write(mhrc_mobile_html)
    print("Generated:", mhrc_mobile_path)

    # Capture screenshots using Google Chrome if available
    chrome_path = "/Applications/Google Chrome.app/Contents/MacOS/Google Chrome"
    if os.path.exists(chrome_path):
        print("Capturing Screenshots with Chrome...")
        pages_to_capture = [
            ('home', home_path, home_mobile_path, 1440, 5200, 375, 7500),
            ('case_studies', case_studies_path, case_studies_mobile_path, 1440, 4800, 375, 6800),
            ('mental_health', mental_health_path, mental_health_mobile_path, 1440, 5000, 375, 7000),
            ('mhrc', mhrc_path, mhrc_mobile_path, 1440, 4800, 375, 6600),
        ]
        for name, d_path, m_path, dw, dh, mw, mh in pages_to_capture:
            d_shot = os.path.join(screenshots_dir, f'{name}_desktop_full.png')
            cmd_d = [
                chrome_path, '--headless', '--disable-gpu', '--no-sandbox', '--hide-scrollbars',
                f'--window-size={dw},{dh}', f'--screenshot={d_shot}', f'file://{d_path}'
            ]
            subprocess.run(cmd_d, capture_output=True)
            print(f"Generated Desktop Screenshot: {d_shot}")

            m_shot = os.path.join(screenshots_dir, f'{name}_mobile_full.png')
            cmd_m = [
                chrome_path, '--headless', '--disable-gpu', '--no-sandbox', '--hide-scrollbars',
                f'--window-size={mw},{mh}', f'--screenshot={m_shot}', f'file://{m_path}'
            ]
            subprocess.run(cmd_m, capture_output=True)
            print(f"Generated Mobile Screenshot: {m_shot}")

if __name__ == '__main__':
    build_previews()
