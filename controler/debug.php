<?php
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
?>

$first_owner_photo_name = basename($_FILES['first_owner_photo']['tmp_name']);
    $second_owner_photo_name = basename($_FILES['second_owner_photo']['tmp_name']);

    $uploadDir = '../ownerspic/';

// Move uploaded files to the destination folder
$first_owner_photo_path = $uploadDir . basename($first_owner_photo['name']);
$second_owner_photo_path = $uploadDir . basename($second_owner_photo['name']);

if (!move_uploaded_file($first_owner_photo['tmp_name'], $first_owner_photo_path)) {
    return "Failed to upload 1st Owner's photo.";
}

if (!move_uploaded_file($second_owner_photo['tmp_name'], $second_owner_photo_path)) {
 return "Failed to upload 2nd Owner's photo.";
}