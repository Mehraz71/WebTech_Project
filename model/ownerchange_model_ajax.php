<?php
require_once('connection.php'); 

function saveOwnershipTransfer(
    $first_owner_name,
    $first_owner_fname,
    $first_owner_dob,
    $first_owner_address,
    $first_owner_phone,
    $first_owner_nid,
    $first_owner_photo_name,
    $second_owner_name,
    $second_owner_fname,
    $second_owner_dob,
    $second_owner_email,
    $second_owner_address,
    $second_owner_phone,
    $second_owner_nid,
    $second_owner_photo_name,
    $vehicle_registration,
    $vehicle_tax_token
) {
    $conn = getconnection();


    echo "<pre>";
    print_r($_POST);  // To check the posted data (except files)
    print_r($_FILES); // To check the uploaded files
    echo "</pre>";

    $uploadDir = '../ownerspic/';

    // Move uploaded files to the destination folder
    $first_owner_photo_path = $uploadDir . $first_owner_photo_name;
    $second_owner_photo_path = $uploadDir . $second_owner_photo_name;

   // if (!move_uploaded_file($first_owner_photo_name['tmp_name'], $first_owner_photo_path)) {
       // return "Failed to upload 1st Owner's photo.";
   //}

   // if (!move_uploaded_file($second_owner_photo_name['tmp_name'], $second_owner_photo_path)) {
    //// return "Failed to upload 2nd Owner's photo.";
  //  }

    // Build the SQL query
    $sql = "INSERT INTO ownership_transfer (
                first_owner_name, first_owner_fname, first_owner_dob, 
                first_owner_address, first_owner_phone, first_owner_nid,first_owner_photo,
                second_owner_name, second_owner_fname, second_owner_dob, 
                second_owner_email, second_owner_address, second_owner_phone, second_owner_nid,second_owner_photo,
                vehicle_registration, vehicle_tax_token
            )VALUES (
    '$first_owner_name', '$first_owner_fname', '$first_owner_dob',
    '$first_owner_address', '$first_owner_phone', '$first_owner_nid', '$first_owner_photo_path', 
    '$second_owner_name', '$second_owner_fname', '$second_owner_dob',
    '$second_owner_email', '$second_owner_address', '$second_owner_phone', '$second_owner_nid','$second_owner_photo_path',
    '$vehicle_registration', '$vehicle_tax_token'
)";


    // Execute the query
    if (mysqli_query($conn, $sql)) {
        return true; // Data inserted successfully
    } else {
        return "Error: " . mysqli_error($conn);
    }
}
?>
