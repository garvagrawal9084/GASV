# AGENTS.md

Instructions for AI coding agents working in this repository.

---

## 1. Project context

This is a **cPanel-hosted web project** opened and edited locally, then deployed back to the
server. Fill in the specifics below before the first task:

- **Stack:** PHP 8.x + WordPress (Theme: `bosa-charity` child theme, plain HTML5 / CSS3 / Vanilla JS, no bundler)
- **Entry point / web root:** `public_html/`
- **Template files live in:** `public_html/wp-content/themes/bosa-charity/` (e.g. `front-page.php`, `header.php`, `footer.php`, `page-*.php`)
- **Styles live in:** `public_html/wp-content/themes/bosa-charity/assets/css/` (e.g. `gasvs-modern.css`, `style.css`)
- **Scripts live in:** `public_html/wp-content/themes/bosa-charity/assets/js/`
- **Images live in:** `Images/` (workspace source folder with `Disability`, `Mental health`, `Empowering Lives...`, and `Sanjy Waghale`), `Home/` (workspace source folder for homepage hero carousel assets), `Inspiring Story/` (workspace source folder for verified case studies such as `Meera Pahad’s`), and web-accessible `public_html/wp-content/uploads/gasvs_images/`
- **Local preview:** `php -S localhost:8000 -t public_html`
- **Primary Content & Data Document:** `GASVS_Homepage_Content_with_Additional_Impact_Numbers.docx` (Official 14-page website architecture, homepage copy, and updated impact numbers)
- **Primary Hero Carousel Document:** `Home/content.txt` (Official 5-Slide Homepage Hero Carousel headings, taglines, and programmatic mappings)
- **Primary Inspiring Story Document:** `Inspiring Story/Meera Pahad’s/story.txt` (Official verified case study: Meera Pahad's journey from social exclusion to community leadership as a Pashu Sakhi)
- **Secondary Reference Document:** `GASVS_Website.docx` (Organizational profile, case studies, governance, and partner network)

---

## 2. Prime directive

> **This is a visual redesign only. The frontend gets a modern look. The behaviour behind it
> does not change — not by a single line.**

If a change would alter what the site *does*, it is out of scope. Only change how it *looks*.

When in doubt: **stop and ask.** A question costs a minute. A broken form on a live cPanel
host costs a day.

### Strict Data Authenticity & Zero Dummy Data Policy
> **MANDATORY POLICY: NO DUMMY, FAKE, OR FABRICATED DATA ON THIS WEBSITE.**
> Under NO circumstances should any dummy, fake, invented, mock, or placeholder data be added to any page or component of this website.

- **Zero invented content:** Never create fake report titles, fake fiscal year reports (e.g. "Annual Report FY 2023-24"), fake financial allocation percentages/progress bars (e.g. "86% Programmatic, 9% Admin"), fake research publications/monographs, fake team members, fake testimonials, or placeholder copy (e.g. Lorem Ipsum).
- **Excluded Individuals / Case Studies (Do NOT Include):** Per explicit directive and mental health informed consent & confidentiality standards, the following individuals must NEVER be included anywhere on the website:
  1. *Hansram* (Hansram Uikey)
  2. *Jayesh* (Jayesh Dhurve / Jeeru)
  3. *Archana* (Mrs. Archana Devtale)
  4. *Ratnakar & Jyotsna* (Ratnakar & Mrs. Jyotsna Sontakke)
- **Verifiable authentic data only:** Use strictly real, verified data already present in the primary content document (`GASVS_Homepage_Content_with_Additional_Impact_Numbers.docx`), secondary reference document (`GASVS_Website.docx`), the database, uploads, or official source documents. Every single claim, metric, and entity must be historically or legally verified.
- **Handling empty or document-dependent pages (e.g. Reports & Publications):** When a page or section in WordPress has no uploaded files (such as PDF annual reports or audit sheets), DO NOT invent mock downloadable cards or simulated files. Instead:
  1. Clearly state the organization's verified statutory registrations, legal status, and compliance accreditations (Society Act, 12A, 80G, FCRA, CSR-1, NITI Aayog).
  2. Clearly and transparently explain that official audited balance sheets, annual activity reports, and compliance records are maintained at the registered office and are provided to donors, CSR partners, and regulatory authorities upon formal request.
  3. Provide direct official contact and inquiry mechanisms to request the official documentation.

---

## 3. Hard boundaries — never touch

Do not modify, rename, reorder, or "clean up" any of the following:

| Off limits | Why |
|---|---|
| PHP logic, functions, classes, includes, conditionals, loops | This is the application |
| Database queries, connection files, credentials, `config.php`, `.env` | Backend + secrets |
| Route handling, `.htaccess`, redirects, URL structure | Breaks links and server config |
| Form `action` and `method` attributes | Breaks submission |
| Form field `name` attributes | The backend reads these by name |
| Element `id` attributes already referenced by JS or PHP | Breaks handlers and selectors |
| Existing JS event handlers, AJAX URLs, payload shapes, response parsing | Breaks interactivity |
| Session handling, auth, login/logout flows, cookies | Security-critical |
| Validation rules (client or server side) | Changes accepted input |
| File upload paths, permissions, `chmod` values | cPanel-specific breakage |
| Dependency versions, `composer.json`, `package.json` scripts | Out of scope for a restyle |
| Anything in `/vendor`, `/node_modules`, or generated output | Not source |

**Before renaming any class:** grep the whole repo for that string first. If a `.php` or `.js`
file references it, keep the original class on the element and add new styling classes
alongside it. Never swap it out.

```bash
# run this before touching any selector
grep -rn "the-class-name" --include="*.php" --include="*.js" --include="*.html" .
```

---

## 4. In scope — what you may change

- **CSS**: this is the main surface. Colours, typography, spacing, radii, shadows, layout,
  transitions, responsive behaviour, dark mode.
- **Markup, structurally neutral only**: adding wrapper `<div>`s, semantic tags
  (`<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`), `class` attributes, and
  accessibility attributes (`alt`, `aria-label`, `role`, `for`).
- **Static text that is purely decorative**: only when explicitly asked.
- **Asset references**: swapping an image for a better-sized version of *the same image*.
- **New CSS files** added to the existing asset folder and linked in the template `<head>`.

Preferred approach: **additive styling**. Write new CSS, override old rules, and leave the
old stylesheet in place unless asked to remove it. This keeps every change reversible.

---

## 5. Images & Visual Assets

- **Dedicated Authentic Image Repository:**
  - Authentic project repositories are provided containing real, historical, and field-verified photos organized into dedicated directories:
    1. `Images/Disability/` (16 authentic field photos: assistive devices, prosthetic fittings, wheelchair distributions, accessible voting, Divyang Diwas, CBR meetings)
    2. `Images/Sanjy Waghale/` (2 dedicated authentic high-resolution field photos/portraits of Sanjay Waghale at work and in the community)
    3. `Images/Mental health/` (26 authentic field photos: psychiatric consultations, doctor checkups, NALAM home visits, Home Again caregiver circles, psycho-social sessions, worker trainings, anti-stigma street theatre)
    4. `Images/Empowering Lives, Nurturing Earth- Our Holistic Community Impact /` (16 authentic field photos: Dona-pattal leaf plate SHG enterprise, Pashu Sakhi livestock healthcare, check dam / watershed Shramdaan, tree plantation, pre-primary school children, health camps, relief distributions, SRIJAN youth assemblies)
    5. `Home/` (8 authentic high-resolution field photos curated specifically for the 5-slide Homepage Hero Carousel, accompanying `Home/content.txt`)
    6. `Inspiring Story/Meera Pahad’s/` (3 authentic field photos documenting Meera Pahad's Pashu Sakhi veterinary healthcare work and livestock support in Nanda village, accompanying `Inspiring Story/Meera Pahad’s/story.txt`)
  - All images are mirrored with clean, web-safe filenames in `public_html/wp-content/uploads/gasvs_images/` for direct WordPress template integration:
    - `public_html/wp-content/uploads/gasvs_images/home_hero/`:
      - `home_hero_01_empowering_rural_01.jpeg` & `home_hero_01_empowering_rural_02.jpeg` (Slide 1: Empowering Rural and Tribal Communities)
      - `home_hero_02_mental_health_01.jpg` & `home_hero_02_mental_health_02.jpg` (Slide 2: Mental Health for All)
      - `home_hero_03_inclusion_dignity.png` (Slide 3: Inclusion, Dignity and Equal Opportunities)
      - `home_hero_04_empowering_women.jpeg` (Slide 4: Empowering Women, Transforming Lives)
      - `home_hero_05_brighter_futures_01.jpeg` & `home_hero_05_preprimary_school_02.jpeg` (Slide 5: Nurturing Brighter Futures)
    - `public_html/wp-content/uploads/gasvs_images/stories/meera_pahad/`:
      - `meera_pahad_pashu_sakhi_01.jpeg` (Meera Pahad field portrait in Nanda village)
      - `meera_pahad_pashu_sakhi_02.jpeg` (Meera Pahad with livestock / community healthcare)
      - `meera_pahad_pashu_sakhi_03_treatment.jpg` (Livestock clinical examination & goat treatment)
    - `public_html/wp-content/uploads/gasvs_images/disability/`:
      - `disability_15_sanjay_waghale_portrait_01.jpeg` & `disability_16_sanjay_waghale_portrait_02.jpeg` (Dedicated Sanjay Waghale portraits alongside `disability_03_sanjay_waghale_pump.jpg`)
    - `public_html/wp-content/uploads/gasvs_images/mental_health/` (26 field photos: clinical, NALAM, Home Again, DMHP, psycho-social)
    - `public_html/wp-content/uploads/gasvs_images/community_impact/` (16 field photos: livelihood, environment, education, youth)
- **CRITICAL ANTI-DUPLICATION RULE (DO NOT REUSE THE SAME IMAGE REPEATEDLY):**
  - **Never use or repeat the same image multiple times across pages, cards, or sections.**
  - Previously, identical images (such as `pic1`, `pic2`, `pic3`, `pic4` or `13.jpg`) were repeatedly shown across different areas.
  - Every card, program, case study, and spotlight section **MUST use a distinct, unique photo** matching its authentic subject matter from the `Images/` repository.
- **Strictly Authentic Images Only:**
  - Use only authentic field photos from `Images/` or existing project media.
  - **Do not download, generate, or link external stock images.** No Unsplash, no placeholder services, no CDN hotlinks.
- **Presentation Standards:**
  - Always keep or add a meaningful `alt` attribute describing the actual activity depicted.
  - Use `object-fit: cover` with an explicit aspect ratio rather than distorting images.
  - Add `loading="lazy"` to below-the-fold images; never to the hero image.
  - For critical cards, use clean badges and subtle hover zooms without layout shifts.

---

## 6. Design direction

Aim for a clean, current, professional look. Specifics:

**Design tokens** — define once at the top of the new stylesheet, use everywhere:

```css
:root {
  --color-bg:        #ffffff;
  --color-surface:   #f7f8fa;
  --color-text:      #1a1d21;
  --color-muted:     #6b7280;
  --color-accent:    /* pull from the existing logo/brand image */;
  --color-border:    #e5e7eb;

  --radius-sm: 6px;
  --radius-md: 12px;
  --radius-lg: 20px;

  --space-1: 4px;  --space-2: 8px;  --space-3: 16px;
  --space-4: 24px; --space-5: 40px; --space-6: 64px;

  --shadow-sm: 0 1px 2px rgba(0,0,0,.05);
  --shadow-md: 0 4px 16px rgba(0,0,0,.08);

  --font-sans: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
}
```

**Rules of thumb**

- Derive the accent colour from the existing logo or brand imagery — don't invent a palette
  that fights the brand.
- One typeface family, two or three weights. Self-host or use `system-ui`; avoid adding a
  Google Fonts request unless asked.
- Generous whitespace. Most dated layouts are cramped, not ugly.
- Consistent spacing scale — no arbitrary `margin: 17px`.
- Soft shadows and subtle borders over heavy 3D effects, bevels, and hard drop shadows.
- Max content width around 1200px, centred, with real side padding on mobile.
- Hover, focus, and active states on every interactive element.
- **Visible focus rings.** Never `outline: none` without a replacement.
- Respect `prefers-reduced-motion`; keep transitions under 250ms.
- Mobile-first. Test at 360px, 768px, 1024px, 1440px.
- Target WCAG AA contrast (4.5:1 for body text).

**Avoid:** auto-playing carousels, parallax, scroll-jacking, decorative animation on data
tables, and anything that needs new JavaScript. If a design idea requires new JS behaviour,
propose it first — don't just add it.

---

## 7. Workflow

1. **Audit first.** List the templates, stylesheets, and images. Report what you found and
   which files you plan to touch. Wait for a go-ahead before editing.
2. **Baseline.** Note the current behaviour of any page you're about to restyle: what the
   forms submit, what the buttons do, what the JS hooks are.
3. **One page or component at a time.** Do not sweep the whole site in a single pass.
4. **Edit, then verify** (section 8) before moving to the next page.
5. **Summarise** each change: files touched, what changed visually, and an explicit
   confirmation that no logic was altered.

**Git:** if the repo is under version control, work on a branch like `redesign/frontend` and
commit per page — `style(home): modernise hero and nav`. If it is **not** under version
control, copy any file to `filename.ext.bak` before the first edit to it.

---

## 8. Verification checklist & Mandatory Visual Screenshot Inspection

Run through this after every page. Report the results.

- [ ] `grep` confirms no `name`, `id`, `action`, or `method` attribute was changed
- [ ] `php -l path/to/file.php` passes on every PHP file touched (no syntax errors)
- [ ] Every form still submits to the same URL with the same fields
- [ ] Every link still points to the same destination
- [ ] All JS console errors: zero new ones
- [ ] All images resolve — no 404s, no broken thumbnails
- [ ] **MANDATORY SCREENSHOT & VISUAL ANALYSIS:**
  - After modifying templates (`.php`) or CSS (`.css`), the agent **MUST ALWAYS** generate screenshots at Desktop (1440px) and Mobile (375px) viewports (e.g., using `python3 scripts/capture_preview.py` and headless Chrome).
  - The agent **MUST explicitly call `view_file` on both screenshot images** and visually analyze them for layout flaws:
    - Overlapping text, headers, or floating badges
    - Text clipping or horizontal scrollbars on mobile (375px)
    - Collision between carousel controls/arrows and captions
    - Card alignment, paddings, and contrast
  - Any identified visual defects must be corrected before concluding the task.
- [ ] Keyboard tab order works; focus is visible throughout
- [ ] No hard-coded absolute local paths (`C:\...`, `file:///...`) in any output
- [ ] No credentials, API keys, or server paths introduced into frontend files
- [ ] Diff reviewed line by line — no incidental logic edits snuck in


---

## 9. cPanel-specific notes

- Paths are **case-sensitive** on the Linux server even if they aren't locally. `Logo.PNG`
  and `logo.png` are different files. Match the exact casing of the file on disk.
- Keep asset paths **relative** (`assets/css/app.css`), not absolute to the local machine.
- Do not alter file permissions or add `.htaccess` rules.
- Do not add a build step, bundler, or `node_modules` dependency unless explicitly asked —
  the output has to be plain static files the server can serve directly.
- New files go in the existing asset folders. Don't restructure directories.

---

## 10. When to stop and ask

Stop and ask before:

- Renaming or deleting any existing file
- Removing any element from the markup
- Changing any text the user might consider content
- Adding a library, framework, font service, or CDN link
- Anything that requires touching a `.php` file beyond its HTML output
- Any change you cannot fully revert

---

## 11. Response format

End every task with:

```
Files changed:  <list>
Visual changes: <2–4 bullets>
Logic changes:  None — <how you verified>
Images used:    <existing files reused, and where>
Needs review:   <anything uncertain, or "nothing">
```

---

## 12. Primary Master Website Content & Architecture (from GASVS_Homepage_Content_with_Additional_Impact_Numbers.docx)

`GASVS_Homepage_Content_with_Additional_Impact_Numbers.docx` is the **PRIMARY, AUTHORITATIVE** document for website content, navigation hierarchy, page copy, thematic program scopes, and master impact metrics. All frontend development, copywriting, and template structures must adhere strictly to the 14-page architecture defined below.

### 12.1 Site-Wide Information Architecture & Navigation

To avoid repetition and give every page a distinct purpose:
- **Top Navigation:**
  - `Home`
  - `About Us`
  - `Our Work`
  - `Impact & Stories`
  - `Partners`
  - `Resources`
  - `Get Involved`
  - `Contact`
- **Footer Links:**
  - `About Us` | `Our Work` | `Impact & Stories` | `Partners` | `Resources` | `Get Involved` | `Contact` | `Privacy Policy` | `Accessibility`
- **Official Registered Entity Details:**
  - **Registered Name:** Gramin Adiwasi Samaj Vikas Sansthan (GASVS)
  - **Established:** 1991 (37+ years of grassroots experience)
  - **Legal Status:** Society Registration under M.P. Society Registration Act of 1973 (Reg. No.: M.P. – 25307)
  - **Head Office:** Vivekanand Colony, Belgaon, Sausar, District Pandhurna, Madhya Pradesh – 480106
  - **Contact:** Phone: +91 9823224640 | Email: info@gasvs.org | Website: www.gasvs.org

---

### 12.2 Master Verified Impact Metrics (Zero Dummy Data Policy)

The following metrics are officially verified and must be used across all templates, stat counters, and impact widgets:
- **19,328+** individuals reached through community mental-health initiatives
- **7,500+** Persons and Children with Disabilities (PwDs and CwDs) supported
- **3,500+** people linked to livelihood opportunities
- **1,450+** people benefiting from renewable energy
- **4,200+** villages reached through community interventions
- **6,543+** frontline workers, caregivers, and stakeholders capacitated
- **17.5 lakh+** population covered through strengthened public systems
- **37+ years** of grassroots experience (working alongside communities since 1991)

---

### 12.3 Page 1 | HOME (Complete Specification & Copy)

- **Headline:** Building inclusive communities where every person can live with dignity
- **Lead Intro:** Since 1991, Gramin Adiwasi Samaj Vikas Sansthan (GASVS) has worked with underserved and marginalised communities to strengthen well-being, inclusion and opportunity at the grassroots. Through community-based mental health support, disability inclusion, health and nutrition initiatives, livelihoods and social justice work, we help communities access support, build capabilities and participate more fully in society.
- **Experience Badge:** 37 + years of experience
- **Hero Carousel Specification (from `Home/content.txt` & `Home/`):**
  - **Slide 1:**
    - *Heading:* Empowering Rural and Tribal Communities
    - *Tagline:* Building inclusive, resilient, and self-reliant communities through sustainable development.
    - *Visual Assets:* `gasvs_images/home_hero/home_hero_01_empowering_rural_01.jpeg` / `home_hero_01_empowering_rural_02.jpeg`
    - *Action Button:* `Explore Our Work`
  - **Slide 2:**
    - *Heading:* Mental Health for All
    - *Tagline:* Promoting mental well-being, access to care, and dignity for every individual.
    - *Visual Assets:* `gasvs_images/home_hero/home_hero_02_mental_health_01.jpg` / `home_hero_02_mental_health_02.jpg`
    - *Action Button:* `Explore Mental Health`
  - **Slide 3:**
    - *Heading:* Inclusion, Dignity and Equal Opportunities
    - *Tagline:* Enabling persons with disabilities to live independent, empowered, and meaningful lives.
    - *Visual Asset:* `gasvs_images/home_hero/home_hero_03_inclusion_dignity.png`
    - *Action Button:* `Explore Disability Inclusion`
  - **Slide 4:**
    - *Heading:* Empowering Women, Transforming Lives
    - *Tagline:* Strengthening livelihoods, leadership, and economic independence for women.
    - *Visual Asset:* `gasvs_images/home_hero/home_hero_04_empowering_women.jpeg`
    - *Action Button:* `Explore Livelihoods`
  - **Slide 5:**
    - *Heading:* Nurturing Brighter Futures
    - *Tagline:* Supporting children's education, health, nutrition, and a better future for every child.
    - *Visual Assets:* `gasvs_images/home_hero/home_hero_05_brighter_futures_01.jpeg` / `home_hero_05_preprimary_school_02.jpeg`
    - *Action Button:* `Support Our Work`
- **Our Impact at a Glance (Counters):**
  - `19,328+` individuals reached through community mental-health initiatives
  - `7,500+` PwDs and CwDs supported
  - `3,500+` people linked to livelihood opportunities
  - `1,450+` people benefiting from renewable energy
  - `4,200+` villages reached through community interventions
  - `6,543+` frontline workers, caregivers and stakeholders capacitated
  - `17.5 lakh+` population covered through strengthened systems
- **Action Buttons:**
  - Primary button: `Explore Our Work`
  - Secondary button: `Partner with GASVS`
- **A Community-Centered Approach Section:**
  > Lasting change is built with communities, not simply delivered to them. GASVS works alongside local people, frontline workers, institutions and partner organizations to respond to local needs, strengthen capacities and develop practical approaches that can be sustained over time. Dignity, participation and inclusion are central to this work.
- **Explore Our Work (6 Thematic Pillars & Navigation Links):**
  1. **Mental Health & Community Living**
     - *Summary:* Community-based mental health care, rehabilitation, skill development, mental health literacy and social participation.
     - *Link:* `Explore mental health`
  2. **Health & Nutrition**
     - *Summary:* Preventive health, community awareness, health screening and nutrition support, with attention to children, women and underserved rural communities.
     - *Link:* `Explore health and nutrition`
  3. **Disability Inclusion**
     - *Summary:* Work to improve access to services, community support and rights for persons with disabilities, while promoting dignity and participation.
     - *Link:* `Explore disability inclusion`
  4. **Livelihoods & Skills**
     - *Summary:* Practical skill-building and income-generating activities, including women-led enterprises, traditional products and livestock-based livelihoods.
     - *Link:* `Explore livelihoods`
  5. **Environment & Community Action**
     - *Summary:* Collective action on environmental care through tree plantation, cleanliness and community-led practices.
     - *Link:* `Explore environment`
  6. **Legal Rights & Social Justice**
     - *Summary:* Legal awareness, community engagement and stronger responses to issues such as child marriage.
     - *Link:* `Explore rights and justice`
- **Our Journey Section:**
  > Founded in 1991, GASVS has grown from a grassroots commitment to marginalized tribal communities into a professionally managed not-for-profit organization. Our work brings together community engagement, capacity building and partnerships to respond to interconnected challenges in health, inclusion and sustainable livelihoods.
- **Recognition Section:**
  > GASVS’s work has received recognition at district, state and national levels, including a National Award in 2021 for services to persons with disabilities. Visit Impact & Stories for a selected list of awards and milestones.
- **Closing Call to Action:**
  > Change grows through collaboration. Join GASVS as a partner, volunteer, professional resource person or donor.
  - *Buttons:* `Work with Us` | `Support Our Work`

---

### 12.4 Page 2 | ABOUT US

- **Who We Are:**
  - Gramin Adiwasi Samaj Vikas Sansthan (GASVS) is a not-for-profit organization established in 1991 in the Sausar area of Madhya Pradesh. It began with a commitment to work alongside tribal communities who were often overlooked in mainstream development. Over time, GASVS developed its work in community capacity building, issue-based networking and grassroots programmes addressing health, disability, nutrition, livelihoods and social inclusion.
  - Today, GASVS works through partnerships with organizations that share its commitment to dignity and equitable development. Its programmes seek to respond not only to immediate needs, but also to the social and institutional barriers that prevent people from accessing services, opportunities and participation.
- **Vision:**
  - A society in which every person, regardless of socio-economic circumstances or place of residence, has equitable access to healthcare, nutrition and livelihood opportunities, and can live with dignity and participate fully in community life.
- **Mission:**
  - To advance sustainable development and social equity among marginalised communities through grassroots initiatives that build capacities, strengthen access to essential services and promote the inclusion of people who are often excluded from development processes, particularly persons with physical and psychosocial disabilities.
- **Our Goal:**
  - To help marginalized communities build the capabilities, relationships and opportunities needed to live with dignity and greater self-reliance. GASVS pursues this goal through evidence-informed programmes, community participation and collaboration with philanthropic, civil-society and institutional partners.
- **How We Work (6 Guiding Principles):**
  1. *Start with community realities:* Programme design is grounded in the needs and circumstances of the people and communities with whom GASVS works.
  2. *Build local capacity:* Training, awareness and support for community members and frontline stakeholders strengthen local knowledge and the ability to respond to challenges.
  3. *Connect people with services and opportunities:* GASVS works to reduce barriers that can prevent individuals and families from accessing care, rehabilitation, entitlements and livelihood options.
  4. *Work through partnerships:* The organization follows a partner-support model, collaborating with donors, technical organizations, public systems and local stakeholders.
  5. *Focus on dignity and inclusion:* Programmes aim to support participation and reduce exclusion, especially for people with disabilities and other groups facing structural barriers.
  6. *Pursue sustainable change:* The emphasis is on practical, locally relevant approaches that contribute to longer-term well-being rather than one-time activities alone.
- **Our Values in Practice:**
  - Dignity, inclusion, participation, collaboration and sustainability guide the way GASVS engages with communities and partners. These principles inform how needs are understood, how activities are delivered and how opportunities are created for people to take part in decisions that affect their lives.
- **Where We Work:**
  - Interventions span Sausar and Pandhurna blocks in Madhya Pradesh, Nagpur and Wardha districts in Maharashtra, and Sukma district in Chhattisgarh. (Geographic confirmation required before publishing specific block boundaries).
- **Organisation at a Glance:**
  - Full registered name, 1991 founding year, Society Registration Act of 1973 (M.P. – 25307), Head Office address, phone, and official email.

---

### 12.5 Page 3 | OUR WORK — OVERVIEW

- **Overview Concept:**
  - GASVS works across connected areas of community well-being and inclusion. Mental health, general health, nutrition, livelihoods, disability inclusion, environmental action and access to justice are presented as distinct areas of work, while recognizing that the challenges communities face are interconnected.
- **Six Focus Areas:**
  1. *Mental Health:* Community-based care, rehabilitation, mental health literacy, capacity building and social integration.
  2. *General Health & Nutrition:* Health camps, screenings, health education and initiatives supporting children’s nutrition and early development.
  3. *Livelihood & Skill Development:* Skills and income-generation opportunities through eco-friendly plate making, organic gulal production and goat-rearing support.
  4. *Disability Inclusion:* Community support groups, rights awareness and assistance to improve access to services for persons with disabilities.
  5. *Environment:* Tree plantation, cleanliness and community action that supports environmental awareness and local well-being.
  6. *Legal Rights & Social Justice:* Community awareness, legal support and capacity building related to access to justice, including work to address child marriage.
- **Design Recommendation:** Use six visual cards with one authentic photograph per theme, a short description and a consistent `Explore this work` link opening each dedicated page.

---

### 12.6 Page 4 | OUR WORK — MENTAL HEALTH

- **Suggested Page Title:** Mental health care rooted in community
- **Core Purpose:** Accessible, inclusive and community-based support for people experiencing mental health challenges, including people with psychosocial disabilities. Awareness, capacity building, rehabilitation, and stigma reduction.
- **Key Focus Areas:**
  - Strengthening awareness and understanding of mental health within communities.
  - Building capacities of frontline workers and local stakeholders to recognise concerns and connect people with support.
  - Supporting rehabilitation, skill development, employment and social integration for people with psychosocial disabilities.
  - Promoting community-based care and reducing barriers that contribute to exclusion or gaps in treatment.
- **Featured Programmes:**
  1. **Community Mental Health Programme**
     - *Theme:* Bringing Mental Health Services, Dignity and Support to Every Member of the Community.
     - *Geography:* Villages across Pandhurna district, Bichhua block (Chhindwara district), Betul and Multai blocks (Betul district), Madhya Pradesh.
     - *Actions:* Early identification, timely treatment and counselling, rehabilitation and livelihood linkages, training frontline workers, and coordination with healthcare providers and government institutions.
     - *Commitment:* "To make mental health care accessible, community-driven and inclusive—ensuring that no one is left behind."
  2. **Home Again**
     - *Theme:* From Institutional Care to Dignified and Inclusive Community Living.
     - *Location:* Indore, Madhya Pradesh.
     - *Actions:* Providing safe housing, continuous care and dignified community living for women experiencing mental health challenges who lack family/social support. Facilitating transition from institutional care to community homes, psychosocial support, life skills, livelihood training, and challenging social stigma.
  3. **Project UDAAN**
     - *Theme:* Strengthening Mental Health Awareness and Access to Care.
     - *Scope:* Implemented under District Mental Health Programme (DMHP) in Nagpur and Wardha, Maharashtra.
     - *Actions:* Early identification, timely intervention, capacity building of government health systems and frontline workers, community mental health literacy, and continuity of care.
- **Content Standard:** Include only approved, consent-based stories. Never publish identifiable case details without explicit informed consent.

---

### 12.7 Page 5 | OUR WORK — GENERAL HEALTH & NUTRITION

- **General Health Awareness:**
  - Preventive health and health awareness in rural and underserved communities.
  - Health check-ups, screening activities (diabetes, hypertension, eye checkups), treatment facilitation, maternal and child health services, and health education.
- **Pre-School Nutrition and Education:**
  - Combines daily nutritious meals with nutrition education and early childhood development.
  - Focuses on tribal villages, providing school-readiness support and nutritional assistance for children and families.
- **Connected Approach:**
  - Linking health and nutrition challenges with household access to resources, services, and practical preventive care.

---

### 12.8 Page 6 | OUR WORK — DISABILITY INCLUSION

- **Core Scope:** Promoting rights, participation and inclusion of persons with disabilities (PwDs) by dismantling barriers to services, information, community life, and livelihoods.
- **Chetana BDPO Initiative:**
  - Community-based disabled people's organizations (BDPOs), rights advocacy, and entitlement facilitation.
  - Building awareness and strengthening local peer support networks.
- **Our Inclusion Principles:**
  1. Recognize the rights, choices and dignity of each person.
  2. Support access to relevant services and entitlements (UDID cards, pensions, aids).
  3. Encourage active participation in family and community life.
  4. Work with families, community groups and local stakeholders to identify and eliminate barriers.
- **Synergy:** Uniting mental health and disability inclusion under the shared umbrella of dignity and community-based living without conflating distinct support needs.

---

### 12.9 Page 7 | OUR WORK — LIVELIHOODS & SKILL DEVELOPMENT

- **Scope:** Building household resilience and self-reliance for tribal women and marginalized families through practical, locally relevant production skills.
- **Core Initiatives:**
  1. **Eco-Friendly Plate Making:** Training tribal women in biodegradable leaf plate (Dona-pattal) production and connecting them to local enterprise opportunities.
  2. **Organic Gulal Production:** Developing production skills for safe, natural Holi gulal using botanical extracts and local forest resources.
  3. **Pashu Sakhi Project:** Livestock management and goat-rearing training for tribal and rural women resource persons, supporting animal healthcare and supplementary household income.
     - *Verified Field Case (Meera Pahad, Nanda Village, Junnardeo Block):* Meera Pahad, a 40-year-old Scheduled Caste woman, overcame longstanding social exclusion through Pashu Sakhi training. During the July 2024 Foot-and-Mouth Disease (FMD) outbreak, her timely veterinary diagnosis, care, and containment protocols protected village livestock from devastating loss. She now serves as a respected veterinary resource earning ~₹8,000/month.

---

### 12.10 Page 8 | OUR WORK — ENVIRONMENT

- **Environmental Stewardship:** Part of holistic sustainable community development.
- **Tree Plantation Drives:** Undertaken in Pandhurna & Chhindwara districts to enhance biodiversity, soil conservation, and community stewardship.
- **Cleanliness Drives:** Promoting community-led waste management, sanitation, hygiene, and collective responsibility for public village spaces.

---

### 12.11 Page 9 | OUR WORK — LEGAL RIGHTS & SOCIAL JUSTICE

- **Access to Justice Project:**
  - Implemented in partnership with the **Kailash Satyarthi Foundation**.
  - Focuses on preventing child marriage and addressing exploitation in rural and tribal communities.
  - Actions: Sharing accessible legal rights information, engaging communities in prevention, training frontline actors, and strengthening legal and psychosocial protection pathways.
- **Protection Standard:** Never publish sensitive case details, identifiable information, or photographs that could compromise any child or survivor.

---

### 12.12 Page 10 | IMPACT & STORIES

- **Impact Philosophy:** Moving beyond raw activity counts to meaningful changes in human dignity, rights access, recovery, and economic self-reliance.
- **Reporting Standards:** Never mix lifetime reach with annual figures or double-count individuals.
- **Official Awards & Recognition Timeline:**
  - **2005:** District Yuva Mandal Puraskar (District level) — Ministry of Youth & Sports Affairs / NYK
  - **2006:** State Yuva Mandal Puraskar (State level) — Ministry of Youth & Sports Affairs / NYK
  - **2006:** National Yuva Mandal Puraskar (National level) — Ministry of Youth & Sports Affairs / NYK
  - **2017:** Empowerment of People Campaign — Saarthi Zee Media
  - **2017:** Young Leaders Award — Indian Youth Forum & UN Change Maker
  - **2018:** Central India Women Excellence Award — Democratic Mirror Group
  - **2019:** National Mahaveer Award — Bhagwan Mahaveer Foundation
  - **2021:** National Award 2020 for Services to Persons with Disabilities — Government of India, Ministry of Social Justice and Empowerment (Conferred by the Hon'ble President of India)
- **Story Format Requirements:** Headline | Location and Programme | Context described respectfully | What changed | Beneficiary's perspective | Approved photo | Programme link.
- **Verified Core Stories of Change Roster:**
  1. *Khushi Vishwakarma* (Solar Engineer, Rakhi-Kol village, Junnardeo Block) — Clean Energy & Women's Technical Livelihoods.
  2. *Sanjay Waghale* (Locomotor Disability to Community Leadership & Gram Panchayat Pump Operator, Teegaon village, Pandhurna) — Disability Inclusion & CBR.
  3. *Meera Pahad* (From Social Exclusion to Community Leadership as a Pashu Sakhi, Nanda village, Junnardeo Block) — Livelihoods, Scheduled Caste Inclusion & Livestock Healthcare.
- **News & Updates:** Dated, authentic entries covering workshops, stakeholder visits, trainings, and milestones.

---

### 12.13 Page 11 | PARTNERS

- **Partnership Model:** Collaborative engagements with government health departments, public systems, technical NGOs, and institutional donors.
- **Call to Action:** Discuss a Partnership (inviting collaboration across health, disability, livelihoods, environment, and social justice).

---

### 12.14 Page 12 | RESOURCES

- **Standard:** Transparent, organized library of verified public publications.
- **Zero Dummy Data Mandate:** If annual reports or newsletters are not yet uploaded, DO NOT create fake downloadable cards. State verified statutory registrations and offer direct contact for official audited statements.

---

### 12.15 Page 13 | GET INVOLVED

- **Headline:** Be part of a more inclusive future
- **Engagement Paths:**
  1. *Volunteer your time and skills:* Training, communications, technical assistance.
  2. *Offer professional or technical support:* Healthcare, psychiatric expertise, vocational training.
  3. *Support the work financially:* Transparent donations eligible under Section 80G (50% tax exemption) and FCRA.
- **Enquiry Form Fields:** Name, Organization (optional), Email, Phone (optional), Interest dropdown, Message, Consent checkbox.

---

### 12.16 Page 14 | CONTACT

- **Headline:** Connect with GASVS
- **Address:** Vivekanand Colony, Belgaon, Sausar, District Pandhurna, Madhya Pradesh, India – 480106
- **Phone:** +91 9823224640 | **Email:** info@gasvs.org | **Website:** www.gasvs.org
- **Footer Navigation Links:** About Us | Our Work | Impact & Stories | Partners | Resources | Get Involved | Contact | Privacy Policy | Accessibility

---

## 13. Supplementary Organizational Reference & Archive (from GASVS_Website.docx)

This section preserves extended organizational background, detailed governance records, institutional partner rosters, and verified individual case studies from `GASVS_Website.docx` to supplement `GASVS_Homepage_Content_with_Additional_Impact_Numbers.docx`.

### 13.1 Statutory Registrations & Tax Accreditations
- **Permanent Account Number (PAN):** AAATG5607K
- **Society Registration:** M.P.–25307 (Registered under M.P. Society Registration Act of 1973)
- **Tax & Compliance Accreditations:** Section 12A, Section 80G (50% Tax Exemption), FCRA (Foreign Contribution Regulation Act), CSR-1 (Ministry of Corporate Affairs), NITI Aayog NGO Darpan.

### 13.2 Governance & Leadership
- **Chief Executive Officer (CEO):** Mr. Vijay Dhawle
- **Governing Board:**
  - Mrs. Sanjivni Thakre — President
  - Mr. Sanjay Deotale — Vice-President
  - Mr. Kiran Rangare — Secretary
  - Mr. Sanjay Thakre — Joint Secretary
  - Mr. Purushottam Vankar — Treasurer
  - Mrs. Geeta Bhongade — Executive Member
  - Mrs. Vaishali Kolhe — Executive Member
  - Mr. Shyamrao Dhawle — Director
- **Workforce:** 72 total staff (45 male, 27 female; 64 dedicated field staff).

### 13.3 Extended Partner Network Directory
- **Government Partners:** District Health Department (MP), Public Health Department (Maharashtra), National Health Mission (NHM Maharashtra), Government Medical College (GMC Chhindwara), Regional Mental Hospital (Nagpur), Pandhurna District Police.
- **Foundations & CSR:** The Live Love Laugh Foundation (TLLLF), Gulshan Care Foundation.
- **Philanthropic & International:** Rural India Supporting Trust (RIST), Indira Foundation, Jiv Daya Foundation (JDF).
- **Technical & NGO Partners:** The Banyan (Chennai), Madhya Pradesh Voluntary Health Association (MPVHA), NIWCYD (Nagpur), Bindi International, The Goat Trust, CORD Organisation (Vanbhoj Initiative), Kailash Satyarthi Children's Foundation.

### 13.4 Verified Individual Stories of Change
1. **Khushi Vishwakarma — Lighting Homes, Building Futures (Solar Engineer):**
   Selected at 19 from Rakhi-Kol village (Junnardeo Block) for the Solar Engineer Training Programme supported by Bindi International. Despite personal tragedy, completed residential training, installed solar lighting in over 100 households, earned ₹30,000 from installations, and earns ~₹5,000/month through maintenance.
2. **Sanjay Waghale — Locomotor Disability to Community Leadership:**
   A 40-year-old man from Teegaon village (Pandhurna). Supported by GASVS CBR programme to receive a UDID card, disability pension, and marriage grant. Established a goat-rearing enterprise, became SHG President, and in 2025 secured formal appointment as Pump Operator at the Gram Panchayat. Authentic field media: `disability_03_sanjay_waghale_pump.jpg` (operating village pump) and dedicated portraits `disability_15_sanjay_waghale_portrait_01.jpeg` & `disability_16_sanjay_waghale_portrait_02.jpeg` (from `Images/Sanjy Waghale/`).
3. **Meera Pahad — From Social Exclusion to Community Leadership (Pashu Sakhi & Livestock Healthcare):**
   A 40-year-old Scheduled Caste woman from Nanda village (Junnardeo Block). Long subjected to caste-based marginalization and social exclusion on the village outskirts, relying on goat-rearing. Joined the GASVS Pashu Sakhi programme and gained comprehensive hands-on skills in livestock disease identification, basic medical treatment, vaccination, and preventive animal healthcare. In July 2024, when a severe Foot-and-Mouth Disease (FMD) outbreak struck Nanda village threatening community herds, Meera provided timely diagnosis, disease containment, and medical care, safeguarding livelihoods across the village. Her breakthrough altered longstanding social perceptions, turning her into a trusted, respected veterinary leader. She now earns ~₹8,000/month serving Nanda and neighboring villages. Authentic field media: `meera_pahad_pashu_sakhi_01.jpeg`, `meera_pahad_pashu_sakhi_02.jpeg`, and `meera_pahad_pashu_sakhi_03_treatment.jpg` (from `Inspiring Story/Meera Pahad’s/`).

### 13.5 Supplementary Program Details
- **Solar Energy Electrification Programme (Junnardeo Block):** 150 tribal households electrified, 350+ community members gained clean lighting, 150 systems installed, 6 tribal women trained as Solar Engineers; 3 community solar systems (3 kW) and one 5 kW system deployed.
- **Climate-Resilient Organic Agriculture:** 150+ small and marginal farmers, 15 community-owned organic fertilizer units across 15 villages producing vermicompost.
- **School Revitalization & Youth:** Nandewani Government School revitalization with recycled materials ('Mera Udyan'); SRIJAN Youth Initiative in partnership with Pandhurna Police training 30+ adolescents in leadership, martial arts, cyber safety, and legal literacy.