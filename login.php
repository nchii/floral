<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Active Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->

      </a>
      <?php
      if (isset($_POST['username'])) {

      }
      ?>
    </div>
  </header>

  <body>
    <section class="vh-100">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 ">


            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

              <form style="width: 23rem;" method="post">

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in to <span
                    class="sitename">Flora</span></h3>

                <div data-mdb-input-init class="form-outline mb-4 form-floating">
                  <input type="email" id="email" class="form-control " />
                  <label class="form-label" for="form2Example18">Email address</label>
                </div>

                <div>
                <div data-mdb-input-init class="form-outline mb-2 form-floating">
                  <input type="password" id="form2Example28" class="form-control " />
                  <label class="form-label" for="form2Example28">Password</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" id="show" class="form-check-input">
                  <label class="form-check-label " style="font-size:13px;" for="show">
                    Show Password
                  </label>
                </div>
                </div>
                <div class="pt-1 mt-5 mb-4">
                  <a href="" class="btn "
                    style="background-color: var(--accent-color);color: var(--contrast-color);border-radius: 30px;padding: 8px 30px;border: 2px solid transparent;transition: 0.3s all ease-in-out;font-size: 14px;">Log
                    in</a>
                </div>
                <p>Don't have an account? <a href="#!" style="color:var(--accent-color)">Register Here</a></p>

              </form>

            </div>

          </div>
          <div class="col-sm-6 px-0 ">
            <img src="images/sunflower.png" alt="Login image" class=" vh-80 "
              style="width:900px;object-fit: cover; object-position: left;">
          </div>
        </div>
      </div>
    </section>
  </body>