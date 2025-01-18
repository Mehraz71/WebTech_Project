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
    <title>Admin_Fare</title>
    <link rel="stylesheet" href="../css/fare.css" />
    <script src="../js/editfare.js"></script>
  </head>
  <body><div class="container">
<h2 id="msg"></h2>
 
    <h2 >Fare List</h2>
    <div class="table">
      <table>
        <tr>
          <th>Name</th>
          <th>Action</th>
        </tr>
        <tr>
          <td id="dhk">Dhaka Metro Area Bus Fare</td>
          <td>
          <input type="button" id="btn1" name="" value="View" onclick="dhakafare()" />
          </td>
        </tr>
        <tr>
          <td id="ctg">Chittagong Metro Area Bus Fare</td>
          <td>
          <input type="button" id="btn2" name="" value="View" onclick="chittagong()" />
          </td>
        </tr>
        <tr>
          <td id="inf">Intercity Fare</td>
          <td>
          <input type="button" id="btn1" name="" value="View" onclick="intercityfare()" />
        </tr>
      </table>
      <table id="tbl" border="1">
    <thead>
        <tr><th>ID</th>
            <th>Starting_point</th>
            <th>Ending_point</th>
            <th>Fare</th>
            <th>Action</th>

        </tr>
        <tr><p id="msg"></p></tr>
    </thead>
    <tbody>
        <!-- New rows will be dynamically added here -->
    </tbody>
</table>
    </div>

  </body>
</html>
