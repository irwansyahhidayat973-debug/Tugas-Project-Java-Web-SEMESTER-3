<div class="container">
    <h2>PERTEMUAN 14: Dasar-Dasar JSP (Java Server Pages)</h2>
    <p><strong>Java Server Pages (JSP)</strong> adalah teknologi pengembangan web dinamis berbasis Java yang menyisipkan sintaks Java ke dalam HTML dan dikompilasi menjadi Servlet di server (Apache Tomcat) sebelum dijalankan[cite: 102].</p>

    <h3>14.1 Kebutuhan Software, Arsitektur &amp; Sintaks Dasar JSP</h3>
    <ul>
        <li><strong>Urutan Instalasi Software:</strong> 1) JDK (Java Development Kit), 2) XAMPP, 3) MySQL Front, dan 4) NetBeans IDE (aktifkan paket <em>Apache Tomcat</em> pada menu Customize)[cite: 102].</li>
        <li><strong>Sintaks Dasar JSP:</strong> Deklarasi variabel (<code>&lt;%! int angka = 10; %&gt;</code>), Ekspresi (<code>&lt;%= expression %&gt;</code>), Komentar JSP (<code>&lt;%-- komentar --%&gt;</code>), dan Scriptlet (<code>&lt;% kode java %&gt;</code>)[cite: 102].</li>
        <li><strong>JSP Directives:</strong> <code>&lt;%@ page ... %&gt;</code>, <code>&lt;%@ include ... %&gt;</code>, dan <code>&lt;%@ taglib ... %&gt;</code>[cite: 102].</li>
        <li><strong>JSP Actions &amp; Implicit Object:</strong> <code>&lt;jsp:include&gt;</code>, <code>&lt;jsp:forward&gt;</code>, <code>&lt;jsp:useBean&gt;</code>, serta 4 objek implisit (<code>application</code>, <code>page</code>, <code>request</code>, <code>session</code>)[cite: 102].</li>
    </ul>

    <h3>14.2 Source Code JSP: <code>forward1.jsp</code>, <code>forward2.jsp</code> &amp; <code>oimpl.jsp</code></h3>
    <pre class="code-box"><code><span class="comm">&lt;%-- 1. forward1.jsp (Mengirim parameter firstName &amp; date ke forward2.jsp) --%&gt;</span>
<span class="php-tag">&lt;%@page</span> <span class="attr">contentType</span>=<span class="str">"text/html"</span> <span class="attr">pageEncoding</span>=<span class="str">"UTF-8"</span><span class="php-tag">%&gt;</span>
<span class="php-tag">&lt;%</span>
    String name = request.getParameter(<span class="str">"firstName"</span>);
    <span class="func">if</span> (name != <span class="str">null</span>) {
<span class="php-tag">%&gt;</span>
    &lt;<span class="tag">jsp:forward</span> <span class="attr">page</span>=<span class="str">"forward2.jsp"</span>&gt;
        &lt;<span class="tag">jsp:param</span> <span class="attr">name</span>=<span class="str">"date"</span> <span class="attr">value</span>=<span class="str">"&lt;%= new java.util.Date() %&gt;"</span>/&gt;
    &lt;/<span class="tag">jsp:forward</span>&gt;
<span class="php-tag">&lt;%</span> } <span class="php-tag">%&gt;</span>

<span class="comm">&lt;%-- 2. oimpl.jsp (Objek Implisit JSP: application, session, request) --%&gt;</span>
&lt;<span class="tag">ul</span>&gt;
  &lt;<span class="tag">li</span>&gt;Waktu saat ini: <span class="php-tag">&lt;%=</span> <span class="func">new</span> java.util.Date() <span class="php-tag">%&gt;</span>&lt;/<span class="tag">li</span>&gt;
  &lt;<span class="tag">li</span>&gt;Server: <span class="php-tag">&lt;%=</span> application.getServerInfo() <span class="php-tag">%&gt;</span>&lt;/<span class="tag">li</span>&gt;
  &lt;<span class="tag">li</span>&gt;Session ID: <span class="php-tag">&lt;%=</span> session.getId() <span class="php-tag">%&gt;</span>&lt;/<span class="tag">li</span>&gt;
  &lt;<span class="tag">li</span>&gt;Parameter Nama: <span class="php-tag">&lt;%=</span> request.getParameter(<span class="str">"Nama"</span>) <span class="php-tag">%&gt;</span>&lt;/<span class="tag">li</span>&gt;
&lt;/<span class="tag">ul</span>&gt;</code></pre>

    <h3>14.3 Simulasi Alur Kerja <code>jsp:forward</code> &amp; Implicit Object:</h3>
    <div class="result-box">
        <form action="index.php?page=pertemuan_14" method="post">
            <label><strong>Simulasi Form <code>forward1.jsp</code> — Input Nama Awal:</strong></label><br>
            <input type="text" name="jsp_firstname" placeholder="Contoh: Paul / Budi Susanto" style="max-width: 280px;" required>
            <button type="submit" name="simulasi_jsp" class="btn" style="margin-left: 8px;">Simpan &amp; Forward</button>
        </form>

        <?php
        $nama_jsp = isset($_POST['jsp_firstname']) ? htmlspecialchars($_POST['jsp_firstname']) : "Paul";
        ?>
        <div style="margin-top: 15px; background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
            <h4 style="margin-bottom: 6px;">Output Hasil Forward (<code>forward2.jsp</code>) &amp; Implicit Object (<code>oimpl.jsp</code>):</h4>
            <p>Selamat Datang <strong><?= $nama_jsp ?></strong>! Request sudah diterima dan di-forward dengan melampirkan timestamp server:</p>
            <div style="background: #065f46; color: #67e8f9; font-weight: bold; padding: 10px 15px; display: inline-block; border: 4px outset #94a3b8; margin: 8px 0;">
                <?= date("D M d H:i:s T Y") ?>
            </div>
            <ul style="margin-top: 10px;">
                <li><strong>Server Info (<code>application.getServerInfo()</code>):</strong> <?= $_SERVER['SERVER_SOFTWARE'] ?? 'Apache Tomcat / XAMPP' ?></li>
                <li><strong>Session ID (<code>session.getId()</code>):</strong> <?= session_id() ?: strtoupper(substr(md5(uniqid()), 0, 24)) ?></li>
                <li><strong>Parameter Nama (<code>request.getParameter("Nama")</code>):</strong> <?= $nama_jsp ?></li>
            </ul>
        </div>
    </div>
</div>