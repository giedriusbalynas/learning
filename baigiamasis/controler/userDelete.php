<?php
  include('prisijungimas.php');
  include('user-functions.php');
  session_start();

  deleteUser($_GET['id']);
  unset($_SESSION['user']);
  header("location: ../view/index.php");
