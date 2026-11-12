<div class="container">
    <h2>PERTEMUAN 2: Pengenalan HTML &amp; Pembuatan Tabel</h2>
    <p><strong>Hypertext Markup Language (HTML)</strong> adalah bahasa standar untuk membangun kerangka halaman web menggunakan elemen tag berpasangan.</p>

    <h3>2.1 Struktur Dasar &amp; Daftar Tag Penting HTML</h3>
    <ul>
        <li><strong>Struktur Dokumen:</strong> <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code> (berisi <code>&lt;title&gt;</code> dan <code>&lt;meta&gt;</code> dengan atribut <code>http-equiv</code>, <code>content</code>, <code>name</code>), serta <code>&lt;body&gt;</code>.</li>
        <li><strong>Tag Teks &amp; Formatting:</strong> <code>&lt;h1&gt;</code>–<code>&lt;h6&gt;</code>, <code>&lt;p&gt;</code>, <code>&lt;br&gt;</code>, <code>&lt;hr&gt;</code>, <code>&lt;b&gt;</code>, <code>&lt;i&gt;</code>, <code>&lt;u&gt;</code>, <code>&lt;sub&gt;</code>, <code>&lt;sup&gt;</code>, <code>&lt;marquee&gt;</code>, dan <code>&lt;img&gt;</code>.</li>
        <li><strong>Tag List &amp; Tabel:</strong> <code>&lt;ol&gt;</code> (berurut), <code>&lt;ul&gt;</code> (bullets), <code>&lt;li&gt;</code>, serta <code>&lt;table&gt;</code>, <code>&lt;tr&gt;</code> (baris), <code>&lt;th&gt;</code> (header), dan <code>&lt;td&gt;</code> (sel data).</li>
    </ul>

    <h3>2.2 Source Code: Formatting Tag &amp; Heading (<code>Contoh02.html</code> &amp; <code>LatihanTag.html</code>)</h3>
    <pre class="code-box"><code><span class="comm">&lt;!-- Contoh02.html &amp; LatihanTag.html --&gt;</span>
&lt;<span class="tag">html</span>&gt;
&lt;<span class="tag">head</span>&gt;&lt;<span class="tag">title</span>&gt;Contoh 02 &amp; Latihan Tag&lt;/<span class="tag">title</span>&gt;&lt;/<span class="tag">head</span>&gt;
&lt;<span class="tag">body</span> <span class="attr">bgcolor</span>=<span class="str">"#00CCFF"</span> <span class="attr">text</span>=<span class="str">"#FF0000"</span>&gt;
  &lt;<span class="tag">p</span>&gt;Ini adalah contoh penggunaan formatting TAG dalam HTML&lt;<span class="tag">br</span>&gt;
  masing-masing TAG memiliki atribut masing-masing&lt;/<span class="tag">p</span>&gt;
  &lt;<span class="tag">h1</span>&gt;Heading 1&lt;/<span class="tag">h1</span>&gt; ... &lt;<span class="tag">h6</span>&gt;Heading 6&lt;/<span class="tag">h6</span>&gt;
  &lt;<span class="tag">h1</span>&gt;&lt;<span class="tag">marquee</span> <span class="attr">width</span>=<span class="str">"50%"</span> <span class="attr">bgcolor</span>=<span class="str">"#000099"</span>&gt;Ini juga salah satu penggunaan Tag&lt;/<span class="tag">marquee</span>&gt;&lt;/<span class="tag">h1</span>&gt;
&lt;/<span class="tag">body</span>&gt;
&lt;/<span class="tag">html</span>&gt;</code></pre>

    <h3>2.3 Source Code: Tabel, Rowspan, Colspan, Cellpadding &amp; Cellspacing</h3>
    <pre class="code-box"><code><span class="comm">&lt;!-- Contoh03.html &amp; tabelcell.html --&gt;</span>
