<?php include('header.php'); ?>

  <!-- Register forma -->
  <form class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h3 class="py-5"> Registration form</h3>

      </div>

    </div>
    <div class="row p-3">
      <div class="col">
        <input type="Username" class="form-control" placeholder="Username">
      </div>
      <div class="col">
        <input type="email" class="form-control" placeholder="Email">
      </div>
    </div>
    <div class="row p-3">
      <div class="col">
        <input type="password" class="form-control" placeholder="Password">
      </div>
      <div class="col">
        <input type="password" class="form-control " placeholder="Repeat password">
      </div>
    </div>
    <div class="row  p-3">
      <div class="col">
        <input type="text" class="form-control" placeholder="First name">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Last name">
      </div>
    </div>
    <div class="row  m-auto py-3">
      <div class="col-7">
        <input type="text" class="form-control" placeholder="Address">
      </div>
      <div class="col px-0">
        <input type="text" class="form-control px-2" placeholder="City">
      </div>
      <div class="col">
        <input type="text" class="form-control px-2" placeholder="Zip">
      </div>
      <div class="mt-5">
        <div class="custom-control custom-checkbox pb-2 ml-3">
          <input type="checkbox" class="custom-control-input" id="customCheck1">
          <label class="custom-control-label" for="customCheck1">By checking this checkbox you accept the terms of <a href="privacy-policy" class="alink"> <strong>privacy policy</strong></a>.</label>
        </div>
        <div class="custom-control custom-checkbox ml-3">
          <input type="checkbox" class="custom-control-input" id="customCheck2">
          <label class="custom-control-label" for="customCheck1">By checking this checkbox you accept the terms of <a href="#" class="alink"><strong>licence agreement</strong>.</label>
        </div>
      </div>
    </div>
    <br>
    <div class="row py-5">
      <div class="col ml-5">
        <a href="#" class="btn btn-secondary btn-md active mr-1" role="button" aria-pressed="true">Submit</a>
        <a href="#" class="btn btn-light btn-md active" role="button" aria-pressed="true">Discard</a>
      </div>
    </div>
  </form>




  <?php include('footer.php');  ?>
