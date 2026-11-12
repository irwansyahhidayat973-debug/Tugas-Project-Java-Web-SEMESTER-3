<div class="container">
    <h2>PERTEMUAN 15: Kejadian (Event Handling) pada JavaScript</h2>
    <p><strong>Event</strong> adalah aksi atau kejadian pada elemen HTML (seperti klik tombol, perpindahan fokus input, atau gerakan kursor) yang memicu eksekusi fungsi JavaScript secara interaktif[cite: 103].</p>

    <h3>15.1 Daftar Kejadian (Event) Utama JavaScript</h3>
    <table>
        <thead>
            <tr>
                <th>Event</th>
                <th>Pemicu Kejadian</th>
                <th>Event</th>
                <th>Pemicu Kejadian</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><code>onClick</code></td><td>Klik pada tombol, elemen form, atau link</td><td><code>onLoad</code></td><td>Browser selesai memuat dokumen</td></tr>
            <tr><td><code>onChange</code></td><td>Perubahan nilai pada input/select/textarea</td><td><code>onUnload</code></td><td>Pengguna meninggalkan halaman</td></tr>
            <tr><td><code>onFocus</code></td><td>Elemen menerima fokus kursor/Tab</td><td><code>onMouseOver</code></td><td>Kursor mouse masuk ke area elemen</td></tr>
            <tr><td><code>onBlur</code></td><td>Elemen kehilangan fokus masukan</td><td><code>onMouseOut</code></td><td>Kursor mouse keluar dari area elemen</td></tr>
            <tr><td><code>onSubmit</code></td><td>Tombol submit form ditekan</td><td><code>onReset</code></td><td>Tombol reset form ditekan</td></tr>
        </tbody>
    </table>

    <h3>15.2 Demo Interaktif 4 Latihan Event Handling:</h3>
    <div class="result-box">
        <div id="box-event-warna" style="background: #ffffff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px; margin-bottom: 15px; transition: background 0.3s;">
            <p><strong>1. Latihan Event <code>onClick</code> (Pilih Warna Latar &amp; Kipas Angin):</strong></p>
            <div style="display: flex; flex-wrap: wrap; gap: 8px; margin: 10px 0;">
                <button type="button" class="btn" onclick="ubahWarnaBox15('lightblue')">Biru</button>
                <button type="button" class="btn" onclick="ubahWarnaBox15('pink')">Pink</button>
                <button type="button" class="btn" onclick="ubahWarnaBox15('burlywood')">Coklat</button>
                <button type="button" class="btn" onclick="ubahWarnaBox15('darkgray')">Kelabu</button>
                <button type="button" class="btn" onclick="ubahWarnaBox15('peachpuff')">Oranye</button>
                <button type="button" class="btn" onclick="ubahWarnaBox15('white')">Putih</button>
            </div>
            <div style="margin-top: 10px;">
                <span id="kipas-status" style="display: inline-block; padding: 8px 14px; background: #e2e8f0; border-radius: 6px; font-weight: bold;">Kipas Angin: OFF</span>
                <button type="button" class="btn" style="margin-left: 8px;" onclick="setKipas15(false)">Off</button>
                <button type="button" class="btn" style="background: #16a34a;" onclick="setKipas15(true)">On</button>
            </div>
        </div>

        <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px; margin-bottom: 15px;">
            <p><strong>2. Latihan Event <code>onFocus</code> &amp; <code>onBlur</code> (Validasi Form Registrasi):</strong></p>
            <small id="status-fokus15" style="color: #0284c7; font-weight: bold;">Klik kolom input untuk melihat pesan onFocus...</small>
            <form name="freg15" style="margin-top: 8px;">
                <input type="text" name="inim" placeholder="NIM" style="max-width: 150px;"
                       onfocus="document.getElementById('status-fokus15').innerText='Silahkan Mengisi NIM Anda';"
                       onblur="if(this.value==='') document.getElementById('status-fokus15').innerText='Peringatan (onBlur): Anda belum memasukkan NIM!';">
                <input type="text" name="inama" placeholder="Nama Lengkap" style="max-width: 220px; margin-left: 6px;"
                       onfocus="document.getElementById('status-fokus15').innerText='Silahkan Mengisi Nama Anda';"
                       onblur="if(this.value==='') document.getElementById('status-fokus15').innerText='Peringatan (onBlur): Anda belum memasukkan Nama!';">
                <input type="text" name="ialamat" placeholder="Alamat" style="max-width: 240px; margin-left: 6px;"
                       onfocus="document.getElementById('status-fokus15').innerText='Silahkan Mengisi Alamat Anda';"
                       onblur="if(this.value==='') document.getElementById('status-fokus15').innerText='Peringatan (onBlur): Anda belum memasukkan Alamat!';">
                <button type="button" class="btn" style="margin-left: 6px;" onclick="validasiReg15()">Kirim</button>
            </form>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px;">
            <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>3. Jam Digital Real-Time (<code>setTimeout</code>):</strong>
                <p id="jam-digital15" style="font-size: 1.4rem; font-weight: bold; color: #4f46e5; margin-top: 8px;">00 : 00 : 00</p>
            </div>
            <div style="background: #fff; padding: 15px; border: 1px solid #cbd5e1; border-radius: 8px;">
                <strong>4. Event <code>onMouseOver</code> &amp; <code>onMouseOut</code>:</strong>
                <p style="margin-top: 8px;">
                    <span id="hover-box15"
                          onmouseover="this.style.background='#ffcc00'; this.innerText='Motto: Gemah Ripah Repeh Rapih (MouseOver)';"
                          onmouseout="this.style.background='#eef2ff'; this.innerText='Arahkan kursor mouse ke kotak ini!';"
                          style="display: block; padding: 10px; background: #eef2ff; border: 1px solid #6366f1; border-radius: 6px; cursor: pointer; text-align: center;">
                        Arahkan kursor mouse ke kotak ini!
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function ubahWarnaBox15(warna) {
        document.getElementById("box-event-warna").style.backgroundColor = warna;
    }

    function setKipas15(nyala) {
        var el = document.getElementById("kipas-status");
        if (nyala) {
            el.innerText = "Kipas Angin: ON (Berputar)";
            el.style.background = "#bbf7d0";
            el.style.color = "#166534";
        } else {
            el.innerText = "Kipas Angin: OFF (Berhenti)";
            el.style.background = "#e2e8f0";
            el.style.color = "#1e293b";
        }
    }

    function validasiReg15() {
        var f = document.freg15;
        if (f.inim.value !== "" && f.inama.value !== "" && f.ialamat.value !== "") {
            alert("Terima Kasih Telah mengisi Data");
        } else {
            alert("Mohon Data Dilengkapi");
        }
    }

    (function timer15() {
        var el = document.getElementById("jam-digital15");
        if (!el) return;
        var d = new Date();
        var jam = (d.getHours() < 10 ? "0" : "") + d.getHours();
        var menit = (d.getMinutes() < 10 ? "0" : "") + d.getMinutes();
        var detik = (d.getSeconds() < 10 ? "0" : "") + d.getSeconds();
        el.innerText = jam + " : " + menit + " : " + detik;
        setTimeout(timer15, 1000);
    })();
</script>