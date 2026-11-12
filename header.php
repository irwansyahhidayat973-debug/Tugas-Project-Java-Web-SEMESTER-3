<?php
if (!isset($page)) {
    $page =$_GET['page'] ?? 'pembuat';
}

$daftar_pertemuan = [
    'pertemuan_1'  => 'Pertemuan 1: Konsep Dasar Web',
    'pertemuan_2'  => 'Pertemuan 2: Pengenalan HTML & Tabel',
    'pertemuan_3'  => 'Pertemuan 3: Dasar-Dasar PHP',
    'pertemuan_4'  => 'Pertemuan 4: Operator PHP',
    'pertemuan_5'  => 'Pertemuan 5: Form & HTTP Server',
    'pertemuan_6'  => 'Pertemuan 6: Percabangan JavaScript',
    'pertemuan_7'  => 'Pertemuan 7: Loop',
    'pertemuan_8'  => 'Pertemuan 8: JavaScript',
    'pertemuan_9'  => 'Pertemuan 9: CSS Box Model',
    'pertemuan_10' => 'Pertemuan 10: Web Responsive',
    'pertemuan_11' => 'Pertemuan 11: JS Dasar & Fungsi',
    'pertemuan_12' => 'Pertemuan 12: Objek JS (Array, Date, Math)',
    'pertemuan_13' => 'Pertemuan 13: Objek JS (String, Doc, Window)',
    'pertemuan_14' => 'Pertemuan 14: Dasar-dasar JSP',
    'pertemuan_15' => 'Pertemuan 15: Kejadian (Event) JS',
    'pertemuan_16' => 'Pertemuan 16: Praktik String, Date & Array',
    'pertemuan_17' => 'Pertemuan 17: Cascading Style Sheet (CSS)',
    'pertemuan_18' => 'Pertemuan 18: Objek JS Lanjutan & Latihan',
    'pertemuan_19' => 'Pertemuan 19: Marquee dan Frame',
    'pertemuan_20' => 'Pertemuan 20: Java Web, MVC & Spring',
    'pertemuan_21' => 'Pertemuan 21: Dasar-dasar Servlet'
];

$keys = array_keys($daftar_pertemuan);
$total_modul = count($keys);
$idx_sekarang = array_search($page, $keys);$prev_page = ($idx_sekarang !== false &&$idx_sekarang > 0) ? $keys[$idx_sekarang - 1] : null;
$next_page = ($idx_sekarang !== false && $idx_sekarang <$total_modul - 1) ? $keys[$idx_sekarang + 1] : null;
$persen_progres = ($idx_sekarang !== false) ? round((($idx_sekarang + 1) /$total_modul) * 100) : 0;
$judul_aktif = ($page === 'pembuat') ? 'Profil Pembuat' : ($daftar_pertemuan[$page] ?? 'Halaman Tidak Ditemukan');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($judul_aktif) ?> — Java Web Pemrograming</title>
    <link rel="stylesheet" href="css/style.css?v=12.0">
</head>
<body class="dark-mode">

<script>
    if (localStorage.getItem("webTheme") === "light") {
        document.body.classList.remove("dark-mode");
    }
</script>

<!-- TOP NAVBAR -->
<header class="topbar">
    <div class="topbar-left">
        <button type="button" class="sidebar-toggle" id="sidebarToggle" aria-label="Buka Menu">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>

        <a href="index.php?page=pembuat" class="brand">
            <!-- LOGO SVG HEKSAGON TECH (MENYATU DENGAN DARK MODE) -->
            <div class="brand-logo-svg">
                <svg width="26" height="26" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGrad" x1="0" y1="0" x2="32" y2="32" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#818cf8"/>
                            <stop offset="55%" stop-color="#6366f1"/>
                            <stop offset="100%" stop-color="#06b6d4"/>
                        </linearGradient>
                    </defs>
                    <path d="M16 2L28 9V23L16 30L4 23V9L16 2Z" stroke="url(#logoGrad)" stroke-width="2.2" fill="rgba(99, 102, 241, 0.14)"/>
                    <path d="M12 12L8 16L12 20" stroke="#e0e7ff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20 12L24 16L20 20" stroke="#67e8f9" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.5 10.5L14.5 21.5" stroke="url(#logoGrad)" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="brand-info">
                <span class="brand-title">Java Web Pemrograming</span>
                <span class="brand-sub">Portofolio Praktikum • Sistem Informasi</span>
            </div>
        </a>
    </div>

    <div class="topbar-right">
        <?php if ($idx_sekarang !== false): ?>
            <div class="progress-badge" title="Progres Pembelajaran">
                <span>Modul <?= $idx_sekarang + 1 ?>/<?=$total_modul ?></span>
                <div class="mini-bar"><div style="width: <?= $persen_progres ?>%"></div></div>
                <strong><?= $persen_progres ?>%</strong>
            </div>
        <?php endif; ?>

        <button type="button" id="theme-toggle" class="icon-btn" onclick="gantiTemaWeb()" title="Ganti Tema Terang / Gelap">
            ☀️ Light
        </button>
    </div>
</header>

<!-- LAYOUT UTAMA -->
<div class="app-layout">
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- SIDEBAR -->
    <aside class="sidebar" id="appSidebar">
        <div class="sidebar-section">
            <div class="sidebar-label">Menu Utama</div>
            <a href="index.php?page=pembuat" class="sidebar-link <?= ($page === 'pembuat') ? 'active' : '' ?>">
                <span class="num-pill">👤</span>
                <span class="link-text">Profil Pembuat</span>
            </a>
        </div>

        <div class="sidebar-section">
            <div class="sidebar-label">Daftar Modul (1 – 21)</div>
            <div class="sidebar-list">
                <?php $no = 1; foreach ($daftar_pertemuan as $slug =>$label):
                    $judul_bersih = preg_replace('/^Pertemuan \d+:\s*/', '',$label);
                ?>
                    <a href="index.php?page=<?= $slug ?>" class="sidebar-link <?= ($page ===$slug) ? 'active' : '' ?>">
                        <span class="num-pill"><?= $no ?></span>
                        <span class="link-text"><?= htmlspecialchars($judul_bersih) ?></span>
                    </a>
                <?php $no++; endforeach; ?>
            </div>
        </div>
    </aside>

    <!-- AREA KONTEN UTAMA -->
    <main class="main-workspace">
        <div class="page-banner">
            <div class="banner-grid-overlay"></div>
            <div class="banner-inner">
                <div class="banner-left">
                    <div class="banner-meta">
                        <span class="chip">HTML5</span>
                        <span class="chip">CSS3</span>
                        <span class="chip">PHP</span>
                        <span class="chip">JavaScript</span>
                        <span class="chip">JSP & MVC</span>
                    </div>
                    <h1><?= htmlspecialchars($judul_aktif) ?></h1>
                    <p>Menunjukkan hasil pembelajaran dari pertemuan 1 s/d 21</p>
                </div>

                <div class="banner-right-card">
                    <div class="banner-stat-num"><?= ($idx_sekarang !== false) ? sprintf('\%02d', $idx_sekarang + 1) : '21' ?></div>
                    <div class="banner-stat-text"><?= ($idx_sekarang !== false) ? 'Dari 21 Modul' : 'Total Modul' ?></div>
                </div>
            </div>
        </div>

        <div class="content-surface">