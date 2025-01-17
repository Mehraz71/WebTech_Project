<?php
require_once('../controler/adminhomecontroller.php');
require_once('../view/admintemplate.html');
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Registered Vehicles</title>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
            font-family: Arial, sans-serif;
        }
        .stat {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vehicle Statistics</h1>
        <div class="stat">
            Total Registered Vehicles: <?= htmlspecialchars($totalVehicles) ?>
        </div>
    </div>
</body>
</html>
