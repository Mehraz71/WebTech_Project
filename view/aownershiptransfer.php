<?php
require_once('../model/connection.php');
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
  }
$conn = getConnection();

// Fetch ownership transfer applications
$sql = "SELECT * FROM ownership_transfer";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Ownership Transfer Applications</title>
</head>
<body>
    <div class="container">
        <h1>Admin Panel - Ownership Transfer Applications</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>1st Owner Name</th>
                    <th>2nd Owner Name</th>
                    <th>Vehicle Registration</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['first_owner_name']; ?></td>
                            <td><?php echo $row['second_owner_name']; ?></td>
                            <td><?php echo $row['vehicle_registration']; ?></td>
                            <td>
                                <?php 
                                if (isset($row['status'])) {
                                    echo $row['status'] == 'approved' ? 'Approved' : ($row['status'] == 'rejected' ? 'Rejected' : 'Pending');
                                } else {
                                    echo 'Pending';
                                }
                                ?>
                            </td>
                            <td>
                                <form action="../model/handle_ownership.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="action" value="approve">Approve</button>
                                    <button type="submit" name="action" value="reject">Reject</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No applications found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
