<?php
session_start();
require_once('../model/showfinemodel.php'); 

if (isset($_POST['submit'])) {
    $licenseNumber = $_POST['lcnumber'];

    $_SESSION['lcnumber'] = $licenseNumber;

    // Fetch fine details from the database
    $result = getFineDetailsByLicenseNumber($licenseNumber);

    // Check if fines exist for the given license number
    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['fineDetails'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
        header('Location: ../view/fineDetailsView.php'); 
    } else {
        $_SESSION['error'] = "No fines found for the given license number.";
        header('Location: ../view/fineSearch.php'); 
    }
}
?>
