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

$conn = mysqli_connect('127.0.0.1', 'root', '', 'brta');
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

$errors = [];


if(empty($name)){
    $errors[] = "Username is required";
}

if (empty($email)) {
   $errors[] = "Enter a valid email";

} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $errors[] = "Invalid email format.";
}elseif ($result && mysqli_num_rows($result) > 0) {
    $errors[]= "Email already exists.";
}
else{
    $_SESSION['email'] = $email;
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
$_SESSION['user_data']=
[
    'Name' => $name,
    'Email' => $email,
    'Phone' => $phone_number,
    'Pass' => $pass,
   'Address' => $address,
];

header("Location: ../model/otp.php");




  
}






}
else{echo"EROR";

}
























