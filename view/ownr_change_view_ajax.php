<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ownership Transfer</title>
    <link rel="stylesheet" href="../css/ownershiptransfer.css">
    <script src="../js/ownr.js"></script>
</head>
<body>
    <form id="ownershipTransferForm">
        <fieldset>
        <h2 id="msg"></h2>
            <h3>Ownership Transfer Application</h3>
            
            <table>
                <!-- 1st Owner Details -->
                <tr>
                    <th colspan="2"><h4>1st Owner Details</h4></th>
                </tr>
                <tr>
                    <th>Full Name:</th>
                    <td><input type="text" id="first_owner_name" name="first_owner_name" pattern="[A-Za-z\s\-']+"></td>
                </tr>
                <tr>
                    <th>Father's Name:</th>
                    <td><input type="text" id="first_owner_fname" name="first_owner_fname" pattern="[A-Za-z\s\-']+"></td>
                </tr>
                <tr>
                    <th>Date of Birth:</th>
                    <td><input type="date" id="first_owner_dob" name="first_owner_dob"></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><input type="text" id="first_owner_address" name="first_owner_address"></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>
                        <input type="tel" id="first_owner_phone" name="first_owner_phone" pattern="[0-9]{11}" title="Enter a valid 11-digit phone number">
                    </td>
                </tr>
                <tr>
                    <th>NID:</th>
                    <td><input type="text" id="first_owner_nid" name="first_owner_nid"></td>
                </tr>
                <tr>
                    <th>Upload Photo:</th>
                    <td><input type="file" id="first_owner_photo" name="first_owner_photo" accept="image/*"></td>
                </tr>

                <!-- 2nd Owner Details -->
                <tr>
                    <th colspan="2"><h4>2nd Owner Details</h4></th>
                </tr>
                <tr>
                    <th>Full Name:</th>
                    <td><input type="text" id="second_owner_name" name="second_owner_name" pattern="[A-Za-z\s\-']+"></td>
                </tr>
                <tr>
                    <th>Father's Name:</th>
                    <td><input type="text" id="second_owner_fname" name="second_owner_fname" pattern="[A-Za-z\s\-']+"></td>
                </tr>
                <tr>
                    <th>Date of Birth:</th>
                    <td><input type="date" id="second_owner_dob" name="second_owner_dob"></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><input type="email" id="second_owner_email" name="second_owner_email"></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><input type="text" id="second_owner_address" name="second_owner_address"></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>
                        <input type="tel" id="second_owner_phone" name="second_owner_phone" pattern="[0-9]{11}" title="Enter a valid 11-digit phone number">
                    </td>
                </tr>
                <tr>
                    <th>NID:</th>
                    <td><input type="text" id="second_owner_nid" name="second_owner_nid"></td>
                </tr>
                <tr>
                    <th>Upload Photo:</th>
                    <td><input type="file" id="second_owner_photo" name="second_owner_photo" accept="image/*"></td>
                </tr>

                <!-- Vehicle Information -->
                <tr>
                    <th colspan="2"><h4>Vehicle Information</h4></th>
                </tr>
                <tr>
                    <th>Vehicle Registration Number:</th>
                    <td><input type="text" id="vehicle_registration" name="vehicle_registration"></td>
                </tr>
                <tr>
                    <th>Vehicle Tax Token Number:</th>
                    <td><input type="text" id="vehicle_tax_token" name="vehicle_tax_token"></td>
                </tr>

                <!-- Submit and Reset Buttons -->
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="reset" id="clear_button">Clear</button>
                        <input type="button" id="btn" name="" value="Apply" onclick=senddata()>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
