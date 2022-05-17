<?php

include("config/dbcon.php");
include('authentication.php');

// distroy session
if(isset($_POST['logout_btn']))
{
  session_destroy();
  unset($_SESSION['auth']);
  unset($_SESSION['auth_user']);

  $_SESSION['auth_status'] = "logout sucessfully";
  header("location: login.php");
  exit(0);
}

if(isset($_POST['addUser']))
{
    $UserName = $_POST['UserName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Cpassword = $_POST['Cpassword'];

        if($password == $Cpassword)
        {
        $checkemail = "SELECT email FROM signup WHERE email='$email'";
        $checkemail_run = mysqli_query($conn,$checkemail);

          if(mysqli_num_rows($checkemail_run) > 0)
          {
             //already exist
             $_SESSION['status'] = "email id already exist";
             header("Location:registered.php");
          }
        else
        {
       
          $user_query = "INSERT INTO signup (UserName,email,password,Cpassword) VALUES ('$UserName','$email','$password','$Cpassword')";
          $user_query_run = mysqli_query($conn,$user_query);

             if($user_query_run)
            {
               $_SESSION['status'] = "user added Successfully";
               header("Location:registered.php");
            }
            else
            {
               $_SESSION['status'] = "user registration failed";
               header("Location:registered.php");
            }
        }
}
        else
        {
          $_SESSION['status'] = "password and conform password does not match";
          header("Location:registered.php");

        }
}

if(isset($_POST['UpdateUser']))
{
    $userId = $_POST['id'];
    $UserName = $_POST['UserName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE signup SET UserName='$UserName' , email='$email' , password='$password' WHERE id='$userId'";
    $query = mysqli_query($conn,$query);
    
    if($query_run)
    {
        $_SESSION['status'] = "user updated Successfully";
        header("Location:registered.php");
    }
    else
    {
        $_SESSION['status'] = "user updating failed";
        header("Location:registered.php");
    }
}
    
if(isset($_POST['delete_btn']))
{
        $userId = $_POST['id'];
        $query ="DELETE FROM signup WHERE id='$userId'";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            $_SESSION['status'] = "your Data is Deleted";
            header("Location:registered.php");
        }

        else
        {
            $_SESSION['status'] = "your Data is not Deleted";
            header("Location:registered.php");
        }
    }


// delete button for contact table
if(isset($_POST['delete_btn']))
{
        $userId = $_POST['Id'];
        $query ="DELETE FROM contact WHERE Id='$userId'";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            $_SESSION['status'] = "your Data is Deleted";
            header("Location:contact.php");
        }

        else
        {
            $_SESSION['status'] = "your Data is not Deleted";
            header("Location:contact.php");
        }
    }
?>