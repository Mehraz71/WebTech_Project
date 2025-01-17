<?php
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
  }
session_start();

// Check if the 'lcnumber' is set in the session
if (isset($_SESSION['lcnumber'])) {
    // Retrieve the license number from the session
    $lcnumber = $_SESSION['lcnumber'];
} else {
    // Handle the case where 'lcnumber' is not found in the session
    $lcnumber = 'No license number available';
}

// If you are fetching fine details from the database, add your database logic here
$fineDetails = []; // Example array, you can fetch this from the database
$error = ''; // For displaying error messages if any

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Fines and Payment</title>
    <link rel="stylesheet" href="../css/showfine.css">
</head>
<body>
    <h1>Fines for License Number: <?php echo htmlspecialchars($lcnumber); ?></h1>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (!empty($fineDetails)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>License Number</th>
                    <th>Phone</th>
                    <th>Area</th>
                    <th>Violation</th>
                    <th>Officer Name</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fineDetails as $fine): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($fine['license_number']); ?></td>
                        <td><?php echo htmlspecialchars($fine['phone']); ?></td>
                        <td><?php echo htmlspecialchars($fine['area']); ?></td>
                        <td><?php echo htmlspecialchars($fine['violation']); ?></td>
                        <td><?php echo htmlspecialchars($fine['officer_name']); ?></td>
                        <td><?php echo htmlspecialchars($fine['amount']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <h2>Make a Payment</h2>
    <form method="post" action="../controler/process_payment.php">
        <label for="lcnumber">License Number:</label>
        <input type="text" id="lcnumber" name="lcnumber" value="<?php echo htmlspecialchars($lcnumber); ?>" readonly /><br />

        <label for="ac">Account Number:</label>
        <input type="text" id="ac" name="ac" required /><br />

        <label for="bankName">Bank Name:</label>
        <input type="text" id="bankName" name="bankName" required /><br />

        <label for="bankPin">Bank PIN:</label>
        <input type="password" id="bankPin" name="bankPin" required /><br />

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" min="1" required /><br />

        <button type="submit" name="pay">Pay</button>
    </form>
</body>
</html>
