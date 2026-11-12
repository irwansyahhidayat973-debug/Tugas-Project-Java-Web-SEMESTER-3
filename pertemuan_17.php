<div class="container">
    <h2>PERTEMUAN 17: Case Style Sheet (CSS Lanjutan &amp; Praktikum)</h2>
    <p>Selain 3 cara pemasangan CSS (External, Internal, Inline) dan satuan statik/relatif, modul ini membahas <strong>Pengelompokan Selector (Grouping of Selectors)</strong> untuk menerapkan properti seragam pada banyak elemen sekaligus serta 8 studi kasus tampilan CSS[cite: 105].</p>

    <h3>17.1 Source Code: Grouping Selectors &amp; Studi Kasus Properti CSS (Latihan a–h)</h3>
    <pre class="code-box"><code><span class="tag">&lt;style</span> <span class="attr">type</span>=<span class="str">"text/css"</span><span class="tag">&gt;</span>
<span class="comm">/* Pengelompokan Selector (Grouping of Selectors) */</span>
<span class="tag">h1, body, p, ul</span> { <span class="attr">color</span>: <span class="str">blue</span>; }

<span class="comm">/* b. Penanganan Font &amp; Shorthand */</span>
<span class="tag">p.tebal</span>   { <span class="attr">font-weight</span>: <span class="str">bold</span>; }
<span class="tag">p.lengkap</span> { <span class="attr">font</span>: <span class="str">italic small-caps 900 12px arial</span>; }

<span class="comm">/* c. Border Double Multi-Sisi &amp; Multi-Warna */</span>
<span class="tag">p.borderous</span> {
    <span class="attr">border-style</span>: <span class="str">double</span>;
    <span class="attr">border-width</span>: <span class="str">5px 10px 1px medium</span>;
    <span class="attr">border-color</span>: <span class="str">#ff0000 #00ff00 #0000ff rgb(250,0,255)</span>;
}

<span class="comm">/* h. Variasi Pseudo-Class Link */</span>
<span class="tag">a.one:hover</span>   { <span class="attr">color</span>: <span class="str">#ffcc00</span>; }
<span class="tag">a.two:hover</span>   { <span class="attr">font-size</span>: <span class="str">150%</span>; }
<span class="tag">a.three:hover</span> { <span class="attr">background</span>: <span class="str">#66ff66</span>; }
<span class="tag">a.four:hover</span>  { <span class="attr">font-family</span>: <span class="str">monospace</span>; }
<span class="tag">a.five:hover</span>  { <span class="attr">text-decoration</span>: <span class="str">overline</span>; }
<span class="tag">&lt;/style&gt;</span></code></pre>

    <h3>17.2 Hasil Eksekusi Seluruh Latihan (a – h) Pertemuan 17:</h3>
    <style>
        .m17-box { background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px; margin-bottom: 14px; }
        .m17-font-normal { font-weight: normal; }
        .m17-font-tebal { font-weight: bold; }
        .m17-font-900 { font-weight: 900; }
        .m17-font-lengkap { font: italic small-caps 900 13px Arial, sans-serif; }
        .m17-borderous {
            border-style: double;
            border-width: 5px 10px 2px 4px;
            border-color: #ff0000 #00aa00 #0000ff rgb(250, 0, 255);
            padding: 10px;
        }
        .m17-margin-demo { margin: 15px 40px 15px 80px; background: #eef2ff; padding: 8px; border-left: 3px solid #4f46e5; }
        .m17-td1 { padding: 1cm; border: 1px solid #64748b; }
        .m17-td2 { padding: 0.4cm 2cm; border: 1px solid #64748b; }
        .m17-list { list-style: square outside; margin-left: 25px; }
        .m17-zwrap { position: relative; height: 95px; border: 1px dashed #94a3b8; padding: 10px; overflow: hidden; }
        .m17-badge1 { position: absolute; left: 10px; top: 10px; z-index: 1; background: rgba(239, 68, 68, 0.85); color: #fff; padding: 12px; font-weight: bold; }
        .m17-badge2 { position: absolute; left: 180px; top: 10px; z-index: -1; background: #fde047; color: #000; padding: 12px; font-weight: bold; }
        a.m17-link { color: #ff0000; font-weight: bold; text-decoration: underline; }
        a.m17-one:hover { color: #d97706; }
        a.m17-two:hover { font-size: 135%; }
        a.m17-three:hover { background: #66ff66; padding: 2px 6px; }
        a.m17-four:hover { font-family: "Courier New", monospace; }
        a.m17-five { text-decoration: line-through; }
        a.m17-five:hover { text-decoration: overline; }
    </style>

    <div class="result-box">
        <div class="m17-box">
            <strong>a &amp; b. Background &amp; Penanganan Font:</strong>
            <div style="background: #dcfce7; padding: 10px; border-radius: 6px; margin-top: 6px;">
                <p class="m17-font-normal">1. Paragraf dengan <code>font-weight: normal</code></p>
                <p class="m17-font-tebal">2. Paragraf dengan <code>font-weight: bold</code></p>
                <p class="m17-font-900">3. Paragraf dengan <code>font-weight: 900</code></p>
                <p class="m17-font-lengkap">4. Paragraf dengan shorthand <code>font: italic small-caps 900 13px arial</code></p>
            </div>
        </div>

        <div class="m17-box">
            <strong>c &amp; d. Pembuatan Border Multi-Warna &amp; Pengaturan Margin:</strong>
            <p class="m17-borderous" style="margin-top: 8px;"><strong>border-style: double</strong> dengan ketebalan berbeda tiap sisi (<code>5px 10px 2px 4px</code>) dan warna merah, hijau, biru, magenta.</p>
            <p class="m17-margin-demo">Paragraf ini menggunakan pengaturan margin khusus (kiri <code>80px</code>, kanan <code>40px</code>) dibandingkan paragraf normal.</p>
        </div>

        <div class="m17-box">
            <strong>e &amp; f. Padding pada Sel Tabel &amp; List-Style:</strong>
            <div style="display: flex; flex-wrap: wrap; gap: 15px; margin-top: 8px;">
                <table style="width: auto;"><tr><td class="m17-td1">Padding sama tiap sisi (1cm)</td></tr></table>
                <table style="width: auto;"><tr><td class="m17-td2">Padding atas-bawah 0.4cm, kiri-kanan 2cm</td></tr></table>
                <ul class="m17-list">
                    <li>Kopi</li>
                    <li>Teh</li>
                    <li>Coca Cola</li>
                </ul>
            </div>
        </div>

        <div class="m17-box">
            <strong>g &amp; h. Lapisan Z-Index &amp; Pseudo-Class Link (Arahkan Kursor ke Link):</strong>
            <div class="m17-zwrap" style="margin: 8px 0 12px 0;">
                <div class="m17-badge1">Kotak z-index: 1 (Menutupi teks)</div>
                <p style="position: relative; z-index: 0; font-weight: bold;">Teks Heading berada pada layer default (z-index: 0).</p>
                <div class="m17-badge2">Kotak z-index: -1 (Di belakang)</div>
            </div>
            <p style="line-height: 2;">
                <a class="m17-link m17-one" href="#" onclick="return false;">1. Ubah color</a> |
                <a class="m17-link m17-two" href="#" onclick="return false;">2. Ubah font-size</a> |
                <a class="m17-link m17-three" href="#" onclick="return false;">3. Ubah background</a> |
                <a class="m17-link m17-four" href="#" onclick="return false;">4. Ubah font-family</a> |
                <a class="m17-link m17-five" href="#" onclick="return false;">5. Ubah text-decoration</a>
            </p>
        </div>
    </div>
</div>