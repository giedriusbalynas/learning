<?php
    include('prisijungimas.php');
    
    $query = htmlspecialchars($query);
    $manoSQL = "SELECT * FROM prekes WHERE (`pavadinimas` LIKE '%".$query."%') OR (`aprasymas` LIKE '%".$query."%')";
    $raw_results = mysqli_query(getPrisijungimas(), $manoSQL) or die(mysqli_error());

    header('../view/search.php');
