<div class="container">
    <h2>PERTEMUAN 1: Konsep Dasar Pemrograman Web</h2>
    <p><strong>Website</strong> adalah kumpulan halaman digital berisi informasi teks, animasi, gambar, suara, atau video yang terkoneksi melalui internet sehingga dapat diakses secara global.</p>

    <h3>1.1 Kategori Website</h3>
    <ul>
        <li><strong>Web Statis:</strong> Halaman tidak berubah secara otomatis; perubahan dilakukan secara manual dengan mengedit kode sumber strukturnya.</li>
        <li><strong>Web Dinamis:</strong> Dirancang agar konten dapat diperbarui sesering mungkin melalui halaman <em>backend</em> (contoh: portal berita).</li>
        <li><strong>Web Interaktif:</strong> Memungkinkan komunikasi dua arah antar pengguna dengan peran moderator (contoh: forum diskusi, blog).</li>
    </ul>

    <h3>1.2 Pemrograman Web &amp; Bahasa Skrip</h3>
    <p>Pemrograman web adalah pembuatan aplikasi menggunakan bahasa skrip yang dijalankan melalui web browser. Empat bahasa utama dalam satu halaman web meliputi: <code>HTML</code> (struktur), <code>PHP</code> (logika server), <code>CSS</code> (tata letak &amp; gaya), dan <code>JavaScript</code> (interaktivitas sisi klien).</p>

    <h3>1.3 Istilah-Istilah dalam Pemrograman Web</h3>
    <table>
        <thead>
            <tr>
                <th style="width: 28%;">Istilah</th>
                <th>Pengertian &amp; Fungsi</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><strong>1. Internet</strong></td><td>Rangkaian jaringan komputer global yang terhubung menggunakan protokol TCP/IP.</td></tr>
            <tr><td><strong>2. WWW</strong></td><td><em>World Wide Web</em>, kumpulan web server di seluruh dunia yang menyediakan data secara massal.</td></tr>
            <tr><td><strong>3. Website</strong></td><td>Nama kumpulan halaman web yang dapat diakses melalui browser saat terhubung internet.</td></tr>
            <tr><td><strong>4. Web Server</strong></td><td>Perangkat lunak penerima permintaan HTTP/HTTPS dari client (contoh: XAMPP, Apache2Triad).</td></tr>
            <tr><td><strong>5. URL</strong></td><td><em>Universal Resource Locator</em>, alamat penunjuk halaman di internet (contoh: <code>http://www.google.com</code>).</td></tr>
            <tr><td><strong>6. HTTP / HTTPS</strong></td><td><em>Hypertext Transfer Protocol</em>, protokol komunikasi antara browser dan web server.</td></tr>
            <tr><td><strong>7. DNS</strong></td><td><em>Domain Name System</em>, sistem database terdistribusi yang menerjemahkan nama domain ke alamat IP.</td></tr>
            <tr><td><strong>8. IP Address</strong></td><td><em>Internet Protocol</em>, sistem pengalamatan numerik perangkat dalam jaringan internet.</td></tr>
            <tr><td><strong>9. Hyperlink</strong></td><td>Tautan yang menghubungkan teks atau gambar menuju halaman maupun alamat lain.</td></tr>
            <tr><td><strong>10. Web Browser</strong></td><td>Aplikasi untuk membuka dan menerjemahkan dokumen web (Chrome, Firefox, Edge, Safari, Opera).</td></tr>
        </tbody>
    </table>

    <h3>1.4 Contoh Kode Implementasi Struktur Navigasi HTML</h3>
    <pre class="code-box"><code><span class="comm">&lt;!-- Implementasi Struktur Navigasi Hirarki (Master Page &amp; Slave Page) --&gt;</span>
&lt;<span class="tag">nav</span>&gt;
  &lt;<span class="tag">ul</span>&gt;
    &lt;<span class="tag">li</span>&gt;&lt;<span class="tag">a</span> <span class="attr">href</span>=<span class="str">"menu.php"</span>&gt;MENU (Master Page)&lt;/<span class="tag">a</span>&gt;
      &lt;<span class="tag">ul</span>&gt;
        &lt;<span class="tag">li</span>&gt;&lt;<span class="tag">a</span> <span class="attr">href</span>=<span class="str">"tentang.php"</span>&gt;Tentang (Slave Page)&lt;/<span class="tag">a</span>&gt;&lt;/<span class="tag">li</span>&gt;
        &lt;<span class="tag">li</span>&gt;&lt;<span class="tag">a</span> <span class="attr">href</span>=<span class="str">"mulai.php"</span>&gt;Mulai &rarr; Pilih Hewan &rarr; Suara Hewan&lt;/<span class="tag">a</span>&gt;&lt;/<span class="tag">li</span>&gt;
        &lt;<span class="tag">li</span>&gt;&lt;<span class="tag">a</span> <span class="attr">href</span>=<span class="str">"keluar.php"</span>&gt;Keluar (Slave Page)&lt;/<span class="tag">a</span>&gt;&lt;/<span class="tag">li</span>&gt;
      &lt;/<span class="tag">ul</span>&gt;
    &lt;/<span class="tag">li</span>&gt;
  &lt;/<span class="tag">ul</span>&gt;
&lt;/<span class="tag">nav</span>&gt;</code></pre>

    <h3>1.5 Bagan 4 Struktur Navigasi &amp; Text Editor</h3>
    <div class="result-box">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 15px; margin-bottom: 15px;">
            <div style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>1. Struktur Navigasi Linier</strong>
                <p style="font-size: 0.9rem; margin-top: 6px;">Alur satu arah berurutan (1 halaman sebelum/sesudah):<br><code>Login User &rarr; Input Info &rarr; Upload File &rarr; Input Data Siswa &rarr; Logout</code></p>
            </div>
            <div style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>2. Struktur Navigasi Hirarki</strong>
                <p style="font-size: 0.9rem; margin-top: 6px;">Menggunakan percabangan <em>Master Page</em> ke <em>Slave Page</em> tanpa jalur linier langsung antar cabang.</p>
            </div>
            <div style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>3. Struktur Navigasi Non-Linier</strong>
                <p style="font-size: 0.9rem; margin-top: 6px;">Setiap halaman memiliki kedudukan setara (tanpa Master/Slave):<br><code>Home &harr; Contact &harr; About Us &harr; My Account</code></p>
            </div>
            <div style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>4. Struktur Navigasi Campuran</strong>
                <p style="font-size: 0.9rem; margin-top: 6px;">Gabungan linier, hirarki, dan non-linier untuk aplikasi web kompleks (sistem member &amp; CRUD artikel).</p>
            </div>
        </div>
        <p><strong>Text Editor Pendukung:</strong> Notepad (simpan dengan ekstensi manual &amp; pilih <em>All Files</em>), Notepad++ (berbasis Scintilla), Sublime Text, dan Atom (terintegrasi Git &amp; Node.js).</p>
    </div>
</div>