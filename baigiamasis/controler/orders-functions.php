<?php
//CRUD
function getOrder($nr){
  $manoSQL = "SELECT * FROM orders WHERE order_id = '$nr' ";
  $rezultataiMysqlObjekt = mysqli_query(getPrisijungimas(), $manoSQL);
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObjekt);
  return $rezultataiArray;
}
function createOrder($vardas, $pavarde, $adresas, $zip, $miestas, $salis, $suma){
  $vardas = htmlspecialchars($vardas, ENT_QUOTES);
  $pavarde = htmlspecialchars($pavarde, ENT_QUOTES);
  $adresas = htmlspecialchars($adresas, ENT_QUOTES);
  $zip = htmlspecialchars($zip, ENT_QUOTES);
  $miestas = htmlspecialchars($miestas, ENT_QUOTES);
  $salis = htmlspecialchars($salis, ENT_QUOTES);
  $suma = htmlspecialchars($suma, ENT_QUOTES);
  $manoSQL = "INSERT INTO orders
              VALUES (NULL,
                '$vardas',
                '$pavarde',
                '$adresas',
                '$zip',
                '$miestas',
                '$salis',
                '$suma',
                NULL)";

    $connection = getprisijungimas();
  $result = mysqli_query($connection, $manoSQL);
  $last_id = $connection->insert_id;

  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: nepavyko sukurti naujo uzsakymo!!! <br>";
  }
    return $last_id;
}
function deleteOrder($nr){
  $manoSQL = "DELETE FROM orders WHERE order_id = '$nr'";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  // debug
  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: Nepavyko istrinti $nr uzsakymo is DB <br>";
  }
}

function getOrders ($limit = 999999) {
  $sql = "Select * FROM orders LIMIT $limit";
  $result = mysqli_query(getPrisijungimas(), $sql);
  return $result;
}
function getOrderByName($name, $lname){
  $manoSQL = "SELECT * FROM orders WHERE vardas = '$name' AND pavarde = '$lname'";
  $rezultataiMysqlObjekt = mysqli_query(getPrisijungimas(), $manoSQL);
  return $rezultataiMysqlObjekt;

}


// function updateOrder($nr, $vardas, $pavarde, $adresas, $suma,){
//   $nr = htmlspecialchars($nr, ENT_QUOTES);
//   $pavadinimas = htmlspecialchars($pavadinimas, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
//   $aprasymas = htmlspecialchars($aprasymas, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
//   $kaina = htmlspecialchars($kaina, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
//   $kiekis = htmlspecialchars($kiekis, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
//   $nuolaida = htmlspecialchars($nuolaida, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
//   $manoSQL = "UPDATE prekes
//                 SET
//                     pavadinimas = '$vardas',
//                     aprasymas = '$pavarde',
//                     kaina = '$adresas',
//                     nuolaida = '$suma',
//                     data = 'NULL'
//               WHERE id = $nr
//               LIMIT 1
//               ";
//   $result = mysqli_query(getPrisijungimas(), $manoSQL);
//   //debug
//   if ($result == false && DEBUG_MODE > 0){
//     echo "ERROR: nepavyko redaguoti $nr gydytojo DB-je!";
//   }
// }
