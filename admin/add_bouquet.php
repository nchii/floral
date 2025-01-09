<?php require_once('../storage/db.php') ?>
<?php require_once('../storage/bouquet_crud.php') ?>
<?php require_once('./layout/header.php') ?>
<?php require_once('./layout/nav.php') ?>

<?php
$bouquetName = $bouquetNameErr = '';
$price = $priceErr = '';
$description = $descriptionErr = '';
$itemImg = $itemImgErr = '';
$invalid = '';

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $bouquet = get_bouquet_id($mysqli,$id);
  $bouquetName = $bouquet['name'];
  $price = $bouquet['price'];
  $description = $bouquet['description'];
  $bouquetImg = $bouquet['img'];
  
   
  
}

if (isset($_POST['bouquetName'])) {

  $bouquetName = $_POST['bouquetName'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $file = $_FILES['itemImg'];
  $itemImg = $file['name'];

  if ($bouquetName === '') {
    $bouquetNameErr = 'Name must not be blank!';
    $invalid = "err";
  } else {
    if (!preg_match("/^[a-zA-Z\s]+$/", $bouquetName)) {
      $bouquetNameErrrr = 'Name must be only string!';
      $invalid = "err";
    }
  }

  if ($description === '') {
    $descriptionErr = 'Description must not be blank!';
    $invalid = "err";
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
      update_bouquet($mysqli,$bouquetName,$price,$description,$bouquetImg,$id);
      header("Location:bouquet_list.php");
    }else{

    $status = save_bouquet($mysqli, $bouquetName, $price, $description, $data);
    if ($status === true) {
      echo "<script>location.replace('./bouquet_list.php')</script>";

    } else {
      $invalid = $status;
    }
  }
  }


}
?>



  <main class="main">

    <section id="pricing" class="pricing section light-background">
      <div class="card mx-auto" style="width: 500px;margin-top: 100px;">
        <div class="plant-item p-4">
          <h3>Add Bouquet</h3>
          <div class="card-body">
            <?php if ($invalid !== "" && $invalid !== "err") { ?>
              <div class="alert alert-danger"><?= $invalid ?></div>
            <?php } ?>
            <form method="post" enctype="multipart/form-data">
              <div class="form-group my-3">
                <label class="form-label">Bouquet Name</label>
                <input type="text" name="bouquetName" class="form-control" value="<?= $bouquetName ?>">
                <div class="validation-message" style="font-size:12px; color:red; line-height:25px; height:25px">
                  <?= $bouquetNameErr ?>
                </div>
              </div>            
              <div class="form-group my-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" value="<?= $price ?>">
                <div class="validation-message" style="font-size:12px; color:red; line-height:25px; height:25px">
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



  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">About Us</h3>
            <p class="mb-4">
              There live the blind texts. Separated they live in Bookmarksgrove
              right at the coast of the Semantics, a large language ocean.
            </p>
            <p class="mb-0">
              <a href="#" class="btn-learn-more">Learn more</a>
            </p>
          </div>
        </div>
        cv class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
        <div class="widget">
          <h3 class="widget-heading">Navigation</h3>
          <ul class="list-unstyled float-start me-5">
            <li><a href="#">Overview</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Find Buyers</a></li>
          </ul>
          <ul class="list-unstyled float-start">
            <li><a href="#">Overview</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pl-lg-5">
        <div class="widget">
          <h3 class="widget-heading">Recent Posts</h3>
          <ul class="list-unstyled footer-blog-entry">
            <li>
              <span class="d-block date">May 3, 2020</span>
              <a href="#">There live the Blind Texts</a>
            </li>
            <li>
              <span class="d-block date">May 3, 2020</span>
              <a href="#">Separated they live in Bookmarksgrove right</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 pl-lg-5">
        <div class="widget">
          <h3 class="widget-heading">Connect</h3>
          <ul class="list-unstyled social-icons light mb-3">
            <li>
              <a href="#"><span class="bi bi-facebook"></span></a>
            </li>
            <li>
              <a href="#"><span class="bi bi-twitter-x"></span></a>
            </li>
            <li>
              <a href="#"><span class="bi bi-linkedin"></span></a>
            </li>
            <li>
              <a href="#"><span class="bi bi-google"></span></a>
            </li>
            <li>
              <a href="#"><span class="bi bi-google-play"></span></a>
            </li>
          </ul>
        </div>

        <div class="widget">
          <div class="footer-subscribe">
            <h3 class="widget-heading">Subscribe</h3>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="mb-2">
                <input type="text" class="form-control" name="email" placeholder="Enter your email">

                <button type="submit" class="btn btn-link">
                  <span class="bi bi-arrow-right"></span>
                </button>
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                Your subscription request has been sent. Thank you!
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>