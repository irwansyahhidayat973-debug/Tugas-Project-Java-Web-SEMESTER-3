// FUNGSI GLOBAL DARK MODE (Anti-Gagal via onclick)
function gantiTemaWeb() {
    document.body.classList.toggle("dark-mode");
    const isDark = document.body.classList.contains("dark-mode");
    localStorage.setItem("webTheme", isDark ? "dark" : "light");

    const themeBtn = document.getElementById("theme-toggle");
    if (themeBtn) {
        themeBtn.innerHTML = isDark ? "&#9728;&#65039; Light" : "&#127769; Dark";
    }
}

document.addEventListener("DOMContentLoaded", function () {
    // Sinkronkan label tombol Dark/Light Mode saat halaman pertama kali dibuka
    const themeBtn = document.getElementById("theme-toggle");
    if (themeBtn && document.body.classList.contains("dark-mode")) {
        themeBtn.innerHTML = "&#9728;&#65039; Light";
    }

    // 1. FITUR PEMBERSIH: Hapus sisa teks referensi yang ikut ter-paste di halaman
    const mainArea = document.querySelector(".container") || document.body;
    if (mainArea) {
        const walker = document.createTreeWalker(mainArea, NodeFilter.SHOW_TEXT, null, false);
        let node;
        while ((node = walker.nextNode())) {
            if (/\[cite:\s*[\d,\s]+\]/.test(node.nodeValue)) {
                node.nodeValue = node.nodeValue.replace(/\[cite:\s*[\d,\s]+\]/g, "");
            }
        }
    }

    // 2. FITUR BAWAAN: Menampilkan Tanggal Otomatis pada elemen #js-date
    const dateBox = document.getElementById("js-date");
    if (dateBox) {
        let d = new Date();
        let weekday = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        let monthname = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt", "Sep", "Okt", "Nov", "Des"];

        dateBox.innerHTML = `📅 <strong>${weekday[d.getDay()]}</strong>, ${d.getDate()} ${monthname[d.getMonth()]} ${d.getFullYear()}`;
    }

    // 3. FITUR BARU: Window Bar macOS & Tombol "Salin Kode" di Setiap Blok Kode (.code-box dan <pre>)
    const codeBlocks = document.querySelectorAll(".code-box, pre");
    codeBlocks.forEach((block) => {
        if (block.parentElement && block.parentElement.classList.contains("code-wrapper")) return;

        const wrapper = document.createElement("div");
        wrapper.className = "code-wrapper";

        const toolbar = document.createElement("div");
        toolbar.className = "code-toolbar";
        toolbar.innerHTML = `
            <div class="code-dots"><span></span><span></span><span></span></div>
            <button type="button" class="copy-code-btn">Salin Kode</button>
        `;

        block.parentNode.insertBefore(wrapper, block);
        wrapper.appendChild(toolbar);
        wrapper.appendChild(block);

        const copyBtn = toolbar.querySelector(".copy-code-btn");
        copyBtn.addEventListener("click", () => {
            const codeText = block.innerText.trim();
            navigator.clipboard.writeText(codeText).then(() => {
                copyBtn.innerText = "✓ Tersalin";
                copyBtn.style.setProperty("background", "#16a34a", "important");
                copyBtn.style.setProperty("border-color", "#15803d", "important");

                setTimeout(() => {
                    copyBtn.innerText = "Salin Kode";
                    copyBtn.style.removeProperty("background");
                    copyBtn.style.removeProperty("border-color");
                }, 2000);
            });
        });
    });

    // 4. FITUR BARU: Tombol Mengambang "Kembali ke Atas" (Back to Top)
    const backToTopBtn = document.createElement("button");
    backToTopBtn.type = "button";
    backToTopBtn.innerHTML = "↑";
    backToTopBtn.title = "Kembali ke Atas";
    backToTopBtn.style.cssText = `
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 44px;
        height: 44px;
        padding: 0;
        border-radius: 50%;
        font-size: 1.2rem;
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 999;
    `;
    document.body.appendChild(backToTopBtn);

    window.addEventListener("scroll", () => {
        if (window.scrollY > 250) {
            backToTopBtn.style.display = "flex";
        } else {
            backToTopBtn.style.display = "none";
        }
    });

    backToTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});

// ==========================================
// FUNGSI BAWAAN DARI MATERI PERTEMUAN 8 & 11
// ==========================================
function popupMessage(msg) {
    alert(msg);
}

function interactivePrompt() {
    let name = prompt("Masukkan nama Anda:");
    if (name) {
        let confirmAnswer = confirm(`Hai ${name}! Apakah tampilan web ini menarik?`);
        if (confirmAnswer) {
            alert("Terima kasih!");
        } else {
            alert("Terima kasih atas masukannya!");
        }
    }
}