<?php 
require_once('connection.php');



/*function processpayment($lcnumber){
    $conn = getConnection();
     // Query to fetch fine details
     $sql = "DELETE FROM fine WHERE license_number = '$lcnumber'";
     $result = mysqli_query($conn, $sql);
 
     // Return the query result
     return $result;


}*/

//if i send obejct
function processpayment($lcnumber, $amount) {
    $conn = getConnection();

    // Query to delete fine details where both lcnumber and amount match
    $sql = "DELETE FROM fine WHERE license_number = '$lcnumber' AND amount = '$amount'";
    $result = mysqli_query($conn, $sql);

    // Return the query result
    return $result;
}




?>
