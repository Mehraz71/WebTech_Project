<?php
session_start();
 $x = rand(1,10);
 $y = rand(1,10);
 $sum = $x + $y ;
 $_SESSION['captcha'] = $sum; #to store captcha in session


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body><header>
      <nav>
        <h1>BRTA Service Portal</h1>
      </nav>
    </header>
    <fieldset>
      <legend>Registration</legend>
      <form method="post" action="signupcheck.php">
        <table>
          <tr>
            <th>User Name</th>
            <td>:</td>
            <td><input type="text" name="username" value="" /></td>
          </tr>
          <tr>
            <th>Email</th>
            <td>:</td>
            <td><input type="email" name="email" value="" /></td>
          </tr>
          <tr>
            <th>Phone :</th>
            <td>:</td>
            <td><input type="number" name="phone_number" value="" /></td>
          </tr>

          <tr>
            <th>Address</th>
            <td>:</td>
            <td><input type="text" name="address" value=""></td>
          </tr>
          <tr>
            <th>Password</th>
            <td>:</td>
            <td><input type="password" name="password" value="" /></td>
          </tr>
          <tr>
            <th>Confirm Password</th>
            <td>:</td>
            <td><input type="password" name="confirm_password" value="" /></td>
          </tr>
          <tr>
            <th><?php  echo $x ;  echo "+"; echo $y; ?></th>
            <td>:</td>
            <td>
              
              <input type="number" name="captcha" value="?" />
            </td>
          </tr>
          <tr>
            <th></th>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" /></td>
          </tr>
        </table>
      </form>
    </fieldset>
  </body>
</html>




