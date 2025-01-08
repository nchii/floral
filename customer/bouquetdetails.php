<?php require_once('layout/header.php')?>
<?php require_once('layout/nav.php')?>
<?php require_once('storage/bouquet_crud.php')?>
</div>
</header>

<main>
    <section id="pricing" class="pricing section light-background">
        <div class="container">
        <?php $detail = get_bouquet_details($mysqli, $_GET['id']); 
          if(isset($_GET['addToCard'])){
            $status = true;
            foreach ($cart_list as $i => $bouquet) {
              if($bouquet['id'] == $detail['id'] && $bouquet['type'] == 'bouquet'){
                $status = false;
                $cart_list[$i]['quantity'] += 1;
              }
            }
            if($status){
              array_push($cart_list, ['type'=>"bouquet",'quantity'=>1,'id'=>$detail['id'],'name'=>$detail['name'],'price'=>$detail['price'],'description'=>$detail['description'],'img'=>$detail['img']]);
            }
            $_SESSION['cart'] = $cart_list;
            echo "<script>location.replace('./bouquets.php');</script>";
          }
        ?>
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
                <a href="?id=<?= $detail['id'] ?>&addToCard" class="btn" style="background-color:var(--accent-color); border-radius:20px; padding:10px 20px; color:white;">Add to Cart</a>
              </div>
              </div>
            </div>
            </div>
        </div>
    </section>
</main>

<?php require_once('layout/footer.php')?>