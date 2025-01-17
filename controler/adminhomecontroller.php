<?php
    session_start();
    require_once('../model/adminhomemodel.php'); 
    $totalVehicles = getTotalRegisteredVehicles();

    if ($totalVehicles !== null) {
        //echo "Total registered vehicles: " . $totalVehicles;
    } else {
        echo "Unable to retrieve the total number of registered vehicles.";
    }
?>
