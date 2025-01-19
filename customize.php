<?php require_once('layout/header.php') ?>
<?php require_once('layout/nav.php') ?>
<?php require_once('storage/db.php') ?>
<?php require_once('storage/plantcrud.php') ?>
<?php require_once('storage/cart_crud.php')?>
</div>
</header>

<body class="index-page">
  <main class="main">


    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Plants</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <?php $i = 1;
          $plant_list = get_all_plants($mysqli); 
          if(isset($_POST['search'])){
            $plant_list = get_all_plants_filter($mysqli,$_POST['search']);
          }
          ?>
          <?php while ($plant = $plant_list->fetch_assoc()) { ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="pricing-item">
                <h3><?= $plant['name'] ?></h3>
                <img src="data:image/' . $type . ';base64,<?= $plant['img'] ?>" alt="">
                <h5><?= $plant['price'] ?><span> mmk</span></h5>
                <div class="btn-wrap">
                  <a href="item_list.php" class="btn-buy">Choose</a>
                </div>
              </div>
            </div>
            <?php $i++;
          } ?><!-- End Pricing Item -->


        </div>

      </div>

    </section><!-- /Pricing Section -->


  </main>

  <?php require_once('layout/footer.php') ?>