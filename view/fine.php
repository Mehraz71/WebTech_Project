<?php
require('admintemplate.html');
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
  header("Location: ../model/login.php");
  exit;
}


?>

<html>
  <head>
    <title>Fine</title>
    <link rel="stylesheet" href="fine.css" />
  </head>
  <body>
    <form method="post" action="../controler/finecheck.php">
      
      <table><tr><th> Issuing Fine</th></tr>
        <tr>
          <th>Enter License number :</th>
          <td><input type="text" name="lcnumber" /></td>
        </tr>
        <tr>
          <th>Enter phone number :</th>
          <td><input type="number" name="phone" /></td>
        </tr>
        <tr>
          <th>Enter Area:</th>
          <td><input type="text" name="area" /></td>
        </tr>
        <tr>
          <th>Violations:</th>
          <td>
    <input type="checkbox" name="violations[]" value="Red Light Violation" /> Red Light Violation<br />
    <input type="checkbox" name="violations[]" value="No Helmet" /> No Helmet<br />
    <input type="checkbox" name="violations[]" value="Invalid Documents" /> Invalid Documents<br />
    <input type="checkbox" name="violations[]" value="Wrong Way" /> Wrong Way<br />
    <input type="checkbox" name="violations[]" value="Over Speed" /> Over Speed
  </td>
        </tr>
        <tr>
          <th>Amount :</th>
          <td><input type="number" name="amount" /></td>
        </tr>
        <tr>
          <th>officer name :</th>
          <td><input type="text" name="officername" /></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Fine" /></td>
        
</tr>
      </table>

    </form>
    <a href="adminhome.php" class="button">Back</a>
  </body>
</html>
