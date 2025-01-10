<?php require_once('./layout/header.php') ?>
<?php require_once('./layout/nav.php') ?>
<?php require_once('./storage/db.php') ?>
<?php require_once('storage/order_crud.php') ?>
<main class="main">
    <section class="section">
    <div class="container">
        <div class="card">
        <div class="alert alert-success">Your order is successful!</div><br>
        <div class="card-body">
        <div class="col-md-7">
            <?php $invoice=get_order_with_id($mysqli,$_GET['id']);
            ?>
            <div class="col-md-7">
                <h3>Order Details</h3><br>
                <table style="padding-bottom: 20px;">
                  <tr class="mb-8">
                    <td><span style="color:var(--accent-color)">Order Number:  </span></td>
                    <td><?= $invoice['order_no']?></td>
                  </tr>
                  <tr class="mb-5">
                    <td><span style="color:var(--accent-color)">Date: </span></td>
                    <td><?= $invoice['date']?></td>
                  </tr>
                  <tr class="mb-5">
                    <td style="vertical-align: top; text-align: left;"><span style="color:var(--accent-color);">Total Amount:  </span></td>
                    <td><?= $invoice['total_amount']?></td>
                  </tr>
                  </table>
              </div>
        </div>
        </div>
    </div>
    </section>
</main>
<?php require_once('./layout/footer.php') ?>
