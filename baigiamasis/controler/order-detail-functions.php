<?php

//CRUD
function getOrderDetail($nr){
  $manoSQL = "SELECT * FROM order_details WHERE order_id = '$nr' ";
  $rezultataiMysqlObjekt = mysqli_query(getPrisijungimas(), $manoSQL);
  return $rezultataiMysqlObjekt;
}
function createOrderDetail($order_id, $prekes_id, $kiekis)
{
    $prekes_id = htmlspecialchars($prekes_id, ENT_QUOTES);
    $kiekis = htmlspecialchars($kiekis, ENT_QUOTES);
    $order_id = htmlspecialchars($order_id, ENT_QUOTES);
    $manoSQL = "INSERT INTO order_details
  VALUES (NULL, '$prekes_id', '$order_id', '$kiekis')
  ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false && DEBUG_MODE > 0) {
        echo "ERROR: nepavyko sukurti uzsakymo!!! <br>";
    }
}
function deleteOrderDetail($nr){
  $manoSQL = "DELETE FROM order_details WHERE order_id = '$nr'";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  // debug
  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: Nepavyko istrinti $nr gydytojo is DB <br>";
  }
}
function updateOrderDetail($nr, $order_id, $prekes_id, $kiekis){
  $nr = htmlspecialchars($nr, ENT_QUOTES);
  $order_id = htmlspecialchars($pavadinimas, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $prekes_id = htmlspecialchars($aprasymas, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $kiekis = htmlspecialchars($kaina, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $manoSQL = "UPDATE order_details
                SET
                    pavadinimas = '$order_id',
                    aprasymas = '$prekes_id',
                    kaina = '$kiekis',
              WHERE order_id = $nr
                ";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  //debug
  if ($result == false && DEBUG_MODE > 0){
    echo "ERROR: nepavyko redaguoti $nr gydytojo DB-je!";
  }
}
function getOrderDetails ($limit = 999999) {
  $sql = "Select * FROM prekes LIMIT $limit";
  $result = mysqli_query(getPrisijungimas(), $sql);
  return $result;
}
