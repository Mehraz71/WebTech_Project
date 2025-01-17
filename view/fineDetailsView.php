<?php
session_start();
require_once('template.html');
// Ensure fine details are available in the session
if (!isset($_SESSION['fineDetails']) || empty($_SESSION['fineDetails'])) {
    $_SESSION['error'] = "No fines found for the given license number.";
    header('Location: fineSearch.php');
    exit();
}

$fineDetails = $_SESSION['fineDetails'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fine Details</title>
    <link rel="stylesheet" href="../css/showfine.css">
</head>
<body>

    <form method="post" action="../view/payment.php">
        <table border="1">
            <tr>
                <th>License Number</th>
                <th>Phone</th>
                <th>Area</th>
                <th>Violation</th>
                <th>Officer Name</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
            <?php foreach ($fineDetails as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['license_number']); ?></td>
                    <td><?= htmlspecialchars($row['phone']); ?></td>
                    <td><?= htmlspecialchars($row['area']); ?></td>
                    <td><?= htmlspecialchars($row['violation']); ?></td>
                    <td><?= htmlspecialchars($row['officer_name']); ?></td>
                    <td><?= htmlspecialchars($row['amount']); ?></td>
                    <td>
                        <button type="submit" name="pay" value="<?= htmlspecialchars($row['license_number']); ?>">Pay</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </form>
</body>
</html>
