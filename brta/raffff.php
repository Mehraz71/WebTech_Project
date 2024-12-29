<?php
 $conn = mysqli_connect('127.0.0.1', 'root', '', 'brta');
 $sql = "select * from users where username ='admin'";
 $result = mysqli_query($conn, $sql);
 $user = mysqli_fetch_array($result,MYSQLI_ASSOC);

 if($user["usertype"] == "admin"){
    echo "PAISI";
 } 

include("userhome.html");


?>

