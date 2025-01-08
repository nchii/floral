<?php require_once('../storage/db.php') ?>
<?php require_once('../storage/plantcrud.php') ?>
<?php require_once('./layout/header.php') ?>
<?php require_once('./layout/nav.php') ?>


</div>
</header>
<?php
$currentPage = 0;
?>
<main class="main">

  <section id="pricing" class="pricing section light-background">


    <div class="container">

      <div class="card">

        <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing">
            <div class="plant-item m-5">
              <div class="d-flex justify-content-end align-items-center my-3">
                <a href="add_plant.php" class="btn-buy"
                  style="padding: 10px 15px; background-color: var(--accent-color); border-radius: 18px; color:white;">Add New Plant</a>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <h3>Item List</h3>
              </div>
              <div class="card m-3 border-0">
                <div class="card-body">
                  <table class="table table-bordered table-striped mt-3">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Plant Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Size</th>
                        <th>Image</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      $plant_list = get_all_plants($mysqli);
                      if(isset($_POST['search'])){
                        $plant_list = get_all_plants_filter($mysqli,$_POST['search']);
                      }
                      ?>
                      <?php while ($plant = $plant_list->fetch_assoc()) { ?>

                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $plant['name'] ?></td>
                          <td><?= $plant['description'] ?></td>
                          <td><?= $plant['price'] ?> mmk</td>
                          <td><?= $plant['size'] ?></td>
                          <td>
                            <img style="width: 70px;height: 70px;border-radius: 50%;"
                              src="data:image/' . $type . ';base64,<?= $plant['img'] ?>">
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></button>
                            <button class="btn btn-sm btn-danger deleteSelect" data-val="<?= $plant['id'] ?>"
                              data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                          </td>
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

    </div>

  </section><!-- /Pricing Section -->

  

</main>

<?php require_once('../layout/footer.php') ?>