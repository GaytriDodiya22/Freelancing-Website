<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/style1.css" />
    <link rel="stylesheet" href="../css/form.css"/>
    <title>Sign Up Page!</title>
  </head>
  <body>
  <header>
      <ul>
        <li><a href="index.php" class="active-btn">Home</a></li>
        <li><a href="#">Gallary</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Registration</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </header>
    <section>
        <div class="container">
        <form action="contactcode.php" method="POST">
        <h1 class="h1">Contact Us</h1>
        <div class="container">
        <input type="text" placeholder="--------Customer Name-------"  name="Name" class="input-class" require> <br>
        <input type="text" placeholder="-------Type Of Function-e.g. Wedding or Pre Wedding-----"  name="FunctionType" class="input-class"require> <br>
        <input type="text" placeholder="-----Location----"  name="Location" class="input-class" require> <br>
        <input type="text" placeholder="--------Contact Number-------"  name="Contact" class="input-class" require> <br>
        <input type="date" placeholder="-------Starting Date------"  name="StartDate" class="input-class"require> <br>
        <input type="date" placeholder="------Ending Date-----"  name="EndDate" class="input-class" require> <br>
        <button type="submit" class="btn" name="btn_submit"> Click here to send it</button>
        </div>
        <p class="p">-------------   or sign up with   -----------------</p>
        </form>
    </section>
    <?php
    
?>
</body>
</html>