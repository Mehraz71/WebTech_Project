<?php
require_once('../view/template.html');
require_once('../controler/dhakabusfare.php');
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
  }

$controller = new FareController();
$fares = $controller->getDhakaCityFares();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhaka Metro Area Bus Fare</title>
    <link rel="stylesheet" href="../css/dhakabusfare.css">
</head>
<body>
    <h2>Dhaka Metro Area Bus Fare</h2>
    <div class="table">
        <table>
            <thead>
                <tr><th>ID</th>
                    <th>Starting Point</th>
                    <th>Ending Point</th>
                    <th>Fare (BDT)</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($fares->num_rows > 0): ?>
                    <?php while ($row = $fares->fetch_assoc()): ?>
                        <tr>
                             <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['start_point']; ?></td>
                            <td><?php echo $row['end_point']; ?></td>
                            <td><?php echo $row['fare']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2">No fare data found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
