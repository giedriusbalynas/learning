<?php
  session_start();
  unset($_SESSION['vezimelis']);
  header("location: ../view/prekiuKrepselis.php");
