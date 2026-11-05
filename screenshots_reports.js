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

  await desktopPage.goto('http://localhost:8000/reports-and-publications/', { waitUntil: 'networkidle' });
  await autoScroll(desktopPage);
  await desktopPage.waitForTimeout(500);

  // Capture full page
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'reports_clean_desktop_full.png'), fullPage: true });
  
  // Capture Hero viewport
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'reports_clean_desktop_hero.png') });
  
  // Scroll to Compliance section
  const complianceElem = await desktopPage.$('#governance-framework');
  if (complianceElem) {
    await complianceElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'reports_clean_desktop_compliance.png') });
  }

  // Scroll to Institutional Records section
  const recordsElem = await desktopPage.$('#institutional-records');
  if (recordsElem) {
    await recordsElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'reports_clean_desktop_records.png') });
  }

  // Scroll to Request section
  const requestElem = await desktopPage.$('#request-docs');
  if (requestElem) {
    await requestElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'reports_clean_desktop_request.png') });
  }

  await desktopContext.close();

  // 2. Tablet 768px
  const tabletContext = await browser.newContext({ viewport: { width: 768, height: 1024 } });
  const tabletPage = await tabletContext.newPage();
  await tabletPage.goto('http://localhost:8000/reports-and-publications/', { waitUntil: 'networkidle' });
  await autoScroll(tabletPage);
  await tabletPage.waitForTimeout(500);
  await tabletPage.screenshot({ path: path.join(screenshotDir, 'reports_clean_tablet_full.png'), fullPage: true });
  await tabletContext.close();

  // 3. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 667 }, isMobile: true });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto('http://localhost:8000/reports-and-publications/', { waitUntil: 'networkidle' });
  await autoScroll(mobilePage);
  await mobilePage.waitForTimeout(500);
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'reports_clean_mobile_full.png'), fullPage: true });
  await mobileContext.close();

  await browser.close();
  console.log('Reports clean screenshots completed successfully!');
  if (consoleErrors.length > 0) {
    console.log('Console errors:', consoleErrors);
  } else {
    console.log('Zero console errors encountered.');
  }
})();
