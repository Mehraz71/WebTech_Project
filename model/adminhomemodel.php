<?php
require_once('connection.php');


    

    // Method to get the total number of registered vehicles
    function getTotalRegisteredVehicles() {
        $conn = getconnection(); // Ensure getconnection() is defined elsewhere and works correctly
        $sql = "SELECT COUNT(*) AS total_rows FROM vehicle_registration";
        $result = $conn->query($sql); // Execute the query
    
        if ($result) {
            $row = $result->fetch_assoc();
            return $row['total_rows']; // Return the total number of rows
        } else {
            return 0; // Return 0 if the query fails
        }
    }
    
?>
