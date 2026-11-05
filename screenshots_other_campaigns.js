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
  await desktopPage.goto('http://localhost:8000/other-campaigns/', { waitUntil: 'networkidle' });
  await autoScroll(desktopPage);
  await desktopPage.waitForTimeout(500);

  await desktopPage.screenshot({ path: path.join(screenshotDir, 'other_campaigns_desktop_full.png'), fullPage: true });
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'other_campaigns_desktop_hero.png') });

  // Scroll to campaigns spotlight
  const spotlightElem = await desktopPage.$('#dada-dadi-campaign');
  if (spotlightElem) {
    await spotlightElem.scrollIntoViewIfNeeded();
    await desktopPage.waitForTimeout(300);
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'other_campaigns_desktop_spotlights.png') });
  }

  await desktopContext.close();

  // 2. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 667 }, isMobile: true });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto('http://localhost:8000/other-campaigns/', { waitUntil: 'networkidle' });
  await autoScroll(mobilePage);
  await mobilePage.waitForTimeout(500);

  await mobilePage.screenshot({ path: path.join(screenshotDir, 'other_campaigns_mobile_full.png'), fullPage: true });
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'other_campaigns_mobile_hero.png') });
  await mobileContext.close();

  await browser.close();
  console.log('Screenshots saved to ' + screenshotDir);
})();
