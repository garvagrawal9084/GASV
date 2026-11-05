---
name: verify-ui-screenshots
description: Automatically capture, view, and visually analyze desktop and mobile screenshots after modifying website templates or stylesheets to identify UI bugs, layout overlaps, and responsiveness issues.
---

# UI Screenshot Verification & Analysis Skill

Use this skill whenever changes are made to website templates (`.php`, `.html`), stylesheets (`.css`), or frontend scripts (`.js`).

## The Problem
When frontend changes are made without visual verification, visual bugs (such as overlapping elements, clipped text, broken mobile navigation, and uneven spacing) easily go unnoticed.

## Mandatory Procedure After Every Frontend Edit

1. **Generate Preview & Capture Screenshots:**
   Run the headless capture helper to generate screenshots at both Desktop (`1440x900`) and Mobile (`375x1300`):
   ```bash
   python3 scripts/capture_preview.py
   ```
   *(Note: Run headless Chrome with `BypassSandbox: true` if required on macOS).*

2. **Visually Inspect the Screenshots:**
   You MUST call the `view_file` tool on the generated images:
   - `screenshots/preview_desktop.png`
   - `screenshots/preview_mobile.png`

3. **Inspect for Specific UI Defects:**
   - **Text & Element Overlaps:** Check whether headers, floating badges, slide captions, or buttons collide with each other.
   - **Mobile Responsiveness (375px):** Ensure no horizontal scrollbar/overflow, text clipping, or unreadable font sizes.
   - **Clearance & Touch Targets:** Ensure interactive elements (slider navigation, buttons, dots) have at least 16–20px clearance and don't cover text.
   - **Visual Hierarchy & Contrast:** Verify text readability against background imagery and overlays.

4. **Iterate & Fix:**
   If any visual defect is observed, edit the CSS/template immediately and re-capture until the rendered output is clean and polished.
