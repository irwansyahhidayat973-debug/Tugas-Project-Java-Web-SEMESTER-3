<div class="container">
    <h2>PERTEMUAN 16: Manipulasi Lanjutan Objek String, Date &amp; Array</h2>
    <p>Pendalaman metode manipulasi teks (<code>indexOf</code>, <code>match</code>, <code>substr</code>, <code>substring</code>), iterasi panjang array (<code>array.length</code>), waktu universal (UTC), serta kontrol timer dengan <code>setTimeout</code> dan <code>clearTimeout</code>[cite: 104].</p>

    <h3>16.1 Source Code: Perbedaan <code>substr()</code> vs <code>substring()</code> &amp; Kontrol Jam <code>clearTimeout</code></h3>
    <pre class="code-box"><code><span class="tag">&lt;script&gt;</span>
<span class="var">var</span> str = <span class="str">"W3CSchools is great!"</span>;
<span class="var">var</span> pos = str.indexOf(<span class="str">"School"</span>);   <span class="comm">// 3</span>
<span class="var">var</span> m   = str.match(<span class="str">"great"</span>);      <span class="comm">// "great"</span>
<span class="var">var</span> s1  = str.substr(<span class="str">2</span>, <span class="str">6</span>);        <span class="comm">// "CSchoo" (mulai indeks 2, panjang 6 karakter)</span>
<span class="var">var</span> s2  = str.substring(<span class="str">2</span>, <span class="str">6</span>);     <span class="comm">// "CSch"   (indeks 2 sampai sebelum indeks 6)</span>

<span class="comm">// Kontrol Jam dengan start() dan stop()</span>
<span class="var">var</span> timer16 = <span class="str">null</span>;
<span class="func">function</span> stopJam16() { clearTimeout(timer16); }
<span class="tag">&lt;/script&gt;</span></code></pre>

    <h3>16.2 Hasil Eksekusi Seluruh Latihan (a – n) Pertemuan 16:</h3>
    <div class="result-box">
        <div id="js16-all" style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px; margin-bottom: 15px; line-height: 1.7;"></div>

        <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
            <p><strong>Latihan n: Membuat Jam dengan Kontrol <code>start()</code> &amp; <code>stop()</code>:</strong></p>
            <input type="text" id="clock16-display" size="20" readonly style="max-width: 180px; text-align: center; font-weight: bold; font-size: 1.1rem;">
            <button type="button" class="btn" onclick="startClock16()" style="margin-left: 8px;">Start Jam</button>
            <button type="button" class="btn" onclick="stopClock16()" style="background: #dc2626; margin-left: 6px;">Stop Jam</button>
        </div>
    </div>
</div>

<script>
    (function() {
        var str = "W3CSchools is great!";
        var famname = ["Jan Egil", "Tove", "Hege", "Stale", "Kai Jim", "Borge"];
        var d = new Date();
        var d1990 = new Date();
        d1990.setFullYear(1990);
        var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

        document.getElementById("js16-all").innerHTML =
            "<p><strong>a–e. String (\"W3CSchools is great!\"):</strong> Panjang = <strong>" + str.length + "</strong> | " +
            "<code>indexOf('School')</code> = <strong>" + str.indexOf("School") + "</strong> | " +
            "<code>match('great')</code> = <strong>" + str.match("great") + "</strong><br>" +
            "<code>substr(2,6)</code> = <strong>" + str.substr(2, 6) + "</strong> vs <code>substring(2,6)</code> = <strong>" + str.substring(2, 6) + "</strong> | " +
            "<code>toUpperCase()</code> = <strong>" + ("Hello JavaScripters!").toUpperCase() + "</strong></p>" +

            "<p style='margin-top:8px;'><strong>f–g. Array <code>famname</code> (" + famname.length + " elemen):</strong> " + famname.join(", ") + "</p>" +

            "<p style='margin-top:8px;'><strong>h–m. Date &amp; UTC:</strong> Tanggal = <strong>" + d.getDate() + "." + (d.getMonth() + 1) + "." + d.getFullYear() + "</strong> | " +
            "Hari = <strong>" + weekday[d.getDay()] + "</strong> | " +
            "Waktu UTC = <strong>" + d.getUTCHours() + "." + d.getUTCMinutes() + "." + d.getUTCSeconds() + "</strong><br>" +
            "<code>setFullYear(1990)</code> = <small>" + d1990.toDateString() + "</small></p>";
    })();

    var timer16 = null;
    function stopClock16() {
        clearTimeout(timer16);
        timer16 = null;
    }
    function startClock16() {
        var el = document.getElementById("clock16-display");
        if (!el) return;
        var time = new Date();
        var h = time.getHours();
        var m = (time.getMinutes() < 10 ? "0" : "") + time.getMinutes();
        var s = (time.getSeconds() < 10 ? "0" : "") + time.getSeconds();
        el.value = h + ":" + m + ":" + s;
        timer16 = setTimeout(startClock16, 1000);
    }
    startClock16();
</script>