


<?php
require_once('../model/showfinemodel.php'); 
if (isset($_POST['searchfine'])) {
    $data = json_decode($_POST['searchfine']);
    if (!$data || !isset($data->lcnumber)) {
        echo json_encode(["error" => "Invalid or missing license number"]);
        exit;
    }

    $licenseNumber = $data->lcnumber;
    session_start();
    $_SESSION['lcnumber'] = $licenseNumber;

    $result = getFineDetailsByLicenseNumber($licenseNumber);
    if ($result && mysqli_num_rows($result) > 0) {
        $finedetails = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $finedetails[] = $row;
            
        }
        echo json_encode($finedetails);
    } elseif(mysqli_num_rows($result) === 0){
        echo json_encode(["message" => "No fines found for License Number: $licenseNumber"]);
    }
} else {
    echo json_encode(["error" => "Invalid request"]);
}
?>