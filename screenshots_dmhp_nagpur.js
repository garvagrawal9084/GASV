const { chromium } = require('playwright');
const path = require('path');
const fs = require('fs');

async function autoScroll(page) {
  await page.evaluate(async () => {
    await new Promise((resolve) => {
      let totalHeight = 0;
      const distance = 400;
      const timer = setInterval(() => {
        const scrollHeight = document.body.scrollHeight;
        window.scrollBy(0, distance);
        totalHeight += distance;
        if (totalHeight >= scrollHeight) {
          clearInterval(timer);
          window.scrollTo(0, 0);
          resolve();
        }
      }, 100);
    });
  });
}

(async () => {
  const screenshotDir = path.join(__dirname, 'screenshots');
  if (!fs.existsSync(screenshotDir)) {
    fs.mkdirSync(screenshotDir, { recursive: true });
  }

  const browser = await chromium.launch({ headless: true });

  // 1. Desktop 1440px
  const desktopContext = await browser.newContext({ viewport: { width: 1440, height: 900 } });
  const desktopPage = await desktopContext.newPage();

  const consoleErrors = [];
  const badResponses = [];
  desktopPage.on('console', msg => {
    if (msg.type() === 'error') consoleErrors.push(msg.text());
  });
  desktopPage.on('pageerror', err => consoleErrors.push(err.toString()));
  desktopPage.on('response', res => {
    if (res.status() >= 400) {
      badResponses.push(`${res.status()} ${res.url()}`);
    }
  });

  const targetUrl = 'http://localhost:8000/district-mental-health-program-dmhp-nagpur/';
  console.log('Navigating to', targetUrl);
  await desktopPage.goto(targetUrl, { waitUntil: 'networkidle' });
  await autoScroll(desktopPage);
  await desktopPage.waitForTimeout(600);

  // Capture full page
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_full.png'), fullPage: true });
  console.log('Saved dmhp_nagpur_desktop_full.png');

  // Capture Hero viewport
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_hero.png') });
  console.log('Saved dmhp_nagpur_desktop_hero.png');

  // Capture Context section
  const contextElem = await desktopPage.$('#dmhp-context');
  if (contextElem) {
    await contextElem.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_context.png') });
    console.log('Saved dmhp_nagpur_desktop_context.png');
  }

  // Capture Objectives section
  const objElem = await desktopPage.$('#dmhp-objectives');
  if (objElem) {
    await objElem.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_objectives.png') });
    console.log('Saved dmhp_nagpur_desktop_objectives.png');
  }

  // Capture Pillars section
  const pillarsElem = await desktopPage.$('#dmhp-pillars');
  if (pillarsElem) {
    await pillarsElem.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_pillars.png') });
    console.log('Saved dmhp_nagpur_desktop_pillars.png');
  }

  // Capture Pathway section
  const pathwayElem = await desktopPage.$('#dmhp-pathway');
  if (pathwayElem) {
    await pathwayElem.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_pathway.png') });
    console.log('Saved dmhp_nagpur_desktop_pathway.png');
  }

  // Capture Vision section
  const visionElem = await desktopPage.$('#dmhp-vision');
  if (visionElem) {
    await visionElem.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_vision.png') });
    console.log('Saved dmhp_nagpur_desktop_vision.png');
  }

  // Capture Gallery section
  const galleryElem = await desktopPage.$('#dmhp-gallery');
  if (galleryElem) {
    await galleryElem.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_gallery.png') });
    console.log('Saved dmhp_nagpur_desktop_gallery.png');
  }

  // Capture Partners section
  const partnersElem = await desktopPage.$('#dmhp-partners');
  if (partnersElem) {
    await partnersElem.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_partners.png') });
    console.log('Saved dmhp_nagpur_desktop_partners.png');
  }

  // Capture CTA section
  const ctaElem = await desktopPage.$('#dmhp-contact');
  if (ctaElem) {
    await ctaElem.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_desktop_cta.png') });
    console.log('Saved dmhp_nagpur_desktop_cta.png');
  }

  await desktopContext.close();

  // 2. Tablet 768px
  const tabletContext = await browser.newContext({ viewport: { width: 768, height: 1024 } });
  const tabletPage = await tabletContext.newPage();
  await tabletPage.goto(targetUrl, { waitUntil: 'networkidle' });
  await autoScroll(tabletPage);
  await tabletPage.waitForTimeout(600);
  await tabletPage.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_tablet_full.png'), fullPage: true });
  console.log('Saved dmhp_nagpur_tablet_full.png');
  await tabletContext.close();

  // 3. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 812 }, isMobile: true, hasTouch: true });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto(targetUrl, { waitUntil: 'networkidle' });
  await autoScroll(mobilePage);
  await mobilePage.waitForTimeout(600);
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'dmhp_nagpur_mobile_full.png'), fullPage: true });
  console.log('Saved dmhp_nagpur_mobile_full.png');
  await mobileContext.close();

  await browser.close();

  console.log('\n--- VERIFICATION REPORT ---');
  console.log('Console Errors count:', consoleErrors.length);
  if (consoleErrors.length > 0) {
    console.log('Console Errors:', consoleErrors);
  }
  console.log('Bad HTTP Responses count:', badResponses.length);
  if (badResponses.length > 0) {
    console.log('Bad HTTP Responses:', badResponses);
  }
  console.log('All screenshots captured successfully.');
})();
