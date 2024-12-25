<?php require_once('layout/header.php')?>
<?php require_once('layout/nav.php')?>
</div>
</header>

<main>
    <section id="pricing" class="pricing section light-background">
        <div class="container">
        <?php $detail = get_bouquet_details($mysqli, $_GET['id']); ?>
            <div class="card" style="max-width: 800px; margin: auto; background-color:white; border: none;">
            <div class="card-body">
              <div class="row">
              <div class="col-md-5">
                <img src="data:image/' . $type . ';base64,<?= $detail['img'] ?>" alt="plant" class="img-fluid">
              </div>
              <div class="col-md-7">
                <h3><?= $detail['name'] ?></h3><br>
                <table style="padding-bottom: 20px;">
                  <tr class="mb-8">
                    <td><span style="color:var(--accent-color)">Price:  </span></td>
                    <td><?= $detail['price'] ?></td>
                  </tr>
                 
                  <tr class="mb-5">
                    <td style="vertical-align: top; text-align: left;"><span style="color:var(--accent-color);">Description:  </span></td>
                    <td><?= $detail['description'] ?></td>
                  </tr>
                  </table><br>
                <button class="btn" style="background-color:var(--accent-color); border-radius:20px; padding:10px 20px; color:white;">Add to Cart</button>
              </div>
              </div>
            </div>
            </div>
        </div>
    </section>
</main>

<?php require_once('layout/footer.php')?>