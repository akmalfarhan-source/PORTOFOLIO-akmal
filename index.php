<?php
// Validasi Form menggunakan PHP sesuai permintaan (empty, filter_var email)
$success_msg = "";
$error_msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form dan membersihkan karakter yang tidak diinginkan
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    // Validasi input tidak boleh kosong
    if (empty($name) || empty($email) || empty($message)) {
        $error_msg = "Semua kolom (Nama, Email, Pesan) wajib diisi!";
    }
    // Validasi format email menggunakan filter_var
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "Format email tidak valid!";
    } else {
        // Jika validasi sukses, tampilkan pesan sukses (Simulasi untuk presentasi)
        // Note: Ini diaktifkan karena submission diarahkan ke halaman yang sama (action="").
        $success_msg = "Terima kasih $name, pesan Anda telah berhasil dikirim!";
        // Reset form setelah sukses
        $name = $email = $message = "";
    }
}
?>
<?php include 'includes/header.php'; ?>

<!-- MAIN CONTENT -->
<main>
    <!-- SECTION 1: HERO -->
    <section id="hero" class="hero">
        <div class="container hero-container animate">
            <!-- Teks Hero -->
            <div class="hero-text">
                <p class="greeting">Hello, I'm</p>
                <h1>Akmal Farhan <span>Hidayat</span></h1>
                <p class="tagline">Aspiring Data Scientist | IT Student at UNSIQ · Interested in Data Science, UI/UX &
                    Web Development | DBS Foundation Coding Camp Participant</p>

                <!-- Tombol CTA -->
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Hubungi Saya <i class="fas fa-arrow-right"></i></a>
                    <a href="assets/cv/CV Akmal Farhan Hidayat.pdf" download class="btn btn-outline">Unduh CV <i
                            class="fas fa-download"></i></a>
                </div>

                <!-- Ikon Sosial Media -->
                <div class="social-icons">
                    <a href="https://github.com/akmalfarhan-source" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/akmalfarhan-339959352" target="_blank"><i
                            class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com/akmalf_co" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="mailto:farhanakmal500@gmail.com"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <!-- Gambar / Foto Profil Hero -->
            <div class="hero-image">
                <div class="ring"></div>
                <img src="assets/img/Akmal Farhan Hidayat .png" alt="Akmal Farhan Hidayat">
            </div>
        </div>
    </section>

    <!-- SECTION 2: ABOUT -->
    <section id="about" class="about section-padding bg-darker">
        <div class="container animate">
            <h2 class="section-title">Tentang <span>Saya</span></h2>
            <div class="about-grid">
                <!-- Deskripsi dan Info Kontak Detail -->
                <div class="about-desc">
                    <p>Saya adalah seorang mahasiswa program studi Teknik Informatika di UNSIQ yang memiliki
                        ketertarikan tinggi pada bidang Data Science dan UI/UX Design. Saya selalu antusias
                        mempelajari teknologi baru dan mengimplementasikannya dalam berbagai proyek nyata.</p>

                    <div class="address-card">
                        <h3><i class="fas fa-map-marker-alt"></i> Alamat & Lokasi</h3>
                        <p><strong>Lokasi:</strong> Wonosobo, Jawa Tengah</p>
                        <p><strong>Alamat Lengkap:</strong> Pandansari, Mudal, Mojotengah, Wonosobo, Jawa Tengah</p>
                    </div>
                </div>

                <!-- Timeline Pendidikan Vertikal -->
                <div class="about-timeline">
                    <h3>Riwayat Pendidikan</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="dot"></div>
                            <h4> Universitas Sains Al-Qur'an</h4>
                            <span class="date">Sep 2024 – Sekarang</span>
                            <p>S1 Teknik Informatika</p>
                        </div>
                        <div class="timeline-item">
                            <div class="dot"></div>
                            <h4>DBS Foundation Coding Camp</h4>
                            <span class="date">Feb 2026 - Sekarang</span>
                            <p>Learning Path: Data Scientist</p>
                        </div>
                        <div class="timeline-item">
                            <div class="dot"></div>
                            <h4>MAN 1 Wonosobo</h4>
                            <span class="date">2021 – 2024</span>
                            <p>Jurusan: IPA</p>
                        </div>
                        <div class="timeline-item">
                            <div class="dot"></div>
                            <h4>SMP Al-Madina Wonosobo</h4>
                            <span class="date">2018 – 2021</span>
                        </div>
                        <div class="timeline-item">
                            <div class="dot"></div>
                            <h4>SD Al-Madina Wonosobo</h4>
                            <span class="date">2012 – 2018</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: SKILLS -->
    <section id="skills" class="skills section-padding">
        <div class="container animate">
            <h2 class="section-title">Skills <span>& Tools</span></h2>
            <div class="skills-grid">
                <div class="skill-card"><i class="fas fa-comments"></i> <span>Communication</span></div>
                <div class="skill-card"><i class="fas fa-people-carry"></i> <span>Teamwork</span></div>
                <div class="skill-card"><i class="fas fa-clock"></i> <span>Time manajemen</span></div>
                <div class="skill-card"><i class="fas fa-brain"></i> <span>Problem Solving</span></div>
                <div class="skill-card"><i class="fas fa-camera"></i> <span>Photography</span></div>
                <div class="skill-card"><i class="fas fa-pen"></i> <span>Graphic Design</span></div>
                <div class="skill-card"><i class="fas fa-bezier-curve"></i> <span>UI/UX</span></div>
                <div class="skill-card"><i class="fas fa-microsoft"></i> <span>Microsoft Office</span></div>
                <div class="skill-card"><i class="fab fa-python"></i> <span>Python</span></div>
                <div class="skill-card"><i class="fab fa-php"></i> <span>PHP</span></div>
                <div class="skill-card"><i class="fab fa-html5"></i> <span>HTML/CSS</span></div>
                <div class="skill-card"><i class="fab fa-figma"></i> <span>Figma</span></div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: HOBI -->
    <section id="hobbies" class="hobbies section-padding bg-darker">
        <div class="container animate">
            <h2 class="section-title">Hobbies <span>& Interests</span></h2>
            <div class="hobbies-grid">
                <div class="hobby-card"><i class="fas fa-globe"></i>
                    <h3>Traveling</h3>
                </div>
                <div class="hobby-card"><i class="fas fa-mountain"></i>
                    <h3>Hiking</h3>
                </div>
                <div class="hobby-card"><i class="fas fa-gamepad"></i>
                    <h3>Gaming</h3>
                </div>
                <div class="hobby-card"><i class="fas fa-running"></i>
                    <h3>Sport</h3>
                </div>
                <div class="hobby-card"><i class="fas fa-music"></i>
                    <h3>Music</h3>
                </div>
                <div class="hobby-card"><i class="fas fa-hands-helping"></i>
                    <h3>Social</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: SERTIFIKAT -->
    <section id="certificates" class="certificates section-padding">
        <div class="container animate">
            <h2 class="section-title">Certificates <span>Achievement</span></h2>
            <div class="cert-grid">
                <!-- Data sertifikat dari Dicoding & DBS Foundation -->
                <div class="cert-card">
                    <i class="fas fa-award cert-icon"></i>
                    <h3>Belajar Dasar Data Science</h3>
                    <p>Dicoding & DBS Foundation</p>
                </div>
                <div class="cert-card">
                    <i class="fas fa-award cert-icon"></i>
                    <h3>Memulai Pemrograman dengan Python</h3>
                    <p>Dicoding & DBS Foundation</p>
                </div>
                <div class="cert-card">
                    <i class="fas fa-award cert-icon"></i>
                    <h3>Belajar Machine Learning untuk Pemula</h3>
                    <p>Dicoding & DBS Foundation</p>
                </div>
                <div class="cert-card">
                    <i class="fas fa-award cert-icon"></i>
                    <h3>Data Science Fundamental</h3>
                    <p>Dicoding & DBS Foundation</p>
                </div>
                <div class="cert-card">
                    <i class="fas fa-award cert-icon"></i>
                    <h3>Python for Data Analysis</h3>
                    <p>Dicoding & DBS Foundation</p>
                </div>
                <div class="cert-card">
                    <i class="fas fa-award cert-icon"></i>
                    <h3>Applied Machine Learning</h3>
                    <p>Dicoding & DBS Foundation</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: ORGANISASI -->
    <section id="organization" class="organization section-padding bg-darker">
        <div class="container animate">
            <h2 class="section-title">Experience <span>Organization</span></h2>
            <!-- Timeline Organisasi (Centered) -->
            <div class="timeline center-timeline">
                <div class="timeline-item">
                    <div class="dot"></div>
                    <h4>HIMTI UNSIQ</h4>
                    <p>Staff Departemen PSDM</p>
                </div>
                <div class="timeline-item">
                    <div class="dot"></div>
                    <h4>Racana Jogonegoro UNSIQ</h4>
                    <p>Koordinator Bina Sosial</p>
                </div>
                <div class="timeline-item">
                    <div class="dot"></div>
                    <h4>Saka Adhyasta Pemilu Bawaslu</h4>
                    <p>Anggota Aktif - Pengawasan Pemilu</p>
                </div>
                <div class="timeline-item">
                    <div class="dot"></div>
                    <h4>IPNU-IPPNU Dusun Pandansari</h4>
                    <p>Anggota Aktif</p>
                </div>
                <div class="timeline-item">
                    <div class="dot"></div>
                    <h4>Karang Taruna</h4>
                    <p>Anggota Aktif</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7: PROYEK -->
    <section id="projects" class="projects section-padding">
        <div class="container animate">
            <h2 class="section-title">My <span>Projects</span></h2>
            <div class="projects-grid">
                <!-- Kartu Proyek 1 -->
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=500&q=80"
                            alt="Dashboard Bike Sharing">
                    </div>
                    <div class="project-info">
                        <h3>Dashboard Bike Sharing</h3>
                        <p>Dashboard analisis data peminjaman sepeda interaktif Streamlit untuk
                            visualisasi tren dan pola penggunaan.</p>
                        <div class="tech-tags">
                            <span>Python</span>
                            <span>Pandas</span>
                            <span>Streamlit</span>
                        </div>
                        <a href="https://github.com/akmalfarhan-source/Dashboard-Bike-Sharing"
                            class="btn btn-outline small-btn" target="_blank"><i class="fab fa-github"></i> View
                            Code</a>
                    </div>
                </div>

                <!-- Kartu Proyek 2 -->
                <div class="project-card">
                    <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?auto=format&fit=crop&w=500&q=80"
                            alt="Proyek Web App">
                    </div>
                    <div class="project-info">
                        <h3>Sistem Manajemen UMKM</h3>
                        <p>Aplikasi web untuk mengelola data dan registrasi UMKM lokal dengan sistem otentikasi.</p>
                        <div class="tech-tags">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>HTML/CSS</span>
                        </div>
                        <a href="https://github.com/akmalfarhan-source/UMKM.git" class="btn btn-outline small-btn"
                            target="_blank"><i class="fab fa-github"></i> View Code</a>
                    </div>
                </div>

                <!-- Kartu Proyek 3 -->
                <div class="project-card">
                     <div class="project-img">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=500&q=80"
                            alt="Smartspend">
                    </div>
                    <div class="project-info">
                        <h3>SMARTSPEND</h3>
                        <p>Aplikasi manajemen keuangan pribadi untuk mencatat, melacak, dan menganalisis pengeluaran secara cerdas.</p>
                        <div class="tech-tags">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>HTML/CSS</span>
                        </div>
                        <a href="https://github.com/Masfikar92/Smartspend" class="btn btn-outline small-btn"
                            target="_blank"><i class="fab fa-github"></i> View Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: KONTAK -->
    <section id="contact" class="contact section-padding bg-darker">
        <div class="container animate">
            <h2 class="section-title">Contact <span>Me</span></h2>
            <div class="contact-grid">

                <!-- Info Kontak Kiri -->
                <div class="contact-info">
                    <h3>Mari Terhubung!</h3>
                    <p>Apakah Anda memiliki pertanyaan, atau sekadar ingin menyapa? Jangan ragu untuk
                        menghubungi saya melalui detail di bawah ini.</p>
                    <ul>
                        <li><i class="fas fa-envelope"></i> farhanakmal500@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> Wonosobo, Jawa Tengah</li>
                        <li><i class="fab fa-linkedin"></i> <a href="https://linkedin.com/in/akmalfarhan-339959352"
                                target="_blank">LinkedIn</a></li>
                        <li><i class="fab fa-github"></i> <a href="https://github.com/akmalfarhan-source"
                                target="_blank">GitHub</a></li>
                        <li><i class="fab fa-instagram"></i> <a href="https://instagram.com/akmalf_co"
                                target="_blank">@akmalf_co</a></li>
                    </ul>
                </div>

                <!-- Form Kanan Terintegrasi -->
                <div class="contact-form">
                    <!-- Tampilkan pesan sukses / error dari validasi PHP -->
                    <?php if (!empty($success_msg)): ?>
                        <div class="alert alert-success"><?php echo $success_msg; ?></div>
                    <?php endif; ?>

                    <?php if (!empty($error_msg)): ?>
                        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                    <?php endif; ?>
                    <form action=https://formspree.io/f/xqejewpn method="POST">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name"
                                value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" name="email"
                                value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan Anda</label>
                            <textarea id="message" name="message"
                                rows="5"><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Kirim Pesan <i
                                class="fas fa-paper-plane"></i></button>
                    </form>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>