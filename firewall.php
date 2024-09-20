<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Validation</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Kanit:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="container" id="container">
        <form action="inc/code.php" method="post">
            <div class="h1"><h1>Firewall Login</h1></div>
            <div class="inputBx">
                        <input type="text" name="user" placeholder="Username">
                    </div>
                    <div class="inputBx">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="Button">
                        <input type="submit" value="Login" name="submit">
                    </div>
        <div class="toggle-container">
            <div class="toggle">
 
                <div class="toggle-panel toggle-right">
                    <h1>Welcome To Our Dialer   !</h1>
                    <p>Please enter your genuine Username and Password.</p>
                    
                </div>
            </div>
        </div>
    </div>
      <?php
      if(isset($_SESSION['status'])){
        ?>
        <h4 style="color:red;"><center><? echo $_SESSION['status']; ?></center></h4>
      <?php
      unset($_SESSION['status']);
      }
      ?>
      <div class="signup_link">
      </div>
    </form>
  </div>
</body>
</html>
