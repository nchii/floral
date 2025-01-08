<?php require_once('layout/header.php') ?>
<?php require_once('layout/nav.php') ?>
<?php require_once('storage/db.php') ?>
<?php require_once('storage/plantcrud.php') ?>

<?php 
if(isset($_GET['inc'])){
  for($i = 0;$i < count($cart_list); $i++){
    if($i+1==$_GET['inc']){
      $cart_list[$i]['quantity']++;
    }
  }
  $_SESSION['cart'] = $cart_list;
  echo "<script>location.replace('./cart_list.php');</script>";
}
if(isset($_GET['dec'])){
  for($i = 0;$i < count($cart_list); $i++){
    if($i+1==$_GET['dec']){
      $count = $cart_list[$i]['quantity'];
      if($count==1){
        array_splice($cart_list, $i, 1);
      } else {
        $cart_list[$i]['quantity']--;
      }
    }
  }
  $_SESSION['cart'] = $cart_list;
  echo "<script>location.replace('./cart_list.php');</script>";
}
if(isset($_POST['confirm_order'])){
  save_order($mysqli,$cart_list,$user['id']);
  $_SESSION['cart'] = [];
  echo "<script>location.replace('./cart_list.php');</script>";
}
?>

<body class="index-page">
  <main class="main">


    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">


      <div class="container">



        <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing">
            <div class="plant-item m-5">
              <div class="card m-3 border-0">
              <div class="d-flex justify-content-between align-items-center m-3">
                <h5>In Your Cart</h5>
              </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Plant Name</th>
                        <th>Image</th>
                        <th>Qty</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $i = 1;
                      foreach ($cart_list as $key => $plant) { ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $plant['name'] ?></td>
                          <td>
                            <img style="width: 70px;height: 70px;border-radius: 50%;"
                              src="data:image/' . $type . ';base64,<?= $plant['img'] ?>">
                          </td>
                          <td><?= $plant['quantity'] ?></td>
                          <td><?= ($plant['price']) * ($plant['quantity']) ?> mmk</td>

                          <th class="text-center">
                            <a class="btn btn-sm btn-danger mr-3" href="?dec=<?= $i ?>"  >&nbsp;-&nbsp;</button>
                            <a class="btn btn-sm btn-primary" href="?inc=<?= $i ?>">&nbsp;+&nbsp;</button>
                          </th>
                        </tr>
                        <?php $i++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <form method="post">
                  <div class="d-flex justify-content-end align-items-center m-3">
                    <button type="submit" name="confirm_order" class="btn-buy"
                      style="padding: 10px 15px; background-color: var(--accent-color); border:none; border-radius: 18px; color:white;">Confirm
                      Order</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!-- End Pricing Item -->




      </div>

    </section><!-- /Pricing Section -->


  </main>

  <?php require_once('layout/footer.php') ?>