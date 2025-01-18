<?php 
require_once('../model/update_fare_model_ajax.php');

// Check session or cookie for login
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
}

// Check if 'mydata' is set in POST request
if (isset($_POST['mydata'])) {
    // Decode JSON data
    $data = json_decode($_POST['mydata']);

    // Extract variables from JSON
    $id = $data->id ?? null;
    $start_point = $data->start_point ?? null;
    $end_point = $data->end_point ?? null;
    $amount = $data->amount ?? null;
    $action = $data->action ?? null;

    // Debug: Check action value
    // Uncomment the line below to debug
    // var_dump($action);

    // Validation
    $errors = [];
    if (empty($id)) $errors[] = "ID is required.";
    if (empty($start_point)) $errors[] = "Start Point is required.";
    if (empty($end_point)) $errors[] = "End Point is required.";
    if (empty($amount)) $errors[] = "Amount is required.";

    // Handle errors
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit;
    }

    
        if ($action === "remove") {
        $result = removefare($id); // Assuming removefare() is defined in the model
        if ($result) {
            echo "Record with ID $id successfully removed.";
        } else {
            echo "Failed to remove record with ID $id.";
        }
    } elseif ($action === "update") {
        $result = updatefare($id, $start_point, $end_point, $amount); // Assuming updatefare() is defined in the model
        if ($result) {
            echo "Update Successful<br>New Start Point: $start_point<br>New End Point: $end_point<br>Fare: $amount";
        } else {
            echo "Failed to update record with ID $id.";
        }
    }elseif ($action === "add") {
        $result = add($id,$start_point, $end_point, $amount); // Assuming updatefare() is defined in the model
        if ($result) {
            echo "ADD Successful<br>New Start Point: $start_point<br>New End Point: $end_point<br>Fare: $amount";
        } else {
            echo "Failed to ADD.";
        }
    }
    else {
        echo "Invalid action specified.";
    }
    
    
    
}
?>
