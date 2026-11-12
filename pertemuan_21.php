<h2>Pertemuan 21: Dasar-dasar Servlet</h2>
<p>
    <strong>Servlet</strong> adalah sebuah API dalam pemrograman Java (berada di dalam package <code>javax.servlet</code>) yang dibuat oleh Sun Microsystems untuk mempermudah developer menghasilkan konten web dinamis (umumnya HTML maupun XML) pada server berbasis Java, sebagai pesaing teknologi seperti PHP, CGI, dan ASP.NET.
</p>

<h3>1. Daur Hidup (Lifecycle) Servlet</h3>
<p>
    Di dalam Web Server, Servlet berinteraksi dengan <strong>Web Container</strong> yang mengatur pemetaan URL dan 4 tahapan daur hidup Servlet:
</p>
<ol>
    <li><strong>Loading & Instantiation:</strong> Saat server startup, class Servlet dimuat (<em>load</em>) ke dalam Web Container.</li>
    <li><strong>Inisialisasi (<code>init()</code>):</strong> Dipanggil <strong>hanya sekali</strong> oleh Web Container untuk menginisialisasi Servlet sebelum dapat melayani request.</li>
    <li><strong>Layanan Request (<code>service()</code>):</strong> Setiap request client ditangani oleh <em>thread</em> terpisah. Method <code>service()</code> menentukan jenis HTTP request (GET, POST, PUT, dll.) lalu meneruskannya ke method penanganan yang sesuai (<code>doGet()</code> / <code>doPost()</code>).</li>
    <li><strong>Penghancuran (<code>destroy()</code>):</strong> Dipanggil <strong>hanya sekali</strong> ketika Servlet dihentikan dan tidak lagi melayani request.</li>
</ol>
<p>
    <em>Catatan:</em> Dalam satu aplikasi hanya terdapat satu <code>ServletContext</code> yang dipakai bersama oleh semua Servlet, sedangkan masing-masing Servlet memiliki <code>ServletConfig</code> sendiri untuk parameter inisialisasinya.
</p>

<h3>2. Gambaran Arsitektur Servlet (Pola MVC)</h3>
<p>Dalam pengembangan web berbasis Java (JSP & Servlet), terdapat dua model implementasi arsitektur <strong>MVC (Model-View-Controller)</strong>:</p>
<ul>
    <li>
        <strong>Page-centric Architecture (Model 1):</strong> Tidak ada pemisahan antara View dan Controller karena keduanya ditangani langsung oleh file <strong>JSP</strong> yang sama, sementara <strong>JavaBean</strong> bertindak sebagai Model (mirip alur pengembangan PHP tradisional).
    </li>
    <li>
        <strong>Servlet-centric Architecture (Model 2):</strong> <strong>Servlet</strong> bertindak murni sebagai <em>Controller</em> yang menerima request browser dan memproses <em>Model</em> (JavaBean/Database), lalu meneruskan hasilnya ke file <strong>JSP</strong> yang hanya bertugas sebagai <em>View</em> (tampilan).
    </li>
</ul>

<h3>3. Method Penting pada <code>HttpServletRequest</code></h3>
<p>Objek <code>HttpServletRequest</code> menyediakan akses ke seluruh informasi yang dikirimkan oleh client ke server:</p>

