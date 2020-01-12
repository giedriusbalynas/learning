<?php
  include('prisijungimas.php');
  include('preke-functions.php');
  include('img-functions.php');
  $pavadinimas = $_POST['pavadinimas'];
  $aprasymas = $_POST['aprasymas'];
  $kaina = $_POST['kaina'];
  $kiekis = $_POST['kiekis'];
  $nuolaida = $_POST['nuolaida'];
  createPreke($pavadinimas, $aprasymas, $kaina, $kiekis, $nuolaida);
  header("location: ../view/browse.php");
