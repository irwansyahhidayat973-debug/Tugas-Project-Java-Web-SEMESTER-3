<div class="container">
    <h2>PERTEMUAN 19: Marquee &amp; Frame pada Pemrograman Web</h2>
    <p><strong>Marquee</strong> menciptakan efek teks berjalan pada halaman atau status bar menggunakan manipulasi <code>substr()</code> dan <code>setTimeout()</code>, sedangkan <strong>Frame</strong> membagi jendela browser menjadi beberapa panel independen (misalnya panel menu di kiri dan panel konten di kanan)[cite: 107].</p>

    <h3>19.1 Source Code: Animasi Marquee JS &amp; Struktur Frameset (<code>UTAMA.HTML</code>, <code>MENU.HTML</code>, <code>AWAL.HTML</code>)</h3>
    <pre class="code-box"><code><span class="comm">&lt;!-- 1. Animasi Teks Berjalan dengan substr() &amp; setTimeout() --&gt;</span>
<span class="tag">&lt;script</span> <span class="attr">type</span>=<span class="str">"text/javascript"</span><span class="tag">&gt;</span>
<span class="var">var</span> pesan = <span class="str">"Hallo Friend...Apa Khabar? "</span>;
<span class="func">function</span> jalankanMarquee() {
    document.basis.kotak.value = pesan;
    pesan = pesan.substr(<span class="str">1</span>, pesan.length) + pesan.substr(<span class="str">0</span>, <span class="str">1</span>);
    setTimeout(<span class="str">"jalankanMarquee()"</span>, <span class="str">100</span>);
}
<span class="tag">&lt;/script&gt;</span>

<span class="comm">&lt;!-- 2. Struktur Pembagian Halaman dengan Frameset --&gt;</span>
<span class="tag">&lt;frameset</span> <span class="attr">cols</span>=<span class="str">"30%,*"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;frame</span> <span class="attr">src</span>=<span class="str">"menu.html"</span> <span class="attr">name</span>=<span class="str">"fr1"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;frame</span> <span class="attr">src</span>=<span class="str">"awal.html"</span> <span class="attr">name</span>=<span class="str">"fr2"</span><span class="tag">&gt;</span>
<span class="tag">&lt;/frameset&gt;</span></code></pre>

    <h3>19.2 Simulasi Interaktif Marquee &amp; Frame (<code>menu.html</code> &rarr; <code>awal.html</code>):</h3>
    <div class="result-box">
        <div style="background: #bae6fd; padding: 15px; border-radius: 8px; text-align: center; margin-bottom: 15px;">
            <p style="color: #ea580c; font-weight: bold; font-size: 1.1rem; margin-bottom: 8px;">1. Latihan Marquee Dengan JavaScript</p>
            <input type="text" id="m19-kotak" size="28" readonly style="max-width: 260px; text-align: center; font-weight: bold;">
            <div style="margin-top: 8px; background: #e2e8f0; padding: 5px 10px; border-radius: 4px; font-size: 0.85rem; color: #334155;">
                Status Bar: <span id="m19-statusbar" style="font-family: monospace;">Welcome To My website </span>
            </div>
        </div>

        <p style="margin-bottom: 8px;"><strong>2. Simulasi Latihan Frame (<code>cols="30%,*"</code>):</strong></p>
        <div style="display: flex; flex-wrap: wrap; border: 2px solid #64748b; border-radius: 8px; overflow: hidden;">
            <div style="flex: 1 1 210px; background: #86efac; padding: 15px; border-right: 2px solid #64748b;">
                <p style="font-weight: bold; margin-bottom: 10px;">Pilih latihan Dibawah Ini</p>
                <form name="fform19">
                    <p style="margin-bottom: 6px;"><label><input type="radio" checked name="rbmenu" value="1"> Matematika</label></p>
                    <p style="margin-bottom: 6px;"><label><input type="radio" name="rbmenu" value="2"> Objek teks</label></p>
                    <p style="margin-bottom: 6px;"><label><input type="radio" name="rbmenu" value="3"> Objek Select</label></p>
                    <p style="margin-bottom: 12px;"><label><input type="radio" name="rbmenu" value="4"> Objek Check</label></p>
                    <button type="button" class="btn" onclick="gantiFrame19()">tampilkan</button>
                </form>
            </div>

            <div id="m19-frame-kanan" style="flex: 2 1 380px; background: #fbcfe8; padding: 25px; text-align: center; display: flex; flex-direction: column; justify-content: center;">
                <h3>Halaman ini dengan menggunakan Frame</h3>
                <p style="margin-top: 10px;"><strong>Design By Irawan Afrianto</strong></p>
                <p><strong>Email: <a href="mailto:irawan@unikom.ac.id">irawan@unikom.ac.id</a></strong></p>
                <small style="margin-top: 12px; color: #475569;">(Pilih menu di frame kiri lalu klik tombol <em>tampilkan</em>)</small>
            </div>
        </div>
    </div>
</div>

<script>
    var pesan19a = "Hallo Friend...Apa Khabar? ";
    var pesan19b = "Welcome To My website ";
    (function loopMarquee19() {
        var el1 = document.getElementById("m19-kotak");
        var el2 = document.getElementById("m19-statusbar");
        if (!el1 || !el2) return;
        el1.value = pesan19a;
        el2.innerText = pesan19b;
        pesan19a = pesan19a.substr(1, pesan19a.length) + pesan19a.substr(0, 1);
        pesan19b = pesan19b.substr(1, pesan19b.length) + pesan19b.substr(0, 1);
        setTimeout(loopMarquee19, 130);
    })();

    function gantiFrame19() {
        var pilihan = document.querySelector('input[name="rbmenu"]:checked').value;
        var panel = document.getElementById("m19-frame-kanan");
        if (pilihan === "1") {
            panel.style.background = "#fef9c3";
            panel.innerHTML = "<h4>Halaman: latmath.HTML (Matematika)</h4><p style='margin-top:8px;'>Contoh operasi <code>Math.pow(2, 8) = " + Math.pow(2, 8) + "</code> dan <code>Math.sqrt(144) = " + Math.sqrt(144) + "</code>.</p>";
        } else if (pilihan === "2") {
            panel.style.background = "#e0f2fe";
            panel.innerHTML = "<h4>Halaman: latobjekteks.HTML (Objek Teks)</h4><p style='margin-top:8px;'>Manipulasi kotak input teks: <input type='text' value='Belajar Frame & JS' style='max-width:200px;'></p>";
        } else if (pilihan === "3") {
            panel.style.background = "#ffffff";
            panel.innerHTML = "<h4>Halaman: latobjekselect.HTML (Penggunaan Objek Select)</h4><p style='margin-top:8px;'>Masukan Jurusan: <select style='max-width:220px;'><option>Sistem Informasi</option><option>Teknik Informatika</option></select></p>";
        } else {
            panel.style.background = "#f3e8ff";
            panel.innerHTML = "<h4>Halaman: latobjekcheck.HTML (Objek Checkbox)</h4><p style='margin-top:8px;'><label><input type='checkbox' checked> Java Web</label> &nbsp; <label><input type='checkbox'> Basis Data</label></p>";
        }
    }
</script>