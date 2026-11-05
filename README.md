# Gramin Adiwasi Samaj Vikas Sansthan (GASVS)

Official website repository for **Gramin Adiwasi Samaj Vikas Sansthan (GASVS)** — a grassroots non-profit organization established in 1991 working with underserved rural and tribal communities across Madhya Pradesh and Maharashtra in community mental health, disability inclusion, health & nutrition, sustainable livelihoods, and social justice.

---

## 📌 Technology Stack

- **Backend / CMS:** WordPress (PHP 8.x)
- **Theme:** `bosa-charity` (Child Theme with custom modern templates and styles)
- **Frontend:** Plain HTML5, CSS3 (`gasvs-modern.css`), Vanilla JavaScript (no build step or bundler required)
- **Database:** MySQL 8.x / MariaDB 10.6+ (Table prefix: `wpcw_`)
- **Visual Testing:** Node.js, Playwright, Python 3 + Headless Chrome

---

## 📂 Repository Structure

```text
GASV/
├── AGENTS.md                                   # Coding standards, zero dummy data rules & site specifications
├── GASVS_Homepage_Content_with_Additional_Impact_Numbers.docx # Master authoritative content & metrics document
├── GASVS_Website.docx                          # Organization profile and reference documentation
├── Home/                                       # Authentic high-res hero carousel assets & content.txt
├── Images/                                     # Master authentic field photography archives:
│   ├── Disability/                             # 16 authentic CBR, assistive devices & inclusion photos
│   ├── Mental health/                          # 26 authentic clinical, Home Again, NALAM & outreach photos
│   ├── Empowering Lives.../                    # 16 authentic SHG, livelihood, livestock & watershed photos
│   └── Sanjy Waghale/                          # Dedicated portraits and field photos of Sanjay Waghale
├── Inspiring Story/                            # Verified case studies (e.g. Meera Pahad's Pashu Sakhi journey)
├── gasvsor_wp501.sql                           # Complete WordPress database export with all pages and configurations
├── public_html/                                # WordPress web root (cPanel entry point)
│   ├── wp-config.php                           # Environment-aware WordPress configuration (Local vs Production)
│   └── wp-content/
│       ├── themes/bosa-charity/                # Custom theme templates, modern styles & scripts
│       │   ├── assets/css/gasvs-modern.css     # Primary modern visual styling
│       │   ├── front-page.php                  # Redesigned homepage template
│       │   └── ...                             # Redesigned thematic program templates
│       └── uploads/gasvs_images/               # Web-optimized authentic photo directory
├── scripts/                                    # UI screenshot testing tools (capture_preview.py)
├── package.json                                # Playwright testing dependencies
└── README.md                                   # Project documentation and local setup guide
```

---

## 🚀 How to Run the Project Locally

Follow these step-by-step instructions to set up and run the website on your local machine.

### Prerequisites

Ensure you have the following installed on your system:
1. **PHP 8.0 or higher** (with `mysqli`, `curl`, `gd`, `mbstring`, `xml` extensions enabled):
   ```bash
   php -v
   ```
2. **MySQL / MariaDB Server** (via Homebrew, XAMPP, MAMP, or native service):
   ```bash
   mysql --version
   ```
3. **Node.js & npm** *(optional, only needed for running Playwright screenshot tests)*:
   ```bash
   node -v
   npm -v
   ```

---

### Step 1: Clone the Repository

```bash
git clone https://github.com/garvagrawal9084/GASV.git
cd GASV
```

---

### Step 2: Database Setup

1. **Start your local MySQL service** (if not already running):
   - On macOS (Homebrew):
     ```bash
     brew services start mysql
     ```
   - On Linux:
     ```bash
     sudo systemctl start mysql
     ```
   - On XAMPP / MAMP: Start MySQL from the control panel.

2. **Create the local database:**
   ```bash
   mysql -u root -e "CREATE DATABASE IF NOT EXISTS gasvs_local CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
   ```

3. **Import the database dump:**
   ```bash
   mysql -u root gasvs_local < gasvsor_wp501.sql
   ```
   *(If your root MySQL user has a password, add `-p` to prompt for it.)*

4. **Update the site URL to your local port (`localhost:8000`):**
   ```bash
   mysql -u root gasvs_local -e "UPDATE wpcw_options SET option_value = 'http://localhost:8000' WHERE option_name IN ('siteurl', 'home');"
   ```

---

### Step 3: Verify `wp-config.php` Configuration

The project includes an **environment-aware** database configuration in `public_html/wp-config.php`:

```php
// ** Database settings - Environment-aware (Local vs cPanel Production) ** //
if ( ( isset( $_SERVER['HTTP_HOST'] ) && strpos( $_SERVER['HTTP_HOST'], 'localhost' ) !== false ) || php_sapi_name() === 'cli' ) {
    define( 'DB_NAME', 'gasvs_local' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_HOST', '127.0.0.1' );
} else {
    define( 'DB_NAME', 'gasvsor_wp501' );
    define( 'DB_USER', 'gasvsor_wp501' );
    define( 'DB_PASSWORD', '...' );
    define( 'DB_HOST', 'localhost' );
}
```

> **Note:** If your local MySQL setup uses a non-empty password (e.g. `root`), adjust the `'DB_PASSWORD'` line for the localhost block in `public_html/wp-config.php` to match your local credentials.

---

### Step 4: Start the Local Development Server

Run PHP's built-in web server pointing directly to `public_html`:

```bash
php -S localhost:8000 -t public_html
```

---

### Step 5: Access the Website

- **Frontend:** Open your browser and navigate to:
  ```text
  http://localhost:8000
  ```
- **WordPress Admin:**
  ```text
  http://localhost:8000/wp-login.php
  ```

---

## 📸 Automated Visual Regression Testing (Optional)

The repository includes automated scripts to test layouts and capture responsive screenshots (desktop 1440px and mobile 375px):

```bash
# 1. Install Node.js dependencies
npm install
npx playwright install chromium

# 2. Run full screenshot capture
node capture_all.js

# Or run individual section checks
node screenshots_disability.js
node screenshots_health.js
```

---

## 🔒 Policy & Coding Rules

- **Zero Dummy Data Policy:** No fabricated metrics, dummy testimonials, or placeholder reports. All claims, metrics, and content must trace directly to official verified records in `AGENTS.md` and `GASVS_Homepage_Content_with_Additional_Impact_Numbers.docx`.
- **Authentic Imagery:** Only real field photographs located in `Images/`, `Home/`, `Inspiring Story/`, and `public_html/wp-content/uploads/gasvs_images/` may be used. Stock photos and hotlinks are prohibited.
- **Backend Stability:** Visual changes are strictly additive CSS and markup enhancements. Backend PHP logic, database structures, and form actions must remain unchanged.

---

## 📄 License & Organization Details

- **Registered Organization:** Gramin Adiwasi Samaj Vikas Sansthan (GASVS)
- **Registration:** M.P. Society Registration Act of 1973 (Reg. No.: M.P. – 25307)
- **Head Office:** Vivekanand Colony, Belgaon, Sausar, District Pandhurna, Madhya Pradesh – 480106
- **Contact:** +91 9823224640 | info@gasvs.org | [www.gasvs.org](https://www.gasvs.org)
