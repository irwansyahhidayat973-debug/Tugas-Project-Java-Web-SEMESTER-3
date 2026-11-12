<div class="container">
    <h2>PERTEMUAN 9: Cascading Style Sheets (CSS) &amp; Box Model</h2>
    <p><strong>CSS (Cascading Style Sheets)</strong> mengatur tata letak, warna, tipografi, dan jarak elemen HTML melalui 3 metode pemasangan: <strong>External</strong> (<code>&lt;link rel="stylesheet"&gt;</code>), <strong>Internal</strong> (<code>&lt;style&gt;</code>), dan <strong>Inline</strong> (atribut <code>style=""</code>)[cite: 91].</p>

    <h3>9.1 Sintaks CSS, Selector &amp; Box Model</h3>
    <ul>
        <li><strong>Struktur Sintaks:</strong> <code>selector { property: value; }</code>[cite: 91].</li>
        <li><strong>Selector:</strong> Tag HTML (<code>h1</code>), ID unik (<code>#teks</code>), dan Class (<code>.warna</code>)[cite: 91].</li>
        <li><strong>Satuan CSS:</strong> Statik (<code>in</code>, <code>cm</code>, <code>mm</code>, <code>pt</code>, <code>pc</code>, <code>px</code>) dan Relatif (<code>%</code>, <code>em</code>, <code>ex</code>)[cite: 91].</li>
        <li><strong>CSS Box Model:</strong> Urutan dari dalam ke luar yaitu <code>Content &rarr; Padding &rarr; Border &rarr; Margin</code> (urutan nilai 4 sisi: <em>top, right, bottom, left</em>)[cite: 91].</li>
    </ul>

    <h3>9.2 Source Code: Pseudo-Class CSS (<code>style_css.css</code> &amp; <code>latihan_css.html</code>)</h3>
    <pre class="code-box"><code><span class="comm">/* style_css.css */</span>
<span class="tag">.demo-css li:first-child a</span> { <span class="attr">color</span>: <span class="str">green</span>; }
<span class="tag">.demo-css li:last-child a</span>  { <span class="attr">color</span>: <span class="str">green</span>; }
<span class="tag">.demo-css li:nth-child(even) a</span> { <span class="attr">color</span>: <span class="str">green</span>; }
<span class="tag">.demo-css li:nth-child(odd) a</span>  { <span class="attr">color</span>: <span class="str">violet</span>; }
<span class="tag">.demo-css p:first-of-type</span> { <span class="attr">color</span>: <span class="str">red</span>; }
<span class="tag">.demo-css p:last-of-type</span>  { <span class="attr">color</span>: <span class="str">orange</span>; }</code></pre>

    <h3>9.3 Hasil Simulasi Box Model &amp; Latihan Pseudo-Class CSS:</h3>
    <style>
        .demo-css ul { margin: 10px 0 15px 25px; }
        .demo-css li:first-child a { color: green; font-weight: bold; }
        .demo-css li:last-child a { color: green; font-weight: bold; }
        .demo-css li:nth-child(even) a { color: green; }
        .demo-css li:nth-child(odd) a { color: violet; }
        .demo-css p:first-of-type { color: red; }
        .demo-css p:last-of-type { color: orange; }
    </style>
    <div class="result-box">
        <div style="margin: 10px auto 20px auto; max-width: 450px; background: #f8fafc; border: 2px dashed #64748b; padding: 15px; text-align: center;">
            <small>Margin (Luar)</small>
            <div style="background: #84cc16; padding: 12px; margin-top: 5px; border: 2px solid #3f6212;">
                <small style="color: #fff;">Border &amp; Padding (Dalam)</small>
                <div style="background: #ffffff; border: 1px dashed #334155; padding: 15px; margin-top: 5px; font-weight: bold;">
                    Area Content (Box Model CSS)
                </div>
            </div>
        </div>

        <div class="demo-css" style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 6px;">
            <a href="#" onclick="return false;">Hello World</a>
            <ul>
                <?php for ($l = 1; $l <= 10; $l++): ?>
                    <li><a href="#" onclick="return false;">Link <?= $l ?></a></li>
                <?php endfor; ?>
            </ul>
            <p>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf (Paragraf 1: <code>p:first-of-type</code> berwarna merah).</p>
            <p>Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik (Paragraf 2: <code>p:last-of-type</code> berwarna oranye).</p>
        </div>
    </div>
</div>