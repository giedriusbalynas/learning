<?php
session_start();
$index = $_POST['index'];
$kiekis = $_POST['kiekis'];  //inputo value
$_SESSION['vezimelis'][$index]['kiekis'] = $kiekis;
