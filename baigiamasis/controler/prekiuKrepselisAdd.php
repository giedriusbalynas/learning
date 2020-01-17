<?php
      session_start();
      include('../controler/prisijungimas.php');
      include('../controler/preke-functions.php');
      include('../controler/img-functions.php');
      $id = $_GET['x'];
      $id_y=$_GET['y'];
      $preke = getPreke($id);
      $image = getImg($id);
      // print_r ($preke);
      $vezimelioArray = [
        "pav"=>$image['pav'],
        "alt"=>$image['alt'],
        "pavadinimas"=>$preke['pavadinimas'],
        "kaina"=>$preke['kaina'],
        "kiekis"=>$id_y
      ];
      $count = count($_SESSION['vezimelis']);
      $_SESSION['vezimelis'][$count] = $vezimelioArray;



     // array_push($_SESSION['vezimelis'], $vezimelioArray);
      // print_r($vezimelioArray);
     // session_destroy();
     header("location: ../view/browse.php");
