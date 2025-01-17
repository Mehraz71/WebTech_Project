<?php
require_once('connection.php');

function issueFine($lcnumber, $phone, $area, $violations, $officername, $amount) {
    

    // Get database connection
    $conn = getConnection();

    if ($conn) {
        $sql = "INSERT INTO fine (license_number, phone, area, violation, officer_name, amount) 
                VALUES ('$lcnumber', '$phone', '$area', '$violations', '$officername', '$amount')";

        if (mysqli_query($conn, $sql)) {
            // Success message
            echo "<p style='color:green;'>Fine Issued</p></br>";
            echo "License Number :".$lcnumber."</br>";
            echo "Phone Number :".$phone."</br>"; 
            echo "Area Number :".$area."</br>"; 
            echo "Violations:".$violations_str."</br>"; 
            echo "Officer Name :".$officername."</br>"; 
            echo "Amount :".$amount."</br>"; 
           
            else {
            // Error message
            
        }

        // Close connection
        mysqli_close($conn);
    } else {
        // Connection failure message
        $message = "<p style='color:red;'>Database connection failed.</p>";
    }

    return $message;
}
