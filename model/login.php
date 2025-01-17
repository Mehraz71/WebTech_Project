<?php
session_start();

 if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
$username =$_COOKIE['username'];
$password =$_COOKIE['password'];

 }else{
  $username="";
  $password="";
 }

 $error_message = "";
 if (isset($_GET['error'])) {
  if ($_GET['error'] == "incorrect_password") {
      $error_message = "Incorrect password. Please try again.";
  } elseif ($_GET['error'] == "user_not_found") {
      $error_message = "Username does not exist.";
  }
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/login.css" />
</head>
<body>
    <header>
        <nav>
          <h1>BRTA Service Portal</h1>
        </nav>
      </header>
      <form action="../controler/logincheck.php" method="POST">
      <div class="login">
        <div class="table">
            <tr><div class="username"><h3>Username</h3></div></tr>
            <tr><div class="username_input"><input type="text" name="name" value=<?php echo $username ?>></div></tr>
            <tr><div class="pass"><h3>Password</h3></div></tr>
            <tr><div class="pass_input"><input type="password" name="pass" value="<?php echo$password?>"></div></tr>
            <tr><div class="rememberme"><label><input type="checkbox" name="remember_me" value="">Remember me</label></div></tr>
            <tr><div class="loginbutton"><input type="submit" name="submit" value="Login"></div></tr>
            <tr><div class="forgetpasword"><a href="../view/forgetpass.html">Forget Password</a></div></tr>                                                          </tr>

            
            </div>
        </div>
      </div>
</form>




</body>
</html>