<?php
require_once('../model/connection.php'); // Assuming you have a central database connection file

$conn = getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['action'])) {
    $id = $_POST['id'];
    $action = $_POST['action'];

    // Validate action
    if ($action === 'approve' || $action === 'reject') {
        $status = $action === 'approve' ? 'approved' : 'rejected';

        // Update status in the database
        $sql = "UPDATE ownership_transfer SET status = '$status' WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            if ($action === 'approve') {
                // Fetch details from ownership_transfer table
                $fetch_sql = "SELECT * FROM ownership_transfer WHERE id = $id";
                $result = $conn->query($fetch_sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    // Use empty string as fallback if second_owner_image is not set
                    $second_owner_photo = $row['second_owner_photo'] ?? '';

                    // Update vehicle_registration table
                    $update_sql = "
                        UPDATE vehicle_registration 
                        SET 
                            owner_name = '{$row['second_owner_name']}',
                            owner_address = '{$row['second_owner_address']}',
                            owner_phone = '{$row['second_owner_phone']}',
                            owner_nid = '{$row['second_owner_nid']}',
                            owner_image = '$second_owner_photo'
                        WHERE vehicle_registration_number = '{$row['vehicle_registration']}'
                    ";

                    if ($conn->query($update_sql) === TRUE) {
                        // Delete the row from ownership_transfer table
                        $delete_sql = "DELETE FROM ownership_transfer WHERE id = $id";

                        if ($conn->query($delete_sql) === TRUE) {
                            echo "Ownership transfer completed and application removed successfully.";
                        } else {
                            echo "Ownership transfer completed, but failed to delete application: " . $conn->error;
                        }
                    } else {
                        echo "Error updating vehicle registration: " . $conn->error;
                    }
                } else {
                    echo "Ownership transfer application not found.";
                }
            } else {
                // If rejected, just leave it in the ownership_transfer table
                echo "Application rejected.";
            }
        } else {
            echo "Error updating application status: " . $conn->error;
        }
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
