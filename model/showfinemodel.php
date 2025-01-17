<?php
require_once('connection.php'); // Include the database connection file

function getFineDetailsByLicenseNumber($licenseNumber) {
    $conn = getConnection(); // Establish the database connection

    // Query to fetch fine details
    $sql = "SELECT * FROM fine WHERE license_number = '$licenseNumber'";
    $result = mysqli_query($conn, $sql);

    // Return the query result
    return $result;
}
?>
