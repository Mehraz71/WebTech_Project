<?php
require_once('connection.php');
function saveFeedback($username, $email, $feedback) {
    $conn = getconnection();
     $sql = "INSERT INTO feedback (username, email, feedback) VALUES ('$username', '$email', '$feedback')";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
?>
