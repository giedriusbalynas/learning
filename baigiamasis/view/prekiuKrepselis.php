<?php
      session_start();
      include('header.php');
      include('../controler/prisijungimas.php');
      include('../controler/preke-functions.php');
      include('../controler/img-functions.php');

      $prekesSes = $_SESSION['vezimelis'];
      if(isset($_SESSION['vezimelis'])){
        $kiekis = 0;
        $suma = 0;

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
      <form class="" action="../controler/order.php" method="post">
      <div class="ml-4">
        <a class="btn btn-outline-danger" href="../controler/prekiuKrepselisEmpty.php">Valyti krepseli</a>
        <button class="btn btn-dark" href="../controler/order.php?sum=<?php  ?>">Vykdyti uzsakyma</a>
      </div>


      <table class="bg-light m-4 p-2 float-left border border-dark" id="prekes">
        <tr class="border border-dark">
          <th></th>
          <th>Nuotrauka</th>
          <th>Pavadinimas</th>
          <th>Kaina</th>
          <th>Kiekis</th>
          <th>Suma</th>
          <th></th>
        </tr>
    <?php
    $k = 0;

      foreach ($prekesSes as $prekesSes):
        $suma = $prekesSes['kiekis']*$prekesSes['kaina'];


		?>
        <tr>
          <td><input class="inputas" type="hidden" name="sesijos-prekes-id[]" value="<?php echo $prekesSes['id'] ?>">
              <input class="inputas" type="hidden" name="prekes-kaina[]" value="<?php echo $prekesSes['kaina'] ?>">
          </td>
          <td><img id="krepselis-img" src="../image/prekes/<?php echo $prekesSes['pav'] ?>" alt="<?php echo $prekesSes['alt'] ?>"> </td>
          <td><?php echo $prekesSes['pavadinimas'] ?></td>
          <td class="kaina"><?php echo $prekesSes['kaina'] ?></td>
          <td>
            <input class="textbox inputo-plotis-40px" type="number" name='kiekis[]' value="<?php echo $prekesSes['kiekis'] ?>" min="1">
          </td>
          <td class="suma plotis-80px"><?php echo $suma ?></td>
          <td class="inputo-plotis-40px"><a class="fa fa-times py-0 px-2 alink1 text-danger" href="../controler/prekiuKrepselisRemove.php?id=<?php echo $prekesSes["id"] ?>"></a> </td>
        </tr>
      <?php
      $kiekis += $prekesSes["kiekis"];
      $suma += ($prekesSes["kaina"]*$prekesSes["kiekis"]);
      $k++;
      endforeach ?>
        <tr class="border border-dark">
          <td></td>
          <td colspan="3" align="right"><strong>Viso:</strong></td>
          <td class="kiekis-total" align="" colspan="1"><?php echo $kiekis; ?></td>
          <td align="" colspan="1"><strong><?php echo "&euro; "?><span class="suma-total"><?php echo "".number_format($suma, 2) ?></span></strong></td>
          <td></td>
        </tr>
        </table>
      </form>
          <?php
        } else {
        ?>
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
        <div class="col text-center">
          <h2 class="p-5">Prekiu krepselis tuscias</h2>
        </div>
        <?php
        }
        ?>
        </div>
  </main>
</div>
</div>
<?php include('footer.php');  ?>
