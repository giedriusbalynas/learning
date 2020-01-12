<?php include('header.php');
      include('../controler/prisijungimas.php');
      include('../controler/preke-functions.php');
      include('../controler/img-functions.php');
      $id = $_GET['x'];
      $preke = getPreke($id);
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
  <main class="col p-5">
      <div class="">
        <h2 class="text-center m-3 pb-5">Prekes redagavimas</h2>
        <form class="" action="../controler/prekeEdit.php" method="post">
          <input class="m-2 px-1" type="hidden" name="id" value="<?php echo $preke['id'] ?>"><br>
          <input class="m-2 px-1" type="text" name="pavadinimas" value="<?php echo $preke['pavadinimas'] ?>" placeholder="Prekes pavadinimas"><br>
          <textarea class="m-2 px-1" name="aprasymas" rows="8" cols="80" placeholder="Prekes aprasymas"><?php echo $preke['aprasymas'] ?></textarea><br>
          <input class="m-2 px-1" type="number" min="1" step="any" name="kaina" value="<?php echo $preke['kaina'] ?>" placeholder="Prekes kaina"><br>
          <input class="m-2 px-1" type="number" name="kiekis" value="<?php echo $preke['kiekis'] ?>" placeholder="Prekes kiekis"><br>
          <input class="m-2 px-1" type="text" name="nuolaida" value="<?php echo $preke['nuolaida'] ?>" placeholder="Prekes nuolaida"><br>
          <input class="m-2" type="file" placeholder="Ikelkite nuotrauka" name="fileToUpload" id="fileToUpload "><br>
          <button class="btn btn-dark m-2 mt-5" type="submit" name="button">Redaguoti preke</button>
        </form>

      </div>
  </main>
</div>
</div>
<?php include('footer.php');  ?>
