<?php require_once('../storage/db.php') ?>
<?php require_once('../storage/plantcrud.php') ?>
<?php require_once('./layout/header.php') ?>
<?php require_once('./layout/nav.php') ?>

</div>
</header>
<?php $currentPage = 0;
if (isset($_GET["pageNo"])) {
    $currentPage = (int) $_GET["pageNo"];
}

$pagTotal = get_plant_pag_count($mysqli);
if (isset($_GET['lest'])) {
    $currentPage = ($pagTotal * 5) - 5;
} ?>
<main class="main">
  
  <section id="pricing" class="pricing section light-background">
    
    
    <div class="container">
      
      <div class="card">
        
        <div class="col-lg-12 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="pricing">
            <div class="plant-item m-5">
              <div class="d-flex justify-content-between">
              <h3>Plant List</h3>
                <a href="add_plant.php" class="btn-buy"
                style="padding: 10px 15px; background-color: var(--accent-color); border-radius: 18px; color:white;">Add New Plant</a>
              </div>
          
              <?php 
                if(isset($_GET['deleteId'])){
                  if(delete_plant($mysqli,$_GET['deleteId'])){ ?>
                    <div class="alert alert-warning">Plant is deleted!</div>
                 <?php }else{ ?>
                    <div class="alert alert-danger">Can't delete Plant!</div>
                 <?php }
                } ?>
              <div class="card m-3 border-0">
                <div class="card-body">
                  <table class="table table-bordered table-striped">
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
                      $plant_list = get_all_plant_id($mysqli,$currentPage);
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
                              src="../admin/assets/profile/<?= $plant['img'] ?>">
                          </td>
                          <td>
                          <a class="btn btn-sm btn-primary" href="./add_plant.php?id=<?= $plant['id'] ?>"><i class="bi bi-pen"></i></a>
                            <button class="btn btn-sm btn-danger deleteSelect" data-val="<?= $plant['id'] ?>"
                              data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash"></i></button>
                          </td>
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
        </div><!-- End Pricing Item -->


      </div>       

    </div>

  </section><!-- /Pricing Section -->
  
  

</main>

<?php require_once('../layout/footer.php') ?>