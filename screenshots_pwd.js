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

  const consoleErrors = [];
  const badResponses = [];

  // 1. Desktop 1440px
  const desktopContext = await browser.newContext({ viewport: { width: 1440, height: 900 } });
  const desktopPage = await desktopContext.newPage();

  desktopPage.on('console', msg => {
    if (msg.type() === 'error') consoleErrors.push(`[Console Error] ${msg.text()}`);
  });
  desktopPage.on('pageerror', err => consoleErrors.push(`[Page Error] ${err.toString()}`));
  desktopPage.on('response', res => {
    if (res.status() >= 400) {
      badResponses.push(`[Bad Response] ${res.status()} ${res.url()}`);
    }
  });

  const targetUrl = 'http://localhost:8000/pwd-welfare-program/';
  console.log('Navigating to', targetUrl);
  await desktopPage.goto(targetUrl, { waitUntil: 'networkidle' });
  await autoScroll(desktopPage);
  await desktopPage.waitForTimeout(600);

  // Capture full page
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'pwd_after_desktop_full.png'), fullPage: true });
  console.log('Saved pwd_after_desktop_full.png');

  // Capture Hero viewport
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'pwd_after_desktop_hero.png') });
  console.log('Saved pwd_after_desktop_hero.png');

  // 2. Tablet 768px
  const tabletContext = await browser.newContext({ viewport: { width: 768, height: 1024 } });
  const tabletPage = await tabletContext.newPage();
  await tabletPage.goto(targetUrl, { waitUntil: 'networkidle' });
  await autoScroll(tabletPage);
  await tabletPage.waitForTimeout(600);
  await tabletPage.screenshot({ path: path.join(screenshotDir, 'pwd_after_tablet_full.png'), fullPage: true });
  console.log('Saved pwd_after_tablet_full.png');

  // 3. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 812 } });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto(targetUrl, { waitUntil: 'networkidle' });
  await autoScroll(mobilePage);
  await mobilePage.waitForTimeout(600);
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'pwd_after_mobile_full.png'), fullPage: true });
  console.log('Saved pwd_after_mobile_full.png');

  await browser.close();

  console.log('\n--- VERIFICATION REPORT ---');
  console.log('Console Errors:', consoleErrors.length);
  consoleErrors.forEach(err => console.log(' ', err));
  console.log('Bad Responses (4xx/5xx):', badResponses.length);
  badResponses.forEach(res => console.log(' ', res));
  console.log('Done.');
})();
