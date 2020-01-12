<?php
      session_start();
      include('header.php');
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
  <main class="col m-4 p-2">
      <h2 class="text-center">Prekiu krepselis</h2>
      <table class="bg-light m-4 p-2 float-left border border-dark" id="prekes">
        <tr class="border border-dark">
          <th>Nuotrauka</th>
          <th>Pavadinimas</th>
          <th>Kiekis</th>
          <th>Suma</th>
          <th>Data</th>

        </tr>
        <tr>
          <td><img src="../image/prekes/<?php echo $image['pav'] ?>" alt="<?php echo $image['alt'] ?>"> </td>
          <td><?php print_r( $_SESSION['vezimelis']) ?></td>
          <td>kiekis</td>
          <td>suma</td>
          <td>data</td>
        </tr>
      </table>



  </main>
</div>
</div>
<?php include('footer.php');  ?>
