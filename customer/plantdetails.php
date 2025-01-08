<?php require_once('layout/header.php')?>
<?php require_once('layout/nav.php')?>
<?php require_once('storage/plantcrud.php')?>
</div>
</header>


  

<main>
  <form action="" method="POST">
    <section id="pricing" class="pricing section light-background">
        <div class="container">

        <?php 
          if(isset($_GET['id'])){
            $cart = get_plant_details($mysqli,$_GET['id']);
            if(isset($_GET['addToCard'])){
              $status = true;
              foreach ($cart_list as $i => $plant) {
                if($plant['id'] == $cart['id'] && $plant['type'] == 'plant'){
                  $status = false;
                  $cart_list[$i]['quantity'] += 1;
                }
              }
              if($status){
                array_push($cart_list, ['type'=>"plant",'quantity'=>1,'id'=>$cart['id'],'name'=>$cart['name'],'price'=>$cart['price'],'size'=>$cart['size'],'description'=>$cart['description'],'img'=>$cart['img']]);
              }
              $_SESSION['cart'] = $cart_list;
              echo "<script>location.replace('./plants.php');</script>";
            }
          }
        ?>

            <div class="card" style="max-width: 800px; margin: auto; background-color:white; border: none;">
            <div class="card-body">
              <div class="row">
              <div class="col-md-5">
                <img src="data:image/' . $type . ';base64,<?= $cart['img'] ?>" alt="plant" class="img-fluid">
              </div>
              <div class="col-md-7">
                <h3><?= $cart['name']?></h3><br>
                <table style="padding-bottom: 20px;">
                  <tr class="mb-8">
                    <td><span style="color:var(--accent-color)">Price:  </span></td>
                    <td><?= $cart['price']?></td>
                  </tr>
                  <tr class="mb-5">
                    <td><span style="color:var(--accent-color)">Size: </span></td>
                    <td><?= $cart['size']?></td>
                  </tr>
                  <tr class="mb-5">
                    <td style="vertical-align: top; text-align: left;"><span style="color:var(--accent-color);">Description:  </span></td>
                    <td><?= $cart['description']?></td>
                  </tr>
                  </table><br>
                <a href="?id=<?= $cart['id'] ?>&addToCard" class="btn" name="addtocart" style="background-color:var(--accent-color); border-radius:20px; padding:10px 20px; color:white;">Add to Cart</a>
              </div>
              </div>
            </div>
            </div>
        </div>
    </section>
    </form>
</main>

<?php require_once('layout/footer.php')?>