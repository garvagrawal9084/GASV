const { chromium } = require('playwright');
const path = require('path');

(async () => {
  const browser = await chromium.launch();
  const page = await browser.newPage({ viewport: { width: 1440, height: 900 } });
  await page.goto('http://localhost:8000', { waitUntil: 'networkidle' });
  await page.screenshot({ path: path.join(__dirname, 'screenshots/v6_fullpage.png'), fullPage: true });

  const sections = [
    { name: 'v6_section_hero_stats', selector: '.gasvs-hero-section' },
    { name: 'v6_section_about', selector: '.gasvs-about-section' },
    { name: 'v6_section_programs', selector: '#our-programs' },
    { name: 'v6_section_awards', selector: '.gasvs-awards-section' },
    { name: 'v6_section_stories', selector: '.gasvs-stories-section' },
    { name: 'v6_section_partners', selector: '.gasvs-partners-section' },
    { name: 'v6_section_contact', selector: '#get-involved' },
  ];

  for (const s of sections) {
    const el = await page.$(s.selector);
    if (el) {
      await el.screenshot({ path: path.join(__dirname, 'screenshots', `${s.name}.png`) });
    }
  }

  await browser.close();
  console.log('All sections captured successfully.');
})();