<table>
    <thead>
        <tr>
            <th style="width: 32%;">Nama Method</th>
            <th>Fungsi / Kegunaan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>getMethod()</code></td>
            <td>Mengambil jenis method HTTP yang digunakan client (<code>GET</code>, <code>POST</code>, <code>PUT</code>, dll).</td>
        </tr>
        <tr>
            <td><code>getRequestURI()</code></td>
            <td>Mengambil bagian URL mulai setelah <code>host:port/</code> hingga sebelum tanda parameter query.</td>
        </tr>
        <tr>
            <td><code>getRequestURL()</code></td>
            <td>Mengambil alamat URL lengkap yang diakses oleh client.</td>
        </tr>
        <tr>
            <td><code>getProtocol()</code></td>
            <td>Mengambil nama dan versi protokol yang digunakan (misal: <code>HTTP/1.1</code>).</td>
        </tr>
        <tr>
            <td><code>getRemoteAddr()</code> & <code>getRemotePort()</code></td>
            <td>Mengambil alamat IP serta nomor port milik client yang melakukan request.</td>
        </tr>
        <tr>
            <td><code>getServerName()</code> & <code>getServerPort()</code></td>
            <td>Mengambil nama host serta nomor port milik server.</td>
        </tr>
        <tr>
            <td><code>getServletPath()</code></td>
            <td>Mengambil path URL yang memanggil Servlet, diawali karakter <code>/</code>.</td>
        </tr>
        <tr>
            <td><code>getContentType()</code></td>
            <td>Mengambil tipe MIME (<em>Multipurpose Internet Mail Extension</em>) dari body request.</td>
        </tr>
        <tr>
            <td><code>getHeader()</code> & <code>getHeaderNames()</code></td>
            <td>Mengambil nilai dari suatu HTTP header tertentu atau daftar seluruh nama header.</td>
        </tr>
        <tr>
            <td><code>getParameter()</code></td>
            <td>Mengambil nilai parameter tunggal yang dikirimkan client dari form/URL.</td>
        </tr>
        <tr>
            <td><code>getParameterNames()</code></td>
            <td>Mengambil seluruh nama parameter yang dikirimkan client.</td>
        </tr>
        <tr>
            <td><code>getParameterValues()</code></td>
            <td>Mengambil kumpulan nilai (Array) untuk parameter <em>multiple-value</em> seperti komponen <strong>checkbox</strong>.</td>
        </tr>
    </tbody>
</table>

<h3>4. Method Penting pada <code>HttpServletResponse</code></h3>
<p>Objek <code>HttpServletResponse</code> digunakan oleh developer untuk menyusun dan mengirimkan kembali respon dari server ke client:</p>

<table>
    <thead>
        <tr>
            <th style="width: 32%;">Nama Method</th>
            <th>Fungsi / Kegunaan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>encodeRedirectURL()</code></td>
            <td>Mengkodekan URL untuk digunakan pada metode <code>sendRedirect()</code> agar session ID tetap terjaga.</td>
        </tr>
        <tr>
            <td><code>containsHeader()</code></td>
            <td>Mengembalikan nilai <code>boolean</code> untuk mengecek apakah nama response header tertentu sudah di-set.</td>
        </tr>
        <tr>
            <td><code>isCommitted()</code></td>
            <td>Mengembalikan nilai <code>boolean</code> yang menandakan apakah response sudah dikirim (<em>committed</em>) ke client.</td>
        </tr>
        <tr>
            <td><code>addCookie()</code></td>
            <td>Menambahkan objek <code>Cookie</code> ke dalam HTTP response.</td>
        </tr>
        <tr>
            <td><code>addDateHeader()</code></td>
            <td>Menambahkan response header dengan nama dan nilai format tanggal tertentu.</td>
        </tr>
        <tr>
            <td><code>reset()</code></td>
            <td>Membersihkan seluruh data di dalam buffer, termasuk HTTP status code dan headers.</td>
        </tr>
        <tr>
            <td><code>resetBuffer()</code></td>
            <td>Membersihkan isi konten di dalam buffer saja tanpa menghapus status code dan header.</td>
        </tr>
        <tr>
            <td><code>sendError()</code></td>
            <td>Mengirimkan halaman/kode error response ke client (misal kode <code>404</code> atau <code>500</code>).</td>
        </tr>
    </tbody>
</table>

<h3>5. Contoh Implementasi Kode Java Servlet</h3>
<p>Berikut adalah contoh kode <code>HaloServlet.java</code> yang menerapkan siklus hidup <code>init()</code>, <code>doGet()</code>, <code>destroy()</code>, serta penggunaan <code>HttpServletRequest</code> dan <code>HttpServletResponse</code>:</p>

<div class="code-wrapper">
    <div class="code-toolbar">
        <div class="code-dots"><span></span><span></span><span></span></div>
        <span style="font-size: 0.78rem; color: #a1a1aa;">HaloServlet.java</span>
    </div>
<pre class="code-box"><span class="php-tag">import</span> java.io.*;
<span class="php-tag">import</span> javax.servlet.*;
<span class="php-tag">import</span> javax.servlet.http.*;

