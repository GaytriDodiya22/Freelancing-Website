<?php
session_start();
if(!isset($_SESSION['auth']))
{
  $_SESSION['auth_status'] = "login to access dhashbord";
  header('location: login.php');
  exit(0);
}

else{
    if($_SESSION['auth']== "1")
    {
       
    }
    else{
        $_SESSION['auth_status'] = "your not authorised as Admin";
        header('location: ../index.php');
        exit(0);
    }
}
?>

