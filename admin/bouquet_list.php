<?php require_once('./layout/header.php') ?>
<?php require_once('./layout/nav.php') ?>
<?php require_once('../storage/db.php') ?>
<?php require_once('../storage/bouquet_crud.php') ?>
<?php $currentPage = 0;
if (isset($_GET["pageNo"])) {
    $currentPage = (int) $_GET["pageNo"];
}

$pagTotal = get_bouquet_pag_count($mysqli);
if (isset($_GET['lest'])) {
    $currentPage = ($pagTotal * 5) - 5;
} ?>

  <main class="main">

    <section id="pricing" class="pricing section light-background">


      <div class="container">
        <div class="card">
          <?php 
            if(isset($_GET['deleteId'])){
              if(delete_bouquet($mysqli,$_GET['deleteId'])){ ?>
                <div class="alert alert-warning">Bouquet is deleted!</div>
              <?php }else{ ?>
                <div class="alert alert-danger">Can't delete Bouquet!</div>
              <?php }
          } ?> 


        <div class="row gy-2">

          <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <div class="bouquet-item m-5">
              <div class="d-flex justify-content-end align-items-center my-3">
                <a href="add_bouquet.php" class="btn-buy"
                  style="padding: 10px 15px; background-color: var(--accent-color); border-radius: 18px; color:white;">Add New Bouquet</a>
              </div>

              <div class="d-flex justify-content-start align-items-center my-3">
              <h3>Bouquet List</h3>
              </div>
                <div class="card m-3 border-0">
                  <div class="card-body">
                  
                    <table class="table table-bordered table-striped mt-3">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Bouquet Name</th>
                          <th>Description</th>
                          <th>Price</th>                     
                          <th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; $bouquet_list = get_all_bouquets($mysqli); 
                         if(isset($_POST['search'])){
                          $bouquet_list = get_user_filter($mysqli,$_POST['search']);
                        }
                        
                        ?>
                        <?php while ($bouquet = $bouquet_list->fetch_assoc()) { ?>

                          <tr>
                            <td><?= $i ?></td>
                            <td><?= $bouquet['name'] ?></td>
                            <td><?= $bouquet['description'] ?></td>
                            <td><?= $bouquet['price'] ?> mmk</td>
                            <td>
                              <img style="width: 70px;height: 70px;border-radius: 50%;" src="data:image/' . $type . ';base64,<?= $bouquet['img'] ?>">
                            </td>
                            <th>
                            <a class="btn btn-sm btn-primary" href="./add_bouquet.php?id=<?= $bouquet['id'] ?>"><i class="bi bi-pen"></i></a>
                            <button class="btn btn-sm btn-danger deleteSelect" data-val="<?= $bouquet['id'] ?>"
                            data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                            </th>
                          </tr>
                          </tr>
                          <?php $i++;
                        }
                        ?>
                      </tbody>
                    </table>
                    <?php if (!isset($_POST['search'])) {
              require_once("../layout/pagination.php");
          } elseif (isset($_POST['search']) && $_POST['search'] == "") {
              require_once("../layout/pagination.php");
          } ?>
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