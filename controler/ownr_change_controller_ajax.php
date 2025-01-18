<?php

require_once('../model/ownerchange_model_ajax.php');
if (isset($_POST['owner'])) {
    $data = json_decode($_POST['owner'], true); // Decode JSON

    if ($data) {
        echo "Data received successfully:<br>";
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } else {
        echo "Failed to decode JSON.";
    }
} else {
    echo "No data received.";
}
if (isset($_POST['owner'])) {
    // Decode JSON data
    $data = json_decode($_POST['owner']);

    // Extract variables from JSON
    $first_owner_name = $data->first_owner_name;
    $first_owner_fname = $data->first_owner_fname;
    $first_owner_dob = $data->first_owner_dob;
    $first_owner_address = $data->first_owner_address;
    $first_owner_phone = $data->first_owner_phone;
    $first_owner_nid = $data->first_owner_nid;
    //$first_owner_photo = $data->first_owner_photo;

    $second_owner_name = $data->second_owner_name;
    $second_owner_fname = $data->second_owner_fname;
    $second_owner_dob = $data->second_owner_dob;
    $second_owner_email = $data->second_owner_email;
    $second_owner_address = $data->second_owner_address;
    $second_owner_phone = $data->second_owner_phone;
    $second_owner_nid = $data->second_owner_nid;
    //$second_owner_photo = $data->second_owner_photo;

    $vehicle_registration = $data->vehicle_registration;
    $vehicle_tax_token = $data->vehicle_tax_token;

    $first_owner_photo_name = basename($_FILES['first_owner_photo']['name']);
    $second_owner_photo_name = basename($_FILES['second_owner_photo']['name']);

$error=[];

 // Validation for 1st Owner Details
 if (empty($first_owner_name)) {
    $error[] = "Enter first owner name.";
} elseif (!preg_match("/^[A-Za-z\s\-]+$/", $first_owner_name)) {
    $error[] = "First owner name should contain only letters, spaces, and hyphens.";
}

if (empty($first_owner_fname)) {
    $error[] = "Enter first owner's father's name.";
} elseif (!preg_match("/^[A-Za-z\s\-]+$/", $first_owner_fname)) {
    $error[] = "First owner's father's name should contain only letters, spaces, and hyphens.";
}

if (empty($first_owner_dob)) {
    $error[] = "Enter first owner's date of birth.";
}

if (empty($first_owner_address)) {
    $error[] = "Enter first owner's address.";
}

if (empty($first_owner_phone)) {
    $error[] = "Enter first owner's phone number.";
} elseif (!preg_match("/^[0-9]{11}$/", $first_owner_phone)) {
    $error[] = "First owner's phone number must be 11 digits.";
}

if (empty($first_owner_nid)) {
    $error[] = "Enter first owner's NID.";
}

// Validation for 2nd Owner Details
if (empty($second_owner_name)) {
    $error[] = "Enter second owner name.";
} elseif (!preg_match("/^[A-Za-z\s\-]+$/", $second_owner_name)) {
    $error[] = "Second owner name should contain only letters, spaces, and hyphens.";
}

if (empty($second_owner_fname)) {
    $error[] = "Enter second owner's father's name.";
} elseif (!preg_match("/^[A-Za-z\s\-]+$/", $second_owner_fname)) {
    $error[] = "Second owner's father's name should contain only letters, spaces, and hyphens.";
}

if (empty($second_owner_dob)) {
    $error[] = "Enter second owner's date of birth.";
}

if (empty($second_owner_email)) {
    $error[] = "Enter second owner's email.";
} elseif (!filter_var($second_owner_email, FILTER_VALIDATE_EMAIL)) {
    $error[] = "Second owner's email is invalid.";
}

if (empty($second_owner_address)) {
    $error[] = "Enter second owner's address.";
}

if (empty($second_owner_phone)) {
    $error[] = "Enter second owner's phone number.";
} elseif (!preg_match("/^[0-9]{11}$/", $second_owner_phone)) {
    $error[] = "Second owner's phone number must be 11 digits.";
}

if (empty($second_owner_nid)) {
    $error[] = "Enter second owner's NID.";
}

// Validation for Vehicle Information
if (empty($vehicle_registration)) {
    $error[] = "Enter vehicle registration number.";
}

if (empty($vehicle_tax_token)) {
    $error[] = "Enter vehicle tax token number.";
}

// Check if there are errors
if (!empty($error)) {
    // Output errors as a JSON response
    echo json_encode([
        "success" => false,
        "errors" => $error
    ]);
    exit; // Stop further processing
}



$status = saveOwnershipTransfer(
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
);


if ($status) {
    echo "Ownership transfer application submitted successfully.";
} else {
    echo "Failed to submit ownership transfer application.";
}


























    

    // Example: Display the data (for debugging purposes)
   echo "First Owner Name: " . $first_owner_name . "<br>";
    echo "First Owner Father's Name: " . $first_owner_fname . "<br>";
    echo "First Owner DOB: " . $first_owner_dob . "<br>";
    echo "First Owner Address: " . $first_owner_address . "<br>";
    echo "First Owner Phone: " . $first_owner_phone . "<br>";
    echo "First Owner NID: " . $first_owner_nid . "<br>";
    echo "First Owner Photo: " .  $first_owner_photo_name . "<br>";

    echo "Second Owner Name: " . $second_owner_name . "<br>";
    echo "Second Owner Father's Name: " . $second_owner_fname . "<br>";
    echo "Second Owner DOB: " . $second_owner_dob . "<br>";
    echo "Second Owner Email: " . $second_owner_email . "<br>";
    echo "Second Owner Address: " . $second_owner_address . "<br>";
    echo "Second Owner Phone: " . $second_owner_phone . "<br>";
    echo "Second Owner NID: " . $second_owner_nid . "<br>";
    echo "Second Owner Photo: " .$second_owner_photo_name . "<br>";

    echo "Vehicle Registration Number: " . $vehicle_registration . "<br>";
    echo "Vehicle Tax Token Number: " . $vehicle_tax_token . "<br>";

    // You can now use these variables to store data in the database or process further.
}
?>