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

      

<div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
  <div class="pricing">
    <div class="plant-item m-5">
      <div class="card m-3 border-0">
        <div class="card-body">
          <table class="table table-bordered table-striped mt-3">
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
              
         <?php $i=1; foreach ($cart_list as $key => $plant) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $plant['name'] ?></td>
                  <td>
                    <img style="width: 70px;height: 70px;border-radius: 50%;"
                      src="data:image/' . $type . ';base64,<?= $plant['img'] ?>">
                  </td>
                  <td><?= $plant['quantity'] ?></td>
                  <td><?= ($plant['price'])*($plant['quantity']) ?> mmk</td>
                  
                  <th>
                    <button class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></button>
                    <button class="btn btn-sm btn-danger deleteSelect" data-value="<?= "" ?>"
                      data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa fa-trash"></i></button>
                  </th>
                </tr>
                <?php $i++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Pricing Item -->


 

      </div>

    </section><!-- /Pricing Section -->


  </main>

  <?php require_once('layout/footer.php') ?>