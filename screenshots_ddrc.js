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

  const targetUrl = 'http://localhost:8000/disability-rehabilitation-and-resource-centre-ddrc/';
  console.log('Navigating to', targetUrl);
  await desktopPage.goto(targetUrl, { waitUntil: 'networkidle', timeout: 20000 });
  await autoScroll(desktopPage);
  await desktopPage.waitForTimeout(600);

  // Capture full page
  await desktopPage.screenshot({ path: path.join(screenshotDir, 'ddrc_desktop_full.png'), fullPage: true });
  console.log('Saved ddrc_desktop_full.png');

  // Capture individual sections
  const sections = [
    { id: '#ddrc-hero', name: 'ddrc_desktop_hero.png' },
    { id: '#ddrc-context', name: 'ddrc_desktop_context.png' },
    { id: '#ddrc-pillars', name: 'ddrc_desktop_pillars.png' },
    { id: '#ddrc-pathway', name: 'ddrc_desktop_pathway.png' },
    { id: '#ddrc-impact', name: 'ddrc_desktop_impact.png' },
    { id: '#ddrc-gallery', name: 'ddrc_desktop_gallery.png' },
    { id: '#ddrc-partners', name: 'ddrc_desktop_partners.png' },
    { id: '#ddrc-cta', name: 'ddrc_desktop_cta.png' }
  ];

  for (const s of sections) {
    const el = await desktopPage.$(s.id);
    if (el) {
      await el.screenshot({ path: path.join(screenshotDir, s.name) });
      console.log('Saved', s.name);
    } else {
      console.log('Section not found:', s.id);
    }
  }

  // 2. Tablet 768px
  const tabletContext = await browser.newContext({ viewport: { width: 768, height: 1024 } });
  const tabletPage = await tabletContext.newPage();
  await tabletPage.goto(targetUrl, { waitUntil: 'networkidle', timeout: 20000 });
  await autoScroll(tabletPage);
  await tabletPage.waitForTimeout(600);
  await tabletPage.screenshot({ path: path.join(screenshotDir, 'ddrc_tablet_full.png'), fullPage: true });
  console.log('Saved ddrc_tablet_full.png');

  // 3. Mobile 375px
  const mobileContext = await browser.newContext({ viewport: { width: 375, height: 812 } });
  const mobilePage = await mobileContext.newPage();
  await mobilePage.goto(targetUrl, { waitUntil: 'networkidle', timeout: 20000 });
  await autoScroll(mobilePage);
  await mobilePage.waitForTimeout(600);
  await mobilePage.screenshot({ path: path.join(screenshotDir, 'ddrc_mobile_full.png'), fullPage: true });
  console.log('Saved ddrc_mobile_full.png');

  console.log('--- Verification Summary ---');
  console.log('Console Errors count:', consoleErrors.length);
  if (consoleErrors.length > 0) {
    console.log('Errors:', consoleErrors);
  }
  console.log('Bad Responses count:', badResponses.length);
  if (badResponses.length > 0) {
    console.log('Bad URLs:', badResponses);
  }

  await browser.close();
})();
