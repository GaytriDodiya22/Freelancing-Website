<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['loginBtn']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];

  $log_query = "SELECT * FROM signup WHERE email='$email' AND password='$password' LIMIT 1";
  $log_query_run = mysqli_query($conn,$log_query);

  if(mysqli_num_rows($log_query_run) > 0 )
  {
    foreach($log_query_run as $row)
    {
      // fatch user data for login admin
        $userId = $row['id'];
        $UserName = $row['UserName'];
        $email = $row['email'];
        $role_as = $row['role_as'];
    }

    // with the help for loop we authenticate
     
    $_SESSION['auth'] = "$role_as";
    // show login or authenticate user
    $_SESSION['auth_user'] = [
      'userId'=>$userId,
      'UserName'=>$UserName,
      'email'=>$email
    ];
    
    $_SESSION['status'] = "loged in sucessfully";
    header('Location: index.php');
  }
  else
  {
      
    $_SESSION['status'] = "invalid email or password";
    header('Location: login.php');
  }


}
else
{
    $_SESSION['status'] = "access denied";
    header('Location: login.php');
}

?>