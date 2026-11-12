<div class="container">
    <h2>PERTEMUAN 4: Operator dalam PHP</h2>
    <p><strong>Operator</strong> adalah simbol yang melakukan operasi terhadap operan (variabel atau konstanta) untuk menghasilkan nilai baru.</p>

    <h3>4.1 Keempat Jenis Operator PHP</h3>
    <ul>
        <li><strong>Operator Aritmatika:</strong> <code>+</code>, <code>-</code>, <code>*</code>, <code>/</code>, <code>%</code> (sisa bagi), <code>++</code> (inkremen), <code>--</code> (dekremen).</li>
        <li><strong>Operator Perbandingan:</strong> <code>==</code>, <code>!=</code>, <code>&lt;&gt;</code>, <code>&gt;</code>, <code>&lt;</code>, <code>&gt;=</code>, <code>&lt;=</code> (menghasilkan <code>1</code> jika True, kosong jika False).</li>
        <li><strong>Operator Logika:</strong> <code>AND</code> / <code>&amp;&amp;</code>, <code>OR</code> / <code>||</code>, <code>XOR</code>, dan <code>!</code> (negasi).</li>
        <li><strong>Operator String:</strong> Tanda titik (<code>.</code>) untuk menggabungkan beberapa nilai string.</li>
    </ul>

    <h3>4.2 Source Code: Implementasi 4 Operator &amp; Latihan Volume Kubus</h3>
    <pre class="code-box"><code><span class="php-tag">&lt;?php</span>
<span class="comm">// 1. Operator Aritmatika &amp; Perbandingan</span>
<span class="var">$bil1</span> = <span class="str">200</span>; <span class="var">$bil2</span> = <span class="str">40</span>;
<span class="var">$teks1</span> = <span class="str">"PHP"</span>; <span class="var">$teks2</span> = <span class="str">"php"</span>;

<span class="comm">// 2. Operator Logika</span>
<span class="var">$logika1</span> = (<span class="str">100</span> &lt;&gt; <span class="str">20</span>) <span class="func">or</span> (<span class="var">$teks1</span> == <span class="var">$teks2</span>);
<span class="var">$logika2</span> = !(<span class="var">$teks1</span> == <span class="var">$teks2</span>);

<span class="comm">// 3. LatihanOperator.php (Volume Kubus &amp; Operator String)</span>
<span class="var">$sisi</span>   = <span class="str">15</span>;
<span class="var">$str1</span>   = <span class="str">"Belajar Menghitung"</span>;
<span class="var">$str2</span>   = <span class="str">"Volume Kubus"</span>;
<span class="var">$volume</span> = <span class="var">$sisi</span> * <span class="var">$sisi</span> * <span class="var">$sisi</span>;
<span class="func">echo</span> <span class="var">$str1</span> . <span class="str">". "</span> . <span class="var">$str2</span> . <span class="str">" = "</span> . <span class="var">$volume</span> . <span class="str">" cm3"</span>;
<span class="php-tag">?&gt;</span></code></pre>

    <h3>4.3 Hasil / Tampilan Eksekusi Keseluruhan:</h3>
    <div class="result-box">
        <?php
        $bil1 = 200;
        $bil2 = 40;
        $t1 = "PHP";
        $t2 = "php";
        ?>
        <table>
            <thead>
                <tr>
                    <th>Kategori Operator</th>
                    <th>Ekspresi Kode</th>
                    <th>Hasil Output Browser</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Aritmatika</strong></td>
                    <td><code>$bil1 + $bil2</code> | <code>$bil1 - $bil2</code> | <code>$bil1 / $bil2</code></td>
                    <td>200 + 40 = <strong><?= $bil1 + $bil2 ?></strong> | 200 - 40 = <strong><?= $bil1 - $bil2 ?></strong> | 200 / 40 = <strong><?= $bil1 / $bil2 ?></strong></td>
                </tr>
                <tr>
                    <td><strong>Perbandingan</strong></td>
                    <td><code>$bil1 == $bil2</code> | <code>$bil1 != $bil2</code> | <code>"PHP" != "php"</code></td>
                    <td>== : <strong>"<?= ($bil1 == $bil2) ?>"</strong> | != : <strong>"<?= ($bil1 != $bil2) ?>"</strong> | String != : <strong>"<?= ($t1 != $t2) ?>"</strong></td>
                </tr>
                <tr>
                    <td><strong>Logika</strong></td>
                    <td><code>(100 &lt;&gt; 20) or ("PHP" == "php")</code> | <code>!("PHP" == "php")</code></td>
                    <td>OR : <strong><?= ((100 <> 20) or ($t1 == $t2)) ?></strong> | NOT (!) : <strong><?= (!($t1 == $t2)) ?></strong></td>
                </tr>
                <tr>
                    <td><strong>String (<code>.</code>)</strong></td>
                    <td><code>"Aku Sedang belajar " . "Pemrograman Web " . "PHP"</code></td>
                    <td><strong><?= "Aku Sedang belajar " . "Pemrograman Web " . "Menggunakan bahasa script PHP" ?></strong></td>
                </tr>
                <tr style="background: #eef2ff;">
                    <td><strong>Jawaban Latihan</strong></td>
                    <td><code>$sisi = 15; $volume = $sisi * $sisi * $sisi;</code></td>
                    <td><strong><?= "Belajar Menghitung. Volume Kubus" ?></strong> &rarr; Sisi = 15 cm, Volume = <strong><?= 15 * 15 * 15 ?> cm&sup3;</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>