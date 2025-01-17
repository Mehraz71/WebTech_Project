<?php
require_once('../view/admintemplate.html'); 
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
    <title>Fare</title>
    <link rel="stylesheet" href="../css/fare.css" />
  </head>
  <body><div class="container">

 
    <h2 >Fare List</h2>
    <div class="table">
      <table>
        <tr>
          <th>Name</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>Dhaka Metro Area Bus Fare</td>
          <td>
            <a href="../view/adhakabusfare.php"><button>View</button></a>
          </td>
        </tr>
        <tr>
          <td>Chittagong Metro Area Bus Fare</td>
          <td>
            <a href="ctgbusfare.php"><button>View</button></a>
          </td>
        </tr>
        <tr>
          <td>Intercity Fare</td>
          <td>
            <a href="intercityfare.php"><button>View</button></a>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
