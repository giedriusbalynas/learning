<?php
session_start();
include('prisijungimas.php');
include('orders-functions.php');
include('order-detail-functions.php');

$vezimelis = $_SESSION['vezimelis'];
$suma = 0;
for ($i=0; $i < count($_POST['kiekis']) ; $i++) {
    $suma += $_POST['prekes-kaina'][$i]*$_POST['kiekis'][$i];
}
$user = $_SESSION['user'];
$order_id = createOrder(
    $user['name'],
    $user['lname'],
    $user['address'],
    $user['zip'],
    $user['city'],
    $user['country'],
    $suma
);

 for ($i=0; $i < count($_POST['kiekis']) ; $i++) {
   createOrderDetail($order_id, $_POST['sesijos-prekes-id'][$i], $_POST['kiekis'][$i]);
 }
unset($_SESSION['vezimelis']);
header("location: ../view/index.php");
