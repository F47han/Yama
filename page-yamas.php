<?php
/**
 * Template Name: YAMAS Hellenic Iced Tea Landing Page
 * Description: Custom WordPress Page Template for YAMAS Hellenic Iced Tea wholesale landing page.
 * 
 * Instructions for WordPress:
 * 1. Upload this file (page-yamas.php) to your active WordPress theme directory (e.g. wp-content/themes/your-theme/page-yamas.php).
 * 2. Upload the 'Yamas' folder containing images to wp-content/uploads/Yamas/ or your theme's Yamas/ directory.
 * 3. In WordPress Admin, create a new page, select "YAMAS Hellenic Iced Tea Landing Page" under Page Attributes > Template.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

$upload_dir = wp_upload_dir();
$yamas_img_base = esc_url($upload_dir['baseurl'] . '/Yamas/');
$theme_img_base = get_stylesheet_directory_uri() . '/Yamas/';

get_header();
?>

<!-- Google Fonts for YAMAS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<div class="yamas-wp-wrapper">
<style>
/* ===== WORDPRESS SCOPED STYLING & TOKENS ===== */
.yamas-wp-wrapper {
  --aegean:#0077b6;
  --aegean-d:#023e8a;
  --aegean-l:#48b5e0;
  --aegean-s:#e8f4fd;
  --foam:#f0f8ff;
  --sun:#f4a261;
  --sun-d:#e07a3a;
  --white:#ffffff;
  --txt:#0d1b2a;
  --txt2:#2b4a5e;
  --txt3:#546e7a;
  --bdr:#cde4f5;
  --bdr2:#9ac8e8;
  --shadow:0 4px 20px rgba(0,119,182,.1);
  --shadow-b:0 8px 32px rgba(0,119,182,.18);
  --shadow-lg:0 16px 48px rgba(0,119,182,.14);
  font-family:'Inter',sans-serif;
  color:var(--txt);
  line-height:1.7;
  width: 100%;
  overflow-x: hidden;
  background: var(--white);
}

.yamas-wp-wrapper * { box-sizing: border-box; }
.yamas-wp-wrapper a { text-decoration: none; color: inherit; transition: all .25s; }
.yamas-wp-wrapper ul { list-style: none; margin:0; padding:0; }
.yamas-wp-wrapper img { max-width: 100%; height: auto; display: block; }

