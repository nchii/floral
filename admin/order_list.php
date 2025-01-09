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
                <h3>Order List</h3>
              </div>
              <div class="card m-3 border-0">
                <div class="card-body">
                  <table class="table table-bordered table-striped mt-3">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Order Number</th>
                        <th>Customer Name</th>
                        <th>Total Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      $order_list = get_order_detail($mysqli);
                      var_dump($order_list);
                      ?>
                      <?php while ($order = $order_list->fetch_assoc()) { ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $order['ord_num']?></td>
                          <td><?= $order['date']?></td>
                          <td><?= $order['name'] ?></td>
                          <td><?= $order['total_amount'] ?></td>
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