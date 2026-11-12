<div class="container">
    <h2>PERTEMUAN 20: Pengenalan Java Web Programming, MVC, Spring &amp; WAR</h2>
    <p><strong>Java Web Programming</strong> (bagian dari platform <strong>J2EE / Java EE</strong>) digunakan untuk membangun aplikasi web berskala enterprise menggunakan komponen <strong>Servlet</strong>, <strong>JSP</strong>, <strong>JDBC</strong>, serta dijalankan di dalam <strong>Web Container</strong> seperti Apache Tomcat, GlassFish, atau JBoss[cite: 108].</p>

    <h3>20.1 Pola Arsitektur MVC, Spring Framework &amp; WAR Files</h3>
    <table>
        <thead>
            <tr>
                <th>Konsep / Komponen</th>
                <th>Peran &amp; Penjelasan Teknis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Model (DBA / ORM)</strong></td>
                <td>Merepresentasikan tabel database menjadi objek JavaBean (contoh: <code>Author.java</code>, <code>Post.java</code>, <code>Comment.java</code>) melalui lapisan DAO &amp; JDBC[cite: 108].</td>
            </tr>
            <tr>
                <td><strong>View (Designer)</strong></td>
                <td>Menampilkan antarmuka dan data objek kepada pengguna menggunakan halaman <code>.jsp</code>, Expression Language (EL), dan tag library <code>JSTL</code>[cite: 108].</td>
            </tr>
            <tr>
                <td><strong>Controller (Programmer)</strong></td>
                <td>Menerima request HTTP dari browser melalui <code>ActionServlet.java</code>, memproses logika bisnis, lalu meneruskannya ke View (JSP)[cite: 108].</td>
            </tr>
            <tr>
                <td><strong>Spring Framework</strong></td>
                <td>Framework lightweight berbasis <strong>IoC (Inversion of Control) / Dependency Injection</strong>, mendukung SpringMVC, manajemen transaksi, AOP, dan integrasi Hibernate/JDBC[cite: 108].</td>
            </tr>
            <tr>
                <td><strong>WAR &amp; <code>web.xml</code></strong></td>
                <td>Paket aplikasi web berekstensi <code>*.war</code> (<em>Web Archive</em>) yang memuat JSP, Servlet, library <code>.jar</code>, serta <em>Deployment Descriptor</em> <code>WEB-INF/web.xml</code>[cite: 108].</td>
            </tr>
        </tbody>
    </table>

    <h3>20.2 Source Code Struktur MVC Java Web (<code>ActionServlet.java</code> &amp; <code>web.xml</code>)</h3>
    <pre class="code-box"><code><span class="comm">// 1. Controller: ActionServlet.java (Menerima Request &amp; Meneruskan ke View JSP)</span>
<span class="func">package</span> controller;
<span class="func">import</span> java.io.IOException;
<span class="func">import</span> javax.servlet.*;
<span class="func">import</span> javax.servlet.http.*;

<span class="func">public class</span> ActionServlet <span class="func">extends</span> HttpServlet {
    <span class="func">protected void</span> doPost(HttpServletRequest request, HttpServletResponse response)
            <span class="func">throws</span> ServletException, IOException {
        String judul = request.getParameter(<span class="str">"judulPost"</span>);
        request.setAttribute(<span class="str">"dataPost"</span>, judul); <span class="comm">// Kirim objek Model ke View</span>
        RequestDispatcher rd = request.getRequestDispatcher(<span class="str">"detilposting.jsp"</span>);
        rd.forward(request, response);
    }
}

<span class="comm">&lt;!-- 2. Deployment Descriptor: WEB-INF/web.xml --&gt;</span>
<span class="tag">&lt;web-app&gt;</span>
    <span class="tag">&lt;servlet&gt;</span>
        <span class="tag">&lt;servlet-name&gt;</span>ActionServlet<span class="tag">&lt;/servlet-name&gt;</span>
        <span class="tag">&lt;servlet-class&gt;</span>controller.ActionServlet<span class="tag">&lt;/servlet-class&gt;</span>
    <span class="tag">&lt;/servlet&gt;</span>
    <span class="tag">&lt;welcome-file-list&gt;&lt;welcome-file&gt;</span>index.jsp<span class="tag">&lt;/welcome-file&gt;&lt;/welcome-file-list&gt;</span>
<span class="tag">&lt;/web-app&gt;</span></code></pre>

    <h3>20.3 Simulator Alur Request–Response MVC pada Apache Tomcat:</h3>
    <div class="result-box">
        <div style="display: flex; flex-wrap: wrap; gap: 10px; align-items: center; margin-bottom: 12px;">
            <input type="text" id="mvc-input" value="Implementasi Java EE MVC dengan Apache Tomcat" style="max-width: 360px;">
            <button type="button" class="btn" onclick="simulasiMVC20()">Kirim Request ke Servlet</button>
        </div>
        <div id="mvc-flow-output" style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px; line-height: 1.7;">
            Klik tombol <strong>Kirim Request ke Servlet</strong> untuk menelusuri 5 langkah alur MVC (Browser &rarr; Controller Servlet &rarr; Model JavaBean &rarr; View JSP &rarr; Response).
        </div>
    </div>
</div>

<script>
    function simulasiMVC20() {
        var val = document.getElementById("mvc-input").value || "Artikel Java Web";
        document.getElementById("mvc-flow-output").innerHTML =
            "<strong>1. Browser (Client):</strong> Mengirim HTTP Request dengan parameter <code>judulPost = \"" + val + "\"</code>.<br>" +
            "<strong>2. Controller (<code>ActionServlet.java</code>):</strong> Menangkap request dan menginstansiasi objek Model <code>Post.java</code>.<br>" +
            "<strong>3. Model (JavaBean / DAO):</strong> Menyimpan &amp; memetakan data ke tabel MySQL melalui <code>mysql-connector-java.jar</code>.<br>" +
            "<strong>4. View (<code>detilposting.jsp</code>):</strong> Mengambil atribut objek menggunakan Expression Language <code>${dataPost}</code>.<br>" +
            "<strong>5. Response ke Browser:</strong> Halaman HTML ter-render &rarr; <span style='color:#16a34a;font-weight:bold;'>\"" + val + "\" berhasil dipublikasikan!</span>";
    }
</script>