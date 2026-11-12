</div> <!-- Akhir .content-surface -->

        <?php
        $current_num = ($idx_sekarang !== false) ?$idx_sekarang + 1 : 0;
        $pages_to_show = [];

        if ($total_modul <= 9) {
            $pages_to_show = range(1,$total_modul);
        } else {
            if ($current_num <= 6) {
                $pages_to_show = [1, 2, 3, 4, 5, 6, 7, '...',$total_modul];
            } elseif ($current_num >=$total_modul - 5) {
                $pages_to_show = [1, '...',$total_modul - 6, $total_modul - 5,$total_modul - 4, $total_modul - 3,$total_modul - 2, $total_modul - 1,$total_modul];
            } else {
                $pages_to_show = [1, '...', $current_num - 2,$current_num - 1, $current_num,$current_num + 1, $current_num + 2, '...',$total_modul];
            }
        }
        ?>

        <!-- PAGINATION BULAT -->
        <div class="pagination-wrapper">
            <nav class="pagination" aria-label="Pagination">
                <?php if ($prev_page): ?>
                    <a href="index.php?page=<?= $prev_page ?>" class="nav-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                        <span>Previous</span>
                    </a>
                <?php else: ?>
                    <span class="nav-btn disabled">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                        <span>Previous</span>
                    </span>
                <?php endif; ?>

                <?php foreach ($pages_to_show as$p): ?>
                    <?php if ($p === '...'): ?>
                        <span class="dots">...</span>
                    <?php else: ?>
                        <?php
                            $slug_target = 'pertemuan_' .$p;
                            $judul_tooltip =$daftar_pertemuan[$slug_target] ?? 'Pertemuan ' .$p;
                        ?>
                        <a href="index.php?page=<?= $slug_target ?>"
                           class="page-num <?= ($current_num ===$p) ? 'active' : '' ?>"
                           title="<?= htmlspecialchars($judul_tooltip) ?>">
                            <?= $p ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php
                $target_next = ($page === 'pembuat') ? 'pertemuan_1' :$next_page;
                if ($target_next): ?>
                    <a href="index.php?page=<?= $target_next ?>" class="nav-btn">
                        <span>Next</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                <?php else: ?>
                    <span class="nav-btn disabled">
                        <span>Next</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </span>
                <?php endif; ?>
            </nav>
        </div>

        <footer class="main-footer">
            <p>Copyright © <?= date('Y') ?> Pembelajaran Pemrograman Web</p>
        </footer>
    </main>
</div>

<script src="js/script.js"></script>
<script>
    // 1. Toggle Sidebar Mobile
    const sidebarToggle = document.getElementById('sidebarToggle');
    const appSidebar = document.getElementById('appSidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', () => {
            appSidebar.classList.toggle('open');
            sidebarOverlay.classList.toggle('show');
        });
        sidebarOverlay.addEventListener('click', () => {
            appSidebar.classList.remove('open');
            sidebarOverlay.classList.remove('show');
        });
    }

    // 2. Sinkronisasi label tombol tema saat halaman dimuat
    const btnTema = document.getElementById('theme-toggle');
    if (btnTema) {
        btnTema.innerHTML = document.body.classList.contains('dark-mode') ? '☀️ Light' : '🌙 Dark';
    }

    // 3. Animasi Keluar (Fade Out) & Auto-Scroll Sidebar Saat Pindah Halaman
    document.addEventListener('DOMContentLoaded', () => {
        const workspace = document.querySelector('.main-workspace');
        const navLinks = document.querySelectorAll('.sidebar-link, .pagination a, .btn-primary-glow, .brand');

        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (!href || href.startsWith('#') || this.target === '_blank') return;

                e.preventDefault();
                if (workspace) {
                    workspace.classList.add('is-leaving');
                }
                setTimeout(() => {
                    window.location.href = href;
                }, 180);
            });
        });

        const activeSidebarItem = document.querySelector('.sidebar-link.active');
        if (activeSidebarItem) {
            activeSidebarItem.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    });
</script>
</body>
</html>