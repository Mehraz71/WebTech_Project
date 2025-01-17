<?php
require_once('../model/editfaremodel.php');

session_start();

$fareModel = new FareModel();


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $from = $_POST['start_point'];
    $to = $_POST['end_point'];
    $fare = $_POST['fare'];

    if (!empty($id) && !empty($from) && !empty($to) && !empty($fare)) {
        if ($fareModel->updateFare($id, $from, $to, $fare)) {
            header('location :../view/afare.php');
            exit;
        } else {
            echo "Error updating fare.";
        }
    } else {
        echo "All fields are required!";
    }
}
?>
