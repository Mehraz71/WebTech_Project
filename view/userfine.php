<?php
//require_once('../view/template.html');
if (!isset($_SESSION['username']) && (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in'] !== 'true')) {
    header("Location: ../model/login.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Fines</title>
    <link rel="stylesheet" href="../css/finesearch.css" />
    <script src="../js/searchfine.js"></script>
  </head>
  <body>
    <form>
      <table>
        <tr>
          <th><h1>Search Fines</h1></th>
        </tr>
        <tr>
          <th>License Number :</th>
          <td>
            <input
              type="text"
              id="lcnumber"
              value=""
              placeholder="Enter Your License Number to Search"
            />
          </td>
        </tr>
        <tr>
          <td>
          <a href="../view/home.php"><button type="button">Back</button></a>

          </td>
          <td><input type="button" id="btn" value="Search" onclick="abc()" /></td>
        </tr>
        <tr><td><h3 id="msg"></h3></td></tr>
        
      </table>
    
  

    </form>
    <table id="tbl" border="1">
    <thead>
        <tr>
            <th>License Number</th>
            <th>Phone</th>
            <th>Area</th>
            <th>Violation</th>
            <th>Officer Name</th>
            <th>Amount</th>
            <th></th>

        </tr>
        <tr><p id="msg"></p></tr>
    </thead>
    <tbody>
        <!-- New rows will be dynamically added here -->
    </tbody>
</table>

    
  </body>
</html>


