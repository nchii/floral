<?php session_start(); ?>
<?php require_once('layout/header.php') ?>
<?php require_once('layout/nav.php') ?>
<?php require_once('storage/db.php') ?>
<?php require_once('storage/plantcrud.php') ?>
</div>
</header>

<body class="index-page">
  <main class="main">


    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Order List</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
         <?php foreach ($cart_list as $key => $plant) { ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <div class="badge rounded-pill bg-danger" style="position:absolute;right:10px;top:10px;"><?= $plant['quantity'] ?></div>
                <h3><?= $plant['name'] ?></h3>
                <img src="data:image/' . $type . ';base64,<?= $plant['img'] ?>" alt="">
                <h5><?= $plant['price'] ?><span> mmk</span></h5>
              </div>
            </div>
        <?php  } ?>


        </div>

      </div>

    </section><!-- /Pricing Section -->


  </main>

  <?php require_once('layout/footer.php') ?>