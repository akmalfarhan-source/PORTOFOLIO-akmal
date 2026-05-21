    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; <?php echo date("Y"); ?> Akmal Farhan Hidayat. All Rights Reserved.</p>
            <div class="footer-socials">
                <a href="https://github.com/akmalfarhan-source" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/in/akmalfarhan-339959352" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://instagram.com/akmalf_co" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- JavaScript untuk interaksi mobile dan animasi -->
    <script>
        // Hamburger Menu Toggle untuk Mobile
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Sticky Navbar Effect & Scroll Animation (FadeInUp staggered effect)
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Animasi saat elemen masuk viewport
            const animates = document.querySelectorAll('.animate');
            animates.forEach(el => {
                const rect = el.getBoundingClientRect();
                if(rect.top < window.innerHeight - 100) {
                    el.classList.add('show');
                }
            });
        });
        
        // Trigger event scroll saat load pertama kali untuk animasi awal
        window.dispatchEvent(new Event('scroll'));

        // Tutup menu mobile ketika link di-klik
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });
    </script>
</body>
</html>
