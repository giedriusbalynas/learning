<?php include('header.php'); ?>

  <!-- Register forma -->
  <form class="container" method="POST">
    <div class="row">
      <div class="col-12 text-center">
        <h3 class="py-5"> Registration form</h3>
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
        <input id="email" type="email" class="form-control" name="email" placeholder="Email" autofocus>
        <li id="msg_email"></li>
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
        <input id="password" type="password" class="form-control" name="password" placeholder="Password" autofocus>
        <li id="msg_password"></li>
      </div>
      <div class="col">
        <input id="password-repeat" type="password" class="form-control" name="password-repeat" placeholder="Repeat password">
        <li id="msg_password_repeat"></li>
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
        <input id="name" type="text" class="form-control" name="name" placeholder="First name" autofocus>
        <li id="msg_name"></li>
      </div>
      <div class="col">
        <input id="lname" type="text" class="form-control" name="lname" placeholder="Last name" autofocus>
        <li id="msg_lname"></li>
      </div>
    </div>
    <div class="row m-auto py-3">
      <div class="col-7">
        <input id="address" type="text" class="form-control" name="address" placeholder="Address" autofocus>
        <li id="msg_address"></li>
      </div>
      <div class="col px-0">
        <input id="city" type="text" class="form-control px-2" name="city" placeholder="City" autofocus>
        <li id="msg_city"></li>
      </div>
      <div class="col">
        <input id="zip" type="text" class="form-control px-2" name="zip" placeholder="Zip" autofocus>
        <li id="msg_zip"></li>
      </div>
    </div>
    <div class="row m-auto py-3">
      <div class="col">
        <input id="country" type="text" class="form-control" name="country" placeholder="Country" autofocus>
        <li id="msg_country"></li>
      </div>
      <div class="col">
        <input id="tel" type="tel" class="form-control" name="tel" placeholder="Phone number" value="+370" autofocus>
        <li id="msg_tel"></li>
      </div>
    </div>
    <div class="custom-control custom-checkbox pb-2 ml-3">
      <input type="checkbox" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1">By checking this checkbox you accept the terms of <a href="privacy-policy.php" class="alink"> <strong>privacy policy</strong></a>.</label>
    </div>
    <br>
    <div class="row py-5">
      <div class="col ml-5">
        <button id="register" class="btn btn-secondary btn-md active mr-1" type="submit" name="button">Submit</button>
        <a href="index.php" class="btn btn-light btn-md active" role="button" aria-pressed="true">Discard</a>
      </div>
    </div>
  </form>




  <?php include('footer.php');  ?>
