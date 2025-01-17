<?php
if (isset($_REQUEST['license_number']) && isset($_REQUEST['amount'])) {
    $licenseNumber = $_REQUEST['license_number'];
    $amount = $_REQUEST['amount'];
    
    
}
?>
<html>
    <head>
    <link rel="stylesheet" href="../css/showfine.css">
    <script src="../js/payment.js"></script>
    </head>
<h2>Make a Payment</h2>
           <form>
        <label for="lcnumber">License Number:</label>
        <input type="text" id="lcnumber" name="lcnumber" value="<?php echo $licenseNumber; ?>" /><br />
       
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" value="<?php echo $amount; ?>" /><br />
<p> Enter Bank Details</p>
        <label for="ac">Account Number:</label>
        <input type="text" id="account_number" name="ac" required /><br />

        <label for="bankName">Bank Name:</label>
        <input type="text" id="bankName" name="bankName" required /><br />

        <label for="bankPin">Bank PIN:</label>
        <input type="password" id="bankPin" name="bankPin" required /><br />
        <p id="msg"></p>
      

        <input type="button" id="btn" value="FeedBack" onclick="payment()" />
    </form>
