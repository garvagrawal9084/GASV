const { chromium } = require('playwright');
const path = require('path');
const fs = require('fs');

(async () => {
  const screenshotDir = path.join(__dirname, 'screenshots');
  if (!fs.existsSync(screenshotDir)) {
    fs.mkdirSync(screenshotDir, { recursive: true });
  }

  const browser = await chromium.launch({ headless: true });
  
  // 1. Desktop 1440px
  const desktopContext = await browser.newContext({ viewport: { width: 1440, height: 900 } });
  const desktopPage = await desktopContext.newPage();
  await desktopPage.goto('http://localhost:8000', { waitUntil: 'networkidle' });
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'desktop_full.png'), fullPage: true });
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'desktop_hero.png') });
  await desktopContext.close();

  // 2. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 667 }, isMobile: true });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto('http://localhost:8000', { waitUntil: 'networkidle' });
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'mobile_full.png'), fullPage: true });
  await mobileContext.close();

  await browser.close();
  console.log('Screenshots saved to ' + screenshotDir);
})();
