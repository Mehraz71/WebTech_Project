<?php
require_once('../model/payment_process_model_ajax.php');

if (isset($_POST['payment'])) {
    // Decode JSON data
    $data = json_decode($_POST['payment']);
    $lcnumber = $data->lcnumber ?? '';
    $amount = $data->amount ?? '';
    $account_number = $data->account_number ?? '';
    $bankName = $data->bankName ?? '';
    $bankPin = $data->bankPin ?? '';

    // Validate inputs
    $errors = [];
    if (empty($account_number)) $errors[] = "Account number is required.";
    if (empty($bankName)) $errors[] = "Bank name is required.";
    if (empty($bankPin)) $errors[] = "Bank PIN is required.";
    if (empty($amount)) $errors[] = "Valid amount is required.";

    // Return errors if any
    if (!empty($errors)) {
        header('Content-Type: application/json');
        echo json_encode([
            "status" => "error",
            "errors" => $errors
        ]);
        exit; // Prevent further execution
    }

    // Process the payment
    $payment = processpayment($lcnumber, $amount);

    // Send response based on payment result
    header('Content-Type: application/json');
    if ($payment) {
        echo json_encode([
            "status" => "success",
            "message" => "Payment completed successfully!"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Payment failed. Please try again."
        ]);
    }
}
?>
