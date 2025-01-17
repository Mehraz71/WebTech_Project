<?php
session_start();
require_once('../model/ownershipTransferModel.php'); // Include the model file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate 1st Owner Details
    $firstOwnerName = trim($_POST['first_owner_name']);
    $firstOwnerFName = trim($_POST['first_owner_fname']);
    $firstOwnerDOB = trim($_POST['first_owner_dob']);
    $firstOwnerAddress = trim($_POST['first_owner_address']);
    $firstOwnerPhone = trim($_POST['first_owner_phone']);
    $firstOwnerNID = trim($_POST['first_owner_nid']);
    $firstOwnerPhoto = $_FILES['first_owner_photo'];

    // Validate 2nd Owner Details
    $secondOwnerName = trim($_POST['second_owner_name']);
    $secondOwnerFName = trim($_POST['second_owner_fname']);
    $secondOwnerDOB = trim($_POST['second_owner_dob']);
    $secondOwnerEmail = trim($_POST['second_owner_email']);
    $secondOwnerAddress = trim($_POST['second_owner_address']);
    $secondOwnerPhone = trim($_POST['second_owner_phone']);
    $secondOwnerNID = trim($_POST['second_owner_nid']);
    $secondOwnerPhoto = $_FILES['second_owner_photo'];

    // Validate Vehicle Information
    $vehicleRegistration = trim($_POST['vehicle_registration']);
    $vehicleTaxToken = trim($_POST['vehicle_tax_token']);

    $errors = [];

    // Perform validation checks
    if (empty($firstOwnerName) || empty($firstOwnerFName) || empty($firstOwnerDOB) || 
        empty($firstOwnerAddress) || empty($firstOwnerPhone) || empty($firstOwnerNID)) {
        $errors[] = "All fields in the 1st Owner section are required.";
    }

    if (!preg_match('/^[0-9]{10}$/', $firstOwnerPhone)) {
        $errors[] = "1st Owner phone number must be a valid 10-digit number.";
    }

    if (empty($secondOwnerName) || empty($secondOwnerFName) || empty($secondOwnerDOB) || 
        empty($secondOwnerEmail) || empty($secondOwnerAddress) || empty($secondOwnerPhone) || 
        empty($secondOwnerNID)) {
        $errors[] = "All fields in the 2nd Owner section are required.";
    }

    if (!filter_var($secondOwnerEmail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "2nd Owner email must be valid.";
    }

    if (!preg_match('/^[0-9]{10}$/', $secondOwnerPhone)) {
        $errors[] = "2nd Owner phone number must be a valid 10-digit number.";
    }

    if (empty($vehicleRegistration) || empty($vehicleTaxToken)) {
        $errors[] = "All fields in the Vehicle Information section are required.";
    }

    // Validate file uploads
    if ($firstOwnerPhoto['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "1st Owner photo upload failed.";
    }

    if ($secondOwnerPhoto['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "2nd Owner photo upload failed.";
    }

    // If there are validation errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        exit;
    }

    // Call the model function to process the data
    $status = saveOwnershipTransfer(
        $firstOwnerName,
        $firstOwnerFName,
        $firstOwnerDOB,
        $firstOwnerAddress,
        $firstOwnerPhone,
        $firstOwnerNID,
        $firstOwnerPhoto,
        $secondOwnerName,
        $secondOwnerFName,
        $secondOwnerDOB,
        $secondOwnerEmail,
        $secondOwnerAddress,
        $secondOwnerPhone,
        $secondOwnerNID,
        $secondOwnerPhoto,
        $vehicleRegistration,
        $vehicleTaxToken
    );

    if ($status) {
        echo "Ownership transfer application submitted successfully.";
    } else {
        echo "Failed to submit ownership transfer application.";
    }
} else {
    header('Location: ../view/ownershiptransfer.html');
    exit;
}
?>
