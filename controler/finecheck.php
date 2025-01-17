<?php
  require_once('../model/connection.php');

session_start();
if(isset($_POST['submit'])){
    $lcnumber = $_POST['lcnumber'];
    $phone =$_POST['phone'];
    $area =$_POST['area'];
    $violations = $_POST['violations'];
    $violations_str = implode(", ", $violations);
    $amount =$_POST['amount'];
    $officername =$_POST['officername'];
    $errors = [];

    if (empty($lcnumber)) {
        $errors[] = "Enter Valid License Number";
     
     } 
     

     if (empty($phone)) {
        $errors[] = "Enter your phone number";
    }

    if (empty($area)) {
        $errors[] = "Enter your area";
    }
    if (empty($violations)) {
        $errors[] = "Enter Valid Violation";
    }
    if (empty($amount)) {
        $errors[] = "Enter amount";
    }
    if (empty($officername)) {
        $errors[] = "Enter ofiicername";
    }
    
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }

    $conn = getConnection();
    if ($conn) {
            
        $sql = "INSERT INTO fine (license_number, phone, area,violation,officer_name,amount) 
                VALUES ('$lcnumber', '$phone', '$area','$violations_str','$officername','$amount')";

        if (mysqli_query($conn, $sql)) {
            echo "<p style='color:green;'>Fine Issued</p></br>";
            echo "License Number :".$lcnumber."</br>";
            echo "Phone Number :".$phone."</br>"; 
            echo "Area Number :".$area."</br>"; 
            echo "Violations:".$violations_str."</br>"; 
            echo "Officer Name :".$officername."</br>"; 
            echo "Amount :".$amount."</br>"; 
            

            
        } else {
            echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
        }

        mysqli_close($conn);
    } else {
        echo "<p style='color:red;'>Database connection failed.</p>";
    }













}






?>