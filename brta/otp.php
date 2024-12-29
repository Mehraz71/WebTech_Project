<?php
session_start();
require_once('C:/xampp/htdocs/code/brta/email.php');

if(isset($_SESSION['user_data'])){
    $userData = $_SESSION['user_data'];
    $email=$userData['Email'];


// Generate OTP and email address

$otp = rand(10000, 99999);
$_SESSION['otp'] = $otp; // Store OTP in session
echo $otp;
header("Location: verify_otp.php");


// PHPMailter setup
$mail->addAddress($email);
$mail->isHTML(true);
$mail->Subject = "Your OTP Code";
$mail->Body = "This is your OTP: <b>$otp</b>";

try {
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        // OTP successfully sent
    }
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}

}
?>