<span class="php-tag">public class</span> <span class="func">HaloServlet</span> <span class="php-tag">extends</span> HttpServlet {

    <span class="comm">// 1. Dipanggil sekali saat Servlet pertama kali dimuat</span>
    <span class="php-tag">public void</span> <span class="func">init</span>() <span class="php-tag">throws</span> ServletException {
        System.out.println(<span class="str">"Servlet berhasil diinisialisasi!"</span>);
    }

    <span class="comm">// 2. Menangani HTTP GET Request dari client</span>
    <span class="php-tag">protected void</span> <span class="func">doGet</span>(HttpServletRequest <span class="var">request</span>, HttpServletResponse <span class="var">response</span>)
            <span class="php-tag">throws</span> ServletException, IOException {

        <span class="var">response</span>.setContentType(<span class="str">"text/html;charset=UTF-8"</span>);
        PrintWriter <span class="var">out</span> = <span class="var">response</span>.getWriter();

        <span class="comm">// Mengambil parameter & info request client</span>
        String <span class="var">nama</span> = <span class="var">request</span>.getParameter(<span class="str">"nama"</span>);
        String <span class="var">method</span> = <span class="var">request</span>.getMethod();
        String <span class="var">ipClient</span> = <span class="var">request</span>.getRemoteAddr();

        <span class="var">out</span>.println(<span class="str">"<h3>Halo, "</span> + (<span class="var">nama</span> != <span class="php-tag">null</span> ? <span class="var">nama</span> : <span class="str">"Mahasiswa"</span>) + <span class="str">"!</h3>"</span>);
        <span class="var">out</span>.println(<span class="str">"<p>HTTP Method: "</span> + <span class="var">method</span> + <span class="str">" | IP Client: "</span> + <span class="var">ipClient</span> + <span class="str">"</p>"</span>);
    }

    <span class="comm">// 3. Dipanggil sekali saat Servlet dihentikan</span>
    <span class="php-tag">public void</span> <span class="func">destroy</span>() {
        System.out.println(<span class="str">"Servlet dihentikan."</span>);
    }
}</pre>
</div>

<h3>6. Simulasi Interaktif <code>HttpServletRequest</code> & <code>HttpServletResponse</code></h3>
<div class="result-box">
    <p style="margin-bottom: 12px;">Uji coba simulasi bagaimana Servlet membaca parameter <code>getParameter()</code> & <code>getParameterValues()</code> serta membentuk output response:</p>
    
    <div style="display: flex; flex-direction: column; gap: 10px; max-width: 450px;">
        <div>
            <label for="simNama" style="font-size: 0.85rem; font-weight: 600;">Parameter <code>nama</code>:</label>
            <input type="text" id="simNama" value="Irwansyah Hidayat" placeholder="Masukkan nama...">
        </div>

        <div>
            <label style="font-size: 0.85rem; font-weight: 600; display: block; margin-bottom: 6px;">Parameter Multiple-Value <code>hobi[]</code> (<code>getParameterValues</code>):</label>
            <label style="margin-right: 12px; font-size: 0.88rem;"><input type="checkbox" name="simHobi" value="Coding Java" checked> Coding Java</label>
            <label style="margin-right: 12px; font-size: 0.88rem;"><input type="checkbox" name="simHobi" value="Web Design" checked> Web Design</label>
            <label style="font-size: 0.88rem;"><input type="checkbox" name="simHobi" value="Database"> Database</label>
        </div>

        <div>
            <button type="button" onclick="jalankanSimulasiServlet()">Kirim Request ke Servlet</button>
        </div>
    </div>

    <div id="outputServlet" style="margin-top: 16px; padding: 14px; border-radius: 8px; border: 1px dashed #6366f1; display: none;"></div>
</div>

<script>
function jalankanSimulasiServlet() {
    const nama = document.getElementById('simNama').value || 'Tamu';
    const checkboxes = document.querySelectorAll('input[name="simHobi"]:checked');
    const hobiList = Array.from(checkboxes).map(cb => cb.value);

    const outBox = document.getElementById('outputServlet');
    outBox.style.display = 'block';
    outBox.innerHTML = `
        <p style="margin-bottom: 6px;"><strong>Response dari <code>HaloServlet</code> (Status 200 OK):</strong></p>
        <ul style="margin-left: 18px; margin-bottom: 0; font-size: 0.88rem;">
            <li><code>request.getMethod()</code> : <strong>GET</strong></li>
            <li><code>request.getServletPath()</code> : <strong>/HaloServlet</strong></li>
            <li><code>request.getProtocol()</code> : <strong>HTTP/1.1</strong></li>
            <li><code>request.getParameter("nama")</code> : <strong>${nama}</strong></li>
            <li><code>request.getParameterValues("hobi")</code> : <strong>[${hobiList.length > 0 ? hobiList.join(', ') : 'Tidak ada yang dipilih'}]</strong></li>
        </ul>
    `;
}
</script>