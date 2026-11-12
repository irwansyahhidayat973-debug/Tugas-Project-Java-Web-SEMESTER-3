<div class="container">
    <h2>PERTEMUAN 18: Objek JavaScript (Array, Date &amp; Math)</h2>
    <p>Pendalaman penggunaan objek bawaan JavaScript: <code>Array</code> untuk menampung kumpulan data berindeks, <code>Date</code> untuk membaca tanggal serta waktu sistem, dan <code>Math</code> untuk operasi komputasi matematis[cite: 106].</p>

    <h3>18.1 Source Code: Array, Date, Math &amp; Latihan Salam / Persamaan Kuadrat</h3>
    <pre class="code-box"><code><span class="tag">&lt;script</span> <span class="attr">type</span>=<span class="str">"text/javascript"</span><span class="tag">&gt;</span>
<span class="comm">// 1. Latihan Objek Array I &amp; II</span>
<span class="var">var</span> nama = <span class="func">new</span> Array(<span class="str">"Dian"</span>, <span class="str">"Andri"</span>, <span class="str">"Irawan"</span>); <span class="comm">// nama[2] = "Irawan"</span>

<span class="comm">// 2. Latihan 1: Salam Otomatis Sesuai Jam Komputer</span>
<span class="var">var</span> jam = (<span class="func">new</span> Date()).getHours();
<span class="var">var</span> ucapan = (jam &lt; <span class="str">11</span>) ? <span class="str">"Selamat Pagi"</span> : (jam &lt; <span class="str">15</span> ? <span class="str">"Selamat Siang"</span> : <span class="str">"Selamat Malam"</span>);

<span class="comm">// 3. Latihan 2: Rumus Akar Persamaan Kuadrat F(x) = ax^2 + bx + c</span>
<span class="var">var</span> diskriminan = Math.pow(b, <span class="str">2</span>) - (<span class="str">4</span> * a * c);
<span class="var">var</span> x1 = (-b + Math.sqrt(diskriminan)) / (<span class="str">2</span> * a);
<span class="var">var</span> x2 = (-b - Math.sqrt(diskriminan)) / (<span class="str">2</span> * a);
<span class="tag">&lt;/script&gt;</span></code></pre>

    <h3>18.2 Hasil Eksekusi &amp; Latihan Interaktif Pertemuan 18:</h3>
    <div class="result-box">
        <div style="background: #1e1b4b; color: #fde047; padding: 8px 12px; border-radius: 6px; margin-bottom: 12px; font-weight: bold;">
            <marquee id="m18-marquee">Memuat ucapan waktu sistem...</marquee>
        </div>

        <div id="m18-output" style="background: #bae6fd; padding: 15px; border-radius: 8px; margin-bottom: 15px; line-height: 1.7;"></div>

        <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
            <p><strong>Latihan 2: Kalkulator Akar Persamaan Kuadrat $F(x) = ax^2 + bx + c$</strong></p>
            <div style="display: flex; flex-wrap: wrap; gap: 10px; align-items: center; margin-top: 8px;">
                <label>a = <input type="number" id="m18-a" value="1" style="width: 70px;"></label>
                <label>b = <input type="number" id="m18-b" value="-7" style="width: 70px;"></label>
                <label>c = <input type="number" id="m18-c" value="12" style="width: 70px;"></label>
                <button type="button" class="btn" onclick="hitungKuadrat18()">Cari Akar x1 &amp; x2</button>
                <button type="button" class="btn" style="background: #0284c7;" onclick="alertSalam18()">Tampilkan Alert Salam</button>
            </div>
            <p id="m18-hasil-akar" style="margin-top: 10px; font-weight: bold; color: #4f46e5;">Hasil untuk x&sup2; - 7x + 12 = 0 &rarr; x1 = 4, x2 = 3</p>
        </div>
    </div>
</div>

<script>
    var ucapanWaktu18 = "";
    (function() {
        var nama = ["Dian", "Andri", "Irawan"];
        var nilai = ["A", "B", "C"];
        var strNilai = "";
        for (var a = 0; a < 3; ++a) {
            strNilai += "Nilai ke " + (a + 1) + " : " + nilai[a] + " | ";
        }

        var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        var t = new Date();
        var jam = t.getHours();
        ucapanWaktu18 = (jam < 11) ? "Selamat Pagi! Semangat belajar Java Web." : (jam < 15 ? "Selamat Siang! Tetap produktif ngoding." : "Selamat Malam! Waktunya evaluasi materi.");

        document.getElementById("m18-marquee").innerText = ucapanWaktu18 + " — Waktu Komputer Anda: " + jam + ":" + t.getMinutes() + ":" + t.getSeconds();

        var ran = Math.round(Math.random() * 50000);
        document.getElementById("m18-output").innerHTML =
            "<strong>1. Objek Array:</strong> Nama pada data ke-3 = <strong>" + nama[2] + "</strong><br>" +
            "Iterasi For Array: " + strNilai + "<br>" +
            "<strong>2. Objek Date:</strong> Sekarang adalah hari <strong>" + hari[t.getDay()] + ", tanggal " + t.getDate() + " " + bulan[t.getMonth()] + " " + t.getFullYear() + "</strong><br>" +
            "<strong>3. Objek Math:</strong> Antara 10 dan 5 lebih besar <strong>" + Math.max(10, 5) + "</strong> | 5 pangkat 10 = <strong>" + Math.pow(5, 10) + "</strong> | Pengunjung ke-<strong>" + ran + "</strong> (Akar = " + Math.sqrt(ran).toFixed(4) + ")";
    })();

    function alertSalam18() {
        alert(ucapanWaktu18);
    }

    function hitungKuadrat18() {
        var a = parseFloat(document.getElementById("m18-a").value);
        var b = parseFloat(document.getElementById("m18-b").value);
        var c = parseFloat(document.getElementById("m18-c").value);
        var out = document.getElementById("m18-hasil-akar");
        if (!a) { out.innerText = "Koefisien a tidak boleh nol."; return; }
        var D = Math.pow(b, 2) - (4 * a * c);
        if (D > 0) {
            var x1 = (-b + Math.sqrt(D)) / (2 * a);
            var x2 = (-b - Math.sqrt(D)) / (2 * a);
            out.innerText = "D = " + D + " -> Akar Real: x1 = " + x1 + ", x2 = " + x2;
        } else if (D === 0) {
            out.innerText = "D = 0 -> Akar Kembar: x1 = x2 = " + (-b / (2 * a));
        } else {
            out.innerText = "D = " + D + " < 0 -> Akar Imajiner (tidak memiliki akar real).";
        }
    }
</script>