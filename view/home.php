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
    <title>Home</title>
    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
    <div id="notice">
      <label
        ><a href="notice.php"><h2>Notice</h2></a></label
      >
      <li>BRTA launches new online portal for vehicle registration.</li>
      <li>Upcoming road safety awareness campaign in Dhaka.</li>
    </div>
    <div id="news">
      <h2>News</h2>
      <li>
        Huge Accident Due to Fog at 300fit highway <a href=" ">see more</a>
      </li>
    </div>
  </body>
</html>
