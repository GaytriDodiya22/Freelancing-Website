<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
        <?php 

        if(isset( $_SESSION['auth']))
           {
           echo $_SESSION['auth_user']['UserName'];
           
           }
           else
           {
             echo "not logged in";
           }
           ?>
           
        </button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><form action="code.php" method="POST">
      <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
    </form></li>

    </ul>
  </div>


</body>
</html>
