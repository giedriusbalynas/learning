<?php
    session_start();
    include('header.php');
    include('../controler/preke-functions.php');
    include('../controler/searchControler.php');
    $query = $_POST['query'];
    //
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
        $prekes = getPrekes();
        $preke = mysqli_fetch_assoc($prekes);


        if(mysqli_num_rows($raw_results) > 0){
            }
          ?><h2 class="d-flex justify-content-center m-5">Search results</h2><?php

          while($row = mysqli_fetch_assoc($raw_results)){
          ?>
          <div class="container m-3 bg-light">
            <a class="p-3" href="preke.php?x=<?php echo $row['id'] ?>"><?php echo $row['pavadinimas']. "<br />"; ?></a>
            <p class="p-2 mb-4"> <?php echo $row['aprasymas']. "<br />"; ?></p>
          </div>
          <?php

          // $row = mysqli_fetch_assoc($raw_results);
        }

      include('footer.php');
