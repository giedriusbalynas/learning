<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">

  <!-- MANO CSS visada pats zemiausias!!! -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Navbaras -->
  <nav class="container-fluid navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <a class="navbar-brand ml-3" href="index.php">
      <img src="image/logo.png" width="40" height="40" alt="CoolShopLogo">
    </a>
    <form class="form-inline w-75">
      <input class="form-control mr-2 w-50" type="search" placeholder="Search" aria-label="Search">
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

        <li class="nav-item padding-8">
          <div class="dropdown ">
            <button class="btn btn-light btn-sm dropdown-toggle active" aria-pressed="true" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</button>
            <form class="dropdown-menu p-4">
              <div class="form-group">
                <label for="Email2">Email address</label>
                <input type="email" class="form-control" id="Email2" placeholder="Email">
              </div>
              <div class="form-group ">
                <label for="Password2">Password</label>
                <input type="password" class="form-control" id="Password2" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                <label class="form-check-label mb-2" for="dropdownCheck2">
                  Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-secondary">Sign in</button>
            </form>
          </div>
        </li>
        <li class="nav-item padding-8">
          <a href="register.html" class="btn btn-secondary btn-sm active px-0 mr-1 plotis-65" role="button" aria-pressed="true">Sign-up</a>
        </li>
      </ul>
    </div>
  </nav>
