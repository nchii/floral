<?php require_once('storage/db.php') ?>
<?php require_once('storage/bouquet_crud.php') ?>
<?php require_once('layout/header.php') ?>
<?php require_once('layout/nav.php') ?>
<?php require_once('storage/cart_crud.php')?>
</div>
</header>

<body class="index-page">
  <main class="main">

    
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Bouquets</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <?php $i = 1;
          $bouquet_list = get_all_bouquets($mysqli); ?>
          <?php while ($bouquet = $bouquet_list->fetch_assoc()) { ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <h3><?= $bouquet['name'] ?></h3>
                <img src="data:image/' . $type . ';base64,<?= $bouquet['img'] ?>" alt="">
                <h5><?= $bouquet['price'] ?><span> mmk</span></h5>
                <div class="btn-wrap">
                  <a href="bouquetdetails.php?id=<?= $bouquet['id'] ?>" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
            <?php $i++;
          } ?><!-- End Pricing Item -->
        </div>

    </section><!-- /Pricing Section -->


  </main>

  <?php require_once('layout/footer.php') ?>