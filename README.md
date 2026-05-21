# PORTOFOLIO-akmal

Website portofolio pribadi **Akmal Farhan Hidayat** yang dibuat sebagai tugas mata kuliah **Pemrograman Web** — S1 Teknik Informatika, Universitas Sains Al-Qur'an (UNSIQ).

---

## Tentang Pemilik

| Info | Detail |
|------|--------|
| **Nama** | Akmal Farhan Hidayat |
| **Prodi** | S1 Teknik Informatika — UNSIQ |
| **Email** | farhanakmal500@gmail.com |
| **GitHub** | [akmalfarhan-source](https://github.com/akmalfarhan-source) |
| **LinkedIn** | [akmalfarhan-339959352](https://linkedin.com/in/akmalfarhan-339959352) |
| **Instagram** | [@akmalf_co](https://instagram.com/akmalf_co) |
| **Alamat** | Pandansari, Mudal, Mojotengah, Wonosobo, Jawa Tengah |

---

## Teknologi yang Digunakan

| Teknologi | Kegunaan |
|-----------|----------|
| **PHP** | Validasi form kontak, include header/footer, echo tahun otomatis |
| **HTML** | Struktur dan konten semua section |
| **CSS** | Styling, layout responsif, CSS Variables |
| **JavaScript** | Hamburger menu mobile, animasi scroll, sticky navbar |
| **Font Awesome** | Ikon sosial media dan dekorasi |
| **Google Fonts** | Font Syne, DM Sans, JetBrains Mono |
| **Formspree** | Integrasi form kontak ke Gmail |

### Penjelasan Teknologi

**1. PHP**
PHP adalah bahasa pemrograman server yang digunakan untuk tiga hal utama:
- **Validasi form kontak** — mengecek apakah nama, email, dan pesan sudah diisi dengan benar sebelum dikirim
- **Include header/footer** — navbar dan footer cukup ditulis sekali lalu dipanggil dengan `include`
- **Echo tahun otomatis** — `<?php echo date("Y"); ?>` di footer agar tahun berubah sendiri tanpa diedit manual

**2. HTML**
HTML adalah kerangka atau tulang punggung website ini. Semua yang terlihat di website — teks, gambar, tombol, form — semuanya dibuat menggunakan tag-tag HTML.

**3. CSS**
CSS bertugas membuat website ini terlihat menarik:
- **CSS Variables** — warna utama disimpan di satu tempat (`:root`), cukup ubah di satu baris untuk ganti tema seluruh website
- **Animasi scroll** — efek section muncul perlahan saat di-scroll menggunakan CSS transition
- **Responsif** — tampilan otomatis menyesuaikan di HP maupun laptop menggunakan `@media query`

**4. JavaScript**
JavaScript menambahkan interaktivitas ke website:
- **Hamburger menu** — tombol tiga garis di HP, dikontrol dengan `classList.toggle`
- **Animasi scroll** — mendeteksi posisi scroll lalu menambahkan class CSS sehingga section muncul saat masuk layar
- **Sticky navbar** — navbar berubah tampilan saat halaman di-scroll ke bawah

**5. Font Awesome**
Font Awesome adalah library ikon gratis. Semua ikon di website seperti GitHub, LinkedIn, Instagram, envelope, download — semuanya dari Font Awesome. Cara pakainya cukup satu tag HTML, contoh: `<i class="fab fa-github"></i>` → langsung muncul ikon GitHub.

**6. Google Fonts**
Google Fonts menyediakan font tulisan yang lebih menarik dari font bawaan browser. Digunakan 3 font berbeda: **Syne** untuk judul, **DM Sans** untuk teks biasa, dan **JetBrains Mono** untuk teks kode/teknis. Font-font ini di-load dari server Google secara gratis hanya dengan satu link di `<head>`.

**7. Formspree**
Formspree adalah layanan gratis yang menghubungkan form kontak website ke Gmail.

---

## Struktur Folder

```
Portofolio/
├── index.php                           ← Halaman utama (semua section)
├── README.md                           ← Dokumentasi proyek
├── includes/
│   ├── header.php                      ← Navbar (di-include ke semua halaman)
│   └── footer.php                      ← Footer + JavaScript
└── assets/
    ├── css/
    │   └── style.css                   ← Semua styling (CSS Variables)
    ├── img/
    │   └── Akmal Farhan Hidayat.png    ← Foto profil
    └── cv/
        └── CV Akmal Farhan Hidayat.pdf ← File CV yang bisa diunduh
```

---

## Fitur Website

- ✅ **Hero Section** — foto profil, nama, tagline, tombol hubungi & unduh CV
- ✅ **Tentang Saya** — deskripsi diri, alamat lengkap, timeline pendidikan
- ✅ **Skills** — keahlian teknis (Hard skill dan Soft Skill)
- ✅ **Hobi** — minat dan kegiatan di luar coding
- ✅ **Sertifikat** — sertifikat pencapaian
- ✅ **Organisasi** — timeline pengalaman berorganisasi
- ✅ **Proyek** — kartu proyek dengan link GitHub
- ✅ **Kontak** — form dengan validasi PHP terintegrasi Formspree → Gmail
- ✅ **Unduh CV** — tombol download CV langsung dari website
- ✅ **Responsif** — tampilan menyesuaikan di HP maupun desktop
- ✅ **Animasi Scroll** — section muncul saat di-scroll
- ✅ **Dark Theme** — tampilan gelap 

---

## Konsep PHP yang Diterapkan

| Konsep | Penjelasan |
|--------|------------|
| `include` | Memuat `header.php` & `footer.php` tanpa duplikasi kode |
| `$_SERVER["REQUEST_METHOD"]` | Deteksi apakah form sudah di-submit |
| `$_POST` | Mengambil data yang dikirim dari form HTML |
| `trim()` | Menghapus spasi berlebih dari input user |
| `empty()` | Mengecek apakah field kosong |
| `filter_var()` | Validasi format email secara otomatis |
| `htmlspecialchars()` | Mencegah serangan XSS dari input user |
| `date("Y")` | Menampilkan tahun saat ini secara otomatis di footer |

---

## Proyek yang Ditampilkan

| Proyek | Teknologi | Link |
|--------|-----------|------|
| **Dashboard Bike Sharing** | Python, Pandas, Streamlit | [GitHub](https://github.com/akmalfarhan-source/Dashboard-Bike-Sharing) |
| **Sistem Manajemen UMKM** | PHP, MySQL, HTML/CSS | [GitHub](https://github.com/akmalfarhan-source/UMKM.git) |
| **Smartspend** | PHP, MySQL, HTML/CSS | [GitHub](https://github.com/Masfikar92/Smartspend) |

---

## Pengalaman Organisasi

- **Staff PSDM** — Himpunan Mahasiswa Teknik Informatika (HIMTI) UNSIQ · 2024–sekarang
- **Koordinator Bina Sosial** — UKK Racana Jogonegoro UNSIQ · 2024–sekarang
- **Anggota** — Saka Adhyasta Bawaslu · 2025–sekarang
- **Anggota Aktif** — Karang Taruna Wonosobo · 2024–sekarang

---

## Sertifikasi

- Memulai Dasar Pemrograman untuk Menjadi Pengembang Software — Dicoding
- Pengenalan ke Logika Pemrograman (Programming Logic 101) — Dicoding
- Merancang Percakapan Cerdas di Azure AI Foundry — Microsoft/Dicoding
- Belajar Machine Learning untuk Pemula — Dicoding
- Belajar Dasar Visualisasi Data — Dicoding

---

*Dibuat untuk memenuhi tugas Mata Kuliah Pemrograman Web — S1 Teknik Informatika*