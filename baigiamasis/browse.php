  <?php include('header.php');
        include('controler/prisijungimas.php');
        include('controler/preke-functions.php');
        include('controler/img-functions.php');
  ?>

  <!-- prekiu katalogas -->
  <div class="container-fluid">
    <div class="row">
    <aside class="sidebar bg-dark position-relative text-light d-none d-md-block">
      <h4 class="text-center m-3">Categories</h4>
        <ul class="nav-sidebar">
          <li><a href="#" class="text-light alink1">Men</a></li>
          <li><a href="#" class="text-light alink1">Women</a></li>
          <li><a href="#" class="text-light alink1">Kids</a></li>
          <li><a href="#" class="text-light alink1">Sweaters</a></li>
          <li><a href="#" class="text-light alink1">Hoodies</a></li>
          <li><a href="#" class="text-light alink1">T-shirts</a></li>
          <li><a href="#" class="text-light alink1">Polo t-shirts</a></li>
          <li><a href="#" class="text-light alink1">Pants</a></li>
          <li><a href="#" class="text-light alink1">Shorts</a></li>
          <li><a href="#" class="text-light alink1">Accesories</a></li>
        </ul>
    </aside>
    <main class="col py-5">
      <div class="row d-flex justify-content-around">
      <?php
          $prekes = getPrekes();
          $preke = mysqli_fetch_assoc($prekes);
          $image = getAllImg();
          $img = mysqli_fetch_assoc($image);
          while ($preke){
       ?>
       <a href="#" class="alink">
        <div class="bg-info laikinas m-4 float-left">
            <h3 class="text-center"><?php echo $preke['pavadinimas'] ?></h3>
            <img src="image/prekes/<?php echo $img['pav'] ?>" alt="<?php echo $img['alt'] ?>">
            <p><?php echo $preke['aprasymas'] ?></p>
        </div>
      </a>
          <?php
            $preke = mysqli_fetch_assoc($prekes);
            $img = mysqli_fetch_assoc($image);
            };
         ?>
      </div>
    </main>
  </div>
</div>
  <?php include('footer.php');  ?>
<a href="#"></a>
