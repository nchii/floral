<?php session_start(); ?>
<link rel="stylesheet" href="./assets/css/style.css" />
<nav id="navmenu" class="navmenu">

  <ul>
    <form method="post">
      <div class="d-flex search">
        <i class="bi bi-search"></i>
        <input type="text" name="search" placeholder="Search" />
      </div>
    </form>
         
    <li><a href="index.php">Home</a></li>
    <li><a href="plants.php">Plants</a></li>
    <li><a href="bouquets.php">Bouquets</a></li>
    

    <!-- <li><a href="cart_list.php">
      <span class="position-relative">
        &#x1F6D2;
        <?php 
          // $count = 0;
          // if(isset($_SESSION['cart'])){
          //   foreach ($_SESSION['cart'] as $key => $plant) {
          //     $count += $plant['quantity'];
          //   }
          // }
        ?>
        <?php
        //  if($count > 0){ ?>
          <div class="badge rounded-pill bg-danger" style="position:absolute;right:-15px;top:-8px;font-size:8px;"><?= $count ?></div>
        <?php 
      //} ?>
      </span>
    </a></li> -->
    <li class="dropdown"><a href="#"><span>Log in</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="login.php">Log in</a></li>
        <li><a href="register.php">Sign up</a></li>
      </ul>
    </li>
    <!-- <li><a href="plants.php">Search</a></li>
    <li><a href="plants.php">Shopping Cart</a></li> -->
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>