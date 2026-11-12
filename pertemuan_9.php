<div class="container">
    <h2>PERTEMUAN 8: Latihan Dasar JavaScript &amp; Dialog Box</h2>
    <p>JavaScript dapat disisipkan pada bagian <code>&lt;head&gt;</code>, <code>&lt;body&gt;</code>, maupun file eksternal (<code>&lt;script src="program.js"&gt;</code>) untuk memanipulasi teks, tanggal, fungsi berparameter, serta kotak dialog (<code>alert</code>, <code>prompt</code>, <code>confirm</code>)[cite: 90].</p>

    <h3>8.1 Source Code: Penulisan Teks, Fungsi Argumen, Tanggal &amp; Dialog Box</h3>
    <pre class="code-box"><code><span class="tag">&lt;script</span> <span class="attr">type</span>=<span class="str">"text/javascript"</span><span class="tag">&gt;</span>
<span class="comm">// 1. Fungsi dengan Argumen (contohjs6.html)</span>
<span class="func">function</span> sapaWaktu(txt) {
    alert(txt);
}

<span class="comm">// 2. Tanggal Lengkap dengan Array Hari &amp; Bulan (contohjs7.html)</span>
<span class="func">function</span> tampilTanggalJS7() {
    <span class="var">var</span> d = <span class="func">new</span> Date();
    <span class="var">var</span> weekday = [<span class="str">"Sunday"</span>,<span class="str">"Monday"</span>,<span class="str">"Tuesday"</span>,<span class="str">"Wednesday"</span>,<span class="str">"Thursday"</span>,<span class="str">"Friday"</span>,<span class="str">"Saturday"</span>];
    <span class="var">var</span> monthname = [<span class="str">"Jan"</span>,<span class="str">"Feb"</span>,<span class="str">"Mar"</span>,<span class="str">"Apr"</span>,<span class="str">"May"</span>,<span class="str">"Jun"</span>,<span class="str">"Jul"</span>,<span class="str">"Aug"</span>,<span class="str">"Sep"</span>,<span class="str">"Oct"</span>,<span class="str">"Nov"</span>,<span class="str">"Dec"</span>];
    <span class="func">return</span> weekday[d.getDay()] + <span class="str">" "</span> + d.getDate() + <span class="str">". "</span> + monthname[d.getMonth()] + <span class="str">" "</span> + d.getFullYear();
}

<span class="comm">// 3. Latihan program.js (prompt, confirm, alert)</span>
<span class="func">function</span> jalankanProgramJS() {
    <span class="var">var</span> n = prompt(<span class="str">"Masukan nama anda:"</span>);
    <span class="var">var</span> c = confirm(<span class="str">"Hai "</span> + n + <span class="str">"! Apakah saya tampan?"</span>);
    <span class="func">if</span> (c == <span class="str">true</span>) { alert(<span class="str">"Oh Thanks!!"</span>); }
    <span class="func">else</span> { alert(<span class="str">"Why?!!"</span>); }
}
<span class="tag">&lt;/script&gt;</span></code></pre>

    <h3>8.2 Demo Interaktif Semua Contoh Pertemuan 8:</h3>
    <div class="result-box">
        <p><strong>1. Output <code>document.write</code> &amp; Tanggal Lengkap (<code>contohjs1</code>, <code>contohjs2</code>, <code>contohjs7</code>):</strong></p>
        <div id="js8-output" style="background: #fff; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; margin: 8px 0 15px 0;"></div>

        <p><strong>2. Fungsi &amp; Fungsi Berargumen (<code>contohjs5</code> &amp; <code>contohjs6</code>):</strong></p>
        <div style="margin: 8px 0 15px 0; display: flex; flex-wrap: wrap; gap: 10px;">
            <button type="button" class="btn" onclick="alert('HELLO')">Call Function (contohjs5)</button>
            <button type="button" class="btn" onclick="alert('Good Morning!')">Selamat Pagi (contohjs6)</button>
            <button type="button" class="btn" onclick="alert('Good Evening!')">Selamat Malam (contohjs6)</button>
        </div>

        <p><strong>3. Jawaban Latihan (<code>program.js</code> — Prompt &amp; Confirm):</strong></p>
        <button type="button" class="btn" style="background: #0284c7;" onclick="jalankanLatihanJS8()">Jalankan Latihan Dialog Box</button>
    </div>
</div>

<script>
    (function() {
        var d = new Date();
        var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        var monthname = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
        var tgl = weekday[d.getDay()] + " " + d.getDate() + ". " + monthname[d.getMonth()] + " " + d.getFullYear();
        document.getElementById("js8-output").innerHTML =
            "This message is written when the page loads.<br>" +
            "<strong style='font-size:1.3rem;'>Hello World!</strong><br>" +
            "Tanggal Sistem: <strong>" + tgl + "</strong>";
    })();

    function jalankanLatihanJS8() {
        var n = prompt("Masukan nama anda:");
        if (n !== null) {
            var c = confirm("Hai " + n + "! Apakah saya tampan?");
            if (c === true) alert("Oh Thanks!!");
            else alert("Why?!!");
        }
    }
</script>