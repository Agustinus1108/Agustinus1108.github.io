<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Boost</title>
    <link rel="stylesheet" href="coba.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>

    <!-- BAGIAN NAVBAR -->
    <div class="container">
        <div class="navbar">
            <div class="logo"> SKILL BOOST </div>
            <ul class="nav-menu">
            <li><a href="coba.html">Home</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            </ul>
            <div class="nav-right">
            <div class="user-panel">
        <span class="user-icon">👤</span>
        <span class="username">Regita</span>
        <span class="separator">|</span>
        <a href="login.html" class="logout-link">Logout</a>
    </div>
</div>
            </div>
          </div> 
          </div>
          
          <!-- php username -->
          <?php
session_start();

// Inisialisasi variabel $username
$username = '';

// Cek apakah sesi 'username' ada
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>


          
          <!-- BAGIAN TAMPILAN -->
        <div class="header">
            <h1>Kembangkan Skill Bersama <span class="highlight">#SkillBoost.</span></h1>
            <h2>KEEP LEARN, BOOST YOUR SKILL</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

        <!-- BAGIAN BANNER -->
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="banner">
        <a href="signup.html">
        <img src="assets/images/banner_satu.png" alt="banner">
        </a>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="banner">
        <img src="assets/images/banner_dua.png" alt="banner">
      </div>
    </div>
    <div class="swiper-slide">
        <div class="banner">
          <img src="assets/images/banner_tiga.png" alt="banner">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="banner">
          <img src="assets/images/banner_empat.png" alt="banner">
        </div>
      </div>
  </div>
  <div class="swiper-pagination"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    // new code
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
  });
</script>
</div>

        <!-- BAGIAN KURSUS, SERTIF, MENTOR -->
        <div class="features">
            <div class="feature-item">
                <div class="icon">📚</div>
                <h3>50+ Kursus Online</h3>
                <p>Berbagai kursus skill yang menarik menggunakan video pembelajaran</p>
            </div>
            <div class="feature-item">
                <div class="icon">🏅</div>
                <h3>Bersertifikat</h3>
                <p>Mendapatkan sertifikat untuk menuju kejenjang selanjutnya</p>
            </div>
            <div class="feature-item">
                <div class="icon">👩‍🏫</div>
                <h3>Mentor Ahli</h3>
                <p>Pilihan berbagai macam mentor ahli di bidangnya</p>
            </div>
        </div>
    </div>

    <!-- BAGIAN CARD COURSES -->
<main>
    <div class="text_courses">
        <h2>Rekomendasi Kursus Khusus Kamu</h2>
        <p>Kelas dan Mentor terbaik</p>
    </div>

    <!-- card 1 -->
    <section class="course-cards">
        <!-- pop up -->
        <div id="modal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <div id="modal-content">
                <!-- Konten pop up akan dimasukkan di sini -->
        </div>
            </div>   
             </div>
        <div class="card">
            <img src="assets/images/bisnis_card.png" alt="Gambar kursus">
            <h4>Businesses Development</h4>
            <i class="fa fa-user"></i>
                <span>Gisselle Anastya</span>
                <br>
                <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<br>
                    <span class="original">148.000</span>
                    <span class="discounted">300.000</span>
            </div>

        <!-- card 2 -->
        <div class="card">
                <img src="assets/images/frontend_card.png" alt="Gambar kursus">
                <h4>Front-end web development</h4>
                <i class="fa fa-user"></i>
                    <span>Gisselle Anastya</span>
                    <br>
                    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<br>
                        <span class="original">Rp.150.000</span>
                        <span class="discounted">435.000</span>
                </div>

        <!-- card 3 -->
        <div class="card">
            <img src="assets/images/sosial_media_card.png" alt="Gambar kursus">
                <h4>Social Media Specialist</h4>
                <i class="fa fa-user"></i>
                    <span>Gisselle Anastya</span>
                    <br>
                    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<br>
                        <span class="original">100.000</span>
                        <span class="discounted">250.000</span>
        </div>

        <!-- card 4 -->
        <div class="card">
            <img src="assets/images/finance_card.png" alt="Gambar kursus">
                <h4>Finance & Accounting</h4>
                <i class="fa fa-user"></i>
                    <span>Gisselle Anastya</span>
                    <br>
                    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<br>
                        <span class="original">70.000</span>
                        <span class="discounted">140.000</span>
        </div>

        <!-- card 5 -->
        <div class="card">
            <img src="assets/images/uxui_card.png" alt="Gambar kursus">
                <h4>Desain UI/UX</h4>
                <i class="fa fa-user"></i>
                    <span>Gisselle Anastya</span>
                    <br>
                    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<br>
                        <span class="original">170.000</span>
                        <span class="discounted">290.000</span>
        </div>

        <!-- card 6 -->
        <div class="card">
            <img src="assets/images/hr_card.png" alt="Gambar kursus">
                <h4>Human Resources (HR)</h4>
                <i class="fa fa-user"></i>
                    <span>Gisselle Anastya</span>
                    <br>
                    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<br>
                        <span class="original">85.000</span>
                        <span class="discounted">200.000</span>
        </div>
    </section>

    <!-- script pop up -->
     <script>
        const cards = document.querySelectorAll('.card');
        const modal = document.getElementById('modal');
        const modalContent = document.getElementById('modal-content');
        const closeModal = document.querySelector('.close');

