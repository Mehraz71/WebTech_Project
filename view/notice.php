<?php

include("template.html");
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
    <title>Document</title>
    <link rel="stylesheet" href="notice.css">
  </head>
  <body>
  <div id="notice">
  <h1>Notice</h1>
  <h3>Notice 1: BRTA Launches New Online Portal for Vehicle Registration</h3>
  <p>
    The Bangladesh Road Transport Authority (BRTA) has launched a new online portal to simplify vehicle registration. 
    Users can now complete applications, upload documents, and make payments digitally. 
    Visit <a href=" ">[Insert Website Link]</a> for details or contact the BRTA helpline for assistance.
  </p>
  <h3>Notice 2: Temporary Closure of BRTA Offices for Maintenance</h3>
  <p>
  All BRTA offices will remain closed from [Insert Date] to [Insert Date] for system upgrades and maintenance. 
  During this period, online services will remain operational. 
  We apologize for the inconvenience and thank you for your understanding.
  </p>
  <h3>Notice 3: Mandatory Use of Digital Number Plates</h3>
  <p>
    The Bangladesh Road Transport Authority (BRTA) has launched a new online portal to simplify vehicle registration. 
    Users can now complete applications, upload documents, and make payments digitally. 
    Visit <a href=" ">[Insert Website Link]</a> for details or contact the BRTA helpline for assistance.
  </p>
  <h3>Notice 1: BRTA Launches New Online Portal for Vehicle Registration</h3>
  <p>
    The Bangladesh Road Transport Authority (BRTA) has launched a new online portal to simplify vehicle registration. 
    Users can now complete applications, upload documents, and make payments digitally. 
    Visit <a href=" ">[Insert Website Link]</a> for details or contact the BRTA helpline for assistance.
  </p>

</div>

  </body>
</html>
