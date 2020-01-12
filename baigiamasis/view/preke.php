<?php include('header.php');
      include('../controler/prisijungimas.php');
      include('../controler/preke-functions.php');
      include('../controler/img-functions.php');
      $id = $_GET['x'];
      $preke = getPreke($id);
      $image = getImg($id);

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
  <main class="col">
    <div class="bg-light m-4 p-2 float-left border border-dark rounded-lg" id="prekes">
      <div class="d-flex justify-content-end">
        <a href="prekeRedaguoti.php?x=<?php echo $preke['id'] ?>" class="fa fa-pencil text-dark alink1 p-2"></a> <?php // IDEA: edit preke ?>
        <a href="../controler/prekeDelete.php?x=<?php echo $preke['id'] ?>" class="fa fa-trash-o text-dark alink1 p-2"></a> <?php // IDEA: delete preke ?>
      </div>
        <h2 class="text-center pb-4" ><?php echo $preke['pavadinimas'] ?></h2>
        <img id="preke-image" class="float-left text-center" src="../image/prekes/<?php echo $image['pav']?>" alt="<?php echo $image['alt'] ?>">
        <p class="p-5 mb-5 text-center"><?php echo $preke['aprasymas'] ?></p>
        <p class="text-right align-bottom mr-2">Likutis sandelyje: <?php echo $preke['kiekis']."<br>" ?></p>
        <div class="float-stop d-flex justify-content-end mr-2">
          <a href="#" class="float-stop btn btn-outline-dark">Pirkti: <?php echo $preke['kaina'] ?>&euro;</a>
        </div>
    </div>


  </main>
</div>
</div>
<?php include('footer.php');  ?>
