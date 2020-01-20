<?php
include('prisijungimas.php');
include('user-functions.php');
$pass = $_POST['password'];
$md5pass = md5($pass);
createUser(
                  $_POST['name'],
                  $_POST['lname'],
                  $_POST['email'],
                  $md5pass,
                  $_POST['address'],
                  $_POST['city'],
                  $_POST['zip'],
                  $_POST['country'],
                  $_POST['tel']);
header('Location: ../view/index.php');
