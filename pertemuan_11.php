<div class="container">
    <h2>PERTEMUAN 11: Operator &amp; Fungsi dalam JavaScript</h2>
    <p>JavaScript mendukung operator aritmatika, penunjukan (<em>assignment</em>), perbandingan, dan logika, serta pembuatan fungsi modular yang dapat menerima parameter dan mengembalikan nilai menggunakan <code>return</code>[cite: 99].</p>

    <h3>11.1 Source Code: Fungsi dengan Return Value &amp; Argumen (Latihan j &amp; k)</h3>
    <pre class="code-box"><code><span class="tag">&lt;script</span> <span class="attr">type</span>=<span class="str">"text/javascript"</span><span class="tag">&gt;</span>
<span class="comm">// j. Fungsi yang mengembalikan suatu nilai</span>
<span class="func">function</span> myFunction() {
    <span class="func">return</span> (<span class="str">"Hello, have a nice day!"</span>);
}

<span class="comm">// k. Fungsi dengan argumen yang mengembalikan nilai penjumlahan</span>
<span class="func">function</span> total(numberA, numberB) {
    <span class="func">return</span> numberA + numberB;
}
<span class="tag">&lt;/script&gt;</span></code></pre>

    <h3>11.2 Ringkasan Operator &amp; Simulasi Interaktif Fungsi JavaScript:</h3>
    <div class="result-box">
        <table style="margin-bottom: 15px;">
            <thead>
                <tr>
                    <th>Jenis Operator</th>
                    <th>Simbol</th>
                    <th>Contoh &amp; Hasil</th>
                </tr>
            </thead>
            <tbody>
                <tr><td><strong>Aritmatika</strong></td><td><code>+</code>, <code>-</code>, <code>*</code>, <code>/</code>, <code>%</code>, <code>++</code>, <code>--</code></td><td><code>5 % 2 = 1</code> | <code>x = 5; x++ &rarr; 6</code></td></tr>
                <tr><td><strong>Penunjukan</strong></td><td><code>=</code>, <code>+=</code>, <code>-=</code>, <code>*=</code>, <code>/=</code>, <code>%=</code></td><td><code>x += y</code> sama dengan <code>x = x + y</code></td></tr>
                <tr><td><strong>Perbandingan</strong></td><td><code>==</code>, <code>!=</code>, <code>&gt;</code>, <code>&lt;</code>, <code>&gt;=</code>, <code>&lt;=</code></td><td><code>5 == 8 &rarr; false</code> | <code>5 != 8 &rarr; true</code></td></tr>
                <tr><td><strong>Logika</strong></td><td><code>&amp;&amp;</code> (AND), <code>||</code> (OR), <code>!</code> (NOT)</td><td><code>(6 &lt; 10 &amp;&amp; 3 &gt; 1) &rarr; true</code></td></tr>
            </tbody>
        </table>

        <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
            <p><strong>Uji Coba Fungsi <code>total(numberA, numberB)</code>:</strong></p>
            <input type="number" id="js11-a" value="2" style="max-width: 100px;"> +
            <input type="number" id="js11-b" value="3" style="max-width: 100px;">
            <button type="button" class="btn" onclick="hitungTotalJS11()" style="margin-left: 8px;">Hitung Return</button>
            <span id="js11-res" style="margin-left: 12px; font-weight: bold; color: #4f46e5;">Hasil: 5 (Hello, have a nice day!)</span>
        </div>
    </div>
</div>

<script>
    function myGreeting11() { return "Hello, have a nice day!"; }
    function totalJS11(numberA, numberB) { return numberA + numberB; }
    function hitungTotalJS11() {
        var a = parseFloat(document.getElementById("js11-a").value) || 0;
        var b = parseFloat(document.getElementById("js11-b").value) || 0;
        document.getElementById("js11-res").innerText = "Hasil: " + totalJS11(a, b) + " (" + myGreeting11() + ")";
    }
</script>