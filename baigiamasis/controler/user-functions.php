<?php
//CRUD
function getUser($nr){
  $manoSQL = "SELECT * FROM users WHERE id = '$nr' ";
  $rezultataiMysqlObjekt = mysqli_query(getPrisijungimas(), $manoSQL);
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObjekt);
  return $rezultataiArray;
}
function createUser($name, $lname, $email, $password, $address, $city, $zip, $country, $tel){
  $name = htmlspecialchars($name, ENT_QUOTES);
  $lname = htmlspecialchars($lname, ENT_QUOTES);
  $email = htmlspecialchars($email, ENT_QUOTES);
  $password = htmlspecialchars($password, ENT_QUOTES);
  $address = htmlspecialchars($address, ENT_QUOTES);
  $city = htmlspecialchars($city, ENT_QUOTES);
  $zip = htmlspecialchars($zip, ENT_QUOTES);
  $country = htmlspecialchars($country, ENT_QUOTES);
  $tel = htmlspecialchars($tel, ENT_QUOTES);
  $manoSQL = "INSERT INTO users
                VALUES (NULL, '$name', '$lname', '$email', '$password', '$address', '$city', '$zip', '$country', '$tel')
             ";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: nepavyko sukurti naujo gydytojo DB-je!!! <br>";
    //sitas ifas yra testas
  }
}
function deleteUser($nr){
  $manoSQL = "DELETE FROM users WHERE id = '$nr'";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  // debug
  if ($result == false && DEBUG_MODE > 0) {
    echo "ERROR: Nepavyko istrinti $nr gydytojo is DB <br>";
  }
}
function updateUser($nr, $name, $lname, $email, $password, $address, $city, $zip, $country, $tel){
  $nr = htmlspecialchars($nr, ENT_QUOTES);
  $name = htmlspecialchars($name, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $lname = htmlspecialchars($lname, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $email = htmlspecialchars($email, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $password = htmlspecialchars($password, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $address = htmlspecialchars($address, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $city = htmlspecialchars($city, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $zip = htmlspecialchars($zip, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $country = htmlspecialchars($country, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $tel = htmlspecialchars($tel, ENT_QUOTES); //saugumui; uzkoduoja zenklus.
  $manoSQL = "UPDATE users
                SET
                    name = '$name',
                    lname = '$lname',
                    email = '$email',
                    password = '$password',
                    address = '$address',
                    city = '$city',
                    zip = '$zip',
                    country = '$country',
                    tel = '$tel'
              WHERE id = $nr
                ";
  $result = mysqli_query(getPrisijungimas(), $manoSQL);
  //debug
  if ($result == false && DEBUG_MODE > 0){
    echo "ERROR: nepavyko redaguoti $nr gydytojo DB-je!";
  }
}
function getUsers ($limit = 999999) {
  $sql = "Select * FROM users LIMIT $limit";
  $result = mysqli_query(getPrisijungimas(), $sql);
  return $result;
}
