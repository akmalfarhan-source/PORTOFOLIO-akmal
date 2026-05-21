# 🌐 PORTOFOLIO-akmal

Website portofolio pribadi **Akmal Farhan Hidayat** yang dibuat sebagai tugas mata kuliah **Pemrograman Web** — S1 Teknik Informatika, Universitas Sains Al-Qur'an (UNSIQ).

---

## 👤 Tentang Pemilik

| Info | Detail |
|------|--------|
| **Nama** | Akmal Farhan Hidayat |
| **Prodi** | S1 Teknik Informatika — UNSIQ |
| **Email** | farhanakmal500@gmail.com |
| **GitHub** | [akmalfarhan-source](https://github.com/akmalfarhan-source) |
| **LinkedIn** | [akmalfarhan-339959352](https://linkedin.com/in/akmalfarhan-339959352) |
| **Instagram** | [@akmalf_co](https://instagram.com/akmalf_co) |
| **Lokasi** | Pandansari, Mudal, Mojotengah, Wonosobo, Jawa Tengah |

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Kegunaan |
|-----------|----------|
| **PHP** | Validasi form kontak, include header/footer, echo tahun otomatis |
| **HTML5** | Struktur dan konten semua section |
| **CSS3** | Styling, animasi scroll, layout responsif, CSS Variables |
| **JavaScript** | Hamburger menu mobile, animasi scroll, sticky navbar |
| **Font Awesome** | Ikon sosial media dan dekorasi |
| **Google Fonts** | Font Syne, DM Sans, JetBrains Mono |
| **Formspree** | Integrasi form kontak ke Gmail |

---

## 📁 Struktur Folder

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

## 📄 Fitur Website

- ✅ **Hero Section** — foto profil, nama, tagline, tombol hubungi & unduh CV
- ✅ **Tentang Saya** — deskripsi diri, alamat lengkap, timeline pendidikan
- ✅ **Skills** — keahlian teknis (Data Science, Python, PHP, JS, dll)
- ✅ **Hobi** — minat dan kegiatan di luar coding
- ✅ **Sertifikat** — sertifikat dari Dicoding & DBS Foundation
- ✅ **Organisasi** — timeline pengalaman berorganisasi
- ✅ **Proyek** — kartu proyek dengan link GitHub & tech stack
- ✅ **Kontak** — form dengan validasi PHP terintegrasi Formspree → Gmail
- ✅ **Unduh CV** — tombol download CV langsung dari website
- ✅ **Responsif** — tampilan menyesuaikan di HP maupun desktop
- ✅ **Animasi Scroll** — section muncul saat di-scroll
- ✅ **Dark Theme** — tampilan gelap dengan aksen cyan dan hijau

---

## 📚 Konsep PHP yang Diterapkan

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

## 🚀 Cara Menjalankan

### Persyaratan
- [XAMPP](https://www.apachefriends.org) (Apache + PHP)

### Langkah-langkah

1. Clone repository ini
```bash
git clone https://github.com/akmalfarhan-source/PORTOFOLIO-akmal.git
```

2. Salin folder ke htdocs XAMPP
```
C:/xampp/htdocs/Portofolio/
```

3. Jalankan **Apache** di XAMPP Control Panel

4. Buka browser dan akses:
```
http://localhost/Portofolio/
```

---

## 🗂️ Proyek yang Ditampilkan

| Proyek | Teknologi | Link |
|--------|-----------|------|
| **Dashboard Bike Sharing** | Python, Pandas, Streamlit | [GitHub](https://github.com/akmalfarhan-source/Dashboard-Bike-Sharing) |
| **Sistem Manajemen UMKM** | PHP, MySQL, HTML/CSS | [GitHub](https://github.com/akmalfarhan-source/UMKM.git) |
| **Smartspend** | PHP, MySQL, HTML/CSS | [GitHub](https://github.com/Masfikar92/Smartspend) |

---

## 🏢 Pengalaman Organisasi

- **Staff PSDM** — Himpunan Mahasiswa Teknik Informatika (HIMTI) UNSIQ · 2024–sekarang
- **Koordinator Bina Sosial** — UKK Racana Jogonegoro UNSIQ · 2024–sekarang
- **Anggota** — Saka Adhyasta Bawaslu · 2025–sekarang
- **Anggota Aktif** — Karang Taruna Wonosobo · 2024–sekarang

---

## 🎓 Sertifikasi

- Memulai Dasar Pemrograman untuk Menjadi Pengembang Software — Dicoding
- Pengenalan ke Logika Pemrograman (Programming Logic 101) — Dicoding
- Merancang Percakapan Cerdas di Azure AI Foundry — Microsoft/Dicoding
- Belajar Machine Learning untuk Pemula — Dicoding
- Belajar Dasar Visualisasi Data — Dicoding
- DBS Foundation Coding Camp — Learning Path: Data Scientist

---

*Dibuat untuk memenuhi tugas Mata Kuliah Pemrograman Web — UNSIQ 2025/2026*