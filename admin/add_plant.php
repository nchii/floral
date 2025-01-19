<?php require_once('../storage/db.php') ?>
<?php require_once('../storage/plantcrud.php') ?>
<?php require_once("./layout/header.php") ?>
<?php require_once("./layout/nav.php") ?>


<?php
$plantName = $plantNameErr = '';
$size = $sizeErr = '';
$price = $priceErr = '';
$description = $descriptionErr = '';
$itemImg = $itemImgErr = '';
$invalid = '';
$error = false;

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $plant = get_plant_id($mysqli,$id);
  $plantName = $plant['name'];
  $size = $plant['size'];
  $price = $plant['price'];
  $description = $plant['description'];
  $plantImg = $plant['img'];
   
  
}

if (isset($_POST['plantName'])) {

  $plantName = $_POST['plantName'];
  $size = $_POST['size'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $file = $_FILES['itemImg'];
  $itemImg = $file['name'];

  if ($plantName === '') {
    $plantNameErr = 'Name must not be blank!';
    $invalid = "err";
  } else {
    if (!preg_match("/^[a-zA-Z\s]+$/", $plantName)) {
      $plantNameErrrr = 'Name must be only string!';
      $invalid = "err";
    }
  }

  if ($size === '') {
    $sizeErr = 'Size must not be blank!';
    $invalid = "err";
  } else {
    if (!preg_match("/^[a-zA-Z\s]+$/", $size)) {
      $sizeErr = 'Name must be only string!';
      $invalid = "err";
    }
  }

  if ($description === '') {
    $descriptionErr = 'Description must not be blank!';
    $invalid = "err";
  } else {
    if (!preg_match("/^[a-zA-Z\s]+$/", $size)) {
      $sizeErr = 'Description must be only string!';
      $invalid = "err";
    }
  }

  if ($price === '') {
    $priceErr = 'Price must not be blank!';
    $invalid = "err";
  } else {
    if (!preg_match("/^\d+$/ ", $price)) {
      $priceErr = 'Price must be only number!';
      $invalid = "err";
    }
  }

  if ($itemImg == "") {
    $itemImgErr = " Image can't be blank!";
    $invalid = "err";
  } else {
    $tmp = $file['tmp_name'];
    $img = file_get_contents(filename: $tmp);
    $data = base64_encode($img);

  }


  if (!$invalid) {
    if(isset($_GET['id'])){
      if(update_plant($mysqli,$plantName,$price,$description,$size,$data,$id)){
        header("Location:plant_list.php");
      }else{
        $error = true;
        
      }
    }else{
      if(save_plant($mysqli, $plantName, $price, $description, $data, $size)){
        header("Location:plant_list.php");
      }else{
        $error = true;
      }
    }
  }
}

?>


  <main class="main">

    <section id="pricing" class="pricing section light-background">
      <div class="card mx-auto" style="width: 500px;margin-top: 100px;">
        <div class="plant-item p-4">
          <h3>Add Plant</h3>
          <div class="card-body">
            <?php if ($invalid !== "" && $invalid !== "err") { ?>
              <div class="alert alert-danger"><?= $invalid ?></div>
            <?php } ?>
            <form method="post" enctype="multipart/form-data">         
              <div class="form-group my-3">
                <label class="form-label">Plant Name</label>
                <input type="text" name="plantName" class="form-control" value="<?= $plantName ?>">
                <div class="validation-message" style="font-size:12px; color:red;line-height:25px; height:25px">
                  <?= $plantNameErr ?>
                </div>
              </div>
              <div class="form-group my-3">
                <label class="form-label">Size</label>
                <input type="text" name="size" class="form-control" value="<?= $size ?>">
                <div class="validation-message" style="font-size:12px;color:red; line-height:25px; height:25px">
                  <?= $sizeErr ?>
                </div>
              </div>
              <div class="form-group my-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" value="<?= $price ?>">
                <div class="validation-message" style="font-size:12px;color:red; line-height:25px; height:25px">
                  <?= $priceErr ?>
                </div>
              </div>
              <div class="form-group my-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" class="form-control" value="<?= $description ?>">
                <div class="validation-message" style="font-size:12px;color:red; line-height:25px; height:25px">
                  <?= $descriptionErr ?>
                </div>
              </div>
              <div class="form-group my-3">
                <label class="form-label">Image</label>
                <input type="file" name="itemImg" class="form-control">
                <div class="validation-message" style="font-size:12px;color:red; line-height:25px; height:25px">
                  <?= $itemImgErr ?>
                </div>
              </div>
              <div class="form-group my-3">
                <input type="submit" value="Submit" class="btn" style="color: var(--accent-color);
  background-color: transparent;
  border: 2px solid var(--accent-color);
  display: inline-block;
  padding: 10px 40px 12px 40px;
  border-radius: 50px;
  font-size: 14px;
  font-family: var(--heading-font);
  font-weight: 600;
  transition: 0.3s;
">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- /Pricing Section -->



 <?php require_once ("./layout/footer.php") ?>