<?php
$username = "alex";
$email ="alex@gmail.com";
$pass = 12345678;
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
$phone = '019812908';
$address = "hous05/A";
$conn = mysqli_connect('127.0.0.1', 'root', '', 'testbrta');

$sql = "INSERT INTO users (username, email, phone, password, address) 
        VALUES ('$username', '$email', '$phone', '$hashedPassword', '$address')";
    

if(mysqli_query($conn, $sql)){
        echo "Success";
    }else{
        echo "Error";
    }



?>