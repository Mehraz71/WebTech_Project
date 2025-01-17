<?php
if (isset($_POST['feedback'])){
    
    
    $data =json_decode( $_POST['feedback']);
    $username = $data->username;
    $email = $data->email;
    $feedback = $data->feedback;

    $errors = [];

  
   
    


}








//session_start();

/*if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
}

header('Content-Type: application/json');

$data = $_REQUEST['feedback'];
$std = json_decode($data);
$response = [
    'username' => $std->username,
    'email' => $std->email,
    'feedback' => $std->feedback,
];
echo json_encode($response);
?>
<?php
// Decode the JSON from the POST parameter
if (isset($_POST['feedback'])) {
    $data = json_decode($_POST['feedback'], true);

    if (json_last_error() === JSON_ERROR_NONE) {
        $username = $data['username'];
        $email = $data['email'];
        $feedback = $data['feedback'];

        // Respond with the username
        echo $username;
    } else {
        echo "Invalid JSON data.";
    }
} else {
    echo "No feedback received.";
}
?>

*/







?>
