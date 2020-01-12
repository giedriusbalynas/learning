<?php
  include('prisijungimas.php');
  include('preke-functions.php');
  include('img-functions.php');
  $id = $_GET['x'];
  deletePreke($id);
  //delete img nereik nes ant db uzdeta foreign key
  // $id = $_GET['x'];
  // deleteImg($img_id);
  header("location: ../view/browse.php");
