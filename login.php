<?php
session_start();
include('includs/header.php');
if(isset($_SESSION['auth']))
{
  $_SESSION['status'] = "your loged in";
  header('Location: index.php');
  exit();
}
?>
                           
<div class="section">
    
  <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 my-5">
 <?php

if(isset($_SESSION['auth_status']))
{
 ?>

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy !</strong> <?php echo $_SESSION['auth_status']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>
<?php
    unset($_SESSION['auth_status']);
}
?>
                <?php
                         include('message.php');
                         ?>
                    <div  class="card my-5">

                    
                      <div class="card-header bg-light">
                        <h5>Login Form</h5>
                      </div>
                      <div class="card-body">
                       
                        <form action="codelogin.php" method="POST">
                            <div class="form-group">
                                <label  >Email ID</label>
                                <input type="email" name="email" placeholder="Email id" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                               <button type="submit" name="loginBtn" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php
include('includs/script.php');
?>
<?php
include('includs/footer.php');
?>