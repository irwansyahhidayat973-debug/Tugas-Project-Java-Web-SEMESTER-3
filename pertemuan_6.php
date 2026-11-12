<div class="container">
    <h2>PERTEMUAN 6: Percabangan JavaScript (If-Else &amp; Switch)</h2>
    <p>JavaScript menggunakan pernyataan <code>if...else</code>, percabangan majemuk dengan operator logika (<code>&amp;&amp;</code>), serta <code>switch</code> untuk menentukan alur eksekusi interaktif di sisi client.</p>

    <h3>6.1 Source Code: Logika Percabangan Bilangan, Indeks Prestasi &amp; Travel</h3>
    <pre class="code-box"><code><span class="tag">&lt;script&gt;</span>
<span class="comm">// 1. Cek Bilangan Positif, Negatif, atau Nol</span>
<span class="func">function</span> tanyaBilangan(bil) {
    <span class="func">if</span> (isNaN(bil)) <span class="func">return</span> <span class="str">"Anda belum memasukkan bilangan"</span>;
    <span class="func">if</span> (bil &gt; <span class="str">0</span>) <span class="func">return</span> bil + <span class="str">" adalah bilangan Positif"</span>;
    <span class="func">else if</span> (bil &lt; <span class="str">0</span>) <span class="func">return</span> bil + <span class="str">" adalah bilangan Negatif"</span>;
    <span class="func">else return</span> bil + <span class="str">" adalah Nol"</span>;
}