&lt;<span class="tag">table</span> <span class="attr">border</span>=<span class="str">"1"</span> <span class="attr">cellspacing</span>=<span class="str">"3"</span> <span class="attr">cellpadding</span>=<span class="str">"5"</span>&gt;
  &lt;<span class="tag">tr</span>&gt;
    &lt;<span class="tag">th</span> <span class="attr">colspan</span>=<span class="str">"5"</span>&gt;Tabel Data Siswa&lt;/<span class="tag">th</span>&gt;
  &lt;/<span class="tag">tr</span>&gt;
  &lt;<span class="tag">tr</span>&gt;
    &lt;<span class="tag">th</span>&gt;NIM&lt;/<span class="tag">th</span>&gt;&lt;<span class="tag">th</span>&gt;Nama&lt;/<span class="tag">th</span>&gt;&lt;<span class="tag">th</span>&gt;Alamat&lt;/<span class="tag">th</span>&gt;&lt;<span class="tag">th</span>&gt;TTL&lt;/<span class="tag">th</span>&gt;&lt;<span class="tag">th</span>&gt;Jurusan&lt;/<span class="tag">th</span>&gt;
  &lt;/<span class="tag">tr</span>&gt;
  &lt;<span class="tag">tr</span>&gt;
    &lt;<span class="tag">td</span>&gt;12110001&lt;/<span class="tag">td</span>&gt;&lt;<span class="tag">td</span>&gt;Anita&lt;/<span class="tag">td</span>&gt;&lt;<span class="tag">td</span>&gt;Cengkareng&lt;/<span class="tag">td</span>&gt;
    &lt;<span class="tag">td</span>&gt;Jakarta, 20 Agustus 1990&lt;/<span class="tag">td</span>&gt;
    &lt;<span class="tag">td</span> <span class="attr">rowspan</span>=<span class="str">"3"</span>&gt;Sistem Informasi&lt;/<span class="tag">td</span>&gt;
  &lt;/<span class="tag">tr</span>&gt;
&lt;/<span class="tag">table</span>&gt;</code></pre>

    <h3>2.4 Hasil / Tampilan Eksekusi:</h3>
    <div class="result-box">
        <div style="background: #00CCFF; color: #FF0000; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
            <p style="color: #FF0000; margin-bottom: 8px;">Ini adalah contoh penggunaan formatting TAG dalam HTML.<br>Masing-masing TAG memiliki atribut masing-masing.</p>
            <marquee width="60%" bgcolor="#000099" style="color: #ffffff; padding: 5px; font-weight: bold;">Ini juga salah satu penggunaan Tag Marquee</marquee>
        </div>

        <p><strong>1. Tabel Data Siswa (<code>Contoh03.html</code> dengan Rowspan &amp; Colspan):</strong></p>
        <table style="margin-bottom: 20px;">
            <tr>
                <th colspan="5" style="text-align: center;">Tabel Data Siswa</th>
            </tr>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jurusan</th>
            </tr>
            <tr>
                <td>12110001</td>
                <td>Anita</td>
                <td>Cengkareng</td>
                <td>Jakarta, 20 Agustus 1990</td>
                <td rowspan="3" style="vertical-align: middle; font-weight: bold; background: #eef2ff; text-align: center;">Sistem Informasi</td>
            </tr>
            <tr>
                <td>12110002</td>
                <td>Aditya</td>
                <td>Tangerang</td>
                <td>Semarang, 01 Januari 1989</td>
            </tr>
            <tr>
                <td>12110003</td>
                <td>Firman</td>
                <td>Bogor</td>
                <td>Jakarta, 18 September 1988</td>
            </tr>
        </table>

        <p><strong>2. Perbandingan Cellpadding &amp; Cellspacing (<code>tabelcell.html</code>):</strong></p>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <div>
                <small><code>cellspacing="0" cellpadding="0"</code></small>
                <table style="width: auto; border-collapse: separate; border-spacing: 0;">
                    <tr><td style="padding: 0;">Baris 1, Kolom 1</td><td style="padding: 0;">Baris 1, Kolom 2</td></tr>
                    <tr><td style="padding: 0;">Baris 2, Kolom 1</td><td style="padding: 0;">Baris 2, Kolom 2</td></tr>
                </table>
            </div>
            <div>
                <small><code>cellspacing="4" cellpadding="8"</code></small>
                <table style="width: auto; border-collapse: separate; border-spacing: 4px;">
                    <tr><td style="padding: 8px;">Baris 1, Kolom 1</td><td style="padding: 8px;">Baris 1, Kolom 2</td></tr>
                    <tr><td style="padding: 8px;">Baris 2, Kolom 1</td><td style="padding: 8px;">Baris 2, Kolom 2</td></tr>
                </table>
            </div>
        </div>
    </div>
</div>