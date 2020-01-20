<?php
  session_start();
  if(isset($_SESSION["vezimelis"])) {
    foreach($_SESSION["vezimelis"] as $k => $v) {
      if($_GET["id"] == $v["id"]){
        unset($_SESSION["vezimelis"][$k]);
        if(empty($_SESSION["vezimelis"]))
        unset($_SESSION["vezimelis"]);
        }
      }
    }
    header("location: ../view/prekiuKrepselis.php");
