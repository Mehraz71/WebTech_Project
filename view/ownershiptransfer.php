

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ownership Transfer</title>
    <link rel="stylesheet" href="../css/ownershiptransfer.css">
</head>
<body>
    <form action="../controler/Ownershiptransfercheck.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <h3>Ownership Transfer Application</h3>
            <table>
                <!-- 1st Owner Details -->
                <tr>
                    <th colspan="2"><h4>1st Owner Details</h4></th>
                </tr>
                <tr>
                    <th>Full Name:</th>
                    <td><input type="text" name="first_owner_name"></td>
                </tr>
                <tr>
                    <th>Father's Name:</th>
                    <td><input type="text" name="first_owner_fname"></td>
                </tr>
                <tr>
                    <th>Date of Birth:</th>
                    <td><input type="date" name="first_owner_dob"></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><input type="text" name="first_owner_address"></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>
                        <input type="tel" name="first_owner_phone" pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
                    </td>
                </tr>
                <tr>
                    <th>NID:</th>
                    <td><input type="text" name="first_owner_nid"></td>
                </tr>
                <tr>
                    <th>Upload Photo:</th>
                    <td><input type="file" name="first_owner_photo" accept="image/*"></td>
                </tr>

                <!-- 2nd Owner Details -->
                <tr>
                    <th colspan="2"><h4>2nd Owner Details</h4></th>
                </tr>
                <tr>
                    <th>Full Name:</th>
                    <td><input type="text" name="second_owner_name"></td>
                </tr>
                <tr>
                    <th>Father's Name:</th>
                    <td><input type="text" name="second_owner_fname"></td>
                </tr>
                <tr>
                    <th>Date of Birth:</th>
                    <td><input type="date" name="second_owner_dob"></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><input type="email" name="second_owner_email"></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><input type="text" name="second_owner_address"></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>
                        <input type="tel" name="second_owner_phone" pattern="[0-9]{10}" title="Enter a valid 10-digit phone number">
                    </td>
                </tr>
                <tr>
                    <th>NID:</th>
                    <td><input type="text" name="second_owner_nid"></td>
                </tr>
                <tr>
                    <th>Upload Photo:</th>
                    <td><input type="file" name="second_owner_photo" accept="image/*"></td>
                </tr>

                <!-- Vehicle Information -->
                <tr>
                    <th colspan="2"><h4>Vehicle Information</h4></th>
                </tr>
                <tr>
                    <th>Vehicle Registration Number:</th>
                    <td><input type="text" name="vehicle_registration"></td>
                </tr>
                <tr>
                    <th>Vehicle Tax Token Number:</th>
                    <td><input type="text" name="vehicle_tax_token"></td>
                </tr>

                <!-- Submit and Reset Buttons -->
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="reset">Clear</button>
                        <input type="submit" name="submit" value="Apply">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
