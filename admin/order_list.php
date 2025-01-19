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
                        <th>Date</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      // number_format($)
                  
                      $i = 1;
                      $order_list = get_order_detail($mysqli);
                      ?>
                      <?php while ($order = $order_list->fetch_assoc()) { ?>
                        <tr>
                          <td><?= $i ?></td>
                          <td><?= $order['order_no']?></td>
                          <td><?= $order['name']?></td>
                          <td class="text-end"><?= number_format($order['total_amount'],2) ?> </td>
                            <td><?= date('Y-m-d', strtotime($order['date'])) ?></td>
                          <td>
                            <button class="btn btn-secondary btn-sm">Prepare</button>
                            <button class="btn btn-primary btn-sm">Delivered</button>
                            <button class="btn btn-success btn-sm">Complete</button>
                            <button class="btn btn-warning btn-sm">View</button>
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