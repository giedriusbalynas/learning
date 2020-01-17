  <?php
        session_start();
        include('header.php');
        include('../controler/prisijungimas.php');
        include('../controler/preke-functions.php');
        include('../controler/img-functions.php');


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
      <div class="d-flex justify-content-end pr-5">
        <a href="prekePrideti.php" class="btn btn-dark">Pridėti preke</a>
      </div>
      <div class="row d-flex justify-content-center">
      <?php
          $prekes = getPrekes();
          $preke = mysqli_fetch_assoc($prekes);

          while ($preke){
          $fotos = getImg($preke['id']);
       ?>
        <div class="bg-light laikinas m-4 p-2 float-left border border-dark rounded-lg">
          <div class="d-flex justify-content-end">
            <a href="prekeRedaguoti.php?x=<?php echo $preke['id'] ?>" class="fa fa-pencil text-dark alink1 p-2"></a> <?php // IDEA: edit preke ?>
            <a href="../controler/prekeDelete.php?x=<?php echo $preke['id'] ?>" class="fa fa-trash-o text-dark alink1 p-2"></a> <?php // IDEA: delete preke ?>
          </div>
            <a href="preke.php?x=<?php echo $preke['id'] ?>" class="alink1 text-dark">
              <h3 class=""><?php echo $preke['pavadinimas'] ?></h3>
            </a>
            <img id="preke-img" class="float-left" src="../image/prekes/<?php echo $fotos['pav'] ?>" alt="<?php echo $fotos['alt'] ?>">
            <p class=" "><?php echo $preke['aprasymas'] ?></p>
            <input class="inputo-plotis" type="number" name='kiekis' value="1" min="1">
            <div class="d-flex justify-content-end mr-2 float-stop">
              <a href="../controler/prekiuKrepselisAdd.php?x=<?php echo $preke['id'] ?>" class="kiekis-input btn btn-outline-dark fa fa-shopping-cart"> <?php echo $preke['kaina'] ?>&euro;</a>
            </div>
        </div>
          <?php
            $preke = mysqli_fetch_assoc($prekes);
            };
         ?>
      </div>
    </main>
  </div>
</div>
  <?php include('footer.php');  ?>
