<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="plants.php">Plants</a></li>
    <li><a href="bouquets.php">Bouquets</a></li>
    <li><a href="customize.php">Customize</a></li>
    <li><a href="cart_list.php">
      <span class="position-relative">
        &#x1F6D2;
        <?php 
          $count = 0;
          if(isset($_SESSION['cart'])){
            foreach ($_SESSION['cart'] as $key => $plant) {
              $count += $plant['quantity'];
            }
          }
        ?>
        <?php if($count > 0){ ?>
          <div class="badge rounded-pill bg-danger" style="position:absolute;right:-15px;top:-8px;font-size:8px;"><?= $count ?></div>
        <?php } ?>
      </span>
    </a></li>
    <li class="dropdown">
      <img src="assets/img/home1.png" alt="" style="width: 45px; height: 45px; border-radius: 50%; cursor: pointer;" class="dropdown-toggle" data-toggle="dropdown">
      <ul class="dropdown-menu">
      <li><a href="profile.php">Profile</a></li>
      <li>
        <form method="post" style="display:inline; padding:10px;">
          <button name="logout" style="background:none;border:none;padding:5px;color:inherit;cursor:pointer; font-size: 14px;">Log out</button>
        </form>
        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
          }
        ?>
      </li>
      </ul>
    </li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
</div>
  </header>