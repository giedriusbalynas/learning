<?php
      session_start();
      include('../controler/prisijungimas.php');
      include('../controler/preke-functions.php');
      include('../controler/img-functions.php');
      $id = $_GET['x'];
      $id_y=$_GET['y'];
      $preke = getPreke($id);
      $image = getImg($id);
      $vezimelioArray = [
        "id" => $preke['id'],
        "pav"=>$image['pav'],
        "alt"=>$image['alt'],
        "pavadinimas"=>$preke['pavadinimas'],
        "kaina"=>$preke['kaina'],
        "kiekis"=>$id_y
      ];
      $count = count($_SESSION['vezimelis']);
      $_SESSION['vezimelis'][$count] = $vezimelioArray;
      header("location: ../view/browse.php");
