<?php
  include('prisijungimas.php');
  include('user-functions.php');

  updateUser(
      $_POST['id'],
      $_POST['name'],
      $_POST['lname'],
      $_POST['email'],
      $_POST['password'],
      $_POST['address'],
      $_POST['city'],
      $_POST['zip'],
      $_POST['country'],
      $_POST['tel']
    );

  header('Location: ../view/index.php');
