<?php
require_once('../model/connection.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Input Sanitization
    $ac = htmlspecialchars($_POST['ac']);
    $bankname = htmlspecialchars($_POST['bankName']);
    $bankpin = htmlspecialchars($_POST['bankPin']);
    $amount = (float) $_POST['amount'];
    $lcnumber = htmlspecialchars($_POST['lcnumber']);

    $errors = [];

    // Input Validation
    if (empty($ac)) $errors[] = "Account number is required.";
    if (empty($bankname)) $errors[] = "Bank name is required.";
    if (empty($bankpin)) $errors[] = "Bank PIN is required.";
    if (empty($amount) || $amount <= 0) $errors[] = "Valid amount is required.";

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        exit;
    }

    // Database Interaction
    $conn = getConnection();
    if ($conn) {
        $stmt = $conn->prepare("DELETE FROM fine WHERE license_number = ?");
        $stmt->bind_param("s", $lcnumber);

        if ($stmt->execute()) {
            header('Location: ../view/userfine.php');
            exit;
        } else {
            echo "<p style='color:red;'>Error processing payment. Please try again later.</p>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<p style='color:red;'>Database connection failed.</p>";
    }
}
?>
