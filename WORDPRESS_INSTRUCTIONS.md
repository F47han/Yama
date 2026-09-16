# 📘 YAMAS Hellenic Iced Tea — WordPress Integration Guide

This repository has been specially built and structured for **100% Native WordPress Deployment**.

---

## 🛠️ Method 1: WordPress Page Template (`page-yamas.php`) [RECOMMENDED]

If you have access to your WordPress theme files (via FTP, cPanel, or Theme File Editor):

1. **Upload `page-yamas.php`:**
   Copy `page-yamas.php` into your active WordPress theme directory:
   `/wp-content/themes/your-active-theme/page-yamas.php`

2. **Upload Images:**
   Copy the `Yamas` image folder into your WordPress uploads directory:
   `/wp-content/uploads/Yamas/`
   *(or into your theme folder at `/wp-content/themes/your-active-theme/Yamas/`)*

3. **Publish the Page in WordPress Admin:**
   - Go to **Pages > Add New** in WordPress Admin.
   - Title your page (e.g., *YAMAS Hellenic Iced Tea*).
   - In the right-hand panel, under **Page Attributes > Template**, select **"YAMAS Hellenic Iced Tea Landing Page"**.
   - Click **Publish**.

---

## 🎨 Method 2: Elementor / Gutenberg Custom HTML Block (`wordpress-elementor-code.html`)

If you build your pages using **Elementor**, **Gutenberg**, **Divi**, or **WPBakery**:

1. **Upload Images to Media Library:**
   Upload all image files from the `Yamas/` folder to your WordPress Media Library (**Media > Add New**).

2. **Add an HTML Widget / Block:**
   Open your target page in Elementor (or the Gutenberg Block Editor) and drag in a **Custom HTML** widget/block.

3. **Paste the Code:**
   Copy the entire contents of [`wordpress-elementor-code.html`](file:///C:/Users/kidfl/.gemini/antigravity/scratch/Yama/wordpress-elementor-code.html) and paste it into the HTML widget.

4. **Adjust Image URLs (If Needed):**
   At the bottom of the HTML snippet, change the `YAMAS_WP_MEDIA_URL` variable to point to your media upload path:
   ```javascript
   const YAMAS_WP_MEDIA_URL = 'https://treasuresfromgreece.co.uk/wp-content/uploads/Yamas/';
   ```

---

## ✅ Key WordPress Features Included:

* **Scoped CSS (`.yamas-wp-wrapper` / `.yamas-wp-container`):** Styles are isolated to prevent conflicts with active WordPress headers, footers, and theme styles.
* **Dynamic Media Paths (`wp_upload_dir()` & `get_stylesheet_directory_uri()`):** Automatically resolves image paths in WordPress PHP templates.
* **WordPress Form Handler:** Direct trade enquiry submission opens a pre-filled trade email handler to `sales@treasuresfromgreece.co.uk`.
* **Mobile-Responsive:** Built with modern CSS grid/flexbox for flawless display on desktop, tablet, and mobile browsers.