/* TOPBAR */
.yamas-wp-wrapper .topbar { background:var(--aegean-d); color:rgba(255,255,255,.85); font-size:12.5px; display:flex; align-items:center; justify-content:space-between; padding:9px 40px; flex-wrap:wrap; gap:10px; }
.yamas-wp-wrapper .topbar .tb-contact { display:flex; align-items:center; gap:24px; }
.yamas-wp-wrapper .topbar .tb-contact a { color:rgba(255,255,255,.85); display:flex; align-items:center; gap:6px; }
.yamas-wp-wrapper .topbar .tb-contact a:hover { color:#fff; }
.yamas-wp-wrapper .topbar .socials { display:flex; gap:8px; }
.yamas-wp-wrapper .topbar .socials a { color:rgba(255,255,255,.7); width:26px; height:26px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:11px; border:1px solid rgba(255,255,255,.3); background:rgba(255,255,255,.08); transition:all .2s; }
.yamas-wp-wrapper .topbar .socials a:hover { background:#fff; color:var(--aegean-d); }

/* HEADER */
.yamas-wp-wrapper header.site-header { display:flex; align-items:center; justify-content:space-between; padding:14px 40px; background:#fff; border-bottom:2px solid var(--aegean-s); position:sticky; top:0; z-index:900; box-shadow:0 2px 16px rgba(0,48,100,.06); }
.yamas-wp-wrapper .logo-wrap { display:flex; align-items:center; gap:16px; }
.yamas-wp-wrapper .logo-wrap img.yamas-header-logo { height:44px; width:auto; object-fit:contain; transition:transform .2s; }
.yamas-wp-wrapper .logo-wrap img.yamas-header-logo:hover { transform:scale(1.04); }
.yamas-wp-wrapper .tfg-badge { display:flex; align-items:center; gap:8px; padding-left:14px; border-left:1px solid var(--bdr2); }
.yamas-wp-wrapper .logo-wrap img.tfg-logo { height:28px; width:auto; object-fit:contain; opacity:.85; }
.yamas-wp-wrapper .logo-wrap .tfg-label { font-size:9px; color:var(--txt3); letter-spacing:.4px; line-height:1.2; max-width:90px; text-transform:uppercase; font-weight:600; }
.yamas-wp-wrapper nav.main-nav ul { display:flex; gap:0; align-items:center; }
.yamas-wp-wrapper nav.main-nav a { font-family:'Inter',sans-serif; font-size:13px; letter-spacing:.8px; color:var(--txt2); padding:8px 18px; border-bottom:2px solid transparent; font-weight:600; text-transform:uppercase; display:block; transition:all .2s; }
.yamas-wp-wrapper nav.main-nav a.active { color:var(--aegean); border-bottom-color:var(--aegean); }
.yamas-wp-wrapper nav.main-nav a:hover { color:var(--aegean); border-bottom-color:var(--aegean-l); }

/* STICKY BAR */
.yamas-wp-wrapper .sticky-bar { position:fixed; top:0; left:0; right:0; z-index:1100; background:#fff; border-bottom:2px solid var(--aegean); padding:10px 40px; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:10px; transform:translateY(-100%); transition:transform .35s ease; box-shadow:0 4px 20px rgba(0,0,0,.1); }
.yamas-wp-wrapper .sticky-bar.visible { transform:translateY(0); }
.yamas-wp-wrapper .sticky-bar .sb-brand { display:flex; align-items:center; gap:10px; font-family:'Playfair Display',serif; font-size:16px; font-weight:700; color:var(--aegean); }
.yamas-wp-wrapper .sticky-bar .sb-brand img { height:32px; object-fit:contain; }
.yamas-wp-wrapper .sticky-bar .sb-actions { display:flex; gap:10px; }
.yamas-wp-wrapper .sticky-bar .sb-actions a { font-size:12px; font-weight:700; letter-spacing:.5px; padding:8px 20px; border-radius:4px; text-transform:uppercase; transition:all .2s; border:2px solid var(--aegean); }
.yamas-wp-wrapper .sticky-bar .sb-actions a.solid { background:var(--aegean); color:#fff; }
.yamas-wp-wrapper .sticky-bar .sb-actions a.solid:hover { background:var(--aegean-d); }
.yamas-wp-wrapper .sticky-bar .sb-actions a.out { color:var(--aegean); }
.yamas-wp-wrapper .sticky-bar .sb-actions a.out:hover { background:var(--aegean-s); }

/* HERO */
.yamas-wp-wrapper .hero { position:relative; min-height:640px; display:flex; align-items:center; overflow:hidden; }
.yamas-wp-wrapper .hero-bg { position:absolute; inset:0; background-image:url('<?php echo $yamas_img_base; ?>greek-island-hero.jpg'); background-size:cover; background-position:center 30%; filter:brightness(.75); }
.yamas-wp-wrapper .hero-bg::after { content:""; position:absolute; inset:0; background:linear-gradient(100deg,rgba(2,62,138,.82) 0%,rgba(0,119,182,.5) 55%,rgba(0,40,80,.25) 100%); }
.yamas-wp-wrapper .hero-inner { position:relative; z-index:1; max-width:1240px; margin:0 auto; padding:80px 40px; display:flex; align-items:center; gap:50px; flex-wrap:wrap; width:100%; }
.yamas-wp-wrapper .hero-text { flex:1; min-width:320px; color:#fff; }
.yamas-wp-wrapper .yamas-logo-hero { margin-bottom:24px; }
.yamas-wp-wrapper .yamas-logo-hero img { height:80px; width:auto; object-fit:contain; filter:drop-shadow(0 2px 10px rgba(0,0,0,.35)); }
.yamas-wp-wrapper .hero-text h1 { font-family:'Playfair Display',serif; font-size:46px; line-height:1.1; font-weight:700; color:#fff; margin-bottom:20px; }
.yamas-wp-wrapper .hero-text h1 em { font-style:italic; color:#90d5f0; }
.yamas-wp-wrapper .hero-sublead { font-size:17px; color:rgba(255,255,255,.88); line-height:1.65; margin-bottom:30px; max-width:560px; }
.yamas-wp-wrapper .hero-importer-note { font-size:12.5px; color:rgba(255,255,255,.55); font-style:italic; margin-bottom:28px; }
.yamas-wp-wrapper .hero-ctas { display:flex; gap:14px; flex-wrap:wrap; }
.yamas-wp-wrapper .btn-primary { display:inline-flex; align-items:center; gap:8px; background:var(--sun); color:var(--txt); padding:14px 30px; border-radius:4px; font-size:13px; font-weight:700; letter-spacing:.5px; border:2px solid var(--sun); transition:all .25s; cursor:pointer; }
.yamas-wp-wrapper .btn-primary:hover { background:var(--sun-d); border-color:var(--sun-d); color:#fff; transform:translateY(-2px); box-shadow:0 8px 24px rgba(244,162,97,.3); }
.yamas-wp-wrapper .btn-secondary { display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,.15); color:#fff; padding:14px 30px; border-radius:4px; font-size:13px; font-weight:700; letter-spacing:.5px; border:2px solid rgba(255,255,255,.7); transition:all .25s; cursor:pointer; }
.yamas-wp-wrapper .btn-secondary:hover { background:rgba(255,255,255,.3); border-color:#fff; transform:translateY(-2px); }
.yamas-wp-wrapper .hero-media { flex:1; min-width:280px; display:flex; align-items:center; justify-content:center; }
.yamas-wp-wrapper .hero-can-stack { position:relative; width:100%; max-width:440px; height:400px; display:flex; align-items:center; justify-content:center; }
.yamas-wp-wrapper .can-stack-item { position:absolute; max-height:340px; width:auto; object-fit:contain; filter:drop-shadow(0 15px 30px rgba(0,0,0,.35)); transition:all .4s ease; }
.yamas-wp-wrapper .can-stack-item:hover { transform:translateY(-10px) scale(1.08) !important; z-index:10 !important; }
.yamas-wp-wrapper .can-1 { transform:translateX(-100px) scale(.85) rotate(-6deg); z-index:1; }
.yamas-wp-wrapper .can-2 { transform:translateX(-50px) scale(.95) rotate(-3deg); z-index:2; }
.yamas-wp-wrapper .can-3 { transform:translateX(0) scale(1.06); z-index:3; animation:floatCan 5s ease-in-out infinite; }
.yamas-wp-wrapper .can-4 { transform:translateX(50px) scale(.95) rotate(3deg); z-index:2; }
.yamas-wp-wrapper .can-5 { transform:translateX(100px) scale(.85) rotate(6deg); z-index:1; }
@keyframes floatCan { 0%,100%{transform:translateY(0);} 50%{transform:translateY(-14px);} }

/* BRAND STRIP */
.yamas-wp-wrapper .brand-strip { background:var(--aegean); padding:20px 40px; text-align:center; overflow:hidden; position:relative; }
.yamas-wp-wrapper .brand-strip p { font-family:'Playfair Display',serif; font-size:22px; color:#fff; font-style:italic; letter-spacing:.5px; position:relative; z-index:1; margin:0; }
.yamas-wp-wrapper .brand-strip p span { font-style:normal; font-weight:700; color:#90d5f0; }

/* CONTAINER & SECTIONS */
.yamas-wp-wrapper .container { max-width:1240px; margin:0 auto; padding:0 40px; }
.yamas-wp-wrapper .section { padding:72px 0; }
.yamas-wp-wrapper .section-alt { background:var(--foam); }
.yamas-wp-wrapper .section h2 { font-family:'Playfair Display',serif; font-size:34px; color:var(--aegean-d); margin-bottom:16px; line-height:1.15; font-weight:700; }
.yamas-wp-wrapper .section h2 em { font-style:italic; color:var(--aegean); }
.yamas-wp-wrapper .section .section-lead { color:var(--txt2); max-width:820px; font-size:16px; line-height:1.8; margin-bottom:20px; }
.yamas-wp-wrapper .section-eyebrow { font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; color:var(--aegean); display:inline-block; margin-bottom:12px; }
.yamas-wp-wrapper .divider { border:none; height:2px; background:linear-gradient(to right,var(--aegean),var(--aegean-l),transparent); margin:0; opacity:.3; }

/* ABOUT SECTION */
.yamas-wp-wrapper .about-layout { display:flex; gap:60px; align-items:flex-start; flex-wrap:wrap; }
.yamas-wp-wrapper .about-text { flex:1; min-width:300px; }
.yamas-wp-wrapper .about-text p { color:var(--txt2); font-size:15.5px; line-height:1.8; margin-bottom:16px; }
.yamas-wp-wrapper .story-callout { background:var(--aegean-s); border-left:4px solid var(--aegean); padding:20px 24px; border-radius:0 8px 8px 0; margin:24px 0 32px; }
.yamas-wp-wrapper .story-callout p { color:var(--txt); font-size:15px; margin:0; }
.yamas-wp-wrapper .key-facts { display:flex; flex-wrap:wrap; gap:12px; margin-top:28px; }
.yamas-wp-wrapper .kf-item { background:var(--foam); border:1px solid var(--bdr); padding:12px 18px; border-radius:6px; display:flex; align-items:center; gap:10px; flex:1 1 180px; }
.yamas-wp-wrapper .kf-icon { font-size:20px; }
.yamas-wp-wrapper .kf-label { font-size:12.5px; font-weight:700; color:var(--aegean-d); }
.yamas-wp-wrapper .about-ingredients { flex:0 0 380px; display:flex; flex-direction:column; gap:16px; }
.yamas-wp-wrapper .ingredient-card { background:#fff; border:1px solid var(--bdr); border-radius:10px; padding:24px; box-shadow:var(--shadow); display:flex; gap:16px; align-items:flex-start; transition:all .25s; }
.yamas-wp-wrapper .ingredient-card:hover { transform:translateY(-3px); box-shadow:var(--shadow-b); border-color:var(--bdr2); }
.yamas-wp-wrapper .ingredient-card .ic-icon { font-size:28px; line-height:1; }
.yamas-wp-wrapper .ingredient-card h4 { font-family:'Playfair Display',serif; font-size:17px; color:var(--aegean-d); margin-bottom:6px; font-weight:700; }
.yamas-wp-wrapper .ingredient-card p { font-size:13px; color:var(--txt3); line-height:1.6; margin:0; }

/* VIDEO SECTION */
.yamas-wp-wrapper .video-section { padding:60px 0; }
.yamas-wp-wrapper .video-layout { display:flex; gap:50px; align-items:center; flex-wrap:wrap; }
.yamas-wp-wrapper .video-wrap { flex:1; min-width:320px; border-radius:14px; overflow:hidden; position:relative; box-shadow:var(--shadow-lg); background:#000; aspect-ratio:16/9; }
.yamas-wp-wrapper .video-wrap video { width:100%; height:100%; object-fit:cover; display:block; }
.yamas-wp-wrapper .v-overlay { position:absolute; inset:0; background:rgba(0,30,60,.4); display:flex; align-items:center; justify-content:center; cursor:pointer; transition:opacity .3s; }
.yamas-wp-wrapper .v-overlay.hidden { opacity:0; pointer-events:none; }
.yamas-wp-wrapper .play-circle { width:72px; height:72px; border-radius:50%; background:var(--sun); display:flex; align-items:center; justify-content:center; box-shadow:0 8px 30px rgba(0,0,0,.4); transition:all .25s; }
.yamas-wp-wrapper .play-circle svg { width:28px; height:28px; fill:var(--txt); margin-left:4px; }
.yamas-wp-wrapper .v-overlay:hover .play-circle { transform:scale(1.1); background:#fff; }
.yamas-wp-wrapper .video-text { flex:1; min-width:300px; }
.yamas-wp-wrapper .video-text h3 { font-family:'Playfair Display',serif; font-size:30px; color:var(--aegean-d); margin-bottom:16px; font-weight:700; line-height:1.2; }
.yamas-wp-wrapper .video-text p { color:var(--txt2); font-size:15px; margin-bottom:24px; }
.yamas-wp-wrapper .video-highlights { display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:28px; }
.yamas-wp-wrapper .vh-item { font-size:13px; font-weight:600; color:var(--txt2); background:var(--foam); padding:10px 14px; border-radius:6px; border-left:3px solid var(--aegean); }

/* PRODUCT RANGE */
.yamas-wp-wrapper .range-card { background:#fff; border-radius:14px; border:1px solid var(--bdr); box-shadow:var(--shadow); overflow:hidden; margin-bottom:40px; }
.yamas-wp-wrapper .range-card-header { background:var(--aegean-d); color:#fff; padding:24px 32px; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px; }
.yamas-wp-wrapper .range-card-header h3 { font-family:'Playfair Display',serif; font-size:22px; color:#fff; margin:0; font-weight:700; }
.yamas-wp-wrapper .range-card-header span { font-size:12.5px; color:rgba(255,255,255,.8); background:rgba(255,255,255,.12); padding:6px 14px; border-radius:20px; }
.yamas-wp-wrapper .range-split { display:flex; flex-wrap:wrap; }
.yamas-wp-wrapper .range-stage { flex:0 0 420px; padding:32px; background:var(--foam); border-right:1px solid var(--bdr); display:flex; flex-direction:column; align-items:center; justify-content:space-between; }
.yamas-wp-wrapper .stage-controls { width:100%; display:flex; justify-content:space-between; align-items:center; margin-bottom:16px; }
.yamas-wp-wrapper .stage-badge { font-size:12px; font-weight:700; color:var(--aegean); background:var(--aegean-s); padding:5px 12px; border-radius:20px; display:flex; align-items:center; gap:6px; }
.yamas-wp-wrapper .stage-badge .dot { width:7px; height:7px; border-radius:50%; background:var(--aegean); }
.yamas-wp-wrapper .stage-reset { background:none; border:1px solid var(--bdr2); font-size:11px; font-weight:600; color:var(--txt3); padding:4px 10px; border-radius:4px; cursor:pointer; transition:all .2s; }
.yamas-wp-wrapper .stage-reset:hover { background:var(--aegean); color:#fff; border-color:var(--aegean); }
.yamas-wp-wrapper .stage-img-wrap { min-height:300px; display:flex; align-items:center; justify-content:center; width:100%; }
.yamas-wp-wrapper .main-img { max-height:290px; width:auto; object-fit:contain; filter:drop-shadow(0 12px 24px rgba(0,60,120,.18)); transition:opacity .2s,transform .2s; }
.yamas-wp-wrapper .main-img.fade-out { opacity:0; transform:scale(.96); }
.yamas-wp-wrapper .stage-hint { font-size:11px; color:var(--txt3); margin-top:12px; font-style:italic; }
.yamas-wp-wrapper .range-content { flex:1; min-width:320px; padding:32px; }
.yamas-wp-wrapper .range-desc { color:var(--txt2); font-size:14.5px; margin-bottom:20px; }
.yamas-wp-wrapper .pack-badge { display:inline-block; background:var(--aegean-s); color:var(--aegean-d); font-size:12px; font-weight:700; padding:6px 14px; border-radius:4px; margin-bottom:24px; border:1px solid var(--bdr2); }
.yamas-wp-wrapper .flavour-label { font-size:12px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--txt3); margin-bottom:12px; display:flex; justify-content:space-between; align-items:center; }
.yamas-wp-wrapper .flavour-label .tip { font-size:11px; font-weight:400; text-transform:none; color:var(--txt3); }
.yamas-wp-wrapper .flavour-gallery { display:grid; grid-template-columns:repeat(auto-fill,minmax(85px,1fr)); gap:10px; margin-bottom:28px; }
.yamas-wp-wrapper .fp { background:var(--foam); border:2px solid var(--bdr); border-radius:8px; padding:10px 6px; text-align:center; cursor:pointer; transition:all .2s; position:relative; }
.yamas-wp-wrapper .fp:hover { border-color:var(--aegean); transform:translateY(-2px); background:#fff; box-shadow:0 4px 12px rgba(0,119,182,.12); }
.yamas-wp-wrapper .fp.active { border-color:var(--aegean); background:var(--aegean-s); box-shadow:0 0 0 2px var(--aegean-l); }
.yamas-wp-wrapper .fp .ts { height:65px; display:flex; align-items:center; justify-content:center; margin-bottom:6px; }
.yamas-wp-wrapper .fp .ts img { max-height:60px; width:auto; object-fit:contain; }
.yamas-wp-wrapper .fp .pn { font-size:10.5px; font-weight:700; color:var(--txt); line-height:1.2; }
.yamas-wp-wrapper .fl-title { font-size:12px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:var(--txt3); margin-bottom:12px; display:block; }
.yamas-wp-wrapper .flavour-list { display:flex; flex-direction:column; gap:8px; }
.yamas-wp-wrapper .flavour-list li { display:flex; align-items:center; justify-content:space-between; padding:10px 14px; background:var(--foam); border:1px solid var(--bdr); border-radius:6px; font-size:13px; font-weight:600; color:var(--txt); transition:all .2s; cursor:pointer; }
.yamas-wp-wrapper .flavour-list li:hover,.yamas-wp-wrapper .flavour-list li.active { background:var(--aegean-s); border-color:var(--aegean-l); }
.yamas-wp-wrapper .fl-add { background:var(--aegean); color:#fff; border:none; padding:4px 12px; border-radius:4px; font-size:11.5px; font-weight:700; cursor:pointer; transition:all .2s; }
.yamas-wp-wrapper .fl-add:hover { background:var(--aegean-d); }
.yamas-wp-wrapper .fl-add.added { background:#10b981; }

/* SPECS TABLE */
.yamas-wp-wrapper .specs-wrap { background:#fff; border-radius:12px; border:1px solid var(--bdr); padding:32px; box-shadow:var(--shadow); margin-top:40px; }
.yamas-wp-wrapper .specs-wrap h3 { font-family:'Playfair Display',serif; font-size:22px; color:var(--aegean-d); margin-bottom:20px; font-weight:700; }
.yamas-wp-wrapper .specs-table { width:100%; border-collapse:collapse; font-size:14px; }
.yamas-wp-wrapper .specs-table th { background:var(--aegean-s); color:var(--aegean-d); text-align:left; padding:12px 18px; font-weight:700; border-bottom:2px solid var(--bdr2); }
.yamas-wp-wrapper .specs-table td { padding:12px 18px; border-bottom:1px solid var(--bdr); color:var(--txt2); }
.yamas-wp-wrapper .specs-table tr:last-child td { border-bottom:none; }

/* LIFESTYLE SECTION */
.yamas-wp-wrapper .lifestyle-section { background:linear-gradient(135deg,var(--aegean-d) 0%,var(--aegean) 100%); color:#fff; padding:80px 0; }
.yamas-wp-wrapper .lifestyle-inner { display:flex; gap:60px; align-items:center; flex-wrap:wrap; }
.yamas-wp-wrapper .lifestyle-text { flex:1; min-width:320px; }
.yamas-wp-wrapper .lifestyle-text h2 { font-family:'Playfair Display',serif; font-size:36px; color:#fff; margin-bottom:18px; font-weight:700; }
.yamas-wp-wrapper .lifestyle-text h2 em { color:#90d5f0; font-style:italic; }
.yamas-wp-wrapper .lifestyle-text p { color:rgba(255,255,255,.88); font-size:15.5px; line-height:1.75; margin-bottom:16px; }
.yamas-wp-wrapper .serve-cards { flex:1; min-width:300px; display:flex; flex-direction:column; gap:16px; }
.yamas-wp-wrapper .serve-card { background:rgba(255,255,255,.1); backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,.2); border-radius:10px; padding:22px 26px; }
.yamas-wp-wrapper .serve-card h4 { font-family:'Playfair Display',serif; font-size:18px; color:#fff; margin-bottom:8px; font-weight:700; }
.yamas-wp-wrapper .serve-card p { font-size:13.5px; color:rgba(255,255,255,.85); margin:0; line-height:1.6; }

/* TRADE SECTION */
.yamas-wp-wrapper .trade-cols { display:grid; grid-template-columns:1fr 1fr; gap:40px; margin-top:32px; }
.yamas-wp-wrapper .trade-supply h3,.yamas-wp-wrapper .faq-list h3 { font-family:'Playfair Display',serif; font-size:22px; color:var(--aegean-d); margin-bottom:20px; font-weight:700; }
.yamas-wp-wrapper .supply-grid { display:grid; grid-template-columns:1fr 1fr; gap:10px; }
.yamas-wp-wrapper .supply-item { background:var(--foam); border:1px solid var(--bdr); padding:10px 14px; border-radius:6px; font-size:13px; font-weight:600; color:var(--txt2); display:flex; align-items:center; gap:8px; }
.yamas-wp-wrapper .supply-item::before { content:"✓"; color:var(--aegean); font-weight:700; }
.yamas-wp-wrapper .faq-item { background:#fff; border:1px solid var(--bdr); border-radius:8px; padding:18px 22px; margin-bottom:12px; box-shadow:var(--shadow); }
.yamas-wp-wrapper .faq-item h4 { font-size:15px; color:var(--aegean-d); margin-bottom:6px; font-weight:700; }
.yamas-wp-wrapper .faq-item p { font-size:13.5px; color:var(--txt3); margin:0; line-height:1.6; }

/* ENQUIRY FORM */
.yamas-wp-wrapper .form-section { background:var(--aegean-d); color:#fff; padding:80px 0; }
.yamas-wp-wrapper .form-inner { display:flex; gap:60px; align-items:flex-start; flex-wrap:wrap; }
.yamas-wp-wrapper .form-text { flex:1; min-width:300px; }
.yamas-wp-wrapper .form-text h2 { font-family:'Playfair Display',serif; font-size:36px; color:#fff; margin-bottom:18px; font-weight:700; }
.yamas-wp-wrapper .form-text h2 em { color:#90d5f0; font-style:italic; }
.yamas-wp-wrapper .form-text p { color:rgba(255,255,255,.85); font-size:15px; line-height:1.7; margin-bottom:16px; }
.yamas-wp-wrapper .form-contact-details { display:flex; flex-direction:column; gap:12px; margin-top:28px; }
.yamas-wp-wrapper .form-contact-details a { color:#fff; font-size:14px; display:flex; align-items:center; gap:10px; font-weight:600; }
.yamas-wp-wrapper .fc-icon { width:32px; height:32px; border-radius:50%; background:rgba(255,255,255,.15); display:flex; align-items:center; justify-content:center; font-size:14px; }
.yamas-wp-wrapper .enquiry-form { flex:1; min-width:320px; background:#fff; color:var(--txt); padding:36px; border-radius:14px; box-shadow:var(--shadow-lg); }
.yamas-wp-wrapper .enquiry-form h3 { font-family:'Playfair Display',serif; font-size:24px; color:var(--aegean-d); margin-bottom:20px; font-weight:700; }
.yamas-wp-wrapper .form-row { display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px; }
.yamas-wp-wrapper .form-group { margin-bottom:16px; }
.yamas-wp-wrapper .form-group label { display:block; font-size:12.5px; font-weight:700; color:var(--txt); margin-bottom:6px; }
.yamas-wp-wrapper .form-group input[type="text"],
.yamas-wp-wrapper .form-group input[type="email"],
.yamas-wp-wrapper .form-group input[type="tel"],
.yamas-wp-wrapper .form-group textarea { width:100%; padding:11px 14px; border:1px solid var(--bdr2); border-radius:6px; font-size:14px; font-family:'Inter',sans-serif; outline:none; transition:border-color .2s; }
.yamas-wp-wrapper .form-group input:focus,
.yamas-wp-wrapper .form-group textarea:focus { border-color:var(--aegean); box-shadow:0 0 0 3px rgba(0,119,182,.15); }
.yamas-wp-wrapper .form-group textarea { height:100px; resize:vertical; }
.yamas-wp-wrapper .radio-group { display:flex; gap:16px; flex-wrap:wrap; margin-top:6px; }
.yamas-wp-wrapper .radio-group label { font-size:13px; font-weight:600; color:var(--txt2); cursor:pointer; display:flex; align-items:center; gap:6px; }
.yamas-wp-wrapper .form-submit { width:100%; background:var(--sun); color:var(--txt); border:none; padding:14px; border-radius:6px; font-size:14px; font-weight:700; letter-spacing:.5px; cursor:pointer; transition:all .25s; }
.yamas-wp-wrapper .form-submit:hover { background:var(--sun-d); color:#fff; transform:translateY(-2px); box-shadow:0 8px 20px rgba(244,162,97,.3); }
.yamas-wp-wrapper .form-note { font-size:11.5px; color:var(--txt3); margin-top:10px; text-align:center; font-style:italic; }
.yamas-wp-wrapper .form-success { display:none; background:#ecfdf5; color:#047857; padding:12px; border-radius:6px; font-size:13px; font-weight:600; text-align:center; margin-top:14px; border:1px solid #a7f3d0; }

/* BASKET WIDGET */
.yamas-wp-wrapper .basket-widget { position:fixed; bottom:24px; right:24px; z-index:1000; }
.yamas-wp-wrapper .basket-toggle { background:var(--aegean); color:#fff; border:none; padding:12px 20px; border-radius:30px; font-weight:700; font-size:13.5px; box-shadow:var(--shadow-b); cursor:pointer; display:flex; align-items:center; gap:10px; transition:all .25s; }
.yamas-wp-wrapper .basket-toggle:hover { background:var(--aegean-d); transform:translateY(-2px); }
.yamas-wp-wrapper .bt-count { background:var(--sun); color:var(--txt); width:22px; height:22px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; font-size:12px; font-weight:800; }
.yamas-wp-wrapper .basket-panel { position:absolute; bottom:60px; right:0; width:340px; background:#fff; border-radius:12px; box-shadow:var(--shadow-lg); border:1px solid var(--bdr); display:none; flex-direction:column; overflow:hidden; z-index:1001; }
.yamas-wp-wrapper .basket-panel.open { display:flex; }
.yamas-wp-wrapper .bp-header { background:var(--aegean-d); color:#fff; padding:14px 18px; display:flex; justify-content:space-between; align-items:center; }
.yamas-wp-wrapper .bp-header h4 { font-family:'Playfair Display',serif; font-size:16px; margin:0; color:#fff; font-weight:700; }
.yamas-wp-wrapper .bp-close { background:none; border:none; color:#fff; font-size:16px; cursor:pointer; opacity:.8; }
.yamas-wp-wrapper .bp-close:hover { opacity:1; }
.yamas-wp-wrapper .bp-list { max-height:260px; overflow-y:auto; padding:14px; }
.yamas-wp-wrapper .bp-empty { font-size:12.5px; color:var(--txt3); text-align:center; padding:20px 10px; font-style:italic; }
.yamas-wp-wrapper .bp-item { display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid var(--bdr); }
.yamas-wp-wrapper .bp-item-name { font-size:12.5px; font-weight:600; color:var(--txt); }
.yamas-wp-wrapper .bp-item-range { font-size:10.5px; color:var(--txt3); }
.yamas-wp-wrapper .bp-remove { background:none; border:none; color:#ef4444; font-size:14px; cursor:pointer; padding:2px 6px; }
.yamas-wp-wrapper .bp-footer { padding:14px; background:var(--foam); border-top:1px solid var(--bdr); }
.yamas-wp-wrapper .bp-hint { font-size:11px; color:var(--txt3); margin-bottom:10px; text-align:center; }
.yamas-wp-wrapper .bp-send { width:100%; background:var(--sun); color:var(--txt); border:none; padding:10px; border-radius:6px; font-weight:700; font-size:13px; cursor:pointer; transition:all .2s; }
.yamas-wp-wrapper .bp-send:hover:not(:disabled) { background:var(--sun-d); color:#fff; }
.yamas-wp-wrapper .bp-send:disabled { opacity:.5; cursor:not-allowed; }

/* FOOTER */
.yamas-wp-wrapper footer { background:#071626; color:rgba(255,255,255,.75); padding:60px 40px 24px; font-size:13px; }
.yamas-wp-wrapper .footer-inner { max-width:1240px; margin:0 auto; display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:40px; margin-bottom:40px; }
.yamas-wp-wrapper .yamas-logo-footer img { height:40px; width:auto; filter:brightness(0) invert(1); margin-bottom:14px; }
.yamas-wp-wrapper .footer-col h4 { font-family:'Playfair Display',serif; font-size:16px; color:#fff; margin-bottom:16px; font-weight:700; }
.yamas-wp-wrapper .footer-col p { color:rgba(255,255,255,.65); line-height:1.6; margin-bottom:8px; }
.yamas-wp-wrapper .footer-col a { color:rgba(255,255,255,.8); text-decoration:none; }
.yamas-wp-wrapper .footer-col a:hover { color:#fff; text-decoration:underline; }
.yamas-wp-wrapper .footer-social { display:flex; gap:10px; margin-top:16px; }
.yamas-wp-wrapper .footer-social a { width:30px; height:30px; border-radius:50%; background:rgba(255,255,255,.1); display:flex; align-items:center; justify-content:center; color:#fff; border:1px solid rgba(255,255,255,.2); font-size:12px; }
.yamas-wp-wrapper .footer-social a:hover { background:var(--aegean); border-color:var(--aegean); }
.yamas-wp-wrapper .footer-bottom { max-width:1240px; margin:0 auto; padding-top:24px; border-top:1px solid rgba(255,255,255,.1); text-align:center; font-size:12px; color:rgba(255,255,255,.5); }
</style>

<!-- TOPBAR -->
<div class="topbar">
  <div class="tb-contact">
    <a href="tel:07377232822">&#128222; 07377 232822</a>
    <a href="tel:07377232797">&#128222; 07377 232797</a>
    <a href="mailto:sales@treasuresfromgreece.co.uk">&#9993; sales@treasuresfromgreece.co.uk</a>
  </div>
  <div class="tb-right">
    <div class="socials">
      <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook">f</a>
      <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram">&#9678;</a>
      <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn">in</a>
    </div>
  </div>
</div>

<!-- STICKY BAR -->
<div class="sticky-bar" id="stickyBarWP">
  <div class="sb-brand">
    <img src="<?php echo $yamas_img_base; ?>YAMAS LOGO.png" alt="YAMAS" onerror="imgFallbackWP(this)">
    <span>YAMAS Hellenic Iced Tea</span>
  </div>
  <div class="sb-actions">
    <div class="basket-indicator" onclick="toggleBasketWP()" style="font-size:13px;font-weight:600;color:var(--aegean);cursor:pointer;display:flex;align-items:center;gap:8px;padding:8px 14px;border:1px solid var(--bdr2);border-radius:4px;">
      &#127873; Basket <span id="stickyCountWP" style="background:var(--aegean);color:#fff;border-radius:50%;width:20px;height:20px;display:inline-flex;align-items:center;justify-content:center;font-size:11px;">0</span>
    </div>
    <a href="#enquiry" class="solid">Request Samples</a>
    <a href="#enquiry" class="out">Get Trade Prices</a>
  </div>
</div>

<!-- HEADER -->
<header class="site-header" id="siteHeaderWP">
  <div class="logo-wrap">
    <a href="#" style="display:flex;align-items:center;gap:12px;" aria-label="YAMAS Hellenic Iced Tea">
      <img src="<?php echo $yamas_img_base; ?>YAMAS LOGO.png" alt="YAMAS Hellenic Iced Tea" class="yamas-header-logo" onerror="imgFallbackWP(this)">
    </a>
    <div class="tfg-badge">
      <a href="https://treasuresfromgreece.co.uk/" style="display:flex;align-items:center;gap:8px;" title="Imported &amp; Distributed by T.F.G. Imports">
        <img src="<?php echo $yamas_img_base; ?>TFGLogo.png" alt="TFG Imports" class="tfg-logo" onerror="imgFallbackWP(this)">
        <div class="tfg-label">UK Importer<br>T.F.G. Imports</div>
      </a>
    </div>
  </div>
  <nav class="main-nav">
    <ul>
      <li><a href="https://treasuresfromgreece.co.uk/">Home</a></li>
      <li><a href="https://treasuresfromgreece.co.uk/our-partners/">Our Partners</a></li>
      <li><a href="#range" class="active">YAMAS Iced Tea</a></li>
      <li><a href="#enquiry">Contact Us</a></li>
    </ul>
  </nav>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-inner">
    <div class="hero-text">
      <div class="yamas-logo-hero">
        <img src="<?php echo $yamas_img_base; ?>YAMAS LOGO.png" alt="YAMAS Hellenic Iced Tea" onerror="imgFallbackWP(this)">
      </div>
      <h1>Bring a Taste of <em>Greek Summer</em> to Your Customers</h1>
      <p class="hero-sublead">YAMAS Hellenic Iced Tea — modern flavours, natural Greek honey and vibrant Mediterranean character. Now available for wholesale supply across the UK.</p>
      <p class="hero-importer-note">Exclusively imported and distributed in the UK by T.F.G. Imports Ltd, Edinburgh.</p>
      <div class="hero-ctas">
        <a href="#enquiry" class="btn-primary">Request Samples</a>
        <a href="#enquiry" class="btn-secondary">Get Trade Prices</a>
      </div>
    </div>
    <div class="hero-media">
      <div class="hero-can-stack">
        <img src="<?php echo $yamas_img_base; ?>yamas can peach.png" alt="YAMAS Peach" class="can-stack-item can-1" onerror="imgFallbackWP(this)">
        <img src="<?php echo $yamas_img_base; ?>yamas can lemon.png" alt="YAMAS Lemon" class="can-stack-item can-2" onerror="imgFallbackWP(this)">
        <img src="<?php echo $yamas_img_base; ?>yamas can pomegranate.png" alt="YAMAS Pomegranate" class="can-stack-item can-3" onerror="imgFallbackWP(this)">
        <img src="<?php echo $yamas_img_base; ?>Grapefruit can.png" alt="YAMAS Grapefruit" class="can-stack-item can-4" onerror="imgFallbackWP(this)">
        <img src="<?php echo $yamas_img_base; ?>Matcha can.png" alt="YAMAS Matcha" class="can-stack-item can-5" onerror="imgFallbackWP(this)">
      </div>
    </div>
  </div>
</section>

<!-- BRAND STRIP -->
<div class="brand-strip">
  <p><span>YAMAS</span> — The Greek word for "To Our Health" &nbsp;&#9679;&nbsp; Premium Iced Tea &nbsp;&#9679;&nbsp; Made in <span>Greece</span> &nbsp;&#9679;&nbsp; Sweetened with <span>Natural Honey</span></p>
</div>

<!-- ABOUT YAMAS -->
<div class="container">
<div class="section">
  <div class="about-layout">
    <div class="about-text">
      <span class="section-eyebrow">About the Brand</span>
      <h2>A <em>Modern</em> Greek Iced Tea</h2>
      <p>YAMAS Hellenic Iced Tea brings together authentic Greek character, premium ingredients and contemporary fruit flavours. The name comes from the Greek expression meaning <strong>"To our health"</strong> — a toast to friendship, enjoyment and sharing life's best moments.</p>
      <p>The range has been developed for consumers who want something genuinely different: a refreshing, flavourful beverage with a distinctive Mediterranean story and strong shelf presence.</p>
      <div class="story-callout">
        <p>T.F.G. Imports Ltd is the <strong>exclusive UK importer and distributor</strong> of YAMAS Hellenic Iced Tea, supplying retailers, wholesalers, cafes, restaurants, hotels, pubs, delicatessens and foodservice businesses throughout the United Kingdom.</p>
      </div>
      <div class="key-facts">
        <div class="kf-item"><span class="kf-icon">&#127468;&#127479;</span><div class="kf-label">Made in Greece</div></div>
        <div class="kf-item"><span class="kf-icon">&#127855;</span><div class="kf-label">Natural Greek Honey</div></div>
        <div class="kf-item"><span class="kf-icon">&#127811;</span><div class="kf-label">Brewed Tea Leaves</div></div>
        <div class="kf-item"><span class="kf-icon">&#9851;</span><div class="kf-label">Recyclable Packaging</div></div>
        <div class="kf-item"><span class="kf-icon">&#128666;</span><div class="kf-label">UK-Wide Supply</div></div>
      </div>
    </div>
    <div class="about-ingredients">
      <div class="ingredient-card">
        <span class="ic-icon">&#127855;</span>
        <div><h4>Natural Greek Honey</h4><p>Sweetened with premium honey from traditional Greek apiaries, giving a rounded, gentle sweetness with authentic character and no artificial aftertaste.</p></div>
      </div>
      <div class="ingredient-card">
        <span class="ic-icon">&#127811;</span>
        <div><h4>Selected Whole Tea Leaves</h4><p>Green, White and Black tea varieties, carefully selected and slowly extracted to preserve delicate herbal notes and natural tea character.</p></div>
      </div>
      <div class="ingredient-card">
        <span class="ic-icon">&#127819;</span>
        <div><h4>Real Fruit Flavours</h4><p>Infused with Mediterranean fruit flavours — lemon, peach, pomegranate, grapefruit, mango, blueberry and more.</p></div>
      </div>
    </div>
  </div>
</div>
</div>

<hr class="divider">

<!-- VIDEO SECTION -->
<div class="container">
<div class="video-section">
  <div class="video-layout">
    <div class="video-wrap">
      <video id="yamasVideoWP" muted loop playsinline poster="<?php echo $yamas_img_base; ?>New Flavours.png">
        <source src="<?php echo $yamas_img_base; ?>yamas-video-cans.mp4" type="video/mp4">
        <source src="<?php echo $yamas_img_base; ?>Yamas video cans .mp4" type="video/mp4">
      </video>
      <div class="v-overlay" id="videoOverlayWP">
        <div class="play-circle"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div>
      </div>
    </div>
    <div class="video-text">
      <span class="section-eyebrow">See YAMAS in Action</span>
      <h3>Vibrant Mediterranean Character in Every Can</h3>
      <p>Watch YAMAS in action. Bright, colourful and immediately distinctive on any shelf — these are drinks that sell themselves.</p>
      <div class="video-highlights">
        <div class="vh-item">&#127807; Brewed from real tea leaves</div>
        <div class="vh-item">&#127855; Sweetened with Greek honey</div>
        <div class="vh-item">&#127819; Real fruit flavours</div>
        <div class="vh-item">&#127468;&#127479; Produced in Greece</div>
      </div>
      <a href="#enquiry" class="btn-primary" style="display:inline-flex;">Order a Trial Pack &#8594;</a>
    </div>
  </div>
</div>
</div>

<!-- PRODUCT RANGE -->
<div class="section-alt">
<div class="container">
<div class="section" id="range">
  <span class="section-eyebrow">The Full Range</span>
  <h2>Two Formats. <em>Seven Flavours</em> in Cans. Eight in Bottles.</h2>
  <p class="section-lead">Whether your outlet needs grab-and-go cans or premium glass bottles for tableside service, YAMAS has a format that fits. Click any flavour below to explore it — or add to your sample basket and request your selection in one click.</p>

  <div class="range-grid">

    <!-- 330ML CANS -->
    <div class="range-card" id="can-range-card-wp">
      <div class="range-card-header">
        <h3>330ml Aluminium Can Range — 7 Flavours</h3>
        <span>Ideal for convenience retail, cafes, vending, universities, travel, restaurants, pubs and hospitality. Cases of 24.</span>
      </div>
      <div class="range-split">
        <div class="range-stage">
          <div class="stage-controls">
            <div class="stage-badge" id="can-badge-wp"><span class="dot"></span><span id="can-badge-text-wp">Showing: All 7 Cans</span></div>
            <button class="stage-reset" onclick="resetRangeWP('can')">&#8634; View All</button>
          </div>
          <div class="stage-img-wrap">
            <img id="can-main-wp" class="main-img" src="<?php echo $yamas_img_base; ?>Yamas cans new p.jpeg" alt="YAMAS 330ml Can Range" onerror="imgFallbackWP(this)">
          </div>
          <div class="stage-hint">Click any flavour to change photo</div>
        </div>
        <div class="range-content">
          <p class="range-desc">The convenient 330ml can is perfect for convenience retail, cafes, coffee shops, vending, universities, travel outlets, grab-and-go locations, restaurants, pubs and hospitality venues.</p>
          <div class="pack-badge">Cases of 24 cans &nbsp;&#183;&nbsp; 12-month shelf life</div>
          <div class="flavour-label"><span>Select a Flavour:</span><span class="tip">Click pill to view &bull; + Add for sample request</span></div>
          <div class="flavour-gallery" id="can-gallery-wp">
            <div class="fp" data-range="can" data-id="c-lemon" data-img="<?php echo $yamas_img_base; ?>yamas can lemon.png" data-name="Lemon &amp; Honey 330ml Can"><div class="ts"><img src="<?php echo $yamas_img_base; ?>yamas can lemon.png" alt="Lemon" onerror="imgFallbackWP(this)"></div><div class="pn">Lemon &amp; Honey</div></div>
            <div class="fp" data-range="can" data-id="c-peach" data-img="<?php echo $yamas_img_base; ?>yamas can peach.png" data-name="Peach &amp; Honey 330ml Can"><div class="ts"><img src="<?php echo $yamas_img_base; ?>yamas can peach.png" alt="Peach" onerror="imgFallbackWP(this)"></div><div class="pn">Peach &amp; Honey</div></div>
            <div class="fp" data-range="can" data-id="c-pom" data-img="<?php echo $yamas_img_base; ?>yamas can pomegranate.png" data-name="Pomegranate &amp; Honey 330ml Can"><div class="ts"><img src="<?php echo $yamas_img_base; ?>yamas can pomegranate.png" alt="Pomegranate" onerror="imgFallbackWP(this)"></div><div class="pn">Pomegranate &amp; Honey</div></div>
            <div class="fp" data-range="can" data-id="c-grape" data-img="<?php echo $yamas_img_base; ?>Grapefruit can.png" data-name="Pink Grapefruit 330ml Can"><div class="ts"><img src="<?php echo $yamas_img_base; ?>Grapefruit can.png" alt="Grapefruit" onerror="imgFallbackWP(this)"></div><div class="pn">Pink Grapefruit</div></div>
            <div class="fp" data-range="can" data-id="c-matcha" data-img="<?php echo $yamas_img_base; ?>Matcha can.png" data-name="Matcha &amp; Yuzu 330ml Can"><div class="ts"><img src="<?php echo $yamas_img_base; ?>Matcha can.png" alt="Matcha" onerror="imgFallbackWP(this)"></div><div class="pn">Matcha &amp; Yuzu</div></div>
            <div class="fp" data-range="can" data-id="c-blue" data-img="<?php echo $yamas_img_base; ?>yamas can bluberry.png" data-name="Blueberry 330ml Can"><div class="ts"><img src="<?php echo $yamas_img_base; ?>yamas can bluberry.png" alt="Blueberry" onerror="imgFallbackWP(this)"></div><div class="pn">Blueberry</div></div>
            <div class="fp" data-range="can" data-id="c-cannabis" data-img="<?php echo $yamas_img_base; ?>yamas can canabis .jpg" data-name="Cannabis 330ml Can"><div class="ts"><img src="<?php echo $yamas_img_base; ?>yamas can canabis .jpg" alt="Cannabis" onerror="imgFallbackWP(this)"></div><div class="pn">Cannabis</div></div>
          </div>
          <span class="fl-title">All 330ml Can Flavours:</span>
          <ul class="flavour-list" id="can-list-wp">
            <li data-range="can" data-id="c-lemon" data-img="<?php echo $yamas_img_base; ?>yamas can lemon.png" data-name="Lemon &amp; Honey 330ml Can"><span class="fl-name">Green Tea with Lemon &amp; Honey</span><button class="fl-add" data-id="c-lemon" data-name="Lemon &amp; Honey 330ml Can" data-range="330ml Can">+ Add</button></li>
            <li data-range="can" data-id="c-peach" data-img="<?php echo $yamas_img_base; ?>yamas can peach.png" data-name="Peach &amp; Honey 330ml Can"><span class="fl-name">Black Tea with Peach &amp; Honey</span><button class="fl-add" data-id="c-peach" data-name="Peach &amp; Honey 330ml Can" data-range="330ml Can">+ Add</button></li>
            <li data-range="can" data-id="c-pom" data-img="<?php echo $yamas_img_base; ?>yamas can pomegranate.png" data-name="Pomegranate &amp; Honey 330ml Can"><span class="fl-name">White Tea with Pomegranate &amp; Honey</span><button class="fl-add" data-id="c-pom" data-name="Pomegranate &amp; Honey 330ml Can" data-range="330ml Can">+ Add</button></li>
            <li data-range="can" data-id="c-grape" data-img="<?php echo $yamas_img_base; ?>Grapefruit can.png" data-name="Pink Grapefruit 330ml Can"><span class="fl-name">White Tea with Pink Grapefruit</span><button class="fl-add" data-id="c-grape" data-name="Pink Grapefruit 330ml Can" data-range="330ml Can">+ Add</button></li>
            <li data-range="can" data-id="c-matcha" data-img="<?php echo $yamas_img_base; ?>Matcha can.png" data-name="Matcha &amp; Yuzu 330ml Can"><span class="fl-name">Green Tea with Matcha &amp; Yuzu</span><button class="fl-add" data-id="c-matcha" data-name="Matcha &amp; Yuzu 330ml Can" data-range="330ml Can">+ Add</button></li>
            <li data-range="can" data-id="c-blue" data-img="<?php echo $yamas_img_base; ?>yamas can bluberry.png" data-name="Blueberry 330ml Can"><span class="fl-name">Green Tea with Blueberry</span><button class="fl-add" data-id="c-blue" data-name="Blueberry 330ml Can" data-range="330ml Can">+ Add</button></li>
            <li data-range="can" data-id="c-cannabis" data-img="<?php echo $yamas_img_base; ?>yamas can canabis .jpg" data-name="Cannabis 330ml Can"><span class="fl-name">Green Tea with Cannabis</span><button class="fl-add" data-id="c-cannabis" data-name="Cannabis 330ml Can" data-range="330ml Can">+ Add</button></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- 360ML BOTTLES -->
    <div class="range-card" id="bottle-range-card-wp">
      <div class="range-card-header">
        <h3>360ml Glass Bottle Range — 8 Flavours</h3>
        <span>Premium format for cafes, restaurants, bars, hotels, delis and upscale retail. Cases of 12.</span>
      </div>
      <div class="range-split">
        <div class="range-stage">
          <div class="stage-controls">
            <div class="stage-badge" id="bottle-badge-wp"><span class="dot"></span><span id="bottle-badge-text-wp">Showing: All 8 Bottles</span></div>
            <button class="stage-reset" onclick="resetRangeWP('bottle')">&#8634; View All</button>
          </div>
          <div class="stage-img-wrap">
            <img id="bottle-main-wp" class="main-img" src="<?php echo $yamas_img_base; ?>official_all_six_tastes.jpg" alt="YAMAS Official Bottle Range" onerror="imgFallbackWP(this)">
          </div>
          <div class="stage-hint">Click any flavour to change photo</div>
        </div>
        <div class="range-content">
          <p class="range-desc">The premium 360ml glass bottle is designed for cafes, restaurants, bars, hotels, delicatessens and premium retail environments where presentation matters.</p>
          <div class="pack-badge">Cases of 12 bottles &nbsp;&#183;&nbsp; 12-month shelf life</div>
          <div class="flavour-label"><span>Select a Flavour:</span><span class="tip">Click pill to view &bull; + Add for sample request</span></div>
          <div class="flavour-gallery" id="bottle-gallery-wp">
            <div class="fp" data-range="bottle" data-id="b-lemon" data-img="<?php echo $yamas_img_base; ?>official_lemon_bottle.png" data-name="Lemon &amp; Honey 360ml Bottle"><div class="ts"><img src="<?php echo $yamas_img_base; ?>official_lemon_bottle.png" alt="Lemon" onerror="imgFallbackWP(this)"></div><div class="pn">Lemon &amp; Honey</div></div>
            <div class="fp" data-range="bottle" data-id="b-peach" data-img="<?php echo $yamas_img_base; ?>official_peach_bottle.png" data-name="Peach &amp; Honey 360ml Bottle"><div class="ts"><img src="<?php echo $yamas_img_base; ?>official_peach_bottle.png" alt="Peach" onerror="imgFallbackWP(this)"></div><div class="pn">Peach &amp; Honey</div></div>
            <div class="fp" data-range="bottle" data-id="b-pom" data-img="<?php echo $yamas_img_base; ?>official_pomegranate_bottle.png" data-name="Pomegranate &amp; Honey 360ml Bottle"><div class="ts"><img src="<?php echo $yamas_img_base; ?>official_pomegranate_bottle.png" alt="Pomegranate" onerror="imgFallbackWP(this)"></div><div class="pn">Pomegranate</div></div>
            <div class="fp" data-range="bottle" data-id="b-mango" data-img="<?php echo $yamas_img_base; ?>official_mango_bottle.png" data-name="Mango &amp; Honey 360ml Bottle"><div class="ts"><img src="<?php echo $yamas_img_base; ?>official_mango_bottle.png" alt="Mango" onerror="imgFallbackWP(this)"></div><div class="pn">Mango &amp; Honey</div></div>
            <div class="fp" data-range="bottle" data-id="b-blue" data-img="<?php echo $yamas_img_base; ?>official_blueberry_bottle.png" data-name="Blueberry 360ml Bottle"><div class="ts"><img src="<?php echo $yamas_img_base; ?>official_blueberry_bottle.png" alt="Blueberry" onerror="imgFallbackWP(this)"></div><div class="pn">Blueberry</div></div>
            <div class="fp" data-range="bottle" data-id="b-cannabis" data-img="<?php echo $yamas_img_base; ?>official_cannabis_bottle.png" data-name="Cannabis 360ml Bottle"><div class="ts"><img src="<?php echo $yamas_img_base; ?>official_cannabis_bottle.png" alt="Cannabis" onerror="imgFallbackWP(this)"></div><div class="pn">Cannabis</div></div>
            <div class="fp" data-range="bottle" data-id="b-camomile" data-img="<?php echo $yamas_img_base; ?>official_camomile_bottle.png" data-name="Camomile 360ml Bottle"><div class="ts"><img src="<?php echo $yamas_img_base; ?>official_camomile_bottle.png" alt="Camomile" onerror="imgFallbackWP(this)"></div><div class="pn">Camomile</div></div>
            <div class="fp" data-range="bottle" data-id="b-grape" data-img="<?php echo $yamas_img_base; ?>White tea and grapefruit.jpeg" data-name="Pink Grapefruit 360ml Bottle"><div class="ts"><img src="<?php echo $yamas_img_base; ?>White tea and grapefruit.jpeg" alt="Grapefruit" onerror="imgFallbackWP(this)"></div><div class="pn">Grapefruit</div></div>
          </div>
          <span class="fl-title">All 360ml Bottle Flavours:</span>
          <ul class="flavour-list" id="bottle-list-wp">
            <li data-range="bottle" data-id="b-lemon" data-img="<?php echo $yamas_img_base; ?>official_lemon_bottle.png" data-name="Lemon &amp; Honey 360ml Bottle"><span class="fl-name">Green Tea with Lemon &amp; Pure Greek Honey</span><button class="fl-add" data-id="b-lemon" data-name="Lemon &amp; Honey 360ml Bottle" data-range="360ml Bottle">+ Add</button></li>
            <li data-range="bottle" data-id="b-peach" data-img="<?php echo $yamas_img_base; ?>official_peach_bottle.png" data-name="Peach &amp; Honey 360ml Bottle"><span class="fl-name">Black Tea with Peach &amp; Pure Greek Honey</span><button class="fl-add" data-id="b-peach" data-name="Peach &amp; Honey 360ml Bottle" data-range="360ml Bottle">+ Add</button></li>
            <li data-range="bottle" data-id="b-pom" data-img="<?php echo $yamas_img_base; ?>official_pomegranate_bottle.png" data-name="Pomegranate &amp; Honey 360ml Bottle"><span class="fl-name">White Tea with Pomegranate &amp; Pure Greek Honey</span><button class="fl-add" data-id="b-pom" data-name="Pomegranate &amp; Honey 360ml Bottle" data-range="360ml Bottle">+ Add</button></li>
            <li data-range="bottle" data-id="b-mango" data-img="<?php echo $yamas_img_base; ?>official_mango_bottle.png" data-name="Mango &amp; Honey 360ml Bottle"><span class="fl-name">Green Tea with Mango &amp; Pure Greek Honey</span><button class="fl-add" data-id="b-mango" data-name="Mango &amp; Honey 360ml Bottle" data-range="360ml Bottle">+ Add</button></li>
            <li data-range="bottle" data-id="b-blue" data-img="<?php echo $yamas_img_base; ?>official_blueberry_bottle.png" data-name="Blueberry 360ml Bottle"><span class="fl-name">Green Tea with Blueberry &amp; Pure Greek Honey</span><button class="fl-add" data-id="b-blue" data-name="Blueberry 360ml Bottle" data-range="360ml Bottle">+ Add</button></li>
            <li data-range="bottle" data-id="b-cannabis" data-img="<?php echo $yamas_img_base; ?>official_cannabis_bottle.png" data-name="Cannabis 360ml Bottle"><span class="fl-name">Green Tea with Cannabis &amp; Pure Greek Honey</span><button class="fl-add" data-id="b-cannabis" data-name="Cannabis 360ml Bottle" data-range="360ml Bottle">+ Add</button></li>
            <li data-range="bottle" data-id="b-camomile" data-img="<?php echo $yamas_img_base; ?>official_camomile_bottle.png" data-name="Camomile 360ml Bottle"><span class="fl-name">Herbal Camomile with Pure Greek Honey</span><button class="fl-add" data-id="b-camomile" data-name="Camomile 360ml Bottle" data-range="360ml Bottle">+ Add</button></li>
            <li data-range="bottle" data-id="b-grape" data-img="<?php echo $yamas_img_base; ?>White tea and grapefruit.jpeg" data-name="Pink Grapefruit 360ml Bottle"><span class="fl-name">White Tea with Pink Grapefruit</span><button class="fl-add" data-id="b-grape" data-name="Pink Grapefruit 360ml Bottle" data-range="360ml Bottle">+ Add</button></li>
          </ul>
        </div>
      </div>
    </div>

  </div>

  <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-top:32px;">
    <div style="border-radius:12px;overflow:hidden;border:1px solid var(--bdr);box-shadow:var(--shadow);">
      <img src="<?php echo $yamas_img_base; ?>official_all_six_tastes.jpg" alt="Official YAMAS Greek Lineup" style="width:100%;height:280px;object-fit:cover;" onerror="imgFallbackWP(this)">
    </div>
    <div style="border-radius:12px;overflow:hidden;border:1px solid var(--bdr);box-shadow:var(--shadow);">
      <img src="<?php echo $yamas_img_base; ?>official_cannabis_honey.jpg" alt="Official YAMAS Campaign Photo" style="width:100%;height:280px;object-fit:cover;object-position:center;" onerror="imgFallbackWP(this)">
    </div>
  </div>

  <!-- SPECS TABLE -->
  <div class="specs-wrap">
    <h3>Trade Specifications</h3>
    <table class="specs-table">
      <thead><tr><th>Specification</th><th>330ml Can Range</th><th>360ml Glass Bottle Range</th></tr></thead>
      <tbody>
        <tr><td><strong>Packaging</strong></td><td>Aluminium Can (100% Recyclable)</td><td>Embossed Flint Glass Bottle</td></tr>
        <tr><td><strong>Case Pack</strong></td><td>24 cans per case</td><td>12 bottles per case</td></tr>
        <tr><td><strong>Shelf Life</strong></td><td>12 months from manufacture</td><td>12 months from manufacture</td></tr>
        <tr><td><strong>Sweetener</strong></td><td>100% Natural Greek Honey (No Added Sugar)</td><td>100% Natural Greek Honey (No Added Sugar)</td></tr>
        <tr><td><strong>Storage</strong></td><td>Ambient; serve chilled 4–6&#176;C</td><td>Ambient; serve chilled 4–6&#176;C</td></tr>
        <tr><td><strong>Country of Origin</strong></td><td>Produced in Greece</td><td>Produced in Greece</td></tr>
        <tr><td><strong>UK Importer</strong></td><td>T.F.G. Imports Ltd, Edinburgh</td><td>T.F.G. Imports Ltd, Edinburgh</td></tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>

<!-- LIFESTYLE SECTION -->
<section class="lifestyle-section">
  <div class="container">
    <div class="lifestyle-inner">
      <div class="lifestyle-text">
        <span class="section-eyebrow" style="color:#90d5f0;">A Taste of Greece</span>
        <h2>The <em>Perfect Serve</em> for Every Occasion</h2>
        <p>YAMAS can be enjoyed straight from the fridge, poured over ice, or used creatively as the base for a non-alcoholic cocktail menu — adding a genuine Mediterranean story to your drinks offering.</p>
        <p>From the classic freshness of Lemon and Peach to the more adventurous Matcha, Cannabis and Blueberry, the range gives your customers something genuinely new to discover.</p>
        <a href="#enquiry" class="btn-primary" style="margin-top:10px;display:inline-flex;">Get a Sample Pack &#8594;</a>
      </div>
      <div class="serve-cards">
        <div class="serve-card"><h4>&#127950; Over Ice</h4><p>Pour chilled YAMAS into a highball glass over cubed ice. Garnish with fresh mint and a slice of lemon or pomegranate seeds for an elevated table presentation.</p></div>
        <div class="serve-card"><h4>&#127865; Sparkling Spritz</h4><p>Mix YAMAS White Tea with Pink Grapefruit with sparkling water and fresh rosemary for a refreshing, alcohol-free summer drink.</p></div>
        <div class="serve-card"><h4>&#129346; Cocktail Base</h4><p>Shake YAMAS Green Tea with Lemon &amp; Honey with gin and fresh basil over ice for a signature cocktail that commands premium menu pricing.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- TRADE INFORMATION -->
<div class="container">
<div class="section" id="trade">
  <span class="section-eyebrow">For Trade Buyers</span>
  <h2>Wholesale &amp; <em>Foodservice</em> Supply</h2>
  <p class="section-lead">T.F.G. Imports supplies YAMAS to a wide range of businesses throughout the UK. Contact us to receive wholesale pricing, case specifications, logistics information or sample packs.</p>
  <div class="trade-cols">
    <div class="trade-supply">
      <h3>Who We Supply</h3>
      <div class="supply-grid">
        <div class="supply-item">Wholesalers &amp; distributors</div>
        <div class="supply-item">Supermarkets &amp; independents</div>
        <div class="supply-item">Convenience stores</div>
        <div class="supply-item">Coffee shops &amp; cafes</div>
        <div class="supply-item">Restaurants</div>
        <div class="supply-item">Hotels &amp; hospitality</div>
        <div class="supply-item">Pubs &amp; bars</div>
        <div class="supply-item">Delicatessens &amp; farm shops</div>
        <div class="supply-item">Universities &amp; travel outlets</div>
        <div class="supply-item">Vending &amp; grab-and-go</div>
      </div>
    </div>
    <div class="faq-list">
      <div class="faq-item"><h4>What are the minimum order quantities?</h4><p>We accommodate everything from mixed-case trial orders to full multi-pallet container loads — suitable for independent retailers and national distributors alike.</p></div>
      <div class="faq-item"><h4>Can we receive samples before ordering?</h4><p>Yes. Sample packs of both cans and glass bottles can be arranged for qualified trade buyers. Use the enquiry form below or call us directly.</p></div>
      <div class="faq-item"><h4>Is point-of-sale support available?</h4><p>We provide merchandising displays, posters, table talkers and digital menu assets to support sales in your outlet.</p></div>
    </div>
  </div>
</div>
</div>

<!-- ENQUIRY FORM -->
<section class="form-section" id="enquiry">
  <div class="container">
    <div class="form-inner">
      <div class="form-text">
        <span class="section-eyebrow" style="color:#90d5f0;">Get in Touch</span>
        <h2>Request <em>Samples</em> or Trade Prices</h2>
        <p>Fill in the form and our team will come back to you within one business day with pricing, product specifications and logistics details.</p>
        <p>Alternatively, call or email us directly — we're based in Edinburgh and supply across the whole of the UK.</p>
        <div class="form-contact-details">
          <a href="tel:07377232822"><span class="fc-icon">&#128222;</span>07377 232822</a>
          <a href="tel:07377232797"><span class="fc-icon">&#128222;</span>07377 232797</a>
          <a href="mailto:sales@treasuresfromgreece.co.uk"><span class="fc-icon">&#9993;</span>sales@treasuresfromgreece.co.uk</a>
          <a href="https://treasuresfromgreece.co.uk" target="_blank" rel="noopener"><span class="fc-icon">&#127760;</span>treasuresfromgreece.co.uk</a>
        </div>
      </div>
      <div class="enquiry-form">
        <h3>Trade Enquiry Form</h3>
        <form id="tradeFormWP" onsubmit="submitFormWP(event)">
          <div class="form-row">
            <div class="form-group">
              <label for="fname_wp">Full Name *</label>
              <input type="text" id="fname_wp" name="name" placeholder="Your full name" required>
            </div>
            <div class="form-group">
              <label for="fcompany_wp">Company Name *</label>
              <input type="text" id="fcompany_wp" name="company" placeholder="Your business name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="femail_wp">Email Address *</label>
              <input type="email" id="femail_wp" name="email" placeholder="you@company.com" required>
            </div>
            <div class="form-group">
              <label for="fphone_wp">Phone Number</label>
              <input type="tel" id="fphone_wp" name="phone" placeholder="Optional">
            </div>
          </div>
          <div class="form-group">
            <label>Enquiry Type *</label>
            <div class="radio-group">
              <label><input type="radio" name="etype_wp" value="Trade Prices" required> Trade Prices</label>
              <label><input type="radio" name="etype_wp" value="Sample Request"> Sample Request</label>
              <label><input type="radio" name="etype_wp" value="Become a Stockist"> Become a Stockist</label>
            </div>
          </div>
          <div class="form-group">
            <label for="fmsg_wp">Message</label>
            <textarea id="fmsg_wp" name="message" placeholder="Tell us about your business, the products you're interested in, or any questions you have..."></textarea>
          </div>
          <button type="submit" class="form-submit">Send Enquiry &#8594;</button>
          <div class="form-success" id="formSuccessWP">&#10003; Your enquiry has been prepared! Please send the email that just opened in your email client.</div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- SAMPLE BASKET WIDGET -->
<div class="basket-widget">
  <div class="basket-panel" id="basketPanelWP">
    <div class="bp-header">
      <h4>&#127873; Sample Basket</h4>
      <button class="bp-close" onclick="toggleBasketWP()">&#10005;</button>
    </div>
    <div class="bp-list" id="bpListWP">
      <div class="bp-empty">No flavours added yet.<br>Click <strong>+ Add</strong> on any flavour.</div>
    </div>
    <div class="bp-footer">
      <div class="bp-hint" id="bpHintWP">Add flavours to build your sample request.</div>
      <button class="bp-send" id="bpSendWP" onclick="sendBasketWP()" disabled>Send Sample Request &#8594;</button>
    </div>
  </div>
  <button class="basket-toggle" onclick="toggleBasketWP()">
    &#127873; Sample Basket <span class="bt-count" id="basketCountWP">0</span>
  </button>
</div>

</div><!-- /.yamas-wp-wrapper -->

<script>
function imgFallbackWP(el){ if(!el||el.dataset.fb)return; el.dataset.fb="1"; el.src='<?php echo $theme_img_base; ?>'+el.src.split('/').pop(); }

// STICKY BAR
window.addEventListener('scroll',()=>{
  const hdr=document.getElementById('siteHeaderWP'), sBar=document.getElementById('stickyBarWP');
  if(hdr && sBar){ sBar.classList.toggle('visible', window.scrollY > (hdr.offsetTop + hdr.offsetHeight + 60)); }
});

// VIDEO
const vidWP=document.getElementById('yamasVideoWP'), vOverlayWP=document.getElementById('videoOverlayWP');
if(vOverlayWP && vidWP){
  vOverlayWP.addEventListener('click',()=>{ vidWP.play(); vOverlayWP.classList.add('hidden'); });
  vidWP.addEventListener('pause',()=>vOverlayWP.classList.remove('hidden'));
}

// FLAVOUR VIEWER
const defaultsWP={can:{img:'<?php echo $yamas_img_base; ?>Yamas cans new p.jpeg',name:'All 7 Cans'},bottle:{img:'<?php echo $yamas_img_base; ?>official_all_six_tastes.jpg',name:'All 8 Bottles'}};
function selectFlavourWP(range,id,src,name){
  const m=document.getElementById(range==='can'?'can-main-wp':'bottle-main-wp');
  const bt=document.getElementById(range+'-badge-text-wp');
  m.classList.add('fade-out');
  setTimeout(()=>{ m.src=src; m.alt=name; if(bt)bt.textContent=name; m.classList.remove('fade-out'); },160);
}
function resetRangeWP(range){
  const d=defaultsWP[range];
  const m=document.getElementById(range==='can'?'can-main-wp':'bottle-main-wp');
  const bt=document.getElementById(range+'-badge-text-wp');
  m.classList.add('fade-out');
  setTimeout(()=>{ m.src=d.img; m.alt='YAMAS '+d.name; if(bt)bt.textContent='Showing: '+d.name; m.classList.remove('fade-out'); },160);
}

// SAMPLE BASKET
let basketWP=[],bOpenWP=false;
function toggleBasketWP(){ bOpenWP=!bOpenWP; document.getElementById('basketPanelWP').classList.toggle('open',bOpenWP); }
function addToBasketWP(id,name,range){
  const i=basketWP.findIndex(b=>b.id===id);
  i>-1?basketWP.splice(i,1):basketWP.push({id,name,range});
  updateBasketWP();
}
function removeFromBasketWP(id){ basketWP=basketWP.filter(b=>b.id!==id); updateBasketWP(); }
function updateBasketWP(){
  const n=basketWP.length;
  ['basketCountWP','stickyCountWP'].forEach(id=>{ const el=document.getElementById(id); if(el)el.textContent=n; });
  const list=document.getElementById('bpListWP'), send=document.getElementById('bpSendWP'), hint=document.getElementById('bpHintWP');
  send.disabled=n===0;
  hint.textContent=n>0?n+' flavour'+(n>1?'s':'')+' selected — ready to send.':'Add flavours above to build your sample request.';
  list.innerHTML=n===0?'<div class="bp-empty">No flavours added yet.<br>Click <strong>+ Add</strong> on any flavour.</div>':
    basketWP.map(b=>`<div class="bp-item"><div><div class="bp-item-name">${b.name}</div><div class="bp-item-range">${b.range}</div></div><button class="bp-remove" onclick="removeFromBasketWP('${b.id}')">&#10005;</button></div>`).join('');
  document.querySelectorAll('#can-list-wp .fl-add, #bottle-list-wp .fl-add').forEach(btn=>{ const inB=basketWP.some(b=>b.id===btn.dataset.id); btn.textContent=inB?'&#10003; Added':'+ Add'; btn.classList.toggle('added',inB); });
}
function sendBasketWP(){
  if(!basketWP.length)return;
  const sub='YAMAS Sample Request – '+basketWP.length+' Flavour'+(basketWP.length>1?'s':'');
  const body='Hello,\n\nI would like to request samples for the following YAMAS products:\n\n'+basketWP.map(b=>'  \u2022 '+b.name+' ('+b.range+')').join('\n')+'\n\nPlease get in touch with availability and delivery details.\n\nThank you.';
  window.location.href='mailto:sales@treasuresfromgreece.co.uk?subject='+encodeURIComponent(sub)+'&body='+encodeURIComponent(body);
}

// FORM SUBMISSION
function submitFormWP(e){
  e.preventDefault();
  const f=e.target;
  const name=f.name.value.trim(), company=f.company.value.trim(), email=f.email.value.trim(), phone=f.phone.value.trim();
  const etype=Array.from(f.querySelectorAll('[name="etype_wp"]')).find(r=>r.checked)?.value||'Not specified';
  const msg=f.message.value.trim();
  const sub=`YAMAS Trade Enquiry — ${etype} (${company})`;
  const body=`Name: ${name}\nCompany: ${company}\nEmail: ${email}\nPhone: ${phone||'Not provided'}\nEnquiry Type: ${etype}\n\nMessage:\n${msg||'No message provided.'}`;
  window.location.href='mailto:sales@treasuresfromgreece.co.uk?subject='+encodeURIComponent(sub)+'&body='+encodeURIComponent(body);
  document.getElementById('formSuccessWP').style.display='block';
  setTimeout(()=>{ document.getElementById('formSuccessWP').style.display='none'; },6000);
}

document.addEventListener('DOMContentLoaded',()=>{
  document.querySelectorAll('.yamas-wp-wrapper [data-range][data-img]').forEach(el=>{
    el.addEventListener('click',()=>selectFlavourWP(el.dataset.range,el.dataset.id,el.dataset.img,el.dataset.name));
  });
  document.querySelectorAll('.yamas-wp-wrapper .fl-add').forEach(btn=>{
    btn.addEventListener('click',e=>{ e.stopPropagation(); addToBasketWP(btn.dataset.id,btn.dataset.name,btn.dataset.range); });
  });
});
</script>

<?php
get_footer();
?>
