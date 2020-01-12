<?php
      session_start();
      include('header.php');
      include('../controler/prisijungimas.php');
      include('../controler/preke-functions.php');
      include('../controler/img-functions.php');
      $id = $_GET['x'];
      $preke = getPreke($id);
      $image = getImg($id);
      if (empty($_SESSION['vezimelis'])){
        $_SESSION['vezimelis'] = $vezimelioArray;
      }
      array_push($_SESSION['vezimelis'], $id)

        header("location: ../view/browse.php");
