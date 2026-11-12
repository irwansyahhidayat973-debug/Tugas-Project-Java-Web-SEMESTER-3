<?php
$page = isset($_GET['page']) && $_GET['page'] !== '' ?$_GET['page'] : 'pembuat';

require_once 'header.php';

switch ($page) {
    case 'pembuat':
        ?>
        <!-- KARTU PROFIL UTAMA -->
        <div class="profile-card">
            <div class="profile-header-bg">
                <div class="banner-grid-overlay"></div>
            </div>
            <div class="profile-body">
                <div class="profile-avatar-wrap">
                    <img src="images/wans.jpeg" alt="Foto Profil Irwansyah Hidayat" class="profile-avatar">
                    <span class="status-dot" title="Aktif Belajar"></span>
                </div>

                <div class="profile-details">
                    <div class="profile-badges">
                        <span class="badge-indigo">🎓 Mahasiswa Sistem Informasi</span>
                        <span class="badge-slate"> NIM: 251091700134</span>
                        <span class="badge-emerald">⚡ Semester Aktif</span>
                    </div>

                    <h2 class="profile-name">Irwansyah Hidayat</h2>
                    <p class="profile-role">Web Development Enthusiast • Praktikum Pemrograman Web</p>

                    <div class="profile-quote">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <p>
                            "Saya sama seperti kalian, ada kalanya saya merasa mentok dan meminta bantuan kepada teman yang mengerti,
                            akan tetapi selagi saya mau belajar saya pribadi insyaallah akan konsisten, meskipun ada kalanya saya juga merasa malas dalam pembelajarannya,
                            itu semua wajar kok selagi ada niat untuk berusaha pasti bisa."
                        </p>
                    </div>

                    <div class="profile-actions">
                        <a href="index.php?page=pertemuan_1" class="btn-primary-glow">
                            Mulai Belajar Pertemuan 1 →
                        </a>
                        <a href="index.php?page=pertemuan_21" class="btn-secondary-outline">
                            Lihat Proyek Akhir (Modul 21)
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- BENTO GRID: STATISTIK & TECH STACK -->
        <div class="bento-grid">
            <!-- Stat 1 -->
            <div class="bento-card stat-card">
                <div class="stat-icon indigo">📚</div>
                <div>
                    <div class="stat-value">21 Modul</div>
                    <div class="stat-label">Materi & Praktikum Terstruktur</div>
                </div>
            </div>

            <!-- Stat 2 -->
            <div class="bento-card stat-card">
                <div class="stat-icon cyan">💻</div>
                <div>
                    <div class="stat-value">5 Stack</div>
                    <div class="stat-label">HTML, CSS, PHP, JS & JSP/MVC</div>
                </div>
            </div>

            <!-- Stat 3 -->
            <div class="bento-card stat-card">
                <div class="stat-icon emerald">🚀</div>
                <div>
                    <div class="stat-value">Full-Stack</div>
                    <div class="stat-label">Frontend hingga Server-Side Web</div>
                </div>
            </div>
        </div>

        <!-- RINGKASAN TEKNOLOGI YANG DIPELAJARI -->
        <div class="skills-panel">
            <div class="skills-header">
                <h3>Teknologi yang Dipelajari dalam Portofolio Ini</h3>
                <span>Pertemuan 1 s/d 21</span>
            </div>
            <div class="skills-grid">
                <div class="skill-item">
                    <div class="skill-top"><span>HTML5 & Struktur Web</span><strong>Pertemuan 1 – 2, 19</strong></div>
                    <div class="skill-bar"><div style="width: 95%; background: #f97316;"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-top"><span>CSS3, Box Model & Responsive</span><strong>Pertemuan 9 – 10, 17</strong></div>
                    <div class="skill-bar"><div style="width: 90%; background: #06b6d4;"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-top"><span>PHP Dasar, Operator & Form HTTP</span><strong>Pertemuan 3 – 5</strong></div>
                    <div class="skill-bar"><div style="width: 88%; background: #8b5cf6;"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-top"><span>JavaScript DOM, Objek & Event</span><strong>Pertemuan 6 – 8, 11 – 18</strong></div>
                    <div class="skill-bar"><div style="width: 92%; background: #eab308;"></div></div>
                </div>
                <div class="skill-item">
                    <div class="skill-top"><span>Java Web, JSP, MVC & Spring</span><strong>Pertemuan 14, 20 – 21</strong></div>
                    <div class="skill-bar"><div style="width: 85%; background: #6366f1;"></div></div>
                </div>
            </div>
        </div>
        <?php
        break;

    default:
        if (array_key_exists($page,$daftar_pertemuan)) {
            $file_materi = 'isi/' .$page . '.php';
            if (file_exists($file_materi)) {
                include $file_materi;
            } else {
                ?>
                <div class="empty-state">
                    <div class="empty-icon">📂</div>
                    <h3>File Materi Belum Tersedia</h3>
                    <p>File <code><?= htmlspecialchars($file_materi) ?></code> belum ditemukan di folder <code>isi/</code>.</p>
                </div>
                <?php
            }
        } else {
            ?>
            <div class="empty-state">
                <div class="empty-icon">⚠️</div>
                <h3>Halaman Tidak Ditemukan</h3>
                <p>Halaman <code><?= htmlspecialchars($page) ?></code> tidak tersedia. Silakan pilih modul melalui menu samping atau navigasi bawah.</p>
            </div>
            <?php
        }
        break;
}

require_once 'footer.php';
?>