<?php require_once('./layout/header.php') ?>
<?php require_once('./layout/nav.php') ?>
<?php require_once('../storage/db.php') ?>
<?php require_once('../storage/bouquet_crud.php') ?>
<?php require_once('../storage/flower_crud.php') ?>


  <main class="main">

    <section id="pricing" class="pricing section light-background">


      <div class="container">
        <div class="card">
    

        <div class="row gy-2">

          <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <div class="bouquet-item m-5">
              <div class="d-flex justify-content-between">
              <h3>Flower List</h3>
                <a href="add_flower.php" class="btn-buy"
                  style="padding: 10px 15px; background-color: var(--accent-color); border-radius: 18px; color:white;">Add New Flower</a>
              </div>
                <div class="card m-3 border-0">
                  <div class="card-body">
                  
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Flower Name</th>
                          <th>Color</th>
                          <th>Qty</th>
                          <th>Price</th>                     
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; $flower_list = get_all_flower($mysqli); ?>
                        
                        <?php while ($flower = $flower_list->fetch_assoc()) { ?>

                          <tr>
                            <td><?= $i ?></td>
                            <td><?= $flower['name'] ?></td>
                            <td><?= $flower['color'] ?></td>
                            <td><?= $flower['qty'] ?></td>
                            <td><?= $flower['price'] ?> mmk</td>
                            <td>
                              <img src="" alt="">
                            </td>
                            <th>
                            <a class="btn btn-sm btn-primary" href="./add_flower.php?id=<?= $flower['id'] ?>"><i class="bi bi-pen"></i></a>
                            <button class="btn btn-sm btn-danger deleteSelect" data-val="<?= $flower['id'] ?>"
                            data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
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
            </div>
          </div><!-- End Pricing Item -->


        </div>

      </div>

    </section><!-- /Pricing Section -->



  </main>

 <?php require_once("../layout/footer.php") ?>