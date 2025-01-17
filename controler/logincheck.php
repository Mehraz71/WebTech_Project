<?php
if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $pass=$_POST['pass'];
 $conn = mysqli_connect('127.0.0.1', 'root', '', 'brta');
 $sql = "select * from users where username ='$username'";
 $result = mysqli_query($conn, $sql);
 $user = mysqli_fetch_array($result,MYSQLI_ASSOC);

 if ($user) {
    
  if(password_verify($pass, $user["password"])){
    echo"pass match";
    
    if(isset($_POST['remember_me'])){

        setcookie('username',$_POST['name'], time()+60*60*24);
        setcookie('password',$_POST['pass'], time()+60*60*24);
       
    }
    else{
        setcookie('username','', time()-60*60*24);
        setcookie('password','', time()-60*60*24);
        
    }

    setcookie('logged_in', 'true', time() + 60 * 60 * 24, "/");

    if($user["usertype"]== "user"){
      session_start();
      $_SESSION['username'] = $username;
  
  
      header("location: ../view/home.php");

    }elseif ($user["usertype"] == "admin") {
      session_start();
      $_SESSION['username'] = $username;
  
  
      header("location: ../view/adminhome.php");

      
    }
 
   
   
  }
  else{
    
    header("Location: login.php?error=incorrect_password");
    exit;
  }
} else{
  header("Location: login.php?error=user_not_found");
  exit;
}

}














?>