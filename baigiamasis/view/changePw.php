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

 <form class="container" action="../controler/changePassword.php" method="POST">
   <div class="row">
     <div class="col-12 text-center">
       <h3 class="py-5">Change password </h3>
     </div>
   </div>
   <div class="row p-3">
     <div class="col">
       <input type="hidden" class="form-control" name="email" placeholder="Email" autofocus value="<?php echo $getUser['email'] ?>">
     </div>
   </div>
   <div class="row p-3">
     <div class="col">
       <input id="password" type="password" class="form-control" name="password" placeholder="Password">
       <li id="msg_password"></li>
     </div>
     <div class="col">
       <input id="password-repeat" type="password" class="form-control" name="password-repeat" placeholder="Repeat password">
       <li id="msg_password_repeat"></li>
     </div>
   </div>
   <div class="row p-3">
     <div class="col">
       <input type="hidden" class="form-control" name="name" placeholder="First name" value="<?php echo $getUser['name'] ?>">
     </div>
     <div class="col">
       <input  type="hidden" class="form-control" name="lname" placeholder="Last name" value="<?php echo $getUser['lname'] ?>">
     </div>
   </div>
   <div class="row m-auto py-3">
     <div class="col-7">
       <input type="hidden" class="form-control" name="address" placeholder="Address" value="<?php echo $getUser['address'] ?>">
     </div>
     <div class="col px-0">
       <input type="hidden" class="form-control px-2" name="city" placeholder="City" value="<?php echo $getUser['city'] ?>">
     </div>
     <div class="col">
       <input type="hidden" class="form-control px-2" name="zip" placeholder="Zip" value="<?php echo $getUser['zip'] ?>">
     </div>
   </div>
   <div class="row m-auto py-3">
     <div class="col">
       <input type="hidden" class="form-control" name="country" placeholder="Country" value="<?php echo $getUser['country'] ?>">
     </div>
     <div class="col">
       <input type="hidden" class="form-control" name="tel" placeholder="Phone number" value="<?php echo $getUser['tel'] ?>">
     </div>
   </div>
   <div class="">
     <input type="hidden" name="id" value="<?php echo $getUser['id'] ?>">
   </div>
   <br>
   <div class="row py-5">
     <div class="col ml-5">
       <button class="btn btn-secondary btn-md active mr-1" type="submit" name="button">Submit</button>
       <a href="index.php" class="btn btn-light btn-md active" role="button" aria-pressed="true">Discard</a>
     </div>
   </div>
 </form>




  <?php include('footer.php');  ?>
