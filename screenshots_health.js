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
  desktopPage.on('console', msg => {
    if (msg.type() === 'error') consoleErrors.push(msg.text());
  });
  desktopPage.on('pageerror', err => consoleErrors.push(err.toString()));

  await desktopPage.goto('http://localhost:8000/health/', { waitUntil: 'networkidle' });
  await autoScroll(desktopPage);
  await desktopPage.waitForTimeout(500);

  // Capture full page
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'health_desktop_full.png'), fullPage: true });
  
  // Capture Hero viewport
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'health_desktop_hero.png') });
  
  // Scroll to Context section
  const contextElem = await desktopPage.$('#healthcare-context');
  if (contextElem) {
    await contextElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'health_desktop_context.png') });
  }

  // Scroll to Core Programmes section
  const programsElem = await desktopPage.$('#core-programmes');
  if (programsElem) {
    await programsElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'health_desktop_programs.png') });
  }

  // Scroll to Services Matrix
  const matrixElem = await desktopPage.$('#services-matrix');
  if (matrixElem) {
    await matrixElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'health_desktop_matrix.png') });
  }

  // Scroll to Field Showcase
  const showcaseElem = await desktopPage.$('#field-showcase');
  if (showcaseElem) {
    await showcaseElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'health_desktop_showcase.png') });
  }

  // Scroll to Partners
  const partnersElem = await desktopPage.$('#health-partners');
  if (partnersElem) {
    await partnersElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'health_desktop_partners.png') });
  }

  // Scroll to CTA
  const ctaElem = await desktopPage.$('#get-involved');
  if (ctaElem) {
    await ctaElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'health_desktop_cta.png') });
  }

  await desktopContext.close();

  // 2. Tablet 768px
  const tabletContext = await browser.newContext({ viewport: { width: 768, height: 1024 } });
  const tabletPage = await tabletContext.newPage();
  await tabletPage.goto('http://localhost:8000/health/', { waitUntil: 'networkidle' });
  await autoScroll(tabletPage);
  await tabletPage.waitForTimeout(500);
  await tabletPage.screenshot({ path: path.join(screenshotDir, 'health_tablet_full.png'), fullPage: true });
  await tabletContext.close();

  // 3. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 667 }, isMobile: true });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto('http://localhost:8000/health/', { waitUntil: 'networkidle' });
  await autoScroll(mobilePage);
  await mobilePage.waitForTimeout(500);
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'health_mobile_full.png'), fullPage: true });
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'health_mobile_hero.png') });
  await mobileContext.close();

  await browser.close();

  console.log('Console Errors:', consoleErrors.length, consoleErrors);
  console.log('Health Screenshots saved successfully in ' + screenshotDir);
})();
