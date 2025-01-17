<?php
require_once('connection.php'); // Include database connection file

function saveOwnershipTransfer(
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
) {
    $conn = getconnection();

    // Set the upload directory
    $uploadDir = '../ownerspic/';

    // Move uploaded files to the destination folder
    $firstOwnerPhotoPath = $uploadDir . basename($firstOwnerPhoto['name']);
    $secondOwnerPhotoPath = $uploadDir . basename($secondOwnerPhoto['name']);

    if (!move_uploaded_file($firstOwnerPhoto['tmp_name'], $firstOwnerPhotoPath)) {
        return "Failed to upload 1st Owner's photo.";
    }

    if (!move_uploaded_file($secondOwnerPhoto['tmp_name'], $secondOwnerPhotoPath)) {
        return "Failed to upload 2nd Owner's photo.";
    }

    // Build the SQL query
    $sql = "INSERT INTO ownership_transfer (
                first_owner_name, first_owner_fname, first_owner_dob, 
                first_owner_address, first_owner_phone, first_owner_nid, first_owner_photo,
                second_owner_name, second_owner_fname, second_owner_dob, 
                second_owner_email, second_owner_address, second_owner_phone, second_owner_nid, second_owner_photo,
                vehicle_registration, vehicle_tax_token
            ) VALUES (
                '$firstOwnerName', '$firstOwnerFName', '$firstOwnerDOB',
                '$firstOwnerAddress', '$firstOwnerPhone', '$firstOwnerNID', '$firstOwnerPhotoPath',
                '$secondOwnerName', '$secondOwnerFName', '$secondOwnerDOB',
                '$secondOwnerEmail', '$secondOwnerAddress', '$secondOwnerPhone', '$secondOwnerNID', '$secondOwnerPhotoPath',
                '$vehicleRegistration', '$vehicleTaxToken'
            )";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        return true; // Data inserted successfully
    } else {
        return "Error: " . mysqli_error($conn);
    }
}
?>
