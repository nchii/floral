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

<div class="index-page">

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
      <div class="card m-3 p-3 " style="border:none;">
        <div class="row">
          <div class="card col-sm-5 ">


            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

              <form style="width: 23rem;" method="post">

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register to <span
                    class="sitename">Flora</span></h3>

                <div data-mdb-input-init class="form-outline mb-4 form-floating">
                  <input type="text" id="name" class="form-control " />
                  <label class="form-label" for="name">Name</label>
                </div>


                <div data-mdb-input-init class="form-outline mb-4 form-floating">
                  <input type="email" id="email" class="form-control " />
                  <label class="form-label" for="email">Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4 form-floating">
                  <input type="tel" id="phone" class="form-control " />
                  <label class="form-label" for="phone">Phone Number</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4 form-floating">
                  <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                  <label class="form-label" for="address"> Address</label>
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
                    style="background-color: var(--accent-color);color: var(--contrast-color);border-radius: 30px;padding: 8px 30px;border: 2px solid transparent;transition: 0.3s all ease-in-out;font-size: 14px;">Sign
                    up</a>
                </div>
              </form>

            </div>

          </div>
          <div class="col-sm-7 px-0 " style="background-image:url(images/sunflower.png)">
            
          </div>
        </div>
      </div>
    </section>
    <script>
        let show = $("#show");
        let password = $("#password");
        show.on("click",()=>{
            if(show.is(":checked")){
                password.get(0).type = "text";
            }else{
                password.get(0).type = "password";
            }
        })
    </script>
  </body>
      </html>