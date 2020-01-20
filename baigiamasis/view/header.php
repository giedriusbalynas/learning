<?php
// include()
session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>CoolShop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">

  <!-- MANO CSS visada pats zemiausias!!! -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <!-- Navbaras -->
  <nav class="container-fluid navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <a class="navbar-brand ml-3" href="index.php">
      <img src="../image/logo.png" width="40" height="40" alt="CoolShopLogo">
    </a>
    <form class="form-inline w-75" action="search.php" method="POST">
      <input class="form-control mr-2 w-50" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item aukstis-50 pt-1">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active aukstis-50 pt-1">
          <a class="nav-link " href="browse.php">Browse</a>
        </li>
        <li class="nav-item dropdown aukstis-50 pt-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About
          </a>
          <div class="dropdown-menu mb-2" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.php#to-about">About Us</a>
            <a class="dropdown-item" href="#">License agreement</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" id="contacts" href="#">Contact Us</a>
          </div>
          <br>
        </li>

        <?php
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])){  ?>
          <li class="nav-item loged">
            <a href="prekiuKrepselis.php" class="fa fa-shopping-cart btn-sm active alink1 text-light" role="button" aria-pressed="true"></a>
          </li>
          <li class="nav-item dropdown dropleft loged">
            <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hi, <?php echo $_SESSION['user']['name'] ?>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="yourOrders.php">Your orders</a>
              <a class="dropdown-item" href="editProfile.php">Edit profile</a>
              <a class="dropdown-item" href="changePw.php">Change password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../controler/logout.php">Log out</a>
            </div>
          </li>
        <!-- <script>
        // document.getElementsByClassName("not-loged").style.display = "none";
        // document.getElementsByClassName("loged").style.display = "show";
        // </script> -->
        <?php }
        else {  ?>
        <li class="nav-item padding-8 not-loged">
          <div class="dropdown dropleft">
            <button class="btn btn-light btn-sm dropdown-toggle active" aria-pressed="true" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</button>
            <form class="dropdown-menu p-3" method="post">
              <div class="form-group">
                <label for="email-login">Email address</label>
                <input type="email" class="form-control plotis-200" id="email-login" placeholder="Email">
                <li id="msg_email_login"></li>
              </div>
              <div class="form-group ">
                <label for="password-login">Password</label>
                <input type="password" class="form-control" id="password-login" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                <label class="form-check-label mb-2" for="dropdownCheck2">
                  Remember me
                </label>
              </div>
              <button id="login" type="submit" class="btn btn-secondary">Sign in</button>
            </form>
          </div>
        </li>
        <li class="nav-item padding-8 not-loged">
          <a href="register.php" class="btn btn-secondary btn-sm active px-0 mr-1 plotis-65" role="button" aria-pressed="true">Sign-up</a>
        </li>
        <script>
        // document.getElementsByClassName("loged").style.display = "none";
        // document.getElementsByClassName("not-loged").style.display = "show";
        </script>

        <?php
      }
      ?>


      </ul>
    </div>
  </nav>
