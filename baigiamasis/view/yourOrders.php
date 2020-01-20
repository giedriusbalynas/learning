<?php
  session_start();
  include('header.php');
  include('../controler/prisijungimas.php');
  include('../controler/order-detail-functions.php');
  include('../controler/orders-functions.php');
  include('../controler/preke-functions.php');

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

  if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
  };
?>

<div class="d-flex justify-content-center m-4">
  <h2>Your orders</h2>
</div>
<table class="bg-light m-4 p-2  border border-dark">
  <tr class="border border-dark">
    <th></th>
    <th>Uzsakymo nr.</th>
    <th>Uzsakymas</th>
    <th>Suma</th>
    <th>Uzsakymo data</th>
    <th></th>
  </tr>
  <?php
  $getOrder = getOrderByName($user['name'], $user['lname']);
  while ($row = mysqli_fetch_assoc($getOrder)) {
 ?>

  <tr>
    <td></td>
    <td><?php echo $row['order_id'] ?></td>
    <td><?php   $goods = getOrderDetail($row['order_id']);
               $i = 1;
               while ($rowDetail = mysqli_fetch_assoc($goods)) {
                 // cia reikia paimti prekes pavadinimui su id
                 $prekesPav = getPreke($rowDetail['id']);
                 // $unit = getPreke($rowDetail['id']);
                 echo $i.". ".$prekesPav['pavadinimas']." x".$rowDetail['kiekis']."</br>";
                 $i++;
               }
               echo "<hr />";
           ?>
    </td>
    <td><?php echo $row['suma'] ?></td>
    <td><?php echo $row['data'] ?></td>
    <td></td>
  </tr>

<?php   } ?>
</table>






<?php include('footer.php'); ?>
