<div class="container">
    <h2>PERTEMUAN 12: Objek Built-in JavaScript (Array, Date &amp; Math)</h2>
    <p>JavaScript menyediakan objek bawaan seperti <code>Array</code> (penyimpanan data berindeks), <code>Date</code> (manipulasi tanggal &amp; waktu), dan <code>Math</code> (operasi matematika lanjutan)[cite: 100].</p>

    <h3>12.1 Source Code: Objek Array, Date, Math &amp; Akar Persamaan Kuadrat</h3>
    <pre class="code-box"><code><span class="tag">&lt;script&gt;</span>
<span class="comm">// 1. Objek Array</span>
<span class="var">var</span> nama = <span class="func">new</span> Array(<span class="str">"Dian"</span>, <span class="str">"Andri"</span>, <span class="str">"Irawan"</span>);

<span class="comm">// 2. Objek Math</span>
<span class="var">var</span> besar   = Math.max(<span class="str">10</span>, <span class="str">5</span>);
<span class="var">var</span> pangkat = Math.pow(<span class="str">5</span>, <span class="str">10</span>);
<span class="var">var</span> ran     = Math.round(Math.random() * <span class="str">50000</span>);
<span class="var">var</span> akar    = Math.sqrt(ran);

<span class="comm">// 3. Latihan Akar Persamaan Kuadrat F(x) = ax^2 + bx + c</span>
<span class="var">var</span> D = (b * b) - (<span class="str">4</span> * a * c);
<span class="var">var</span> x1 = (-b + Math.sqrt(D)) / (<span class="str">2</span> * a);
<span class="var">var</span> x2 = (-b - Math.sqrt(D)) / (<span class="str">2</span> * a);
<span class="tag">&lt;/script&gt;</span></code></pre>

    <h3>12.2 Hasil Eksekusi &amp; Jawaban Latihan Pertemuan 12:</h3>
    <div class="result-box">
        <div id="js12-demo" style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px; margin-bottom: 15px;"></div>

        <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
            <strong>Jawaban Latihan 2: Mencari Akar Persamaan Kuadrat $F(x) = ax^2 + bx + c$</strong>
            <div style="display: flex; flex-wrap: wrap; gap: 10px; align-items: center; margin-top: 10px;">
                <label>a: <input type="number" id="eq-a" value="1" style="width: 70px;"></label>
                <label>b: <input type="number" id="eq-b" value="-5" style="width: 70px;"></label>
                <label>c: <input type="number" id="eq-c" value="6" style="width: 70px;"></label>
                <button type="button" class="btn" onclick="hitungAkarKuadrat()">Hitung Akar x1 &amp; x2</button>
            </div>
            <p id="eq-result" style="margin-top: 10px; font-weight: bold; color: #4f46e5;">Untuk x&sup2; - 5x + 6 = 0 &rarr; x1 = 3, x2 = 2</p>
        </div>
    </div>
</div>

<script>
    (function() {
        var nama = ["Dian", "Andri", "Irawan"];
        var nilai = ["A", "B", "C"];
        var listNilai = nilai.map(function(n, idx) { return "Nilai ke " + (idx + 1) + " : " + n; }).join(" | ");

        var hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        var t = new Date();
        var jam = t.getHours();
        var salam = (jam < 11) ? "Selamat Pagi" : (jam < 15 ? "Selamat Siang" : (jam < 18 ? "Selamat Sore" : "Selamat Malam"));

        var ran = Math.round(Math.random() * 50000);
        var akar = Math.sqrt(ran).toFixed(4);

        document.getElementById("js12-demo").innerHTML =
            "<p><strong>1. Array:</strong> Data ke-3 = <strong>" + nama[2] + "</strong> (" + listNilai + ")</p>" +
            "<p><strong>2. Date &amp; Latihan Salam Otomatis:</strong> <span style='color:#0284c7;font-weight:bold;'>" + salam + "!</span> Sekarang hari <strong>" + hari[t.getDay()] + ", " + t.getDate() + " " + bulan[t.getMonth()] + " " + t.getFullYear() + "</strong></p>" +
            "<p><strong>3. Math:</strong> Max(10,5) = <strong>" + Math.max(10,5) + "</strong> | 5<sup>10</sup> = <strong>" + Math.pow(5,10) + "</strong> | Pengunjung ke-<strong>" + ran + "</strong> (Akar = " + akar + ")</p>";
    })();

    function hitungAkarKuadrat() {
        var a = parseFloat(document.getElementById("eq-a").value);
        var b = parseFloat(document.getElementById("eq-b").value);
        var c = parseFloat(document.getElementById("eq-c").value);
        var out = document.getElementById("eq-result");
        if (a === 0) { out.innerText = "Nilai a tidak boleh 0."; return; }
        var D = (b * b) - (4 * a * c);
        if (D > 0) {
            var x1 = (-b + Math.sqrt(D)) / (2 * a);
            var x2 = (-b - Math.sqrt(D)) / (2 * a);
            out.innerText = "Diskriminan D = " + D + " > 0 -> Akar Real Berbeda: x1 = " + x1 + ", x2 = " + x2;
        } else if (D === 0) {
            var x = -b / (2 * a);
            out.innerText = "Diskriminan D = 0 -> Akar Kembar: x1 = x2 = " + x;
        } else {
            out.innerText = "Diskriminan D = " + D + " < 0 -> Akar Imajiner (tidak real).";
        }
    }
</script>