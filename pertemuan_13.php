<div class="container">
    <h2>PERTEMUAN 13: Objek String, Document &amp; Window pada JavaScript</h2>
    <p>Objek <code>String</code> memanipulasi teks dan karakter, objek <code>Document</code> mengakses properti halaman HTML, sedangkan objek <code>Window</code> mengatur jendela browser, kotak dialog, dan navigasi URL[cite: 101].</p>

    <h3>13.1 Source Code: Manipulasi Objek String &amp; Navigasi Window</h3>
    <pre class="code-box"><code><span class="tag">&lt;script&gt;</span>
<span class="var">var</span> nama = <span class="str">"Shafana Vevica"</span>;
<span class="var">var</span> panjang = nama.length;             <span class="comm">// 14</span>
<span class="var">var</span> sub     = nama.substring(<span class="str">1</span>, <span class="str">4</span>);    <span class="comm">// "haf"</span>
<span class="var">var</span> idxC    = nama.indexOf(<span class="str">"c"</span>);       <span class="comm">// 12</span>
<span class="var">var</span> sisa    = nama.substring(nama.indexOf(<span class="str">'V'</span>), nama.length); <span class="comm">// "Vevica"</span>

<span class="comm">// Navigasi dengan window.location.href</span>
<span class="func">function</span> pindahHalaman(url) {
    <span class="func">if</span> (url) window.location.href = url;
}
<span class="tag">&lt;/script&gt;</span></code></pre>

    <h3>13.2 Hasil Eksekusi Objek String &amp; Demo Objek Window:</h3>
    <div class="result-box">
        <div id="js13-string" style="background: #lightblue; background-color: #bae6fd; padding: 15px; border-radius: 8px; margin-bottom: 15px; line-height: 1.7;"></div>

        <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
            <p><strong>Demo Objek Window (<code>prompt</code>, <code>confirm</code> &amp; <code>window.location.href</code>):</strong></p>
            <button type="button" class="btn" onclick="demoWindowPrompt()">Uji Window Prompt &amp; Confirm</button>
            <hr style="margin: 12px 0; border: 0; border-top: 1px solid #cbd5e1;">
            <form name="pilihan13">
                <label><strong>Menu Pilihan Navigasi (<code>window.location.href</code>):</strong></label><br>
                <select id="pilih13" onchange="updateStatusPilih13()" style="max-width: 300px; margin-top: 6px;">
                    <option value="index.php?page=pertemuan_14">Pertemuan 14: Dasar-Dasar JSP</option>
                    <option value="index.php?page=pertemuan_15">Pertemuan 15: Event Handling JS</option>
                    <option value="index.php?page=pertemuan_16">Pertemuan 16: Objek Lanjutan JS</option>
                </select>
                <input type="text" id="pilihteks13" value="Go To Pertemuan 14: Dasar-Dasar JSP!" readonly style="max-width: 280px; margin-left: 8px;">
                <button type="button" class="btn" onclick="goPilih13()" style="margin-left: 8px;">Goo!!</button>
            </form>
        </div>
    </div>
</div>

<script>
    (function() {
        var nama = "Shafana Vevica";
        var awal = nama.indexOf('V');
        var akhir = nama.length;
        document.getElementById("js13-string").innerHTML =
            "<strong>Latihan Objek String:</strong><br>" +
            "Namaku adalah = " + nama + " (Panjang: " + nama.length + " karakter)<br>" +
            "method BIG = " + nama.big() + " | SMALL = " + nama.small() + " | SUB = " + nama.sub() + " | SUP = " + nama.sup() + "<br>" +
            "method BOLD = " + nama.bold() + " | ITALIC = " + nama.italics() + " | FONTCOLOR = " + nama.fontcolor("red") + "<br>" +
            "LOWERCASE = " + nama.toLowerCase() + " | UPPERCASE = " + nama.toUpperCase() + "<br>" +
            "SUBSTRING(1,4) = " + nama.substring(1, 4) + " | STRIKE = " + nama.strike() + " | CharAt(3) = " + nama.charAt(3) + "<br>" +
            "Index Huruf c = " + nama.indexOf("c") + " | Kata Yang Tersisa = <strong>" + nama.substring(awal, akhir) + "</strong>";
    })();

    function demoWindowPrompt() {
        var angka = window.prompt("Inputkan Angka Favorit Anda?", "7");
        if (angka !== null) {
            var pria = window.confirm("Apakah jenis kelamin Anda Pria?");
            alert("Angka favorit Anda: " + angka + "\nStatus: " + (pria ? "Boleh kenalan dong" : "Ok dech"));
        }
    }

    function updateStatusPilih13() {
        var sel = document.getElementById("pilih13");
        document.getElementById("pilihteks13").value = "Go To " + sel.options[sel.selectedIndex].text + "!";
    }

    function goPilih13() {
        window.location.href = document.getElementById("pilih13").value;
    }
</script>