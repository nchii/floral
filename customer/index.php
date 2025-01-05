<?php require_once('layout/header.php') ?>
<?php require_once("../storage/register_crud.php") ?>
<?php require_once("../storage/usercrud.php") ?>

<?php 

if(have_admin($mysqli)){
  $admin_password= password_hash("adminoffloral",PASSWORD_BCRYPT);
  save_user($mysqli, "admin", "admin@gmail.com", $admin_password, 1, "assets/img/admin.png");

}
?>
  <?php require_once('layout/nav.php') ?>


      
    </div>
  </header>

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/home1.png" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/home4.png" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/home3.png" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/home2.png" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <span class="section-subtitle" data-aos="fade-up">Welcome</span>
            <h1 class="mb-4" data-aos="fade-up">
              Excepteur sint occaecat cupidatat non proident
            </h1>
            <p data-aos="fade-up">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts. Separated they
              live in Bookmarksgrove right at the coast of the Semantics, a large
              language oc
            </p>
            <p class="mt-5 d-flex justify-content-between " data-aos="fade-up">
              <a href="plants.php" class="btn btn-get-started">Buy Plants</a>
              <a href="bouquets.php" class="btn btn-get-started">Buy Bouquets</a>
            </p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    

  <?php require_once("layout/footer.php") ?>