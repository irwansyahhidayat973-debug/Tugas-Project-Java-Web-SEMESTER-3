<div class="container">
    <h2>PERTEMUAN 7: Struktur Perulangan (Looping) pada PHP</h2>
    <p><strong>Perulangan (Looping)</strong> digunakan untuk mempermudah eksekusi perintah secara berulang selama kondisi tertentu terpenuhi[cite: 81]. PHP menyediakan 4 metode perulangan utama: <code>for</code>, <code>while</code>, <code>do-while</code>, dan <code>foreach</code>[cite: 82].</p>

    <h3>7.1 Source Code: For, While, Do-While &amp; Foreach</h3>
    <pre class="code-box"><code><span class="php-tag">&lt;?php</span>
<span class="comm">// 1. Perulangan FOR (Contohfor.php)</span>
<span class="func">for</span> (<span class="var">$i</span> = <span class="str">1</span>; <span class="var">$i</span> &lt;= <span class="str">9</span>; <span class="var">$i</span>++) { <span class="func">echo</span> <span class="var">$i</span> . <span class="str">" "</span>; }

<span class="comm">// 2. Perulangan WHILE (while.php)</span>
<span class="var">$i</span> = <span class="str">1</span>;
<span class="func">while</span> (<span class="var">$i</span> &lt;= <span class="str">9</span>) { <span class="func">echo</span> <span class="var">$i</span> . <span class="str">" "</span>; <span class="var">$i</span>++; }

<span class="comm">// 3. Perulangan DO-WHILE (dowhile.php vs dowhile2.php)</span>
<span class="var">$j</span> = <span class="str">1</span>;
<span class="func">do</span> { <span class="var">$j</span>++; <span class="func">echo</span> <span class="var">$j</span> . <span class="str">" "</span>; } <span class="func">while</span> (<span class="var">$j</span> &lt;= <span class="str">9</span>); <span class="comm">// Output: 2 s/d 10</span>

<span class="comm">// 4. Perulangan FOREACH Dengan Key (foreach2.php)</span>
<span class="var">$bahasa</span> = <span class="func">array</span>(<span class="str">'Java'</span>, <span class="str">'PHP'</span>, <span class="str">'C++'</span>);
<span class="func">foreach</span> (<span class="var">$bahasa</span> <span class="func">as</span> <span class="var">$key</span> =&gt; <span class="var">$value</span>) {
    <span class="func">echo</span> <span class="var">$key</span> . <span class="str">' yaitu Bagian dari '</span> . <span class="var">$value</span> . <span class="str">'&lt;br /&gt;'</span>;
}
<span class="php-tag">?&gt;</span></code></pre>

    <h3>7.2 Hasil / Tampilan Eksekusi Keseluruhan:</h3>
    <div class="result-box">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 15px; margin-bottom: 15px;">
            <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>1. FOR (1–9) &amp; WHILE (1–9):</strong>
                <p style="margin-top: 8px;">For: <?php for ($i = 1; $i <= 9; $i++) echo$i . " "; ?><br>
                While: <?php $w = 1; while ($w <= 9) { echo $w . " "; $w++; } ?></p>
            </div>
            <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>2. DO-WHILE (Posisi Post-Increment):</strong>
                <p style="margin-top: 8px;">Cetak lalu <code>$i++</code>: <?php $d1 = 1; do { echo$d1 . " "; $d1++; } while ($d1 <= 9); ?><br>
                <code>$i++</code> lalu cetak: <?php $d2 = 1; do {$d2++; echo $d2 . " "; } while ($d2 <= 9); ?></p>
            </div>
            <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>3. FOREACH Tanpa Key:</strong>
                <p style="margin-top: 8px;"><?php $arr1 = array('PHP', 'Python', 'Ruby'); foreach ($arr1 as $v) echo$v . " | "; ?></p>
                <strong>4. FOREACH Dengan Key:</strong>
                <p style="margin-top: 4px; font-size: 0.9rem;"><?php $arr2 = array('Java', 'PHP', 'C++'); foreach ($arr2 as $k =>$v) echo "$k yaitu Bagian dari$v<br>"; ?></p>
            </div>
        </div>

        <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
            <strong>5. Jawaban Latihan (Perulangan FOR 20 Kali):</strong>
            <div style="max-height: 150px; overflow-y: auto; margin-top: 8px; padding: 10px; background: #f8fafc; border-radius: 6px; font-size: 0.9rem;">
                <?php
                for ($kata = 1; $kata <= 20; $kata++) {
                    echo "$kata. Saya Sedang Belajar Dasar Pemrograman Web<br/>";
                }
                ?>
            </div>
        </div>
    </div>
</div>