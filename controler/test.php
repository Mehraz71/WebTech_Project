
<?php
require_once('../model/showfinemodel.php'); 
    $data = $_REQUEST['mydata'];
    $std = json_decode($data);
    //echo "Your name is: {$std->name}";
    $licensenumber = $std->lcnumber;
    $result = getFineDetailsByLicenseNumber($licenseNumber);
    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['fineDetails'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo "Found";
    } else {
        $_SESSION['error'] = "No fines found for the given license number.";
       // header('Location: ../view/fineSearch.php'); 
    }


  

    //$user  = ['name'=>"$licensenumber", 'email'=>'email@aiub.edu', 'password'=>'123'];
    //$jsondata = json_encode($user);
    //echo $jsondata;
?>  
