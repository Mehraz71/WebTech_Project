<?php
// Start the session
session_start();
require_once('../model/feedbackModel.php'); // Include the feedback model file

/*if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Retrieve and sanitize input
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);
*/
if (isset($_POST['feedback'])){
    
    
    $data =json_decode( $_POST['feedback']);
    $username = $data->username;
    $email = $data->email;
    $feedback = $data->feedback;
    // Validation
    $errors = [];

    if (empty($username)) {
        $errors[] = "Name cannot be empty.";
    }

    if (empty($email)) {
        $errors[] = "Email cannot be empty.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($feedback)) {
        $errors[] = "Feedback cannot be empty.";
    }
    
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        
        exit;
    }

    // Save feedback to the database
    $isSaved = saveFeedback($username, $email, $feedback);

    if ($isSaved) {
        $_SESSION['success'] = "Feedback submitted successfully!";
    } else {
        $_SESSION['errors'] = ["Failed to save feedback. Please try again."];
    }

    // Redirect back to the form
   // header('Location: ../view/feedback.php');
    exit;
} else {
    // Redirect to the form if accessed directly
    //header('Location: ../view/feedback.php');
    exit;
}
?>
