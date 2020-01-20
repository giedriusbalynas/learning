<?php
session_start();
include('header.php');
include('../controler/prisijungimas.php');
include('../controler/user-functions.php');
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
};
$getUser = getUser($user['id']);
 ?>

  <!-- Register forma -->
  <form class="container" action="../controler/userEdit.php" method="POST">
    <div class="row">
      <div class="col-12 text-center">
        <h3 class="py-5"> Edit profile</h3>
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
        <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $getUser['email'] ?>">
        <li id="msg_email"></li>
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
        <input id="name" type="text" class="form-control" name="name" placeholder="First name" value="<?php echo $getUser['name'] ?>">
        <li id="msg_name"></li>
      </div>
      <div class="col">
        <input id="lname" type="text" class="form-control" name="lname" placeholder="Last name" value="<?php echo $getUser['lname'] ?>">
        <li id="msg_lname"></li>
      </div>
    </div>
    <div class="row m-auto py-3">
      <div class="col-7">
        <input id="address" type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $getUser['address'] ?>">
        <li id="msg_address"></li>
      </div>
      <div class="col px-0">
        <input id="city" type="text" class="form-control px-2" name="city" placeholder="City" value="<?php echo $getUser['city'] ?>">
        <li id="msg_city"></li>
      </div>
      <div class="col">
        <input id="zip" type="text" class="form-control px-2" name="zip" placeholder="Zip" value="<?php echo $getUser['zip'] ?>">
        <li id="msg_zip"></li>
      </div>
    </div>
    <div class="row m-auto py-3">
      <div class="col">
        <input id="country" type="text" class="form-control" name="country" placeholder="Country" value="<?php echo $getUser['country'] ?>">
        <li id="msg_country"></li>
      </div>
      <div class="col">
        <input id="tel" type="tel" class="form-control" name="tel" placeholder="Phone number" value="<?php echo $getUser['tel'] ?>">
        <li id="msg_tel"></li>
      </div>
    </div>
    <div class="">
      <input type="hidden" name="id" value="<?php echo $getUser['id'] ?>">
      <input type="hidden" name="password" value="<?php echo $getUser['password'] ?>">
    </div>
    <br>
    <div class="row py-5">
      <div class="col ml-5">
        <button id="register" class="btn btn-secondary btn-md active mr-1" type="submit" name="button">Submit</button>
        <a href="index.php" class="btn btn-light btn-md active" role="button" aria-pressed="true">Discard</a>
      </div>
      <div class="">
        <a class="btn btn-outline-danger mr-4" href="../controler/userDelete.php?id=<?php echo $getUser['id'] ?>">Delete profile</a>
      </div>
    </div>
  </form>




  <?php include('footer.php');  ?>
