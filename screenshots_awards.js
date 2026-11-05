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
  
  await desktopPage.goto('http://localhost:8000/awards-and-recognition/', { waitUntil: 'networkidle' });
  await autoScroll(desktopPage);
  await desktopPage.waitForTimeout(500);

  // Capture full page
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'awards_redesign_desktop_full.png'), fullPage: true });
  
  // Capture Hero viewport
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'awards_redesign_desktop_hero.png') });
  
  // Scroll to Presidential Spotlight
  const spotlightElem = await desktopPage.$('#presidential-honor');
  if (spotlightElem) {
    await spotlightElem.scrollIntoViewIfNeeded();
    await desktopPage.screenshot({ path: path.join(screenshotDir, 'awards_redesign_desktop_spotlight.png') });
  }

  // Click Table View tab and capture
  const tableBtn = await desktopPage.$('#btn-table-view');
  if (tableBtn) {
    await tableBtn.click();
    await desktopPage.waitForTimeout(400);
    const chronicleElem = await desktopPage.$('#awards-chronicle');
    if (chronicleElem) {
      await chronicleElem.scrollIntoViewIfNeeded();
      await desktopPage.screenshot({ path: path.join(screenshotDir, 'awards_redesign_desktop_table_view.png') });
    }
  }

  await desktopContext.close();

  // 2. Tablet 768px
  const tabletContext = await browser.newContext({ viewport: { width: 768, height: 1024 } });
  const tabletPage = await tabletContext.newPage();
  await tabletPage.goto('http://localhost:8000/awards-and-recognition/', { waitUntil: 'networkidle' });
  await autoScroll(tabletPage);
  await tabletPage.waitForTimeout(500);
  await tabletPage.screenshot({ path: path.join(screenshotDir, 'awards_redesign_tablet_full.png'), fullPage: true });
  await tabletContext.close();

  // 3. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 667 }, isMobile: true });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto('http://localhost:8000/awards-and-recognition/', { waitUntil: 'networkidle' });
  await autoScroll(mobilePage);
  await mobilePage.waitForTimeout(500);
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'awards_redesign_mobile_full.png'), fullPage: true });
  await mobileContext.close();

  await browser.close();
  console.log('Screenshots completed with auto-scroll!');
})();