<span class="comm">// 2. Travel Bintang Abadi (Tujuan x Kelas + Diskon Member 10%)</span>
<span class="func">function</span> hitungTravel() {
    <span class="var">var</span> tarif = {
        Jakarta:  { Eksekutif: <span class="str">70000</span>, Bisnis: <span class="str">40000</span>, Ekonomi: <span class="str">10000</span> },
        Solo:     { Eksekutif: <span class="str">80000</span>, Bisnis: <span class="str">50000</span>, Ekonomi: <span class="str">20000</span> },
        Surabaya: { Eksekutif: <span class="str">90000</span>, Bisnis: <span class="str">60000</span>, Ekonomi: <span class="str">30000</span> }
    };
    <span class="var">var</span> ht = tarif[tujuan][kelas];
    <span class="var">var</span> sub = ht * jumlah;
    <span class="var">var</span> diskon = isMember ? <span class="str">0.10</span> * sub : <span class="str">0</span>;
    <span class="var">var</span> total = sub - diskon;
}
<span class="tag">&lt;/script&gt;</span></code></pre>

    <h3>6.2 Latihan 1: Cek Jenis Bilangan &amp; Cek Nama Bulan (Switch)</h3>
    <div class="result-box" style="margin-bottom: 20px;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            <div>
                <p><strong>a. Bilangan Negatif, Nol, atau Positif:</strong></p>
                <input type="number" id="input-bil" placeholder="Masukkan bilangan (misal: -5 atau 12)" style="max-width: 240px;">
                <button type="button" class="btn" onclick="cekBilanganJS()">Tanya</button>
                <p id="out-bil" style="margin-top: 8px; font-weight: bold; color: #4f46e5;"></p>
            </div>
            <div>
                <p><strong>b. Percabangan Switch Bulan [1–12]:</strong></p>
                <input type="number" id="input-bulan" min="1" max="12" value="11" style="max-width: 140px;">
                <button type="button" class="btn" onclick="cekBulanJS()">Cek Bulan</button>
                <p id="out-bulan" style="margin-top: 8px; font-weight: bold; color: #0284c7;"></p>
            </div>
        </div>
    </div>

    <h3>6.3 Latihan 2: Menghitung Indeks Prestasi (Percabangan Majemuk)</h3>
    <div class="result-box" style="margin-bottom: 20px;">
        <form name="fip">
            <table>
                <tr><th colspan="4" style="text-align: center;">Menghitung Indeks Prestasi</th></tr>
                <tr>
                    <td>Quis (10%):<br><input type="number" name="iquis" value="78"></td>
                    <td>Tugas (20%):<br><input type="number" name="itugas" value="80"></td>
                    <td>UTS (30%):<br><input type="number" name="iuts" value="85"></td>
                    <td>UAS (40%):<br><input type="number" name="iuas" value="80"></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;">
                        <button type="button" class="btn" onclick="hitungIP()">Hitung</button>
                        <input type="reset" value="Ulang">
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;">
                        Indeks Prestasi: <input type="text" name="oip" readonly style="max-width: 80px; text-align: center; font-weight: bold;">
                        Keterangan: <input type="text" name="oket" readonly style="max-width: 260px; font-weight: bold;">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <h3>6.4 Tugas Latihan: Travel Bintang Abadi (Tujuan, Kelas &amp; Diskon Member)</h3>
    <div class="result-box">
        <form name="ftravel">
            <table>
                <tr><th colspan="2" style="text-align: center;">Travel Bintang Abadi</th></tr>
                <tr>
                    <td style="width: 50%; vertical-align: top;">
                        <label>Nama Pemesan:</label><br>
                        <input type="text" name="inama" placeholder="Masukkan nama pemesan"><br>

                        <label>Tujuan:</label><br>
                        <select name="itujuan">
                            <option value="Jakarta">Jakarta (Eks: 70rb | Bis: 40rb | Eko: 10rb)</option>
                            <option value="Solo">Solo (Eks: 80rb | Bis: 50rb | Eko: 20rb)</option>
                            <option value="Surabaya">Surabaya (Eks: 90rb | Bis: 60rb | Eko: 30rb)</option>
                        </select><br>

                        <label>Kelas:</label><br>
                        <select name="ikelas">
                            <option value="Eksekutif">Eksekutif</option>
                            <option value="Bisnis">Bisnis</option>
                            <option value="Ekonomi">Ekonomi</option>
                        </select><br>

                        <label>Jumlah Tiket:</label><br>
                        <input type="number" name="ijumlah" value="2" min="1"><br>

                        <label style="cursor: pointer;"><input type="checkbox" name="imember"> Member Travel Bintang Abadi (Diskon 10%)</label>
                    </td>
                    <td style="width: 50%; vertical-align: top;">
                        <label>Harga Tiket:</label><br>
                        <input type="text" name="otiket" readonly><br>

                        <label>Sub Total:</label><br>
                        <input type="text" name="osub" readonly><br>

                        <label>Diskon (10%):</label><br>
                        <input type="text" name="odiskon" readonly><br>

                        <label>Total Bayar:</label><br>
                        <input type="text" name="ototal" readonly style="font-weight: bold; color: #4f46e5;">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="button" class="btn" onclick="hitungTravel()">Hitung</button>
                        <input type="reset" value="Ulang">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<script>
    function cekBilanganJS() {
        var val = document.getElementById("input-bil").value;
        var out = document.getElementById("out-bil");
        if (val === "") {
            out.innerText = "Anda belum memasukkan bilangan!";
            return;
        }
        var bil = parseFloat(val);
        if (bil > 0) out.innerText = bil + " adalah bilangan Positif";
        else if (bil < 0) out.innerText = bil + " adalah bilangan Negatif";
        else out.innerText = bil + " adalah Nol";
    }

    function cekBulanJS() {
        var bulan = parseInt(document.getElementById("input-bulan").value);
        var namabulan = "";
        switch (bulan) {
            case 1: namabulan = "Bulan ke-1 adalah Januari"; break;
            case 2: namabulan = "Bulan ke-2 adalah Februari"; break;
            case 3: namabulan = "Bulan ke-3 adalah Maret"; break;
            case 4: namabulan = "Bulan ke-4 adalah April"; break;
            case 5: namabulan = "Bulan ke-5 adalah Mei"; break;
            case 6: namabulan = "Bulan ke-6 adalah Juni"; break;
            case 7: namabulan = "Bulan ke-7 adalah Juli"; break;
            case 8: namabulan = "Bulan ke-8 adalah Agustus"; break;
            case 9: namabulan = "Bulan ke-9 adalah September"; break;
            case 10: namabulan = "Bulan ke-10 adalah Oktober"; break;
            case 11: namabulan = "Bulan ke-11 adalah November"; break;
            case 12: namabulan = "Bulan ke-12 adalah Desember"; break;
            default: namabulan = "Anda salah mengisi (masukkan 1-12)";
        }
        document.getElementById("out-bulan").innerText = namabulan;
    }

    function hitungIP() {
        var f = document.fip;
        var na = (0.10 * (parseFloat(f.iquis.value) || 0)) +
                 (0.20 * (parseFloat(f.itugas.value) || 0)) +
                 (0.30 * (parseFloat(f.iuts.value) || 0)) +
                 (0.40 * (parseFloat(f.iuas.value) || 0));
        var ip = "E", ket = "Tidak Lulus";

        if (na > 80 && na <= 100) { ip = "A"; ket = "Lulus dengan Sangat Baik"; }
        else if (na > 68 && na <= 80) { ip = "B"; ket = "Lulus dengan Baik"; }
        else if (na > 55 && na <= 68) { ip = "C"; ket = "Lulus dengan Cukup"; }
        else if (na > 38 && na <= 55) { ip = "D"; ket = "Lulus dengan Kurang"; }

        f.oip.value = ip;
        f.oket.value = ket;
    }

    function hitungTravel() {
        var f = document.ftravel;
        var tujuan = f.itujuan.value;
        var kelas = f.ikelas.value;
        var jumlah = parseFloat(f.ijumlah.value) || 0;
        var ht = 0;

        if (tujuan === "Jakarta") {
            if (kelas === "Eksekutif") ht = 70000;
            else if (kelas === "Bisnis") ht = 40000;
            else ht = 10000;
        } else if (tujuan === "Solo") {
            if (kelas === "Eksekutif") ht = 80000;
            else if (kelas === "Bisnis") ht = 50000;
            else ht = 20000;
        } else {
            if (kelas === "Eksekutif") ht = 90000;
            else if (kelas === "Bisnis") ht = 60000;
            else ht = 30000;
        }

        var sub = ht * jumlah;
        var diskon = f.imember.checked ? 0.10 * sub : 0;
        var total = sub - diskon;

        f.otiket.value = "Rp " + ht.toLocaleString("id-ID");
        f.osub.value = "Rp " + sub.toLocaleString("id-ID");
        f.odiskon.value = "Rp " + diskon.toLocaleString("id-ID");
        f.ototal.value = "Rp " + total.toLocaleString("id-ID");
    }
</script>