cards.forEach(card => {
  card.addEventListener('click', () => {
    const courseTitle = card.querySelector('h4').textContent;
            const courseImage = card.querySelector('img').src;
            const courseInstructor = card.querySelector('.fa-user + span').textContent;
            const courseRating = Array.from(card.querySelectorAll('.fa-star.checked')).length;
            const courseOriginalPrice = card.querySelector('.original').textContent;
            const courseDiscountedPrice = card.querySelector('.discounted').textContent;
            const courseDescription = `
                    <p>Deskripsi kursus: ${card.getAttribute('data-description')}</p>
                `;            


            const courseContent = `
                <div class="course-details">
                    <h2>${courseTitle}</h2>
                    <img src="${courseImage}" alt="${courseTitle}">
                    <p>Instructor: ${courseInstructor}</p>
                    <p>Rating: ${courseRating} stars</p>
                    <p>Original Price: ${courseOriginalPrice}</p>
                    <p>Discounted Price: ${courseDiscountedPrice}</p>
                    <p>Deskripsi kursus: Kursus ini akan membantu Anda memahami konsep dan praktik Human Resources (HR) secara mendalam. Anda akan mempelajari strategi dan teknik terbaik dalam mengelola sumber daya manusia di organisasi, mulai dari rekrutmen hingga pengembangan karyawan.</p>
                    <button class="enroll-btn">Enroll Now</button>
                </div>
            `;

            modalContent.innerHTML = courseContent;
            modal.style.display = 'block';
        });
    });
        
    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
</script>


         <!-- BAGIAN TESTIMONI -->
    <div class="testimonial-container">
        <h2>Apa yang mereka katakan tentang kami</h2>
        <div class="lapisan_testi">
        <div class="testimonial-slider">
            <div class="testimonial">
                <p>"Kursus online Skill Boost benar-benar membantu saya memahami materi dengan lebih baik. Sangat terkesan dengan kualitas pengajaran yang disampaikan."</p>
                <i style="font-size:12px" class="fa fa-user">&#xf2be;</i>
                <span class="username">Marsha Cantika</span>
            </div>
            <div class="testimonial">
                <p>"Saya sangat puas dengan kursus di Skill Boost! Materi yang disampaikan sangat mudah dipahami, dan instruktur juga responsif terhadap pertanyaan-pertanyaan kami."</p>
                <i style="font-size:12px" class="fa fa-user">&#xf2be;</i>
                <span class="username">Shani Finny</span>
            </div>
            <div class="testimonial">
                <p>"Kursus online ini memberi saya fleksibilitas untuk belajar sesuai dengan jadwal saya sendiri. Sangat direkomendasikan bagi siapa saja yang ingin belajar."</p>
                <i style="font-size:12px" class="fa fa-user">&#xf2be;</i>
                <span class="username">Oline Loany</span>
            </div>
        </div>

        <!-- bagian dot-->
    <div class="dot-container">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>
<script src="script.js"></script>
    </div>  
    </div>
</main>


<!-- BAGIAN BERITA -->
<div class="container-berita">
    <h4>Berita Terbaru Kami</h4>
    <div class="main-content">
        <div class="featured-news">
            <img src="assets/images/berita_card.png" alt="Berita Terbaru">
            <div class="news-info">
                <p class="author">
                    <i style="font-size:13px;" class="fa fa-user">&#xf2be;</i> 
                    By <span style="margin-right: 10px;">DetikCourse</span>
                    <i style="font-size:13px;" class="fa fa-date">&#xf073;</i> 
                    <span style="margin-left: 5px;">30/01/2023</span>
                </p>
                <h2>Membangun Masa Depan: Kursus Skill Online Menjadi Pilihan Utama Bagi Pencari Kerja</h2>
                <p>Dalam menghadapi persaingan kerja yang semakin ketat, kursus skill online telah menjadi pilihan utama bagi pencari kerja untuk meningkatkan keterampilan mereka.</p>
            </div>
        </div>
        <div class="latest-news">
            <div class="header-berita">
                <h3>Berita Terbaru:</h3>
                <a href="#">Lihat semua</a>
            </div>
            <div class="news-list">
                <div class="news-item">
                    <div class="news-image" style="background-color: #f8c3d8;"></div>
                    <div class="news-text">
                        <p>Judul Berita</p>
                        <a href="#">Baca ></a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-image" style="background-color: #b2f2bb;"></div>
                    <div class="news-text">
                        <p>Judul Berita</p>
                        <a href="#">Baca ></a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-image" style="background-color: #ffe066;"></div>
                    <div class="news-text">
                        <p>Judul Berita</p>
                        <a href="#">Baca ></a>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-image" style="background-color: #d0bfff;"></div>
                    <div class="news-text">
                        <p>Judul Berita</p>
                        <a href="#">Baca ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<!-- FOOTER -->
<footer class="footer">
    <div class="container_footer">
        <div class="footer-col">
            <h4>company</h4>
            <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our services</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">affiliate program</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>get help</h4>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">order status</a></li>
                <li><a href="#">payment options</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>career</h4>
            <ul>
                <li><a href="#">hiring</a></li>
                <li><a href="#">blog</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <div class="copp">
        <p>&copy; 2024 <strong>Skill Boost.</strong> All rights reserved.</p>
    </div>
</footer>
</body>
</html>