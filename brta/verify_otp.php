<?php
session_start();

if(isset($_SESSION['otp'])){
  $otp =$_SESSION['otp'];
echo $otp;

if(isset($_SESSION['user_data'])){
    $userData = $_SESSION['user_data'];
    $email=$userData['Email'];

}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>
<body>
    <h1><?php echo "An OTP has been sent to your email: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></h1>
    <form method="POST">
        <label for="otp">Enter OTP:</label>
        <input type="number" id="otp" name="OTP" required />
        <button type="submit" name="submit">Check OTP</button>
        <a href="?resend=true"><button type="button">Resend OTP</button></a>
    </form>

<?php
if(isset($_POST['submit'])){
$OTP =$_POST['OTP'];

if($OTP == $otp){
    echo "MTACH";

    //fetch user data
    if(isset($_SESSION['user_data'])){
     $userData = $_SESSION['user_data'];
     $name =$userData['Name'];
     $email=$userData['Email'];
     $phone_number=$userData['Phone'];
     $pass =$userData['Pass'];
     $address=$userData['Address'];

     $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
     $conn = mysqli_connect('127.0.0.1', 'root', '', 'brta');
     $sql = "INSERT INTO users (username, email, password, phone, address) 
            VALUES ('$name', '$email', '$hashedPassword', '$phone_number', '$address')";
            
            if (mysqli_query($conn, $sql)) {
                echo "<p style='color:green;'>Form submitted successfully!</p>";
                header("Location: login.php");
            } else {
                echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
            }



    }






}else{
    echo "OTP DID NOT MATCHED";
}

}


?>