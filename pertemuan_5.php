<div class="container">
    <h2>PERTEMUAN 5: Pengolahan Form HTTP (GET/POST) &amp; Percabangan PHP</h2>
    <p>Form HTML mengirimkan data ke server melalui atribut <code>method="get"</code> (tampil di URL) atau <code>method="post"</code> (tersembunyi di header HTTP), lalu diproses menggunakan percabangan <code>if...else</code> maupun <code>switch...case</code>.</p>

    <h3>5.1 Source Code: Form Input Mahasiswa &amp; Percabangan Beasiswa PHP</h3>
    <pre class="code-box"><code><span class="comm">&lt;!-- Penggabungan forminputmahasiswa.php &amp; beasiswa_output.php --&gt;</span>
<span class="php-tag">&lt;?php</span>
<span class="func">if</span> (<span class="func">isset</span>(<span class="var">$_POST</span>[<span class="str">'proses_mhs'</span>])) {
    <span class="var">$nama</span>      = <span class="func">htmlspecialchars</span>(<span class="var">$_POST</span>[<span class="str">'nama'</span>]);
    <span class="var">$jurusan</span>   = <span class="func">htmlspecialchars</span>(<span class="var">$_POST</span>[<span class="str">'jurusan'</span>]);
    <span class="var">$pekerjaan</span> = <span class="func">htmlspecialchars</span>(<span class="var">$_POST</span>[<span class="str">'pekerjaan'</span>]);
    <span class="var">$hobi</span>      = <span class="func">isset</span>(<span class="var">$_POST</span>[<span class="str">'hobi'</span>]) ? <span class="func">implode</span>(<span class="str">", "</span>, <span class="var">$_POST</span>[<span class="str">'hobi'</span>]) : <span class="str">"-"</span>;
    <span class="var">$ipk</span>       = (float) <span class="var">$_POST</span>[<span class="str">'ipk'</span>];

    <span class="func">if</span> (<span class="var">$ipk</span> &gt;= <span class="str">3.0</span>) {
        <span class="var">$ket</span> = <span class="str">"Mendapat beasiswa sebesar Rp. 1.000.000"</span>;
    } <span class="func">else</span> {
        <span class="var">$ket</span> = <span class="str">"Tidak dapat beasiswa"</span>;
    }
}
<span class="php-tag">?&gt;</span></code></pre>

    <h3>5.2 Contoh Percabangan Statis (IF-ELSE, IF Majemuk &amp; Switch Terbilang)</h3>
    <div class="result-box" style="margin-bottom: 20px;">
        <?php
        $nilai_dasar = 40;
        $status_lulus = ($nilai_dasar >= 60) ? "Selamat, Anda Lulus" : "Sorry, Anda Tidak Lulus";

        $nilai_majemuk = 90;
        if ($nilai_majemuk >= 0 && $nilai_majemuk < 50) $grade = "E";
        elseif ($nilai_majemuk >= 50 && $nilai_majemuk < 60) $grade = "D";
        elseif ($nilai_majemuk >= 60 && $nilai_majemuk < 75) $grade = "C";
        elseif ($nilai_majemuk >= 75 && $nilai_majemuk < 85) $grade = "B";
        elseif ($nilai_majemuk >= 85 && $nilai_majemuk <= 100) $grade = "A";
        else $grade = "Nilai di luar jangkauan";

        $angka = 6;
        switch ($angka) {
            case 0: $terbilang = "NOL"; break;
            case 1: $terbilang = "SATU"; break;
            case 2: $terbilang = "DUA"; break;
            case 3: $terbilang = "TIGA"; break;
            case 4: $terbilang = "EMPAT"; break;
            case 5: $terbilang = "LIMA"; break;
            case 6: $terbilang = "ENAM"; break;
            case 7: $terbilang = "TUJUH"; break;
            case 8: $terbilang = "DELAPAN"; break;
            case 9: $terbilang = "SEMBILAN"; break;
            default: $terbilang = "Nilai di luar jangkauan"; break;
        }
        ?>
        <p><strong>1. IF-ELSE:</strong> Nilai Anda = <?= $nilai_dasar ?>. <strong><?= $status_lulus ?></strong></p>
        <p><strong>2. IF Majemuk:</strong> Nilai Anda : <?= $nilai_majemuk ?>, dikonversi menjadi <strong><?= $grade ?></strong></p>
        <p><strong>3. Switch Case:</strong> Bentuk Terbilang dari angka <?= $angka ?> adalah <strong><?= $terbilang ?></strong></p>
    </div>

    <h3>5.3 Demo Form Lengkap: Data Mahasiswa &amp; Seleksi Beasiswa (Metode POST)</h3>
    <div class="result-box">
        <form action="index.php?page=pertemuan_5" method="post">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
                <div>
                    <label><strong>Nama Lengkap:</strong></label><br>
                    <input type="text" name="nama" placeholder="Sandrina Ghaisani Ismail" required><br>

                    <label><strong>NIM:</strong></label><br>
                    <input type="text" name="nim" placeholder="12035894" required><br>

                    <label><strong>Kelas:</strong></label><br>
                    <input type="text" name="kelas" placeholder="Pagi / 12.1A.01" required><br>

                    <label><strong>Alamat:</strong></label><br>
                    <textarea name="alamat" rows="2" placeholder="Masukkan alamat lengkap"></textarea>
                </div>
                <div>
                    <label><strong>Jurusan:</strong></label><br>
                    <select name="jurusan">
                        <option value="Sistem Informasi">SI - Sistem Informasi</option>
                        <option value="Teknik Informatika">TI - Teknik Informatika</option>
                    </select><br>

                    <label><strong>Pekerjaan:</strong></label><br>
                    <select name="pekerjaan">
                        <option value="Pelajar">Pelajar</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select><br>

                    <label><strong>Jenis Kelamin:</strong></label><br>
                    <label style="margin-right: 15px;"><input type="radio" name="jekel" value="Pria" checked> Pria</label>
                    <label><input type="radio" name="jekel" value="Wanita"> Wanita</label><br><br>

                    <label><strong>Hobi (Checkbox):</strong></label><br>
                    <label style="margin-right: 10px;"><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
                    <label style="margin-right: 10px;"><input type="checkbox" name="hobi[]" value="Musik"> Musik</label>
                    <label><input type="checkbox" name="hobi[]" value="Jalan-Jalan"> Jalan-Jalan</label><br><br>

                    <label><strong>IPK (Syarat Beasiswa &ge; 3.0):</strong></label><br>
                    <input type="text" name="ipk" placeholder="3.50" required>
                </div>
            </div>
            <button type="submit" name="proses_mhs" class="btn">Proses Data</button>
            <input type="reset" value="Batal">
        </form>

        <?php if (isset($_POST['proses_mhs'])):
            $nama = htmlspecialchars($_POST['nama']);
            $nim = htmlspecialchars($_POST['nim']);
            $kelas = htmlspecialchars($_POST['kelas']);
            $alamat = htmlspecialchars($_POST['alamat']);
            $jurusan = htmlspecialchars($_POST['jurusan']);
            $pekerjaan = htmlspecialchars($_POST['pekerjaan']);
            $jekel = htmlspecialchars($_POST['jekel']);
            $hobi = isset($_POST['hobi']) ? implode(", ", array_map('htmlspecialchars', $_POST['hobi'])) : "Tidak ada";
            $ipk = (float) str_replace(',', '.', $_POST['ipk']);
            $ket = ($ipk >= 3.0) ? "Mendapat beasiswa sebesar Rp. 1.000.000" : "Tidak dapat beasiswa";
        ?>
            <table style="margin-top: 20px;">
                <tr><th colspan="2" style="text-align: center;">Data Mahasiswa &amp; Penerima Beasiswa</th></tr>
                <tr><td style="width: 30%;">Nama / NIM</td><td><strong><?= $nama ?></strong> (<?= $nim ?>)</td></tr>
                <tr><td>Kelas / Jurusan</td><td><?= $kelas ?> — <?= $jurusan ?></td></tr>
                <tr><td>Jenis Kelamin / Pekerjaan</td><td><?= $jekel ?> — <?= $pekerjaan ?></td></tr>
                <tr><td>Alamat</td><td><?= $alamat ?: '-' ?></td></tr>
                <tr><td>Hobi</td><td><?= $hobi ?></td></tr>
                <tr><td>IPK</td><td><strong><?= number_format($ipk, 2) ?></strong></td></tr>
                <tr style="background: #e0f2fe;">
                    <td><strong>Keterangan Beasiswa</strong></td>
                    <td>Menyatakan bahwa <strong><?= $nama ?></strong>: <strong><?= $ket ?></strong></td>
                </tr>
            </table>
        <?php endif; ?>
    </div>
</div>