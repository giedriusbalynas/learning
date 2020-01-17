<?php
//CRUD
function getPreke($nr){
  $manoSQL = "SELECT * FROM prekes WHERE id = '$nr' ";
  $rezultataiMysqlObjekt = mysqli_query(getPrisijungimas(), $manoSQL);
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObjekt);
  return $rezultataiArray;
}
function createPreke($pavadinimas, $aprasymas, $kaina, $kiekis, $nuolaida){
  $pavadinimas = htmlspecialchars($pavadinimas, ENT_QUOTES);
  $aprasymas = htmlspecialchars($aprasymas, ENT_QUOTES);
  $kaina = htmlspecialchars($kaina, ENT_QUOTES);
  $kiekis = htmlspecialchars($kiekis, ENT_QUOTES);
  $nuolaida = htmlspecialchars($nuolaida, ENT_QUOTES);
  $manoSQL = "INSERT INTO prekes
                VALUES (NULL, '$pavadinimas', '$aprasymas', '$kaina', '$kiekis', '$nuolaida')
             ";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: nepavyko sukurti naujo gydytojo DB-je!!! <br>";
    //sitas ifas yra testas
  }
}
function deletePreke($nr){
  $manoSQL = "DELETE FROM prekes WHERE id = '$nr'";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  // debug
  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: Nepavyko istrinti $nr gydytojo is DB <br>";
  }
}
function updatePreke($nr, $pavadinimas, $aprasymas, $kaina, $kiekis, $nuolaida){
  $nr = htmlspecialchars($nr, ENT_QUOTES);
  $pavadinimas = htmlspecialchars($pavadinimas, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $aprasymas = htmlspecialchars($aprasymas, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $kaina = htmlspecialchars($kaina, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $kiekis = htmlspecialchars($kiekis, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $nuolaida = htmlspecialchars($nuolaida, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $manoSQL = "UPDATE prekes
                SET
                    pavadinimas = '$pavadinimas',
                    aprasymas = '$aprasymas',
                    kaina = '$kaina',
                    nuolaida = '$nuolaida',
                    kiekis = '$kiekis'
              WHERE id = $nr
              LIMIT 1
              ";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  //debug
  if ($result == false && DEBUG_MODE > 0){
    echo "ERROR: nepavyko redaguoti $nr gydytojo DB-je!";
  }
}
function getPrekes ($limit = 999999) {
  $sql = "Select * FROM prekes LIMIT $limit";
  $result = mysqli_query(getPrisijungimas(), $sql);
  return $result;
}
