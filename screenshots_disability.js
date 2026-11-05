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
  const failedRequests = [];

  desktopPage.on('console', msg => {
    if (msg.type() === 'error') consoleErrors.push(msg.text());
  });
  desktopPage.on('pageerror', err => consoleErrors.push(err.toString()));
  desktopPage.on('requestfailed', req => {
    failedRequests.push({ url: req.url(), failure: req.failure() });
  });

  console.log('Navigating to http://localhost:8000/disability/...');
  const response = await desktopPage.goto('http://localhost:8000/disability/', { waitUntil: 'networkidle' });
  console.log('Page response status:', response.status());

  await autoScroll(desktopPage);
  await desktopPage.waitForTimeout(500);

  // Capture full page
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_full.png'), fullPage: true });
  
  // Capture Hero viewport
  const heroElem = await desktopPage.$('#disability-hero');
  if (heroElem) {
    await heroElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_hero.png') });
  }

  // Scroll to Context section
  const contextElem = await desktopPage.$('#context-reality');
  if (contextElem) {
    await contextElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_context.png') });
  }

  // Scroll to Core Programs section
  const programsElem = await desktopPage.$('#core-programs');
  if (programsElem) {
    await programsElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_programs.png') });
  }

  // Scroll to Services Matrix
  const matrixElem = await desktopPage.$('#services-matrix');
  if (matrixElem) {
    await matrixElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_matrix.png') });
  }

  // Scroll to Story of Change (Sanjay Waghale)
  const storyElem = await desktopPage.$('#sanjay-waghale');
  if (storyElem) {
    await storyElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_story.png') });
  }

  // Scroll to Mobility Showcase
  const showcaseElem = await desktopPage.$('#mobility-showcase');
  if (showcaseElem) {
    await showcaseElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_showcase.png') });
  }

  // Scroll to Advocacy & Events
  const advocacyElem = await desktopPage.$('#advocacy-events');
  if (advocacyElem) {
    await advocacyElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_advocacy.png') });
  }

  // Scroll to Partners
  const partnersElem = await desktopPage.$('#partners-network');
  if (partnersElem) {
    await partnersElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_partners.png') });
  }

  // Scroll to CTA
  const ctaElem = await desktopPage.$('#get-involved');
  if (ctaElem) {
    await ctaElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'disability_desktop_cta.png') });
  }

  await desktopContext.close();

  // 2. Tablet 768px
  const tabletContext = await browser.newContext({ viewport: { width: 768, height: 1024 } });
  const tabletPage = await tabletContext.newPage();
  await tabletPage.goto('http://localhost:8000/disability/', { waitUntil: 'networkidle' });
  await autoScroll(tabletPage);
  await tabletPage.waitForTimeout(500);
  await tabletPage.screenshot({ path: path.join(screenshotDir, 'disability_tablet_full.png'), fullPage: true });
  await tabletContext.close();

  // 3. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 667 }, isMobile: true });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto('http://localhost:8000/disability/', { waitUntil: 'networkidle' });
  await autoScroll(mobilePage);
  await mobilePage.waitForTimeout(500);
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'disability_mobile_full.png'), fullPage: true });
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'disability_mobile_hero.png') });
  await mobileContext.close();

  await browser.close();

  console.log('Console Errors:', consoleErrors.length, consoleErrors);
  console.log('Failed Requests:', failedRequests.length, failedRequests);
  console.log('Disability Screenshots captured successfully in ' + screenshotDir);
})();
