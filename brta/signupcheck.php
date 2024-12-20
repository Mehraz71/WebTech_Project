<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'brta');
session_start();

if (isset($_POST['submit'])){
$name = trim($_POST['username']);
$email = trim($_POST['email']);
$phone_number = trim($_POST['phone_number']);
$pass = trim($_POST['password']);
$confirm_password = trim($_POST['confirm_password']);
$address = trim($_POST['address']);
$captcha = trim($_POST['captcha']);

$errors = [];


if(empty($name)){
    $errors[] = "Username is required";
}

if (empty($email)) {
   $errors[] = "Enter a valid email";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $errors[] = "Invalid email format.";
}

if (empty($pass) || empty($confirm_password))
{ 
    $errors[]="Enter a valid password";

}elseif(strlen ($pass) <8 ){
    $errors[]="Password should be more than  8 characters";
}
elseif ($pass !== $confirm_password) {
    $errors[] = "Password did not match";
}

if (empty($address)) {
    $errors[] = "Enter your address";
}

$captcha2 = $_SESSION['captcha'];
    if ((int)$captcha2 !== (int)$captcha) {
        $errors[] = "Invalid Captcha";
    }

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
} else {
    // Process the form (e.g., save to database)

    // Password hashing
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    // Insert query
    $sql = "INSERT INTO users (username, email, password, phone, address) 
            VALUES ('$name', '$email', '$hashedPassword', '$phone_number', '$address')";

    // Execute the query and check for errors
    if (mysqli_query($conn, $sql)) {
        echo "<p style='color:green;'>Form submitted successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}
}
























