<?php
include('prisijungimas.php');
include('user-functions.php');
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];
$md5pass = md5($pass);
$manoSQL = "SELECT * FROM users WHERE email = '$email' AND password = '$md5pass' ";
$rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
$user = mysqli_fetch_assoc($rezultataiMysqlObj);
if ($user['email'] === $email && $user['password'] === $md5pass ) {
  echo "True";
  $_SESSION['user'] = $user;
  header("../view/index.php");
};
