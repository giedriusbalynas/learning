<?php
//PHP konstantos
define('DB_PAVADINIMAS', 'eshop');
define('DB_TIPAS', 'localhost');
define('MYSQL_USER_VARDAS', 'root');
define('MYSQL_USER_PASS', 'root');

// 0 isjungta; 1 rodo pagrindines; 2 rodo visus pranesimus.
define('DEBUG_MODE', 0);

// mysqli_connect( [$host, $user, $password, $database, $port, $socket])
$prisijungimas = mysqli_connect(DB_TIPAS, MYSQL_USER_VARDAS, MYSQL_USER_PASS, DB_PAVADINIMAS);
mysqli_set_charset($prisijungimas, "UTF8"); // ijungia LT kalba mySQL'e
//Prisijungimas prie Db ir debug.
function getPrisijungimas(){
  global $prisijungimas; // paskelbiu, kad noriu prieti prie globalaus kintamojo $prisijungimas
  if ($prisijungimas == false) {
    if (DEBUG_MODE > 0) {
      echo "ERROR: prie DB prisijungti nepavyko <br>";
      echo mysqli_connect_error ($prisijungimas);
          }
    return NULL;
  } else {
    if (DEBUG_MODE > 1) {
      // code...
      echo "Prisijungimas prie DB sekmingas";
    }
    return $prisijungimas;
  }
}
//getPrisijungimas(); //test
