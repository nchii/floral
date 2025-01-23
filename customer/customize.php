<?php require_once('layout/header.php') ?>
<?php require_once('layout/nav.php') ?>
<?php require_once('storage/db.php') ?>
<?php require_once('storage/plantcrud.php') ?>
<?php require_once('storage/cart_crud.php')?>
<?php require_once('../storage/flower_crud.php') ?>
</div>
</header>
<div class="container">
<table>
<div class=" gy-4">
  <?php $i = 1;
  $flower_list = get_all_flower($mysqli); ?>
  <?php while ($flower = $flower_list->fetch_assoc()) { ?>
    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="pricing-item">
        <h3><?= $flower['name'] ?></h3>
        <img src="../assets/img/<?= $flower['img'] ?>" alt="">
        <h5><?= $flower['price'] ?><span> mmk</span></h5>
        <div class="btn-wrap">
          <a href="customizedetails.php?id=<?= $flower['id'] ?>" class="btn-buy">Buy Now</a>
        </div>
      </div>
    </div>
    <?php $i++;
  } ?><!-- End Pricing Item -->
  </table>
</div>


  <?php require_once('layout/footer.php') ?>