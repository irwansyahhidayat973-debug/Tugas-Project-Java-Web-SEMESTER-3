<div class="container">
    <h2>PERTEMUAN 3: Dasar-Dasar PHP (Server-Side Scripting)</h2>
    <p><strong>PHP (PHP: Hypertext Preprocessor)</strong> diciptakan oleh Rasmus Lerdorf (1995) dan dikembangkan oleh Zend. Kode PHP diproses di server (seperti Apache di XAMPP) sebelum dikirimkan ke browser sebagai HTML.</p>

    <h3>3.1 Sintaks Dasar, Tipe Data &amp; Konstanta</h3>
    <ul>
        <li><strong>4 Jenis Tag PHP:</strong> Tag Standar (<code>&lt;?php ... ?&gt;</code>), Tag Pendek (<code>&lt;? ... ?&gt;</code>), Tag ASP (<code>&lt;% ... %&gt;</code>), dan Tag Script (<code>&lt;script language="php"&gt;...&lt;/script&gt;</code>).</li>
        <li><strong>6 Tipe Data Dasar:</strong> <code>Integer</code> (134), <code>Double</code> (5.1234), <code>String</code> ("asep"), <code>Boolean</code> (True/False), <code>Object</code>, dan <code>Array</code>.</li>
        <li><strong>Konstanta &amp; Komentar:</strong> Konstanta bersifat statis menggunakan <code>define("NAMA", nilai)</code>. Komentar ditulis dengan <code>//</code>, <code>#</code>, atau <code>/* ... */</code>.</li>
    </ul>

    <h3>3.2 Source Code: Variabel, Perhitungan &amp; Konstanta (<code>contoh04.php</code> – <code>contoh06.php</code>)</h3>
    <pre class="code-box"><code><span class="php-tag">&lt;?php</span>
<span class="comm">// 1. Deklarasi Variabel Biodata (contoh04.php)</span>
<span class="var">$nim</span>   = <span class="str">"12170829"</span>;
<span class="var">$nama</span>  = <span class="str">"Bima Bintang Galaxy"</span>;
<span class="var">$kelas</span> = <span class="str">"12.1A.01"</span>;

<span class="comm">// 2. Perhitungan Aritmatika Sederhana (contoh05.php)</span>
<span class="var">$jumlah</span> = <span class="str">5</span>;
<span class="var">$harga</span>  = <span class="str">20000</span>;
<span class="var">$total</span>  = <span class="var">$harga</span> * <span class="var">$jumlah</span>;

<span class="comm">// 3. Konstanta &amp; Luas Lingkaran (contoh06.php)</span>
<span class="func">define</span>(<span class="str">"JUDUL"</span>, <span class="str">"Hitung Luas Lingkaran"</span>);
<span class="func">define</span>(<span class="str">"PHI"</span>, <span class="str">3.14</span>);
<span class="var">$r</span>    = <span class="str">10</span>;
<span class="var">$luas</span> = PHI * <span class="var">$r</span> * <span class="var">$r</span>;
<span class="php-tag">?&gt;</span></code></pre>

    <h3>3.3 Hasil / Tampilan Eksekusi PHP:</h3>
    <div class="result-box">
        <?php
        // Contoh 04: Biodata
        $nim = "12170829";
        $nama = "Bima Bintang Galaxy";
        $kelas = "12.1A.01";

        // Contoh 05: Transaksi
        $jumlah = 5;
        $harga = 20000;
        $total = $harga * $jumlah;

        // Contoh 06: Konstanta Luas Lingkaran
        if (!defined("JUDUL_LINGKARAN")) define("JUDUL_LINGKARAN", "Hitung Luas Lingkaran");
        if (!defined("PHI_LINGKARAN")) define("PHI_LINGKARAN", 3.14);
        $r = 10;
        $luas = PHI_LINGKARAN * $r * $r;
        ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px;">
            <div style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>Output 1: Variabel (<code>contoh04.php</code>)</strong>
                <p style="margin-top: 8px;">NIM Saya = <?= $nim ?><br>Nama Saya = <?= $nama ?><br>Kelas Saya = <?= $kelas ?></p>
            </div>
            <div style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>Output 2: Tipe Data (<code>contoh05.php</code>)</strong>
                <p style="margin-top: 8px;">Jumlah Beli : <?= $jumlah ?><br>Harga Barang : Rp <?= number_format($harga, 0, ',', '.') ?><br>Total Bayar : <strong>Rp <?= number_format($total, 0, ',', '.') ?></strong></p>
            </div>
            <div style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>Output 3: Konstanta (<code>contoh06.php</code>)</strong>
                <p style="margin-top: 8px;"><?= JUDUL_LINGKARAN ?><br>Jari-jari : <?= $r ?><br>Luas Lingkaran = <strong><?= $luas ?></strong></p>
            </div>
        </div>
    </div>
</div>