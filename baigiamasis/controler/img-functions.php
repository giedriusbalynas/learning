<?php
//CRUD
//grazina konkretu gydytojo duomenis is DB
//$nr - grazina norimo gydytojo 'id' is DB
//return - grazina masyva
function getImg($nr){
  //visada SQL koda pratestuot terminale!!!!
  $manoSQL = "SELECT * FROM img WHERE id = '$nr' "; //nepamirst ant variable kabuciu uzdet!
  $rezultataiMysqlObjekt = mysqli_query(getPrisijungimas(), $manoSQL);
  //test
  // print_r ($rezultataiMysqlObjekt);
  //is mysqli objekto paimame viena eilute ir paverciam i array.
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObjekt);
  // echo "<hr>";
  //test
  //print_r ($rezultataiArray);
  return $rezultataiArray;
}
//getPreke(5);
// //testas ar isveda gydytoju array:
//   $gydytojas1 = getDoctor(1);
//   $gydytojas2 = getDoctor(2);
//   $gydytojas3 = getDoctor(3);
//   print_r ($gydytojas1);
//   echo "<br />";
//   print_r ($gydytojas2);
//   echo "<br />";
//   print_r ($gydytojas3);
//   echo "<br />";
function createImg($prekes_id, $pavadinimas, $alt){
  $prekes_id = htmlspecialchars($prekes_id, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $pavadinimas = htmlspecialchars($pavadinimas, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $alt = htmlspecialchars($alt, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $manoSQL = "INSERT INTO img
              VALUES (NULL, '$prekes_id', '$pavadinimas', '$alt')
             ";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: nepavyko sukurti naujo gydytojo DB-je!!! <br>";
    //sitas ifas yra testas
  }
}
//createPreke('Testas', 'Testas testukas pratestavimui', 500, 1, 20);
// createDoctor('Styvas', 'Bardaciokas');

function deleteImg($nr){
  $manoSQL = "DELETE FROM img WHERE id = '$nr'";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  // debug
  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: Nepavyko istrinti $nr gydytojo is DB <br>";
  }
}
 // deletePreke(12);
function updateImg ($nr, $prekes_id, $pavadinimas, $alt){
  $nr = htmlspecialchars($nr, ENT_QUOTES);
  $prekes_id = htmlspecialchars($prekes_id, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $pavadinimas = htmlspecialchars($pavadinimas, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $alt = htmlspecialchars($alt, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $manoSQL = "UPDATE img
                SET
                    id = '$prekes_id',
                    pav = '$pavadinimas',
                    alt = '$alt',
              WHERE img_id = $nr
              LIMIT 1
              ";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  //debug
  if ($result == false && DEBUG_MODE > 0){
    echo "ERROR: nepavyko redaguoti $nr gydytojo DB-je!";
  }
}
//  updateDoctor(31, "Testas", "Testukas");



function getAllImg ($limit = 999999) {
  $sql = "Select * FROM img LIMIT $limit";
  $result = mysqli_query(getPrisijungimas(), $sql);
  return $result;
}
// $preke = getPrekes();
// print_r($preke);
// $gydytojai = getDoctors();
// // print_r($gydytojai);
// //visu gydytoju isvedimas:
// $gyd = mysqli_fetch_assoc($gydytojai);
// while ($gyd){
//   echo $gyd['name'] . $gyd['name'] . "<br />"; //1 budas
//   echo "{$gyd['name']} {$gyd['lname']} <br>";  //2 budas
//   echo "$gyd[name] $gyd[lname] <br>";          //3 budas
//   //is visu paimam sekanti gydytoja:
//   $gyd = mysqli_fetch_assoc($gydytojai);
//}
