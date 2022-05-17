<?php
session_start();
include("database.php");

if(isset($_POST['btn_submit']))
{
    $Name = $_POST['Name'];
    $FunctionType = $_POST['FunctionType'];
    $Location = $_POST['Location'];
    $Contact = $_POST['Contact'];
    $StartDate = date('y-m-d',strtotime($_POST['StartDate']));
    $EndDate = date('y-m-d',strtotime($_POST['EndDate']));

    $user_query = "INSERT INTO contact (Name,FunctionType,Location,Contact,StartDate,EndDate) VALUES ('$Name',' $FunctionType','$Location','$Contact',' $StartDate','$EndDate')";
    $user_query_run = mysqli_query($conn,$user_query);

             if($user_query_run)
            {
               $_SESSION['status'] = "user added Successfully";
               header("Location:index.php");
            }
            else
            {
               $_SESSION['status'] = "user registration failed";
               header("Location:registered.php");
            }

        }